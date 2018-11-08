<?php
/* @var $this yii\web\View */
use yii\widgets\LinkPager;
?>
<div class="container mt-5">
<h1>Product MSO</h1>

<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>
<div>
    <div class="row">
    <?php foreach($products as $product){ ?>
        <div class="col-md-3">
            <div class="card bg-dark">
                <img class="card-img-top" src="<?= \Yii::$app->urlManagerBackend->baseUrl."/product"."/".$product->images?>" alt="Card image cap">
                <div class="card-img-overlay text-white">
                    <h5 class="card-title"><?= $product->product_name ?></h5>
                </div>
                <div class="card-body bg-light">
                <span class="text-primary">Rp.<?= number_format($product->price,0,"",".") ?></span>
                    <p><?= substr($product->description,0,110)?></p>
                    <a href="#" class="btn btn-primary btn-block"> Lihat </a>
                </div>
            </div>
        </div>
    <?php } ?>
    </div>
</div>
<?= LinkPager::widget([
    'pagination' => $pages,
    'options' => [
        'tag' => 'ul',
        'class' => 'pagination',
        'id' => 'pager-container',
    ],
    
    // Customzing CSS class for pager link
    'linkContainerOptions' => ['class' => 'page-item'],
    'linkOptions' => ['class' => 'page-link'],
    'prevPageCssClass' => 'page-item',
    'nextPageCssClass' => 'page-item'
]); ?>
</div>
