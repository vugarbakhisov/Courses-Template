<?php require_once 'header.php';
require_once 'nav.php'; 
    require_once '../../settings/code/yemekler.php';



?>

<script type="text/javascript" src="tinymce/js/tinymce/tinymce.min.js">
</script>

<script type="text/javascript">
  tinymce.init({
    selector: "textarea",
    theme: "modern",
    plugins: [
    "advlist autolink lists link image charmap print preview hr anchor pagebreak",
    "searchreplace wordcount visualblocks visualchars code fullscreen",
    "insertdatetime media nonbreaking save table contextmenu directionality",
    "emoticons template paste textcolor colorpicker textpattern imagetools"
    ],
    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    toolbar2: "print preview media | forecolor backcolor emoticons | ltr rtl",
    image_advtab: true,
    templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
    ],

  });
</script>


        <!--**********************************
            Content body start
            ***********************************-->
            <div class="content-body">

            	<!-- row -->

            	<div class="container">
            		<div class="row">
            			<div class="col-12">
            				<h3 class="content-heading mt-2">Yeməkləri Buradan Elavə edə Bilərsiniz</h3>
            			</div>
            			<div class="col-xl-12 col-xxl-12">
            				<div class="card">
            					<div class="card-body">
            						<h4 class="card-title"></h4>
            						<div class="basic-form">
            							<form method="POST" action="#" enctype="multipart/form-data">
                            <input type="hidden" name="tarix" value="<?= date("Y-m-d")  ?>">
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
                            <h4 class="card-title">Ad</h4>
                            <div class="form-group">
                             <input type="text" name="ad" placeholder="" class="form-control input-rounded" />
                           </div>
                           <h4 class="card-title">Yeməyin Kateqoriyasi</h4>
                           <div class="form-group">

                                            <select name="kateqori_id" class="form-control form-control-lg">
                                             <?php for ($i=0; $i < count($getir) ; $i++) { ?>
                                    <option value="<?= $getir[$i]["id"] ?>"><?= $getir[$i]["kateqoriya"] ?></option>
                                 <?php } ?>
                                               
                                              
                                            </select>
                                        </div>
                           <h4 class="card-title">Yeməy haqqinda</h4>
                           <div class="form-group">
                      <textarea class="form-control" rows="7" name="melumat"></textarea>
                           </div>
                              <h4 class="card-title">Qiyməti</h4>
                            <div class="form-group">
                             <input min="0" name="qiymet" type="text" placeholder="Qiymət daxil edin.." class="form-control input-rounded" />
                           </div>
                           <button type="submit" class="btn btn-primary btn-block" name="y_elave">Əlavə Et</button>

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