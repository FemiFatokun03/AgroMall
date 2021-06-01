<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile </title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/uiIcons.css">
    <link rel="stylesheet" href="CSS/all.css">
    <link rel="stylesheet" href="CSS/mobile.css">
</head>
<body>
        <?php include 'header.php' ?>

            <div class="shop_main">
              
                
                <div class="admin_parent_flex">

                    <div class="admin_parent_left">
                        <div class="side_bar_list">
                            <h5 class="sub_header"> Daniel Adewale </h5>
                            <p> <i class="fi-rr-user beside_icon"></i> My Account </p>
                            <p> <a href="cart.php"> <i class="fi-rr-shopping-cart beside_icon"></i> My Cart  </a></p>
                            <p> <i class="fi-rr-paper-plane beside_icon"></i> My Orders</p>
                            <p> <i class="fi-rr-heart beside_icon"> </i> Saved Items </p>
                            <p> <i class="fi-rr-dollar beside_icon"></i> My Transactions</p>
                        </div>
                    </div>


                    <div class="admin_parent_center">

                    <h3> My Account </h3>
                        <div class="account_details">
                            
                        <div class="account_image">
                            <img src="images/sheep.jpg" alt="User Image" />
                            <i class="fi-rr-camera" type="file"></i>
                        </div>

                            <div class="user_details">
                                 <h4> Account Details <span class="fi-rr-pencil"></span></h4> 
                                    <hr>

                                 <h4> Daniel Adewale </h4>
                                 <p> <i class="fi-rr-envelope beside_icon"></i>adewaled01@gmail.com </p>
                                 <button class="proceed_btn"> <i class="fi-rr-lock-alt beside_icon"></i>Change Password </button>
                            </div>
                            <div class="user_details">
                                <h4> Address Details <span class="fi-rr-pencil"></span></h4> 
                                    <hr>

                                 <p> A6 Bible Society Road, Kakuri Kaduna. </p>
                                 <p> A6 Bible Society Road, Kakuri Kaduna. </p>
                                 <b> <i class="fas fa-phone beside_icon"></i>+2348188869197 </b>
                                 <button class="proceed_btn"> <i class="fi-rr-plus beside_icon"></i> Add Address </button>
                            </div>
  
                                
                        </div>

                        <h3><i class="fi-rr-paper-plane beside_icon"></i>My orders  </h3>

                        <div class="order_inputs">
                            <div class="order_inputs_cont">
                                <input type="text" class="search_order" placeholder="Search my order" />
                                <i class="fi-rr-search input_right_icon"></i>
                            </div>
                        </div>

                        <div class="order_inputs">
                            <div class="order_inputs_cont">
                                <select input type="text" class="search_order">
                                    <option> All </option>
                                    <option> Pending </option>
                                    <option> Delivered </option>
                                </select>
                            </div>
                        </div>


                        <div class="order_table_header">
                                <li class="numbers"></li>
                                <li class="ref"> Voucher </li>
                                <li class="ord_date">Order date</li>
                                <li class="ord_date">Del. date</li>
                                <li class="status">Status</li>
                                <li class="price">Price (₦)</li>
                                <li class="price">Delivery Fee (₦)</li>
                        </div>

                            <div class="user_order_table">
                                    <li class="numbers">1</li>
                                    <li class="ref">#fer354</li>
                                    <li class="ord_date">12-04-20</li>
                                    <li class="ord_date"> 30-05-20 </li>
                                    <li class="status pending">
                                        <i class="fi-rr-spinner-alt"></i>
                                    </li>
                                    <li class="price">5600.00</li>
                                    <li class="price">00.00</li>
                                </div>

                                <div class="user_order_table even_row">
                                    <li class="numbers">2</li>
                                    <li class="ref">#fer354</li>
                                    <li class="ord_date">12-04-20</li>
                                    <li class="ord_date"> 30-05-20 </li>
                                    <li class="status pending">
                                        <i class="fi-rr-spinner-alt"></i>
                                    </li>
                                    <li class="price">5600.00</li>
                                    <li class="price">600.00</li>
                                </div>
                                <div class="user_order_table">
                                    <li class="numbers">3</li>
                                    <li class="ref">#fer354</li>
                                    <li class="ord_date">12-04-20</li>
                                    <li class="ord_date"> 30-05-20 </li>
                                    <li class="status pending">
                                        <i class="fi-rr-check"></i>
                                    </li>
                                    <li class="price">5600.00</li>
                                    <li class="price">560.00</li>
                                </div>
                                <div class="user_order_table even_row">
                                    <li class="numbers">4</li>
                                    <li class="ref">#fer354</li>
                                    <li class="ord_date">12-04-20</li>
                                    <li class="ord_date"> 30-05-20 </li>
                                    <li class="status pending">
                                        <i class="fi-rr-check"></i>
                                    </li>
                                    <li class="price">5600.00</li>
                                    <li class="price">600.00</li>
                                </div>

                                <div class="product_item_widget">
                            
                            <h3>
                                <i class="fi-rr-heart beside_icon"></i>Saved Items
                            </h3>

                                <div class="create_cat_bar">
                                    <input type="text" class="create_cat_input" placeholder="Search item">
                                    <button class="create_cat_btn">Search <i class="fi-rr-search right_icon"></i> </button>
                                </div>

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

                        <h3><i class="fi-rr-dollar beside_icon"></i> My Transactions  </h3>
                        <div class="transact_widget">
                                <div class="order_table_header">
                                    <li class="numbers"></li>
                                    <li class="ref">Reference</li>
                                    <li class="ord_date">Payment date</li>
                                    <!--  Payment for signifies either One of the product in the cart or the whole Category -->
                                    <li class="prod_name">Payment for</li>
                                    <li class="location">Location</li>
                                    <li class="status">Status</li>
                                    <li class="price">Amount (₦)</li>
                                </div>

                                <div class="user_order_table even_row">
                                    <li class="numbers">1</li>
                                    <li class="ref">#fer354</li>
                                    <li class="ord_date">12-09-20</li>
                                    <li class="prod_name"> Ata rodo and others </li>
                                    <li class="location">Abuja</li>
                                    <li class="status pending">
                                        <i class="fi-rr-check"></i>
                                    </li>
                                    <li class="price">5600.00</li>
                                </div>

                                <div class="user_order_table">
                                    <li class="numbers">2</li>
                                    <li class="ref">#fer354</li>
                                    <li class="ord_date">12-09-20</li>
                                    <li class="prod_name"> Ata rodo and others </li>
                                    <li class="location">Abuja</li>
                                    <li class="status pending">
                                        <i class="fi-rr-check"></i>
                                    </li>
                                    <li class="price">5600.00</li>
                                </div>


                        </div>

                    </div>
                </div>
                

            </div>


         <?php include 'footer.php' ?> 
</body>
</html>