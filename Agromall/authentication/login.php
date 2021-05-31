<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgroMall Login </title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/uiIcons.css">
    <link rel="stylesheet" href="../CSS/all.css">
    <link rel="stylesheet" href="../CSS/mobile.css">
</head>
<body>

                <?php include_once '../header.php' ?>

            <div class="login_main">
                <div class="login_left">
                    <div>
                        <h3 class="login_header">
                            <i class="fi-rr-arrow-left beside_icon"></i>Login to <span>AgroMall</span>
                        </h3>

                        <div class="login_center_icon">
                            <i class="fi-rr-user login_center_icon"></i>
                        </div>

                        <form action="../index.php">

                        <div class="input_field_bar">
                            <div class="input_field_child">
                                <i class="fi-rr-user input_left_icon"></i>
                                <input type="text" placeholder="email Address | mobile number" class="login_input">
                            </div>

                            <div class="input_field_child">
                                <i class="fi-rr-lock-alt input_left_icon"></i>
                                <input type="password" placeholder="Password" class="login_input">
                                <span class="forgotten">Forgotten Password</span>
                            </div>

                            <div class="input_field_child">
                                <button class="login_btn">
                                    Sign In

                                    <i class="fi-rr-arrow-right right_icon"></i>
                                </button>
                            </div>

                        </div>

                        </form>

                        <p class="create_acc_note">Don't have an account? 
                            <span class="create_acc_btn">Create an account</span>
                        </p>

                    </div>
                </div>

                <div class="login_right">
                    <div>
                        <h3 class="login_header">
                        <i class="fi-rr-plus beside_icon"></i>
                            Create Account with <span>AgroMall</span>
                        </h3>

                        <form action="../index.php">

                        <div class="input_field_bar">
                            <div class="input_field_child">
                                <i class="fi-rr-user input_left_icon"></i>
                                <input type="text" placeholder="First Name" class="login_input">
                            </div>

                            <div class="input_field_child">
                                <i class="fi-rr-user input_left_icon"></i>
                                <input type="text" placeholder="Last Name" class="login_input">
                            </div>
                            <div class="input_field_child">
                                <i class="fi-rr-calendar input_left_icon"></i>
                                <input type="date" placeholder="Date of Birth" class="login_input">
                            </div>

                            <div class="input_field_child">
                                <i class="fi-rr-envelope input_left_icon"></i>
                                <input type="email" placeholder="Email Address" class="login_input">
                            </div>

                            <div class="input_field_child">
                                <i class="fi-rr-mobile input_left_icon"></i>
                                <input type="number" placeholder="Mobile number" class="login_input">
                            </div>

                            <div class="input_field_child">
                                <i class="fi-rr-home input_left_icon"></i>
                                <input type="text" placeholder="Home Address" class="login_input">
                            </div>

                            <p> <i class="fi-rr-lock-alt beside_icon"></i>Setup Password </p>

                            <div class="input_field_child">
                                <i class="fi-rr-lock-alt input_left_icon"></i>
                                <input type="password" placeholder="Password" class="login_input">
                            </div>
                            <div class="input_field_child">
                                <i class="fi-rr-check input_left_icon"></i>
                                <input type="password" placeholder="Confirm Password" class="login_input">
                            </div>


                            <div class="input_fild_child">
                            <p>By clicking Sign Up, you have agreed with all terms and condition of AgroMall.</p>
                                <button class="login_btn">
                                    Sign Up

                                    <i class="fi-rr-plus right_icon"></i>
                                </button>
                            </div>

                            <p class="signIn_acc_note">Already have an account? 
                            <span class="signIn_acc_btn">Sign In </span>
                        </p>

                        </div>

                        </form>

                    </div>  
                </div>
                
            </div>
    
</body>

<script>
    var create_account_page_btn, create_account_page, login_account;
    
    create_account_page_btn = document.getElementsByClassName("create_acc_btn")[0];
    create_account_page = document.getElementsByClassName("login_right")[0];
    login_account = document.getElementsByClassName("login_left")[0];

    create_account_page_btn.onclick = function(){
        create_account_page.style.display ="block";
        login_account.style.display = "none";
    }


    signIn_account_page_btn = document.getElementsByClassName("signIn_acc_btn")[0];
    SignIn_account_page = document.getElementsByClassName("login_left")[0];
    SignIn_account = document.getElementsByClassName("login_right")[0];

    signIn_account_page_btn.onclick = function(){
        SignIn_account_page.style.display ="block";
        SignIn_account.style.display = "none";
    } 
</script>
</html>