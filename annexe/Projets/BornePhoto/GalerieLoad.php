<?php
$i=10;
/*reload la page*/
	$nbFichiers = count(glob('images/*.jpg'));
		for($n = $nbFichiers; $n > 0; $n--)
			{
				echo'<div class="col-sm-6 col-md-4"><span class="lightbox"><img src="images/'.$i++.'.jpg"></span></div>';
			}
?>