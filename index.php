<?php
include 'bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'HeadDetail.php';
    ?>
    
</head>

<body>
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="card" style="width: 25rem;">
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Login</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Register</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <?php include 'Login.php'; ?>
                    </div>
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                        <?php include 'Register.php'; ?>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</body>

</html>