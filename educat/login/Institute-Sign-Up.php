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
                    <a class="nav-link btn btn-white btn-round" href="Institute-Sign-In.php">SIGN IN</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
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
                        <h5>Sign Up</h5>
                        <span>Register a new membership</span>

                    </div>
                    <div class="content">                                                
                        <div class="input-group">
                            <input type="text" class="form-control" id="name" placeholder="Institute Name">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-account-circle"></i>
                            </span>
                        </div>
                            <span id="msgistname" class="alert hide alert2">Institute Name Should Not Be Blank<br><br></span>

                        <div class="input-group">
                            <input type="text" class="form-control" id="email" placeholder="Enter Email">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-email"></i>
                            </span>
                        </div>
                            <span id="msgemail" class="alert hide alert2">Email Should Not Be Blank<br><br></span>
                            <span id="msgvalidemail" class="alert hide alert2">Please Enter Valid Email<br><br></span>

                        <div class="input-group">
                            <input type="password" placeholder="Password" id="password" class="form-control" />
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-lock"></i>
                            </span>
                        </div>                        
                            <span id="msgpassword" class="alert hide alert2">Password Should Not Be Blank<br><br></span>
                            <span id="msgpasswordlen" class="alert hide alert2">Password Should Not Be Blank<br><br></span>
                    </div>
                    <div class="checkbox">
                            <input id="terms" type="checkbox" value="1" >
                            <label for="terms">
                                    I read and agree to the <a href="javascript:void(0);">terms of usage</a>
                            </label>
                        </div>
                            <span id="msgterm" class="alert hide alert2">Please click on terms<br><br></span>

                        <div class="alert text-center square hide" id="msgerror">Error in Register</div>
                        <div class="alert text-center square hide" id="msgpresent">Institute Already Present</div>
                        <div class="alert text-center squareright hide" id="msgcorrect">Registration Successfull</div>

                    <div class="footer text-center">
                        <button  id="submit" class="btn btn-primary btn-round btn-lg btn-block waves-effect waves-light" onclick="return regInstitute()" >SIGN UP</button>                        
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

function regInstitute()
{
      flag=1;
      if (!$('#msgerror').hasClass("hide")) {
          $('#msgerror').addClass("hide");
      };
      if (!$('#msgpresent').hasClass("hide")) {
          $('#msgpresent').addClass("hide");
      };
      if (!$('#msgcorrect').hasClass("hide")) {
          $('#msgcorrect').addClass("hide");
      };
      
      
      if (!$('#msgistname').hasClass("hide")) {
          $('#msgistname').addClass("hide");
      };
      if (!$('#msgemail').hasClass("hide")) {
          $('#msgemail').addClass("hide");
      };
      if (!$('#msgvalidemail').hasClass("hide")) {
          $('#msgvalidemail').addClass("hide");
      };
      if (!$('#msgpassword').hasClass("hide")) {
          $('#msgpassword').addClass("hide");
      };
      if (!$('#msgpasswordlen').hasClass("hide")) {
          $('#msgpasswordlen').addClass("hide");
      };
      if (!$('#msgterm').hasClass("hide")) {
          $('#msgterm').addClass("hide");
      };

        
    document.getElementById('submit').disabled = true; 
    var name=$.trim(document.getElementById('name').value);
    if(name=="")
    {
        flag=0;
        $('#msgistname').removeClass("hide");    
    }
    var email=$.trim(document.getElementById('email').value);
    if(email=="")
    {
        flag=0;
        $('#msgemail').removeClass("hide");    
    }
    if(email!="")
    {
        if(email_validate(email)==0)
        {
                flag=0;
                $('#msgvalidemail').removeClass("hide");            
        }
    }
    var password=$.trim(document.getElementById('password').value);
    if(password=="")
    {
        flag=0;
        $('#msgpassword').removeClass("hide");    
    }
    if(password!="")
    {
        if(password.length<6)
        {
                flag=0;
                $('#msgpasswordlen').removeClass("hide");            
        }
    }
    var terms=$.trim(document.getElementById('terms').checked);
    if(terms=="false")
    {
        flag=0;
        $('#msgterm').removeClass("hide");    
    }
    
    if(flag==1)
    {
        $.post('Validation/Institute.php',{name:name,email:email, password:password},
        function(res) {
            //alert(res);
            var string=$.trim(res);

            if(string=="TRUE")
            {
                $('#msgcorrect').removeClass("hide");
                window.location="Institute-Sign-In.php";
            }
            else if(string=="PRESENT")
            {
                $('#msgpresent').removeClass("hide");
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

  function email_validate(email)
  {
    var regMail = /^([_a-zA-Z0-9-]+)(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,3})$/;
    if(regMail.test(email) == false)
    {
      return 0;
    }
    else
    {
      return 1;
    }
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
