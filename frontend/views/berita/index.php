<?php
/* @var $this yii\web\View */
?>

<div class="container pt-3 pb-3"><h1 class="jumbotron-heading text-center">Berita Terbaru</h1>
<div class="card-deck">

	<?php foreach($beritas as $berita) { ?>
  <div class="card">
    <img class="card-img-top" src="<?= $berita->getImageFileUrl('banner'); ?>" alt="Card image cap">
    <div class="card-body bg-light">
      <a href="<?= $berita->url?>"><h5 class="card-title"><?= $berita->title ?></h5></a>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
	<?php } ?>
</div>
</div>
