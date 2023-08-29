<?php
include_once './templates/header_blog.php';
include_once './templates/navbar.php';

use Branar\Blog\model\Navegation;
use Branar\Blog\model\Post;
use Branar\Blog\model\Category;
use Branar\Blog\model\Label;
use Branar\Blog\functions\UtilFunctions;
use Branar\Blog\model\Comment;

$id = Navegation::validateInput($params['id']);
$post = Post::getPostById($id);
?>
<main>

    <div class="container container_post-content mt-4">
        <div class="">
            <?php include_once "./src/entries/{$post[0]['file']}" ?>
        </div>

        <aside class="aside_blog">

            <?php if (isset($_SESSION['user_data']) && $_SESSION['user_data']['role'] == 1) : ?>
                <div>
                    <h3>Herramientas</h3>
                    <div class="actions_blog_admin">

                        <button type="button" class="btn btn-outline-primary btn-lg" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Crear Publicacion
                        </button>

                        <button type="button" class="btn btn-outline-secondary btn-lg" data-bs-toggle="modal" data-bs-target="#modalCategories">
                            Categorias
                        </button>

                        <button type="button" class="btn btn-outline-info btn-lg" data-bs-toggle="modal" data-bs-target="#modalLabels">
                            Etiquetas
                        </button>
                    </div>
                </div>
            <?php endif; ?>
            <div>
                <h3>Categorias</h3>
                <ul class="categorias border p-2">
                    <?php $category = Category::getAll();

                    foreach ($category as $key => $value) {
                        $category_name = UtilFunctions::split_letter($value['name'], 'upper'); ?>
                    <li>
                        <a href="../blog_category/<?= UtilFunctions::split_letter($value['name'], 'split') ?>" class="p-2"><?= $category_name ?></a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <form action="../blog/filtrado" method="POST">
                <h4>Filtro</h4>
                <div class="p-2 border">
                    <div class="form-group">
                        <h5>Por etiqueta</h5>
                        <?php $category = Label::getAll();

                        foreach ($category as $key => $value) {
                            $category_name = UtilFunctions::split_letter($value['name'], 'upper'); ?>
                        <label class="d-block">
                            <input type="checkbox" value="<?= UtilFunctions::split_letter($value['id'], 'split') ?>" name="labels[]" id="labelCheckbox<?= $key ?>">
                            <?= $category_name ?>
                        </label>
                        <?php } ?>
                    </div>
                    <div class="form-group mt-4">
                        <h5>Por categoria</h5>
                        <?php $category = Category::getAll();

                        foreach ($category as $key => $value) {
                            $category_name = UtilFunctions::split_letter($value['name'], 'upper'); ?>
                        <label class="d-block">
                            <input type="checkbox" value="<?= UtilFunctions::split_letter($value['id'], 'split') ?>" name="categories[]" id="categoryCheckbox<?= $key ?>">
                            <?= $category_name ?>
                        </label>
                        <?php } ?>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm mt-4" style="width: 100%;">Filtrar</button>
                </div>
            </form>

        </aside>

        <section class="blog_comment container">
            <header class="blog_comment_header">
                <h2 style="color: black;">Comentarios</h2>
            </header>
            <div class="comments">
                <!-- Mostrar comentarios existentes -->
                <?php 
                    $comments = Comment::get_all_comment_data_by_post_id($params['id']);
                            
                    if(count($comments) > 0): foreach ($comments as $comment): ?>
                    <div class="comment mt-4">
                        <header class="comment_header">
                            <p><strong><?= "{$comment['first_name']} {$comment['last_name']}" ?></strong></p>
                            <p><?= $comment['created_at'] ?></p>
                        </header>
                        <div class="content_comment">
                            <p class="comment_text"><?= $comment['content'] ?></p>
                        </div>
                    </div>
                <?php  endforeach; else: ?>
                    <div class="comment">
                        <p class="comment_author">Se el primero en comentar</p>
                    </div>
                <?php endif; ?>

                <?php if(isset($_SESSION['user_data'])):?>
                <!-- Formulario para escribir un nuevo comentario -->
                <div class="new_comment mt-4">
                    <h3>Deja un comentario</h3>
                    <form action="../blog/submit_comment" method="POST">
                        <div class="form-group">
                            <label for="comment_content">Comentario:</label>
                            <textarea name="comment_content" class="form-control" rows="3" required></textarea>
                        </div>
                        <input type="hidden" name="post_id" value="<?= $params['id'] ?>">
                        <button type="submit" class="btn btn-primary">Enviar comentario</button>
                    </form>
                </div>
                <?php endif; ?>
            </div>
        </section>
    </div>

</main>

<script>
    const title = "<?= $post[0]['title'] ?>";
    const header_card = document.querySelector('.blog-card-header');
    console.log(header_card);
    let h1 = document.querySelector('h1');
    let description = document.querySelector('.blog-card-description');

    h1.innerText = title;
    description.innerText = "<?= $post[0]['description'] ?>";

    header_card.style.backgroundImage = "url('../post_image/<?= $post[0]['featured_image'] ? $post[0]['featured_image'] : 'tecnology_image.jpeg' ?>')";
</script>

<?php require_once './templates/footer-blog.php'; ?>