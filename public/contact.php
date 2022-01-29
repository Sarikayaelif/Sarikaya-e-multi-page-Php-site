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

    </body>
</html>