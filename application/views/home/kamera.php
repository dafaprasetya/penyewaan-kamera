<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $detailcam->nama ?></title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.css">
</head>
<body>
    <?php $this->load->view('snippets/navbar') ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo base_url() ?><?php echo $detailcam->gambar ?>" alt="" width="500">
            </div>
            <div class="col-md-6">
                <h1><?php echo $detailcam->nama ?></h1>
                <h5><?php echo $detailcam->keterangan ?></h5>
                <h5 id="harga">Harga : - </h5>
                <div class="container ">
                    <div class="row ms-3 mt-3">
                        <div class="col-sm-4 justify-content-center">
                            <button class="btn btn-outline-primary" onclick="duabelas()" type="button"><?php echo $detailcam->waktu1 ?></button>
                        </div>
                        <div class="col-sm-4 justify-content-center">
                            <button class="btn btn-outline-primary" onclick="duaempat()" type="button"><?php echo $detailcam->waktu2 ?></button>
                        </div>
                        <div class="col-sm-8 justify-content-cente mt-5">
                            <a href="#" class="btn btn-lg btn-primary" id="ling" style="width: 100%;">sewa</a>
                        </div>
                        <script>
                            function duabelas() {
                                var pesan = "Halo min saya ingin sewa kamera <?php echo $detailcam->nama ?> selama <?php echo $detailcam->waktu1 ?> dengan harga <?php echo $detailcam->harga1 ?>"
                                
                                document.getElementById('harga').innerHTML = 'Harga : <?php echo $detailcam->harga1 ?>'
                                document.getElementById('ling').href = 'https://wa.me/6281574999858?text='+ pesan.replace(" ","%20")
                            }
                            function duaempat() {
                                var pesan = "Halo min saya ingin sewa kamera <?php echo $detailcam->nama ?> selama <?php echo $detailcam->waktu2 ?> dengan harga <?php echo $detailcam->harga2 ?>"
                                document.getElementById('ling').href = 'https://wa.me/6281574999858?text='+ pesan.replace(" ","%20")
                                document.getElementById('harga').innerHTML = 'Harga : <?php echo $detailcam->harga2 ?>'
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url() ?>assets/popper/popper.js"></script>
    <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.js"></script>
</body>
</html>