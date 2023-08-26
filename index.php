<?php

include 'templates/cabecera.php';
include 'carrito.php';

?>

    

</head>
		<body>
		
		<body id="page-top">
		 <div id="Contenedor">
		 <div class="Icon">


                    <!--Icono de usuario-->
                   <h1> Solicitud de Inicio de Tramite</span>
                 </div>
<div class="ContentForm">
<form action="" method="post">
           
		   <div class="row">
			 <div class="col-lg-12">
			   <div class="form-group">
				 <label for="exampleFormControlSelect1">Tipo de Tramite</label>
				 <select class="form-control"  name="Formulario">
				   <option value="Acta de Constatación">Acta de Constatación</option>
					   <option value="Acta de Domicilio">Acta de Domicilio</option>
		   <option value="Acuerdo Laboral -Art 241">Acuerdo Laboral -Art 241</option>
<option value="Art 60-Ley 19550">Art 60-Ley 19550</option>
<option value="Autorización de Manejo">Autorización de Manejo</option>
<option value="Autorización de Viaje Exterior">Autorización de Viaje Exterior</option>
<option value="Autorización de Viaje-Argentina">Autorización de Viaje-Argentina</option>
<option value="Compraventa">Compraventa</option>
<option value="Constitución S.A.">Constitución S.A.</option>
<option value="Constitución S.R.L.">Constitución S.R.L.</option>
<option value="Hipoteca">Hipoteca</option>

<option value="Poder de Administración">Poder de Administración</option>
<option value="Poder Especial">Poder Especial</option>
<option value="Poder General Amplio">Poder General Amplio</option>
<option value="Poder General Judicial">Poder General Judicial</option>
<option value="Testamento">Testamento</option>
<option value="otro">Otro</option>
				 </select>
			   </div>
		   </div>
			 <div class="col-md-6">
			   <div class="form-group">
				 <input class="form-control" name="Apellido" type="text" style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Apellido (*)" required="required" data-validation-required-message="Por favor ingresa tu apellido.">
				 <p class="help-block text-danger"></p>
			   </div>
			   <div class="form-group">
				 <input class="form-control" name="Nombres" type="text" style="text-transform:uppercase;" placeholder="Nombres (*)" required="required" data-validation-required-message="Por favor ingresa tus nombre.">
				 <p class="help-block text-danger"></p>
			   </div>
			   <div class="form-group">
			
				 <select class="form-control"  name="Nacionalidad" required="required" placeholder="Por favor ingrese su nacionalidad.">
				   
				 <option disabled selected>Nacionalidad (*)</option>
				 <option value=" argentina">argentina</option>
<option value=" boliviana">boliviana</option>
<option value=" chilena">chilena</option>
<option value=" colombiana">colombiana</option>
<option value=" costarricense">costarricense</option>
<option value=" cubana">cubana</option>
<option value=" dominicana">dominicana</option>
<option value=" ecuatoriana">ecuatoriana</option>
<option value=" estadounidense">estadounidense</option>
<option value=" guatemalteca">guatemalteca</option>
<option value=" hondureña">hondureña</option>
<option value=" mexicana">mexicana</option>
<option value=" nicaragüense">nicaragüense</option>
<option value=" panameña">panameña</option>
<option value=" paraguaya">paraguaya</option>
<option value=" puertorriqueña">puertorriqueña</option>
<option value=" peruana">peruana</option>
<option value=" salvadoreña">salvadoreña</option>
<option value=" uruguaya">uruguaya</option>
<option value=" venezolana">venezolana</option>
<option value=" albanés/sa">albanés/sa</option>
<option value=" alemana">alemana</option>
<option value=" andorrano/na">andorrano/na</option>
<option value=" armenia">armenia</option>
<option value=" austriaca">austriaca</option>
<option value=" azerbaiyana">azerbaiyana</option>
<option value=" belga">belga</option>
<option value=" bielorrusa">bielorrusa</option>
<option value=" bosnioherzegovina">bosnioherzegovina</option>
<option value=" búlgara">búlgara</option>
<option value=" chipriota">chipriota</option>
<option value=" vaticana">vaticana</option>
<option value=" croata">croata</option>
<option value=" danésa">danésa</option>
<option value=" eslovaca">eslovaca</option>
<option value=" eslovena">eslovena</option>
<option value=" española">española</option>
<option value=" estonia">estonia</option>
<option value=" finlandésa">finlandésa</option>
<option value=" francesa">francesa</option>
<option value=" georgiana">georgiana</option>
<option value=" griega">griega</option>
<option value=" húngara">húngara</option>
<option value=" irlandés/sa">irlandés/sa</option>
<option value=" Islandia: Islandés/sa">Islandés/sa</option>
<option value=" Italia: Italiano/na">Italiano</option>
<option value=" Kazajistán: Kazajo/ja">Kazajo</option>
<option value=" Letonia: Letón/na">Letóna</option>
<option value=" Liechtenstein: liechtensteiniano/na">liechtensteiniana</option>
<option value=" Lituania: Lituano/na">Lituania: Lituano/na</option>
<option value=" Luxemburgo: Luxemburgués/sa">Luxemburgo: Luxemburgués/sa</option>
<option value=" Malta: Maltés/sa">Malta: Maltés/sa</option>
<option value=" Moldavia: Moldavo/va">Moldavia: Moldavo/va</option>
<option value=" Mónaco: Monegasco/ca">Mónaco: Monegasco/ca</option>
<option value=" Montenegro: Montenegrino/na">Montenegro: Montenegrino/na</option>
<option value=" Noruega: Noruego/ga">Noruega: Noruego/ga</option>
<option value=" Países Bajos: Neerlandés/sa">Países Bajos: Neerlandés/sa</option>
<option value=" Polonia: Polaco/ca">Polonia: Polaco/ca</option>
<option value=" Portugal: Portugués/sa">Portugal: Portugués/sa</option>
<option value=" Reino Unido: Británico/ca">Reino Unido: Británico/ca</option>
<option value=" República Checa: Checo/ca">República Checa: Checo/ca</option>
<option value=" República de Macedonia: Macedonio/nia">República de Macedonia: Macedonio/nia</option>
<option value=" Rumanía: Rumano/na">Rumanía: Rumano/na</option>
<option value=" Rusia: Ruso/sa">Rusia: Ruso/sa</option>
<option value=" San Marino: Sanmarinense">San Marino: Sanmarinense</option>
<option value=" serbia">serbia</option>
<option value=" sueca">sueca</option>
<option value=" suiza">suiza</option>
<option value=" turca">turca</option>
<option value=" ucraniana">ucraniana</option>
				 </select>
			   </div>

