<?php

 ############## DEBUT FONCTION ###############
// Light crypt fot int
function icrypt($t1){
$t1++;
$t1=bin2hex($t1);
$t1=strrev($t1);
$t1=$t1.substr($t1,3,1);
$t1=$t1+517;

return $t1;
};

############# FIN FONCTION ##################
############## DEBUT FONCTION ###############
function idecrypt($t2){
$t2=$t2-517;
$t2=substr($t2,0,-1);
$t2=strrev($t2);
$t2=pack("H*",$t2);
$t2--;

return $t2;
};
############# FIN FONCTION ##################

?>
    <!doctype html>
    <html class="no-js" lang="en">

    <!-- Mirrored from themearth.com/demo/html/emeet/view/speakers.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Jul 2018 16:21:15 GMT -->

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <!-- The above 3 meta tags *must* come first in the head -->

        <!-- SITE TITLE -->
        <title>Africup 2019 Speakers</title>

        <!-- when you post this page url in facebook , this image will be shown -->
        <!-- facebook open graph ends from here -->

        <!-- BOOTSTRAP CSS -->
        <link rel="stylesheet" href="assets/libs/bootstrap/css/bootstrap.min.css" media="all" />

        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="assets/libs/fontawesome/css/font-awesome.min.css" media="all" />

        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="assets/libs/maginificpopup/magnific-popup.css" media="all" />

        <!-- Time Circle -->
        <link rel="stylesheet" href="assets/libs/timer/TimeCircles.css" media="all" />

        <!-- OWL CAROUSEL CSS -->
        <link rel="stylesheet" href="assets/libs/owlcarousel/owl.carousel.min.css" media="all" />
        <link rel="stylesheet" href="assets/libs/owlcarousel/owl.theme.default.min.css" media="all" />
        <link href="../../assets/css/theme.css" rel="stylesheet">
        <link href="../../assets/css/theme-red-1.css" rel="stylesheet" id="theme-config-link">
        <link href="../../assets/css/custom.css" rel="stylesheet">
        <!-- GOOGLE FONT -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald:400,700%7cRaleway:300,400,400i,500,600,700,900" />

        <!-- MASTER  STYLESHEET  -->
        <link id="lgx-master-style" rel="stylesheet" href="assets/css/style-default.min.css" media="all" />

        <!-- MODERNIZER CSS  -->
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <style>

    .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
    color: #f9d630;
    cursor: default;
    background-color: #141f23;
    border: 1px solid #ddd;
    border-bottom-color: transparent;
            /* --------------------------------------------------------------------------
 * 2 - Header
 * -------------------------------------------------------------------------- */
        
        .wide .header,
        .boxed .header > .container {
            background-color: transparent;
            position: relative;
            padding-top: 20px;
            padding-bottom: 20px;
        }
        
        .sub-page .header {
            background-color: rgba(129, 134, 140, 1);
        }
        
        .header.header-mp {
            padding-top: 30px;
            padding-bottom: 15px;
            border-bottom: solid 1px rgba(255, 255, 255, 0.5);
        }
        
        .header.fixed {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 99999;
        }
        
        .header.shrink-off {
            padding-top: 2px;
            padding-bottom: 2px;
            /*background-image: linear-gradient(rgba(129, 134, 140, 1), rgba(129, 134, 140, .0));*/
            background-color: rgba(129, 134, 140, .8);
        }
        
        .wide .header.shrink,
        .boxed .header.shrink > .container {
            padding-top: 2px;
            padding-bottom: 2px;
            background: linear-gradient(to bottom right, rgba(86, 58, 143, 0.7), rgba(43, 163, 160, 0.7));
        }
        
        .header .header-wrapper {
            position: relative;
        }
        
        .header,
        .header.fixed,
        .header.shrink,
        .header > .container {
            -webkit-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
        }
        /* 2.1 - Logo
/* ========================================================================== */
        
        .logo {
            float: left;
            font-size: 30px;
            font-weight: bold;
            margin-top: -12px;
        }
        
        .logo a {
            color: #ffffff;
            display: inline-block;
            line-height: 2em;
        }
        
        .logo a:hover {
            color: #dc143c;
        }
        
        .logo a .logo-hex {
            background-color: #dc143c;
        }
        
        .logo a:hover .logo-hex {
            background-color: #ffffff;
        }
        
        .logo a .logo-fa {
            color: #ffffff;
        }
        
        .logo a:hover .logo-fa {
            color: #dc143c;
        }
        /*.logo .fa-stack {width: 54px; height: 62px; line-height: 62px;}*/
        
        .shrink .logo {
            margin-top: 0;
        }
        
        .shrink .logo a {
            line-height: 1em;
        }
        
        .shrink .logo a .logo-fa {
            font-size: 15px;
        }
        
        .shrink .logo .fa-stack {
            width: 27px;
            height: 31px;
            line-height: 31px;
        }
        
        .logo .fa-stack,
        .shrink .logo .fa-stack {
            -webkit-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
        }
        
        .logo a .logo-fa,
        .shrink .logo a .logo-fa {
            -webkit-transition: none;
            transition: none;
        }
        /* 2.2 - Logo hexagon icon
/* ========================================================================== */
        
        .logo-hex {
            margin-top: 14px;
            width: 54px;
            height: 31px;
            border-radius: 3px;
            cursor: pointer;
        }
        
        .logo-hex:before,
        .logo-hex:after {
            position: absolute;
            top: 0;
            left: 0;
            width: inherit;
            height: inherit;
            border-radius: inherit;
            background-color: inherit;
            content: '';
        }
        
        .logo-hex:before {
            -webkit-transform: rotate(60deg);
            -moz-transform: rotate(60deg);
            -ms-transform: rotate(60deg);
            -o-transform: rotate(60deg);
            transform: rotate(60deg);
        }
        
        .logo-hex:after {
            -webkit-transform: rotate(-60deg);
            -moz-transform: rotate(-60deg);
            -ms-transform: rotate(-60deg);
            -o-transform: rotate(-60deg);
            transform: rotate(-60deg);
        }
        
        .shrink .logo-hex {
            margin-top: 7px;
            width: 27px;
            height: 15px;
            border-radius: 1px;
        }
        /* 2.3 - Navigation / superfish skin
/* ========================================================================== */
        
        .navigation {
            float: right;
        }
        /* SUPERFISH ESSENTIAL STYLES */
        
        .sf-menu,
        .sf-menu * {
            margin: 0;
            padding: 0;
        }
        
        .sf-menu li {
            position: relative;
        }
        
        .sf-menu ul {
            position: absolute;
            display: none;
            top: 100%;
            left: 0;
            z-index: 99;
        }
        
        .sf-menu > li {
            float: left;
            border-radius: 10px;
        }
        
        .sf-menu li:hover > ul,
        .sf-menu li.sfHover > ul {
            display: block;
        }
        
        .sf-menu a {
            display: block;
            position: relative;
        }
        
        .sf-menu ul ul {
            top: 0;
            left: 100%;
        }
        
        .sf-menu ul {
            min-width: 12em;
            /* submenu width */
        }
        /* SUPERFISH THEME SKIN */
        
        .sf-menu {
            margin-right: -1em;
            font-size: 14px;
            font-weight: 300;
            text-transform: uppercase;
        }
        
        .sf-menu.nav > li > a:hover,
        /* bs3 reset */
        
        .sf-menu.nav > li > a:focus
        /* bs3 reset */
        
        {
            background-color: transparent;
        }
        
        .sf-menu.nav > li > a,
        /*bs3 reset */
        
        .sf-menu a {
            padding: 10px 15px;
        }
        
        .sf-menu a {
            color: #ffffff;
        }
        
        .sf-menu a:hover {
            color: #ffffff;
        }
        
        .sf-menu li:hover,
        .sf-menu li.sfHover {}
        
        .sf-menu li.active {
            background-color: rgba(13, 29, 49, 0.30);
        }
        
        .sf-menu li.active > a {
            color: #ffffff;
        }
        
        .sf-menu ul {
            margin-left: 1em;
        }
        
        .sf-menu ul ul {
            margin-left: 0;
        }
        
        .sf-menu ul li {
            background: #f2f2f2;
        }
        /* ARROW DOWN */
        
        .sf-menu.nav > li > a.sf-with-ul,
        /* bs3 reset */
        
        .sf-arrows .sf-with-ul {
            padding-right: 2.5em;
        }
        
        .sf-arrows .sf-with-ul:after {
            content: '';
            position: absolute;
            top: 50%;
            right: 1em;
            margin-top: -1px;
            height: 0;
            width: 0;
            border: 3px solid transparent;
            border-top-color: #9e9e9e;
        }
        
        .sf-arrows > li > .sf-with-ul:focus:after,
        .sf-arrows > li:hover > .sf-with-ul:after,
        .sf-arrows > .sfHover > .sf-with-ul:after {
            border-top-color: #dc143c;
        }
        /* ARROW RIGHT */
        
        .sf-arrows ul .sf-with-ul:after {
            margin-top: -5px;
            margin-right: -3px;
            border-color: transparent;
            border-left-color: #9e9e9e;
        }
        
        .sf-arrows ul li > .sf-with-ul:focus:after,
        .sf-arrows ul li:hover > .sf-with-ul:after,
        .sf-arrows ul .sfHover > .sf-with-ul:after {
            border-left-color: #dc143c;
        }
        /* 2.4 - Fixed menu
/* ========================================================================== */
        
        .menu-toggle {
            display: none;
            position: fixed;
            padding: 0;
            margin: 0;
            right: 280px;
            top: 43px;
            font-size: 30px;
            line-height: 30px;
            border: none;
            color: #ffffff !important;
        }
        
        .shrink .menu-toggle {
            top: 7px;
        }
        
        @media (max-width: 991px) {
            .navigation {
                position: fixed;
                right: 0;
                top: 0;
                height: 100%;
                width: 250px;
                background-color: rgba(13, 29, 49, 0.95);
            }
            .navigation.closed {
                right: -250px;
            }
            .navigation.opened {
                right: 0;
            }
            .sf-menu {
                margin-right: 0;
                padding: 15px 15px 0 15px;
            }
            .sf-menu > li {
                float: none;
            }
            .sf-menu ul {
                display: block !important;
                position: relative;
            }
            .sf-menu ul li {
                background-color: transparent;
            }
            .menu-toggle {
                display: block;
                z-index: 1;
            }
            .navigation.closed .menu-toggle {
                right: 15px;
            }
            .navigation.opened .menu-toggle {
                right: 15px;
                top: 7px;
            }
        }
        
        .header-mp .menu-toggle {
            top: 33px;
        }
        /* 2.5 - Mobile menu
/* ========================================================================== */
        
        #mobile-menu {
            display: none;
            position: absolute;
            top: 30px;
            right: 0;
            width: 200px;
            z-index: 0;
        }
        
        .mobile-menu {
            display: none;
            position: absolute;
            right: 0;
            top: 0;
            cursor: pointer;
            height: 40px;
            /* Required for IE 5, 6, 7 */
            /* ...or something to trigger hasLayout, like zoom: 1; */
            width: 100%;
            /* Theoretically for IE 8 & 9 (more valid) */
            /* ...but not required as filter works too */
            /* should come BEFORE filter */
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
            /* This works in IE 8 & 9 too */
            /* ... but also 5, 6, 7 */
            filter: alpha(opacity=0);
            /* Older than Firefox 0.9 */
            -moz-opacity: 0;
            /* Safari 1.x (pre WebKit!) */
            -khtml-opacity: 0;
            /* Modern!
    /* Firefox 0.9+, Safari 2?, Chrome any?
    /* Opera 9+, IE 9+ */
            opacity: 0;
        }
        
        .mobile-menu-title {
            line-height: 40px;
            font-size: 12px;
            text-transform: uppercase;
            text-align: right;
        }
        
        .mobile-menu-title .fa {
            font-size: 30px;
        }
        
        @media (max-width: 991px) {
            #mobile-menu {
                display: block;
                float: right;
            }
            .mobile-menu {
                display: block;
            }
        }
        
        .mobile-submenu {
            display: none;
        }
        
        @media (max-width: 991px) {
            .mobile-submenu {
                display: block;
                opacity: .5;
                background-color: #dc143c;
                height: 30px;
                width: 30px;
                position: absolute;
                top: 5px;
                right: 2px;
                -webkit-border-radius: 50%;
                border-radius: 50%;
                cursor: pointer;
            }
            .sf-menu li {
                float: none!important;
                display: block!important;
                width: 100%!important;
            }
            .sf-menu li a {
                float: none!important;
            }
            .sf-menu ul {
                position: static!important;
                display: none!important;
            }
            .mobile-submenu-open ul {
                display: block!important;
                opacity: 1 !important;
            }
        }
        
        #change:hover {
            color: #f9d630;
        }
        
        #dropme {
            background: linear-gradient(to bottom left, rgba(86, 58, 143, 0.9), rgba(43, 163, 160, 0.85));
            "}
 .tabbable-panel {
                border: 1px solid #eee;
                padding: 10px;
            }
            .tabbable-line > .nav-tabs {
                border: none;
                margin: 0px;
            }
            .tabbable-line > .nav-tabs > li {
                margin-right: 2px;
            }
            .tabbable-line > .nav-tabs > li > a {
                border: 0;
                margin-right: 0;
                color: #737373;
            }
            .tabbable-line > .nav-tabs > li > a > i {
                color: #a6a6a6;
            }
            .tabbable-line > .nav-tabs > li.open,
            .tabbable-line > .nav-tabs > li:hover {
                border-bottom: 4px solid rgb(80, 144, 247);
            }
            .tabbable-line > .nav-tabs > li.open > a,
            .tabbable-line > .nav-tabs > li:hover > a {
                border: 0;
                background: none !important;
                color: #333333;
            }
            .tabbable-line > .nav-tabs > li.open > a > i,
            .tabbable-line > .nav-tabs > li:hover > a > i {
                color: #a6a6a6;
            }
            .tabbable-line > .nav-tabs > li.open .dropdown-menu,
            .tabbable-line > .nav-tabs > li:hover .dropdown-menu {
                margin-top: 0px;
            }
            .tabbable-line > .nav-tabs > li.active {
                border-bottom: 4px solid #32465B;
                position: relative;
            }
            .tabbable-line > .nav-tabs > li.active > a {
                border: 0;
                color: #333333;
            }
            .tabbable-line > .nav-tabs > li.active > a > i {
                color: #404040;
            }
            .tabbable-line > .tab-content {
                margin-top: -3px;
                background-color: #fff;
                border: 0;
                border-top: 1px solid #eee;
                padding: 15px 0;
            }
            .portlet .tabbable-line > .tab-content {
                padding-bottom: 0;
            }
    </style>

    <body id="home" class="wide body-light">
      <div class="lgx-page-wrapper">
          <div class="container">
              <div class="container">
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="tabbable-panel">
                                            <div class="tabbable-line">
                                                <!-- nav speaker-->
                                                <ul class="nav nav-tabs ">
                                                    <li class="active">
                                                        <a href="#tab_default_1" data-toggle="tab">
