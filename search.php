<?php
session_start();
include('condb.php');
if (isset($_POST["search"])) {
    $search = $_POST["search"];
} else {
    $search = "";
}
$trimItemName = trim($search);
$ireplaceTrimItemName = str_ireplace(" ", "-", $trimItemName);
if (!$_SESSION["id"]) {  //check session
    Header("Location: ../index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 
}
?>

<!doctype html>
<html>
<head>
    <?php include 'HeadDetail.php'; ?>
</head>
<body>
    <?php 
    include 'bootstrap.php';
    include 'Nav.php';
    ?>
    <div class="card">
        <div class="card-body">

            <center>
                <?php
                include 'commonSearch.php';
                ?>
                <p>
                <h2> ผลลัพธ์ : <?php echo $search ?></h2>
                </p>
            </center>
            <div class="container text-center">
                <div class="row">
                    <?php
                    if ($search == ""){
                        $sql1 = " SELECT * FROM item ORDER BY itemid ASC ";
                    }else{
                        $sql1 = " SELECT * FROM item Where ItemName LIKE '$trimItemName%' ";
                    }
                    $q = mysqli_query($con, $sql1);
                    $no = 1;
                    while ($f = mysqli_fetch_assoc($q)) {
                        include 'commonItemCard.php' ;
                        $no++;
                    }
                    mysqli_close($con);
                    ?>

                </div>
            </div>
            </p>
        </div>
    </div>
</body>
</html>