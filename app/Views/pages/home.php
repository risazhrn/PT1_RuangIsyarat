    <?= $this->extend('layout/template') ?> 
    <?= $this->section('content');?>
    <?= $this->include('css/style-home'); ?>

        <div class="container">
        <!-- Start Study -->
            <div class="d-md-flex start">
                <div class="img animated fadeInDown">
                    <img src="/img/Speak.svg" alt="" width="400px">
                </div>
                <div class="slogan animated fadeInDown">
                    <h2 class="animated fadeInDown">RUANG ISYARAT</h2>
                    <p class="animated fadeInDown">Situs pembelajaran bahasa isyarat. <br>
                        Tingkatkan komunikasi visual tanpa syarat bersama Ruang Isyarat.
                    </p>
                    <a href="kelas">
                        <button type="button" class="btn-start animated fadeInDown">Mulai Belajar <i
                                class="fa-solid fa-arrow-right"></i></button>
                    </a>
                </div>
            </div>

            <!-- Artikel -->
            <div class="d-md-flex artikel">
                <div class="card animated bounceInDown">
                    <img src="/img/why.png" width="100px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Mengapa kita harus belajar bahasa isyarat?</h5>
                        <a href="pages/blog_a">
                            <button type="button" class="btn">Baca Selegkapnya
                                <i class="fa-solid fa-arrow-right"></i></button>
                        </a>
                    </div>
                </div>
                <div class="card animated-custom bounceInDown">
                    <img src="/img/what.png" width="100px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Apa manfaat belajar bahasa isyarat?</h5>
                        <a href="pages/blog_b">
                            <button type="button" class="btn">Baca Selegkapnya <i
                                    class="fa-solid fa-arrow-right"></i></button>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <div class="container">
            <!-- Apa Itu Bahasa Isyarat? -->
            <div class="what">
                <div class="card animated bounceInDown">
                    <div class="d-md-flex card-body">
                        <div class="img-what animated fadeInDown">
                            <img src="/img/bertanya.png" alt="">
                        </div>
                        <div class="desc-what">
                            <h3>Apa itu Bahasa Isyarat?</h3>
                            <p>Dalam Kamus Besar Bahasa Indonesia (KBBI), bahasa isyarat berarti bahasa yang tidak
                                menggunakan ucapan manusia atau bunyi tulisan dalam sistem simbolnya. Bahasa isyarat
                                adalah bahasa yang menggunakan gerakan tangan, kepala, tubuh dan sebagainya.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Support -->

        </div>

        <!-- Testimonials -->
        <div class="testimonials">

            <div class="container">
                <h3 class="animated fadeInDown">Testimonials</h3>
                <hr class="animated fadeInDown">
                <div class="testi d-md-flex">
                    <div class="card animated fadeInDown">
                        <div class="card-body">
                            <img src="/img/p1.png" alt="" width="100px"> <br>
                            <h6 class="animated fadeInDown">Selena</h6>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i> <br>
                            <p class="animated fadeInDown">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim, facilis.</p>
                        </div>
                    </div>
                    <div class="card animated fadeInDown">
                        <div class="card-body">
                            <img src="/img/p2.png" alt="" width="80px">
                            <h6 class="animated fadeInDown">Natasha</h6>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i> <br>
                            <p class="animated fadeInDown">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim, facilis.</p>
                        </div>
                    </div>
                    <div class="card animated fadeInDown">
                        <div class="card-body">
                            <img src="/img/p3.png" alt="" width="80px">
                            <h6 class="animated fadeInDown">Kevin</h6>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i> <br>
                            <p class="animated fadeInDown">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim, facilis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?= $this->endSection(); ?>