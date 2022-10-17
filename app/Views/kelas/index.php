<?= $this->extend('layout/template') ?> 
<?= $this->section('content');?>
<?= $this->include('css/style-katalogkelas'); ?>

<div class="container">
    <div class="top">
        <?php if(!empty(session()->getFlashdata('success'))) : ?>
                    <div class="alert alert-success text-center"><?= session()->getFlashdata('success'); ?></div>
                <?php endif ?>
        <h2>Katalog Kelas</h2>
        <h4 class="animated fadeInDown">Belajar Bahasa Isyarat</h4>

    </div>
    <!-- kelas isyarat -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <a href="kelas/videopage_a">
                <div class="card h-100 animated fadeInDown">
                <img src="https://i.ytimg.com/vi/bc2fcIA11QI/maxresdefault.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Alfabet - ABJAD dalam SIBI</h5>
                    <button type="button" class="btn-start">Mulai Belajar</button>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
                </div>
                </a>
            </div>
        <div class="col">
            <a href="kelas/videopage_b">
            <div class="card h-100 animated fadeInDown">
            <img src="https://i.ytimg.com/vi/wC9R0Sw6QaY/maxresdefault.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Belajar Bahasa Isyarat bareng Surya Sahetapy</h5>
                <button type="button" class="btn-start">Mulai Belajar</button>
            </div>
            <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
            </div>
            </a>
        </div>
        <div class="col">
            <a href="kelas/videopage_c">
            <div class="card h-100 animated fadeInDown">
            <img src="https://www.smkmuhkarangmojo.sch.id/assets/images/berita/jogdas_20211212015502.jpg" height="190px" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Kata Ganti Orang</h5>
                <button type="button" class="btn-start">Mulai Belajar</button>
            </div>
            <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
            </div>
            </a>
        </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <a href="kelas/videopage_d">
            <div class="card h-100 animated bounceInDown">
            <img src="https://i.ytimg.com/vi/7CAjxgZpPUU/hqdefault.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Kata - Kata Cinta dalam SIBI</h5>
                <button type="button" class="btn-start">Mulai Belajar</button>
            </div>
            <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
            </div>
            </a>
        </div>
        <div class="col">
            <a href="kelas/videopage_e">
            <div class="card h-100 animated bounceInDown">
            <img src="https://i.ytimg.com/vi/pbVDNa4WLlQ/sddefault.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Kata - Kata Ibadah dalam SIBI</h5>
                <button type="button" class="btn-start">Mulai Belajar</button>
            </div>
            <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
            </div>
            </a>
        </div>
        <div class="col">
            <a href="kelas/videopage_f">
            <div class="card h-100 animated bounceInDown">
            <img src="https://i.ytimg.com/vi/9A8sVFdMxcA/sddefault.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Isyarat Hari - Hari dalam SIBI</h5>
                <button type="button" class="btn-start">Mulai Belajar</button>
            </div>
            <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
            </div>
            </a>
        </div>
        </div>
    </div>
    <br><br><br>


<?= $this->endSection(); ?>