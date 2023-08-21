<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Create Post</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="../create_post/" method="post" enctype="multipart/form-data" class="container">
            <div class="form-group">
                <label for="title">Titulo</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <textarea class="form-control" name="description" rows="5"></textarea>
            </div>
            <div class="input-group mt-4">
                <label class="input-group-text" for="inputGroupSelect01">Category</label>
                <select class="form-select" name="category">
                <?php
                use Branar\Blog\model\Category;

                $categories = Category::getAll();

                foreach ($categories as $key => $category) { ?>
                    <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
          <?php  } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="title">Ficture image</label>
                <input type="file" name="file" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary mt-4">Crear publicacion</button>
        </form>

      </div>
    </div>
  </div>
</div>