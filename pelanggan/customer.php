<!DOCTYPE html>
<html amp>
<?php
session_start();
if ($_SESSION['id'] == null){
  header( 'Location: ../index.php' );
}
?>
<head>  
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="../icon/logo3.jpg" type="image/x-icon">
  <meta name="description" content="">

  <title>Beranda</title>

  <link rel="stylesheet" href="../css/font-awesome.min.css"> 
 <link rel="stylesheet" href="../css/allhome.css">
 <link rel="stylesheet" href="../css/barberkc.css">
 <link rel="stylesheet" href="../css/khustable.css"><link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style amp-boilerplate>
body{
  -webkit-animation: -amp-start 8s steps(1,end) 0s 1 normal both;
  -moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;
  animation:-amp-start 8s steps(1,end) 0s 1 normal both
}
@-webkit-keyframes -amp-start{
  from{visibility:hidden}to{visibility:visible}
}
@-moz-keyframes -amp-start{
  from{visibility:hidden}to{visibility:visible}
}
@-ms-keyframes -amp-start{
  from{visibility:hidden}to{visibility:visible}
}
@-o-keyframes -amp-start{
  from{visibility:hidden}to{visibility:visible}
}
@keyframes -amp-start{
  from{visibility:hidden}to{visibility:visible}
}
</style> <!-- ini penting buat animasi navigasi jangan ditaruh css biar lanjayy -->

  <script async  src="https://cdn.ampproject.org/v0.js"></script>
  <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
  <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
</head>


<body>
<amp-sidebar id="sidebar" class="cid-rIduZ5xEHs" layout="nodisplay" side="right">
        <div class="builder-sidebar" id="builder-sidebar">
            <button on="tap:sidebar.close" class="close-sidebar">
                <span></span>
                <span></span>
            </button>

            <div class="sidebar mbr-white" data-app-modern-menu="true"><hr>
              <a class="text-primary display-3" href="settingup.php"><img src=../icon/set.jpg width=32px height=38px> Pengaturan</a><hr>
              <a class="text-primary display-3" href="../logout.php"><img src=../icon/out.jpg width=32px height=38px> Keluar</a><hr>
            </div>
        </div>
    </amp-sidebar>
  <section class="menu cid-rIduZ5xEHs" id="menu1-q">
    
    <nav class="headerbar sticky-nav">
      <div class="brand">
          
          <p class="brand-name mbr-fonts-style display-2"><img src=../icon/icn.png width=40px height=40px> KANG CUKUR</p>
      </div>
    </nav>
    
    <button on="tap:sidebar.toggle" class="ampstart-btn hamburger sticky-but">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </button>
</section>  
    	<div><br><br><br>
    	</div>
      <div><br>
      <amp-img src="../icon/logoutama.jpg" layout="responsive" width="8" height="8" alt="a sample image">
            </amp-img>
          </div>
    <div class="container">
      <div class="content3">
        <?php
        include "../koneksi.php";
$sql = "SELECT * FROM barbershop where statusbuka='Buka'";
  $query = mysqli_query($con, $sql);
  echo "<br><br>";
  echo "<h3>List Tukang Cukur</h3>";
  echo "<table border='1' align=center>";
  echo "<tr>
      <th>Nama</th>
      <th>Alamat</th>
      <th>Telepon</th>
      <th>Pesan</th>
      </tr>";
  
  while($data = mysqli_fetch_array($query)){
    ?>
      <tr>
        <td><?php echo $data['nm_tcukur']; ?></td>
        <td><?php echo $data['alamat']; ?></td>
        <td><?php echo $data['telp_tcukur']; ?></td>
        <td><a target="_blank" href="listbarb.php?id=<?php echo $data['id_tcukur']; ?>"><img src='../icon/google-maps.png' width='25' height='25' border='none' /></a></td>
      </tr>
    <?php
  }
  echo "</table>";
  echo "</fieldset>";
?>
</div>
    </div>
</section>
<section class="social-follow cid-rIdugNkbS4" id="social-follow-p">
    <div class="wrapper">
<br>        
        <div class="icons-list">   
        <a href="https://facebook.com/Kang-Cukur-e-project-102562001317578/" target="_blank">
                <img src="../icon/iconfb.png" width="25" height="25"></img>
            </a>
<a href="https://instagram.com/kangcukur2020?igshid=19o1sshkg4bln" target="_blank">
                <img src="../icon/iconig.png" width="25" height="25"></img>
            </a>
</div>
    </div>
</section>
<section class="footer1 cid-rIdooQtecn" id="footer1-j">
    <div class="container">
        <div class="mbr-col-sm-12 align-center mbr-white">
            <p class="mbr-text mbr-fonts-style display-7">
                © 2019 by KANG CUKUR</p>
        </div>
    </div>
</section>
  
</body>
</html>