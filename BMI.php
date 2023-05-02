<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container d-flex justify-content-center mt-5">
        <div class="card shadow">
            <div class="card-body">
                <form action="">
                <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control mt-3" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="tb">Tinggi Badan</label>
                        <input type="text"  class="form-control mt-3" name="tb">
                    </div>
                    <div class="form-group">
                        <label for="bb">Berat Badan</label>
                        <input type="text" class="form-control mt-3" name="bb">
                    </div>
                    <button class="btn btn-primary mt-4" name="hitung">Hitung</button>
                </form>
            </div>

    <?php
    if(isset($_GET['hitung'])){
        $nama = $_GET['nama'];
        $tb = $_GET['tb'];
        $bb = $_GET['bb'];
        $tbHasil = $_GET['tb']/100;
        $hasil = $bb / ($tbHasil * $tbHasil);

        if ($hasil <= 18.5 ){
            echo '
                <div class="card-footer"> 
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Nama            = <b> Haloo, ' .$nama.'</b><br>
                    Tinggi badan    = <b>'.$tb.' cm</b><br>
                    Berat badan     = <b> '.$bb.' kg </b><br>
                    Nilai BMI anda  = <b> '.number_format($hasil,1).' </b><br>
                    keterangan      = <b> Kurus </b>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            ';
        }else if($hasil <= 25){
            echo '
            <div class="card-footer"> 
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
             Nama            = <b> Haloo, ' .$nama.'</b><br>
                Tinggi badan    = <b>'.$tb.' cm</b><br>
                Berat badan     = <b> '.$bb.' kg </b><br>
                Nilai BMI anda  = <b> '.number_format($hasil,1).' </b><br>
                keterangan      = <b> Normal </b>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        ';
        }elseif($hasil <= 29.9){
            echo '
            <div class="card-footer"> 
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                Nama            = <b> Haloo, ' .$nama.'</b><br>
                Tinggi badan    = <b>'.$tb.' cm</b><br>
                Berat badan     = <b> '.$bb.' kg </b><br>
                Nilai BMI anda  = <b> '.number_format($hasil,1).' </b><br>
                keterangan      = <b> kelebihan berat badan </b>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        ';
        }elseif ($hasil > 30 ){
            echo '
            <div class="card-footer"> 
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                Nama            = <b> Haloo, ' .$nama.'</b><br>
                Tinggi badan    = <b>'.$tb.' cm</b><br>
                Berat badan     = <b> '.$bb.' kg </b><br>
                Nilai BMI anda  = <b> '.number_format($hasil,1).' </b><br>
                keterangan      = <b> obesitas </b>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        ';
        }      
    }
    ?>

    </div>
        </div>
</body>
</html>