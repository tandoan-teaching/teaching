<?php
$firstName = $_POST['fname'];
$lastName = $_POST['lname'];

// $firstName = $_GET['fname'];
// $lastName = $_GET['lname'];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Form 1</title>
   <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <div class="container">
        <?php
            echo "<span style='color:blue;font-weight:bold;'>Sau khi submit: file form-1.php sẽ xử lý và trả về kết quả: <br>\n </span>";
            echo "<span style='color:red;'>First Name: " . $firstName . "<br>\n </span>";
            echo "<span style='color:red;'>Last Name: " . $lastName . "<br>\n </span>";
        ?>
    </div>
</body>

</html>