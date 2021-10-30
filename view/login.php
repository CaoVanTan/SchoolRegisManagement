<?php
include '../partials-front/header_login.php';
?>

<div class="main-login vh-100 w-100 d-flex justify-content-center align-items-center">
    <form action="./process_login.php" method="post" class="form w-100">
        <div class="form_header mb-5 d-flex justify-content-center">
            <!-- <img src="../asset/img/logo.png" alt="" class="form__logo-img"> -->
            LOGIN
        </div>
        <div class="mb-3">
            <label for="inputEmail" class="form-label">Username</label>
            <input type="text" class="form-control form-control-login" required placeholder="Enter Username" name="txtUsername" id="inputEmail">
        </div>
        <div class="mb-3">
            <label for="inputPassword" class="form-label">Password</label>
            <input type="password" class="form-control form-control-login" required placeholder="Enter Password" name="txtPass" id="inputPassword">
        </div>
        <button type="submit" class="form-btn btn btn-primary w-100 fw-bold bg-transparent" name="btnLogin">SIGN IN</button>
    </form>
</div>

<?php
include '../partials-front/footer.php';
?>