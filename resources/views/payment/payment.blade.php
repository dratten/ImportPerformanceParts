<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        </div>
    </div>
    
</body>
<script defer src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
</html>