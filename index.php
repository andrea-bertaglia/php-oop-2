<?php

// collego le classi
require_once __DIR__ . "/models/product.php";
require_once __DIR__ . "/models/food.php";
require_once __DIR__ . "/models/toy.php";
require_once __DIR__ . "/models/kennel.php";

// creo le categorie cane/gatto
$dog_category = new Category('cane');
$cat_category = new Category('gatto');


// prodotto n.1 generico
$product1 = new Product('Crocchette di manzo (Conf. 10Kg)', 'Monge');
$product1->setPrice(49.90);
$product1->setDiscount(10);
$product1->setVat_percentage(22);
$product1->category = $dog_category;
// var_dump($product1);

// prodotto n.2 di tipo food
$product2 = new Food('Crocchette di manzo', 'Monge', 'secco', 'sacchetto', 'https://www.naturepetshop.it/wp-content/uploads/monge-mini-adult.jpg');
$product2->setPrice(49.90);
$product2->setDiscount(10);
$product2->setVat_percentage(22);
$product2->category = $dog_category;
$product2->setExpiration_date('2024-01-01');
// var_dump($product2);

// prodotto n.3 di tipo food
$product3 = new Food('Straccetti di pollo', 'Almonature', 'umido', 'vaschetta', 'https://mifidopetshop.com/wp-content/uploads/2021/07/almo-hfc-natural.jpg');
$product3->setPrice(19.90);
$product3->setDiscount(10);
$product3->setVat_percentage(22);
$product3->category = $cat_category;
$product3->setExpiration_date('2024-01-01');
// var_dump($product3);

// prodotto n.4 di tipo gioco
$product4 = new Toy('Osso giocattolo', 'Acme', 'plastica', 'https://www.artelegnoshop.it/wp-content/uploads/2023/11/osso-per-cane-legno-ulivo13.jpg');
$product4->setPrice(29.90);
$product4->setDiscount(20);
$product4->setVat_percentage(22);
$product4->category = $dog_category;
// var_dump($product4);

// prodotto n.5 di tipo cuccia
$product5 = new Kennel('Cuscino per gatti', 'Acme', 'cotone', 'SI', 'https://m.media-amazon.com/images/I/71NqXoLPhPL._AC_UF894,1000_QL80_.jpg');
$product5->setPrice(29.90);
$product5->setDiscount(20);
$product5->setVat_percentage(22);
$product5->category = $cat_category;
// var_dump($product5);


// creo l'array catalogo dei prodotti
$catalog = [
    [
        'name' => $product2->getName(),
        'brand' => $product2->getBrand(),
        'category' => $product2->category->getCategory(),
        'icon' => $product2->category->getIcon(),
        'price' => $product2->getPrice(),
        'discount' => $product2->getDiscount(),
        'vat' => $product2->getVat_percentage(),
        'img_path' => $product2->getImg_path(),
        'food_type' => $product2->getFood_type(),
        'packaging' => $product2->getPackaging(),
        'expiration_date' => $product2->getExpiration_date()
    ],
    [
        'name' => $product3->getName(),
        'brand' => $product3->getBrand(),
        'category' => $product3->category->getCategory(),
        'icon' => $product3->category->getIcon(),
        'price' => $product3->getPrice(),
        'discount' => $product3->getDiscount(),
        'vat' => $product3->getVat_percentage(),
        'img_path' => $product3->getImg_path(),
        'food_type' => $product3->getFood_type(),
        'packaging' => $product3->getPackaging(),
        'expiration_date' => $product3->getExpiration_date(),
    ],
    [
        'name' => $product4->getName(),
        'brand' => $product4->getBrand(),
        'category' => $product4->category->getCategory(),
        'icon' => $product4->category->getIcon(),
        'price' => $product4->getPrice(),
        'discount' => $product4->getDiscount(),
        'vat' => $product4->getVat_percentage(),
        'img_path' => $product4->getImg_path(),
        'material' => $product4->getMaterial()
    ],
    [
        'name' => $product5->getName(),
        'brand' => $product5->getBrand(),
        'category' => $product5->category->getCategory(),
        'icon' => $product5->category->getIcon(),
        'price' => $product5->getPrice(),
        'discount' => $product5->getDiscount(),
        'vat' => $product5->getVat_percentage(),
        'img_path' => $product5->getImg_path(),
        'material' => $product5->getMaterial()
    ],
];
// var_dump($catalog);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shop</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <!-- Fontawesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-dark pb-5">
    <div class="container">
        <div class="row text-center">
            <div class="col py-4">
                <h1 class="fw-bold text-white">CATALOGO PET SHOP</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col d-flex justify-content-center gap-4">

                    <?php foreach ($catalog as $item) { ?>


                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo $item['img_path'] ?>" class="card-img-top h-100 pb-3">
                            <div class="card-body">
                                <h5 class="card-title pb-3"><?php echo $item['name'] ?></h5>
                                <p class="card-text"><?php echo $item['brand'] ?></p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Categoria: <span class="fw-bold"><?php echo $item['category'] ?></span><span class="ms-2 text-primary"><i class="<?php echo $item['icon'] ?>"></i></span></li>
                                <li class="list-group-item">Prezzo: <span class="fw-bold"><?php echo $item['price'] ?>0</span> €</li>
                                <li class="list-group-item">Sconto: <span class="fw-bold"><?php echo $item['discount'] ?></span> %</li>
                                <li class="list-group-item">IVA: <span class="fw-bold"><?php echo $item['vat'] ?></span>%</li>
                                <li class="list-group-item">Tipologia: <span class="fw-bold"><?php echo isset($item['food_type']) ? $item['food_type'] : 'n/a'; ?></span></li>
                                <li class="list-group-item">Confezione: <span class="fw-bold"><?php echo isset($item['packaging']) ? $item['packaging'] : 'n/a'; ?></span></li>
                                <li class="list-group-item">Data di scadenza: <span class="fw-bold"><?php echo isset($item['expiration_date']) ? $item['expiration_date'] : 'n/a'; ?></span></li>
                                <li class="list-group-item">Materiale: <span class="fw-bold"><?php echo isset($item['material']) ? $item['material'] : 'n/a'; ?></span></li>
                            </ul>
                        </div>

                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>