</div>





<div class="col-md-12" style="
    padding-left: 0px;
    padding-right: 0px;
">
 <div class="col-md-2">

			   <div class="form-group">






		 <select class="form-control"  name="diaNas" required="required" >
				   
 <option disabled selected>Día Nacimiento</option>	
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
				 </select>



			   </div>






</div>
<div class="col-md-2">

  <div class="form-group">

		 <select class="form-control"  name="mesNas" required="required" >
				   
 <option disabled selected>Mes Nacimiento</option>	
<option value="Enero">Enero</option>
<option value="Febrero">Febrero</option>
<option value="Marzo">Marzo</option>
<option value="Abril">Abril</option>
<option value="Mayo">Mayo</option>
<option value="Junio">Junio</option>
<option value="Julio">Julio</option>
<option value="Agosto">Agosto</option>
<option value="Septiembre">Septiembre</option>
<option value="Octubre">Octubre</option>
<option value="Noviembre">Noviembre</option>
<option value="Diciembre">Diciembre</option>
				 </select>



			   




</div>


</div>





<div class="col-md-2">

<div class="form-group">			 

		 <select class="form-control"  name="anioNas" required="required" >
				   
 <option disabled selected>Año Nacimiento</option>	

				<option value="1921">1921</option>
<option value="1922">1922</option>
<option value="1923">1923</option>
<option value="1924">1924</option>
<option value="1925">1925</option>
<option value="1926">1926</option>
<option value="1927">1927</option>
<option value="1928">1928</option>
<option value="1929">1929</option>
<option value="1930">1930</option>
<option value="1931">1931</option>
<option value="1932">1932</option>
<option value="1933">1933</option>
<option value="1934">1934</option>
<option value="1935">1935</option>
<option value="1936">1936</option>
<option value="1937">1937</option>
<option value="1938">1938</option>
<option value="1939">1939</option>
<option value="1940">1940</option>
<option value="1941">1941</option>
<option value="1942">1942</option>
<option value="1943">1943</option>
<option value="1944">1944</option>
<option value="1945">1945</option>
<option value="1946">1946</option>
<option value="1947">1947</option>
<option value="1948">1948</option>
<option value="1949">1949</option>
<option value="1950">1950</option>
<option value="1951">1951</option>
<option value="1952">1952</option>
<option value="1953">1953</option>
<option value="1954">1954</option>
<option value="1955">1955</option>
<option value="1956">1956</option>
<option value="1957">1957</option>
<option value="1958">1958</option>
<option value="1959">1959</option>
<option value="1960">1960</option>
<option value="1961">1961</option>
<option value="1962">1962</option>
<option value="1963">1963</option>
<option value="1964">1964</option>
<option value="1965">1965</option>
<option value="1966">1966</option>
<option value="1967">1967</option>
<option value="1968">1968</option>
<option value="1969">1969</option>
<option value="1970">1970</option>
<option value="1971">1971</option>
<option value="1972">1972</option>
<option value="1973">1973</option>
<option value="1974">1974</option>
<option value="1975">1975</option>
<option value="1976">1976</option>
<option value="1977">1977</option>
<option value="1978">1978</option>
<option value="1979">1979</option>
<option value="1980">1980</option>
<option value="1981">1981</option>
<option value="1982">1982</option>
<option value="1983">1983</option>
<option value="1984">1984</option>
<option value="1985">1985</option>
<option value="1986">1986</option>
<option value="1987">1987</option>
<option value="1988">1988</option>
<option value="1989">1989</option>
<option value="1990">1990</option>
<option value="1991">1991</option>
<option value="1992">1992</option>
<option value="1993">1993</option>
<option value="1994">1994</option>
<option value="1995">1995</option>
<option value="1996">1996</option>
<option value="1997">1997</option>
<option value="1998">1998</option>
<option value="1999">1999</option>
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2021">2021</option>
<option value="2022">2022</option>
<option value="2023">2023</option>


