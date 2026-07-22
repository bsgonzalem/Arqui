<?php

echo "<h1>Curso de PHP</h1>";
echo "<hr>";

/* ===========================
   VARIABLES
=========================== */

$contador = 2;
$contador2 = 2;
$integer = 1;
$float = 1.5;
$isTrue = true;

$arrayColores = ["Rojo", "Verde", "Azul"];

echo "<h2>Variables</h2>";
echo "Entero: $integer <br>";
echo "Decimal: $float <br>";

if ($isTrue) {
    echo "Color: {$arrayColores[0]} <br>";
    echo "Es verdadero <br>";
}

/* ===========================
   VARIABLES GLOBALES
=========================== */

$global = "Soy la variable global";

function variablesGlobales()
{
    $local = "Soy la variable local";

    echo "<h2>Variables Globales</h2>";
    echo $GLOBALS['global'] . "<br>";
    echo $local . "<br>";
}

variablesGlobales();

/* ===========================
   CONVERSIÓN DE TIPOS
=========================== */

echo "<h2>Conversión de tipos</h2>";

$variable = "20";

$suma = 20 + $variable;

echo "Suma: $suma <br>";

$int = (int) $variable;
echo "Casting: $int <br>";

$funcion = intval($variable);
echo "intval(): $funcion <br>";

echo "Tipo: " . gettype($variable) . "<br>";

/* ===========================
   ARRAYS
=========================== */

echo "<h2>Arrays</h2>";

$numeros = "1,2,3,4,5";

$arrayNumeros = explode(",", $numeros);

echo "<pre>";
print_r($arrayNumeros);
echo "</pre>";

$string = implode(" - ", $arrayColores);

echo $string . "<br>";

/* ===========================
   CONCATENACIÓN
=========================== */

echo "<h2>Concatenación</h2>";

$palabras = "Brayan";

$union = $palabras . " Gonzalez";

echo $union . "<br>";

$palabras .= " Gonzalez";

echo $palabras . "<br>";

echo "Hola de nuevo $palabras <br>";
echo "Hola de nuevo {$palabras} <br>";

/* ===========================
   OPERADORES DE COMPARACIÓN
=========================== */

echo "<h2>Comparación</h2>";

$numero1 = 12;
$numero2 = "12";

echo "<pre>";

var_dump($numero1 == $numero2);
var_dump($numero1 === $numero2);
var_dump($numero1 != $numero2);
var_dump($numero1 !== $numero2);

echo "</pre>";

/* ===========================
   OPERADORES ARITMÉTICOS
=========================== */

echo "<h2>Aritméticos</h2>";

$a = 15;
$b = 3;

echo "<pre>";

var_dump($a + $b);
var_dump($a - $b);
var_dump($a * $b);
var_dump($a / $b);
var_dump($a % $b);
var_dump($a ** $b);

echo "</pre>";

/* ===========================
   OPERADORES LÓGICOS
=========================== */

echo "<h2>Lógicos</h2>";

echo "<pre>";

var_dump((15 == 5) && (10 > 5));
var_dump((15 == 5) || (10 > 5));
var_dump(!(15 == 5));
var_dump((15 == 5) xor (10 > 5));

echo "</pre>";

/* ===========================
   CONDICIONALES
=========================== */

echo "<h2>Condicionales</h2>";

$a = 15;
$b = 5;

if ($a > $b) {
    echo "A es mayor que B <br>";
} else {
    echo "B es mayor que A <br>";
}

/* ===========================
   SWITCH
=========================== */

echo "<h2>Switch</h2>";

switch ($a) {
    case 5:
        echo "Vale 5";
        break;

    case 10:
        echo "Vale 10";
        break;

    case 15:
        echo "Vale 15";
        break;

    default:
        echo "Sin coincidencias";
}

/* ===========================
   BUCLE WHILE
=========================== */

echo "<h2>While</h2>";

$contador = 5;

while ($contador > 0) {
    echo "$contador <br>";
    $contador--;
}

/* ===========================
   BUCLE DO WHILE
=========================== */

echo "<h2>Do While</h2>";

$contador = 5;

do {
    echo "$contador <br>";
    $contador--;
} while ($contador > 0);

/* ===========================
   BUCLE FOR
=========================== */

echo "<h2>For</h2>";

