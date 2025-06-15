<?php
// Connect to database
$conn = new mysqli("localhost", "root", "", "autojin");
$result = $conn->query("SELECT * FROM products");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Gallery</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 1300px;
            margin: 40px auto;
            padding: 20px;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .product-card {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.2s;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-card img {
            width: 100%;
            height: 250px;
            object-fit: contain;
            background-color: #f9f9f9;
        }

        .product-info {
            padding: 15px 20px;
        }

        .product-info h3 {
            font-size: 18px;
            margin: 10px 0 5px;
            color: #1B2E3C;
        }

        .product-info p {
            margin: 5px 0;
            color: #555;
            font-size: 14px;
        }

        .product-info .price {
            font-size: 18px;
            color: #dc2626;
            font-weight: bold;
            margin-top: 10px;
        }

        .btn-view {
            display: inline-block;
            margin-top: 15px;
            padding: 8px 14px;
            background-color: #1B2E3C;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-size: 14px;
        }

        .btn-view:hover {
            background-color: #dc2626;
        }

        h1.title {
            text-align: center;
            color: #1B2E3C;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="title">Product Gallery</h1>

    <div class="product-grid">
        <?php while($row = $result->fetch_assoc()): ?>
            <div class="product-card">
                <img src="<?= htmlspecialchars($row['image']) ?>" alt="Product Image">
                <div class="product-info">
                    <h3><?= htmlspecialchars($row['productname']) ?></h3>
                    <p><strong>Brand:</strong> <?= htmlspecialchars($row['brand']) ?></p>
                    <div class="price">$<?= number_format($row['price'], 2) ?></div>
                    <a href="product_details.php?id=<?= $row['id'] ?>" class="btn-view">View Details</a>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>

</body>
</html>
