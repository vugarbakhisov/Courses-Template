<?php require_once 'header.php'; ?>
<?php require_once 'nav.php'; require_once '../../settings/code/xidmet.php'; ?>
        <!--**********************************
            Content body start
            ***********************************-->
            <div class="content-body">

            	<div class="container">

            		<div class="col-xl-12 col-xxl-12">
            			<div class="card">
            				<div class="card-body">
            					<h4 class="card-title mb-3">Xidmətlər</h4>
            					<div align="right">
            						<a href="xidmet-elave.php"><button class="btn btn-outline-info">Əlavə Et</button></a>
            					</div>
            					<div class="table-responsive">
            						<table class="table mb-0 market-cap table-responsive-sm">
            							<thead>
            								<tr>
            									<th>Şəkil</th>
                                                                  <th>Başlıq</th>
                                                                  <th>Məzmun</th>
                                                                  <th>Status</th>
                                                                  <th>Əməliyyatlar</th>
                                                            </tr>
                                                      </thead>
                                                      <tbody>
                                                            <?php for ($i=0; $i < count($getir) ; $i++) { ?>
                                                                  <tr>
                                                                        <td>
                                                                              <img style="width: 75px;" src="../../../<?= $getir[$i]['sekil']  ?>">
                                                                        </td>
                                                                        <td>
                                                                              <?= $getir[$i]['basliq']  ?>
                                                                        </td>
                                                                        <td>
                                                                              <?= $getir[$i]['yazi']  ?>
                                                                        </td>
                                                                        <td>
                                                                         <?php if ($getir[$i]['status']==1): ?>
                                                                              <form method="POST" action="#">
                                                                                    <input type="hidden" name="id" value="<?= $getir[$i]['id'] ?>">
                                                                                    <button style="border: none;" class="badge badge-danger" name="x_deaktiv">Deaktiv Et</button>  
                                                                              </form>
                                                                        <?php endif ?>
                                                                        <?php if ($getir[$i]['status']!=1): ?>
                                                                              <form method="POST" action="#">
                                                                                    <input type="hidden" name="id" value="<?= $getir[$i]['id'] ?>">
                                                                                    <button style="border: none;" class="badge badge-info" name="x_aktiv">Aktiv Et</button>  
                                                                              </form>
                                                                        <?php endif ?>
                                                                  </td>
                                                                  <td>
                                                                        <form method="POST" action="#" style="margin-bottom: 10px;">
                                                                              <input type="hidden" name="id" value="<?= $getir[$i]['id'] ?>">
                                                                              <button name="x_redakte" class="btn btn-outline-info btn-block btn-sm">Redaktə</button>
                                                                        </form>
                                                                        <form method="POST" action="#">
                                                                              <input type="hidden" name="id" value="<?= $getir[$i]['id'] ?>">
                                                                              <input type="hidden" name="sekil" value="<?= $getir[$i]['sekil'] ?>">
                                                                              <button name="x_sil" class="btn btn-outline-danger btn-block btn-sm">Sil</button>
                                                                        </form>
                                                                  </td>
                                                            </tr>
                                                      <?php } ?>
                                                </tbody>
                                          </table>
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