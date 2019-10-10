<?php require_once 'header.php'; ?>
<?php require_once 'nav.php'; require_once '../../settings/code/slider.php'; ?>
        <!--**********************************
            Content body start
            ***********************************-->
            <div class="content-body">

            	<div class="container">

            		<div class="col-xl-12 col-xxl-12">
            			<div class="card">
            				<div class="card-body">
            					<h4 class="card-title mb-3">Sliders</h4>
            					<div align="right">
            						<a href="slider-elave.php"><button class="btn btn-outline-info">Əlavə Et</button></a>
            					</div>
            					<div class="table-responsive">
            						<table class="table mb-0 market-cap table-responsive-sm">
            							<thead>
            								<tr>
            									<th>Şəkil</th>
                                                                  <th>Ad</th>
                                                                  <th>Tarix</th>
                                                                  <th>Sıra</th>
                                                                  <th>Qiymət</th>

                                                                  <th>Status</th>
                                                                  <th>Əməliyyatlar</th>
                                                            </tr>
                                                      </thead>
                                                      <tbody>
                                                            <?php for ($i=0; $i < count($getir); $i++) { ?>
                                                                <tr>
                                                                  <td><img style="border-radius: 10%;" width="180"  src="../../../<?= $getir[$i]['sekil'] ?>"></td>
                                                                  <td><?= $getir[$i]['Ad'] ?></td>
                                                                  <td><?= $getir[$i]['tarix'] ?></td>
                                                                  <td><?= $getir[$i]['sira'] ?></td>
                                                                  <td><?= $getir[$i]['qiymet'] ?> AZN</td>

                                                                  <td>
                                                                        <?php if ($getir[$i]['status']==1): ?>
                                                                              <form method="POST" action="#">
                                                                                    <input type="hidden" name="id" value="<?= $getir[$i]['id'] ?>">
                                                                                    <button style="border: none;" class="badge badge-danger" name="s_deaktiv">Deaktiv Et</button>  
                                                                              </form>
                                                                        <?php endif ?>
                                                                        <?php if ($getir[$i]['status']!=1): ?>
                                                                              <form method="POST" action="#">
                                                                                    <input type="hidden" name="id" value="<?= $getir[$i]['id'] ?>">
                                                                                    <button style="border: none;" class="badge badge-info" name="s_aktiv">Aktiv Et</button>  
                                                                              </form>
                                                                        <?php endif ?>


                                                                  </td>
                                                                  <td>
                                                                        <form style="margin-bottom: 10px;" method="POST" action="#">
                                                                              <input type="hidden" name="id" value="<?= $getir[$i]['id'] ?>">
                                                                              <button style="border: none;" name="redakte_et" class="badge badge-info btn-block" >Redaktə Et</button> 
                                                                        </form > 
                                                                        <form method="POST" action="#">
                                                                        <input type="hidden" name="id" value="<?= $getir[$i] ['id'] ?>">
                                                                        <input type="hidden" name="sekil" value="<?= $getir[$i]['sekil'] ?>">
                                                                        <button name="sil" style="border: none;" class="badge badge-danger btn-block" >Sil</button>  
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