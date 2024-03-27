<?php
    // $cars = $_GET['cars'];
    $cars = $_POST['cars'];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Form 2</title>
   <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <div class="container">
        <?php
            echo "Kết quả Select: <br>\n ";
            echo "<span style='color:red;'> Bạn đã chọn Car: $cars </span>";
            
        ?>
    </div>
</body>

</html>