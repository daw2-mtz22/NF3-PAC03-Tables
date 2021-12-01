<?php 
echo <<<ENDHTML
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Comentarios</title>
	<style>
	table{
		width:100%;
		border:1px solid;
	}
	td{
		padding:2%;
		
	}
	.nota{
		text-align:center;
	}
	</style>
	</head>
	<body>
		<table>
			 <tr>
				<td colspan="4">
					Mayor entendimiento de la utilización de heredoc (ENDHTML)
				</td>
			</tr>
			<tr>
				<td colspan="4">
					Mejor entendimiento de las funciones en PHP(Similar a los demas lenguajes)
				</td>
			</tr>
			
			<tr class="nota">
				<td>Nota Documento: </td>
				<td > 5</td>
				<td>Nota Explicación: </td>
				<td>5 </td>
			</tr>
			<tr class="nota">
				<td>Nota Alumno: </td>
				<td>5</td>
			</tr>
		</table>
	</body>
	</html>
ENDHTML;
?>