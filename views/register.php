<?php
if (!defined('SECURE_ACCESS')) {
    die('Direct access not permitted');
}
include('templates/header.php') ?>

<div class="main-content login-panel login-panel-2">
    <div class="login-body login-body-2">
        <div class="top d-flex justify-content-between align-items-center">
            <div class="logo">
                <img src="assets/images/logo-black.png" alt="Logo">
            </div>
            <a href="index.html"><i class="fa-duotone fa-house-chimney"></i></a>
        </div>
        <div class="bottom">
            <h3 class="panel-title">Registration </h3>
            <?php if (isset($_SESSION['error'])) : ?>
                <div class="alert alert-danger text-center">
                    <?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                    ?>
                </div>
            <?php endif ?>
            <?php if (isset($_SESSION['success'])) : ?>
                <div class="alert alert-success text-center">
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </div>
            <?php endif ?>
                <form method="POST" action="register">
                    <div class="input-group mb-25">
                        <input 
                        type="text" 
                        class="form-control" 
                        placeholder="Name"
                        name="name"
                        value="<?= isset($_SESSION['name']) ? $_SESSION['name'] : "" ?>">
                        <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                    </div>
                    <div class="input-group mb-25">
                        <input 
                        type="text" 
                        class="form-control" 
                        placeholder="Username"
                        name="username"
                        value="<?= isset($_SESSION['username']) ? $_SESSION['username'] : "" ?>">
                        <span class="input-group-text"><i class="fa-regular fa-envelope"></i></span>
                    </div>
                    <div class="input-group mb-25">
                        <input 
                        type="password" 
                        class="form-control" 
                        placeholder="Password"
                        name="password">
                        <span class="input-group-text"><i class="fa-regular fa-lock"></i></span>
                    </div>
                    <button class="btn btn-primary w-100 login-btn">Sign Up</button>
                </form>
                <div class="other-option">
                    <p class="mb-0">Already have an account? <a href="/login" class="text-white text-decoration-underline">Login</a></p>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('templates/footer.php') ?>