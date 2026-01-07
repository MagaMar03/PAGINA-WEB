<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegance - Tienda de Ropa Premium</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: #333;
            line-height: 1.6;
        }

        /* Header & Navigation */
        header {
            background: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem 5%;
            max-width: 1400px;
            margin: 0 auto;
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            font-weight: 700;
            color: #2c2c2c;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2.5rem;
        }

        .nav-links a {
            text-decoration: none;
            color: #555;
            font-weight: 400;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: #d4a574;
        }

        .nav-icons {
            display: flex;
            gap: 1.5rem;
            font-size: 1.2rem;
        }

        .nav-icons a {
            color: #555;
            transition: color 0.3s;
        }

        .nav-icons a:hover {
            color: #d4a574;
        }

        /* Hero Section */
        .hero {
            margin-top: 80px;
            height: 90vh;
            background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('https://images.unsplash.com/photo-1490481651871-ab68de25d43d?w=1600') center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .hero-content h1 {
            font-family: 'Playfair Display', serif;
            font-size: 4rem;
            margin-bottom: 1rem;
            animation: fadeInUp 1s ease;
        }

        .hero-content p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            animation: fadeInUp 1.2s ease;
        }

        .btn {
            display: inline-block;
            padding: 1rem 2.5rem;
            background: #d4a574;
            color: white;
            text-decoration: none;
            border-radius: 50px;
            transition: transform 0.3s, background 0.3s;
            font-weight: 600;
            animation: fadeInUp 1.4s ease;
        }

        .btn:hover {
            transform: translateY(-3px);
            background: #c59563;
        }

        /* Categorías */
        .categories {
            padding: 5rem 5%;
            max-width: 1400px;
            margin: 0 auto;
        }

        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 3rem;
            color: #2c2c2c;
        }

        .category-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .category-card {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
            cursor: pointer;
        }

        .category-card:hover {
            transform: translateY(-10px);
        }

        .category-card img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .category-card:hover img {
            transform: scale(1.1);
        }

        .category-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
            padding: 2rem;
            color: white;
        }

        .category-overlay h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            margin-bottom: 0.5rem;
        }

        /* Productos Destacados */
        .featured-products {
            padding: 5rem 5%;
            background: #f8f8f8;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            max-width: 1400px;
            margin: 0 auto;
        }

        .product-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .product-card:hover {
            transform: translateY(-10px);
        }

        .product-card img {
            width: 100%;
            height: 350px;
            object-fit: cover;
        }

        .product-info {
            padding: 1.5rem;
        }

        .product-info h4 {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
            color: #2c2c2c;
        }

        .product-price {
            font-size: 1.3rem;
            color: #d4a574;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        /* About Section */
        .about {
            padding: 5rem 5%;
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }

        .about p {
            font-size: 1.1rem;
            color: #666;
            line-height: 2;
            margin-bottom: 2rem;
        }

        /* Newsletter */
        .newsletter {
            padding: 5rem 5%;
            background: #2c2c2c;
            color: white;
            text-align: center;
        }

        .newsletter h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .newsletter-form {
            display: flex;
            max-width: 600px;
            margin: 2rem auto;
            gap: 1rem;
        }

        .newsletter-form input {
            flex: 1;
            padding: 1rem;
            border: none;
            border-radius: 50px;
            font-size: 1rem;
        }

        .newsletter-form button {
            padding: 1rem 2rem;
            background: #d4a574;
            color: white;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            font-weight: 600;
            transition: background 0.3s;
        }

        .newsletter-form button:hover {
            background: #c59563;
        }

        /* Footer */
        footer {
            background: #1a1a1a;
            color: white;
            padding: 3rem 5%;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            max-width: 1400px;
            margin: 0 auto;
        }

        .footer-section h3 {
            font-family: 'Playfair Display', serif;
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 0.8rem;
        }

        .footer-section a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-section a:hover {
            color: #d4a574;
        }

        .social-links {
            display: flex;
            gap: 1rem;
            font-size: 1.5rem;
        }

        .copyright {
            text-align: center;
            padding: 2rem 0;
            border-top: 1px solid #333;
            margin-top: 2rem;
            color: #888;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .hero-content h1 {
                font-size: 2.5rem;
            }

            .newsletter-form {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <?php
    // Variables PHP para contenido dinámico
    $siteName = "Elegance";
    $featured_products = [
        ["name" => "Vestido Clásico", "price" => "$299", "image" => "https://images.unsplash.com/photo-1595777457583-95e059d581b8?w=500"],
        ["name" => "Camisa Premium", "price" => "$149", "image" => "https://images.unsplash.com/photo-1602810318383-e386cc2a3ccf?w=500"],
        ["name" => "Pantalón Elegante", "price" => "$199", "image" => "https://images.unsplash.com/photo-1624378439575-d8705ad7ae80?w=500"],
        ["name" => "Blazer Ejecutivo", "price" => "$399", "image" => "https://images.unsplash.com/photo-1591369822096-ffd140ec948f?w=500"]
    ];
    ?>

    <!-- Header -->
    <header>
        <nav>
            <a href="#" class="logo"><?php echo $siteName; ?></a>
            <ul class="nav-links">
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#categorias">Categorías</a></li>
                <li><a href="#productos">Productos</a></li>
                <li><a href="#nosotros">Nosotros</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
            <div class="nav-icons">
                <a href="#"><i class="fas fa-search"></i></a>
                <a href="#"><i class="fas fa-user"></i></a>
                <a href="#"><i class="fas fa-shopping-bag"></i></a>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="inicio">
        <div class="hero-content">
            <h1>Colección Premium 2026</h1>
            <p>Descubre la elegancia en cada prenda</p>
            <a href="#productos" class="btn">Explorar Colección</a>
        </div>
    </section>

    <!-- Categorías -->
    <section class="categories" id="categorias">
        <h2 class="section-title">Nuestras Categorías</h2>
        <div class="category-grid">
            <div class="category-card">
                <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?w=600" alt="Mujer">
                <div class="category-overlay">
                    <h3>Mujer</h3>
                    <p>Elegancia femenina</p>
                </div>
            </div>
            <div class="category-card">
                <img src="https://images.unsplash.com/photo-1490578474895-699cd4e2cf59?w=600" alt="Hombre">
                <div class="category-overlay">
                    <h3>Hombre</h3>
                    <p>Estilo masculino</p>
                </div>
            </div>
            <div class="category-card">
                <img src="https://images.unsplash.com/photo-1556906781-9a412961c28c?w=600" alt="Accesorios">
                <div class="category-overlay">
                    <h3>Accesorios</h3>
                    <p>Detalles perfectos</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Productos Destacados -->
    <section class="featured-products" id="productos">
        <h2 class="section-title">Productos Destacados</h2>
        <div class="products-grid">
            <?php foreach($featured_products as $product): ?>
            <div class="product-card">
                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                <div class="product-info">
                    <h4><?php echo $product['name']; ?></h4>
                    <p class="product-price"><?php echo $product['price']; ?></p>
                    <a href="#" class="btn">Agregar al Carrito</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="nosotros">
        <h2 class="section-title">Sobre Nosotros</h2>
        <p>
            En <?php echo $siteName; ?>, nos dedicamos a ofrecer las mejores prendas de vestir con un diseño 
            excepcional y calidad premium. Nuestra misión es hacer que cada persona se sienta única y 
            elegante con nuestras colecciones cuidadosamente seleccionadas.
        </p>
        <p>
            Con más de 10 años de experiencia en la industria de la moda, combinamos tendencias 
            internacionales con un toque de sofisticación atemporal.
        </p>
    </section>

    <!-- Newsletter -->
    <section class="newsletter">
        <h2>Suscríbete a Nuestro Newsletter</h2>
        <p>Recibe las últimas tendencias y ofertas exclusivas</p>
        <form class="newsletter-form" method="POST" action="subscribe.php">
            <input type="email" name="email" placeholder="Tu correo electrónico" required>
            <button type="submit">Suscribirse</button>
        </form>
    </section>

    <!-- Footer -->
    <footer id="contacto">
        <div class="footer-content">
            <div class="footer-section">
                <h3><?php echo $siteName; ?></h3>
                <p>Tu destino para moda elegante y sofisticada.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                </div>
            </div>
            <div class="footer-section">
                <h3>Enlaces Rápidos</h3>
                <ul>
                    <li><a href="#categorias">Categorías</a></li>
                    <li><a href="#productos">Productos</a></li>
                    <li><a href="#nosotros">Sobre Nosotros</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Atención al Cliente</h3>
                <ul>
                    <li><a href="#">Preguntas Frecuentes</a></li>
                    <li><a href="#">Envíos</a></li>
                    <li><a href="#">Devoluciones</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Contacto</h3>
                <ul>
                    <li><i class="fas fa-phone"></i> +51 123 456 789</li>
                    <li><i class="fas fa-envelope"></i> info@elegance.com</li>
                    <li><i class="fas fa-map-marker-alt"></i> Lima, Perú</li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; <?php echo date('Y'); ?> <?php echo $siteName; ?>. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>