<b>All </b></a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_default_2" data-toggle="tab">
<b>Speakers </b></a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_default_3" data-toggle="tab">
<b>Investors</b> </a>
                                                    </li>

                                                    <li>
                                                        <a href="#tab_default_4" data-toggle="tab">
<b>Sponsors </b></a>
                                                    </li>

                                                    <li>
                                                        <a href="#tab_default_5" data-toggle="tab">
<b>Partners </b></a>
                                                    </li>

                                                    <li>
                                                        <a href="#tab_default_6" data-toggle="tab">
<b>Exhibitors</b> </a>
                                                    </li>

                                                    <li>
                                                        <a href="#tab_default_7" data-toggle="tab">
 <b>Team </b></a>
                                                    </li>

                                                    <li>
                                                        <a href="#tab_default_8" data-toggle="tab">
<b>Mentors/Coachs</b> </a>
                                                    </li>

                                                    <li>
                                                        <a href="#tab_default_9" data-toggle="tab">
<b>Startups </b></a>
                                                    </li>

                                                    <li>
                                                        <a href="#tab_default_10" data-toggle="tab">
<b>Delegates</b> </a>
                                                    </li>

                                                     <li>
                                                        <a href="#tab_default_11" data-toggle="tab">
<b>Jurys</b> </a>
                                                    </li>

                                                      <li>
                                                        <a href="#tab_default_12" data-toggle="tab">
 <b>Ministers </b></a>
                                                    </li>

                                                      <li>
                                                        <a href="#tab_default_13" data-toggle="tab">
