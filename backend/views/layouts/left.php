<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->username?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                
                'items' => [
                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                    ['label' => 'Dashboard', 'icon' => 'th-large', 'url' => ['#']],
                    [
                        'label' => 'Website',
                        'icon' => 'desktop',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Content Header', 'icon' => 'circle-o', 'url' => ['#']],
                            ['label' => 'Content', 'icon' => 'circle-o', 'url' => ['#']],
                        ]
                    ],
                    ['label' => 'Members', 'icon' => 'users', 'url' => ['/user']],
                    [
                        'label' => 'Article & Blog',
                        'icon' => 'tasks',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Blog Category', 'icon' => 'circle-o', 'url' => ['/blog/blog-category']],
                            ['label' => 'Blog Post', 'icon' => 'circle-o', 'url' => ['/blog/blog-post']],
                        ]
                    ],
                    [
                        'label' => 'Master',
                        'icon' => 'tasks',
                        'url' => '#',
                        'items' => [
                            ['label' => 'MSO Class', 'icon' => 'circle-o', 'url' => ['/mso-class']],
                            ['label' => 'Category Article', 'icon' => 'circle-o', 'url' => ['/category-article']],
                        ]
                    ],
                    ['label' => 'Settings', 'icon' => 'gear', 'url' => ['/setting']],

                    ['label' => 'Modules', 'options' => ['class' => 'header']],
                    ['label' => 'Exam', 'icon' => 'list-alt', 'url' => ['/exam']],

                ],
            ]
        ) ?>

    </section>

</aside>
