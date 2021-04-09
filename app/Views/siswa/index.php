<?= $this->extend('layout/v_main.php'); ?>
<?= $this->section('content'); ?>
<div class="page-container">
    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">Data Siswa</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="/" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Home</a>
                    <span class="breadcrumb-item active">Siswa</span>
                </nav>
            </div>
        </div>
        <div class="container">
            <?php if (session()->getFlashdata('success')) { ?>
                <div class="alert alert-success">
                    <div class="d-flex align-items-center justify-content-start">
                        <span class="alert-icon">
                            <i class="anticon anticon-check-o"></i>
                        </span>
                        <span>Success</span>
                        <p><?= session()->getFlashdata('success') ?> </p>
                    </div>
                </div>
            <?php } ?>
            <div class="card">
                <div class="card-header pt-4  pb-4">
                    <div class="row">
                        <div class="col-6">
                            <a class="btn btn-primary" href="/siswa/input"> Input Data</a>
                        </div>
                        <div class="col-6 pull-right">
                            <form action="" method="POST" class="d-inline">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Keyword" name="keyword">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit" name="submit">Cari</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <table class="table">
                                <thead>
                                    <tr style=" font-size:15px;">
                                        <th><b>No</th>
                                        <th><b>Nama</th>
                                        <th><b>NIM</th>
                                        <th><b>Kelas</th>
                                        <th><b>Email</th>
                                        <th><b>No HP</th>
                                        <th><b>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $z = 1; ?>
                                    <?php foreach ($siswa as $i) { ?>
                                        <tr>
                                            <td><?= $z++ ?></td>
                                            <td><?= $i['nama'] ?></td>
                                            <td><?= $i['nim'] ?></td>
                                            <td><?= $i['kelas'] ?></td>
                                            <td><?= $i['email'] ?></td>
                                            <td><?= $i['no_hp'] ?></td>
                                            <td>
                                                <a class="btn btn-info btn-tone" href="/siswa/detail/<?= $i['nim']; ?>"><i class="anticon anticon-search"></i></a>
                                                <a class="btn btn-success btn-tone" href="/siswa/edit/<?= $i['nim']; ?>"><i class="anticon anticon-edit"></i></a>
                                                <button class="btn btn-danger btn-tone" data-toggle="modal" data-target="#konfirmasidelete<?= $i['nim'] ?>"><i class=" anticon anticon-delete"></i> </button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    <?php if ($siswa == null) {
                                        echo '<td colspan="6"><center>data tidak ditemukan</center></td>';
                                    } ?>
                                </tbody>
                            </table>
                            <?= $pager->links('siswa', 'custom_pager') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->include('layout/v_footer.php'); ?>
</div>

<!-- MOdal info -->
<?php foreach ($siswa as $i) { ?>
    <div class="modal fade" id="konfirmasidelete<?= $i['nim']; ?>">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin ? </h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <i class="anticon anticon-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda Yakin Untuk Menghapus Data ?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <form action="/siswa/delete/<?= $i['nim']; ?>" class='d-inline'>
                        <button type="submit" class="btn btn-danger">Hapus Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?= $this->endsection(); ?>