<b>Organiser</b></a>
                                                    </li>

                                                     <li>
                                                        <a href="#tab_default_14" data-toggle="tab">
<b>Steering Committee </b></a>
                                                    </li>




                                                </ul>
                                                <br>
                                                <br>
                                                <!--  end nav speakers-->
                                                <div class="tab-content">

                                                    <div class="tab-pane active" id="tab_default_1">
                                                        <div class="row">

                                                            <!-- -->

                                                            <div class="col-xs-12">
                                                                <?php

				                $r1 = "SELECT DISTINCT id,CONCAT(nom,' ',prenom) AS nom_speaker,organisme,commentaire,pays,profil FROM speakers, speaker_tag WHERE speakers.id = speaker_id and tag='Africup 2019' and profil NOT IN ('cometee','team') and speakers.id NOT IN ('100486','100488','100163') and etat=1  ORDER BY emplacement ASC ";

                $q1 = mysqli_query($cnx_bdd,$r1) or die('error r1');?>

                                                                    <?php while($f1 = mysqli_fetch_array($q1)):?>

                                                                        <div class="lgx-col4 lgx-single-speaker2">
                                                                            <figure>
<a class="profile-img" href="#">
<img src="https://www.africup.tn/_medias_files/img_speakers/sp<?php echo icrypt($f1[0]); ?>.jpg" alt="speaker" style="width:100%;height:100%;"/></a>
                                                                                <figcaption>
                                                                                    <div class="social-group">
                                                                                        <!--   <a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
                                         <a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>-->
                                                                                        <!--  <a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
                                             -->
                                                                                        <a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
                                                                                    </div>
                                                                                    <div style="height:100px;" class="speaker-info">
                                                                                        <h3 class="title"><img vspace="10" hspace="8" align="left" src="assets/img/flags-mini/<?php echo utf8_encode($f1[4]);?>.png" alt="speaker"/><a href=""><?php echo utf8_encode(html_entity_decode($f1[1]));?> <br><div class="pull-right"></div></a></h3>

                                                                                    </div>
                                                                                </figcaption>
                                                                            </figure>
                                                                        </div>

                                                                        <?php endwhile; ?>

                                                                            <!--//.ROW-->

                                                                            <!--//.ROW-->

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!--  new -->
                                                    <div class="tab-pane" id="tab_default_2">
                                                        <!--  speaker -->
                                                        <div class="row">

                                                            <!-- -->

                                                            <div class="col-xs-12">
                                                                <?php

                $r2 = "SELECT DISTINCT id,CONCAT(nom,' ',prenom) AS nom_speaker,organisme,commentaire,pays,profil FROM speakers, speaker_tag WHERE speakers.id = speaker_id and tag='Africup 2019' and profil in('speaker','speakers') and etat=1  ORDER BY emplacement ASC ";
                $q2 = mysqli_query($cnx_bdd,$r2) or die('error r2');?>

                                                                    <?php while($f2 = mysqli_fetch_array($q2)):?>

                                                                        <div class="lgx-col4 lgx-single-speaker2">
                                                                            <figure>
                                                                                <a class="profile-img" href="#"><img src="https://www.africup.tn/_medias_files/img_speakers/sp<?php echo icrypt($f2[0]); ?>.jpg" alt="speaker" style="width:100%;height:100%;"/></a>
                                                                                <figcaption>
                                                                                    <div class="social-group">
                                                                                        <!--   <a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
                                         <a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>-->
                                                                                        <!--  <a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
                                             -->
                                                                                        <a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
                                                                                    </div>
                                                                                    <div style="height:100px;" class="speaker-info">
                                                                                        <h3 class="title"><img vspace="10" hspace="8" align="left" src="assets/img/flags-mini/<?php echo utf8_encode($f2[4]);?>.png" alt="speaker"/><a href=""><?php echo utf8_encode(html_entity_decode($f2[1]));?> <br><div class="pull-right"></div></a></h3>

                                                                                    </div>
                                                                                </figcaption>
                                                                            </figure>
                                                                        </div>

                                                                        <?php endwhile; ?>

                                                                            <!--//.ROW-->

                                                                            <!--//.ROW-->

                                                            </div>
                                                        </div>
                                                        <!-- end speaker -->

                                                    </div>

                                                    <div class="tab-pane" id="tab_default_3">
                                                        <!--  INVESTOR -->
                                                        <div class="row">

                                                            <!-- -->

                                                            <div class="col-xs-12">
                                                                <?php

                $r3 = "SELECT DISTINCT id,CONCAT(nom,' ',prenom) AS nom_speaker,organisme,commentaire,pays,profil FROM speakers, speaker_tag WHERE speakers.id = speaker_id and tag='Africup 2019' and profil='investor'  ORDER BY emplacement ASC ";
                $q3 = mysqli_query($cnx_bdd,$r3) or die('error r3');?>

                                                                    <?php while($f3 = mysqli_fetch_array($q3)):?>

                                                                        <div class="lgx-col4 lgx-single-speaker2">
                                                                            <figure>
                                                                                <a class="profile-img" href="#"><img src="https://www.africup.tn/_medias_files/img_speakers/sp<?php echo icrypt($f3[0]); ?>.jpg" alt="speaker" style="width:100%;height:100%;"/></a>
                                                                                <figcaption>
                                                                                    <div class="social-group">
                                                                                        <!--   <a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
                                         <a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>-->
                                                                                        <!--  <a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
                                             -->
                                                                                        <a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
                                                                                    </div>
                                                                                    <div style="height:100px;" class="speaker-info">
                                                                                        <h3 class="title"><img vspace="10" hspace="8" align="left" src="assets/img/flags-mini/<?php echo utf8_encode($f3[4]);?>.png" alt="speaker"/><a href=""><?php echo utf8_encode(html_entity_decode($f3[1]));?> <br><div class="pull-right"></div></a></h3>

                                                                                    </div>
                                                                                </figcaption>
                                                                            </figure>
                                                                        </div>

                                                                        <?php endwhile; ?>

                                                                            <!--//.ROW-->

                                                                            <!--//.ROW-->

                                                            </div>
                                                        </div></div>
                                                        <!-- end INVESTOR -->
                                                         <!--  sponsor -->
                                                          <div class="tab-pane" id="tab_default_4">
                                                        <div class="row">

                                                            <!-- -->

                                                            <div class="col-xs-12">
                                                                <?php

                $r3 = "SELECT DISTINCT id,CONCAT(nom,' ',prenom) AS nom_speaker,organisme,commentaire,pays,profil FROM speakers, speaker_tag WHERE speakers.id = speaker_id and tag='Africup 2019' and profil='sponsors'  ORDER BY emplacement ASC ";
                $q3 = mysqli_query($cnx_bdd,$r3) or die('error r3');?>

                                                                    <?php while($f3 = mysqli_fetch_array($q3)):?>

                                                                        <div class="lgx-col4 lgx-single-speaker2">
                                                                            <figure>
                                                                                <a class="profile-img" href="#"><img src="https://www.africup.tn/_medias_files/img_speakers/sp<?php echo icrypt($f3[0]); ?>.jpg" alt="speaker" style="width:100%;height:100%;"/></a>
                                                                                <figcaption>
                                                                                    <div class="social-group">
                                                                                        <!--   <a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
                                         <a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>-->
                                                                                        <!--  <a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
                                             -->
                                                                                        <a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
                                                                                    </div>
                                                                                    <div style="height:100px;" class="speaker-info">
                                                                                        <h3 class="title"><img vspace="10" hspace="8" align="left" src="assets/img/flags-mini/<?php echo utf8_encode($f3[4]);?>.png" alt="speaker"/><a href=""><?php echo utf8_encode(html_entity_decode($f3[1]));?> <br><div class="pull-right"></div></a></h3>

                                                                                    </div>
                                                                                </figcaption>
                                                                            </figure>
                                                                        </div>

                                                                        <?php endwhile; ?>

                                                                            <!--//.ROW-->

                                                                            <!--//.ROW-->

                                                            </div>
                                                        </div></div>
                                                        <!-- end sponsor -->
                                                         <!--  Partners -->
                                                          <div class="tab-pane" id="tab_default_5">
                                                        <div class="row">

                                                            <!-- -->

                                                            <div class="col-xs-12">
                                                                <?php

                $r3 = "SELECT DISTINCT id,CONCAT(nom,' ',prenom) AS nom_speaker,organisme,commentaire,pays,profil FROM speakers, speaker_tag WHERE speakers.id = speaker_id and tag='Africup 2019' and profil='partners'  ORDER BY emplacement ASC ";
                $q3 = mysqli_query($cnx_bdd,$r3) or die('error r3');?>

                                                                    <?php while($f3 = mysqli_fetch_array($q3)):?>

                                                                        <div class="lgx-col4 lgx-single-speaker2">
                                                                            <figure>
                                                                                <a class="profile-img" href="#"><img src="https://www.africup.tn/_medias_files/img_speakers/sp<?php echo icrypt($f3[0]); ?>.jpg" alt="speaker" style="width:100%;height:100%;"/></a>
                                                                                <figcaption>
                                                                                    <div class="social-group">
                                                                                        <!--   <a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
                                         <a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>-->
                                                                                        <!--  <a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
                                             -->
                                                                                        <a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
                                                                                    </div>
                                                                                    <div style="height:100px;" class="speaker-info">
                                                                                        <h3 class="title"><img vspace="10" hspace="8" align="left" src="assets/img/flags-mini/<?php echo utf8_encode($f3[4]);?>.png" alt="speaker"/><a href=""><?php echo utf8_encode(html_entity_decode($f3[1]));?> <br><div class="pull-right"></div></a></h3>

                                                                                    </div>
                                                                                </figcaption>
                                                                            </figure>
                                                                        </div>

                                                                        <?php endwhile; ?>

                                                                            <!--//.ROW-->

                                                                            <!--//.ROW-->

                                                            </div>
                                                        </div></div>
                                                        <!-- end Partners -->


                                                         <!--  Exhibitors -->
                                                          <div class="tab-pane" id="tab_default_6">
                                                        <div class="row">

                                                            <!-- -->

                                                            <div class="col-xs-12">
                                                                <?php

                $r3 = "SELECT DISTINCT id,CONCAT(nom,' ',prenom) AS nom_speaker,organisme,commentaire,pays,profil FROM speakers, speaker_tag WHERE speakers.id = speaker_id and tag='Africup 2019' and profil='exhibitors'  ORDER BY emplacement ASC ";
                $q3 = mysqli_query($cnx_bdd,$r3) or die('error r3');?>

                                                                    <?php while($f3 = mysqli_fetch_array($q3)):?>

                                                                        <div class="lgx-col4 lgx-single-speaker2">
                                                                            <figure>
                                                                                <a class="profile-img" href="#"><img src="https://www.africup.tn/_medias_files/img_speakers/sp<?php echo icrypt($f3[0]); ?>.jpg" alt="speaker" style="width:100%;height:100%;"/></a>
                                                                                <figcaption>
                                                                                    <div class="social-group">
                                                                                        <!--   <a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
                                         <a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>-->
                                                                                        <!--  <a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
                                             -->
                                                                                        <a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
                                                                                    </div>
                                                                                    <div style="height:100px;" class="speaker-info">
                                                                                        <h3 class="title"><img vspace="10" hspace="8" align="left" src="assets/img/flags-mini/<?php echo utf8_encode($f3[4]);?>.png" alt="speaker"/><a href=""><?php echo utf8_encode(html_entity_decode($f3[1]));?> <br><div class="pull-right"></div></a></h3>

                                                                                    </div>
                                                                                </figcaption>
                                                                            </figure>
                                                                        </div>

                                                                        <?php endwhile; ?>

                                                                            <!--//.ROW-->

                                                                            <!--//.ROW-->

                                                            </div>
                                                        </div></div>
                                                        <!-- end Exhibitors -->
                                                         <!--  Team -->
                                                          <div class="tab-pane" id="tab_default_7">
                                                        <div class="row">

                                                            <!-- -->

                                                            <div class="col-xs-12">
                                                                <?php

                $r3 = "SELECT DISTINCT id,CONCAT(nom,' ',prenom) AS nom_speaker,organisme,commentaire,pays,profil FROM speakers, speaker_tag WHERE speakers.id = speaker_id and tag='Africup 2019' and profil='team'  ORDER BY emplacement ASC ";
                $q3 = mysqli_query($cnx_bdd,$r3) or die('error r3');?>

                                                                    <?php while($f3 = mysqli_fetch_array($q3)):?>

                                                                        <div class="lgx-col4 lgx-single-speaker2">
                                                                            <figure>
                                                                                <a class="profile-img" href="#"><img src="https://www.africup.tn/_medias_files/img_speakers/sp<?php echo icrypt($f3[0]); ?>.jpg" alt="speaker" style="width:100%;height:100%;"/></a>
                                                                                <figcaption>
                                                                                    <div class="social-group">
                                                                                        <!--   <a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
                                         <a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>-->
                                                                                        <!--  <a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
                                             -->
                                                                                        <a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
                                                                                    </div>
                                                                                    <div style="height:100px;" class="speaker-info">
                                                                                        <h3 class="title"><img vspace="10" hspace="8" align="left" src="assets/img/flags-mini/<?php echo utf8_encode($f3[4]);?>.png" alt="speaker"/><a href=""><?php echo utf8_encode(html_entity_decode($f3[1]));?> <br><div class="pull-right"></div></a></h3>

                                                                                    </div>
                                                                                </figcaption>
                                                                            </figure>
                                                                        </div>

                                                                        <?php endwhile; ?>

                                                                            <!--//.ROW-->

                                                                            <!--//.ROW-->

                                                            </div>
                                                        </div></div>
                                                        <!-- end Team -->


                                                        <!--  Coachs -->
                                                          <div class="tab-pane" id="tab_default_8">
                                                        <div class="row">

                                                            <!-- -->

                                                            <div class="col-xs-12">
                                                                <?php

                $r3 = "SELECT DISTINCT id,CONCAT(nom,' ',prenom) AS nom_speaker,organisme,commentaire,pays,profil FROM speakers, speaker_tag WHERE speakers.id = speaker_id and tag='Africup 2019' and profil='coachs'  ORDER BY emplacement ASC ";
                $q3 = mysqli_query($cnx_bdd,$r3) or die('error r3');?>

                                                                    <?php while($f3 = mysqli_fetch_array($q3)):?>

                                                                        <div class="lgx-col4 lgx-single-speaker2">
                                                                            <figure>
                                                                                <a class="profile-img" href="#"><img src="https://www.africup.tn/_medias_files/img_speakers/sp<?php echo icrypt($f3[0]); ?>.jpg" alt="speaker" style="width:100%;height:100%;"/></a>
                                                                                <figcaption>
                                                                                    <div class="social-group">
                                                                                        <!--   <a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
                                         <a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>-->
                                                                                        <!--  <a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
                                             -->
                                                                                        <a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
                                                                                    </div>
                                                                                    <div style="height:100px;" class="speaker-info">
                                                                                        <h3 class="title"><img vspace="10" hspace="8" align="left" src="assets/img/flags-mini/<?php echo utf8_encode($f3[4]);?>.png" alt="speaker"/><a href=""><?php echo utf8_encode(html_entity_decode($f3[1]));?> <br><div class="pull-right"></div></a></h3>

                                                                                    </div>
                                                                                </figcaption>
                                                                            </figure>
                                                                        </div>

                                                                        <?php endwhile; ?>

                                                                            <!--//.ROW-->

                                                                            <!--//.ROW-->

                                                            </div>
                                                        </div></div>
                                                        <!-- end Coachs -->


                                                         <!--  Startups -->
                                                          <div class="tab-pane" id="tab_default_9">
                                                        <div class="row">

                                                            <!-- -->

                                                            <div class="col-xs-12">
                                                                <?php

                $r3 = "SELECT DISTINCT id,CONCAT(nom,' ',prenom) AS nom_speaker,organisme,commentaire,pays,profil FROM speakers, speaker_tag WHERE speakers.id = speaker_id and tag='Africup 2019' and profil='startups'  ORDER BY emplacement ASC ";
                $q3 = mysqli_query($cnx_bdd,$r3) or die('error r3');?>

                                                                    <?php while($f3 = mysqli_fetch_array($q3)):?>

                                                                        <div class="lgx-col4 lgx-single-speaker2">
                                                                            <figure>
                                                                                <a class="profile-img" href="#"><img src="https://www.africup.tn/_medias_files/img_speakers/sp<?php echo icrypt($f3[0]); ?>.jpg" alt="speaker" style="width:100%;height:100%;"/></a>
                                                                                <figcaption>
                                                                                    <div class="social-group">
                                                                                        <!--   <a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
                                         <a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>-->
                                                                                        <!--  <a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
                                             -->
                                                                                        <a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
                                                                                    </div>
                                                                                    <div style="height:100px;" class="speaker-info">
                                                                                        <h3 class="title"><img vspace="10" hspace="8" align="left" src="assets/img/flags-mini/<?php echo utf8_encode($f3[4]);?>.png" alt="speaker"/><a href=""><?php echo utf8_encode(html_entity_decode($f3[1]));?> <br><div class="pull-right"></div></a></h3>

                                                                                    </div>
                                                                                </figcaption>
                                                                            </figure>
                                                                        </div>

                                                                        <?php endwhile; ?>

                                                                            <!--//.ROW-->

                                                                            <!--//.ROW-->

                                                            </div>
                                                        </div></div>
                                                        <!-- end Delegates -->

                                                          <!--  Startups -->
                                                          <div class="tab-pane" id="tab_default_10">
                                                        <div class="row">

                                                            <!-- -->

                                                            <div class="col-xs-12">
                                                                <?php

                $r3 = "SELECT DISTINCT id,CONCAT(nom,' ',prenom) AS nom_speaker,organisme,commentaire,pays,profil FROM speakers, speaker_tag WHERE speakers.id = speaker_id and tag='Africup 2019' and profil='delegates'  ORDER BY emplacement ASC ";
                $q3 = mysqli_query($cnx_bdd,$r3) or die('error r3');?>

                                                                    <?php while($f3 = mysqli_fetch_array($q3)):?>

                                                                        <div class="lgx-col4 lgx-single-speaker2">
                                                                            <figure>
                                                                                <a class="profile-img" href="#"><img src="https://www.africup.tn/_medias_files/img_speakers/sp<?php echo icrypt($f3[0]); ?>.jpg" alt="speaker" style="width:100%;height:100%;"/></a>
                                                                                <figcaption>
                                                                                    <div class="social-group">
                                                                                        <!--   <a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
                                         <a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>-->
                                                                                        <!--  <a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
                                             -->
                                                                                        <a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
                                                                                    </div>
                                                                                    <div style="height:100px;" class="speaker-info">
                                                                                        <h3 class="title"><img vspace="10" hspace="8" align="left" src="assets/img/flags-mini/<?php echo utf8_encode($f3[4]);?>.png" alt="speaker"/><a href=""><?php echo utf8_encode(html_entity_decode($f3[1]));?> <br><div class="pull-right"></div></a></h3>

                                                                                    </div>
                                                                                </figcaption>
                                                                            </figure>
                                                                        </div>

                                                                        <?php endwhile; ?>

                                                                            <!--//.ROW-->

                                                                            <!--//.ROW-->

                                                            </div>
                                                        </div></div>
                                                        <!-- end Delegates -->


                                                         <!--  Jurys -->
                                                          <div class="tab-pane" id="tab_default_11">
                                                        <div class="row">

                                                            <!-- -->

                                                            <div class="col-xs-12">
                                                                <?php

                $r3 = "SELECT DISTINCT id,CONCAT(nom,' ',prenom) AS nom_speaker,organisme,commentaire,pays,profil FROM speakers, speaker_tag WHERE speakers.id = speaker_id and tag='Africup 2019' and profil='jurys'  ORDER BY emplacement ASC ";
                $q3 = mysqli_query($cnx_bdd,$r3) or die('error r3');?>

                                                                    <?php while($f3 = mysqli_fetch_array($q3)):?>

                                                                        <div class="lgx-col4 lgx-single-speaker2">
                                                                            <figure>
                                                                                <a class="profile-img" href="#"><img src="https://www.africup.tn/_medias_files/img_speakers/sp<?php echo icrypt($f3[0]); ?>.jpg" alt="speaker" style="width:100%;height:100%;"/></a>
                                                                                <figcaption>
                                                                                    <div class="social-group">
                                                                                        <!--   <a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
                                         <a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>-->
                                                                                        <!--  <a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
                                             -->
                                                                                        <a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
                                                                                    </div>
                                                                                    <div style="height:100px;" class="speaker-info">
                                                                                        <h3 class="title"><img vspace="10" hspace="8" align="left" src="assets/img/flags-mini/<?php echo utf8_encode($f3[4]);?>.png" alt="speaker"/><a href=""><?php echo utf8_encode(html_entity_decode($f3[1]));?> <br><div class="pull-right"></div></a></h3>

                                                                                    </div>
                                                                                </figcaption>
                                                                            </figure>
                                                                        </div>

                                                                        <?php endwhile; ?>

                                                                            <!--//.ROW-->

                                                                            <!--//.ROW-->

                                                            </div>
                                                        </div></div>
                                                        <!-- end Jurys -->

                                                          <!--  Ministers -->
                                                          <div class="tab-pane" id="tab_default_12">
                                                        <div class="row">

                                                            <!-- -->

                                                            <div class="col-xs-12">
                                                                <?php

                $r3 = "SELECT DISTINCT id,CONCAT(nom,' ',prenom) AS nom_speaker,organisme,commentaire,pays,profil FROM speakers, speaker_tag WHERE speakers.id = speaker_id and tag='Africup 2019' and profil='ministers'  ORDER BY emplacement ASC ";
                $q3 = mysqli_query($cnx_bdd,$r3) or die('error r3');?>

                                                                    <?php while($f3 = mysqli_fetch_array($q3)):?>

                                                                        <div class="lgx-col4 lgx-single-speaker2">
                                                                            <figure>
                                                                                <a class="profile-img" href="#"><img src="https://www.africup.tn/_medias_files/img_speakers/sp<?php echo icrypt($f3[0]); ?>.jpg" alt="speaker" style="width:100%;height:100%;"/></a>
                                                                                <figcaption>
                                                                                    <div class="social-group">
                                                                                        <!--   <a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
                                         <a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>-->
                                                                                        <!--  <a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
                                             -->
                                                                                        <a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
                                                                                    </div>
                                                                                    <div style="height:100px;" class="speaker-info">
                                                                                        <h3 class="title"><img vspace="10" hspace="8" align="left" src="assets/img/flags-mini/<?php echo utf8_encode($f3[4]);?>.png" alt="speaker"/><a href=""><?php echo utf8_encode(html_entity_decode($f3[1]));?> <br><div class="pull-right"></div></a></h3>

                                                                                    </div>
                                                                                </figcaption>
                                                                            </figure>
                                                                        </div>

                                                                        <?php endwhile; ?>

                                                                            <!--//.ROW-->

                                                                            <!--//.ROW-->

                                                            </div>
                                                        </div></div>
                                                        <!-- end Ministers -->



                                                        <!--  Organiser -->
                                                          <div class="tab-pane" id="tab_default_13">
                                                        <div class="row">

                                                            <!-- -->

                                                            <div class="col-xs-12">
                                                                <?php

                $r3 = "SELECT DISTINCT id,CONCAT(nom,' ',prenom) AS nom_speaker,organisme,commentaire,pays,profil FROM speakers, speaker_tag WHERE speakers.id = speaker_id and tag='Africup 2019' and profil='organiser'  ORDER BY emplacement ASC ";
                $q3 = mysqli_query($cnx_bdd,$r3) or die('error r3');?>

                                                                    <?php while($f3 = mysqli_fetch_array($q3)):?>

                                                                        <div class="lgx-col4 lgx-single-speaker2">
                                                                            <figure>
                                                                                <a class="profile-img" href="#"><img src="https://www.africup.tn/_medias_files/img_speakers/sp<?php echo icrypt($f3[0]); ?>.jpg" alt="speaker" style="width:100%;height:100%;"/></a>
                                                                                <figcaption>
                                                                                    <div class="social-group">
                                                                                        <!--   <a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
                                         <a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>-->
                                                                                        <!--  <a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
                                             -->
                                                                                        <a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
                                                                                    </div>
                                                                                    <div style="height:100px;" class="speaker-info">
                                                                                        <h3 class="title"><img vspace="10" hspace="8" align="left" src="assets/img/flags-mini/<?php echo utf8_encode($f3[4]);?>.png" alt="speaker"/><a href=""><?php echo utf8_encode(html_entity_decode($f3[1]));?> <br><div class="pull-right"></div></a></h3>

                                                                                    </div>
                                                                                </figcaption>
                                                                            </figure>
                                                                        </div>

                                                                        <?php endwhile; ?>

                                                                            <!--//.ROW-->

                                                                            <!--//.ROW-->

                                                            </div>
                                                        </div></div>
                                                        <!-- end Organiser -->



                                                           <!--  Committee -->
                                                          <div class="tab-pane" id="tab_default_14">
                                                        <div class="row">

                                                            <!-- -->

                                                            <div class="col-xs-12">
                                                                <?php

                $r3 = "SELECT DISTINCT id,CONCAT(nom,' ',prenom) AS nom_speaker,organisme,commentaire,pays,profil FROM speakers, speaker_tag WHERE speakers.id = speaker_id and tag='Africup 2019' and profil='committee'  ORDER BY emplacement ASC ";
                $q3 = mysqli_query($cnx_bdd,$r3) or die('error r3');?>

                                                                    <?php while($f3 = mysqli_fetch_array($q3)):?>

                                                                        <div class="lgx-col4 lgx-single-speaker2">
                                                                            <figure>
                                                                                <a class="profile-img" href="#"><img src="https://www.africup.tn/_medias_files/img_speakers/sp<?php echo icrypt($f3[0]); ?>.jpg" alt="speaker" style="width:100%;height:100%;"/></a>
                                                                                <figcaption>
                                                                                    <div class="social-group">
                                                                                        <!--   <a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
                                         <a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>-->
                                                                                        <!--  <a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
                                             -->
                                                                                        <a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
                                                                                    </div>
                                                                                    <div style="height:100px;" class="speaker-info">
                                                                                        <h3 class="title"><img vspace="10" hspace="8" align="left" src="assets/img/flags-mini/<?php echo utf8_encode($f3[4]);?>.png" alt="speaker"/><a href=""><?php echo utf8_encode(html_entity_decode($f3[1]));?> <br><div class="pull-right"></div></a></h3>

                                                                                    </div>
                                                                                </figcaption>
                                                                            </figure>
                                                                        </div>

                                                                        <?php endwhile; ?>

                                                                            <!--//.ROW-->

                                                                            <!--//.ROW-->

                                                            </div>
                                                        </div></div>
                                                        <!-- end Committee -->

                                                   

                                                </div>
                                                <!-- //.CONTAINER -->
                                                <!-- 5 f-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 5f -->

                    </section>
                    <!--News END-->
                    </div>
            </main>

            <!--FOOTER-->

            <!--FOOTER END-->

            </div>
            <!--//.LGX SITE CONTAINER-->
            <!-- *** ADD YOUR SITE SCRIPT HERE *** -->
            <!-- JQUERY  -->
            <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

            <!-- BOOTSTRAP JS  -->
            <script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>

            <!-- Smooth Scroll  -->
            <script src="assets/libs/jquery.smooth-scroll.js"></script>

            <!-- SKILLS SCRIPT  -->
            <script src="assets/libs/jquery.validate.js"></script>

            <!-- if load google maps then load this api, change api key as it may expire for limit cross as this is provided with any theme -->
            <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQvRGGtL6OrpP5xVMxq_0NgiMiRhm3ycI"></script>

            <!-- CUSTOM GOOGLE MAP -->
            <script type="text/javascript" src="assets/libs/gmap/jquery.googlemap.js"></script>

            <!-- adding magnific popup js library -->
            <script type="text/javascript" src="assets/libs/maginificpopup/jquery.magnific-popup.min.js"></script>

            <!-- Owl Carousel  -->
            <script src="assets/libs/owlcarousel/owl.carousel.min.js"></script>

            <!-- COUNTDOWN   -->
            <script src="assets/libs/countdown.js"></script>
            <script src="assets/libs/timer/TimeCircles.js"></script>

            <!-- Counter JS -->
            <script src="assets/libs/waypoints.min.js"></script>
            <script src="assets/libs/counterup/jquery.counterup.min.js"></script>

            <!-- SMOTH SCROLL -->
            <script src="assets/libs/jquery.smooth-scroll.min.js"></script>
            <script src="assets/libs/jquery.easing.min.js"></script>

            <!-- type js -->
            <script src="assets/libs/typed/typed.min.js"></script>

            <!-- header parallax js -->
            <script src="assets/libs/header-parallax.js"></script>

            <!-- instafeed js -->
            <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js"></script>-->
            <script src="assets/libs/instafeed.min.js"></script>

            </body>

    </html>