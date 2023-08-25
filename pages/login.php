<?php
include_once './templates/header_blog.php';
?>
<style>

#auth-container {
    background: #fff;
    border: 1px solid #e6e6e6;
    border-radius: 1px;
}
</style>
<main class="container">

    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-sm-12 col-md-5 col-lg-5 pt-2 pl-5 pr-5 pb-5" id="auth-container">

            <img src="../assets/images/navbar-logo.png" class="img-fluid rounded mx-auto d-block pb-4" style="max-width: 30%;">

            <form method="POST" action="./checklogin/" class="container">
                <div class="form-group mt-2">
                    <input type="email" class="form-control" name="email" placeholder="Enter email">
                </div>
                <div class="form-group mt-2">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <button class="btn btn-primary btn-block mt-5" type="submit">Sign in</button>
                <button type="button" class="btn btn-outline-primary btn-lg" data-bs-toggle="modal" data-bs-target="#registerAccount" >
                    Crear Cuenta
                </button>
            </form>
        </div>
    </div>
    <?php require_once './src/views/modal_create_account.php'; ?>
</main>

<?php require_once './templates/footer-blog.php'; ?>