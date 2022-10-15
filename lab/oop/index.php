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








?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php') ?>