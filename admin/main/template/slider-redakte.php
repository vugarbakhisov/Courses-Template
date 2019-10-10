<?php require_once 'header.php';
require_once 'nav.php'; 
require_once '../../settings/code/slider.php'; 
$redakte = $slider->R_getir($_GET);
?>


        <!--**********************************
            Content body start
            ***********************************-->
            <div class="content-body">

            	<!-- row -->

            	<div class="container">
            		<div class="row">
            			<div class="col-12">
            				<h3 class="content-heading mt-2">Slider - Redaktə</h3>
            			</div>
            			<div class="col-xl-12 col-xxl-12">
            				<div class="card">
            					<div class="card-body">
            						<h4 class="card-title"></h4>
            						<div class="basic-form">
            							<form method="POST" action="#" enctype="multipart/form-data">
                            <input type="hidden" name="k_sekil" value="<?= $redakte['sekil']  ?>" />
                             <input type="hidden" name="id" value="<?= $redakte['id']  ?>" />
                            <h4 class="card-title">Cari Şəkil</h4>
                            <div class="form-group">
                             <img style="width: 200px; border-radius: 25%;" src="../../../<?= $redakte['sekil']  ?>" />
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
                          <h4 class="card-title">Ad</h4>
                          <div class="form-group">
                            <input type="text" name="ad" value="<?=  $redakte['Ad'] ?>" class="form-control input-rounded" />
                          </div>
                          <h4 class="card-title">Sıra</h4>
                          <div class="form-group">
                           <input type="number" min="1" max="10" name="sira" value="<?= $redakte['sira'] ?>" class="form-control input-rounded" />

                         </div>
                         < <h4 class="card-title">Qiyməti</h4>
                            <div class="form-group">
                             <input value="<?=  $redakte['qiymet'] ?>" min="0" name="qiymet" type="text" placeholder="Qiymət daxil edin.." class="form-control input-rounded" />
                           </div>
                         <button type="submit" class="btn btn-primary btn-block" name="s_yenile">Yenilə</button>

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