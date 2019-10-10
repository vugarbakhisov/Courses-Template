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
            				<h3 class="content-heading">Ümumi Nizamlamalar</h3>
            			</div>

            			<div class="col-lg-12">
            				<div class="card">
            					<div class="card-body">
            						<h4 class="card-title">Səhifənin ümumi nizamlamalarını buradan dəyişdirə bilərsiniz!</h4>
            						<div class="basic-form">
            							<form class="form-valide-with-icon" action="#" method="POST">
            								<input type="hidden" name="catagory" value="umumi" />
            								<div class="form-group">
            									<label class="text-label">Başlıq *</label>
            									<div class="input-group">
            										<div class="input-group-prepend">
            											<span class="input-group-text"> <i class="fa fa-header" ></i> </span>
            										</div>
            										<input type="text" class="form-control" id="val-username1" name="title" value="<?= $data['title'] ?>" >
            									</div>
            								</div>

            								<div class="form-group">
            									<label class="text-label">Açıqlama *</label>
            									<div class="input-group">
            										<div class="input-group-prepend">
            											<span class="input-group-text"> <i class="fa fa-align-justify" ></i> </span>
            										</div>
            										<input type="text" class="form-control" value="<?= $data['description'] ?>" id="val-username1" name="description" placeholder="Enter a username..">
            									</div>
            								</div>
            								<button type="submit" class="btn btn-primary btn-block" name="u_yenile">Yenilə</button>
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