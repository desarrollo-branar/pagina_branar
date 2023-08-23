<?php
// get_post_data.php
use Branar\Blog\model\Post;
use Branar\Blog\model\Category;
use Branar\Blog\model\Label;

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
            <button type="submit" class="btn btn-primary mt-4">Editar publicacion</button>
        </form>

        <div id="accordion" class="mt-4">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Etiquetas
                </button>
              </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                <form action="../edit_post_label/" method="post" class="container form_category_edit mt-2">
                    <input type="hidden" name="post_id" value="<?= $params['id'];?>">
                    <?php 
                    $labels = Label::getAll(); // Obtén todas las labels de la base de datos
                    $postLabels = Label::getPostLabelByPostId($params['id']); // Obtén las labels del post actual

                    $maxCheckboxes = 3; // Establece el máximo de checkboxes permitidos

                    foreach ($labels as $label): ?>
                        <label>
                            <input type="checkbox" name="labels[]" value="<?= $label['id'] ?>"
                            <?php
                            // Verifica si la label está asociada al post
                            if (in_array($label['id'], array_column($postLabels, 'label_id'))) {
                                echo 'checked';
                            }
                            ?>
                            > <?= $label['name'] ?>
                        </label>
                    <?php endforeach; ?>

                    <script>
                        const checkboxes = document.querySelectorAll('input[name="labels[]"]');
                        let checkedCount = 0;

                        checkboxes.forEach(checkbox => {
                            checkbox.addEventListener('change', () => {
                                checkedCount = document.querySelectorAll('input[name="labels[]"]:checked').length;

                                if (checkedCount > <?= $maxCheckboxes ?>) {
                                    checkbox.checked = false;
                                }
                            });
                        });
                    </script>

                    <button type="submit" class="btn btn-primary">Editar</button>
                </form>

              
              </div>
            </div>
          </div>
        </div>
    </div>
<?php }
}else{
    echo 'hola';
}
?>
