<!-- gabarit.php
/ 25/05/2018 -->

<!DOCTYPE html>
<html>
<head>
    <title>NGRNetwork</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="content/img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="content/style/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="content/style/icon.css">
    <link rel="stylesheet" href="content/style/loader.css">
    <link rel="stylesheet" href="content/style/idangerous.swiper.css">
    <link rel="stylesheet" href="content/style/jquery-ui.css">
    <link rel="stylesheet" href="content/style/magnific.css">
    <link rel="stylesheet" href="content/style/stylesheet.css">
    <link rel="stylesheet" href="content/style/custom1.css">

    <!--[if lt IE 10]>
    <link rel="stylesheet" type="text/css" href="content/style/ie-9.css" />
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body >

<script>


    // This function is called when someone finishes with the Login
    // Button.  See the onlogin handler attached to it in the sample
    // code below.
    function checkLoginState() {
        FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
        });
    }

    window.fbAsyncInit = function() {
        FB.init({
            appId      : '1753135731437022',
            cookie     : true,
            xfbml      : true,
            version    : 'v3.0'
        });

        FB.AppEvents.logPageView();

        FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
        });


    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    // This is called with the results from from FB.getLoginStatus().
    function statusChangeCallback(response) {
        console.log('statusChangeCallback');
        console.log(response);
    }

</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.0&appId=236773417076212&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>



<!-- THE LOADER -->

<div class="be-loader">
    <div class="spinner">
        <img src="content/img/logo-loader.png"  alt="">
        <p class="circle">
			  <span class="ouro">
			    <span class="left"><span class="anim"></span></span>
			    <span class="right"><span class="anim"></span></span>
			  </span>
        </p>
    </div>
</div>
<!-- THE HEADER -->
<header>
    <div class="container-fluid custom-container">
        <div class="row no_row row-header">
            <div class="brand-be">
                <a href="index.php">
                    <img class=" be_logo logo-c active"  src="content/img/logo.png" alt="logo" >
                    <img class="logo-c be_logo" src="content/img/logo-green.png" alt="logo" >
                    <img  class="logo-c be_logo" src="content/img/logo-orang.png" alt="logo" >
                    <img class="logo-c be_logo" src="content/img/logo-red.png" alt="logo">
                </a>
            </div>
            <div class="header-menu-block">
                <button class="cmn-toggle-switch cmn-toggle-switch__htx"><span></span></button>
                <ul class="header-menu" id="one">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php?action=v_explore">Explore</a></li>
                    <li class="ad-work-li"><a class="btn color-4 hover-7" href="index.php?action=v_event"><i class="fa fa-plus"></i>Add Event </a></li>
                    <li class="ad-work-li"><a class="btn color-3 hover-5" href="index.php?action=v_awip"><i class="fa fa-plus"></i>Add WIP </a></li>
                    <li class="ad-work-li"><a class="btn color-1" href="index.php?action=v_cos"><i class="fa fa-plus"></i>Add Cosplay </a></li>
                </ul>
            </div>
            <div class="login-header-block">
                <div class="login_block">
                    <div class="fb-login-button" data-max-rows="1" data-size="small" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="true" data-use-continue-as="false"></div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- MAIN CONTENT -->

<!-- Add main content here-->
<?= $content ?>

<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>
<!-- THE FOOTER -->
<footer>
    <div class="footer-bottom">
        <div class="container-fluid custom-container">
            <div class="col-md-12 footer-end clearfix">
                <div class="left">
                    <span class="copy">© 2015. All rights reserved. <span class="white"><a href="#"> NRGNetwork</a></span></span>
                    <span class="created">Created with LOVE by <span class="white"><a href="#"> NRGThemes</a></span></span>
                </div>
                <div class="right">
                    <a class="btn color-7 size-2 hover-9">About Us</a>
                    <a class="btn color-7 size-2 hover-9">Help</a>
                    <a class="btn color-7 size-2 hover-9">Privacy Policy</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="be-fixed-filter"></div>

<div class="theme-config">
    <div class="main-color">
        <div class="title">Main Color:</div>
        <div class="colours-wrapper">
            <div class="entry color1 m-color active" data-colour="content/style/stylesheet.css"></div>
            <div class="entry color3 m-color"  data-colour="content/style/style-green.css"></div>
            <div class="entry color6 m-color"  data-colour="content/style/style-orange.css"></div>
            <div class="entry color8 m-color"  data-colour="content/style/style-red.css"></div>
            <div class="title">Second Color:</div>
            <div class="entry s-color  active color10"  data-colour="content/style/stylesheet.css"></div>
            <div class="entry s-color color11"  data-colour="content/style/style-oranges.css"></div>
            <div class="entry s-color color12"  data-colour="content/style/style-greens.css"></div>
            <div class="entry s-color color13"  data-colour="content/style/style-reds.css"></div>
        </div>
    </div>
    <div class="open"><img src="content/img/icon-134.png" alt=""></div>
</div>
<!-- SCRIPTS	 -->
<script src="content/script/isotope.pkgd.min.js"></script>
<script src="content/script/magnific.js"></script>
<script src="content/script/jquery-2.1.4.min.js"></script>
<script src="content/script/jquery-ui.min.js"></script>
<script src="content/script/bootstrap.min.js"></script>
<script src="content/script/idangerous.swiper.min.js"></script>
<script src="content/script/jquery.mixitup.js"></script>
<script src="content/script/jquery.viewportchecker.min.js"></script>
<script src="content/script/filters.js"></script>
<script src="content/script/global.js"></script>
</body>
</html>

