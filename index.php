<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/SIBUKMA/config/Core.php');
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(BASEPATH."includes/web_head.php")
?>

<!doctype html>
<html class="no-js" lang="zxx">

<body data-spy="scroll" data-target="#mainmenu" data-offset="15">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->



    <header class="relative" id="sc1">
        <!-- Header-background-markup -->
        <div class="header-bg relative home-slide">
            <div class="item">
                <img src="images/slide/tb7.jpg" alt="library" height="1000" width="2000">
            </div>
            <div class="item">
                <img src="images/slide/tb8.jpg" alt="library" height="1000" width="2000">
            </div>
            <div class="item">
                <img src="images/slide/tb7.jpg" alt="library" height="1000" width="2000">
            </div>
            <div class="item">
                <img src="images/slide/tb8.jpg" alt="library" height="1000" width="2000">
            </div>
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
                        <!--Logo-->
                        <a href="#sc1" class="navbar-left show text-white"><img src="images/buku2.png" alt="library" height="177" width="43" > SIBUKMA</a>
                        <div class="space-10"></div>
                    </div>
                    <!--Toggle-button-->

                    <!--Active User-->
                    
                    <!--Mainmenu list-->
                    <div class="navbar-right in fade" id="mainmenu">
                        <ul class="nav navbar-nav nav-white text-uppercase">
                            <li class="active">
                                <a href="#sc1">Home</a>
                            </li>
                            <li>
                                <a href="#sc2">About</a>
                            </li>
                            <li>
                                <a href="#sc4">Team</a>
                            </li>
                            <li>
                                <a href="#sc6">Client</a>
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
        <!-- Header-jumbotron -->
        <div class="space-100"></div>
        <div class="header-text">
            <div class="container">
                <div class="row wow fadeInUp">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 text-center">
                        <div class="jumbotron">
                            <h1 class="text-white">SISTEM INFORMASI BUKU MAKASSAR</h1>
                            <p class="text-white">Politeknik Negeri Ujung Pandang | JL. Perintis Kemerdekaan Km 10 Tamalanrea
                            </p>
                        </div>
                        <div class="title-bar white">
                            <ul class="list-inline list-unstyled">
                                <li><i class="icofont icofont-square"></i></li>
                                <li><i class="icofont icofont-square"></i></li>
                            </ul>
                        </div>
                        <div class="space-40"></div>
                    </div>
                </div>
                <div class="row wow fadeInUp" data-wow-delay="0.5s">
                    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 ">
                        <div class="panel">
                            <div class="panel-heading">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#book">Book</a></li>
                                    <li><a data-toggle="tab" href="#author">Author</a></li>
                                    <li><a data-toggle="tab" href="#publisher">Publisher</a></li>
                                </ul>
                            </div>
                            <div class="panel-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="book">
                                        <form action="#">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Enter book name">
                                                <div class="input-group-btn">
                                                    <button type="submit" class="btn btn-primary"><i class="icofont icofont-search-alt-2"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="author">
                                        <form action="#">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Enter author name">
                                                <div class="input-group-btn">
                                                    <button type="submit" class="btn btn-primary"><i class="icofont icofont-search-alt-2"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="publisher">
                                        <form action="#">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Enter publisher name">
                                                <div class="input-group-btn">
                                                    <button type="submit" class="btn btn-primary"><i class="icofont icofont-search-alt-2"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-100"></div>
        <!-- Header-jumbotron-end -->
    </header>
    <section class="gray-bg" id="sc2">
        <div class="space-80"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 text-center">
                    <h2>ABOUT <strong> SIBUKMA </strong></h2>
                    <div class="space-5"></div>
                    <div class="title-bar blue">
                        <ul class="list-inline list-unstyled">
                            <li><i class="icofont icofont-square"></i></li>
                            <li><i class="icofont icofont-square"></i></li>
                        </ul>
                    </div>
                    <div class="space-5"></div>
                    <h3><strong> Sistem Informasi Buku Makassar </strong></h3>
                </div>
            </div>
            <div class="space-7  "></div>
            <div class="row">
                <div class="hidden-xs hidden-sm col-sm-5 pull-right  wow fadeInRight">
                    <div class="space-60"></div>
                    <div class="">
                        <img src="images/about-slide/tb1.jpg" alt="library" height="100px" width="200px" style="margin : 0.5%">
                        <img src="images/about-slide/tb2.jpg" alt="library" height="100px" width="200px" >
                        <img src="images/about-slide/tb3.jpg" alt="library" height="100px" width="200px" style="margin : 0.5%">
                        <img src="images/about-slide/tb5.jpg" alt="library" height="100px" width="200px">
                    </div>
                </div>
                <div class="col-xs-12 col-md-7">
                    
                    <div class="space-7"></div>
                    <ul class="list-unstyled list-inline text-yellow tip">
                        <li><i class="icofont icofont-square"></i></li></ul>
                    <p>Buku adalah jendela dunia, dan kegiatan membaca buku merupakan suatu cara untuk membuka jendela tersebut agar kita bisa mengetahui lebih tentang dunia yang belum kita tahu sebelumnya.  Kegiatan tersebut dapat dilakukan oleh siapa saja, anak-anak, remaja, dewasa, maupun orang-orang yang telah berusia lanjut.</p>
                    <ul class="list-unstyled list-inline text-yellow tip">
                        <li><i class="icofont icofont-square"></i></li></ul>
                    <p>Buku adalah jendela dunia, dan kegiatan membaca buku merupakan suatu cara untuk membuka jendela tersebut agar kita bisa mengetahui lebih tentang dunia yang belum kita tahu sebelumnya.  Kegiatan tersebut dapat dilakukan oleh siapa saja, anak-anak, remaja, dewasa, maupun orang-orang yang telah berusia lanjut.</p>
                    <ul class="list-unstyled list-inline text-yellow tip">
                        <li><i class="icofont icofont-square"></i></li></ul>
                    <p>Tanpa kita sadari, manfaat membaca buku dapat memberikan banyak inspirasi bagi kita. Namun sayangnya kegiatan membaca buku akhir-akhir ini telah banyak diabaikan berbagai kalangan dengan alasan kesibukan, maupun karena adanya media yang lebih praktis untuk mendapatkan informasi seperti televisi, radio, maupun media internet.</p>
                    
                </div>
            </div>
        </div>
        <div class="space-60"></div>
    </section>
    <section>
        <div class="space-80"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 text-center">
                    <h2>Our <strong>Category</strong></h2>
                    <div class="space-20"></div>
                    <div class="title-bar blue">
                        <ul class="list-inline list-unstyled">
                            <li><i class="icofont icofont-square"></i></li>
                            <li><i class="icofont icofont-square"></i></li>
                        </ul>
                    </div>
                    <div class="space-30"></div>
                    <p>Silahkan pilih kategori buku yang Anda inginkan :</p>
                </div>
            </div>
            <div class="space-60"></div>
            <div class="row text-center">
                <div class="col-sm-3"></div>
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInLeft" data-wow-delay="0.2s" >
                    <div class="category-item well red text-cetnr">
                        <div class="category_icon">
                            <i class="icofont icofont-coins"></i>
                        </div>
                        <div class="space-20"></div>
                        <div class="title-bar">
                            <ul class="list-inline list-unstyled">
                                <li><i class="icofont icofont-square"></i></li>
                            </ul>
                        </div>
                        <div class="space-20"></div>
                        <a href="books.php">Technology</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInLeft" data-wow-delay="0.3s">
                    <div class="category-item well yellow text-cetnr">
                        <div class="category_icon ">
                            <i class="icofont icofont-bank-alt"></i>
                        </div>
                        <div class="space-20"></div>
                        <div class="title-bar">
                            <ul class="list-inline list-unstyled">
                                <li><i class="icofont icofont-square"></i></li>
                            </ul>
                        </div>
                        <div class="space-20"></div>
                        <a href="books.php">Novel</a>
                    </div>
                </div>
                
            </div>
            <div class="space-60"></div>
            <div class="row">
                <div class="col-xs-12 text-center">
                    <a href="books.php" class="btn btn-primary">See Books</a>
                </div>
            </div>
            <div class="space-80"></div>
        </div>
    </section>
    <section class="relative fix" id="sc3">
        <div class="overlay-bg blue">
            <img src="images/bg4.png" alt="library" >
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-md-6 book-list-position padding60  ">
                    <div class="book-list-photo">
                        <div class="book-list">
                            <div class="book_item">
                                <img src="images/book/bk1.png" alt="library">
                            </div>
                            <div class="book_item">
                                <img src="images/book/bk2.png" alt="library">
                            </div>
                            <div class="book_item">
                                <img src="images/book/bk3.png" alt="library">
                            </div>
                            <div class="book_item">
                                <img src="images/book/bk4.png" alt="library">
                            </div>
                            <div class="book_item">
                                <img src="images/book/bk5.png" alt="library">
                            </div>
                            <div class="book_item">
                                <img src="images/book/bk6.png" alt="library">
                            </div>
                        </div>
                    </div>
                    <div class="bookslide_nav">
                        <i class="icofont icofont-long-arrow-left testi_prev"></i>
                        <i class="icofont icofont-long-arrow-right testi_next"></i>
                    </div>
                </div>
                <div class="col-xs-12 pull-right col-md-6 padding60 gray-bg wow fadeInRight">
                    <div class="space-60"></div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-8 col-md-6">
                            <h2>Popular <strong>Books</strong></h2>
                            <div class="space-10"></div>
                            <div class="title-bar left blue">
                                <ul class="list-inline list-unstyled">
                                    <li><i class="icofont icofont-square"></i></li>
                                    <li><i class="icofont icofont-square"></i></li>
                                </ul>
                            </div>
                            <div class="space-20"></div>
                        </div>
                    </div>
                    <div class="space-20"></div>
                    <div class="book-content">
                        <div class="book-details">
                            <div class="book-details-item">
                                <h4 class="tip-left">Title</h4>
                                <p class="lead">Smothered In Hugs</p>
                                <div class="space-10"></div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-8">
                                        <h4 class="tip-left">Author</h4>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/author.jpg" class="media-object author-photo img-thumbnail" alt="library">
                                            </div>
                                            <div class="media-body">
                                                <h5>Ucly Man</h5>
                                                <p>23 Books Created</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <h4>Page</h4>
                                        <p>320 pages</p>
                                    </div>
                                </div>
                                <div class="space-30"></div>
                                <h4 class="tip-left">Description</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla libero dui, pretium non tincidunt eget, mattis eu nunc. Aenean egestas nisi vel urna tempus aliquam. Etiam fringilla tempor risus. Nulla vitae elementum felis. Vestibulum ultricies feugiat est id ornare. Morbi non dapibus ante.</p>
                                <div class="space-20"></div>
                                <h4 class="tip-left">Rating</h4>
                                <ul class="list-inline list-unstyled rating-star">
                                    <li class="active"><i class="icofont icofont-star"></i></li>
                                    <li class="active"><i class="icofont icofont-star"></i></li>
                                    <li class="active"><i class="icofont icofont-star"></i></li>
                                    <li class=""><i class="icofont icofont-star"></i></li>
                                    <li><i class="icofont icofont-star"></i></li>
                                </ul>
                                <div class="space-20"></div>
                                <a href="books.php" class="btn btn-primary hover-btn-default">See The Book</a>
                                <a href="books.php" class="btn btn-primary hover-btn-default">Read Later</a>
                            </div>
                            <div class="book-details-item">
                                <h4 class="tip-left">Title</h4>
                                <p class="lead">A Finished Novel Kit</p>
                                <div class="space-10"></div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-8">
                                        <h4 class="tip-left">Author</h4>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/client/client1.jpg" class="media-object author-photo img-thumbnail" alt="library">
                                            </div>
                                            <div class="media-body">
                                                <h5>Drean Bravo</h5>
                                                <p>23 Books Created</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <h4>Page</h4>
                                        <p>320 pages</p>
                                    </div>
                                </div>
                                <div class="space-30"></div>
                                <h4 class="tip-left">Description</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla libero dui, pretium non tincidunt eget, mattis eu nunc. Aenean egestas nisi vel urna tempus aliquam. Etiam fringilla tempor risus. Nulla vitae elementum felis. Vestibulum ultricies feugiat est id ornare. Morbi non dapibus ante.</p>
                                <div class="space-20"></div>
                                <h4 class="tip-left">Rating</h4>
                                <ul class="list-inline list-unstyled rating-star">
                                    <li class="active"><i class="icofont icofont-star"></i></li>
                                    <li class="active"><i class="icofont icofont-star"></i></li>
                                    <li class=""><i class="icofont icofont-star"></i></li>
                                    <li class=""><i class="icofont icofont-star"></i></li>
                                    <li><i class="icofont icofont-star"></i></li>
                                </ul>
                                <div class="space-20"></div>
                                <a href="books.html" class="btn btn-primary hover-btn-default">See The Book</a>
                                <a href="books.html" class="btn btn-primary hover-btn-default">Read Later</a>
                            </div>
                            <div class="book-details-item">
                                <h4 class="tip-left">Title</h4>
                                <p class="lead">Misty Destiny</p>
                                <div class="space-10"></div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-8">
                                        <h4 class="tip-left">Author</h4>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/client/client3.jpg" class="media-object author-photo img-thumbnail" alt="library">
                                            </div>
                                            <div class="media-body">
                                                <h5>Jhon shon</h5>
                                                <p>23 Books Created</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <h4>Page</h4>
                                        <p>320 pages</p>
                                    </div>
                                </div>
                                <div class="space-30"></div>
                                <h4 class="tip-left">Description</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla libero dui, pretium non tincidunt eget, mattis eu nunc. Aenean egestas nisi vel urna tempus aliquam. Etiam fringilla tempor risus. Nulla vitae elementum felis. Vestibulum ultricies feugiat est id ornare. Morbi non dapibus ante.</p>
                                <div class="space-20"></div>
                                <h4 class="tip-left">Rating</h4>
                                <ul class="list-inline list-unstyled rating-star">
                                    <li class="active"><i class="icofont icofont-star"></i></li>
                                    <li class="active"><i class="icofont icofont-star"></i></li>
                                    <li class="active"><i class="icofont icofont-star"></i></li>
                                    <li class="active"><i class="icofont icofont-star"></i></li>
                                    <li><i class="icofont icofont-star"></i></li>
                                </ul>
                                <div class="space-20"></div>
                                <a href="books.html" class="btn btn-primary hover-btn-default">See The Book</a>
                                <a href="books.html" class="btn btn-primary hover-btn-default">Read Later</a>
                            </div>
                            <div class="book-details-item">
                                <h4 class="tip-left">Title</h4>
                                <p class="lead">The Whispering mage</p>
                                <div class="space-10"></div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-8">
                                        <h4 class="tip-left">Author</h4>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/client/client3.jpg" class="media-object author-photo img-thumbnail" alt="library">
                                            </div>
                                            <div class="media-body">
                                                <h5>Maikel jekson</h5>
                                                <p>23 Books Created</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <h4>Page</h4>
                                        <p>320 pages</p>
                                    </div>
                                </div>
                                <div class="space-30"></div>
                                <h4 class="tip-left">Description</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla libero dui, pretium non tincidunt eget, mattis eu nunc. Aenean egestas nisi vel urna tempus aliquam. Etiam fringilla tempor risus. Nulla vitae elementum felis. Vestibulum ultricies feugiat est id ornare. Morbi non dapibus ante.</p>
                                <div class="space-20"></div>
                                <h4 class="tip-left">Rating</h4>
                                <ul class="list-inline list-unstyled rating-star">
                                    <li class="active"><i class="icofont icofont-star"></i></li>
                                    <li class=""><i class="icofont icofont-star"></i></li>
                                    <li class=""><i class="icofont icofont-star"></i></li>
                                    <li class=""><i class="icofont icofont-star"></i></li>
                                    <li><i class="icofont icofont-star"></i></li>
                                </ul>
                                <div class="space-20"></div>
                                <a href="books.html" class="btn btn-primary hover-btn-default">See The Book</a>
                                <a href="books.html" class="btn btn-primary hover-btn-default">Read Later</a>
                            </div>
                            <div class="book-details-item">
                                <h4 class="tip-left">Title</h4>
                                <p class="lead">Stream of Window</p>
                                <div class="space-10"></div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-8">
                                        <h4 class="tip-left">Author</h4>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/author.jpg" class="media-object author-photo img-thumbnail" alt="library">
                                            </div>
                                            <div class="media-body">
                                                <h5>Jeck kalis</h5>
                                                <p>23 Books Created</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <h4>Page</h4>
                                        <p>320 pages</p>
                                    </div>
                                </div>
                                <div class="space-30"></div>
                                <h4 class="tip-left">Description</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla libero dui, pretium non tincidunt eget, mattis eu nunc. Aenean egestas nisi vel urna tempus aliquam. Etiam fringilla tempor risus. Nulla vitae elementum felis. Vestibulum ultricies feugiat est id ornare. Morbi non dapibus ante.</p>
                                <div class="space-20"></div>
                                <h4 class="tip-left">Rating</h4>
                                <ul class="list-inline list-unstyled rating-star">
                                    <li class="active"><i class="icofont icofont-star"></i></li>
                                    <li class="active"><i class="icofont icofont-star"></i></li>
                                    <li class="active"><i class="icofont icofont-star"></i></li>
                                    <li class="active"><i class="icofont icofont-star"></i></li>
                                    <li><i class="icofont icofont-star"></i></li>
                                </ul>
                                <div class="space-20"></div>
                                <a href="books.html" class="btn btn-primary hover-btn-default">See The Book</a>
                                <a href="books.html" class="btn btn-primary hover-btn-default">Read Later</a>
                            </div>
                            <div class="book-details-item">
                                <h4 class="tip-left">Title</h4>
                                <p class="lead">The Ashes's Wizards</p>
                                <div class="space-10"></div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-8">
                                        <h4 class="tip-left">Author</h4>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/client/client2.jpg" class="media-object author-photo img-thumbnail" alt="library">
                                            </div>
                                            <div class="media-body">
                                                <h5>Drean stain</h5>
                                                <p>23 Books Created</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <h4>Page</h4>
                                        <p>320 pages</p>
                                    </div>
                                </div>
                                <div class="space-30"></div>
                                <h4 class="tip-left">Description</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla libero dui, pretium non tincidunt eget, mattis eu nunc. Aenean egestas nisi vel urna tempus aliquam. Etiam fringilla tempor risus. Nulla vitae elementum felis. Vestibulum ultricies feugiat est id ornare. Morbi non dapibus ante.</p>
                                <div class="space-20"></div>
                                <h4 class="tip-left">Rating</h4>
                                <ul class="list-inline list-unstyled rating-star">
                                    <li class="active"><i class="icofont icofont-star"></i></li>
                                    <li class="active"><i class="icofont icofont-star"></i></li>
                                    <li class="active"><i class="icofont icofont-star"></i></li>
                                    <li class="active"><i class="icofont icofont-star"></i></li>
                                    <li><i class="icofont icofont-star"></i></li>
                                </ul>
                                <div class="space-20"></div>
                                <a href="books.html" class="btn btn-primary hover-btn-default">See The Book</a>
                                <a href="books.html" class="btn btn-primary hover-btn-default">Read Later</a>
                            </div>
                            <div class="book-details-item">
                                <h4 class="tip-left">Title</h4>
                                <p class="lead">The Time of the Soul</p>
                                <div class="space-10"></div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-8">
                                        <h4 class="tip-left">Author</h4>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/client/client2.jpg" class="media-object author-photo img-thumbnail" alt="library">
                                            </div>
                                            <div class="media-body">
                                                <h5>Robi Bopara</h5>
                                                <p>23 Books Created</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <h4>Page</h4>
                                        <p>320 pages</p>
                                    </div>
                                </div>
                                <div class="space-30"></div>
                                <h4 class="tip-left">Description</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla libero dui, pretium non tincidunt eget, mattis eu nunc. Aenean egestas nisi vel urna tempus aliquam. Etiam fringilla tempor risus. Nulla vitae elementum felis. Vestibulum ultricies feugiat est id ornare. Morbi non dapibus ante.</p>
                                <div class="space-20"></div>
                                <h4 class="tip-left">Rating</h4>
                                <ul class="list-inline list-unstyled rating-star">
                                    <li class="active"><i class="icofont icofont-star"></i></li>
                                    <li class="active"><i class="icofont icofont-star"></i></li>
                                    <li class="active"><i class="icofont icofont-star"></i></li>
                                    <li class="active"><i class="icofont icofont-star"></i></li>
                                    <li><i class="icofont icofont-star"></i></li>
                                </ul>
                                <div class="space-20"></div>
                                <a href="books.html" class="btn btn-primary hover-btn-default">See The Book</a>
                                <a href="books.html" class="btn btn-primary hover-btn-default">Read Later</a>
                            </div>
                        </div>
                    </div>
                    <div class="space-60"></div>
                </div>
            </div>
        </div>
    </section>
    <section id="sc4">
        <div class="space-80"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 text-center">
                    <h2>Our <strong>Team</strong></h2>
                    <div class="space-2"></div>
                    <div class="title-bar blue">
                        <ul class="list-inline list-unstyled">
                            <li><i class="icofont icofont-square"></i></li>
                            <li><i class="icofont icofont-square"></i></li>
                        </ul>
                    </div>
                    <div class="space-2"></div>
                </div>
            </div>
            <div class="space-5"></div>
            <div class="row team_slide text-center">
                <div class="col-xs-12">
                    <div class="well single-team">
                        <div class="team-member-photo relative">
                            <img src="images/team/accan.jpg" alt="library">
                            <div class="team_overlay_icon">
                                <a href="books.html" class="btn btn-default">See Prolife</a>
                            </div>
                        </div>
                        <div class="space-5"></div>
                        <div class="title-bar">
                            <ul class="list-inline list-unstyled">
                                <li><i class="icofont icofont-square"></i></li>
                            </ul>
                        </div>
                        <div class="space-2"></div>
                        <h4>Rafsanjani Lestari Negara</h4>
                        <span>425 15 001</span>
                        <div class="space-5"></div>
                            <ul class="list-inline list-unstyled social-list">
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="well single-team">
                        <div class="team-member-photo relative">
                            <img src="images/team/dosen.png" alt="library">
                            <div class="team_overlay_icon">
                                <a href="books.html" class="btn btn-default">See Prolife</a>
                            </div>
                        </div>
                        <div class="space-5"></div>
                        <div class="title-bar">
                            <ul class="list-inline list-unstyled">
                                <li><i class="icofont icofont-square"></i></li>
                            </ul>
                        </div>
                        <div class="space-2"></div>
                        <h4>Eddy Tungadi</h4>
                        <span>197908232010121001</span>
                        <div class="space-5"></div>
                        <ul class="list-inline list-unstyled social-list">
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="well single-team">
                        <div class="team-member-photo relative">
                            <img src="images/team/acci.png" alt="library">
                            <div class="team_overlay_icon">
                                <a href="books.html" class="btn btn-default">See Prolife</a>
                            </div>
                        </div>
                        <div class="space-5"></div>
                        <div class="title-bar">
                            <ul class="list-inline list-unstyled">
                                <li><i class="icofont icofont-square"></i></li>
                            </ul>
                        </div>
                        <div class="space-2"></div>
                        <h4>Asriyani Wardihan</h4>
                        <span>425 15 025</span>
                        <div class="space-5"></div>
                        <ul class="list-inline list-unstyled social-list">
                        </ul>
                    </div>
                </div>
               
            </div>
        </div>
        <div class="space-80"></div>
    </section>     
    <section class="relative" id="sc6">
        <div class="overlay-bg">
            <img src="images/bg4.png" alt="library">
        </div>
        <div class="space-80"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 text-center">
                    <h2 class="text-white">What People <strong>Say</strong></h2>
                    <div class="space-20"></div>
                    <div class="title-bar white">
                        <ul class="list-inline list-unstyled">
                            <li><i class="icofont icofont-square"></i></li>
                            <li><i class="icofont icofont-square"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="space-60"></div>
            <div class="row text-white testimonial-slide">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 text-center">
                    <h5 class="text-white">Ariana Grande</h5>
                    <span class="show">Student</span>
                    <div class="space-30"></div>
                    <q>Hello guys, berikan komentar anda</q>
                    <div class="space-30"></div>
                    <img src="images/client/client2.jpg" class="img-thumbnail img-circle" alt="library">
                </div>
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 text-center">
                    <h5 class="text-white">Ariana Grande</h5>
                    <span class="show">Student</span>
                    <div class="space-30"></div>
                    <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla libero dui, pretium non mattis eu nunc. Aenean egestas nisi vel urna tempus aliquam. Etiam fringilla tempor risus.Nulla vitae elementum felis. Vestibulum ultricies feugiat est id ornare. Morbi non dapibus ante.</q>
                    <div class="space-30"></div>
                    <img src="images/client/client1.jpg" class="img-thumbnail img-circle" alt="library">
                </div>
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 text-center">
                    <h5 class="text-white">Ariana Grande</h5>
                    <span class="show">Student</span>
                    <div class="space-30"></div>
                    <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla libero dui, pretium non mattis eu nunc. Aenean egestas nisi vel urna tempus aliquam. Etiam fringilla tempor risus.Nulla vitae elementum felis. Vestibulum ultricies feugiat est id ornare. Morbi non dapibus ante.</q>
                    <div class="space-30"></div>
                    <img src="images/client/client3.jpg" class="img-thumbnail img-circle" alt="library">
                </div>
            </div>
        </div>
        <div class="space-60"></div>
        <div class="space-80"></div>
    </section>
    <section class="bg-primary relative">
        <div class="space-50"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-7">
                    <h2 class="text-white">Lets Give<strong>Your Suggestion and Comments</strong></h2>
                    <div class="space-20"></div>
                    <div class="title-bar left white">
                        <ul class="list-inline list-unstyled">
                            <li><i class="icofont icofont-square"></i></li>
                            <li><i class="icofont icofont-square"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="space-20"></div>
            <div class="row">
                <div class="col-xs-6 col-sm-7">
                    <form action="#">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" class="form-control bg-none" placeholder="Enter your name...">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" class="form-control bg-none" placeholder="Enter your email...">
                                </div>
                            </div>
                            
                            <div class="col-xs-12 col-sm-6"></div>
                                <div class="form-group col-lg-12">
                                  <label for="message">Message</label>
                                  <textarea type="message" class="form-control" class="form-control bg-none" placeholder="Enter your message..." rows="6"></textarea>
                                </div>
                                <div class="form-group col-sm-6" >
                                  <button type="submit" class="btn btn-default">Send<i class="fa fa-long-arrow-right" ></i></button>
                                </div>
                              </div>
                        </div>
                    </form>
                </div>
                <div class="col-xs-6 col-sm-5 outer-image wow fadeInRight">
                    <img src="images/outer-image3.jpg" alt="library">

                </div>
            </div>
        </div>
        <div class="space-80"></div>
    </section>
<?php
	require_once(BASEPATH."includes/web_footer.php")
?>
</body>

</html>