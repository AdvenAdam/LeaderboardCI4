<?= $this->extend('layout/v_main.php'); ?>
<?= $this->section('content'); ?>
<div class="page-container">
    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h1>Edit Form </h1>
                    <div class="row">
                        <div class="col-12">
                            <form method="POST" action="/siswa/update/<?= $siswa['nim']; ?>" enctype="multipart/form-data">
                                <?= csrf_field(); ?>
                                <div class="col-10">
                                    <div class="form-group">
                                        <label>NIM</label>
                                        <input type="text" name="nim" value="<?= (old('nim')) ? (old('nim')) : $siswa['nim'] ?>" class="form-control <?= $validation->hasError('nim') ? 'is-invalid' : '' ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nim'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" value=<?= (old('nama')) ? (old('nama')) : $siswa['nama'] ?>" class="form-control <?= $validation->hasError('nama') ? 'is-invalid' : '' ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nama'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <div class="form-group">
                                        <label>Kelas </label>
                                        <input type="text" name="kelas" value="<?= (old('kelas')) ? (old('kelas')) : $siswa['kelas'] ?>" class="form-control <?= $validation->hasError('kelas') ? 'is-invalid' : '' ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('kelas'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <div class="form-group">
                                        <label>Email </label>
                                        <input type="text" name="email" value="<?= (old('email')) ? (old('email')) : $siswa['email'] ?>" class="form-control <?= $validation->hasError('email') ? 'is-invalid' : '' ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('email'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <div class="form-group">
                                        <label>No HP </label>
                                        <input type="text" name="no_hp" value="<?= (old('no_hp')) ? (old('no_hp')) : $siswa['no_hp'] ?>" class="form-control <?= $validation->hasError('no_hp') ? 'is-invalid' : '' ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('no_hp'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <div class="form-group">
                                        <label>Alamat </label>
                                        <input type="text" name="alamat" value="<?= (old('alamat')) ? (old('alamat')) : $siswa['alamat'] ?>" class="form-control <?= $validation->hasError('alamat') ? 'is-invalid' : '' ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('alamat'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <div class="form-group">
                                        <label>Nilai </label>
                                        <input type="text" name="nilai" value="<?= (old('nilai')) ? (old('nilai')) : $siswa['nilai'] ?>" class=" form-control <?= $validation->hasError('nilai') ? 'is-invalid' : '' ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nilai'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <div class="form-grup">
                                        <label for="foto">Foto</label>
                                        <div class="row">
                                            <div class="col-2">
                                                <img class="img-thumbnail img-preview" src="/foto/<?= $siswa['foto']; ?>">
                                            </div>
                                            <div class="col-10">
                                                <div class="custom-file">
                                                    <input type="file" id="foto" name="foto" onchange="previewImg()" class="custom-file-input form-control <?= $validation->hasError('foto') ? 'is-invalid' : '' ?>">
                                                    <label class="custom-file-label" for="foto"><?= $siswa['foto']; ?></label>
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('foto'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 mt-3">
                                        <button type='submit' class="btn btn-primary">Save changes</button>
                                    </div>
                                    <div class="col-6 mt-3">
                                        <a href='/siswa' style="float: right;" class="btn btn-success">Kembali</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endsection(); ?>