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
if (isset($_POST["height"]) && isset($_POST["weight"])) {
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    $weight = $_POST["weight"];
    $height = $_POST["height"];
    $bmi = $weight/($height*$height);
    echo "Chỉ sô BMI là : " . $bmi;
}
if($bmi<18.5)
    echo "Thiếu cân";
elseif ($bmi>=18.50&&$bmi<=19.55)
    echo "bình thường";
elseif ($bmi>=23.00 && $bmi<=24.99)
    echo "Thừa cân";
elseif ($bmi>=25)
    echo "béo";


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