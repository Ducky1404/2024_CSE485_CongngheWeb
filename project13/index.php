

<!-- courses.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách khóa học</title>
    <style>
        .course {
            background-color: red;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .course h2 {
            color: blue;
            font-size: 20px;
            margin-bottom: 5px;
        }
        .course p {
            color: green;
            margin-bottom: 10px;
        }
        .course p:last-child {
            margin-bottom: 0;
        }
        .course {
            background-color: #f9f9f9;
            padding: 10px;
            margin-bottom: 20px;
        }
        .course h2 {
            color: #333;
        }
        .course p {
            color: #666;
        }
    </style>
</head>
<body>
<?php
// Dữ liệu khóa học lưu động trong mảng
$courses = [
    [
        'title' => 'Học viên quốc tế',
        'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
        'fee' => '15.000.000 VND',
        'start_date' => '2/2/24',
        'duration' => '2 - 2.5 năm',

    ],
    [
        'title' => 'LẬP TRÌNH WED FULLSTASK',
        'description' => 'Khóa học phù hợp với người bắt đầu học lập trình hoặc người chuyển nghề. Trang bị từ Frontend đến Backend, xây dựng wedside hoàn chỉnh sau khóa học ',
        'fee' => 'ưu đãi 15% học phí',
        'start_date' => '2/2/24',
        'duration' => 'thời lượng 6 tháng.'
    ],
    [
        'title' => 'Lập trinh Java FULLSTASK',
        'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
        'fee' => 'ưu đãi 15%',
        'start_date' => '2/2/24',
        'duration' => '236 giờ'
    ],

    [
        'title' => 'Khóa Học Lập Trình .NET ',
        'description' => 'Phát triển ứng dựng wed sư r dựng nền tản ASP.NET Core MVP. Để học tốt khóa học yêu cầu học viên có kiến thức C#và backend .',
        'start_date' => '2/24',
        'duration' => '40 giờ',
        'fee' => '6.000.000 VNĐ.',
    ],
    [
        'title' => 'Lập Trinh SQL Sever',
        'description' => 'Trang bị những kiến thức vững chắc về nên t .',
        'start_date' => '5/2/24',
        'fee' => 'Ưu đãi giảm 15% học phí.',
        'duration' => '36 giờ',
    ],
    [
    'title' => 'Lập Trinh SQL Sever',
    'description' => 'Trang bị những kiến thức vững chắc về nên tảng SQL SEVER như các kĩ thuật:lọc dữ liệu, phân tích thiết kế, quản trị cơ sở dữ liệu .',
    'start_date' => '5/2/24',
    'fee' => '4.500.000.',
    'duration' => '30 giờ'
    ] ,
    ];
// Hiển thị danh sách khóa học
foreach ($courses as $course) {
    echo '<div class="course">';
    echo '<h2>' . $course['title'] . '</h2>';
    echo '<p>' . $course['description'] . '</p>';
    echo '<p>Học phí: ' . $course['fee'] . '</p>';
    echo '<p>Khải giảng: ' . $course['start_date'] . '</p>';
    echo '<p>Thời lượng: ' . $course['duration'] . '</p>';
    echo '</div>';
}
?>
</body>
</html>