<?php
// CHANGE THESE VARIABLES - learn more at /docs/template/
$title = "lab/oop Title"; // Title of this lab/oop page.
$metadesc = ""; // The meta description for this lab/oop page.
$site = "lab/oop"; // All pages within the lab/oop site share this.
$page = "lab/oop-home"; // Unique value for this page on the lab/oop site. 
// Optional Overrides - leave them empty if not using them.
$titleoverride = ""; // Define something other than $title | $sitename (see above and /includes/functions.php)
$socialimageoverride = ""; // Define something unique for this page. (see /includes/lab/oop/functions.php and /includes/functions.php)
require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php'); // This calls the main functions file, which calls the site functions file and the header.
?>

<?php

// PHP OOP Classes / Objects
// Following along at: https://www.w3schools.com/php/php_oop_classes_objects.asp

// class Fruit { 
//   // Properties (variables)
//   public $name;
//   public $color;

//   // Methods (functions)
//   function set_name($name) { 
//     $this->name = $name;
//   }
//   function get_name() { 
//     return $this->name;
//   }
//   function set_color($color) { 
//     $this->color = $color;
//   }
//   function get_color() { 
//     return $this->color;
//   }
// }

// $apple = new Fruit();
// $banana = new Fruit();
// $apple->set_name('Apple');
// $apple->set_color('Red');
// $banana->set_name('Banana');

// echo $apple->get_name();
// echo "<br>";
// echo "Color: " . $apple->get_color();
// echo "<br>";
// echo $banana->get_name();
// echo "<br>";

// $apple->name = "Frederick";
// echo $apple->name;
// echo "<br>";
// // Does Apple object belong to Fruit class?
// // This var_dump | instanceof will tell us.
// var_dump($apple instanceof Fruit);

// echo "<br>";

//
//
//

// PHP OOP Constructor
// Following along at: https://www.w3schools.com/php/php_oop_constructor.asp

// class Fruit { 
//   public $name;
//   public $color;

//   function __construct($name, $color) { 
//     $this->name = $name;
//     $this->color = $color;
//   }
//   function get_name() {
//     return $this->name;    
//   }
//   function get_color() {
//     return $this->color;
//   }
// }

// $apple = new Fruit("Apple", "red");
// echo $apple->get_name();
// // echo "<br>";
// echo "<hr align=\"left\" style=\"width:25%;\">";
// // echo "<br>";
// echo $apple->get_color();

//
//
//

// PHP OOP Destructor
// Following along at: https://www.w3schools.com/php/php_oop_destructor.asp

// class Fruit {
//   public $name;
//   public $color;

//   function __construct($name, $color) {
//     $this->name = $name;
//     $this->color = $color;
//   }
//   function __destruct() {
//     echo "The fruit's name is {$this->name} and its color is a pleasant {$this->color}.";
//   }
// }

// $apple = new Fruit("Apple", "red");

//
//
//

// PHP OOP Access Modifiers
// Following along at: https://www.w3schools.com/php/php_oop_access_modifiers.asp

// class Fruit {
//   public $name;
//   // protected $color;
//   // private $weight;
// }

// $mango = new Fruit();
// $mango->name = 'Mango'; // OK
// // $mango->color = 'Yellow'; // ERROR
// // $mango->weight = '300'; // ERROR


// class Fruit {
//   public $name;
//   public $color;
//   public $weight;

//   function set_name($n) {  // a public function (default)
//     $this->name = $n;
//   }
//   protected function set_color($n) { // a protected function
//     $this->color = $n;
//   }
//   private function set_weight($n) { // a private function
//     $this->weight = $n;
//   }
// }

// $mango = new Fruit();
// $mango->set_name('Mango'); // OK
// // $mango->set_color('Yellow'); // ERROR
// // $mango->set_weight('300'); // ERROR

//
//
//

// PHP OOP Inheritance
// Following along here: https://www.w3schools.com/php/php_oop_inheritance.asp

// class Fruit {
//   public $name;
//   public $color;
//   public function __construct($name, $color) { 
//     $this->name = $name;
//     $this->color = $color;
//   }
//   protected function intro() { 
//     echo "The fruit's name is {$this->name} and the color is {$this->color}.";
//   }
// }

// // Strawberry class is inherited from Fruit
// class Strawberry extends Fruit { 
//   public function message() { 
//     echo "Am I a fruit or a berry? ";
//     echo "<br>";
//     $this -> intro(); // Call protected method from within derived class - OK
//   }
// }

// // Now that intro function is protected, try the following:
// $strawberry = new Strawberry("Strawberry", "red-white"); // OK. __construct() is public
// $strawberry->message(); // OK. message() is public
// // $strawberry->intro(); // Error. intro() is protected now.

