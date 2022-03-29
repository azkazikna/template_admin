<div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <div class="d-flex justify-content-between">
            <div class="logo">
                <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo" srcset="" style="width:150px; height: 50px;"></a>
            </div>
            <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu Utama</li>
            
            <li class="sidebar-item <?php if($page=='home' || NULL ){echo"active";} ?>">
                <a href="?page=home" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Beranda</span>
                </a>
            </li>
            
            
            <li class="sidebar-item <?php if($page=='catatan_perjalanan'){echo"active";} ?>">
                <a href="?page=catatan_perjalanan" class='sidebar-link'>
                    <i class="bi bi-card-list"></i>
                    <span>Catatan Perjalanan</span>
                </a>
            </li>

            <li class="sidebar-item <?php if($page=='isi_data'){echo"active";} ?>">
                <a href="?page=isi_data" class='sidebar-link'>
                    <i class="bi bi-calendar2-plus-fill"></i>
                    <span>Tambah Catatan</span>
                </a>
            </li>
            
            <li class="sidebar-title">Lainnya</li>
            
            
            <li class="sidebar-item">
                <a href="?page=logout" class='sidebar-link text-danger'>
                    <i class="bi bi-box-arrow-right text-danger"></i>
                    <span>Keluar</span>
                </a>
            </li>
        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
</div>