<?php require_once"header.php"; ?>

<section class="page_header">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<h2 class="text-uppercase">Əlaqə</h2>
<p><?=$ngetir['description'] ?></p>
</div>
</div>
</div>
</section>

<section class="main-content contact-content">
<div class="container">
<div class="col-md-10 col-md-offset-1">
<div class="row">
<div class="col-md-6">
<h3 class="text-left no-margin-top">Üvan</h3>
<div class="footer-address contact-info">
<p><i class="fa fa-map-marker"></i><?=$ngetir['unvan'] ?></p>
<p><i class="fa fa-phone"></i><?=$ngetir['tel'] ?></p>
<p><i class="fa fa-envelope-o"></i><a href="#"><?=$ngetir['email'] ?></a></p>
</div>
<br>
<h3 class="text-left no-margin-top">İş Saatlari</h3>
<div class="contact-info text-muted">
<p>07:00 dan  00:00 dək həftə içi</p>
<p>9:00 dan 00:00 Şənbə və Bazar </p>
</div>
<br>
<h3 class="text-left no-margin-top">BİZİ İZLƏYİN</h3>
<div class="contact-social">
<a target="blank" href="http://www.facebook.com/"><i class="fa fa-facebook"></i></a>
<a href="http://www.twitter.com/"><i class="fa fa-twitter"></i></a>
<a href="http://www.youtube.com/"><i class="fa fa-youtube"></i></a>
<a href="http://www.instagram.com/"><i class="fa fa-instagram"></i></a>
</div>
</div>



<div class="col-md-6">
<form class="contact-form" id="e_gonder" action="" method="post">
<div class="form-group">
<input class="form-control"name="AdSoyad" id="name" placeholder="Adınız" type="text" required="required" />
</div>
<div class="form-group">
<input class="form-control" type="email" name="email" id="email" placeholder="Email Adresiniz" required="required" />
</div>

<div class="form-group">
<textarea class="form-control" name="mesaj" id="message" placeholder="Mesajiniz" rows="5"></textarea>
</div>
<button   name="rey_gonder" class="btn btn-success btn-lg btn-block" id="js-contact-btn">Göndər</button>
</form>
<div id="js-contact-result" data-success-msg="Form submitted successfully." data-error-msg="Oops. Something went wrong."></div>
</div>
</div>
</div>
</div>
</section>


<div style="width: 100%;height: 100%;"id="map"><iframe id="map"  src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d6078.74753737598!2d49.83614942468615!3d40.37840799053675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e3!4m5!1s0x40307d09c62e19b1%3A0x9aad0f3cd1388621!2zMjggTWF5IG0vcywgQmFrw7w!3m2!1d40.3810566!2d49.849005399999996!4m5!1s0x40307dbc866a7385%3A0xc83f8d1efa02f90b!2zWVVQIFRFQ0hOT0xPR1ksIMWeLiwgxZ7EsXjJmWxpIFF1cmJhbm92LCBCYWvEsSAxMDA5LCBBemVyYmF5Y2Fu!3m2!1d40.376329!2d49.832048199999996!5e0!3m2!1str!2s!4v1557787228873!5m2!1str!2s"frameborder="0" style="border:0" allowfullscreen></iframe></div>


<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<script type="text/javascript">
		

$("#e_gonder").submit(function() {

	
	alert('Mesajınız Ugurla Göndərildi!Teşekkür Edirik...')
	 

});
</script>


<?php require_once "footer.php"; ?>