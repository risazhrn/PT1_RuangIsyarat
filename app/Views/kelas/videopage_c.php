<?= $this->extend('layout/template') ?> 
<?= $this->section('content');?>
<?= $this->include('css/style-videopage'); ?>
<div class="container">

    <div class="top d-flex">
            <div class="back mx-5 my-3">
                <a href="/kelas"><i class="fa-solid fa-angles-left"></i>  Back</a>
            </div>
    </div>
    <div class="content d-flex">
            <div class="content-left">
                <div class="card text-white mb-3 bg-dark">
                <div class="card-body">
                    <div class="btn-group-vertical py-3 my-3">
                    <div class="kategori">
                        <button type="button" class="btn btn-primary">Video 1</button>
                    </div>
                    <div class="kategori">
                        <button type="button" class="btn btn-primary">Video 2</button>
                    </div>
                    <div class="kategori">
                        <button type="button" class="btn btn-primary">Video 3</button>
                    </div>
                    <div class="kategori">
                        <button type="button" class="btn btn-primary">Video 4</button>
                    </div>
                    <div class="kategori">
                        <button type="button" class="btn btn-primary">Video 5</button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
    
            <div class="content-right">
                <iframe width="800" height="450" src="https://www.youtube.com/embed/P683FVLH-2o" title="YouTube video player" title="YouTube video player" frameborder="2" style="border-radius: 15px;" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
</div>
<?= $this->endSection(); ?>