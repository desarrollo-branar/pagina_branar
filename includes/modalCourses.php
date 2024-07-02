<!-- modal courses -->
<div class="modal fade" id="modalCourses" tabindex="-1" aria-labelledby="modalCoursesLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="modalCoursesLabel">Formulario de Servicio</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="./src/controller/sendEmail.php" method="post" id="form-courses">
					<div class="mb-3k">
						<label for="input_email_courses">Correo Electronico</label>
						<input type="email" class="form-control" name="email" id="input_email_courses">
						<div class="invalid-feedback" style="display: none;">
							Por favor, ingresa un correo electrónico válido. Debes seguir el formato usuario@dominio.com.
						</div>
					</div>
					<div class="mb-3">
						<label for="input_name_courses">Nombre o Razon Social</label>
						<input type="text" class="form-control" name="full_name" id="input_name_courses">
						<div class="invalid-feedback" style="display: none;">
							Por favor, ingresa un nombre válido. Solo se permiten letras, espacios, apóstrofes y guiones bajos, sin caracteres especiales o espacios al principio o al final.
						</div>
					</div>
					<div class="mb-3">
						<label for="input_dni_courses">Documento de Identidad</label>
						<input type="text" class="form-control" name="dni" id="input_dni_courses">
						<div class="invalid-feedback" style="display: none;">
							Por favor, ingresa un número de documento válido. Debe comenzar con V, J, E o G seguido de un guion y hasta 8 números.
						</div>
					</div>
					<div class="mb-3">
						<label for="input_phone_number_courses">Numero de Telefono</label>
						<input type="text" class="form-control" name="phone_number" id="input_phone_number_courses">
						<div class="invalid-feedback" style="display: none;">
							Por favor, ingresa un número de teléfono válido. Debe empezar con "+" seguido de entre 8 y 20 dígitos.
						</div>
					</div>
					<div class="mb-3">
						<label for="input_courses_address">Direccion</label>
						<input type="text" class="form-control" name="address" id="input_courses_address">
						<div class="invalid-feedback" style="display: none;">
							Por favor, ingresa una dirección válida. Puedes usar letras, números y caracteres especiales como -, ., #.
						</div>
					</div>
					<div class="mb-3">
						<label for="input_courses_position">Cargo o ocupacion</label>
						<input type="text" class="form-control" name="position" id="input_courses_position">
						<div class="invalid-feedback" style="display: none;">
							Por favor, ingresa un cargo u ocupación válido. Solo se permiten letras y espacios.
						</div>
					</div>
					<div class="mb-3">
						<label for="input_courses_enterprise">Empresa</label>
						<input type="text" class="form-control" name="enterprise" id="input_courses_enterprise">
						<div class="invalid-feedback" style="display: none;">
							Por favor, ingresa el nombre de la empresa. Solo se permiten letras, números y espacios.
						</div>
					</div>
					<div class="mb-3">
						<label for="availability">Días disponibles para realizar el curso</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="availability" id="availability" value="Lunes a viernes">
						<label class="form-check-label" for="availability">
							Lunes a viernes
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="availability" id="availability2" value="Sabatinos">
						<label class="form-check-label" for="availability2">
							Sabatinos
						</label>
					</div>
					<button type="submit" class="btn btn-primary mt-3" id="button_courses">Enviar</button>
					<div class="invalid-feedback" style="display: none;">
						Por favor, corrija los errores antes de enviar este formulario.
					</div>
				</form>

			</div>
		</div>
	</div>
</div>