for ($i = 1; $i <= 10; $i++) {
    echo "Número: $i <br>";
}

/* ===========================
   FOREACH
=========================== */

echo "<h2>Foreach</h2>";

$array = [1, 2, 3, 4, 5];

foreach ($array as &$valor) {
    $valor *= 2;
}

foreach ($array as $clave => $valor) {
    echo "[$clave] => $valor <br>";
}

/* ===========================
   ArrayIndexado
=========================== */
$color = "Morado";
$arrayIndexado = array(1,2,"hola",$color);

echo $arrayIndexado[3] . "<br>";
for($i = 0; $i < count($arrayIndexado); $i++){
    echo $arrayIndexado[$i] . "<br>";
}
/* ===========================
   ArrayAsociativo
=========================== */

$arrayAsociativo = array(
    "nombre" => "Brayan",
    "apellido" => "Gonzalez",
    "edad" => 20
);

echo $arrayAsociativo["nombre"] . "<br>";
echo $arrayAsociativo["apellido"] . "<br>";
echo $arrayAsociativo["edad"] . "<br>";

foreach($arrayAsociativo as $clave => $valor){
    echo "$clave => $valor <br>";
}

/* ===========================
   Matrices
=========================== */
$personas = array(
    array("Brayan", "Gonzalez", 20),
    array("Juan", "Perez", 30),
    array("Maria", "Lopez", 25)
); 

// Obtener valores de la matriz
for($i = 0; $i < count($personas); $i++){
    for($j = 0; $j < count($personas[$i]); $j++){
        echo $personas[$i][$j] . " ";
    }
    echo "<br>";
}

$JuegoBarco = array(
    'A' => array(" ", " ", " Barco2"),
    'B' => array("Barco ", " ", " "),
    'C' => array(" ", " ", " Barco3"),
    'D' => array(" ", " ", " "),
    'E' => array(" ", " ", " "),
);
foreach($JuegoBarco as $clave => $valor){
    for($indice=0; $indice < count($valor); $indice++){
        echo "Coordenadas ->" . $clave . "-" . $indice . " Valor ->" . $valor[$indice];
    }
    echo "<br>";
}
/* ===========================
   Funciones
=========================== */
function name(){
    echo "Hola soy Brayan";
}

$age = 18;
if($age <= 18){
    echo "Eres menor de edad";
    function party(){
        echo "Bienvenido a la fiesta";
    }
}

foo();
bar();

function foo(){
    function bar(){
        echo "Hola ya existo";
    }
}
/* ===========================
   ARGUMENTOS DE FUNCIONES
=========================== */

echo "<h2>Argumentos de funciones</h2>";

function saludar($nombre, $edad)
{
    echo "Hola $nombre, tienes $edad años.<br>";
}

saludar("Brayan", 20);
saludar("Juan", 25);


/* ===========================
   DEVOLVER VALORES
=========================== */

echo "<h2>Devolver valores</h2>";

function sumar($num1, $num2)
{
    return $num1 + $num2;
}

$resultado = sumar(15, 8);

echo "Resultado: $resultado <br>";

function obtenerNombre()
{
    return "Brayan";
}

$nombre = obtenerNombre();

echo "Nombre: $nombre <br>";


/* ===========================
   FUNCIONES VARIABLES Y ANÓNIMAS
=========================== */

echo "<h2>Funciones variables y anónimas</h2>";

function bienvenida()
{
    echo "Bienvenido al curso de PHP.<br>";
}

$funcion = "bienvenida";
$funcion();

$despedida = function ($nombre) {
    echo "Hasta luego $nombre <br>";
};

$despedida("Brayan");


/* ===========================
   DECLARACIONES DE TIPO ESCALAR
=========================== */

echo "<h2>Declaraciones de tipo escalar</h2>";

function multiplicar(int $a, int $b): int
{
    return $a * $b;
}

echo multiplicar(6, 5);
echo "<br>";

function promedio(float $n1, float $n2): float
{
    return ($n1 + $n2) / 2;
}

echo promedio(8.5, 9.5);
echo "<br>";

function esMayor(bool $valor): bool
{
    return $valor;
}

var_dump(esMayor(true));

echo "<br>";

function mostrarNombre(string $nombre): string
{
    return "Hola $nombre";
}

echo mostrarNombre("Brayan");
echo "<br>";


