<?php require_once 'header.php'; ?>
<?php require_once 'nav.php'; require_once '../../settings/code/yemekler.php'; ?>
        <!--**********************************
            Content body start
            ***********************************-->
            <div class="content-body">

            	<div class="container">

            		<div class="col-xl-12 col-xxl-12">
            			<div class="card">
            				<div class="card-body">
            					<h4 class="card-title mb-3">Kateqoriyalar</h4>
            					<div align="right">
            						<a href="kateqori-elave.php"><button class="btn btn-outline-info">Əlavə Et</button></a>
            					</div>
            					<div class="table-responsive">
            						<table class="table mb-0 market-cap table-responsive-sm">
            							<thead>
            								<tr>
            									
                                                                  <th>Kateqoriya</th>
                                                                  <th>Sıra</th>
                                                                  
                                                                  <th>Əməliyyatlar</th>
                                                            </tr>
                                                      </thead>
                                                      <tbody>
                                                            <?php for ($i=0; $i < count($getir); $i++) { ?>
                                                                <tr>
                                                                 
                                                                  <td><?= $getir[$i]['kateqoriya'] ?></td>
      
                                                                  <td><?= $getir[$i]['sira'] ?></td>
                                                                 
                                                                  <td>
                                                                     
                                                                        <form method="POST" action="#">
                                                                        <input type="hidden" name="id" value="<?= $getir[$i] ['id'] ?>">
                                                                        <input type="hidden" name="sekil" value="<?= $getir[$i]['k_sekil'] ?>">
                                                                        <button name="k_sil" style="border: none;" class="badge badge-danger btn-block" >Sil</button>  
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