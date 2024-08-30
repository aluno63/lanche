<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos de bebidas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        h1 {
            margin: 0;
        }
        .product-list {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .product {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 15px;
            flex: 1 1 calc(33.333% - 20px);
            box-sizing: border-box;
            text-align: center;
        }
        .product img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .product h2 {
            margin: 10px 0;
            font-size: 1.5em;
        }
        .product p {
            font-size: 1em;
            color: #666;
        }
        .product .price {
            font-size: 1.2em;
            color: #333;
            margin-top: 10px;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Menu de Bebidas</h1>
    </header>

    <div class="container">
        <div class="product-list">
            <div class="product">
                <img src="img/cocacola" alt="">
                <h2>Coca-Cola</h2>
                <p></p>
                <div class="price">R$ 15,00</div>
            </div>
            <div class="product">
                <img src="img/guarana" alt="">
                <h2>Guarana</h2>
                <p></p>
                <div class="price">R$ 10,00</div>
            </div>
            <div class="product">
                <img src="img/fanta" alt="">
                <h2>Fanta</h2>
                <p></p>
                <div class="price">R$ 12,00</div>
            </div>
            <div class="product">
                <img src="img/cocazero" alt="">
                <h2>Coca Cola ZERO</h2>
                <p></p>
                <div class="price">R$ 10,00</div>
            </div>
            <div class="product">
                <img src="img/kuat" alt="">
                <h2>Guarana Kuat</h2>
                <p></p>
                <div class="price">R$ 10,00</div>
            </div>
            <div class="product">
                <img src="img/sprite" alt="">
                <h2>Sprite</h2>
                <p></p>
                <div class="price">R$ 10,00</div>
            </div>
            <div class="product">
                <img src="img/sprite" alt="">
                <h2>Sprite</h2>
                <p></p>
                <div class="price">R$ 10,00</div>
            </div>
            <div class="product">
                <img src="img/sprite" alt="">
                <h2>Sprite</h2>
                <p></p>
                <div class="price">R$ 10,00</div>
            </div>
            <div class="product">
                <img src="img/sprite" alt="">
                <h2>Sprite</h2>
                <p></p>
                <div class="price">R$ 10,00</div>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Produtos de Lanches. Todos os direitos reservados.</p>
    </footer>
</body>
</html>