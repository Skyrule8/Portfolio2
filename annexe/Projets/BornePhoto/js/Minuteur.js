        var x ="";
        var cpt =3;
    function reset()
    {
        cpt =3;  
        document.getElementById("compteur").innerHTML  = "";
    }
    
    function minuteur()
    {
        
        if (cpt==0)
        {
            $("#loadminuteur").load("Script.php");
            document.getElementById("compteur").innerHTML  = "PHOTO PRISE !" ;
            $("#loadminuteur").load("renommage.php");
        }
        if (cpt >0)
        {
            document.getElementById("compteur").innerHTML  = cpt ;
            cpt--;
            x = setTimeout("minuteur()",1000);
        }
        else 
        {
            clearTimeout(x);
            x = setTimeout("reset()",1500);
        }
    }