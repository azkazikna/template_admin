<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header> 
    <div class="page-heading">
        <h3>Beranda</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body px-3 py-5">
                            <h5>Selamat Datang, <?= $nama; ?> di Aplikasi TravelLoger!</>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-xl">
                                    <img src="assets/images/faces/1.jpg" alt="Face 1">
                                </div>
                                <div class="ms-3 name">
                                    <h5 class="font-bold mt-1"><?= $nama; ?></h5>
                                    <h6 class="text-muted mb-4"><?= $nik; ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-start">
                    <p>2021 &copy; Mazer</p>
                </div>
                <div class="float-end">
                    <p>Crafted with <span class="text-danger"><i class="bi bi-heart-fill icon-mid"></i></span> by <a href="https://ahmadsaugi.com">Saugi</a> & <a href="https://azkazikna.github.io/">Azkazikna</a></p>
                </div>
            </div>
        </footer>
    </div>
</div>