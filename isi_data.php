<?php 

if(isset($_POST['simpan'])) {
    $tanggal=$_POST['tanggal'];
    $jam=$_POST['jam'];
    $lokasi=$_POST['lokasi'];
    $suhu=$_POST['suhu'];
    
    $filecatatan="file/".$nik."-".$nama.".txt";
    $fh=fopen($filecatatan, "a");
    $isi_data=$tanggal."|".$jam."|".$lokasi."|".$suhu."\n";
    fwrite($fh, $isi_data);
    fclose($fh);

    $alert = '<div class="alert alert-success mb-4">Data Berhasil Ditambah!</div>';
    echo "<meta http-equiv='refresh', content='1; url=?page=isi_data'";
}

?>
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header> 
    <div class="page-heading">
        <h3>Tambah Catatan</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body px-3 py-5">
                            <?= @$alert; ?>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="">Tanggal</label>
                                    <input type="date" class="form-control mt-2 mb-4" name="tanggal" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Jam</label>
                                    <input type="time" class="form-control mt-2 mb-4" name="jam" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Lokasi yang dikunjungi</label>
                                    <input type="text" class="form-control mt-2 mb-4" name="lokasi" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Suhu Tubuh</label>
                                    <input type="text" class="form-control mt-2 mb-4" name="suhu" required>
                                </div>
                                <div class="form-inline">
                                    <button name="simpan" class="btn btn-primary mr-2">Simpan</button>
                                    <button name="reset" type="reset" class="btn btn-danger">Reset</button>
                                </div>
                            </form>
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