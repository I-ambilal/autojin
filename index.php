
<?php
$conn = new mysqli("localhost", "root", "", "autojin");
$result = $conn->query("SELECT * FROM products");


$result2 = $conn->query("SELECT * FROM product2");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F1 Elite - Premium Formula 1 Experience</title>
    <style>

        
* {
    margin: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
  background-color: #ECCB92;
    color: #fff;
        padding: 10;

}

.container {

    max-width: 1200px;
    margin: 0 auto;
    padding: 10px;
}

/* Header */
.header {
    display: flex;
    justify-content: center;
    flex-direction: row;
    align-items: center;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
    background: #ECCB92;
    backdrop-filter: blur(10px);
    border-bottom: 1px solid rgba(220, 38, 38, 0.2);
    margin-bottom: 1%;
   
}

.nav1 {
    display: flex;
    align-items: center;
    padding: 1rem 2rem;
}


.nav-menu1 {
    background:rgb(19, 18, 18);
    padding:  1rem;
    
    border-radius: 0.5rem;
    color: white;
    display: flex;
    list-style: none;
    gap: 2rem;
    align-items: center;
}

.nav-menu1 a {
    color:rgb(197, 188, 188);
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s;
}

.nav-menu1 a:hover {
    color: #1B2E3C;
}


 .nav-menu1  {
    background:rgb(19, 18, 18);
    padding:  1rem;
    
    border-radius: 0.5rem;
    
    display: flex;
    list-style: none;
    gap: 2rem;
    align-items: center;
}


.admin-btn {
    background: #1B2E3C;
    padding: 0.5rem 1rem;
    border-radius: 0.5rem;
    transition: background 0.3s;
}

.admin-btn:hover {
    background: #fff1f1;
    color: #000000 !important;
}

/* Hero Section */
/* .hero {
  
    
    margin: 10px ;
    margin-top: 5%;

}
.hero img {
    width: 100%;
    height: 100%;
    object-fit: cover;

} */


/* Sections */


.parent {
    height: 100vh;
     display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-template-rows: repeat(5, 1fr);
    gap: 8px;
    margin: 10px;
    margin-top: 6%;
}
   

    
.div1 {
    border-radius: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    object-fit: cover;

    color: #ff0202;
    background: url(div1.jpeg);
    background-size: cover;
    font-size: 2rem;
    font-weight: bold;
    transition: filter 0.7s ease;  /* smoother transition */
    
    grid-column-start: 1;
    grid-row-start: 1;
    grid-column: span 2 / span 2;
    grid-row: span 3 / span 3;

    backdrop-filter: blur(5px);
    filter: grayscale(100%);  /* apply grayscale initially */
}

.div1:hover {
    filter: grayscale(0);  /* remove grayscale on hover */
    transition: filter 0.7s ease;  /* smoother transition */
}

.div1 a {
    border-radius: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    width: 100%;
    height: 100%;
    text-decoration: none;
    font-weight: bold;  /* corrected from 7rem */
}

.div2 {
        border-radius: 10px;

        display: flex;
    justify-content: center;
    align-items: center;
    object-fit: cover;

  background: url(div1.jpeg) ;
    background-size: cover;
    color: #fff;
    font-size: 2rem;
    font-weight: bold;
    transition: filter 0.5s ease ;;

    grid-row: span 5 / span 5;
    grid-column-start: 3;
}


.div2 a {
        border-radius: 10px;

    display: flex;
    justify-content: center;
    align-items: center;
    color: #ff0202;
width: 100%;    
height: 100%;
    text-decoration: none;
    font-weight: 7rem;
    
   
}
.div2 a:hover {
    
    background: transparent;
    backdrop-filter: blur(5px);
    text-decoration: none;
    filter: grayscale(8);
    
    transition: filter 0.7s ease ;
}
.div3 {
        border-radius: 10px;

        display: flex;
    justify-content: center;
    align-items: center;
    object-fit: cover;

  background: url(div1.jpeg) ;
    background-size: cover;
    color: #fff;
    font-size: 2rem;
    font-weight: bold;
    transition: filter 0.5s ease ;

    grid-column: span 2 / span 2;
    grid-row: span 2 / span 2;
    grid-row-start: 4;
}
   
.div3 a {
        border-radius: 10px;

    display: flex;
    justify-content: center;
    align-items: center;
    color: #ff0202;
width: 100%;    
height: 100%;
    text-decoration: none;
    font-weight: 7rem;
    
   
}
.div3 a:hover {
    
    background: transparent;
    backdrop-filter: blur(5px);
    text-decoration: none;
    filter: grayscale(8);
    
    transition: filter 0.7s ease ;
}

