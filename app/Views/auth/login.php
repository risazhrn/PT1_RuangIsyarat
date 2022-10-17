<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    
    <body>

    <div class="vh-100">
    <div class="box h-100">
    <div class="row contentfrom my-4-mx-5 h-100">
        <div class="col-sm-12 col-md-6 col-lg-6 brand">
        <a href="<?= site_url('/') ?>">
            <h3> <img class="logo1" src="img/Logo - Ruang Isyarat.png" width="60px" alt="">Ruang Isyarat </h3>
            <img src="img/mask.png" class="gambar">
            <br>
            <h4 class="text-center brand-text">"Break the communication barrier between us"</h4>
            <h6 class="text-center brand-text-year">2022</h6>
        </a>

        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 loginkanan d-flex align-items-center justify-content-center">
        <div class="w-50">
            <h4 class="text-center mb-5">Welcome To Ruang Isyarat</h4>
            <form class="mt-3" action="<?= base_url('auth/check'); ?>" method="post">
            <?= csrf_field(); ?>
            <?php if(!empty(session()->getFlashdata('fail'))) : ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                <?php endif ?>

                <?php if(!empty(session()->getFlashdata('success'))) : ?>
                    <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                <?php endif ?>

            <div class="mb-3 form-group">
                <label for="InputEmail" class="form-label">Email </label>
                <input placeholder="Masukan Email" type="email" name="email" class="form-control" id="InputEmail"
                aria-describedby="emailHelp">
                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></span>
            </div>
            <div class="mb-3 form-group">
                <label for="InputPassword" class="form-label">Password</label>
                <input placeholder="Masukan Password" type="password" name="password" class="form-control" id="InputPassword">
                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></span>
            </div>

            <button type="submit" class="btn btn-primary w-100 ">Login</button>
            <br>
            <div class="or">
                <hr />
                <p> or </p>
                <hr />
            </div>
            <div class="reg">
                <a href="<?= site_url('auth/register') ?>">
                <button type="button" class="btn btn-primary w-100 regis/">Register Now !</button>
                </a>
            </div>
            </form>
        </div>
        </div>

    </div>
    </div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</body>
</html>