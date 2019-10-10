<?php 
 require_once 'header.php'; ?>
<?php require_once 'nav.php';
    require_once '../../settings/code/rezervasiya.php';

  ?>
<!--**********************************
   Content body start
   ***********************************-->
<div class="content-body">
   <div class="container">
      <div class="col-xl-12 col-xxl-12">
         <div class="card">
            <div class="card-body">
               <h4 class="card-title mb-3">Rezervasiyalar</h4>
               <div class="table-responsive">
                  <table class="table mb-0 market-cap table-responsive-sm">
                     <thead>
                        <tr>
                                                <th>Ad Soyad</th>
                                                  <th>Tarix</th>
                                                <th>Say</th>
                                                <th>Saat</th>
                                                <th>Əlaqə nömrəsi</th>
                                            </tr>
                        </tr>
                     </thead>
                     <tbody>
                        <?php for ($i=0; $i < count($r_getir); $i++) { ?>
                        <tr>
                           <td><?=$r_getir[$i]['adsoyad'] ?></td>
                            <td><?=$r_getir[$i]['vaxt'] ?></td>
                         
                           <td><?=$r_getir[$i]['sayi'] ?> Nəfər</td>
                           <td><?=$r_getir[$i]['saat'] ?></td>
                           <td><?=$r_getir[$i]['tel'] ?></td>

                           <td>
                             
                              <?php if ($r_getir[$i]['status']=="legv"): ?>
                              <span class="badge badge-danger">Qəbul Olunmadı</span>
                              <?php endif ?>
                              <?php if ($r_getir[$i]['status']=="tesdiq"): ?>
                              <span class="badge badge-info">Qəbul Olundu</span>
                              <?php endif ?>
                           </td>
                           <td>
                             <?php if ($r_getir[$i]['status']=="gozleme" || $r_getir[$i]['status']=="legv" ): ?>
                              <a href="index.php?id=<?=$r_getir[$i]['id'];?>&status=tesdiq"><button class="btn btn-outline-info btn-sm">Şifarişi qəbul et</button></a>
                             <?php endif ?>

                               <?php if ($r_getir[$i]['status']=="tesdiq"): ?>
                              <a href="index.php?id=<?=$r_getir[$i]['id'];?>&status=legv"> <button class="btn btn-outline-danger btn-sm">Şifarişi ləğv Et</button></a>
                              <?php endif ?>
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