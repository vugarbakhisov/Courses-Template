<?php require_once 'header.php'; ?>
<?php require_once 'nav.php'; 
require_once '../../settings/code/yemekler.php'; 





 ?>
        <!--**********************************
            Content body start
            ***********************************-->
            <div class="content-body">

            	<div class="container">

            		<div class="col-xl-12 col-xxl-12">
            			<div class="card">
            				<div class="card-body">
            					<h4 class="card-title mb-3">Yeməklər</h4>
            					<div align="right">
            						<a href="yemek-elave.php"><button class="btn btn-outline-info">Əlavə Et</button></a>
            					</div>
            					<div class="table-responsive">
            						<table class="table mb-0 market-cap table-responsive-sm">
            							<thead>
            								<tr>
            									<th>Şəkil</th>
                                                                  <th>Ad</th>
                                                                  <th>Kateqoriya</th>
                                                                  <th>mezmun</th>
                                                                  <th>qiymet</th>
                                                                  <th>Status</th>
                                                                  <th>Əməliyyatlar</th>
                                                            </tr>
                                                      </thead>
                                                      <tbody>
                                                          
                                                            <?php for ($i=0; $i < count($y_getir) ; $i++) { ?>
                                                                <tr>
                                                                  <td><img style="border-radius: 10%" width="120"  src="../../../<?= $y_getir[$i]['sekil'] ?>"></td>
                                                                  <td><?= $y_getir[$i]['ad'] ?></td>
                                                                  <td><?=$yemekler->RGetir($y_getir[$i]['kateqori_id']); ?></td>
                                                                  <td><?= $y_getir[$i]['melumat'] ?></td>
                                                                  
                                                                  <td><?= $y_getir[$i]['qiymet'] ?> AZN</td>
                                                                  <td>
                                                                         <td>
                                                                        <?php if ($y_getir[$i]['status']==1): ?>
                                                                              <form method="POST" action="#">
                                                                                    <input type="hidden" name="id" value="<?= $y_getir[$i]['id'] ?>">
                                                                                    <button style="border: none;" class="badge badge-danger" name="y_deaktiv">Deaktiv Et</button>  
                                                                              </form>
                                                                        <?php endif ?>
                                                                        <?php if ($y_getir[$i]['status']!=1): ?>
                                                                              <form method="POST" action="#">
                                                                                    <input type="hidden" name="id" value="<?= $y_getir[$i]['id'] ?>">
                                                                                    <button style="border: none;" class="badge badge-info" name="y_aktiv">Aktiv Et</button>  
                                                                              </form>
                                                                        <?php endif ?>


                                                                  </td>
                                           


                                                                  </td>
                                                                  <td>
                                                                        <form style="margin-bottom: 10px;" method="POST" action="#">
                                                                              <input type="hidden" name="id" value="<?= $y_getir[$i]['id'] ?>">
                                                                              <button style="border: none;" name="y_redakte_et" class="badge badge-info btn-block" >Redaktə Et</button> 
                                                                        </form > 
                                                                        <form method="POST" action="#">
                                                                        <input type="hidden" name="id" value="<?= $y_getir[$i] ['id'] ?>">
                                                                        <input type="hidden" name="sekil" value="<?= $y_getir[$i]['sekil'] ?>">
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