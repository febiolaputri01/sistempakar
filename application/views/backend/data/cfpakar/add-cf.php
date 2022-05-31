<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 text-center"><?= $judulHalaman ?></h1>
    <p class="mb-4 text-center"><?= $detailHalaman ?></p>

    <div class="row justify-content-center">
        <?php echo $this->session->flashdata('message'); ?>
        <div class="col-md-8">
            <div class="card shadow mb-4">
                <form action="<?= base_url('add-cfpakar') ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>" style="display: none;">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"><?= $cardHeader ?></h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name="kd1" id="kd1" readonly value="E">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user" name="kd2" id="kd2" readonly value="<?php if (strlen($count) == 1) {
                                                                                                                                    echo '00' . ++$count;
                                                                                                                                } elseif (strlen($count) == 2) {
                                                                                                                                    echo '0' . ++$count;
                                                                                                                                } elseif (strlen($count) >= 3) {
                                                                                                                                    echo ++$count;
                                                                                                                                } ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <select class="form-control" name="penyakit" id="penyakit" required>
                                    <option value="" selected disabled>Pilih Penyakit</option>
                                    <?php foreach ($penyakits as $penyakit) : ?>
                                        <option value="<?= $penyakit['id_penyakit'] ?>"><?= $penyakit['nama_penyakit'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <select class="form-control" name="gejala" id="gejala" required>
                                    <option value="" selected disabled>Pilih Gejala</option>
                                    <?php foreach ($gejalas as $gejala) : ?>
                                        <option value="<?= $gejala['id_gejala'] ?>"><?= $gejala['nama_gejala'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <input type="number" class="form-control" name="cfnilai" id="cfnilai" step="0.1" min=0.00 max=1.0 placeholder="Nilai Evidence"><?= form_error('cfnilai', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-right">
                            <button class="btn btn-primary" type="submit">Simpan Data</button>
                            <a href="javascript:window.history.go(-1);" class="btn btn-secondary btn-user">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->