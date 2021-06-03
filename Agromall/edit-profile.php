<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Profile </title>
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

                    <h3> Edit my account </h3>
                        <div class="account_details">
                            
                        <div class="account_image">
                            <img src="images/sheep.jpg" alt="User Image" />
                            <i class="fi-rr-camera" type="file"></i>
                        </div>

                            <div class="user_details">
                                 <h4> Edit Account Details <span class="fi-rr-pencil"></span></h4> 
                                    <hr>

                                 <input type="text" placeholder="Edit name">
                                 <input type="text" placeholder="Edit Email Address ">

                                 
                                 <button class="proceed_btn"> <i class="fi-rr-save beside_icon"></i> Save changes </button>
                            </div>
                            <div class="user_details">
                                <h4> Edit Address Details <span class="fi-rr-pencil"></span></h4> 
                                    <hr>

                                    <input type="text" placeholder="Edit Address">
                                    <input type="text" placeholder="Input New Address ">
                                    <input type="text" placeholder="Input New mobile number"> 
                                 <button class="proceed_btn"> <i class="fi-rr-save beside_icon"></i> Save Changes </button>
                            </div>
  
                                
                        </div>
                    </div>
        </div>

        </div>
    </div>

         <?php include 'footer.php' ?> 
</body>
</html>