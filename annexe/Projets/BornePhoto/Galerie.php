<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Galerie - Borne Photo</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="css/galerie.css">
    <script >
    function photo()
    {
    var photo = setInterval(
        (function(){
            $("#photos").load("GalerieLoad.php");
        }),1000);
    }
    </script>
</head>
<body onload="photo()">

<div class="container gallery-container">

    <h1 id="titre">Regardez vos photos</h1>
    <a href="index.php"><input type="button" value="HOME" class="btn btn-danger" id="bouton"></a>
    
    <div class="tz-gallery">
        <div class="row" id="photos"></div>
    </div>

</div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
</body>
</html>