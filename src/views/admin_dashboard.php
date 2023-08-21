<?php
include_once './templates/header_blog.php';
include_once './templates/navbar.php';
use Branar\Blog\model\Navegation;
use Branar\Blog\model\Post;
use Branar\Blog\model\Label;

?>
<main>
    <div class="container">
        <header class="header_post_title">
            <h1>Admin Dashboard</h1>
        </header>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Create Post
        </button>
        <?php require_once './src/views/form_population_create.php'; ?>
        <section class="container_post">

        <?php

            $posts = Post::getAllThePublishingInformation();
            foreach ($posts as $key => $post) {
                if($post['status'] == true){ ?>
                    <article class="wrapper_post">
                        <header class="header_post" style="background-image: url(<?= $post['featured_image'] ? "../post_image/{$post['featured_image']}": "../post_image/tecnology_image.jpeg"?>);">
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
                        <div class="cont-buttons">
                            <a href="">Ver mas</a>
                            <a href="javascript:void(0);" class="edit-post-link" data-post-id="<?= $post['post_id'] ?>" data-bs-target="#editPostModal-<?= $post['id'] ?>">Editar Post</a>

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
        <?php require_once './src/views/form_population_edit.php'; ?>
    </div>
</main>

<script>
$(document).ready(function() {
    // Manejar el clic en el enlace "Editar Post"
    $('.edit-post-link').click(function() {
        var postId = $(this).data('post-id');
        var modalId = $(this).data('bs-target'); // Obtener el ID del modal
        var url = './edit_post/' + postId; // Construir la URL

        $.ajax({
            url: url,
            method: 'GET',
            success: function(response) {
                console.log(response)
                $(modalId + ' .modal-content').html(response); // Usar el ID del modal para abrir el modal correcto
                $(modalId).modal('show');
            },
            error: function() {
                console.log(response);
                alert('Error al cargar los datos del post.');
            }
        });
    });
});
</script>

<?php require_once './templates/footer-blog.php'; ?>