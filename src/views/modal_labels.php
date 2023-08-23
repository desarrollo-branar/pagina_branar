<!-- Modal -->
<div class="modal fade" id="modalLabels" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabelsLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalLabelsLabel">Etiquetas</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="../create_label/" method="post" class="container">
            <div class="form-group">
                <label for="title">Nombre de la etiqueta</label>
                <input type="text" class="form-control" name="label_name">
            </div>
            <div class="form-group">
                <label for="title">Color</label>
                <input type="text" class="form-control" name="color_name">
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
            <?php use Branar\Blog\model\Label;
                  $labels = Label::getAll();

                foreach ($labels as $key => $label) { ?>
                  <form action="../edit_post_label/<?= $label['id']?>" method="post" class="container form_category_edit mt-2">
                      <label for=""><?= $label['id'];?></label>
                      <input type="text" class="form-control" name="label_name" value="<?= $label['name'] ?>">
                      <input type="text" class="form-control" name="color_name" value="<?= $label['color'] ?>">
                      <input type="hidden" name="id" value=<?= $label['id'];?>>
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