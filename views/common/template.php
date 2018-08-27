<!doctype html>
<html lang="en">
<head>
  <?php include 'views/common/headData.php';?>
</head>
<?php
if(isset($_POST['updateStudent'])){
  echo '<body class="bg-dark modal-open">';
} else{
  echo '<body class="bg-dark">';
}
?>
  <?php include 'views/common/header.php';?>
<div id="main" class="container bg-white">
  <?php
    $path = 'views/pages/'.$page.'.php';          // failo kelias
    if(file_exists($path)){                       // tikrinama ar egzistuoja failo kelias
      include $path;                              // jei taip, įtraukiamas failas
    } else {        
      include 'views/pages/'.$page.'/index.php';  // jei ne, įtraukiama direktorija/index.php
    }
  ?>
</div>
  <?php include 'views/common/footer.php';?>
  <?php include 'views/common/scripts.php';?>
</body>
</html>