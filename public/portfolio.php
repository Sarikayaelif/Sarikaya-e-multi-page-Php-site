<?php
$listingData = [
    [
        'description' => 'First website I made in first semester.',
        'image' => '<img src="../public/images/portfolio6.jpg" alt="portfolio1"/>'
    ],
    [
        'description' => 'A website from boot camp in third semester.',
        'image' => '<img src="../public/images/portfolio7.jpg" alt="portfolio2"/>'
    ],
    [
        'description' => 'A Style frame by using photoshop. ',
        'image' => '<img src="../public/images/portfolio9.jpg" alt="portfolio3"/>'
    ]
   
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
        <h3> Hello there! These are few piece of my projects.</h3>
         
        <div>
          <?php
                foreach ($listingData as $data) {
                     echo $data['description'] . ' ' . $data['image'] . "<br>"; 
                }
            ?>
          </div> 

        
    <?php include '../includes/partials/footer.php'; ?>
    </body>
</html>