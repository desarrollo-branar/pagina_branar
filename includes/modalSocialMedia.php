<!-- modal social media service -->
<div class="modal fade" id="formServiceSocialMedia" tabindex="-1" aria-labelledby="formServiceSocialMediaLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formServiceSocialMediaLabel">Formulario de Servicio</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="./src/controller/sendEmail.php" method="post" id="form-plan-social-media">
          <div class="mb-3">
            <label for="input_name-plan_social_media">Nombre o Razon Social</label>
            <input type="text" class="form-control" name="full_name" id="input_name-plan_social_media">
            <div class="invalid-feedback" style="display: none;">
              Por favor, ingresa un nombre válido. Solo se permiten letras, espacios, apóstrofes y guiones bajos, sin caracteres especiales o espacios al principio o al final.
            </div>
          </div>
          <div class="mb-3">
            <label for="input_email-plan_social_media">Email address</label>
            <input type="email" class="form-control" name="email" id="input_email-plan_social_media">
            <div class="invalid-feedback" style="display: none;">
              Por favor, ingresa un correo electrónico válido. Debes seguir el formato usuario@dominio.com.
            </div>
          </div>
          <div class="mb-3">
            <label for="input_comments-plan_social_media">Comentario</label>
            <textarea class="form-control" name="comment" id="input_comments-plan_social_media"></textarea>
            <div class="invalid-feedback" style="display: none;">
              El campo es obligatorio y no puede ser vacio
            </div>
          </div>
          <div class="mb-3">
            <label for="select-plan_social_media">Plan</label>
            <select class="form-select" name="plan" id="select-plan_social_media">
              <option id="1" value="Plan Emprendedor - Social Media">Plan Emprendedor - Social Media</option>
              <option id="2" value="Plan Ejecutivo - Social Media">Plan Ejecutivo - Social Media</option>
              <option id="3" value="Plan Profesional - Social Media">Plan Profesional - Social Media</option>
            </select>
            <div class="invalid-feedback" style="display: none;">
              Debes escoger una opcion
            </div>
          </div>
          <button type="submit" class="btn btn-primary mt-3" id="button-plan_social_media">Enviar</button>
          <div class="invalid-feedback" style="display: none;">
            Por favor, corrija los errores antes de enviar este formulario.
          </div>
        </form>

      </div>
    </div>
  </div>
</div>