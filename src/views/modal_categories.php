<!-- Modal -->
<div class="modal fade" id="modalCategories" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalCategoriesLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalCategoriesLabel">Categorias</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="../create_category/" method="post" class="container">
            <div class="form-group">
                <label for="title">Nombre de la Categoria</label>
                <input type="text" class="form-control" name="category_name">
            </div>

            <button type="submit" class="btn btn-primary mt-4">Crear publicacion</button>
        </form>

        <div id="accordion" class="mt-4">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Lista de Categorias
                </button>
              </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                <?php use Branar\Blog\model\Category;
                      $categories = Category::getAll();?>

              
              
              <?php

                foreach ($categories as $key => $category) { ?>
                  <form action="../edit_category/<?= $category['id']?>" method="post" class="container form_category_edit mt-2">
                      <label for=""><?= $category['id'];?></label>
                      <input type="text" class="form-control" name="category_name" value="<?= $category['name'] ?>">
                      <input type="hidden" name="id" value=<?= $category['id'];?>>
                      <button type="submit" class="btn btn-primary">Editar</button>
                  </form>
          <?php  } ?>

                  
              
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>