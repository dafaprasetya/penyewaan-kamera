<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $judul ?></title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.css">
</head>
<body>
    <?php $this->load->view('snippets/navbar') ?>
    <div class="container mt-5">
        <h1>Penyewaan kamera</h1>
        <div class="row">
            <?php 
                foreach ($kamera->result() as $cam) {
                    echo '
                    <div class="col-sm-4 mt-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="'.base_url().$cam->gambar.'" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">'.$cam->nama.'</h5>
                            <p class="card-text">'.$cam->keterangan.'</p>
                            <a href="'.base_url().'home/kamera/'.$cam->id.'" class="btn btn-primary">Sewa</a>
                            </div>
                        </div>
                    </div>
                    ';
                }
            ?>
            <!-- <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>

    <script src="<?php echo base_url() ?>assets/popper/popper.js"></script>
    <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.js"></script>
</body>
</html>