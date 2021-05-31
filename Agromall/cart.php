<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Display </title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/uiIcons.css">
    <link rel="stylesheet" href="CSS/all.css">
    <link rel="stylesheet" href="CSS/mobile.css">
</head>
<body>
        <?php include 'header.php' ?>

            <div class="cart_main">
                <h3>
                    <i class="fi-rr-shopping-cart beside_icon"></i>My Cart <span> (3 Items) </span>
                </h3>

                <div class="cart_items_bar">
                    <div class="cart_header">
                        <div class="cart_item_header item"> Item </div>
                        <div class="cart_item_header quantity"> Quantity </div>
                        <div class="cart_item_header unit_price">Unit Price (₦)</div>
                        <div class="cart_item_header sub_total">Sub Total (₦) </div>
                    </div>

                     <div class="cart_item">
                        <div class="cart_item_header item cart_prod_img_widget">
                            <img src="images/sheep.jpg" class="cart_prod_img" />
                            <div class="cart_prod_texts">
                                <h4> Foreign Breed Sheep </h4> 
                            </div>

                        </div>

                        <div class="cart_item_element quantity"> 20 </div>
                        <div class="cart_item_element unit_price"> 5,000. 00</div>
                        <div class="cart_item_element sub_total">200,000.00 </div>
                        <div class="cart_item_element fas fa-times" id="cancel_icon"></div>
                    </div>


                    <div class="cart_item">
                        <div class="cart_item_header item cart_prod_img_widget">
                            <img src="images/sheep.jpg" class="cart_prod_img" />
                            <div class="cart_prod_texts">
                                <h4> Foreign Breed Sheep </h4> 
                            </div>
                        </div>

                        <div class="cart_item_element quantity"> 20 </div>
                        <div class="cart_item_element unit_price"> 5,000. 00</div>
                        <div class="cart_item_element sub_total">200,000.00 </div>
                        <div class="cart_item_element fas fa-times" id="cancel_icon"></div>
                    </div>


                    <div class="cart_item">
                        <div class="cart_item_header item cart_prod_img_widget">
                            <img src="images/sheep.jpg" class="cart_prod_img" />
                            <div class="cart_prod_texts">
                                <h4> Foreign Breed Sheep </h4> 
                            </div>
                        </div>

                        <div class="cart_item_element quantity"> 20 </div>
                        <div class="cart_item_element unit_price"> 5,000. 00</div>
                        <div class="cart_item_element sub_total">200,000.00 </div>
                        <div class="cart_item_element fas fa-times" id="cancel_icon"></div>
                    </div>

                </div>

                <div class="total_widget">
                        <p> This amount doesn't include delivery fee.</p>
                        <h4> Total - <span> ₦ </span> <span>600,000.00</span>
                </div>

                <div class="proceed_to_checkout">
                <button class="proceed_btn continue_btn">Continue Shopping <i class="fi-rr-shopping-cart right_icon"></i></button>
                    <button class="proceed_btn">Proceed to Checkout <i class="fi-rr-angle-right right_icon"></i></button>
                </div>

            </div>

         <?php include 'footer.php' ?> 
</body>
</html>