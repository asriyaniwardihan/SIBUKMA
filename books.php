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
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="space-100"></div>
        <!-- Mainmenu-markup-end -->
       
    </header>
    <section>
        <div class="space-80"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-10 pull-right">
                    <h4>Search Book</h4>
                    <div class="space-5"></div>
                    <form action="" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control" name="judul" placeholder="Enter book name">
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-primary"><i class="icofont icofont-search-alt-2"></i></button>
                            </div>
                        </div>
                    </form>
                    <div class="space-30"></div>
                    <?php           
                    $db = new Database();
                    if(isset($_POST['judul'])){
                        $text = $_POST['judul'];
                        $rs = $db->psql("SHOW","*","buku","judul like '%$text%'");
                    }
                    else 
                        $rs = $db->psql("SHOW","*","buku");
                    $jmldata = count($rs);
                    ?>

                    <div class="row">
                        <div class="pull-left col-xs-12 col-sm-5 col-md-6">
                            <p>Result For <a href="" class="text-primary">"Your Searching"</a></p>
                            <p><strong> <?php echo $jmldata ?></strong>  <strong></strong> Book Found</p>
                        </div>
                        
                    </div>
                    <hr>
                    <div class="space-20"></div>
                    <div class="row">
                        <?php
                    foreach($rs as $data) {
                    ?>
                        <div class="col-xs-6">
                            <div class="category-item well yellow">
                                <div class="media">
                                    <div class="media-left">
                                        <img style="width:200px; height:300px" src="<?php echo "gambar/".$data['id'].".png"?>" class="media-object" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h5><?php echo $data['id_buku']." ".$data['judul'] ?></h5>
                                        <h6>By <?php echo $data['penulis'] ?></h6>
                                        <div class="space-10"></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </p>
                                        <a href="details.php?id_buku=<?php echo $data['id_buku']?> " class="more" class="text-primary">Details Book</a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
            <?php
					}
			?>			
					
    					</div>
                    <div class="space-60"></div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="shop-pagination pull-right">
                                <ul id="pagination-demo" class="pagination-sm pagination">
                                    <li class="page-item first"><a href="#" class="page-link">First</a></li>
                                    <li class="page-item prev"><a href="#" class="page-link">Previous</a></li>
                                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                                    <li class="page-item"><a href="#" class="page-link">6</a></li>
                                    <li class="page-item"><a href="#" class="page-link">7</a></li>
                                    <li class="page-item next"><a href="#" class="page-link">Next</a></li>
                                    <li class="page-item last"><a href="#" class="page-link">Last</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar-Start -->
                <div class="col-xs-12 col-md-2">
                    <aside>
                        <h3><i class="icofont icofont-filter"></i> Filter By</h3>
                        <div class="space-30"></div>
                        <div class="sigle-sidebar">
                            <h4>Category</h4>
                            <hr>
                            <ul class="list-unstyled menu-tip">
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Novel</a></li>
                            </ul>
                            <a href="#" class="btn btn-primary btn-xs">See All</a>
                        </div>
                        <div class="space-20"></div>
                    </aside>
                </div>
                <!-- Sidebar-End -->
            </div>
        </div>
        <div class="space-80"></div>
    </section>
</body>
<?php
require_once(BASEPATH."includes/web_footer.php")
?>

</html>