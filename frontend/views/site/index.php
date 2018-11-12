<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<section class="jumbotron bg-white">
    <div class="container">
    	<div id="header" class="media pt-5">
        <div class="media-body pt-5">
            <h1 class="jumbotron-heading">Selamat Datang</h1>
          	<p class="lead text-muted">
          	<h3>Sekolah Pengembangan Kepribadian!</h3>
			Mencapai penghasilan pasif 100 juta rupiah dalam waktu 2-5 tahun melalui peningkatan plafon rejeki dan kecerdasan finansial.<br />

			</p>
			
			<p>
				<a href="#" class="btn btn-primary my-2">Segera Daftar</a>
			</p>
      </div>
			<img src="img/undraw_robotics_kep0.svg" width="600px" height="auto">
		</div>
    </div>
</section>

<div class="bg-light">
<div class="container marketing">
		<div class="text-center"> 
		</div><br><br>
	<div class="row">
			<div class="col-lg-4">
				<h2>Heading</h2>
				<p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
				<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
			</div><!-- /.col-lg-4 -->
			<div class="col-lg-4">
				<h2>Heading</h2>
				<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
				<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
			</div><!-- /.col-lg-4 -->
			<div class="col-lg-4">
				<h2>Heading</h2>
				<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
				<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
			</div><!-- /.col-lg-4 -->
			</div><!-- /.row -->

	</div>
</div>

<div class="bg-primary pt-5 pb-5">

<div class="container">
		<div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Visi MSO.</h2>
            <p class="lead">
			Membuat anggotanya mencapai penghasilan pasif 100 juta rupiah dalam waktu 2-5 tahun melalui peningkatan plafon rejeki dan kecerdasan finansialnya
			</p>
			<a class="btn btn-secondary" href="#" role="button">View details &raquo;</a>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="img/undraw_voice_control_ofo1.svg" width="500px" height="auto" alt="Generic placeholder image">
          </div>
		</div>
		
		<hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Misi MSO</h2>
            <p class="lead">
				<ol>
					<li class="lead">Meningkatkan Plafon Rejeki dengan Audio Terapi Bawah Sadar.</li>
					<li class="lead">Meningkatkan pengetahuan kecerdasan finansial, pola pikir sukses dan sikap mental kaya melalui WhatsApp.</li>		
					<li class="lead">Menghilangkan mental block bidang keuangan dengan SEFT (Spiritual Emotional Freedom Technique)</li>
					<li class="lead">Menstabilkan plafon rejeki tetap tinggi melalui penyelenggaraan Seminar Visi dan Inspirasi.</li>
				</ol>
				<a class="btn btn-secondary" href="#" role="button">View details &raquo;</a>
			</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="img/undraw_maker_launch_crhe.svg" width="500px" heght="auto"  alt="Generic placeholder image">
          </div>
		</div>
</div>
	

</div>


<div class="container pt-3 pb-3"><h1 class="jumbotron-heading text-center">Berita Terbaru</h1>
<div class="card-deck">

	<?php foreach($beritas as $berita) { ?>
  <div class="card">
    <img class="card-img-top" src="<?= $berita->getImageFileUrl('banner'); ?>" alt="Card image cap">
    <div class="card-body bg-light">
      <h5 class="card-title"><?= $berita->title ?></h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
	<?php } ?>
</div>
</div>
