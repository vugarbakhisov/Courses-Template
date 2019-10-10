<?php require_once 'header.php';
require_once 'nav.php'; 
require_once '../../settings/code/xidmet.php';
?>


        <!--**********************************
            Content body start
            ***********************************-->
            <div class="content-body">

            	<!-- row -->

            	<div class="container">
            		<div class="row">
            			<div class="col-12">
            				<h3 class="content-heading mt-2">Xidmət Əlavə</h3>
            			</div>
            			<div class="col-xl-12 col-xxl-12">
            				<div class="card">
            					<div class="card-body">
            						<h4 class="card-title"></h4>
            						<div class="basic-form">
            							<form method="POST" action="#" enctype="multipart/form-data">
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
                            <h4 class="card-title">Başlıq</h4>
                            <div class="form-group">
                             <input type="text" name="basliq" placeholder="Şəklin adını daxil edin.." class="form-control input-rounded" required="required" />
                           </div>
                           <h4 class="card-title">Mətn</h4>
                           <div class="form-group">
                             <textarea required="required" name="yazi" rows="5" class="form-control"></textarea>
                           </div>
                           <button type="submit" class="btn btn-primary btn-block" name="x_elave">Əlavə Et</button>

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