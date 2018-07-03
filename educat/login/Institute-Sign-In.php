﻿<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>Vidyarthi Vigyan Manthan</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Custom Css -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/authentication.css">
    <link rel="stylesheet" href="assets/css/color_skins.css">
</head>

<body class="theme-purple authentication sidebar-collapse">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top navbar-transparent">
    <div class="container">        
        <div class="navbar-translate n_logo">
            <a class="navbar-brand" href="javascript:void(0);" title="" target="_blank">Vidyarthi Vigyan Manthan</a>
            <button class="navbar-toggler" type="button">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-white btn-round" href="Institute-Sign-Up.php">SIGN UP</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
<div class="page-header">
    <div class="page-header-image" style="background-image:url(assets/images/login.jpg)"></div>
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="card-plain">
                <form class="form" method="" action="">
                    <div class="header">
                        <div class="logo-container">
                            <img src="assets/images/logo.svg" alt="">
                        </div>
                        <h5>Log in</h5>
                    </div>
                    <div class="content">                                                
                        <div class="input-group input-lg">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Institute Email">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-account-circle"></i>
                            </span>
                        </div>
                        <div class="input-group input-lg">
                            <input type="password" placeholder="Password" id="password" name="password" class="form-control" />
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-lock"></i>
                            </span>
                        </div>
                    </div>
                    <div class="footer text-center">
 <button type="submit" id="submit" onclick="return checklogin()" class="btn btn-primary btn-round btn-lg btn-block ">SIGN IN</button>

                        <h5><a href="#" class="link">Forgot Password?</a></h5>
                        <div class="alert text-center square hide" id="msguser">Username should not blank</div>
                        <div class="alert text-center square hide" id="msgpass">Password should not blank</div>
                        <div class="alert text-center square hide" id="msgboth">username & Password should not blank</div>
                        <div class="alert text-center square hide" id="msgerror">Info! Invalid Credentials</div>
                        <div class="alert text-center squareright hide" id="msgcorrect">Info! Valid Credentials </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <nav>
                <ul>

                    <li><a href="#" target="_blank">About Us</a></li>
                    <li><a href="#;">FAQ</a></li>
                </ul>
            </nav>
            <div class="copyright">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>,
                <span> © vvm.org.in. Powered by Vijnana Bharati</span>
            </div>
        </div>
    </footer>
</div>

<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

<script>
   $(".navbar-toggler").on('click',function() {
    $("html").toggleClass("nav-open");
});
//=============================================================================
$('.form-control').on("focus", function() {
    $(this).parent('.input-group').addClass("input-group-focus");
}).on("blur", function() {
    $(this).parent(".input-group").removeClass("input-group-focus");
});

function checklogin(){
    flag=1;
      if (!$('#msguser').hasClass("hide")) {
          $('#msguser').addClass("hide");
      };
      if (!$('#msgpass').hasClass("hide")) {
          $('#msgpass').addClass("hide");
      };
      if (!$('#msgerror').hasClass("hide")) {
          $('#msgerror').addClass("hide");
      };
      if (!$('#msgcorrect').hasClass("hide")) {
          $('#msgcorrect').addClass("hide");
      };
      if (!$('#msgboth').hasClass("hide")) {
          $('#msgboth').addClass("hide");
      };

    
    document.getElementById('submit').disabled = true; 
    var username=$.trim(document.getElementById('username').value);
    var password=$.trim(document.getElementById('password').value);

    if(username=="" && password=="")
    {
        flag=0;
        $('#msgboth').removeClass("hide");
    }

    if(username=="" && password!="")
    {
        flag=0;
        $('#msguser').removeClass("hide");
    }
    if(password=="" && username!="")
    {
        flag=0;
        $('#msgpass').removeClass("hide");
    }

    if(flag==1)
    {
        $.post('Validation/Institute-login-check.php',{username:username,password:password},
        function(res) {
            //alert(res);
            var string=$.trim(res);

            if(string=="TRUE")
            {
                $('#msgcorrect').removeClass("hide");
                window.location="Institute/";
            }
            else
            {
                //alert();
                $('#msgerror').removeClass("hide");
            }    

        }
        );
    }

    document.getElementById('submit').disabled = false;
    return false;

}
</script>
<style>
.square{
    background-color:red;
    color:white;font-weight:bold;
}
.squareright{
    background-color:green;
    color:white;font-weight:bold;

}
.alert2{
        margin-top:-40px;
        margin-bottom:20px !important;
        color:red;
        font-weight:bold;
        font-size:0.8em;
}
.hide{
        display:none;
}
</style>

</body>
</html>
