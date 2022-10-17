

<div class="bg">

        <!-- Navbar -->
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <!-- Logo + Ruang Isyarat -->
                    <a class="navbar-brand" href="#">
                        <img src="/img/Logo - Ruang Isyarat.png" width="76">
                        &thinsp; Ruang Isyarat
                    </a>
                    <!-- Button responsive -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- Menu navbar kanan -->
                    <div class="collapse navbar-collapse navbarkanan" id="navbarTogglerDemo02">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item home">
                                <a class="nav-link <?= $linka ?>" aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item kelas">
                                <a class="nav-link <?= $linkb ?>" href="/kelas">Kelas Isyarat</a>
                            </li>
                            <li class="nav-item blog">
                                <a class="nav-link  <?= $linkc ?>" href="<?= base_url('pages/blog'); ?>">Blog</a>
                            </li>
                            
                        </ul>
                        
                        <!-- Button login -->
                        <?php if(!session()->get('logged_in')) : ?>
                        <form class="d-flex" action="<?= base_url('auth'); ?>">
                                <button class="btn login" type="submit">Login</button>
                        </form>
                        &ensp;
                        <!-- Button Register -->
                        <form class="d-flex" action="<?= base_url('auth/register'); ?>">
                                <button class="btn register" type="submit">Register</button>
                        </form>

                        <?php else : ?>
                        <form class="d-flex" action="<?= base_url('auth/logout'); ?>">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item blog">
                                <a class="nav-link" href="#"><i class="fa-solid fa-user-large">  </i> <?= session()->get('name') ?></a>
                            </li>
                        </ul>
                                <button class="btn logout" type="submit"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</button>
                            
                        </form>
                        <?php endif ?>
                        
                    </div>
                </div>
            </nav>
            </div>