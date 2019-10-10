<?php require_once 'header.php';
require_once 'nav.php'; 
require_once '../../settings/code/login.php'; 

$rgetir= $login->R_getir($_GET);

if(!$login->Yoxla2()){
  header("Location: login.php");
}

?>





        <!--**********************************
            Content body start
            ***********************************-->
            <div class="content-body">

            	<!-- row -->

            	<div class="container">
            		<div class="row">
            			<div class="col-12">
            				<h3 class="content-heading mt-2">Profil- Redaktə</h3>
            			</div>
            			<div class="col-xl-12 col-xxl-12">
            				<div class="card">
            					<div class="card-body">
            						<h4 class="card-title"></h4>
            						<div class="basic-form">
            							 <form method="POST" action="#" enctype="multipart/form-data">
                                                            <input type="hidden" name="k_sekil" value="<?= $rgetir['sekil']  ?>" />
                                                            <h4 class="card-title">Cari Şəkil</h4>
                                                            <div class="form-group">
                                                               <img style="width: 200px; border-radius: 25%;" src="../../../<?= $rgetir['sekil']  ?>" />
                                                         </div>
                                                         <div class="basic-form custom_file_input">

                                                          <div class="input-group mb-3">
                                                            <div class="custom-file">
                                                                <input name="sekil" type="file" class="custom-file-input">
                                                                <label class="custom-file-label">Şəkil Seç</label>
                                                          </div>
                                                          <div class="input-group-append">
                                                          </div>
                                                    </div>   

                                              </div>
                          <h4 class="card-title">Username</h4>
                          <div class="form-group">
                            <input type="text" name="username" value="<?=$rgetir['username']?>" class="form-control input-rounded" />
                          </div>
                
                          
                          
                                              <h4 class="card-title">Email</h4>
                            <div class="form-group">
                             <input value="<?=$rgetir['email']?>"  type="email" name="email" class="form-control input-rounded" />
                           </div>

                                              <h4 class="card-title">Şifrə</h4>
                            <div class="form-group">
                             <input    type="text" name="sifre" class="form-control input-rounded" />
                           </div>

                           
                         <button type="submit" class="btn btn-primary btn-block" name="admin_yenile">Yenilə</button>

                       </form>
                     </div>

                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
        <!--**********************************
            Content body end
            ***********************************-->


            <?php require_once 'footer.php'; ?>