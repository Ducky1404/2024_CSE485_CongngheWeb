<?php global $products;
include "products.php"; ?>
<?php
$itemsPerPage = 4;
$currentPage = 0;
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$totalPages = ceil(count($products) / $itemsPerPage);
$currentPageItems = array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link type="text/css" href="style.css">
    <title>LadyBoy</title>
</head>
<body>
<h1 class="container text-center">Shop for Man</h1>
<div>
    <div class="container text-center">
        <div class="row">
        <?php foreach ($currentPageItems as $product) {
            echo '<div class="col-3 card mx-auto p-2">';
            echo '<div class="card-body">';
            echo '<img src="' . $product['image'] . '" alt="" class="card-img-top">';
            echo  '<h4 class="card-title">'.$product['name'].'</h4>' . "<br>";
            echo  '<p class="card-text">'.$product['price'].'</p>' . "<br>";
            echo  '<p class="card-text">'.$product['description'].'</p>' . "<br>";
            echo '</div>';
            echo '</div>';
        }
        ?>
        </div>
    </div>
</div>
<div>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <?php if ($currentPage > 1): ?>
                <li class="page-item">
                    <a class="page-link" href="?page=<?php echo $currentPage - 1; ?>">Previous</a>
                </li>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <li class="page-item <?php echo ($i == $currentPage) ? 'active' : ''; ?>">
                    <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                </li>
            <?php endfor; ?>

            <?php if ($currentPage < $totalPages): ?>
                <li class="page-item">
                    <a class="page-link" href="?page=<?php echo $currentPage + 1; ?>">Next</a>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>