</select>

 </div>






</div>







</div>


 <div class="col-md-6">





			   <div class="form-group">
				 <input class="form-control" name="CUIL" type="number" maxlength="11" placeholder="CUIL (*)" required="required" data-validation-required-message="Por favor ingresa tu CUIL sin guiones">
				 <p class="help-block text-danger"></p>
			   </div>
			   <div class="form-group">
				 <input class="form-control" name="DNI" type="number"  maxlength="8" placeholder="DNI (*)" required="required" data-validation-required-message="Por favor ingresa tu DNI">
				 <p class="help-block text-danger"></p>
			   </div>
			   <div class="form-group">
				 <select class="form-control"  name="Estado" required="required" placeholder="Por favor ingrese su nacionalidad.">
				   
				   <option disabled selected>Estado Civil (*)</option>
				   <option value=" soltero/a">soltero/a</option>
<option value=" casado/a en primeras nupcias con">casado/a en primeras nupcias con</option>
<option value=" casado/a en segundas nupcias con">casado/a en segundas nupcias con</option>
<option value=" casado/a en terceras nupcias con">casado/a en terceras nupcias con</option>
<option value=" viudo/a en primeras nupcias con">viudo/a de sus primeras nupcias con</option>
<option value=" viudo/a en segundas nupcias con">viudo/a de sus segundas nupcias con</option>
<option value=" divorciado/a en primeras nupcias con">casado/a en primeras nupcias con</option>
<option value=" divorciado/a en segundas nupcias con">casado/a en segundas nupcias con</option>
<option value=" divorciado/a en terceras nupcias con">casado/a en terceras nupcias con</option>
</select>
		
		
		
		<p class="help-block text-danger"></p>
			   </div>
			   <div class="form-group">
				 <input class="form-control" name="Conyugue" type="text" placeholder="Nombres y Apellidos de Cónyuge (*)" required="required" data-validation-required-message="Por favor ingresa nombres y apellidos de conyugue.">
				 <p class="help-block text-danger"></p>
			   </div>
			   <div class="form-group">
				 <input class="form-control" name="Padre" type="text" placeholder="Nombres y Apellidos del Padre (*)" required="required" data-validation-required-message="Por favor ingresa nombres y apellidos de padre.">
				 <p class="help-block text-danger"></p>
			   </div>
			   <div class="form-group">
				 <input class="form-control" name="Madre" type="text" placeholder="Nombres y Apellidos de la Madre (*)" required="required" data-validation-required-message="Por favor ingresa nombres y apellidos de madre.">
				 <p class="help-block text-danger"></p>
			   </div>
			   <div class="form-group">
				 <input class="form-control" name="Domicilio" type="text" placeholder="Domicilio (*)" required="required" data-validation-required-message="Por favor ingresa Domicilio.">
				 <p class="help-block text-danger"></p>
			   </div>
			   <div class="form-group">
				 <input class="form-control" name="Localidad" type="text" placeholder="Localidad (*)" required="required" data-validation-required-message="Por favor ingresa Localidad.">
				 <p class="help-block text-danger"></p>
			   </div>
			   <div class="form-group">
				 <input class="form-control" name="Partido" type="text" placeholder="Partido (*)" required="required" data-validation-required-message="Por favor ingresa Partido.">
				 <p class="help-block text-danger"></p>
			   </div>



			  
			   <div class="form-group">
				 <input class="form-control" name="Whatsapp" type="tel" placeholder="Whatsapp (*)" required="required" data-validation-required-message="Por Favor ingresar Whastapp.">
				 <p class="help-block text-danger"></p>
			   </div>
			 </div>

			 <div class="col-md-6">
			   <div class="form-group">
				 <textarea class="form-control" name="Observaciones" placeholder="Observaciones (*)" data-validation-required-message="Por favor ingresar observaciones."></textarea>
				 <p class="help-block text-danger"></p>
			   </div>
			 </div>


			 <div class="clearfix"></div>

			 <div class="form-group">
			 <div class="col-md-6">
			 	<div id="success"></div>
			   <button class="btn btn-primary"  type="submit" name="btnAccion" value="Agregar">Agregar Persona</button> 
			   </div> 
			    </div> 
			    <div class="form-group">
			   <div class="col-md-6">
			   <div id="success"></div>
			   <button class="btn btn-primary"  type="submit" name="btnAccion" value="Enviar">Enviar Formulario</button> 
			   	 </div>
			   	 	 </div>
			 </div>
		   </div>
		 </form>







		 </div>	
		 </div>
</body>
 <!-- vinculando a libreria Jquery-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <!-- Libreria java scritp de bootstrap -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>