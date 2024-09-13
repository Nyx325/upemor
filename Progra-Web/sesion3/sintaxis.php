<?php
$nombre = "Rubén";
$apellido = "Román";

// EOL proviene de End Of Line
// Concatenar
echo $nombre . " " . $apellido . PHP_EOL;
// O hacer una cadena compuesta (?)
echo "$nombre $apellido" . PHP_EOL;
// O especificar que van variables
echo "{$nombre} {$apellido}" . PHP_EOL;


// OPERADORES ARITMETICOS
echo "====================" . PHP_EOL; // Separar este apartado con una línea
echo "Operadores aritméticos" . PHP_EOL;
$num1 = 2;
$num2 = 3;

echo "Suma: " . ($num1 + $num2) . PHP_EOL;
echo "Resta: " . ($num1 - $num2) . PHP_EOL;
echo "Multiplicación: " . ($num1 * $num2) . PHP_EOL;
echo "División: " . ($num1 / $num2) . PHP_EOL;
echo "(num1+num2)/2 = " . (($num1 + $num2) / 2) . PHP_EOL;
echo "\$num1 = " . $num1 . PHP_EOL;
$num1++;
echo "\$num1++ = " . $num1 . PHP_EOL;
$num1--;
echo "\$num1-- = " . $num1 . PHP_EOL;
$num1 += 10;
echo "\$num1+=10 = " . $num1 . PHP_EOL;
$num1 -= 20;
echo "\$num1-=20 = " . $num1 . PHP_EOL;

echo "====================" . PHP_EOL; // Separador

// OPERADORES LÓGICOS
echo "Operadores lógicos" . PHP_EOL;
echo "Si imprimimos true, imprime 1: " . true . PHP_EOL;
echo "Si imprimimos false, no imprime nada: " . false . PHP_EOL;

// Si se omiten los parentesis pasan cosas raras
echo "Omitinedo parentesis en la siguiente linea: " . PHP_EOL;
echo "Algo " . true == false . PHP_EOL;

$a = true && false;
echo "true && false: " . ($a ? 'true' : 'false') . PHP_EOL;
$a = true and false;
echo "true and false: " . ($a ? 'true' : 'false') . PHP_EOL;
$a = true || false;
echo "true || false: " . ($a ? 'true' : 'false') . PHP_EOL;
$a = true or false;
echo "true or false: " . ($a ? 'true' : 'false') . PHP_EOL;
$a = true xor false;
echo "true xor false: " . ($a ? 'true' : 'false') . PHP_EOL;
$a = !true;
echo "!true: " . ($a ? 'true' : 'false') . PHP_EOL;
$a = 2 == "2";
echo "Comparacion con igual pero sin validar tipo" . PHP_EOL;
echo "2 == \"2\": " . ($a ? 'true' : 'false') . PHP_EOL;
$a = 2 === "2";
echo "Comparacion con igual pero validando tipo" . PHP_EOL;
echo "2 === \"2\": " . ($a ? 'true' : 'false') . PHP_EOL;
$a = 2 != "2";
echo "Comparacion con igual pero sin validar tipo" . PHP_EOL;
echo "2 != \"2\": " . ($a ? 'true' : 'false') . PHP_EOL;
$a = 2 !== "2";
echo "Comparacion con igual pero validando tipo" . PHP_EOL;
echo "2 !== \"2\": " . ($a ? 'true' : 'false') . PHP_EOL;
$a = 2 <= 2;
echo "2 <= 2: " . ($a ? 'true' : 'false') . PHP_EOL;
$a = 2 >= 2;
echo "2 >= 2: " . ($a ? 'true' : 'false') . PHP_EOL;

echo "====================" . PHP_EOL; // Separador

// ARRAYS
echo "Arrays" . PHP_EOL;
$arr = [1, 2, 3, 4];
echo "Imprimir indices: {$arr[0]}, {$arr[1]}, {$arr[2]}" . PHP_EOL;

echo "print_r(\$arr):" . PHP_EOL;
print_r($arr);

$arr = array(1, 2, 3, 4);
echo "Imprimir indices: {$arr[0]}, {$arr[1]}, {$arr[2]}" . PHP_EOL;

echo "var_dump(\$arr):" . PHP_EOL;
var_dump($arr);

echo "====================" . PHP_EOL; // Separador

// ESTRUCTURAS DE CONTROL
echo "Estructuras de control" . PHP_EOL;

echo "Sentencia if:" . PHP_EOL;
if (2 == 1) {
    echo "Realizar si true" . PHP_EOL;
} elseif (1 == 1) {
    echo "Realizar si se cumple la segunda condición" . PHP_EOL;
} else {
    echo "Realizar si false" . PHP_EOL;
}

