
<?php 
require_once 'header.php'; 
require_once 'nav.php';
require_once"../../settings/code/nizam.php";

?>

          <div class="content-body">
                  <!-- row -->

                  <div class="container">
                        <div class="row">
                              <div class="col-12">
                                    <h3 class="content-heading">Sosial Nizamlamalar</h3>
                              </div>

                              <div class="col-lg-12">
                                    <div class="card">
                                          <div class="card-body">
                                                <h4 class="card-title">Səhifənin sosial nizamlamalarını buradan dəyişdirə bilərsiniz!</h4>
                                                <div class="basic-form">
                                                      <form class="form-valide-with-icon" action="#" method="POST">
                                                            <input type="hidden" name="catagory" value="sosial" />
                                                            <div class="form-group">
                                                                  <label class="text-label">Facebook*</label>
                                                                  <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                              <span class="input-group-text"><i class="fab fa-facebook-f"></i></span>
                                                                        </div>
                                                                        <input type="text" class="form-control" id="val-username1" name="facebook" value="<?= $data['facebook'] ?>" >
                                                                  </div>
                                                            </div>

                                                            <div class="form-group">
                                                                  <label class="text-label">Instagram *</label>
                                                                  <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                              <span class="input-group-text"> <i class="fab fa-instagram"></i></span>
                                                                        </div>
                                                                        <input type="text" class="form-control" value="<?= $data['instagram'] ?>" id="val-username1" name="instagram" placeholder="Enter a username..">
                                                                  </div>
                                                            </div>
                                                             <div class="form-group">
                                                                  <label class="text-label">Youtube*</label>
                                                                  <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                              <span class="input-group-text"> <i class="fab fa-youtube"></i> </span>
                                                                        </div>
                                                                        <input type="text" class="form-control" value="<?= $data['youtube'] ?>" id="val-username1" name="youtube" placeholder="Enter a username..">
                                                                  </div>
                                                            </div>
                                                                <div class="form-group">
                                                                  <label class="text-label">Linkedin*</label>
                                                                  <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                              <span class="input-group-text"> <i class="far fa-thumbs-up"></i> </span>
                                                                        </div>
                                                                        <input type="text" class="form-control" value="<?= $data['linkedin'] ?>" id="val-username1" name="linkedin" placeholder="Enter a username..">
                                                                  </div>
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

            <?php require_once 'footer.php'; ?>