<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
$weight = $height = '';
$weight = $height = 0;
if(isset($_POST["height"]) && isset($_POST["weight"])){
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    $weight = $_POST["weight"];
    $height = $_POST["height"];
    $bmi = $weight/($height * $height);
    echo "Chỉ số BMI là: " . $bmi;
    echo "<br>";
    if($bmi < 18.5){
        echo "Thiếu cân";
    } elseif ($bmi >=18.5 && $bmi <= 22.99){
        echo "Bình thường";
    } elseif ($bmi >=23 && $bmi <= 24.99){
        echo "Thừa cân";
    } elseif ($bmi >= 25 && $bmi <= 29.99){
        echo "Béo phì độ I";
    } elseif ($bmi >= 30 && $bmi <= 39.99){
        echo "Béo phì độ II";
    } elseif ($bmi >= 40){
        echo "Béo phì độ III";
    }
}


?>
<h1>Tính chỉ số BMI</h1>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Tính chỉ số BMI</h1>

            <form name="bmi" action="" method="post">
                <div class="form-group">
                    <label >Chiều cao ( cm )</label>
                    <input type="text" class="form-control" name="height" value="">
                </div>
                <div class="form-group">
                    <label >Cân nặng ( kg ) </label>
                    <input type="text" class="form-control" name="weight">
                </div>
                <button type="submit" name="calc" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>