echo "Sentencia switch:" . PHP_EOL;
$dia = "lunes";

switch ($dia) {
    case 'lunes':
        echo "Maldito lunes" . PHP_EOL;
        break;
    case 'viernes':
        echo "bendito viernes" . PHP_EOL;
        break;
    default:
        echo "Ya que sea viernes" . PHP_EOL;
        break;
}

echo "While:" . PHP_EOL;
$contador = 3;
while ($contador >= 1) {
    echo "Contador: {$contador}" . PHP_EOL;
    $contador--;
}

echo "Do while:" . PHP_EOL;
$contador = 1;
do {
    echo "Contador: {$contador}" . PHP_EOL;
    $contador++;
} while ($contador != 3);

echo "For:" . PHP_EOL;
for ($i = 0; $i <= 5; $i++) {
    echo "i: {$i}" . PHP_EOL;
}

echo "Foreach:" . PHP_EOL;
$coloresPrimarios = ["rojo", "amarillo", "azul"];
foreach ($coloresPrimarios as $color) {
    echo "Color: {$color}" . PHP_EOL;
}

echo "====================" . PHP_EOL; // Separador

// FUNCIONES
echo "Funciones" . PHP_EOL;

echo "Funcion normal:" . PHP_EOL;
function hacerAlgo()
{
    echo "Se imprime algo" . PHP_EOL;
}

hacerAlgo();

echo "Funcion con retorno:" . PHP_EOL;
function retornarAlgo($arg)
{
    if ($arg == 1) {
        return "Uno";
    } else {
        return 32;
    }
}

echo "Retorno: " . retornarAlgo(1) . PHP_EOL;
echo "Retorno: " . retornarAlgo("asdhsakh") . PHP_EOL;

echo "Funcion con valores por defecto:" . PHP_EOL;
function imprimirMensaje($arg = "Hello world")
{
    echo $arg . PHP_EOL;
}

imprimirMensaje();
imprimirMensaje("Cosas");

echo "Funcion con paso por referencia:" . PHP_EOL;
function incremento(&$var, $incremento = 1)
{
    $var += $incremento;
}

$a = 10;
echo "Var inicial {$a}" . PHP_EOL;
incremento($a);
echo "Var incremento 1: {$a}" . PHP_EOL;
incremento($a, 10);
echo "Var incremento 10: {$a}" . PHP_EOL;

// Si forzamos los tipos y mandamos un tipo erroneo
// por argumento, no continuará el script, en el
// navegador no va a mandar algun error (que yo viera)
// pero no continuará la ejecución
echo "Forzar tipos en funciones:" . PHP_EOL;
function sumar(int $a, int $b): int
{
    return $a + $b;
}

echo "Suma de 5 y 3: " . sumar(5, 3) . PHP_EOL;

echo "Funciones anónimas:" . PHP_EOL;
$suma = function ($a, $b) {
    return $a + $b;
};

echo "Llamado a funcion anónima desde variable: " . $suma(3, 4) . PHP_EOL;

echo "====================" . PHP_EOL; // Separador

// CLASES
echo "Clases" . PHP_EOL;

class Persona
{
    public $variable; //Definir un atributo sin tipo
    public int $edad; // Definit un atributo con tipo fijo que no puede ser null
    public ?bool $variable2; //Definir atributo con tipo que puede ser null
    private $otraCosa;

    // Los métodos que comienzan con dos guiones bajos son
    // métodos mágicos. Son métodos especiales que son 
    // invocados automáticamente por PHP en ciertas 
    // situaciones, sin necesidad de llamarlos explícitamente. 
    // Estos métodos permiten personalizar el comportamiento
    // de una clase en eventos específicos como la creación de
    // objetos, la clonación, la serialización, y más.
    public function __construct($variable, int $edad)
    {
        // si también definimos un atributo de cierto tipo
        // y asignamos uno que no corresponde, se detendrá
        // la ejcución. también tenemos el apuntador this,
        // y con la flecha se acceden a los atributos de
        // los objetos
        $this->variable = $variable;
        $this->edad = $edad;
        $this->otraCosa = "adhaksd";
        $this->variable2 = null;
    }

    //Definir métodos
    public function toString()
    {
        echo "persona->variable: " . $this->variable . PHP_EOL;
        echo "persona->edad: " . $this->edad . PHP_EOL;
        echo "persona->variable2: " . ($this->variable2 !== null ? 'true' : 'null') . PHP_EOL;
    }
}

$persona = new Persona(true, 30);
$persona->toString();

// PHP no soporta herencia múltiple, pero sí puede 
// implementar muchas interfaces

