<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/regis.css">

    <body>

<div class="vh-100">
        <div class="box h-100">
            <div class="row contentfrom my-4-mx-5 h-100">
            <div class="col-sm-12 col-md-6 col-lg-6 brand bg-ungu" > 
                
                <a href="<?= site_url('/') ?>">
                    <img src="/img/Logo - Ruang Isyarat.png" class="logo " alt="img-fluid" > 
                </a>
                <h3>Let's Join with Us !</h3>
                
                <br>
                
            </div>

            <div class="col-sm-12 col-md-6 col-lg-6 loginkanan d-flex align-items-center justify-content-center">
                
                
                <div class="registrasi"> 
                    <h4 class="text-center mb-5">Sign Up</h4>
                    <form class="mt-3" action="<?= base_url('auth/save'); ?>" method="post">
                        <?= csrf_field(); ?>
                        <?php if(!empty(session()->getFlashdata('fail'))) : ?>
                                <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                            <?php endif ?>

                            <?php if(!empty(session()->getFlashdata('success'))) : ?>
                                <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                            <?php endif ?>

                        
                        <div class="mb-3 form-group ">
                            <label for="">Username</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Your Name" value="<?= set_value('name')?>">
                            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'name') : '' ?></span>
                        </div>
                        
                        <div class="mb-3 form-group ">
                            <label for="" class="form-label">Email </label>
                            <input placeholder="Masukan Email" type="email" name="email" class="form-control"
                            aria-describedby="emailHelp">
                            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></span>
                        </div>
                        
                        <div class="mb-3 form-group ">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter Your Password" value="<?= set_value('password')?>">
                            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></span>
                        </div>
                        
                        <div class="mb-3 form-group ">
                            <label for="">Confirm Password</label>
                            <input type="password" class="form-control" name="cpassword" placeholder="Enter Your Password" value="<?= set_value('cpassword')?>">
                            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'cpassword') : '' ?></span>
                        </div>
                        
                        
                        <div class="form-group d-flex">
                            <button class="btn btn-primary w-100" type="submit">Sign Up</button>
                        </div>
                        
                        <div class="or">
                            <hr />
                            <p> or </p>
                            <hr />
                        </div>
                        <div class="log">
                            <a href="<?= site_url('auth') ?>">
                            <button type="button" class="btn btn-primary w-100 login">Login Now !</button>
                            </a>
                        </div>
                        </div>
                    </div>
                    </form> 
            </div>


            </div>
        </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</body>
</html>