/* ===========================
   INTRODUCCIÓN A POO
=========================== */

echo "<h2>Introducción a POO</h2>";

class Persona
{
    public $nombre = "Brayan";
    public $edad = 20;

    public function presentarse()
    {
        echo "Mi nombre es $this->nombre y tengo $this->edad años.<br>";
    }
}


/* ===========================
   CLASE
=========================== */

echo "<h2>Clase</h2>";

class Animal
{
    public $nombre;
    public $tipo;

    public function __construct($nombre, $tipo)
    {
        $this->nombre = $nombre;
        $this->tipo = $tipo;
    }

    public function mostrarDatos()
    {
        echo "Nombre: $this->nombre <br>";
        echo "Tipo: $this->tipo <br>";
    }
}


/* ===========================
   CREAR INSTANCIA
=========================== */

echo "<h2>Crear instancia</h2>";

$persona = new Persona();
$persona->presentarse();

$animal = new Animal("Firulais", "Perro");
$animal->mostrarDatos();


/* ===========================
   HERENCIA
=========================== */

echo "<h2>Herencia</h2>";

class Empleado extends Persona
{
    public $cargo = "Programador";

    public function mostrarCargo()
    {
        echo "Cargo: $this->cargo <br>";
    }
}

$empleado = new Empleado();

$empleado->presentarse();
$empleado->mostrarCargo();

/* ===========================
   INTRODUCCIÓN A COOKIE Y SESSION
=========================== */

echo "<h2>Introducción a Cookie y Session</h2>";

echo "Las sesiones almacenan información en el servidor.<br>";
echo "Las cookies almacenan información en el navegador del usuario.<br>";



/* ===========================
   SESSION
=========================== */

echo "<h2>Session</h2>";

// session_start(); // Debe ir al inicio del archivo

$_SESSION["usuario"] = "Brayan";
$_SESSION["rol"] = "Administrador";

echo "Usuario: " . $_SESSION["usuario"] . "<br>";
echo "Rol: " . $_SESSION["rol"] . "<br>";



/* ===========================
   COOKIE
=========================== */

echo "<h2>Cookie</h2>";

// setcookie("nombre", "Brayan", time() + 3600); // Debe ir antes de cualquier salida

echo "Ejemplo de creación de una cookie.<br>";



/* ===========================
   NAMESPACE
=========================== */

echo "<h2>Namespace</h2>";

echo "Los namespace permiten organizar el código y evitar conflictos entre clases.<br>";
echo "Generalmente se utilizan cuando un proyecto tiene muchos archivos.<br>";



/* ===========================
   CLASES ANÓNIMAS
=========================== */

echo "<h2>Clases anónimas</h2>";

$personaAnonima = new class {

    public $nombre = "Brayan";

    public function saludar()
    {
        echo "Hola soy $this->nombre desde una clase anónima.<br>";
    }
};

$personaAnonima->saludar();



/* ===========================
   CSPRNG E INTDIV
=========================== */

echo "<h2>CSPRNG e intdiv()</h2>";

echo "Número aleatorio seguro: ";

$numero = random_int(1, 100);

echo $numero . "<br>";

echo "División entera de 15 entre 4: ";

echo intdiv(15, 4);

echo "<br>";



/* ===========================
   SERIALIZE Y UNSERIALIZE
=========================== */

echo "<h2>Serialize y Unserialize</h2>";

$datos = array(
    "nombre" => "Brayan",
    "apellido" => "Gonzalez",
    "edad" => 20
);

$cadena = serialize($datos);

echo "Datos serializados:<br>";
echo $cadena . "<br><br>";

$datosOriginales = unserialize($cadena);

echo "Datos recuperados:<br>";

echo "<pre>";
print_r($datosOriginales);
echo "</pre>";



/* ===========================
   EJEMPLO FINAL
=========================== */

echo "<h2>Ejemplo Final</h2>";

$alumno = array(
    "nombre" => "Brayan",
    "edad" => 20,
    "carrera" => "Ingeniería de Sistemas"
);

$serialAlumno = serialize($alumno);

echo "Alumno serializado:<br>";
echo $serialAlumno . "<br><br>";

$recuperado = unserialize($serialAlumno);

foreach ($recuperado as $clave => $valor) {
    echo "$clave : $valor <br>";
}
?>
