<?php
   $image_url='https://thumbs.dreamstime.com/z/media-developer-female-office-media-developer-female-office-176072085.jpg';
   
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
        <h3>Hello There!</h3>
        <?php echo "<img  src='../public/images/elif.png' alt='elif'/>"; ?>
        
        <h2>I'm Elif Sarikaya</h2>

        <img id="vectorImg" src="<?php echo $image_url;?>" alt="vector img"> 

        <p>I am a mom of two; I am proud of my children and also my never-ending energy. Also, I am a mathematician, and had worked as a high school math teacher for 10 years. After I moved to Canada, I decided to change my career and combine my logical and artistic abilities, and started the Interactive Media Design Program at Fanshawe College. I love travelling and going to new places.</p>
        
        <?php include '../includes/partials/footer.php'; ?>
    </body>
</html>