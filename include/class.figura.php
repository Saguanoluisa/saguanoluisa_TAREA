<?php
	abstract class figura{
		private $tipo;
		private $a; //area
		private $p; //perimetro
		
		public static function get_form(){
			$html = '
			<div id="fixed">
			<div style="padding-left:395px;">
				<h2>
					<p style="text-align: center" style="color:#165014" ;>DEPARTAMENTO DE CIENCIAS DE LA COMPUTACIÓN</p>
					<p style="text-align: center" style="color:#165014" ;>INGENIERÍA EN TECNOLOGIAS</p>
				</h2>
				<h3>
					<p style="text-align: center" style="color:#165014" ;>APLICACIONES DE TECNOLOGIAS WEB</p>
				</h3>
			</div>
			<div style="padding-left:90px;">
				<h4><p style="color:#1f1450";>Integrante: Santiago Guanoluisa</p></h4>
				<h4><p style="color:#1f1450";>NRC: 8444</p></h4>
				<h4><p style="color:#1f1450";>Fecha: 16/02/2023</p></h4>
				<h5>EJERCICIO AUTONOMO:</h5>
			</div>
			</div>
			<form name="figuras" method="POST" action="" >
			<table border=1 align="center">
				<tr>
					<th colspan="2">INGRESO DATOS DE LA FIGURA</th>
				</tr>
				<tr>
					<td>Tipo: </td>
					<td>
					<select name="tipo" OnChange=funcion(document.figuras);>
					<option value="sel">Seleccione...</option>
					<option value="cuadrado">Cuadrado</option>
					<option value="rectangulo">Rectángulo</option>
					<option value="triangulo">Triángulo</option>
				</select>
					</td>
				</tr>
				<tr>
					<td>Lado 1:</td>
					<td><input type="text" name="lado_1"size="4" disabled></td>
				</tr>
				<tr>
					<td>Lado 2:</td>
					<td><input type="text" name="lado_2"size="4" disabled></td>
				</tr>
				<tr>
					<td>Lado 3:</td>
					<td><input type="text" name="lado_3"size="4" disabled></td>
				</tr>							
				<tr>
					
				</tr>
			</table>
			</form>';
			return $html;
		}
		
		// METODOS ABSTRACTOS	
		public abstract function GetArea();
	    
	    
	    public abstract function GetPerimetro();
	    
	    
	    public abstract function GetTipo();
	}
?>
