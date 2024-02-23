<!-- courses.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/fontawesome-free-6.5.1-web/css/all.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Danh sách khóa học</title>
</head>
<body>
<h1>KHÓA HỌC SẮP KHAI GIẢNG</h1>
    <?php
    // Dữ liệu khóa học lưu động trong mảng
    $courses = [
        [   'image' => 'img/banner.jpg',
            'title' => 'LẬP TRÌNH VIÊN QUỐC TẾ',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
    Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên 
    quốc tế.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ],
        [   'image' => 'img/banner.jpg',
            'title' => 'LẬP TRÌNH WEB FULLSTACK',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
    Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên 
    quốc tế.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ],
        [   'image' => 'img/banner.jpg',
            'title' => 'LẬP TRÌNH JAVA FULLSTACK',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
    Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên 
    quốc tế.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ],
        [   'image' => 'img/banner.jpg',
            'title' => 'LẬP TRÌNH PHP & LAVAREL',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
    Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên 
    quốc tế.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ],
        [   'image' => 'img/banner.jpg',
            'title' => 'KHÓA HỌC LẬP TRÌNH .NET',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
    Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên 
    quốc tế.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ],
        [   'image' => 'img/banner.jpg',
            'title' => 'LẬP TRÌNH SQL SERVER',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
    Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên 
    quốc tế.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ],
        // Thêm các khóa học khác vào đây
    ];
    // Hiển thị danh sách khóa học
    echo '<div class="course-container">';
    foreach ($courses as $course) {
        echo '<div class="course">';
        echo '<img src="' . $course['image'] . '" alt="' . $course['title'] . '" class="course-image">';
        echo '<h2>' . $course['title'] . '</h2>';
        echo '<p>' . $course['description'] . '</p>';
        echo '<p><i class="fa-solid fa-sack-dollar"></i>Học phí: ' . $course['fee'] . '</p>';
        echo '<p><i class="fa-solid fa-clock"></i>Khải giảng: ' . $course['start_date'] . '</p>';
        echo '<p><i class="fa-solid fa-bookmark"></i>Thời lượng: ' . $course['duration'] . '</p>';
        echo '</div>';
    }
    echo '</div>';
    ?>
</body>
</html>
