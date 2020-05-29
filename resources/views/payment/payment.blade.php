<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment</title>
    <style>
        .main-container{
            display: flex;
            justify-content: space-between;
        }
        .checkout-options{
            position: sticky;
        }
         .checkout-item{
            display: flex;
            justify-content: start;
            margin: 30px;
        }
        .ordered-items, .checkout-options{
            width:50%;
        }

        .tabs .tab a{
            color:#000;
        } /*Black color to the text*/

        .tabs .tab a:hover {
            background-color:#eee;
            color:#000;
        } /*Text color on hover*/

        .tabs .tab a.active {
            background-color:#888;
            color:#000;
        } /*Background and text color when a tab is active*/

        .tabs .indicator {
            background-color:#000;
        } /
    </style>
</head>
<body>
    <div class="main-container">
        <div class="ordered-items">
            <div class="checkout-item">
                <img src="/images/partssample.jpg" width="120" height="140">
                <div class="item-details">
                    <p><b>Axle</b></p>
                    <p>The axle is responsible for transferring power from the engine to the wheels. It is an important part when you want to move, brake and turn.</p>
                    <p>Unit price: <b><sup>KES</sup>10,000</b></p>
                </div>
            </div>

            <div class="checkout-item">
                <img src="/images/partssample.jpg" width="120" height="140">
                <div class="item-details">
                    <p><b>Axle</b></p>
                    <p>The axle is responsible for transferring power from the engine to the wheels. It is an important part when you want to move, brake and turn.</p>
                    <p>Unit price: <b><sup>KES</sup>10,000</b></p>
                </div>
            </div>
        </div>
        <div class="checkout-options">

        <div class="row">
    <div class="col s12">
      <ul class="tabs tabs-fixed-width tab-demo">
        <li class="tab col s3"><a href="#mpesa">MPesa</a></li>
        <li class="tab col s3"><a class="active" href="#stripe">Stripe</a></li>
      </ul>
    </div>
    <div id="mpesa" class="col s12">Test 1</div>
    <div id="stripe" class="col s12">Test 2</div>

  </div>
        </div>
    </div>
    
</body>
<script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script defer src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script   src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script defer type="text/javascript">
  $(document).ready(function(){
    $('.tabs').tabs();
  });
</script>
</html>