<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>

<header id = "taskbar">

    <?php
    $navItems = [
        "GIỚI THIỆU",
        "TIN TỨC & THÔNG BÁO",
        "TUYỂN SINH",
        "ĐÀO TẠO",
        "NGHIÊN CỨU",
        "ĐỐI NGOẠI",
        "VĂN BẢN",
        "SINH VIÊN",
        "LIÊN HỆ"
    ];
    echo '<nav><ul>';
    foreach ($navItems as $item) {    
        if ($item === "GIỚI THIỆU") {
            echo '<li id = "unline-boder"><i class="fa fa-home"></i> </li>';
            echo "<li>$item</li>";
        } else {
            echo "<li><a href =''>$item</a></li>";
        }
    }
    echo '</ul></nav>';
    ?>
</header>
</body>
</html>