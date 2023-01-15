<?php session_start();
$ID = $_SESSION['ID'];
$name = $_SESSION['name'];
$level = $_SESSION['level'];
if ($level != 'user') {
  Header("Location: ./logout.php");
}
include './Bootstrap.html';
?>

<div class="container">


  <div class="card">
    <div class="card-body">
      <div class="alert alert-primary mt-3" role="alert">
        <h5 class="mt-3">เลือกชนิดของอุปกรณ์ที่จะทำการตรวจสอบ</h5>
      </div>
      <? include './Show_Product.php'; ?>
    </div>
  </div>
</div>