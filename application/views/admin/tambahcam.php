<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah kamera</title>
    <?php $this->load->view('admin/snippets/style') ?>
</head>
<body id="page-top">
    <div id="wrapper">

        <?php $this->load->view('admin/snippets/sidebar') ?>
        <div id="content-wrapper">
            <?php $this->load->view('admin/snippets/topbar') ?>
            <div class="container-fluid">
                <!-- TOTAL CAMERA -->
                <?php $this->load->view('admin/snippets/kamera') ?>
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Kamera</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form action="<?php echo base_url() ?>admin/p_tambahkamera" method="post" enctype="multipart/form-data">
                                    <table class="table table-borderless center" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th><label for="nama" class="form-label">Nama Kamera</label></th>
                                                <th>
                                                    <input placeholder="Masukan nama kamera" name="nama" id="nama" type="text" class="form-control border-top-0 border-right-0 border-left-0">
                                                </th>
                                            </tr>
                                        </thead>
                                        <thead>
                                            <tr>
                                                <th><label for="model" class="form-label">Model</label></th>
                                                <th>
                                                    <input placeholder="Masukan model kamera" name="model" id="model" type="text" class="form-control border-top-0 border-right-0 border-left-0">
                                                </th>
                                            </tr>
                                        </thead>
                                        <thead>
                                            <tr>
                                                <th><label for="waktu1" class="form-label">Waktu pertama</label></th>
                                                <th>
                                                    <input placeholder="masukan waktu contoh : 24 jam" name="waktu1" id="waktu1" type="text" class="form-control border-top-0 border-right-0 border-left-0">
                                                </th>
                                                <th>
                                                    <input placeholder="masukan harga contoh : 80.000" name="harga1" id="model" type="text" class="form-control border-top-0 border-right-0 border-left-0">
                                                </th>
                                            </tr>
                                        </thead>
                                        <thead>
                                            <tr>
                                                <th><label for="waktu1" class="form-label">Waktu kedua</label></th>
                                                <th>
                                                    <input placeholder="masukan waktu contoh : 12 jam" name="waktu2" id="waktu2" type="text" class="form-control border-top-0 border-right-0 border-left-0">
                                                </th>
                                                <th>
                                                    <input placeholder="masukan harga contoh : 40.000" name="harga2" id="model" type="text" class="form-control border-top-0 border-right-0 border-left-0">
                                                </th>
                                            </tr>
                                        </thead>
                                        <thead >
                                            <tr>
                                                <th><label for="keterangan" class="form-label">Keterangan</label></th>
                                                <th>
                                                    <textarea name="keterangan" placeholder="Masukan keterangan kamera" id="keterangan" cols="10" rows="2" class="form-control"></textarea>
                                                </th>
                                            </tr>
                                        </thead>
                                        <thead >
                                            <tr>
                                                <th><label for="gambar" class="form-label">Gambar</label></th>
                                                <th>
                                                    <input class="form-control" name="gambar" type="file" id="gambar">
                                                </th>
                                            </tr>
                                        </thead>
                                        
                                    </table>
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('admin/snippets/script') ?>


</body>
</html>