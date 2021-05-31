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

        <div class="checkout_main">
            <div class="checkout_left">
                    <div class="checkout_left_left">
                        <div class="checkout_product_image_bar">
                            <img src="images/sheep.jpg" alt="" class="product_img">
                            <div class="checkout_multiple_images_bar">
                                <img src="images/sheep.jpg" alt="Product Image" class="product_images">
                                <img src="images/product1.jpg" alt="Product Image" class="product_images">
                                <img src="images/product2.jpg" alt="Product Image" class="product_images">
                            </div>
                        
                            <h3>Product Description</h3>

                            <p class="product_desc">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                Temporibus, tempore?
                                 Expedita dolores ipsa, dicta rerum laboriosam officiis magnam est 
                                 tempora ipsum dolorum commodi explicabo totam illo deserunt architecto iste voluptatibus.
                            </p>

                            
                                                    
                        </div>
                    </div>
                    <div class="checkout_left_right">
                        <h3> Foreign Breed Sheep </h3>
                        <div class="star_collection">
                            <i class="fi-rr-star"></i>
                            <i class="fi-rr-star"></i>
                            <i class="fi-rr-star"></i>
                            <i class="fi-rr-star"></i>
                            <i class="fi-rr-star"></i>
                            <p class="product_price">$500</p>
                        </div>

                        <p>Select Quantity</p>

                        <div class="price_increment_widget">
                            <i class="fi-rr-shopping-cart-add beside_icon"></i>
                            <i class="fi-rr-minus-small beside_icon"></i>
                                <span> 0 </span>
                            <i class="fi-rr-plus-small right_icon"></i>
                        </div>

                        <div class="proceed_btn_widget">
                            <button class="proceed_btn"> Add to cart  
                                <i class="fi-rr-shopping-cart-add right_icon"></i>
                            </button>
                         </div>
                         

                    </div>
            </div>

            <div class="checkout_right">
                <h3> Delivery and returns </h3>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Asperiores voluptate eos dolor, eius dolorum eaque facilis neque atque cumque 
                obcaecati sequi ea delectus libero velit maxime iusto molestias modi at.</p>

                <ul>
                    <li> Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Aliquid repellat dolores quaerat facere molestias unde, reiciendis nam officiis hic, quod quidem 
                        consequuntur libero culpa laborum praesentium ad eaque, ipsum velit?
                    </li>
                    <li> Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Aliquid repellat dolores quaerat facere molestias unde, reiciendis nam officiis hic, quod quidem 
                        consequuntur libero culpa laborum praesentium ad eaque, ipsum velit?
                    </li>
                </ul>

                <div class="proceed_btn_widget">
                            <button class="proceed_btn"> Add to cart  
                                <i class="fi-rr-shopping-cart-add right_icon"></i>
                            </button>
                         </div>

            <!-- <div class="delivery_mode_option_bar">
                <div class="delivery_mode">  
                    <input type="radio" class="radio"> <span> Delivery at doorstep </span>
                </div>
                <div class="delivery_mode">  
                    <input type="radio" class="radio"> <span> PickUp delivery </span>
                </div>
                <div class="delivery_mode">  
                    <input type="radio" class="radio"> <span> Delivery at doorstep </span>
                </div>

                <p class="instruction">Please select a mode of payment</p>

                 <div class="delivery_mode">  
                    <input type="radio" class="radio"> <span> Payment on delivery </span>
                </div>

                <div class="proceed_btn_widget">
                    <button class="proceed_btn">Proceed 
                        <i class="fi-rr-angle-right right_icon"></i>
                    </button>
                </div>
            </div>   -->

            </div>

        </div>

        <div class="prod_suggest_widget">
            <h3>Products Suggestion</h3>

            <div class="product_item_widget">
                <div class="product_item">
                    <a href="product-checkout.php">
                        <img src="images/product1.jpg" alt="" class="product_img">
                        <p class="product_name">Lettuce</p>

                        <div class="star_collection">
                            <i class="fi-rr-star"></i>
                            <i class="fi-rr-star"></i>
                            <i class="fi-rr-star"></i>
                            <i class="fi-rr-star"></i>
                            <i class="fi-rr-star"></i>
                            <p class="product_price">$500</p>
                        </div>

                        </a>

                    <button class="add_to_cart">
                        Add to cart <i class="fi-rr-shopping-cart-add"></i>
                    </button>
                </div>

                <div class="product_item">
                    <img src="images/product2.jpg" alt="" class="product_img">
                    <p class="product_name">Eggs</p>

                    <div class="star_collection">
                        <i class="fi-rr-star"></i>
                        <i class="fi-rr-star"></i>
                        <i class="fi-rr-star"></i>
                        <i class="fi-rr-star"></i>
                        <i class="fi-rr-star"></i>
                        <p class="product_price">$500</p>
                    </div>

                    <button class="add_to_cart">
                        Add to cart <i class="fi-rr-shopping-cart-add"></i>
                    </button>
                </div>
                <div class="product_item">
                    <img src="images/product3.jpg" alt="" class="product_img">
                    <p class="product_name">Eggs</p>

                    <div class="star_collection">
                        <i class="fi-rr-star"></i>
                        <i class="fi-rr-star"></i>
                        <i class="fi-rr-star"></i>
                        <i class="fi-rr-star"></i>
                        <i class="fi-rr-star"></i>
                        <p class="product_price">$500</p>
                    </div>

                    <button class="add_to_cart">
                        Add to cart <i class="fi-rr-shopping-cart-add"></i>
                    </button>
                </div>
                <div class="product_item">
                    <img src="images/product4.jpg" alt="" class="product_img">
                    <p class="product_name">Chicken</p>
                    
                    <div class="star_collection">
                        <i class="fi-rr-star"></i>
                        <i class="fi-rr-star"></i>
                        <i class="fi-rr-star"></i>
                        <i class="fi-rr-star"></i>
                        <i class="fi-rr-star"></i>
                        <p class="product_price">$500</p>
                    </div>

                    <button class="add_to_cart">
                        Add to cart <i class="fi-rr-shopping-cart-add"></i>
                    </button>
                </div>
                <div class="product_item">
                    <img src="images/product5.jpg" alt="" class="product_img">
                    <p class="product_name">Fruits</p>

                    <div class="star_collection">
                        <i class="fi-rr-star"></i>
                        <i class="fi-rr-star"></i>
                        <i class="fi-rr-star"></i>
                        <i class="fi-rr-star"></i>
                        <i class="fi-rr-star"></i>
                        <p class="product_price">$500</p>
                    </div>

                    <button class="add_to_cart">
                        Add to cart <i class="fi-rr-shopping-cart-add"></i>
                    </button>
                </div>
                <div class="product_item">
                    <img src="images/product6.jpg" alt="" class="product_img">
                    <p class="product_name">Mushroom</p>

                    <div class="star_collection">
                        <i class="fi-rr-star"></i>
                        <i class="fi-rr-star"></i>
                        <i class="fi-rr-star"></i>
                        <i class="fi-rr-star"></i>
                        <i class="fi-rr-star"></i>
                        <p class="product_price">$500</p>
                    </div>

                    <button class="add_to_cart">
                        Add to cart <i class="fi-rr-shopping-cart-add"></i>
                    </button>
                </div>
                <div class="product_item">
                    <img src="images/sheep.jpg" alt="" class="product_img">
                    <p class="product_name">Sheep</p>

                    <div class="star_collection">
                        <i class="fi-rr-star"></i>
                        <i class="fi-rr-star"></i>
                        <i class="fi-rr-star"></i>
                        <i class="fi-rr-star"></i>
                        <i class="fi-rr-star"></i>
                        <p class="product_price">$500</p>
                    </div>

                    <button class="add_to_cart">
                        Add to cart <i class="fi-rr-shopping-cart-add right_icon"></i>
                    </button>
                </div>
            </div>
        </div>

        <?php include 'footer.php' ?>
</body>
</html>