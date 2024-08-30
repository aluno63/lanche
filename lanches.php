<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos de Lanches</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
        <h1>Menu de Lanches</h1>
    </header>

    <div class="container">
        <div class="product-list">
            <div class="product">
                <img src="img/hamburger" alt="Hambúrguer">
                <h2>Hambúrguer</h2>
                <p>Delicioso hambúrguer com carne suculenta, queijo, alface e molho especial.</p>
                <div class="price">R$ 15,00</div>
            </div>
            <div class="product">
                <img src="img/hotdog" alt="Hot Dog">
                <h2>Hot Dog</h2>
                <p>Salsicha de qualidade com molho de tomate, mostarda e cebola.</p>
                <div class="price">R$ 10,00</div>
            </div>
            <div class="product">
                <img src="img/batatafrita" alt="Batata Frita">
                <h2>Batata Frita</h2>
                <p>Batatas fritas crocantes servidas com molho de queijo.</p>
                <div class="price">R$ 12,00</div>
            </div>
            <div class="product">
                <img src="img/x_tudo" alt="x tudo">
                <h2>X-TUDO</h2>
                <p>Salsicha, tomate, mostarda.</p>
                <div class="price">R$ 35,00</div>
            </div>
            <div class="product">
                <img src="img/x_becon" alt="x becon">
                <h2>X-Becon</h2>
                <p>Salsicha de qualidade com molho de tomate, mostarda e cebola.</p>
                <div class="price">R$ 10,00</div>
            </div>
            <div class="product">
                <img src="img/file_peixe" alt="file de peixe">
                <h2>File de Peixe</h2>
                <p>Salsicha de qualidade com molho de tomate, mostarda e cebola.</p>
                <div class="price">R$ 10,00</div>
            </div>
            <div class="product">
                <img src="img/x_infarto" alt="x_infarto">
                <h2>X-INFARTO</h2>
                <p>No Ceu Tem Pão</p>
                <div class="price">R$ 150,00</div>
            </div>
            <div class="product">
                <img src="img/tortabanoffee" alt="tortabanoffee">
                <h2>torta de banoffee</h2>
                <p>No Ceu Tem Pão</p>
                <div class="price">R$ 50,00</div>
            </div>
            <div class="product">
                <img src="img/mousse_maracuja_chocolate" alt="mousse_maracuja_chocolate">
                <h2>mousse de maracuja com chocolate</h2>
                <p>maracuja com chocolate</p>
                <div class="price">R$ 50,00</div>
            </div>
            <div class="product">
                <img src="img/x_infarto" alt="x_infarto">
                <h2>EM BREVE</h2>
                <p>EM BREVE</p>
                <div class="price">R$ 0,00</div>
            </div>
            <div class="product">
                <img src="img/x_infarto" alt="x_infarto">
                <h2>EM BREVE</h2>
                <p>EM BREVE</p>
                <div class="price">R$ 0,00</div>
            </div>
            <div class="product">
                <img src="img/x_infarto" alt="x_infarto">
                <h2>EM BREVE</h2>
                <p>EM BREVE</p>
                <div class="price">R$ 0,00</div>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Produtos de Lanches. Todos os direitos reservados.</p>
    </footer>
</body>
</html>