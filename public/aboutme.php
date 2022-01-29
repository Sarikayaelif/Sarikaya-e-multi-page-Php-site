<?php
$listingData = [
    [
        'title' => 'Kitten number 1!',
        'image' => 'http://placekitten.com/400/300'
    ],
    [
        'title' => 'Hello Kitten Two!',
        'image' => 'http://placekitten.com/401/301'
    ],
    [
        'title' => 'Kitten number Three!',
        'image' => 'http://placekitten.com/402/302'
    ],
    [
        'title' => 'Kitten Four!',
        'image' => 'http://placekitten.com/403/303'
    ],
];

?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
        <link rel="stylesheet" href="https://use.typekit.net/ghs3lib.css">
        <link rel="stylesheet" href="css/main.css">
        <title>Elif Sarikaya | Developer</title>
    </head>
    <body>
        <?php include '../includes/partials/navigation.php'; ?>
        <p>
            Hello, world, this is the contact page.
        </p> 

        <?php
            foreach ($myData as $data) {
               echo $data['title'] . ' ' . $data['image']; 
            }
        ?>
        <?php include '../includes/partials/footer.php'; ?>
    </body>
</html>