//

// Overriding Inherited Methods

// class Fruit {
//   public $name;
//   public $color;
//   public function __construct($name, $color) {
//     $this->name = $name;
//     $this->color = $color;
//   }
//   public function intro() {
//     echo "The fruit is {$this->name} and the color is {$this->color}.";
//   }
// }

// class Strawberry extends Fruit {
//   public $weight;
//   public function __construct($name, $color, $weight) {
//     $this->name = $name;
//     $this->color = $color;
//     $this->weight = $weight;
//   }
//   public function intro() {
//     echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
//   }
// }

// $strawberry = new Strawberry("Strawberry", "red-white", 500);
// $strawberry->intro();

//

// The FINAL keyword

// Don't want classes extending other classes and methods overriding parent methods? 

// final class Fruit {
//   // some code
// }

// // will result in error - because you cant extend FINAL classes.
// class Strawberry extends Fruit {
//   // some code
// }

// class Fruit {
//   final public function intro() {
//     // some code
//   }
// }

// class Strawberry extends Fruit {
//   // will result in error - you can't override a final function (method).
//   public function intro() {
//     // some code
//   }
// }

//
//
//

// PHP OOP Class Constants
// Following along here: https://www.w3schools.com/php/php_oop_constants.asp

// class Goodbye {
//   const LEAVING_MESSAGE = "Thank yoy for visiting W3Schools!";
// }

// echo Goodbye::LEAVING_MESSAGE;

// class Goodbye {
//   const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
//   public function byebye() {
//     echo self::LEAVING_MESSAGE;
//   }
// }

// $goodbye = new Goodbye();
// $goodbye->byebye();

//
//
//

// PHP OOP Abstract Classes
// Following along here: https://www.w3schools.com/php/php_oop_classes_abstract.asp

// abstract class ParentClass {
//   abstract public function someMethod1();
//   abstract public function someMethod2($name, $color);
//   abstract public function someMethod3() : string;
// }

// Example

// Parent class
// abstract class Car {
//   public $name;
//   public function __construct($name) {
//     $this->name = $name;
//   }
//   abstract public function intro() : string; 
// }

// // Child classes
// class Audi extends Car {
//   public function intro() : string {
//     return "Choose German quality! I'm an $this->name!"; 
//   }
// }

// class Volvo extends Car {
//   public function intro() : string {
//     return "Proud to be Swedish! I'm a $this->name!"; 
//   }
// }

// class Citroen extends Car {
//   public function intro() : string {
//     return "French extravagance! I'm a $this->name!"; 
//   }
// }

// // Create objects from the child classes
// $audi = new Audi("Audi");
// echo $audi->intro();
// echo "<br>";

// $volvo = new Volvo("Volvo");
// echo $volvo->intro();
// echo "<br>";

// $citroen = new Citroen("Citroen");
// echo $citroen->intro();

// More Abstract Class Examples
// An example where the abstract method has an argument:

// abstract class ParentClass
// {
//   // Abstract method with an argument
//   abstract protected function prefixName($name);
// }

// class ChildCLass extends ParentClass {
//   public function prefixName($name) {
//     if ($name == "John Doe") {
//       $prefix = "Mr.";
//     } elseif ($name == "Jane Doe") {
//       $prefix = "Mrs.";
//     } else {
//       $prefix = "Yer Majesty";
//     }
//     return "{$prefix} {$name}";
//   }
// }

// $class = new ChildClass;
// echo $class->prefixName("John Doe");
// echo "<br>"; 
// echo $class->prefixName("Jane Doe");

//

// Another example where the abstract method has an argument, and the child class has two optional arguments that are not defined in the parent's abstract method:

// abstract class ParentClass
// {
//   // Abstract method with an argument
//   abstract protected function prefixName($name);
// }

// class ChildCLass extends ParentClass
// {
//   // The child class may define optional arguments that are not in the parent's abstract method
//   public function prefixName($name, $separator = ".", $greet = "Dear")
//   {
//     if ($name == "John Doe") {
//       $prefix = "Mr";
//     } elseif ($name == "Jane Doe") {
//       $prefix = "Mrs";
//     } else {
//       $prefix = "";
//     }
//     return "{$greet} {$prefix}{$separator} {$name}";
//   }
// }

// $class = new ChildClass;
// echo $class->prefixName("John Doe");
// echo "<br>"; 
// echo $class->prefixName("Jane Doe");

// 
//
//

// PHP OOP Interfaces
// Following along at: https://www.w3schools.com/php/php_oop_interfaces.asp

