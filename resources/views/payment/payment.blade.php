<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment</title>
    <style>
        .payment-success{
            text-align: center;
            padding: 10px;
        }
        .main-container {
            display: flex;
            justify-content: space-between;
        }

        .checkout-options {
            position: fixed;
            margin-left: 30px;
            left: 50%;
        }

        .checkout-item {
            display: flex;
            justify-content: start;
            margin: 30px;
        }

        .ordered-items,
        .checkout-options {
            width: 50%;
        }

        .tabs .tab a {
            color: #00c853;
            /*Custom Text Color*/
        }

        .tabs .tab a:hover {
            color: #00e676;
            /*Custom Color On Hover*/
        }

        .tabs .tab a:focus.active {
            color: #00e676;
            /*Custom Text Color While Active*/
            background-color: #00c85336;
            /*Custom Background Color While Active*/
        }

        .tabs .tab a:hover,
        .tabs .tab a.active {
            background-color: transparent;
            color: #00e676;
        }

        .tabs .indicator {
            background-color: #00e676;
            /*Custom Color Of Indicator*/
        }

        .header {
            display: flex;
            justify-content: start;
            margin-left: 20px;
        }

        #back {
            margin-top: 10px;
            margin-right: 20px;
        }

        .item-details {
            margin-left: 15px;
        }

        .item-details p {
            margin: 5px;
        }

        .vr {
            width: 1px;
            background-color: #000;
            top: 0;
            bottom: 0;
        }

        #mpesa-button {
            min-width: 94% !important;
        }

        #stripe-button {
            min-width: 99% !important;
            margin-top: 10px;
            margin-left: 5px;
        }

        #total-amount-text {
            margin-left: 6px;
            margin-top: 30px;
        }

        #mpesa-action,
        #stripe-action {
            margin-right: 30px;
        }

        .header {
            background-color: white;
        }

        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
        }

        .sticky+.main-container {
            padding-top: 60px;
        }
    </style>
</head>

<body>
 
    <div id="header" class="header">
        <div class="valign-wrapper">
            <i style="cursor: pointer" id="back" class="material-icons">keyboard_arrow_left</i>
        </div>
        <div class="valign-wrapper">
            <h5>My Items</h5>
        </div>
    </div>
    <div class="main-container">
        <div class="ordered-items">
        @if (Session::has('cart'))
        @foreach (Session::get('cart') as $item)
        <div class="checkout-item">
           <img src="{{$item['image']}}" width="115" height="140">
           <div class="valign-wrapper">
               <div class="item-details">
                   <p><b>{{$item['name']}}</b></p>
                   <p>Unit price: <b><sup>KES</sup>{{$item['price']}}</b></p>
               </div>
           </div>
       </div>
        @endforeach
        @endif

           
        </div>
        <div class="vr">&nbsp;</div>
        <div class="checkout-options">

            <div class="row tabs-container">
                <div class="col s12">
                    <ul class="tabs tabs-fixed-width tab-demo">
                        <li class="tab col s3"><a href="#mpesa">MPesa</a></li>
                        <li class="tab col s3"><a class="active" href="#stripe">Stripe</a></li>
                    </ul>
                </div>

                <div id="mpesa" class="col s12">
                    <div id="mpesa-action" class="row">
                        <h5 id="total-amount-text">Total Amount: <sup>KES</sup> {{Session::get('total')}}</h5>
                        <div class="input-field col s12">
                            <input id="phone" type="tel" class="validate">
                            <label for="phone">Phone Number</label>
                            <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
                        </div>
                    </div>
                    <button id="mpesa-button" class="btn waves-effect waves-light green accent-3" type="submit"
                        name="action">MPESA
                    </button>
                </div>

                <form role="form" action="{{ route('stripe.pay') }}" method="post" class="require-validation"
                    data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                    @csrf

                    <div id="stripe" class="col s12">
                        <div id="stripe-action" class="row">
                            <h5 id="total-amount-text">Total Amount: <sup>KES</sup>{{Session::get('total')}}</h5>
                            <div class="input-field col s12">
                                <input id="card_number" type="number" class="validate">
                                <label for="card_number">Card Number</label>
                                <span class="helper-text" data-error="wrong" data-success="right"> Card Number Helper
                                    text</span>
                            </div>

                            <div class="input-field col s12">
                                <input id="card_verification_number" type="number" placeholder="For example: 123"
                                    class="validate">
                                <label for="card_verification_number">CVV</label>
                                <span class="helper-text" data-error="wrong" data-success="right">CVV Helper text</span>
                            </div>

                            <div class="input-field col s12">
                                <input type="text" class="datepicker" placeholder="Expiry Date">
                            </div>
                            <button id="stripe-button" class="btn waves-effect waves-light deep-purple accent-3"
                                type="submit" name="action">Stripe
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script defer src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script defer type="text/javascript">
    $(document).ready(function () {
        $('.tabs').tabs({
            onShow: tabShown
        });
        $('.datepicker').datepicker();
    });

    window.onscroll = function () {
        makeSticky()
    };

    var header = document.getElementById("header");
    var sticky = header.offsetTop;

    let makeSticky = () => {
        if (window.pageYOffset >= sticky) {
            header.classList.add("sticky")
        } else {
            header.classList.remove("sticky");
        }
    }
    let tabShown = (obj) => {
        switch (obj.id) {
            case 'stripe':
                $('.tabs .tab a').css({
                    'color': '#651fff'
                })
                $('.tabs .tab a:hover').css({
                    'color': '#651fff'
                })

                $('.tabs .tab a:focus.active').css({
                    'color': '#651fff',
                    'background-color': '#ffffff'
                })
                $('.tabs .tab a:hover, .tabs .tab a.active').css({
                    'color': '#651fff'
                })
                $('.tabs .indicator').css({
                    'background-color': '#651fff'
                })
                break;
            case 'mpesa':

                $('.tabs .tab a').css({
                    'color': '#00e676'
                })
                $('.tabs .tab a:hover').css({
                    'color': '#00e676'
                })
                $('.tabs .tab a:focus.active').css({
                    'color': '#00e676',
                    'background-color': '#ffffff'
                })
                $('.tabs .tab a:hover, .tabs .tab a.active').css({
                    'color': '#00e676'
                })
                $('.tabs .indicator').css({
                    'background-color': '#00e676'
                })
                break;
        }
    }


    


    $(function () {
        var $form = $(".require-validation");
        $('form.require-validation').bind('submit', function (e) {
            var $form = $(".require-validation");

            var dateValue = $('#datepicker').val();

            console.log(dateValue)

            if (!$form.data('cc-on-file')) {
                e.preventDefault();
                Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                Stripe.createToken({
                    number: $('.card_number').val(),
                    cvc: $('.card-verification_number').val(),
                    exp_month: 12,
                    exp_year: 2024
                }, stripeResponseHandler);
            }

        });

        function stripeResponseHandler(status, response) {
            if (response.error) {
                console.log(response.error.message)
            } else {
                // token contains id, last4, and card type
                var token = response['id'];
                // insert the token into the form so it gets submitted to the server
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }

    });


  document.getElementById('back').addEventListener('click', ()=>{
      window.history.back()
  })
</script>

</html>