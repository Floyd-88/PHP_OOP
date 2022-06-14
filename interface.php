
<!-- Сделайте класс Disk (круг), реализующий интерфейс Figure. -->
<?php
interface Figure
{
    public function getSquare();
    public function getPerimeter();
}

class Disk implements Figure
{
    private $r;

    public function __construct($r) {
        $this->r = $r;
    }

    public function getSquare() {
        return 3.14 * $this->r * $this->r;
    }
    public function getPerimeter() {
        return 2 * 3.14 * $this->r;
    }
}
$disk = new Disk(4);
echo $disk->getSquare() . '<br>';
echo $disk->getPerimeter() . '<br>';

?>

<br>
<br>
<!-- Не подсматривая в мой код реализуйте такой же класс FiguresCollection. -->
<?php
class Quadrate implements Figure
{
    private $a;

    public function __construct($a) {
        $this->a = $a;
    }

    public function getSquare() {
        return $this->a * $this->a;
    }
    public function getPerimeter() {
        return 4 * $this->a;
    }
}
$quadrate = new Quadrate(5);
echo $quadrate->getSquare() . '<br>';
echo $quadrate->getPerimeter() . '<br>';
?>


<!-- Добавьте в класс FiguresCollection метод getTotalPerimeter для нахождения суммарного периметра всех фигур. -->

<?php
class FiguresCollection 
{
    private $figures = [];

    public function addFigure(Figure $figure) {
        $this->figures[] = $figure;
    }

    public function getTotalSquare() {
        $sum = 0;

        foreach ($this->figures as $elem) {
            $sum +=$elem->getSquare();
        }
        return $sum;
    }
    public function getTotalPerimeter() {
        $sum = 0;

        foreach($this->figures as $elem) {
            $sum += $elem->getPerimeter();
        }
        return $sum;
    }
}

$figuresCollection = new FiguresCollection;
$figuresCollection->addFigure(new Quadrate(4));
$figuresCollection->addFigure(new Quadrate(5));
$figuresCollection->addFigure(new Quadrate(6));
echo $figuresCollection->getTotalSquare() . '<br>';
echo $figuresCollection->getTotalPerimeter();
?>


<br>
<br>
<!-- Пусть у нас дан такой интерфейс iUser:
Сделайте класс User, который будет реализовывать данный интерфейс. -->
<?php
	interface iUser
	{
		public function setName($name); // установить имя
		public function getName();      // получить имя
		public function setAge($age);   // установить возраст
		public function getAge();       // получить возраст
	}

class User implements iUser
{
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    public function getName() {
        return $this->name;
    }
    public function getAge() {
        return $this->age;
    }

    public function setName($name) {
        return $this->name = $name;
    }
    public function setAge($age) {
        return $this->age = $age;
    }
}

$user = new User('Jon', 33);
echo $user->getName() . '<br>';
echo $user->getAge() . '<br>';
$user->setName('Oleg');
$user->setAge(30);
echo $user->getName() . '<br>';
echo $user->getAge() . '<br>';
?>

<!-- Сделайте интерфейс iCube, который будет описывать фигуру Куб. Пусть ваш интерфейс описывает конструктор, параметром принимающий сторону куба, а также методы для получения объема куба и площади поверхности. -->

<?php
interface iCube
{
    public function __construct($a);
    public function valueCube();
    public function squareCube();
}

// Сделайте класс Cube, реализующий интерфейс iCube.
class Cube implements iCube
{
    private $a;

    public function __construct($a) {
        $this->a = $a;
    }
    public function valueCube(){
        return $this->a * $this->a * $this->a; 
    }
    public function squareCube() {
        return $this->a * $this->a;
    }
}

$cube = new Cube(4);
echo $cube->valueCube() . '<br>';
echo $cube->squareCube() . '<br>';
?>

<br>
<br>
<!-- Сделайте интерфейс iUser, который будет описывать юзера. Предполагается, что у юзера будет имя и возраст и эти поля будут передаваться параметрами конструктора. Пусть ваш интерфейс также задает то, что у юзера будут геттеры (но не сеттеры) для имени и возраста. -->
<?php
	interface iUser2
	{
        public function __construct($name, $age); 
		public function getName();      // получить имя
		public function getAge();       // получить возраст
	}

class User2 implements iUser2
{
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    public function getName() {
        return $this->name;
    }
    public function getAge() {
        return $this->age;
    }
}

$user = new User('Kon', 40);
echo $user->getName() . '<br>';
echo $user->getAge() . '<br>';
?>

<br>
<br>
<!-- Сделайте интерфейс iUser с методами getName, setName, getAge, setAge. -->
<?php
interface iUser3
{
    public function setName($name); // установить имя
    public function getName();      // получить имя
    public function setAge($age);   // установить возраст
    public function getAge();       // получить возраст
}

// Сделайте интерфейс iEmployee, наследующий от интерфейса iUser и добавляющий в него методы getSalary и setSalary.
interface iEmployee extends iUser3
{
    public function getSalary();
    public function setSalary($salary);
}

// Сделайте класс Employee, реализующий интерфейс iEmployee.
class Employee implements iEmployee 
{
    private $name;
    private $age;
    private $salary;

    public function getSalary() {
        return $this->salary;
    }
    public function getName() {
        return $this->name;
    }
    public function getAge() {
        return $this->age;
    }
    public function setSalary($salary) {
        $this->salary = $salary;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function setAge($age) {
        $this->age = $age;
    }
}

$employee = new Employee;
$employee->setSalary(100);
$employee->setName('Kit');
echo $employee->getSalary();
echo $employee->getName();

?>

<br>
<br>
<!-- Сделайте интерфейс Figure3d (трехмерная фигура), который будет иметь метод getVolume (получить объем) и метод getSurfaceSquare (получить площадь поверхности). -->
<?php
interface Figure3d
{
    public function getVolume();
    public function getSurfaceSquare();
}

// Сделайте класс Cube, который будет реализовывать интерфейс Figure3d.
class Cube2 implements Figure3d 
{
    private $a;
    