// Interfaces cannot have properties, while abstract classes can.
// All interface methods must be public, while abstract class methods is public or protected.
// All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
// Classes can implement an interface while inheriting from another class at the same time

// interface Animal {
//   public function makeSound();
// }

// class Cat implements Animal { 
//   public function makeSound() { 
//     echo "Meow";
//   }  
// }

// $animal = new Cat();
// $animal->makeSound();

//

// // Interface definition
// interface Animal {
//   public function makeSound();
// }

// // Class definitions
// class Cat implements Animal {
//   public function makeSound() {
//     echo "Meow<br>" . PHP_EOL;
//   }
// }

// class Dog implements Animal {
//   public function makeSound() {
//     echo "Bark<br>" . PHP_EOL;
//   }
// }

// class Mouse implements Animal {
//   public function makeSound() {
//     echo "Squeak<br>" . PHP_EOL;
//   }
// }

// // Create a list of animals
// $cat = new Cat();
// $dog = new Dog();
// $mouse = new Mouse();
// $animals = array($cat, $dog, $mouse);

// // Tell the animals to make a sound
// foreach($animals as $animal) {
//   $animal->makeSound();
// }

//
//
//

// PHP OOP What are Traits? 
// Following along here: https://www.w3schools.com/php/php_oop_traits.asp

// trait TraitName
// {
//   // some code ...
// }

// class MyClass
// {
//   use TraitName;
// }

//

// trait message1
// {
//   public function msg1()
//   {
//     echo "OOP is fun! ";
//   }
// }

// class Welcome { 
//   use message1;
// }

// $obj = new Welcome();
// $obj->msg1();

//

// trait message1 {
//   public function msg1() {
//     echo "OOP is fun! ";
//   }
// }

// trait message2 {
//   public function msg2() {
//     echo "OOP reduces code duplication!";
//   }
// }

// class Welcome {
//   use message1;
// }

// class Welcome2 {
//   use message1, message2;
// }

// $obj = new Welcome();
// $obj->msg1();
// echo "<br>";

// $obj2 = new Welcome2();
// $obj2->msg1();
// echo "<br>";
// $obj2->msg2();

//
//
//

// PHP OOP Static Methods
// Following along at: https://www.w3schools.com/php/php_oop_static_methods.asp

// class ClassName {
//   public static function staticMethod() {
//     echo "Hello World!";
//   }
// }

// ClassName::staticMethod();

//

// class greeting {
//   public static function welcome() {
//     echo "Hello World!";
//   }
// }

// // Call static method
// greeting::welcome();


// class greeting {
//   public static function welcome() {
//     echo "Hello World!";
//   }

//   public function __construct() {
//     self::welcome();
//   }
// }

// new greeting();

// Call static method
// greeting::welcome();

// class greeting
// {
//   public static function welcome()
//   {
//     echo "Hello World! To you and All";
//   }
// }

// class SomeOtherClass
// {
//   public function message()
//   {
//     greeting::welcome();
//   }
//   public function __construct()
//   {
//     self::message();
//   }
// }

// new SomeOtherClass();

// Calling a static method from a child class by using the parent keyword inside the child class.

// class domain {
//   protected static function getWebsiteName() {
//     return "W3Schools.com";
//   }
// }

// class domainW3 extends domain {
//   public $websiteName;
//   public function __construct() {
//     $this->websiteName = parent::getWebsiteName();
//   }
// }

// $domainW3 = new domainW3;
// echo $domainW3 -> websiteName;

//
//
//

// PHP OOP Static Properties
// Following along at: https://www.w3schools.com/php/php_oop_static_properties.asp

// Static properties can be called directly - without creating an instance of a class.

// class ClassName {
//   public static $staticProp = "Huh";
// }

// echo ClassName::$staticProp;

// echo "<br><br><br>";

// class pi {
//   public static $value = 3.14159;
// }

// // Get static property
// echo pi::$value;

//

// class pi {
//   public static $value=3.14159;
//   public function staticValue() {
//     return self::$value;
//   }
// }

// $pi = new pi();
// echo $pi->staticValue();

//

// class pi {
//   public static $value=3.14159;
// }

// class x extends pi {
//   public function xStatic() {
//     return parent::$value;
//   }
// }

// // Get value of static property directly via child class
// echo x::$value;

// echo "<br><br><br>";

// // or get value of static property via xStatic() method
// $x = new x();
// echo $x->xStatic();

//
//
//

// PHP OOP Namespaces
// Following along here: https://www.w3schools.com/php/php_namespaces.asp

// Syntax: Declare a namespace

// namespace Html;

// namespace Won't work here because it isn't the first thing in a blank php document.

