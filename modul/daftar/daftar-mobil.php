<!DOCTYPE HTML>
<html>
<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/saferental/config/Core.php');
defined('BASEPATH') OR exit('No direct script access allowed');

//include_once(BASEPATH.'modul/login/script_login.php');
include_once(BASEPATH.'includes/web_head.php');
include_once(BASEPATH.'includes/web_menu.php');

?>
<link rel="stylesheet" href="<?php echo BASEURL?>assets/css/theme.css">

<body>
<!-- Parallax Effect -->
<script>
	//$(document).ready(function(){$('#parallax-pagetitle').parallax("50%", -0.55);});
</script>

<section class="parallax-effect">
  <div id="parallax-pagetitle" style="background-image: url(./mobil/images/parallax/1900x911.gif);">
    <div class="color-overlay"> 
      <!-- Page title -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <ol class="breadcrumb">
              <li><a href="index.php">Daftar</a></li>
              <li class="active">Daftar Mobil Tersedia</li>
            </ol>
            <h1>Daftar Mobil Tersedia</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Filter -->
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <ul class="nav nav-pills" id="filters">
        <li class="active"><a href="#" data-filter="*">All</a></li>
        <?php
		$db = new Database("root","admin","saferental");
		$rs = $db->psql("SHOW","mobil.no_stnk, merek_mobil.nama, merek_mobil.manufaktur, mobil.harga, mobil.file_gambar_mobil, mobil.fitur_id","mobil,merek_mobil","merek_mobil.id = mobil.id_mobil");
		foreach($rs as $data){
			$cname = '.'.$data['manufaktur'].'-'.$data['nama'];
			$text = $data['manufaktur'].' '.$data['nama'];	
			echo '<li><a href="#" data-filter="'.$cname.'">'.$text.'</a></li>';
		}
		/* Versi native
		$sql = "select mobil.no_stnk, merek_mobil.nama, merek_mobil.manufaktur, mobil.harga, mobil.file_gambar_mobil, mobil.fitur_id from mobil, merek_mobil where merek_mobil.id = mobil.id_mobil";
		$result = mysql_query($sql);
		
		while($data = mysql_fetch_assoc($result)){
			
			$cname = '.'.$data['manufaktur'].'-'.$data['nama'];
			$text = $data['manufaktur'].' '.$data['nama'];	
			echo '<li><a href="#" data-filter="'.$cname.'">'.$text.'</a></li>';
		}
		*/
		?>
      </ul>
    </div>
  </div>
</div>

<!-- Rooms -->
<section class="rooms mt100">
  <div class="container">
    <div class="row room-list fadeIn appear"> 
      <!-- Room -->
<?php
foreach($rs as $data){
	$cname = $data['manufaktur'].'-'.$data['nama'];
	$text = $data['manufaktur'].' '.$data['nama'];

?>
      <div class="col-sm-4 <?php echo $cname ?>">
        <div class="room-thumb"> <img src="<?php echo BASEURL ?>/assets/images/<?php echo $data['file_gambar_mobil'] ?>" alt="room 1" class="img-responsive" />
          <div class="mask">
            <div class="main">
              <h5><?php echo $text ?></h5>
              <div class="price">Rp. <?php echo number_format($data['harga'],2,',','.')?><span>24 jam</span></div>
            </div>
            <div class="content">
              <p><span>Keterangan</p>
              <div class="row">
                <div class="col-xs-6">
                  <ul class="list-unstyled">
		<?php
			$arno = explode(",",$data['fitur_id']);
			$sql = "select * from fitur";
			$resultf = mysql_query($sql);
			while($dataf = mysql_fetch_assoc($resultf)){
				$no = $dataf['id_fitur'];
				$namafitur = $dataf['nama'];
		
				//mengecek apakah fitur dimiliki mobil
				if(in_array($no,$arno)) echo '<li><i class="fa fa-check"></i>'.$namafitur.'</li>';
				else echo '<li><i class="fa fa-times"></i>'.$namafitur.'</li>';
			}
		?>          
				  </ul>
                </div>
                <div class="col-xs-6">
                  <ul class="list-unstyled">
                    <li><i class="fa fa-times-circle"></i> No sleepy </li>
                    <li><i class="fa fa-check-circle"></i> Safety</li>
                  </ul>
                </div>
              </div>
              <a href="detail-mobil.php" class="btn btn-primary btn-block">Book Now</a> </div>
          </div>
        </div>
      </div>
<?php
}

?>
	</div>
  </div>
</section>

<!-- Go-top Button -->
<div id="go-top"><i class="fa fa-angle-up fa-2x"></i></div>
<?php
include_once (BASEPATH.'includes/web_footer.php');
?>
</body>
</html>