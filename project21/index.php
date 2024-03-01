<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .product-container {
            display: flex;
            flex-wrap: wrap;
        }

        .product-item {
            width: 200px;
            margin: 10px;
        }

        .product-image {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
<?php
$products = array(
    array(
        "name" => "Waterproof Emil Backpack",
        "image" => "assets/images/waterproof-emil-backpack.jpg",
        "price" => "$99.00"
    ),
    array(
        "name" => "Waterproof Emil Backpack",
        "image" => "assets/images/waterproof-emil-backpack.jpg",
        "price" => "$99.00"
    ),
    array(
        "name" => "Waterproof Emil Backback",
        "image" => "assets/images/waterproof-emmills.jpg",
        "price" => "$300.00",
        "discount" => "29% Off"
    ),
    array(
        "name" => "Waterproof Emil Backback",
        "image" => "assets/images/waterproof-emmills.jpg",
        "price" => "$300.00",
        "discount" => "29% Off"
    ),
    array(
        "name" => "Stylo Stool",
        "image" => "assets/images/stylo-stool.jpg",
        "price" => "$300.00",
        "discount" => "29% Off"
    ),
    array(
        "name" => "Stylish Wooden Chair",
        "image" => "assets/images/stylish-wooden-chair.jpg",
        "price" => "$249.00",
        "original_price" => "$349.00"
    ),
    array(
        "name" => "Waterproof Emil Backpack",
        "image" => "assets/images/waterproof-emil-backpack.jpg",
        "price" => "$99.00"
    ),
    array(
        "name" => "Waterproof Emil Backpack",
        "image" => "assets/images/waterproof-emil-backpack.jpg",
        "price" => "$99.00"
    ),
    array(
        "name" => "Waterproof Emil Backpack",
        "image" => "assets/images/waterproof-emil-backpack.jpg",
        "price" => "$99.00"
    ),
    array(
        "name" => "Waterproof Emil Backpack",
        "image" => "assets/images/waterproof-emil-backpack.jpg",
        "price" => "$99.00"
    ),
);
?>
<div class="product-container">
    <?php foreach ($products as $product): ?>
        <div class="product-item">
            <img class="product-image" src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
            <h3><?php echo $product['name']; ?></h3>
            <p><?php echo $product['price']; ?></p>
            <?php if (isset($product['discount'])): ?>
                <p><?php echo $product['discount']; ?></p>
            <?php endif; ?>
            <?php if (isset($product['original_price'])): ?>
                <p><?php echo $product['original_price']; ?></p>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>

</div>
<nav aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item" id="prevPage">
            <a class="page-link" href="#" onclick="changePage('prev')">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#" onclick="changePage(1)">1</a></li>
        <li class="page-item"><a class="page-link" href="#" onclick="changePage(2)">2</a></li>
        <li class="page-item"><a class="page-link" href="#" onclick="changePage(3)">3</a></li>
        <li class="page-item" id="nextPage">
            <a class="page-link" href="#" onclick="changePage('next')">Next</a>
        </li>
    </ul>
</nav>

<script>
    var currentPage = 1;
    var totalPages = 3;

    // Hàm để thay đổi trang
    function changePage(page) {
        if (page === 'prev' && currentPage > 1) {
            currentPage--;
        } else if (page === 'next' && currentPage < totalPages) {
            currentPage++;
        } else if (Number.isInteger(page) && page >= 1 && page <= totalPages) {
            currentPage = page;
        }

        // Cập nhật trạng thái của nút Previous và Next
        var prevPage = document.getElementById('prevPage');
        var nextPage = document.getElementById('nextPage');
        prevPage.classList.remove('disabled');
        nextPage.classList.remove('disabled');

        if (currentPage === 1) {
            prevPage.classList.add('disabled');
        }

        if (currentPage === totalPages) {
            nextPage.classList.add('disabled');
        }

        // Thực hiện các thay đổi cần thiết sau khi chuyển trang
        // Gọi hàm hoặc thực hiện các tác vụ bổ sung tại đây
        console.log('Chuyển đến trang ' + currentPage);
    }
</script>
</body>
</html>