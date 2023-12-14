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
                            <h6 class="m-0 font-weight-bold text-primary"><?php echo $detail->nama ?></h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form action="<?php echo base_url() ?>admin/editkamera/<?php echo $detail->id ?>" method="post" enctype="multipart/form-data">
                                    <table class="table table-borderless center" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th><label for="nama" class="form-label">Nama Penyewa</label></th>
                                                <th>
                                                    <input name="namap" id="namap" type="text" value="" class="form-control border-top-0 border-right-0 border-left-0">
                                                </th>
                                            </tr>
                                        </thead>
                                        <thead>
                                            <tr>
                                                <th><label for="nomor" class="form-label">Nomor Penyewa</label></th>
                                                <th>
                                                    <input name="nomor" id="nomor" type="number" value="" class="form-control border-top-0 border-right-0 border-left-0">
                                                </th>
                                            </tr>
                                        </thead>
                                        <thead>
                                            <tr>
                                                <th><label for="nama" class="form-label">Waktu</label></th>
                                                <th>
                                                    <input name="nama" id="id" type="text" value="<?php echo $detail->id ?>" class="form-control border-top-0 border-right-0 border-left-0" hidden>
                                                    <input name="waktu" id="nama" type="text" value="" class="form-control border-top-0 border-right-0 border-left-0">
                                                </th>
                                            </tr>
                                        </thead>
                                        <thead>
                                            <tr>
                                                <th><label for="model" class="form-label">Harga</label></th>
                                                <th>
                                                    <input name="harga" id="model" type="text" class="form-control border-top-0 border-right-0 border-left-0">
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