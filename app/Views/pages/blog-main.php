    <?= $this->extend('layout/template') ?>
    <?= $this->section('content');?>
    <?= $this->include('css/style-blogmain') ?>

    <div class="container">
<!-- Blog yang di highlight -->
    <div class="clearfix mainblog">
        <img src="/img/why.png" class="col-md-4 float-md-start mb-3 me-3 ms-md-3" alt="...">

        <h3>
            Mengapa Kita Harus Belajar Bahasa Isyarat?
        </h3>
        <p>	
        Menurut survey yang dilakukan oleh Ethnologue, terdapat 2000 pengguna  Bahasa Isyarat Indonesia atau disingkat menjadi BISINDO. Padahal, hasil sensus Departemen Kesehatan pada tahun 1993-1996 yang dilakukan di tujuh provinsi menunjukkan sekitar 0,4 persen warga Indonesia mengalami tuli dan.... <a href="blog_a">read more</a>
        </p>
    </div>


    <div class="row otherblog">
        <div class="col-md-12">
        </div>

        <!-- post -->
        <div class="col-md-4">
            <div class="post">
            <a class="post-img" href="pages/blog-b"><img src="/img/what.png" height="200px" alt=""></a>
            <div class="post-body">
                <h5>
                Apa Manfaat Belajar Bahasa Isyarat?
                </h5>
                <div class="post-meta">
                <span class="post-category1">Pernahkah terpikir olehmu untuk belajar bahasa isyarat? Bahasa isyarat ini merupakan bahasa yang digunakan oleh para tunarungu untuk berkomunikasi. Menurut penelitian.... <a
                    href="blog_b">read more</a></span>
                </div>
            </div>
            </div>
        </div>
        <!-- /post -->

        <!-- post -->
        <div class="col-md-4">
            <div class="post">
            <a class="post-img" href="#"><img src="/img/blog3.jpg" alt=""></a>
            <div class="post-body">
                <h5>
                Remaja Tunarungu Promosikan Bahasa Isyarat untuk Semua Anak Muda
                </h5>
                <div class="post-meta">
                <span class="post-category2">Seorang remaja asal Malaysia, Serena Lee, belum lama ini menerima gelar UNICEF Malaysia KitaConnect Champion Oktober lalu dari proyek advokasinya untuk para tunarungu, yaitu Sign for Malaysia (SFM).
                    Proyeknya tersebut mempromosikan bahasa isyarat kepada remaja Malaysia di bawah inisiatif #LearningAtHome Unicef ​​selama pandemi COVID-19.
                    Bagi gadis berusia 16 tahun ini, yang juga... <a
                    href="blog_c">read more</a></span>
                </div>
            </div>
            </div>
        </div>
        <!-- /post -->

        <!-- post -->
        <div class="col-md-4">
            <div class="post">
            <a class="post-img" href="#"><img src="/img/blog4.jpg" alt=""></a>
            <div class="post-body">
                <h5>
                Indonesia Gunakan 2 Jenis Bahasa Isyarat, Apa Saja?
                </h5>
                <div class="post-meta">
                <span class="post-category3">Bahasa isyarat merupakan bahasa non-lisan yang sebagian besar digunakan tunarungu atau tunawicara untuk berkomunikasi melalui bahasa tubuh seperti gerakan tangan, gerakan lengan, gerakan tubuh, serta ekspresi wajah.
                    Pengakuan terhadap bahasa isyarat adalah.... <a
                    href="blog_d">read more</a></span>
                </div>
            </div>
            </div>
        </div>
        <!-- /post -->
        </div>


    </div>

    </div>
    <?= $this->endSection(); ?>