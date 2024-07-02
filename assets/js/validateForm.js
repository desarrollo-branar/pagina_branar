// Funciones de validación
function validateEmail(emailInput) {
    const emailValue = emailInput.value.trim();
    const validFeedback = emailInput.nextElementSibling;

    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    if (emailValue === '' || !emailRegex.test(emailValue)) {
        emailInput.classList.remove('is-valid');
        emailInput.classList.add('is-invalid');
        validFeedback.style.display = 'block';
    } else {
        emailInput.classList.remove('is-invalid');
        emailInput.classList.add('is-valid');
        validFeedback.style.display = 'none';
    }
}


function validateName(nameInput) {
    const nameValue = nameInput.value.trim();
    const invalidFeedback = nameInput.nextElementSibling;

    const nameRegex = /^[A-Za-z][A-Za-z\s'-]*[A-Za-z]$/;

    if (!nameRegex.test(nameValue) || nameValue === '') {
        nameInput.classList.remove('is-valid');
        nameInput.classList.add('is-invalid');
        // Mostrar el mensaje de error
        invalidFeedback.style.display = 'block';
    } else {
        nameInput.classList.remove('is-invalid');
        nameInput.classList.add('is-valid');
        // Ocultar el mensaje de error si es visible
        invalidFeedback.style.display = 'none';
    }
}


function validatePhoneNumber(phoneNumberInput) {
    const phoneNumberValue = phoneNumberInput.value.trim();
    const invalidFeedback = phoneNumberInput.nextElementSibling;

    // Expresión regular para validar un número de teléfono que inicie con "+" y tenga entre 8 y 15 dígitos
    const phoneRegex = /^\+\d{8,20}$/;

    // Validar que el número de teléfono contenga solo números y el símbolo "+"
    const onlyNumbersRegex = /^[0-9\+]+$/;

    if (!(phoneRegex.test(phoneNumberValue) && onlyNumbersRegex.test(phoneNumberValue)) || phoneNumberValue === '') {
        phoneNumberInput.classList.remove('is-valid');
        phoneNumberInput.classList.add('is-invalid');
        // Mostrar el mensaje de error
        invalidFeedback.style.display = 'block';
    } else {
        phoneNumberInput.classList.remove('is-invalid');
        phoneNumberInput.classList.add('is-valid');
        // Ocultar el mensaje de error si es visible
        invalidFeedback.style.display = 'none';
    }
}


function validateDNI(inputDNI) {
    const dniPattern = /^(V|J|E|G)-\d{1,8}$/;
    const isValidDNI = dniPattern.test(inputDNI.value.trim());
    const invalidFeedback = inputDNI.nextElementSibling;

    if (isValidDNI) {
        inputDNI.classList.remove('is-invalid');
        inputDNI.classList.add('is-valid');
        // Mostrar el mensaje de error
        invalidFeedback.style.display = 'none';
    } else {
        inputDNI.classList.remove('is-valid');
        inputDNI.classList.add('is-invalid');
        // Ocultar el mensaje de error si es visible
        invalidFeedback.style.display = 'block';
    }
}


function validateAddress(addressInput) {
    const addressValue = addressInput.value.trim();
    const invalidFeedback = addressInput.nextElementSibling;

    // Expresión regular para validar la dirección
    const addressRegex = /^[a-zA-Z0-9\s\-,.#]+$/;

    if (!addressRegex.test(addressValue) || addressValue === '') {
        addressInput.classList.remove('is-valid');
        addressInput.classList.add('is-invalid');
        // Mostrar el mensaje de error
        invalidFeedback.style.display = 'block';
    } else {
        addressInput.classList.remove('is-invalid');
        addressInput.classList.add('is-valid');
        // Ocultar el mensaje de error si es visible
        invalidFeedback.style.display = 'none';
    }
}


function validatePosition(positionInput) {
    const positionValue = positionInput.value.trim();
    const invalidFeedback = positionInput.nextElementSibling;

    // Expresión regular para validar el cargo u ocupación
    const positionRegex = /^[a-zA-Z\s]+$/;

    if (!positionRegex.test(positionValue) || positionValue === '') {
        positionInput.classList.remove('is-valid');
        positionInput.classList.add('is-invalid');
        // Mostrar el mensaje de error
        invalidFeedback.style.display = 'block';
    } else {
        positionInput.classList.remove('is-invalid');
        positionInput.classList.add('is-valid');
        // Ocultar el mensaje de error si es visible
        invalidFeedback.style.display = 'none';
    }
}


function validateEnterprise(enterpriseInput) {
    const enterpriseValue = enterpriseInput.value.trim();
    const invalidFeedback = enterpriseInput.nextElementSibling;

    // Expresión regular para validar el nombre de la empresa
    const enterpriseRegex = /^[a-zA-Z0-9\s]+$/;

    if (!enterpriseRegex.test(enterpriseValue) || enterpriseValue === '') {
        enterpriseInput.classList.remove('is-valid');
        enterpriseInput.classList.add('is-invalid');
        // Mostrar el mensaje de error
        invalidFeedback.style.display = 'block';
    } else {
        enterpriseInput.classList.remove('is-invalid');
        enterpriseInput.classList.add('is-valid');
        // Ocultar el mensaje de error si es visible
        invalidFeedback.style.display = 'none';
    }
}


function validateComment(commentInput) {
    const commentValue = commentInput.value.trim();
    const invalidFeedback = commentInput.nextElementSibling;

    if (commentValue === '' || commentValue === ' ') {
        commentInput.classList.remove('is-valid');
        commentInput.classList.add('is-invalid');
        // Mostrar el mensaje de error
        invalidFeedback.style.display = 'block';
    } else {
        commentInput.classList.remove('is-invalid');
        commentInput.classList.add('is-valid');
        // Ocultar el mensaje de error si es visible
        invalidFeedback.style.display = 'none';
    }
}


function validateSelect(selectPlan) {
    const isValidSelect = selectPlan.value !== ''; // Verificar si se ha seleccionado una opción
    if (isValidSelect) {
        selectPlan.classList.remove('is-invalid');
        selectPlan.classList.add('is-valid');
    } else {
        selectPlan.classList.remove('is-valid');
        selectPlan.classList.add('is-invalid');
    }
}



function validateService(serviceInput) {
    const isValidService = serviceInput.value !== '';
    if (isValidService) {
        serviceInput.classList.remove('is-invalid');
        serviceInput.classList.add('is-valid');
    } else {
        serviceInput.classList.remove('is-valid');
        serviceInput.classList.add('is-invalid');
    }
}

function validateForm(event, formId) {
    event.preventDefault();

    if (formId == 'form-plan-social-media') {
        let inputEmail = document.getElementById('input_email-plan_social_media');
        let inputName = document.getElementById('input_name-plan_social_media');
        let inputComment = document.getElementById('input_comments-plan_social_media');
        let selectPlan = document.getElementById('select-plan_social_media');

        const buttonForm = document.getElementById('button-plan_social_media');
        const invalidFeedback = buttonForm.nextElementSibling;

        validateEmail(inputEmail);
        validateName(inputName);
        validateComment(inputComment);
        validateSelect(selectPlan); 

        // Verificar si todas las validaciones son exitosas antes de enviar el formulario
        const isValidEmail = inputEmail.classList.contains('is-valid');
        const isValidName = inputName.classList.contains('is-valid');
        const isValidComment = inputComment.classList.contains('is-valid');
        const isValidSelect = selectPlan.classList.contains('is-valid'); 
        
        if (isValidEmail && isValidName && isValidComment && isValidSelect) {
            invalidFeedback.style.display = 'none';
            grecaptcha.ready(function() {
                grecaptcha.execute('6LcRLuEoAAAAANp06sYfR8ePjm_9D24T65mx-eU7', {
                    action: 'plan_social_media'
                }).then(function(token) {
                    document.getElementById('form-plan-social-media').insertAdjacentHTML('afterbegin', `<input type="hidden" name="token" value="${token}">`);
                    document.getElementById('form-plan-social-media').insertAdjacentHTML('afterbegin', `<input type="hidden" name="action" value="plan_social_media">`);
        
                    // Obtener datos del formulario
                    const formData = new FormData(document.getElementById('form-plan-social-media'));
        
                    // Realizar la solicitud POST con Fetch API
                    fetch('./src/controller/sendEmail.php', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Aquí puedes manejar el éxito, por ejemplo, mostrar un mensaje
                            alert('Correo enviado exitosamente');
                            console.log('Correo enviado exitosamente:', data);
                        } else {
                            // Aquí puedes manejar el error, por ejemplo, mostrar un mensaje de error
                            alert('Error al enviar el correo');
                            console.error('Error al enviar el correo:', data.message);
                        }
                    })
                    .catch(error => {
                        console.error('Error en la solicitud Fetch:', error);
                        alert('Error en la solicitud Fetch. Por favor, intenta nuevamente.');
                    });
                });
            });
        } else {
            invalidFeedback.style.display = 'block';
        }
    } else if (formId == 'form-courses') {
        let inputEmail = document.getElementById('input_email_courses');
        let inputName = document.getElementById('input_name_courses');
        let inputDNI = document.getElementById('input_dni_courses');
        let inputPhoneNumber = document.getElementById('input_phone_number_courses');
        let inputAddress = document.getElementById('input_courses_address');
        let inputPosition = document.getElementById('input_courses_position');
        let inputEnterprise = document.getElementById('input_courses_enterprise');

        let radiosAvailability = document.querySelectorAll('input[name="availability"]');
        let invalidFeedback = document.querySelector('#form-courses .invalid-feedback');

        validateEmail(inputEmail);
        validateName(inputName);
        validateDNI(inputDNI);
        validatePhoneNumber(inputPhoneNumber);
        validateAddress(inputAddress);
        validatePosition(inputPosition);
        validateEnterprise(inputEnterprise);

        let isValidRadio = false;
        radiosAvailability.forEach(function(radio) {
            if (radio.checked) {
                isValidRadio = true;
            }
        });

        if (isValidRadio) {
            radiosAvailability.forEach(function(radio) {
                const parentDiv = radio.closest('.form-check');
                parentDiv.classList.remove('is-invalid');
                parentDiv.classList.add('is-valid');
            });
        } else {
            radiosAvailability.forEach(function(radio) {
                const parentDiv = radio.closest('.form-check');
                parentDiv.classList.remove('is-valid');
                parentDiv.classList.add('is-invalid');
            });
        }

        // Verificar si todas las validaciones son exitosas antes de enviar el formulario
        const isValidEmail = inputEmail.classList.contains('is-valid');
        const isValidName = inputName.classList.contains('is-valid');
        const isValidDNI = inputDNI.classList.contains('is-valid');
        const isValidPhoneNumber = inputPhoneNumber.classList.contains('is-valid');
        const isValidAddress = inputAddress.classList.contains('is-valid');
        const isValidPosition = inputPosition.classList.contains('is-valid');
        const isValidEnterprise = inputEnterprise.classList.contains('is-valid');

        const isValidRadioAvailability = isValidRadio;

        if (isValidEmail && isValidName && isValidDNI && isValidPhoneNumber && isValidAddress && isValidPosition && isValidEnterprise && isValidRadioAvailability) {
            invalidFeedback.style.display = 'none';
            console.log('Formulario de cursos válido');
            // Aquí podrías enviar el formulario mediante AJAX si es necesario
        } else {
            invalidFeedback.style.display = 'block';
            console.log('Formulario de cursos inválido');
        }
    } else {
        console.log('deja lo necio');
    }
}

