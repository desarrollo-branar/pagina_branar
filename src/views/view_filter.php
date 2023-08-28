<?php
include_once './templates/header_blog.php';
include_once './templates/navbar.php';

use Branar\Blog\model\Navegation;
use Branar\Blog\model\Post;
use Branar\Blog\model\Label;
use Branar\Blog\functions\UtilFunctions;
use Branar\Blog\model\Category;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $labels = $_POST['labels'] ?? '';
    $categories = $_POST['categories'] ?? '';

    $_SESSION['data_filter'] = [
        'labels' => $labels,
        'categories' => $categories
    ];

    // echo '<pre>';
    // print_r($_SESSION['data_filter']);
    // echo '</pre>';

    $posts = Post::filterPost($labels, $categories);
} elseif (isset($_SESSION['data_filter'])) {

    $posts = Post::filterPost($_SESSION['data_filter']['labels'], $_SESSION['data_filter']['categories']);
}


?>
<main>
    <header class="sec_header">
        <h1>Blog</h1>
    </header>
    <?php if (isset($_SESSION['message']) && $_SESSION['message'] != "") : ?>
        <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">

            <?= $_SESSION['message'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif;
    $_SESSION['message'] = "";
    $_SESSION['message_user'] = ""; ?>
    <div class="container_blog_home">

        <?php if (isset($_SESSION['user_data'])) :
            # Si existe una session 
        ?>

            <section class="container_post">

                <?php foreach ($posts as $key => $post) { ?>
                    <article class="wrapper_post">
                        <header class="header_post" style="background-image: url(<?= $post['featured_image'] ? "../post_image/{$post['featured_image']}" : "../post_image/tecnology_image.jpeg" ?>);">
                            <div>
                                <h3><?= $post['title'] ?></h3>
                            </div>
                        </header>
                        <div class="content_post">
                            <div class="labels">
                                <?php
                                $labels = Label::getPostLabelByPostId($post['post_id']);
                                foreach ($labels as $key => $label) { ?>
                                    <span class="<?= $label['color'] ?>"><?= $label['name'] ?></span>
                                <?php } ?>
                            </div>
                            <p><?= $post['description'] ?></p>
                        </div>
                        <div class="cont-buttons">
                            <a href="../Blog/<?= $post['post_id'] ?>" class="btn btn-primary">Ver mas</a>

                            <?php if ($_SESSION['user_data']['role'] == 1) {
                                # Mostrar boton para editar post si el usuario es admin
                            ?>
                                <a href="javascript:void(0);" class="edit-post-link btn btn-warning" data-post-id="<?= $post['post_id'] ?>" data-bs-target="#editPostModal-<?= $post['id'] ?>">Editar Post</a>
                            <?php } ?>

                        </div>
                        <address class="info_author_post">
                            <div>
                                <p><span>Autor: </span><?= $post['first_name'] . ' ' . $post['last_name'] ?></p>
                                <p><span>Fecha de publicacion: </span><?php $date = date_create($post['created_at']);
                                                                        echo date_format($date, "d-m-Y"); ?></p>
                                <p><span><i class="fa-solid fa-eye"></i></span> <?= $post['views'] != null ? $post['views'] : '0' ?></p>

                                <?php if ($_SESSION['user_data']['role'] == 1) {
                                    # Mostrar Status del Post si el usuario es admin 
                                ?>
                                    <p><span>Status: </span><?= $post['status'] == 0 ? 'Habilitado' : 'Deshabilitado' ?></p>
                                <?php } ?>
                            </div>
                        </address>
                    </article>
                <?php } ?>
            </section>
        <?php else : ?>
            <section class="container_post">

                <?php foreach ($posts as $key => $post) : ?>
                    <article class="wrapper_post">
                        <header class="header_post" style="background-image: url(<?= $post['featured_image'] ? "../post_image/{$post['featured_image']}" : "../post_image/tecnology_image.jpeg" ?>);">
                            <div>
                                <h3><?= $post['title'] ?></h3>
                            </div>
                        </header>
                        <div class="content_post">
                            <div class="labels">
                                <?php
                                $labels = Label::getPostLabelByPostId($post['post_id']);
                                foreach ($labels as $key => $label) { ?>
                                    <span class="<?= $label['color'] ?>"><?= $label['name'] ?></span>
                                <?php } ?>
                            </div>
                            <p><?= $post['description'] ?></p>
                        </div>
                        <div class="cont-buttons">
                            <a href="../Blog/<?= $post['post_id'] ?>" class="btn btn-primary">Ver mas</a>
                        </div>
                        <address class="info_author_post">
                            <div>
                                <p><span>Autor: </span><?= $post['first_name'] . ' ' . $post['last_name'] ?></p>
                                <p><span>Fecha de publicacion: </span><?php $date = date_create($post['created_at']);
                                                                        echo date_format($date, "d-m-Y"); ?></p>
                                <p><span><i class="fa-solid fa-eye"></i></span> <?= $post['views'] != null ? $post['views'] : '0' ?></p>
                            </div>
                        </address>
                    </article>
                <?php endforeach; ?>
            </section>

        <?php endif; ?>
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
                    <?php
                    $category = Category::getAll();

                    foreach ($category as $key => $value) {
                        $category_name = UtilFunctions::split_letter($value['name'], 'upper');
                    ?>
                        <li>
                            <a href="../blog_category/<?= UtilFunctions::split_letter($value['name'], 'split') ?>" class="p-2"><?= $category_name ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div>
                <h3>Etiquetas</h3>
                <ul class="categorias border p-2">
                    <?php
                    $category = Label::getAll();

                    foreach ($category as $key => $value) {
                        $category_name = UtilFunctions::split_letter($value['name'], 'upper');
                    ?>
                        <li>
                            <a href="../blog_category/<?= UtilFunctions::split_letter($value['name'], 'split') ?>" class="p-2"><?= $category_name ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <form action="./filtrado" method="POST">
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
    </div>
    <?php if (isset($_SESSION['user_data']) && $_SESSION['user_data']['role'] == 1) {
        # Incluir modales para crear y editar si el usuario es admin
        require_once './src/views/form_population_create.php';
        require_once './src/views/form_population_edit.php';
        require_once './src/views/modal_categories.php';
        require_once './src/views/modal_labels.php';
    }
    ?>
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

    // Obtener las variables de sesión y convertirlas a objetos JavaScript
    const dataFilter = JSON.parse('<?= json_encode($_SESSION['data_filter']) ?>');
</script>
<script src="../assets/js/selectCheckbox.js"></script>
<?php require_once './templates/footer-blog.php'; ?>