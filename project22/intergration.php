<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload Example</title>
    <style>
        /* CSS cho ví dụ trước */
        a {
            color: black;
            text-decoration: none;
        }

        a:hover {
            color: red;
        }

        /* CSS cho phần tải lên ảnh */
        .upload-form {
            margin-top: 20px;
            padding: 20px;
            background-color: #f2f2f2;
            border-radius: 5px;
        }

        .upload-form label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }

        .upload-form input[type="file"] {
            margin-bottom: 10px;
        }

        .upload-form button[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 16px;
        }

        .uploaded-image {
            margin-top: 20px;
            max-width: 300px;
        }
    </style>
</head>
<body>
<h1>Image Upload Example</h1>

<p>Đây là một đường dẫn đến trang web OpenAI:</p>
<a href="https://openai.com">OpenAI</a>

<p>Bạn cũng có thể sử dụng thuộc tính target để mở liên kết trong một tab hoặc cửa sổ mới:</p>
<a href="https://openai.com" target="_blank">OpenAI (Mở trong tab mới)</a>

<!-- Form tải lên ảnh -->
<div class="upload-form">
    <h2>Tải lên ảnh</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="image">Chọn tệp ảnh:</label>
        <input type="file" name="image" id="image">
        <br>
        <button type="submit">Tải lên</button>
    </form>
</div>

<!-- Hiển thị ảnh đã tải lên -->
<?php
if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $uploadDir = 'uploads/';
    $uploadFile = $uploadDir . basename($_FILES['image']['name']);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
        echo '<div class="uploaded-image">';
        echo '<h2>Ảnh đã tải lên:</h2>';
        echo '<img src="' . $uploadFile . '" alt="Uploaded Image">';
        echo '</div>';
    } else {
        echo 'Có lỗi xảy ra trong quá trình tải lên ảnh.';
    }
}
?>
</body>
</html>