<?php require_once 'header.php'; ?>
<?php require_once 'nav.php';  ?>
<!--**********************************
   Content body start
   ***********************************-->
<div class="content-body">
   <div class="container">
      <div class="col-xl-12 col-xxl-12">
         <div class="card">
            <div class="card-body">
               <h4 class="card-title mb-3">Mesajlar</h4>
               <div class="table-responsive">
                  <table class="table mb-0 market-cap table-responsive-sm">
                     <thead>
                        <tr>
                           <th>Məzmun</th>
                           <th>Ad Soyad</th>
                           <th>Email</th>
                           <th>Tarix</th>
                           <th>Vəziyyət</th>
                           <th>Əməliyyat</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php for ($i=0; $i < count($data); $i++) { ?>
                        <tr>
    
                           <td><button class="btn btn-outline-info"  type="button" data-toggle="modal" data-target="#mezmun_<?=$data[$i]['id'];?>">Bax</button></td>
                           <td><?=$data[$i]['AdSoyad'] ?></td>
                           <td><?=$data[$i]['email'] ?></td>
                           <td><?=$data[$i]['tarix'] ?></td>
                           <td>
                              <?php if ($data[$i]['status']=="gozleme"): ?>
                              <span class="badge badge-warning">Gözləmə</span>
                              <?php endif ?>
                              <?php if ($data[$i]['status']=="oxundu"): ?>
                              <span class="badge badge-info">Oxundu</span>
                              <?php endif ?>
                           </td>
                           <td>

                               <?php if ($data[$i]['status']=="gozleme"): ?>
                              <a href="mesaj.php?id=<?=$data[$i]['id'];?>&status=oxundu"> <button class="btn btn-outline-danger btn-sm">Oxunmadı</button></a>
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
<?php for ($i=0; $i < count($data); $i++) { ?>
<div class="modal fade" id="mezmun_<?=$data[$i]['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle" style="color: #000;" >İstifadəçinin Rəyi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div style="color: #000;" class="modal-body">
            <?=$data[$i]['mesaj'];?>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Bağla</button>
         </div>
      </div>
   </div>
</div>
<?php } ?>
<?php require_once 'footer.php'; ?>