<?php 
require_once 'header.php'; 
require_once 'nav.php';
require_once '../../settings/code/nizam.php';
?>

        <!--**********************************
            Content body start
            ***********************************-->
            <div class="content-body">
            	<!-- row -->

            	<div class="container">
            		<div class="row">
            			<div class="col-12">
            				<h3 class="content-heading">Əlaqə Nizam</h3>
            			</div>

            			<div class="col-lg-12">
            				<div class="card">
            					<div class="card-body">
            						<h4 class="card-title">Səhifənin əlaqə nizamlamalarını buradan dəyişdirə bilərsiniz!</h4>
            						<div class="basic-form">
            							<form class="form-valide-with-icon" action="#" method="POST">
            								<input type="hidden" name="catagory" value="elaqe" />
            								<div class="form-group">
            									<label class="text-label">Ünvan *</label>
            									<div class="input-group">
            										<div class="input-group-prepend">
            											<span class="input-group-text"> <i class="fa fa-address-card" ></i> </span>
            										</div>
            										<input type="text" class="form-control" id="val-username1" name="unvan" value="<?= $data['unvan'] ?>" >
            									</div>
            								</div>

            								<div class="form-group">
            									<label class="text-label">Ofis Telefonu *</label>
            									<div class="input-group">
            										<div class="input-group-prepend">
            											<span class="input-group-text"> <i class="fa fa-phone" ></i> </span>
            										</div>
            										<input type="tel" class="form-control" value="<?= $data['ofis'] ?>" id="val-username1" name="ofis" >
            									</div>
            								</div>
                                                            <div class="form-group">
                                                                  <label class="text-label">Mobil Telefon *</label>
                                                                  <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                              <span class="input-group-text"> <i class="fa fa-mobile" ></i> </span>
                                                                        </div>
                                                                        <input type="tel" class="form-control" value="<?= $data['tel'] ?>" id="val-username1" name="tel" >
                                                                  </div>
                                                            </div>
                                                            <div class="form-group">
                                                                  <label class="text-label">email *</label>
                                                                  <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                              <span class="input-group-text"> <i class="fa fa-envelope" ></i> </span>
                                                                        </div>
                                                                        <input type="email" class="form-control" value="<?= $data['email'] ?>" id="val-username1" name="email" >
                                                                  </div>
                                                            </div>
                                                             <div class="form-group">
                                                                  <label class="text-label">Poçt *</label>
                                                                  <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                              <span class="input-group-text"> <i class="fa fa-envelope" ></i> </span>
                                                                        </div>
                                                                        <input type="text" class="form-control" value="<?= $data['poct'] ?>" id="val-username1" name="poct" >
                                                                  </div>
                                                            </div>
            								<button type="submit" class="btn btn-primary btn-block" name="e_yenile">Yenilə</button>
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