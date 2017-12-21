<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/SIBUKMA/config/Core.php');
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(BASEPATH."includes/web_head.php")
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SIBUKMA/Books</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="images/buku2.png">
    <link rel="shortcut icon" type="image/ico" href="images/buku2.png" />
    
</head>

<body data-spy="scroll" data-target="#mainmenu" data-offset="50">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->



    <header class="relative" id="sc1">
        <!-- Header-background-markup -->
        <div class="overlay-bg relative">
            <img src="images/slide/tb7.jpg" alt="library">
        </div>
        <!-- Mainmenu-markup-start -->
        <div class="mainmenu-area navbar-fixed-top" data-spy="affix" data-offset-top="10">
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-header">
                        <div class="space-10"></div>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainmenu">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!--logo-->
                        <a href="#sc1" class="navbar-left show text-white"><img src="images/buku2.png" alt="library" height="177" width="43" > SIBUKMA</a>
                        <div class="space-10"></div>
                    </div>
                    <!--Toggle-button-->

                    <!--Active User-->
                    <!--Mainmenu list-->
                    <div class="navbar-right in fade" id="mainmenu">
                        <ul class="nav navbar-nav nav-white text-uppercase">
                            <li class="active">
                                <a href="index.php">Home</a>
                            </li>
                           <li>
                                <a href="books.php">Books</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="space-100"></div>
        <!-- Mainmenu-markup-end -->
            <div class="new_prod_bg">
                        <a href="details.php"><img src="images/thumb1.gif" alt="" title="" class="thumb" border="0" /></a>
                        </div>           
            <div class="col-xs-12 col-md-12 padding60 gray-bg wow fadeInRight">
                <a href="books.php">books</a> &gt;&gt; details book
            
            
                <div class="space-20"></div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 text-center">
                            <h2>Details<strong> Book </strong></h2>
                            <div class="title-bar center blue">
                                <ul class="list-inline list-unstyled">
                                    <li><i class="icofont icofont-square"></i></li>
                                    <li><i class="icofont icofont-square"></i></li>
                                </ul>
                            </div>
                            <div class="space-20"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                        <img src="images/book/book-xs-2.jpg" class="media-object img-thumbnail" alt="library" width="240">
                        </div>
                        <div class="col-md-9 book-content">
                        <div class="book-details">
                            <div class="book-details-item">
                                <h4 class="tip-left">Title</h4>
                                <p class="lead">Smothered In Hugs</p>
                                <div class="space-10"></div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-8">
                                        <h4 class="tip-left">Author</h4>
                                        <div class="media">
                                            
                                            <div class="media-body">
                                                <h5>Ucly Man</h5>
                                                <p>23 Books Created</p>
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                                <div class="space-30"></div>
                                <h4 class="tip-left">Description</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla libero dui, pretium non tincidunt eget, mattis eu nunc. Aenean egestas nisi vel urna tempus aliquam. Etiam fringilla tempor risus. Nulla vitae elementum felis. Vestibulum ultricies feugiat est id ornare. Morbi non dapibus ante.</p>
                    
                    </div>
                                
                    <div class="space-60"></div>
                </div>
        
                       
                <div class="prod_det_box">
                	<div class="box_top"></div>
                    <div class="box_center">
                    <a href="details.html" class="more"><img src="images/order_now.gif" alt="" title="" border="0" /></a>
                    <div class="clear"></div>
                    </div>
                    
                    <div class="box_bottom"></div>
                </div>    
            <div class="clear"></div>
            </div>	
            
            
            </div>


			</div>
            

            
        <div class="clear"></div>
        </div><!--end of left content-->
        
       
       
       
       <div class="clear"></div>
       </div><!--end of center content-->    

<?php
    require_once(BASEPATH."includes/web_footer.php")
?>
</body>

</html>

