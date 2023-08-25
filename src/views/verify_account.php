<?php
include_once './templates/header_blog.php';

use Branar\Blog\model\Navegation;
use Branar\Blog\model\Email;

?>

<main class="container">

    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-sm-12 col-md-5 col-lg-5 pt-2 pl-5 pr-5 pb-5" id="auth-container">

            <img src="../assets/images/navbar-logo.png" class="img-fluid rounded mx-auto d-block pb-4" style="max-width: 30%;">

            <form method="POST" action="../confirm_account/" class="container">
                <p class="subtitle">Hemos enviado un correo de verificacion a <strong><?= $_SESSION['correo']?></strong>, favor ingresar el codigo enviado. En caso de no haber recibido el correo precione el siguiente enlace para su reenvio <a href="./resend_code/<?= $_SESSION['correo']?>">reenviar codigo</a>.</p>

                <div class="form-group mt-2">
                    <input type="text" class="input" name="code_account" placeholder="####">
                </div>

                <button class="btn btn-primary btn-block mt-5" type="submit">Confirmar cuenta</button>
            </form>
        </div>
    </div>
</main>

<?php require_once './templates/footer-blog.php'; ?>