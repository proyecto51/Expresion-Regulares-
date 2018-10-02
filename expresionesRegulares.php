<?php 







$boton1="";
$boton2="";
$boton3="";
$boton4="";
$boton5="";
$boton6="";
$boton7="";
$boton8="";
$boton9="";
$boton10="";

if (isset($_POST['boton1']))$boton1=$_POST['boton1'];
if (isset($_POST['boton2']))$boton2=$_POST['boton2'];
if (isset($_POST['boton3']))$boton3=$_POST['boton3'];
if (isset($_POST['boton4']))$boton4=$_POST['boton4'];
if (isset($_POST['boton5']))$boton5=$_POST['boton5'];
if (isset($_POST['boton6']))$boton6=$_POST['boton6'];
if (isset($_POST['boton7']))$boton7=$_POST['boton7'];
if (isset($_POST['boton8']))$boton8=$_POST['boton8'];
if (isset($_POST['boton9']))$boton9=$_POST['boton9'];
if (isset($_POST['boton10']))$boton10=$_POST['boton10'];


$lineas = file("NUMERICO.txt");
$palabra="";    
$pos = 0;
    // Podemos mostrar / trabajar con todas las líneas:
    
    foreach($lineas as $linea){

                    echo "$linea";


}





if ($boton1) {
//comillas 
$re = '/(\".*?\")/';

preg_match_all($re, $linea, $matches, PREG_SET_ORDER, 0);

// Print the entire match result
var_dump($matches);

}

//Expresion ip
if ($boton2) {
$re = '/192\.168\.1\.\d{1,3}/';
preg_match_all($re, $linea, $matches, PREG_SET_ORDER, 0);

// Print the entire match result
var_dump($matches);

	# code...
}
//Expresion correos

if ($boton3) {
	# code...
	$re = '/[A-Za-z]+@[a-z]+\.[a-z]+/';


preg_match_all($re, $linea, $matches, PREG_SET_ORDER, 0);

// Print the entire match result
var_dump($matches);
}
//Expresion fechas
if ($boton4) {
	$re = '/(0[1-9]|[12][0-9]|3[01])[-](0[1-9]|1[012])[-](19|20)[0-9]{2}/';


preg_match_all($re, $linea, $matches, PREG_SET_ORDER, 0);

// Print the entire match result
var_dump($matches);
}
if ($boton5) {
	# code...
	$re = '(\\d{10})';


preg_match_all($re, $linea, $matches, PREG_SET_ORDER, 0);

// Print the entire match result
var_dump($matches);
}
if ($boton6) {
	# code...
	$re = '([a-z]{7,})';


preg_match_all($re, $linea, $matches, PREG_SET_ORDER, 0);

// Print the entire match result
var_dump($matches);
}
if ($boton7) {
	# code...
$re = '/\w*[B-D-b-d-F-H-f-h-J-N-j-n-P-T-p-t-V-Z-v-z]\b/m';


preg_match_all($re, $linea, $matches, PREG_SET_ORDER, 0);

// Print the entire match result
var_dump($matches);
}
if ($boton8) {
	# code...
$re = '/\b[Mm][B-D-b-d-F-H-f-h-J-N-j-n-P-T-p-t-V-Z-v-z][a-z]*/m';


preg_match_all($re, $linea, $matches, PREG_SET_ORDER, 0);

// Print the entire match result
var_dump($matches);
}



if ($boton9) {
	
$re = '/([1-9][0-7][0-5][0-9][0-9])/';


preg_match_all($re, $linea, $matches, PREG_SET_ORDER, 0);

// Print the entire match result
var_dump($matches);
	# code...
}
if ($boton10) {
	# code...

$re = '/http[s]?:(?:[a-zA-Z]|[0-9]|[$-_@.&+]|[!*\(\),]|(?:%[0-9a-fA-F][0-9a-fA-F]))+/';
preg_match_all($re, $linea, $matches, PREG_SET_ORDER, 0);

// Print the entire match result
var_dump($matches);

}
 ?>