    public function __construct($a) {
        $this->a = $a;
    }

    public function getVolume() {
        return $this->a * $this->a * $this->a;
    }
    public function getSurfaceSquare() {
        return $this->a * $this->a;
    }

}
?>

<!-- Создайте несколько объектов класса Quadrate, несколько объектов класса Rectangle и несколько объектов класса Cube. Запишите их в массив $arr в случайном порядке. -->
<?php
$arr = [new Cube2(4), new Cube2(8), new Quadrate(10), new Quadrate(5)];

// Переберите циклом массив $arr и выведите на экран только площади объектов реализующих интерфейс iFigure.
foreach($arr as $elem) {
    if($elem instanceof  Figure) {
        echo $elem->getSquare() . '<br>';
    }
}

// Переберите циклом массив $arr и выведите для плоских фигур их площади, а для объемных - площади их поверхности.
foreach($arr as $elem) {
    if($elem instanceof  Figure) {
        echo $elem->getSquare() . '<br>';
    }
    if($elem instanceof  Figure3d) {
        echo $elem->getSurfaceSquare() . '<br>';
    }
}
?>

<!-- Сделайте так, чтобы класс Rectangle также реализовывал два интерфейса: и iFigure, и iTetragon. -->
<?php
interface iFigure
{
    public function getSquare();
    public function getPerimeter();
}

interface iTetragon
{
    public function getA();
    public function getB();
    public function getC();
    public function getD();
}

class Rectangle implements iFigure, iTetragon
{
    private $a;
    private $b;

    public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }
    public function getSquare() {
        return $this->a * $this->b;
    }
    public function getPerimeter() {
        return 2*($this->a + $this->b);
    }

    public function getA() {
        return $this->a;
    }
    public function getB() {
        return $this->b;
    }
    public function getC() {
        return $this->a;
    }
    public function getD() {
        return $this->b;
    }
}
?>

<!-- Сделайте интерфейс iCircle с методами getRadius и getDiameter. -->

<?php
interface iCircle
{
    public function getRadius();
    public function getDiameter();
}

// Сделайте так, чтобы класс Disk также реализовывал два интерфейса: и iFigure, и iCircle.
class Disk2 implements iFigure, iCircle
{
    private $radius;
    private $diametr;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getRadius() {
        return  $this->radius; 
    }
    public function getDiameter() {
        return  2 * $this->radius; 
    }
    public function getSquare() {
        return 3.14 * $this->radius * $this->radius;
    }
    public function getPerimeter() {
        return 2 * 3.14 * $this->radius;
    }
}
$disk = new Disk2(4);
echo $disk->getRadius() . '<br>';
echo $disk->getDiameter() . '<br>'; 
echo $disk->getSquare() . '<br>';
echo $disk->getPerimeter() . '<br>';
?>

<br>
<br>
<!-- Скопируйте код моего класса Employee и код интерфейса iProgrammer. Не копируйте мою заготовку класса Programmer - не подсматривая в мой код реализуйте этот класс самостоятельно. -->
<?php
	class Employee3
	{
		private $name;
		private $salary;
		
		public function __construct($name, $salary)
		{
			$this->name = $name;
			$this->salary = $salary;
		}
		
		public function getName()
		{
			return $this->name;
		}
		
		public function getSalary()
		{
			return $this->salary;
		}
	}
?>
<?php
	interface iProgrammer
	{
		public function __construct($name, $salary);
		public function getName();
		public function getSalary();
		public function getLangs();
		public function addLang($lang);
	}

    class Programmer extends Employee3 implements iProgrammer
    {
        private $langs = [];

        public function getLangs() {
            return $this->langs;
        }
        public function addLang($lang) {
            $this->langs[] = $lang;
        }
    }
    $programmer = new Programmer('Kolt', 1000);
    $programmer->addLang('JS');
    $programmer->addLang('PHP');
    echo $programmer->getName() . '<br>';
    echo $programmer->getSalary() . '<br>';
    var_dump($programmer->getLangs());
?>

<br>
<br>
<!-- Сделайте класс Sphere, который будет реализовывать интерфейс iSphere. -->
<?php
interface iSphere
{
    const PI = 3.14;

    public function __construct($radius);
    public function getVolume();
    public function getSquare();
}

class Sphere implements iSphere
{
    private $radius;

    public function __construct($radius){
        $this->radius = $radius;
    }

    public function getVolume(){
        return (4*self::PI*$this->radius*$this->radius*$this->radius)/3;
    }
    public function getSquare(){
        return self::PI * $this->radius * $this->radius;
    }
}
$sphere = new Sphere(10);
echo $sphere->getVolume() . '<br>';
echo $sphere->getSquare() . '<br>';
?>

<br>
<br>
<!-- Пусть у вас есть интерфейс iTest1 и нет интерфейса iTest2.
Проверьте, что выведет функция interface_exists для интерфейса iTest1 и для интерфейса iTest2. -->
<?php
interface iTest1
{

}
var_dump(interface_exists(iTest1));
echo '<br>';
var_dump(interface_exists(iTest2));
?>

<br>
<br>
<!-- Выведите на экран список всех объявленных интерфейсов. -->
<?php
echo '<pre>';
print_r(get_declared_interfaces());
echo '</pre>';
?>