// Formulaario social media
const form_social_media = document.getElementById('form-plan-social-media');
form_social_media.addEventListener('submit', function(event) {
    validateForm(event, 'form-plan-social-media'); // Pasar el evento y el ID del formulario
});
// Inputs Formulario Planes Social Media
const inputEmailSocialMedia = document.getElementById('input_email-plan_social_media');
const inputNameSocialMedia = document.getElementById('input_name-plan_social_media');
const inputCommentSocialMedia = document.getElementById('input_comments-plan_social_media');
const selectPlan = document.getElementById('select-plan_social_media');

inputEmailSocialMedia.addEventListener('change', function() {
    validateEmail(inputEmailSocialMedia);
});
inputNameSocialMedia.addEventListener('change', function() {
    validateName(inputNameSocialMedia);
});
inputCommentSocialMedia.addEventListener('input', function() {
    validateComment(inputCommentSocialMedia);
});
selectPlan.addEventListener('change', function() {
    validateSelect(selectPlan); // Validar el <select> al cambiar la selección
});


const form_courses = document.getElementById('form-courses');
form_courses.addEventListener('submit', function(event) {
    validateForm(event, 'form-courses');
});

// Inputs Formulario Planes Social Media
const inputEmailCourses = document.getElementById('input_email_courses');
const inputNameCourses = document.getElementById('input_name_courses');
const inputNameDNI = document.getElementById('input_dni_courses');
const inputNamePhoneNumber = document.getElementById('input_phone_number_courses');
const inputNameAddress = document.getElementById('input_courses_address');
const inputNamePosition = document.getElementById('input_courses_position');
const inputNameEnterprise = document.getElementById('input_courses_enterprise');


// Event listener para EMAIL
inputEmailCourses.addEventListener('change', function() {
    validateEmail(inputEmailCourses);
});
// Event listener para NAME
inputNameCourses.addEventListener('change', function() {
    validateName(inputNameCourses);
});
// Event listener para cedula
inputNameDNI.addEventListener('change', function() {
    validateDNI(inputNameDNI);
});
// Event listener para PHONE NUMBER
inputNamePhoneNumber.addEventListener('change', function() {
    validatePhoneNumber(inputNamePhoneNumber);
});
// Event listener para ADDRESS
inputNameAddress.addEventListener('change', function() {
    validateAddress(inputNameAddress);
});
// Event listener para POSITION
inputNamePosition.addEventListener('change', function() {
    validatePosition(inputNamePosition);
});
// Event listener para ENTERPRISE
inputNameEnterprise.addEventListener('change', function() {
    validateEnterprise(inputNameEnterprise);
});
