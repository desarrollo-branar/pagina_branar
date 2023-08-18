<?php
include_once './templates/header_blog.php';
include_once './templates/navbar.php';
use Branar\Blog\model\Navegation;
use Branar\Blog\model\Post;
use Branar\Blog\model\Label;

?>
<main>
    <h1>BLOG</h1>
    <div class="container">
        <header class="header_post_title">
            <h2>Publicaciones</h2>
        </header>

        <section class="container_post">

        <?php

            $posts = Post::getAllThePublishingInformation();
            foreach ($posts as $key => $post) {
                if($post['status'] == true){ ?>
                    <article class="wrapper_post">
                        <header class="header_post" style="background-image: url(../post_image/tecnology_image.jpeg);">
                            <div>
                                <h3><?= $post['title'] ?></h3>
                            </div>
                        </header>
                        <div class="content_post">
                            <div class="labels">
                            <?php
                            $labels = Label::getPostLabelById($post['post_id']);
                            foreach($labels as $key => $label) { ?>
                                <span class="<?= $label['color'] ?>"><?= $label['name'] ?></span>
                    <?php   }
                            ?>
                            </div>
                            <p><?= $post['description'] ?></p>
                        </div>
                        <address class="info_author_post">
                            <div>
                                <p><span>Autor: </span><?= $post['first_name'].' '.$post['last_name']?></p>
                                <p><span>Fecha de publicacion: </span><?php $date=date_create($post['created_at']); echo date_format($date,"d-m-Y");?></p>
                                <p><span><i class="fa-solid fa-eye"></i></span> <?= $post['views'] != null ? $post['views'] : '0'?></p>
                            </div>
                        </address>
                    </article>
               <?php }
            }
        ?>
        </section>

    </div>
</main>

<?php require_once './templates/footer.php'; ?>