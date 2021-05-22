>
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
                            <i class="fi-rr-check beside_icon"></i>Verify your email
                        </h3>

                        <div class="login_center_icon">
                            <i class="fi-rr-shield-check login_center_icon"></i>
                        </div>

                        <p style="font-weight:100;"> Dear User, we have sent a six - digit 
                        One time Password  (OTP)  to your email address (<b>adewaled01@gmail.com</b>). </p>

                    <form action="../index.php">

                        <div class="input_field_bar">
                            <div class="input_field_child">
                                <input style="text-align:center; width:100%;"
                                 type="number" 
                                 placeholder="OTP" 
                                 class="login_input"
                                 maxlength="6">
                            </div>
                        </div>

                        <div class="input_field_child">
                                <button class="login_btn">
                                        Confirm OTP
                                    <i class="fi-rr-check right_icon"></i>
                                </button>
                            </div>


                    </form>

                    </div>

                </div>

            </div>
