<?php
class Person
{
  private $name;
  private $lastname;
  private $age;
  private $hp;
  private $mother;
  private $father;

  function __construct($name, $lastname, $age, $mother=null, $father=null)
  {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->mother = $mother;
    $this->father = $father;
    $this->hp = 100;
  }
  // function sayHi($name)
  // {
  //   return "Hi $name, I`m " . $this->name;
  // }
  function setHp($hp)
  {
    if ($this->hp + $hp > 100) $this->hp = 100;
    else $this->hp = $this->hp + $hp;
  }
  function getHp()
  {
    return $this->hp;
  }
  function getName() {
    return $this->name;
  }
  function getLastname() {
    return $this->lastname;
  }
  function getMother() {
    return $this->mother;
  }
  function getFather() {
    return $this->father;
  }

  function getInfo() {
    return
    "<h1>About my family</h1><br>"."My name is:".$this->getName().
    "<br>my lastname is: ".$this->getLastname().
    "<br>my father is: ".$this->getFather()->getName().
    "<br>my mother is: ".$this->getMother()->getName().
    "<br>my grandfather is: ".$this->getFather()->getFather()->getName().
    "<br>my grandmother is: ".$this->getFather()->getMother()->getName().
    "<br>my secondgrandfather is: ".$this->getMother()->getFather()->getName().
    "<br>my secondgrandmother is: ".$this->getMother()->getMother()->getName();
  }
}

//отец и мать алекса
$petr = new Person("Petr", "Ivanov", 65);
$rita = new Person("Rita", "Ivanova", 65);
//отец и мать ольги
$igor = new Person("Igor", "Petrov", 62);
$sveta = new Person("Sveta", "Petrova", 61);
//отец и мать валеры
$alex = new Person("Alex", "Ivanov", 42, $rita, $petr);
$olga = new Person("Olga", "Ivanova", 42, $sveta, $igor);
//сын
$valera = new Person("Valera", "Ivanov", 15, $olga, $alex);
// echo $valera->getMother()->getFather()->getName();
echo $valera->getInfo();


//$alex->name = "Alex";
//echo $alex->name;
//echo $alex->sayHi($igor->name);
//Здоровье человека не может быть более 100 ед.
// $medKit = 50;
// //$alex->hp = $alex->hp - 30; //Шел и упал
// $alex->setHp(-30);
// //echo $alex->hp . "<br>";
// echo $alex->getHp() . "<br>";
// //$alex->hp = $alex->hp + $medKit; //Нашел аптечку
// $alex->setHp($medKit);
// //echo $alex->hp;
// echo $alex->getHp();
