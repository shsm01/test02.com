<?php
const ONE = 1;

// Создаем новый класс Coor:
class Coor {
// данные (свойства):
var $name;
var $addr;

// методы:
 function Getname() {
    echo $this->name."<br>";
// echo "<h3>John</h3>";
 }

 function Setname($name) {
    $this->name = $name;
 }

}

class A {
     function example() {
         echo "Это первоначальная функция A::example().<br>";
     }
}

class B extends A {
     function example() {
         echo "Это переопределенная функция B::example().<br>";
         A::example();
     }
}

class Foo {
    // С версии PHP 7.1.0
//    public const BAR = 'bar';
//    private const BAZ = 'baz';
    // С версии PHP 5.6.0
    const TWO = ONE * 2;
    const THREE = ONE + self::TWO;
    const SENTENCE = 'The value of THREE is '.self::THREE;
}

echo ONE."<br>";
echo Foo::TWO, PHP_EOL."<br>";
echo Foo::THREE, PHP_EOL."<br>";
echo Foo::SENTENCE, PHP_EOL."<br>";
// echo Foo::BAR, PHP_EOL;
// echo Foo::BAZ, PHP_EOL;

// Не нужно создавать объект класса A.
// Выводит следующее: 
// Это первоначальная функция A::example().
A::example();

// Создаем объект класса B.
$b = new B;

$b->example();

// Создаем объект класса Coor:
$object = new Coor;

// Получаем доступ к членам класса:
// $object->name = "Alex";

$object->Setname("Nick");
echo $object->name."<br>";
// Выводит 'Alex'

// А теперь получим доступ к методу класса (фактически, к функции внутри класса):
$object->Getname();
// Выводит 'John' заглавными буквами
?>