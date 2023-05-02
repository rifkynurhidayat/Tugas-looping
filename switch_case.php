<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Switch case</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container d-flex justify-content-center mt-5">
        <div class="card shadow">
            <div class="card-body">
                <form method="POST" action="nilai.php">
                    <div class="form-group">
                        <label for="">Masukan nilai</label>
                        <input type="number" name="nilai">
                    </div>
                   <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button type="button" class="btn btn-primary mt-3" name="hitung">Cek Nilai</button>
                        </div>
                    </div>
                   </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    if(isset($_POST['hitung'])){
        $nilai = $_POST['nilai'];

        switch(true){
            case ($nilai < 90 && $nilai <=100 );
                echo "Nilai anda yaitu A";
                break;
            case ($nilai >= 80 && $nilai <90);
            echo "Nilai anda yaitu B";
            break;
            case ($nilai >= 70 && $nilai <80 );
                echo "Nilai anda yaitu C";
                break;
            case ($nilai >= 0 && $nilai <70);
            echo "Nilai anda yaitu D";
            break;
            default: "nilai anda tidak valid";
        } 
    }

    ?>
    
</body>
</html>