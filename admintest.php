<?php
include './Bootstrap.html';
?>

<div class="container overflow-hidden">

  <p>
    <a class="btn btn-primary mt-3" data-bs-toggle="collapse" href="#tbuser" role="button" aria-expanded="false" aria-controls="collapseExample">
      รายชื่อผู้ใช้
    </a>
    <a class="btn btn-primary mt-3" data-bs-toggle="collapse" href="#tbproduct" role="button" aria-expanded="false" aria-controls="collapseExample">
      รายการสินค้า
    </a>
  </p>


  <div class="collapse" id="tbuser">
    <div class="card card-body ">
      <? include './Show_Ac.php'; ?>
    </div>
  </div>

  <div class="collapse" id="tbproduct">
    <div class="card card-body">
      <? include './Show_Product.php'; ?>
    </div>
  </div>

</div>
</body>

</html>