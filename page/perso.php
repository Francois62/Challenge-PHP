<?php
include_once("connexion.php");


$res1 = mysqli_query($cnx,"SELECT * FROM custom WHERE id=1");
$data1 = mysqli_fetch_assoc($res1);
echo "<div class='row'>
<div class=' text-center col-xs-12 col-md-12 col-lg-12'>
<h4 class='text-center'>Espace administration<h4><br>
<div class='col-xs-12 col-md-4 col-sm-6 col-md-offset-2'>
<form action='customsave.php' method='POST'>
<label for='color'>couleur titre:</label><br>
<input name='title' type='text' /><br>

<label for='nav'>nav:</label><br>
<input name='navbarr' type='text' /><br>

<label for='title'>title:</label><br>
<input name='changetitle' type='text' /><br>

<label for='title'>title2:</label><br>
<input name='changetitle2e2' type='text' /><br>

<label for='title'>title3:</label><br>
<input name='changetitle3' type='text' /><br>
</div>

<div class='col-xs-12 col-md-4 col-sm-6 '>
<label for='subtitle'>subtitle:</label><br>
<input name='changesubtitle' type='text' /><br>

<label for='url'>couleur url:</label><br>
<input name='url' type='text' /><br>

<label for='button'>couleur boutton:</label><br>
<input name='bouton' type='text' /><br>

<select name='police'/>
			<option value='Lemonada'>Lemonada</option>
			<option value='Pacifico'>Pacifico</option>
			<option value='Satisfy'>Satisfy</option>
			<option value='Montez'>Montez</option>
			<option value='Aladin'>Aladin</option>
		</select>
<br>
		<br><label class='check'>navbar fixed</label>";
		if($data1['navfix']== 0){
			echo"<input class='check' type='checkbox' name='navfix' value=''/>";
		}
		else{
			echo"<input class='check' type='checkbox' name='navfix' value='' checked/>";
		}
		echo "<br><label class='check'>neige</label>";
		if($data1['snow']== 0){
			echo"<input class='check' type='checkbox' name='snow' value=''/>";
		}
		else{
			echo"<input class='check' type='checkbox' name='snow' value='' checked/>";

		}
		echo "<br><label class='check'>Slider</label>";
		if($data1['slider']== 0){
		echo '<input class="check" type="checkbox" name="slider" value="" />';
	}
		else{
			echo"<input class='check' type='checkbox' name='slider' value='' checked/><br>";
		}

echo'<br><button id="connect" type="submit" class="btn btn-default btn-info btn-lg" data-toggle="modal" data-target="#myModal" onblur="">Envoyer</button>
<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
				<div class="modal-content">
						<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>

						</div>
						<div class="modal-body">
								<p>Modifications bien pris en compte.</p>
						</div>
						<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
				</div>
		</div>
</div>
</div>

</form>
</div>
</div>'

;
// <!-- <h4 class="modal-title">Modal Header</h4> -->


?>
<style>

input{
	margin-bottom: 1% !important ;
	vertical-align: top;
}
.check{
	margin-bottom: 2% !important ;
	display: inline-block;
}
</style>
