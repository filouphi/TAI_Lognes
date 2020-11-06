<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<?php
require_once( 'Numeration.php' );
?>

<html>
	<head>
		<title>Numération</title>
		<script type="text/javascript">
			function verifFormulaire()
			{
				if( document.formConversion.numberConv.value <= 0 || document.formConversion.numberConv.value == '' )
				{
					alert( 'Il faut renseigner le nombre à convertir !' );
					document.formConversion.numberConv.value = '';
					document.formConversion.numberConv.focus();
				}
				else if( document.formConversion.baseConv.value <= 1 ||  document.formConversion.baseConv.value > 36 || document.formConversion.baseConv.value == '' )
				{
					alert( 'Il faut renseigner la base de conversion\n(entre 2 et 36)!' );
					document.formConversion.baseConv.value = '';
					document.formConversion.baseConv.focus();
				}
				else
				{
					document.formConversion.submit();
				}
			}
		</script>
	</head>
	
	<body style="font-size:12px;">
		<fieldset style="width:260px;">
		<legend><b>Informations</b></legend>
		<form action="index.php" method="post" name="formConversion">
			<table border="0" width="250px">
				<tr style="font-size:10px; text-align:center;">
					<td>Nombre à<br/>convertir</td>
					<td>Base de<br/>référence</td>
					<td></td>
					<td>Base de<br/>conversion</td>
				</tr>
				<tr style="text-align:center;">
					<?php
					if( isset($_POST['numberConv']) && !empty($_POST['numberConv']) )
						$numberValue = $_POST['numberConv'];
					else
						$numberValue = 0;
					
					if( isset($_POST['baseConv']) && !empty($_POST['baseConv']) )
						$baseConvValue = $_POST['baseConv'];
					else
						$baseConvValue = 16;
					?>
					<td><input type="text" name="numberConv" id="numberConv" size="9" maxlength="9" value="<?= $numberValue ?>" /></td>
					<td style="font-size:14px;">10<input type="hidden" name="baseRef" id="baseRef" value="10" /></td>
					<td width="50">=></td>
					<td><input type="text" name="baseConv" id="baseConv" size="2" maxlength="2" value="<?= $baseConvValue ?>" /></td>
				</tr>
				<tr>
					<td colspan="4" style="text-align:center;"><input type="button" value="Convertir" onclick="verifFormulaire();" /></td>
				</tr>
			</table>
		</form>
		</fieldset>
		
		<br/>
		
		<?php
			if( isset($_POST['numberConv']) && !empty($_POST['numberConv']) && isset($_POST['baseRef']) && !empty($_POST['baseRef']) && isset($_POST['baseConv']) && !empty($_POST['baseConv']) )
			{
				$oNumeration = new Numeration();
				//$oNumeration->convertDecToXBase( Numeration::BINAIRE, $_POST['numberConv'], true );
				$oNumeration->convertDecToXBase( $_POST['baseConv'], $_POST['numberConv'], true );
			}
			else
			{
				echo '<b>Remplir les champs ci-dessus !</b>';
			}
		?>
	</body>
</html>
