<?php
// get_post_data.php
use Branar\Blog\model\Post;
use Branar\Blog\model\Category;

$id = $params['id'];

if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($id)) {
    // Obtener los datos del post por su ID
    $posts = Post::getPostById($id); ?>
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="editPostModalLabel">Edit Post</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <?php
    foreach ($posts as $post) { ?>
    <div class="modal-body">
        <form action="./edit_post/<?= $id ?>" method="post" enctype="multipart/form-data" class="container">
            <div class="form-group">
                <label for="title">Titulo</label>
                <input type="text" class="form-control" name="title" value="<?= $post['title']?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <textarea class="form-control" name="description" rows="5"><?= $post['description']?></textarea>
            </div>
            <div class="input-group mt-4">
                <label class="input-group-text">Category</label>
                <select class="form-select" name="category">
                <?php
                $categories = Category::getAll();

                foreach ($categories as $key => $category): 
                    if ($post['category_id'] == $category['id']): ?>
                    <option value="<?= $category['id'] ?>" selected><?= $category['name'] ?></option>
              <?php else: ?>
                    <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
              <?php endif; endforeach; ?>
                </select>
            </div>
            <div class="input-group mt-4">
                <label class="input-group-text">Status</label>
                <select class="form-select" name="status">
                <?php
                if ($post['status'] == 0){?>
                    <option value="0" selected>Habilitado</option>
                    <option value="1" >Deshabilitado</option>
          <?php }else{ ?>
                    <option value="0">Habilitado</option>
                    <option value="1" selected>Deshabilitado</option>
          <?php } ?>
                </select>
            </div>
            <div class="form-group mt-2">
                <label for="title">Ficture image</label>
                <input type="file" name="file" class="form-control">
            </div>
            <input type="hidden" name="id" value=<?= $params['id'];?>>
            <button type="submit" class="btn btn-primary mt-4">Crear publicacion</button>
        </form>
    </div>
<?php }
}else{
    echo 'hola';
}
?>