// Please turn your hymnals to page 2, /lab/oop/namespace.php

// See bottom of this document for link there. 

//
//
//

// PHP OOP Iterables
// Following along at: https://www.w3schools.com/php/php_iterables.asp

// Example: Use an iterable function argument:

// function printIterable(iterable $myIterable) {
//   foreach($myIterable as $item) {
//     echo $item;
//   }
// }

// $arr = ["a", "b", "c"];
// printIterable($arr);

// // Example: Return an iterable:

// function getIterable():iterable {
//   return ["a", "b", "c"];
// }

// $myIterable = getIterable();
// foreach($myIterable as $item) {
//   echo $item;
// }

// All arrays are iterables.


// Create an Iterator
// class MyIterator implements Iterator {
//   private $items = [];
//   private $pointer = 0;

//   public function __construct($items) {
//     // array_values() makes sure that the keys are numbers
//     $this->items = array_values($items);
//   }

//   public function current() {
//     return $this->items[$this->pointer];
//   }

//   public function key() {
//     return $this->pointer;
//   }

//   // vs code throws an error here
//   public function next() {
//     $this->pointer++;
//   }

//   // vs code throws an error here
//   public function rewind() {
//     $this->pointer = 0;
//   }

//   // vs code throws an error here
//   public function valid() {
//     // count() indicates how many items are in the list
//     return $this->pointer < count($this->items);
//   }
// }

// // A function that uses iterables
// function printIterable(iterable $myIterable) {
//   foreach($myIterable as $item) {
//     echo $item;
//   }
// }

// // Use the iterator as an iterable
// $iterator = new MyIterator(["a", "b", "c"]);
// printIterable($iterator);

// Link to Namespace page, where a little more is.

// echo "<br><br><br><br>" . PHP_EOL;
// echo "<hr>" . PHP_EOL;
// echo "<h2>See more</h2>" . PHP_EOL;
// echo "<a href=\"/lab/oop/namespace.php\" title=\"Click here to visit namespace page\">Namespace</a>";

//
//
//

// Learn OOP PHP by building a complete website tutorial
// Following along at https://www.eduonix.com/new_dashboard/learn-object-oriented-php-by-building-a-complete-website

// $numbers = array(12, 24, 35, 21, 245); // an array
// $numbers = [12, 24, 35, 21, 245]; // also an array

// print_r($numbers);

// echo $numbers[5]; // error

// echo $numbers[4]; // 245

// $ages = array(
//   "John" => 35,
//   "Mary" => 27,
//   "Bob" => 55
// );

// echo $ages['Mary']; // 27

// echo count($ages); // 3

// echo '<br><br>';

// array_pop($ages); // removes the last pair in the array

// print_r($ages); // Only prints pairs for John and Mary

// echo '<br><br>';


// array_shift($ages); // removes the first pair in the array - only Mary remains ...

// print_r($ages); // Only prints pairs for John and Mary

// basic for loop. Set variable to 0. Run as long as less than 5. Increment by one each time.
// for ($i = 0;$i < 5;$i++){
//   echo $i;
// }

// while loop. Variable outside the loop. Echo each number add one; loop again.
// $i = 0;
// while($i <= 10){
//   echo 'Number '.$i.'<br />';
//   $i++;
// }

// $numbers = array(12, 24, 35, 21, 245);

// // foreach loops are only used for arrays!
// foreach ($numbers as $number) {
//   echo 'This is number ' . $number . '<br>';
// }


// // This is an associative array:
// $ages = array(
//   "John" => 35,
//   "Mary" => 27,
//   "Bob" => 55
// );

// // foreach with an associative array:
// foreach ($ages as $age) {
//   echo $age . '<br>';
// }

// // // This is an associative array:
// $ages = array(
//   "John" => 35,
//   "Mary" => 27,
//   "Bob" => 55
// );

// // foreach with an associative array:
// foreach ($ages as $name => $age) {
//   echo $name . ' is ' . $age . ' years old<br>';
// }

//
//
//

// OK. Actually, let's skip to ...
//
// Learn OOP PHP by building a complete website tutorial
// Section 6: PHP Project - Part 1
// Following along at: https://www.eduonix.com/new_dashboard/learn-object-oriented-php-by-building-a-complete-website
// We are building an app. It is called Shareboard. 
// Share resources to articles with registration, login. 
// MVC OOP PHP.

// MODEL -> Updates -> VIEW -> Sees -> USER -> Uses -> CONTROLLER -> Manipulates -> MODEL

// Added new directory /lab/shareboard/ for this project.

// Need to commit this; left off at 17:51 on video for Section 6: PHP Project - Part 1




?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php') ?>