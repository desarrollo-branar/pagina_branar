<?php
include_once './templates/header_blog.php';
include_once './templates/navbar.php';

use Branar\Blog\model\Navegation;
use Branar\Blog\model\Post;
use Branar\Blog\model\Label;
use Branar\Blog\model\Category;

use Branar\Blog\functions\UtilFunctions;

$category = $params['title'];
$split_category = UtilFunctions::split_letter($category,'');

$data_category = Category::getCategoryByName($split_category);

?>
<main>
    <div class="container">
        <header class="header_post_title">
            <h1><?= UtilFunctions::split_letter($category,'upper') ?></h1>
        </header>
        <section class="container_post">

            <?php

            $posts = Post::getPostByCategoryId($data_category['id']);

        # Si la variable posts no contiene ningun dato
        if (count($posts) !== 0 ):
        foreach ($posts as $key => $post): ?>
            <article class="wrapper_post">
                <header class="header_post" style="background-image: url(<?= $post['featured_image'] ? "../post_image/{$post['featured_image']}" : "../post_image/tecnology_image.jpeg" ?>);">
                    <div>
                        <h3><?= $post['title'] ?></h3>
                    </div>
                </header>
                <div class="content_post">
                    <div class="labels">
                        <?php
                        $labels = Label::getPostLabelById($post['post_id']);
                        foreach ($labels as $key => $label) { ?>
                            <span class="<?= $label['color'] ?>"><?= $label['name'] ?></span>
                        <?php } ?>
                    </div>
                    <p><?= $post['description'] ?></p>
                </div>
                <div class="cont-buttons">
                    <a href="../Blog/<?= $post['post_id'] ?>" class="btn btn-primary">Ver mas</a>
                    <?php
                    if($_SESSION['user_data']['role'] == 1): ?>
                    <a href="javascript:void(0);" class="edit-post-link btn btn-warning" data-post-id="<?= $post['post_id'] ?>" data-bs-target="#editPostModal-<?= $post['id'] ?>">Editar Post</a>

            <?php  endif; ?>
                </div>
                <address class="info_author_post">
                    <div>
                        <p><span>Autor: </span><?= $post['first_name'] . ' ' . $post['last_name'] ?></p>
                        <p><span>Fecha de publicacion: </span><?php $date = date_create($post['created_at']);
                                                                echo date_format($date, "d-m-Y"); ?></p>
                        <p><span><i class="fa-solid fa-eye"></i></span> <?= $post['views'] != null ? $post['views'] : '0' ?></p>
                        <p><span>Status: </span><?= $post['status'] == 0 ? 'Habilitado' : 'Deshabilitado' ?></p>
                    </div>
                </address>
            </article>
<?php endforeach; else: ?>
            <div>
                <h1>Lo lamento estamos en proceso de crear contenido a esta categoria</h1>
                <p>
                    Por favor visita nuestros demas temas <a href="../blog/">aca</a>
                </p>
            </div>
<?php endif;?>
        </section>
    </div>
</main>

<script>
    $(document).ready(function() {
        // Manejar el clic en el enlace "Editar Post"
        $('.edit-post-link').click(function() {
            var postId = $(this).data('post-id');
            var modalId = $(this).data('bs-target'); // Obtener el ID del modal
            var url = './get_data_post/' + postId; // Construir la URL

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