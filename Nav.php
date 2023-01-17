 <div class="collapse" id="navbarToggleExternalContent">
     <div class="bg-dark p-4">
         <a href="logout.php" class="btn btn-danger mb-1">ออกจากระบบ</a>
     </div>
 </div>
 <nav class="navbar navbar-dark bg-dark">
     <div class="container-fluid">
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <a class="navbar-brand" href="page.php">SCQA</a>
         <!-- Button trigger modal -->
         <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalNAV">
             เพิ่มข้อมูล
         </button>

         <!-- Modal -->
         <div class="modal fade" id="exampleModalNAV" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h1 class="modal-title fs-5" id="exampleModalLabel">เพิ่มข้อมูล</h1>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                         <form method="post" action="./additem/additem-add.php">
                             <div class="input-group mb-3">
                                 <span class="input-group-text" id="basic-addon1">itemname: </span>
                                 <input class="form-control" type="text" name="ItemName" value="" />
                             </div>
                             <div class="input-group mb-3">
                                 <span class="input-group-text" id="basic-addon1">Color:</span>
                                 <input class="form-control" type="text" name="itemColor" value="" />
                             </div>
                             <div class="input-group mb-3">
                                 <span class="input-group-text" id="basic-addon1">Revision:</span>
                                 <input class="form-control" type="text" name="itemRevision" value="" />
                             </div>
                             <div class="input-group mb-3">
                                 <span class="input-group-text" id="basic-addon1">MPN: </span>
                                 <input class="form-control" type="text" name="itemMPN" value="" />
                             </div>
                             <div class="input-group mb-3">
                                 <span class="input-group-text" id="basic-addon1">รูปภาพ</span>
                                 <input class="form-control" type="text" name="imageFileName" value="" />
                             </div>

                             
                            
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                         <input type="submit" class='btn btn-primary' value="บันทึกข้อมูล">
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </nav>