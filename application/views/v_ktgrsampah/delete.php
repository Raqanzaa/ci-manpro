<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Hapus Kategori Sampah</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?= site_url('c_ktgrsampah') ?>">Kategori Sampah</a></li>
                    <li class="breadcrumb-item active">Hapus Kategori Sampah</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <p>Apakah Anda yakin ingin menghapus kategori sampah ini?</p>
                        <form action="<?= site_url('c_ktgrsampah/delete/'.$kategori->id_ktgrsampah) ?>" method="post">
                            <button type="submit" class="btn btn-danger">Hapus</button>
                            <a href="<?= site_url('c_ktgrsampah') ?>" class="btn btn-secondary">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
