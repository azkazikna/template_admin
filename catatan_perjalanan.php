<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header> 
    <div class="page-heading">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Catatan Perjalanan Anda</h3>
                <p class="text-subtitle text-muted">Semua catatan perjalanan anda akan tampil disini.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Catatan Perjalanan</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body px-3">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="table1">
                                    <thead>
                                        <th width="10">No</th>
                                        <th>Tanggal</th>
                                        <th>Waktu</th>
                                        <th>Lokasi</th>
                                        <th>Suhu Tubuh</th>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $no = 1;
                                        $file="file/".$nik."-".$nama.".txt";
                                        $fh=fopen($file, "r");
                                        while(!feof($fh)){
                                            $baris=fgets($fh);
                                            if ($baris) {
                                            $string_data=explode("|", $baris);
                                        ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $string_data['0'] ?></td>
                                            <td><?php echo $string_data['1'] ?></td>
                                            <td><?php echo $string_data['2'] ?></td>
                                            <td><?php echo $string_data['3'] ?></td>
                                        </tr>

                                    <?php }} ?>
                                    </tbody>
                                </table>
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