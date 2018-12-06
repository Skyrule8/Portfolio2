<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home - Borne Photo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script language="JavaScript" type="text/javascript" src="js/Minuteur.js"></script>
        <script>
        function photo()
            {
            var photo = setInterval(
                (function()
                {
                    $("#photos").load("PhotoIndex.php");
                }),1000);
            }
    </script>
</head>
<body onload="photo()">

<div class="container gallery-container">

    <h1 id="titre">Prenez vos Photos</h1>
    <div style="display: flex; justify-content: space-around;">
    <a href="Galerie.php"><input type="button" class="btn btn-danger" value="GALERIE" id="bouton"></a>  <div id="compteur" style="font-size: 1vw;"></div>
    <input type="button" class="btn btn-danger" value="PRENDRE" onclick= "reset();minuteur();" id="bouton">
    </div>
    <div id="loadminuteur"></div>
    <div class="tz-gallery">
        <div class="row">
            <div id="photos"></div>
        </div>
    </div>
</div>
</body>
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
</html>