/* Footer */
.footer {
    background: #000;
    border-top: 1px solid #333;
    padding: 3rem 0;
    text-align: center;
}

.footer-content {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 1rem;
}

.footer-content i {
    color: #dc2626;
}

.footer p {
    color: #999;
}

/* Responsive */
@media (max-width: 768px) {
    .hero-title {
        font-size: 4rem;
    }
    
    .hero-subtitle {
        font-size: 1.5rem;
    }
    
    .nav-menu {
        gap: 1rem;
    }
    
    .races-container {
        grid-template-columns: 1fr;
    }
    
    .teams-grid {
        grid-template-columns: 1fr;
    }
    
    .hero-stats {
        gap: 1.5rem;
    }
}

@media (max-width: 480px) {
    .hero-title {
        font-size: 3rem;
    }
    
    .section-title {
        font-size: 2rem;
    }
    
    .nav {
        padding: 1rem;
    }
    
    .container {
        padding: 0 1rem;
    }
}

        .product-section {
    padding: 60px 20px;
    background-color: #fdf2e9;
    color: #1B2E3C;
    text-align: center;
}

.product-title {
    font-size: 2rem;
    margin-bottom: 40px;
    color: #dc2626;
}

.product-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
}

.product-card {
    background: #ffffff;
    border-radius: 12px;
    box-shadow: 0 6px 15px rgba(0,0,0,0.1);
    overflow: hidden;
    width: 220px;
    transition: transform 0.3s, box-shadow 0.3s;
}

.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 24px rgba(0,0,0,0.15);
}

.product-card img {
    width: 100%;
    height: 160px;
    object-fit: cover;
}

.product-info {
    padding: 15px;
    text-align: left;
}

.product-info h3 {
    font-size: 1.2rem;
    margin-bottom: 10px;
    color: #dc2626;
}

.product-info p {
    font-size: 0.95rem;
    margin: 5px 0;
}

    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <span><img src="logo.png" alt=""></span>
        <nav class="nav1">
            <ul class="nav-menu1">
                <li><a href="#home">Home</a></li>
                <li><a href="#product1">GADGETS</a></li>
                <li><a href="#product2">CAR CARE</a></li>
                <li><a href="profile.php">PROFILE</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="dashboard.php" class="admin-btn"><i class="fas fa-cog"></i> Admin</a></li>
                <li><a href="view_cart.php">🛒 View Cart</a> <li> 
            </ul>
             
        </nav>
   
    </header>
     <!-- Hero Section -->
   <!-- <section id="home" class="hero">
    <img src="m.jpg" alt="">
  
</section> -->

   

<div class="parent" id="home">
    <div class="div1"><a href="#product1">CAR GADGETS</a></div>
    <div class="div2"><a href="#drivers">CAR CARE</a></div>
    <div class="div3"><a href="#product2"></a></div>
</div>
    
   

<section class="product-section" id="product1">
    <h2 class="product-title">CAR GADGETS</h2>


    <a href="product_card.php">
        
    <div class="product-grid">
        <?php while($row = $result->fetch_assoc()): ?>
            <div class="product-card">
                <img src="<?= $row['image'] ?>" alt="Product Image">
                <div class="product-info">
                    <h3><?= $row['productname'] ?></h3>
                    <p><strong>Brand:</strong> <?= $row['brand'] ?></p>
                    <p><strong>Price:</strong> $<?= $row['price'] ?></p>
                       <form action="add_to_cart.php" method="POST">
    <input type="hidden" name="product_id" value="<?= $row['id'] ?>">
    <button type="submit">Add to Cart</button>
</form>


                </div>
            </div>
        <?php endwhile; ?>
    </div>
    </a>
</section>

<section class="product-section" id="product2">
    <h2 class="product-title">CAR CARE</h2>
    <div class="product-grid">
        <?php while($row = $result2->fetch_assoc()): ?>
            <div class="product-card">
                <img src="<?= $row['image'] ?>" alt="Product Image">
                <div class="product-info">
                    <h3><?= $row['productname'] ?></h3>
                    <p><strong>Brand:</strong> <?= $row['brand'] ?></p>
                    <p><strong>Price:</strong> $<?= $row['price'] ?></p>
                       <form action="add_to_cart.php" method="POST">
    <input type="hidden" name="product_id" value="<?= $row['id'] ?>">
    <button type="submit">Add to Cart</button>
</form>


                </div>
            </div>
        <?php endwhile; ?>
    </div>
</section>


    <!-- Footer -->

    
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <i class="fas fa-flag"></i>
                <span>F1 Elite</span>
            </div>
            <p>&copy; 2024 F1 Elite. Premium Formula 1 Experience.</p>
        </div>
    </footer>
</body>
</html>
