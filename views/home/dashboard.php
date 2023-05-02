<?php
    //Vous pouvez modifier cette page car c'est principalement du HTML
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, tenetur. Amet, earum illum minima obcaecati nesciunt eveniet alias quos saepe. Blanditiis similique quod eum corrupti vitae iusto, nulla ut suscipit?</p>

    <ul>
        <?php foreach($users as $user): ?>
            <li><?= $user->nom ?></li>
        <?php endforeach ?>
    </ul>
</body>
</html>