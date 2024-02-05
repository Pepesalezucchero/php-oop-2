<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="icon" href="img/icona_anim.jpg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop cani-gatti oop</title>
  <link rel="stylesheet" href="style.css"> 
</head>
<body>
  
<?php

include 'Products.php';
include 'Category.php';
include 'PetProducts.php';

$dogCategory = new Category("Cani");
$catCategory = new Category("Gatti");

$products = [
  new PetProduct("Cibo per Cani", "./img/dog_food.jpg", 3.49, "Per mantenere il tuo cane in perfetto stato, abbiamo che aggiunto vitamina A, D ed E, più minerali chelati per favorire l’assorbimento dei nutrienti e glucosammina e condroitina per aiutare le articolazioni a mantenersi flessibili e mobili. È tanto delizioso quanto nutriente e sicuramente manterrà scodinzolante la coda del tuo amico a quattro zampe.", $dogCategory),
  new PetProduct("Cuccia per Cani", "./img/cane_cuccia.jpg", 135.95, "Un porto sicuro per il tuo fedele amico: in questa cuccia per cani della marca Cadoca, in vero legno massello, il tuo amico a quattro zampe si sentirà protetto ed al sicuro. La casetta per cani offre molto spazio e consente al tuo cagnolino di ritirarasi e riposarsi in un luogo confortevole.", $dogCategory),
  new PetProduct("Giocattolo per Cani", "./img/cane_gioco.jpg", 10.92, "Gioco per cani Tiaki Osso in gomma è morbido ma al tempo stesso robusto e rappresenta un'alternativa sicura ai veri ossi, poichè non si scheggia. Offre un lungo passatempo al pet, facendolo rilassare e stare tranquillo. Inoltre, il gioco è in gomma naturale, così è anche sostenibile ed ecologico.", $dogCategory),
  new PetProduct("Cibo per Gatti", "./img/gatto_cibo.jpg", 4.75, " Ultima è un alimento molto nutriente, quindi le quantità consigliate sono inferiori alla norma. Le quantità mostrate sono puramente orientative e devono essere regolate in base alle condizioni fisiche, all'attività e alle condizioni climatiche. Razione giornaliera consigliata Peso del gatto: 2 - 4 kg", $catCategory),
  new PetProduct("Casetta per Gatti", "./img/gatto_cuccia.jpg", 81.99, "Il vostro gatto è un appassionato viaggiatore ma ama avere il suo piccolo angolo di mondo? Regalategli una cuccia da esterno dove possa riposare e crogiolarsi in tutte le stagioni. La casetta per gatti Miky Lodge Zolia sarà utilissima per i pisolini o per ripararsi sia in estate che in inverno, aggiungendo al contempo un elemento bello, pittoresco e decorativo al vostro giardino. Questa casetta per gatti è realizzata in pino. Assume l'aspetto di un'affascinante casa in legno, con gradini e una terrazza coperta. Che abbiate un gatto o più gatti, tutti potranno sentirsi a casa in questo grazioso rifugio.", $catCategory),
  new PetProduct("Giocattolo per Gatti", "./img/gioco_gatto.jpg", 6.99, "Divertentissimo Topolino di Hunter. Realizzato in peluche, contiene un chip sonoro che emette un autentico suono di topo quando viene toccato! Contiene erba gatta e farà la felicità di tutti i gatti!", $catCategory),
];

?>

<?php foreach ($products as $product) { ?>

<div class='product-card'>
  <h1> <?= $product->getTitle() ?> </h1>
  <img src='<?= $product->getImage() ?>' alt='<?= $product->getTitle() ?>'>
  <p><strong>Prezzo:</strong> <?= $product->getPrice() ?> €</p>
  <p><strong>Descrizione:</strong> <?= $product->getDescription() ?> </p>
  <p><strong>Categoria:</strong> <?= $product->getCategory()->getName() ?> </p>
</div>

<?php } ?>

</body>
</html>