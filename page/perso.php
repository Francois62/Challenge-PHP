<?php
include_once("connexion.php");


$res1 = mysqli_query($cnx,"SELECT * FROM custom WHERE id=1");
$data1 = mysqli_fetch_assoc($res1);
echo "<div class='row'>
<div class=' text-center col-xs-12 col-md-12 col-lg-12'>
<h4 class='text-center'>Espace administration<h4>
<form action='customsave.php' method='POST'>
<label for='color'>couleur titre:</label>
<input name='title' type='text' /><br>

<label for='nav'>nav:</label>
<input name='navbarr' type='text' /><br>

<label for='url'>couleur url:</label>
<input name='url' type='text' /><br>

<label for='button'>couleur boutton:</label>
<input name='bouton' type='text' /><br>

<select name='police'/>
			<option value='Lemonada'>Lemonada</option>
			<option value='Pacifico'>Pacifico</option>
			<option value='Satisfy'>Satisfy</option>
			<option value='Montez'>Montez</option>
			<option value='Aladin'>Aladin</option>
		</select>

		<br><label>navbar fixed</label>";
		if($data1['navfix']== 0){
			echo"<input type='checkbox' name='navfix' value=''/>";
		}
		else{
			echo"<input type='checkbox' name='navfix' value='' checked/>";
		}
		echo "<br><label>neige</label>";
		if($data1['snow']== 0){
			echo"<input type='checkbox' name='snow' value=''/>";
		}
		else{
			echo"<input type='checkbox' name='snow' value='' checked/>";

		}
		echo "<br><label>Slider</label>";
		if($data1['slider']== 0){
		echo '<input type="checkbox" name="slider" value="" />';
	}
		else{
			echo"<input type='checkbox' name='slider' value='' checked/>";
		}
echo"<br><input type='submit' name='update' value='Envoyer'/><br>


</form>
</div>
</div>

";





?>
