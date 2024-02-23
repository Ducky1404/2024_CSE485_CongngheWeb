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
    "LIÊN HỆ",
];
echo '<ul>';
foreach ($navItems as $item) {
    if ($item === "GIỚI THIỆU") {
        echo "<li><a id='icon_home' href=''><i class='fa fa-home'></i></a></li>";
        echo "<li><a href=''>$item</a></li>";
    } else {
        echo "<li><a href=''>$item</a></li>";
    }
}
echo '</ul>';
?>