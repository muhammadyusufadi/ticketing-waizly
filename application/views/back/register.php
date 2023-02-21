<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php base_url() ?>../assets/template/images/favicon.png">
    <link rel="stylesheet"
        href="<?php base_url() ?>../assets/template/https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="<?php base_url() ?>../assets/template/css/style.css" rel="stylesheet">

</head>

<body class="h-100">

    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">

                                <a class="text-center">
                                    <h4>REGISTER</h4>
                                </a>
                                <?= $this->session->flashdata('message'); ?>
                                <?= validation_errors() ?>
                                <form action="<?= base_url('Auth/proses_register') ?>" method="post"
                                    class="mt-5 mb-5 login-input">
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control" placeholder="Username"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" value="<?= set_value('email') ?>"
                                            class="form-control" placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control"
                                            placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="confirm_password" class="form-control"
                                            placeholder="Retype Password" required>
                                    </div>
                                    <button class="btn login-form__btn submit w-100">Sign Up</button>
                                    <!-- <a href="auth/proses_register" class="btn login-form__btn submit w-100"
                                        role="button">Sign Up</a> -->
                                </form>
                                <p class="mt-5 login-form__footer">Have account <a href="<?= base_url('') ?>"
                                        class="text-primary">Sign In
                                    </a> now
                                </p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>




    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>
</body>



































































































































</html>