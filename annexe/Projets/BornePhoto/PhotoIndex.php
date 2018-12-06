<?php
$i=10;
/*reload la page*/
	$nbFichiers = count(glob('images/*.jpg'));
		for($n = $nbFichiers+9; $n > $nbFichiers+5; $n--)
			{
				echo'<div id="img" class="col-sm-6 col-md-4"><span class="lightbox"><img src="images/'.$n.'.jpg"></span></div>';
			}
?>