class Chambiador extends Persona {
    public float $sueldo;

    public function __construct($variable, int $edad, float $sueldo){
        //Parent es equivalente a super en java, llama al 
        //método o atributo de la clase padre
        parent::__construct($variable, $edad);
        $this->sueldo = $sueldo;
    }
}

abstract class Animal {
    // Método abstracto (debe implementarse en la clase hija)
    abstract public function hacerSonido();

    // Método concreto
    public function respirar() {
        echo "Estoy respirando...";
    }
}

interface Volador {
    public function volar();
}

interface Nadador {
    public function nadar();
}

class Pato implements Volador, Nadador {
    public function volar() {
        return "El pato está volando";
    }

    public function nadar() {
        return "El pato está nadando";
    }
}


echo "====================" . PHP_EOL; // Separador
echo "Try-Catch" . PHP_EOL;

try {
    // Código que podría generar una excepción
    $divisor = 0;
    if ($divisor == 0) {
        throw new Exception("División por cero no permitida.");
    }
    $resultado = 10 / $divisor;
} catch (Exception $e) {
    // Manejo de la excepción
    echo "Error: " . $e->getMessage();
} finally {
    echo "\nEjecución del bloque finally.";
}

try {
    // Código que puede lanzar diferentes excepciones
    if (rand(1, 2) == 1) {
        throw new InvalidArgumentException("Argumento no válido.");
    } else {
        throw new RuntimeException("Error en tiempo de ejecución.");
    }
} catch (InvalidArgumentException $e) {
    echo "Excepción de argumento: " . $e->getMessage();
} catch (RuntimeException $e) {
    echo "Excepción de tiempo de ejecución: " . $e->getMessage();
} finally {
    echo "\nFinalizando.";
}

// Definir una clase de excepción personalizada
class MiExcepcionPersonalizada extends Exception {
    // Puedes agregar métodos o propiedades personalizadas si lo deseas
}

// Función que lanza la excepción personalizada
function probarExcepcion($valor) {
    if ($valor <= 0) {
        throw new MiExcepcionPersonalizada("El valor debe ser mayor que cero.");
    }
    return $valor * 2;
}

try {
    echo probarExcepcion(5) . "\n";  // Funciona bien
    echo probarExcepcion(-1);        // Lanza la excepción
} catch (MiExcepcionPersonalizada $e) {
    // Manejo específico de la excepción personalizada
    echo 'Error capturado: ' . $e->getMessage() . "\n";
}


echo "====================" . PHP_EOL; // Separador
echo "Estructuras de datos" . PHP_EOL;

// Parecido a un hashmap
echo "Array asociativo" . PHP_EOL;
$arrayAsociativo = ["nombre" => "Ana", "edad" => 25];
echo $arrayAsociativo["nombre"] . PHP_EOL;  // Imprime "Ana"

echo "Pila" . PHP_EOL;
$stack = new SplStack();
$stack->push("A");
$stack->push("B");
echo $stack->pop();  // Imprime "B"
echo $stack->top();

echo "Cola" . PHP_EOL;
$queue = new SplQueue();
$queue->enqueue("A");
$queue->enqueue("B");
echo $queue->dequeue();  // Imprime "A"
echo $queue->bottom();  // Imprime "A", pero no lo elimina

// No entiendo bien su uso pero esto dice chatgpt:
// implementa una estructura de heap o montículo, 
// que es una estructura que mantiene un orden 
// parcial, útil para implementar colas de prioridad.
echo "\"Montículo o heap\"" . PHP_EOL;
$heap = new SplMinHeap();
$heap->insert(4);
$heap->insert(2);
$heap->insert(8);
echo $heap->extract();  // Imprime 2 (el menor)

echo "Lista doblemente enlazada" . PHP_EOL;
$list = new SplDoublyLinkedList();
$list->push("A");
$list->push("B");
$list->push("C");
echo $list->pop();  // Imprime "C"
echo $list->offsetGet(0);  // Imprime "A", pero no lo elimina

$obj1 = new stdClass;
$obj2 = new stdClass;

// es una estructura que permite almacenar objetos 
// únicos como claves en un conjunto, lo que es útil
// cuando quieres evitar duplicados de objetos.
$storage = new SplObjectStorage();
$storage->attach($obj1);
$storage->attach($obj2);
echo $storage->contains($obj1);  // Imprime 1 (true)

// Proporciona una forma de tratar un array como un
// objeto. Proporciona métodos y propiedades adicionales
// para manipular arrays de forma más controlada y
// orientada a objetos.
$array = new ArrayObject([1, 2, 3]);
$array->append(4);
echo $array[3];  // Imprime 4