<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="CSS/style.css">
        <link rel="stylesheet" href="CSS/uiIcons.css">
        <link rel="stylesheet" href="CSS/all.css">
        <link rel="stylesheet" href="CSS/mobile.css">
</head>
<body>
        <?php include 'header.php' ?>

        <div class="admin_parent_flex">
            <div class="admin_parent_left">

                <div class="admin_info">
                    <!-- <img src="images/sheep.jpg" alt="" class="admin_image"> -->
                    <h3>AgroMall User</h3>
                </div>

                <div class="side_bar_list">
                    <p><i class="fi-rr-home beside_icon"></i>Home</p>
                    <p><i class="fi-rr-apps beside_icon"></i>Categories</p>
                    <p><i class="fi-rr-shopping-cart beside_icon"></i>Orders</p>
                    <p><i class="fi-rr-mode-portrait beside_icon"></i>Customers</p>
                    <p><i class="fi-rr-box-alt beside_icon"></i>Deliveries</p>
                    <p><i class="fi-rr-dollar beside_icon"></i>Transactions</p>
                </div>
            </div>


        <div class="admin_parent_center">

                <div class="admin_categories">
                    <h3><i class="fi-rr-apps beside_icon"></i> Categories </h3>

                    <div class="create_cat_bar">
                        <input type="text" class="create_cat_input" placeholder="Input Category name">
                        <button class="create_cat_btn">Create <i class="fi-rr-plus right_icon"></i> </button>
                    </div>

                    <div class="admin_categories_main_widget">
                        <div class="admin_categories_children">
                            <h3> <i class="fas fa-tractor beside_icon"></i> Farm Produce </h3>
                        </div>

                        <div class="admin_categories_children">
                            <h3> <i class="fi-rr-user beside_icon"></i> Farm Produce </h3>
                        </div>

                        <div class="admin_categories_children">
                            <h3> <i class="fas fa-tractor beside_icon"></i> Farm Produce </h3>
                        </div>

                        <div class="admin_categories_children">
                            <h3> <i class="fas fa-tractor beside_icon"></i> Farm Produce </h3>
                        </div>

                        <div class="admin_categories_children">
                            <h3> <i class="fas fa-tractor beside_icon"></i> Farm Produce </h3>
                        </div>

                    </div>
                </div>

            <h3><i class="fi-rr-shopping-cart beside_icon"></i>Orders  </h3>

            <div class="order_inputs">
                <div class="order_inputs_cont">
                    <input type="text" class="search_order" placeholder="Search Order" />
                    <i class="fi-rr-search input_right_icon"></i>
                </div>
            </div>

            
            <div class="order_table_header">
                    <li class="numbers">S/N</li>
                    <li class="ref">Ref</li>
                    <li class="ord_date">Order date</li>
                    <li class="prod_name">Product</li>
                    <li class="prod_type">Product Type</li>
                    <li class="location">Location</li>
                    <li class="status">Status</li>
                    <li class="price">Price</li>
            </div>

                <div class="user_order_table">
                        <li class="numbers">1</li>
                        <li class="ref">#fer354</li>
                        <li class="ord_date">12/19/20</li>
                        <li class="prod_name">Milk Produce</li>
                        <li class="prod_type">Cattle Product</li>
                        <li class="location">Abuja</li>
                        <li class="status pending">
                            <i class="fi-rr-spinner-alt"></i>
                        </li>
                        <li class="price">#5600.00</li>
                    </div>

                    <div class="user_order_table even_row">
                        <li class="numbers">2</li>
                        <li class="ref">#fer354</li>
                        <li class="ord_date">12/19/20</li>
                        <li class="prod_name">Milk Produce</li>
                        <li class="prod_type">Cattle Product</li>
                        <li class="location">Abuja</li>
                        <li class="status pending">
                            <i class="fi-rr-spinner-alt"></i>
                        </li>
                        <li class="price">#5600.00</li>
                    </div>
                    <div class="user_order_table">
                        <li class="numbers">3</li>
                        <li class="ref">#fer354</li>
                        <li class="ord_date">12/19/20</li>
                        <li class="prod_name">Milk Produce</li>
                        <li class="prod_type">Cattle Product</li>
                        <li class="location">Abuja</li>
                        <li class="status pending">
                            <i class="fi-rr-check"></i>
                        </li>
                        <li class="price">#5600.00</li>
                    </div>
                    <div class="user_order_table even_row">
                        <li class="numbers">4</li>
                        <li class="ref">#fer354</li>
                        <li class="ord_date">12/19/20</li>
                        <li class="prod_name">Milk Produce</li>
                        <li class="prod_type">Cattle Product</li>
                        <li class="location">Abuja</li>
                        <li class="status pending">
                            <i class="fi-rr-check"></i>
                        </li>
                        <li class="price">#5600.00</li>
                    </div>

                    <button class="more_orders">
                        Check more orders <i class="fi-rr-angle-right right_icon"></i>
                    </button>

                    <div>

                        <h3><i class="fi-rr-mode-portrait beside_icon"></i>Customers  </h3>

                        <div class="cat_cont">
                            <div class="cat_flex">
                                <div class="each_user_bar">
                                    <div class="each_const_cont">
                                        <img src="images/sheep.jpg" alt="" class="customer_img">
                                        <h5>Daniel Adewale </h5>
                                    </div>
                                    
                                </div>

                                <div class="each_user_bar">
                                    <div class="each_const_cont">
                                        <img src="images/sheep.jpg" alt="" class="customer_img">
                                        <h5>Daniel Adewale </h5>
                                    </div>
                                    
                                </div>
                            </div>

                        </div>

                    </div>

                    <div>
                        <h3><i class="fi-rr-dollar beside_icon"></i>Transactions  </h3>
                        <div class="transact_widget">
                                <div class="order_table_header">
                                    <li class="numbers">S/N</li>
                                    <li class="ref">Ref</li>
                                    <li class="ord_date">Payment date</li>
                                    <li class="prod_name">Payment for</li>
                                    <li class="prod_type">Category</li>
                                    <li class="location">Location</li>
                                    <li class="status">Status</li>
                                    <li class="price">Amount</li>
                                </div>

                                <div class="user_order_table even_row">
                                    <li class="numbers">4</li>
                                    <li class="ref">#fer354</li>
                                    <li class="ord_date">12/19/20</li>
                                    <li class="prod_name">Milk Produce</li>
                                    <li class="prod_type">Cattle Product</li>
                                    <li class="location">Abuja</li>
                                    <li class="status pending">
                                        <i class="fi-rr-check"></i>
                                    </li>
                                    <li class="price">#5600.00</li>
                                </div>

                        </div>
                    </div>

        </div>

        </div>


        <?php include 'footer.php' ?>
</body>
</html>