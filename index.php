<?php
header('Location:interface.php')
?>

<!-- Сделайте класс Employee (работник), в котором будут следующие свойства - name (имя), age (возраст), salary (зарплата). -->

<?php
class Employee
{
    public $name;
    public $age;
    public $salary;
}
?>

<!-- Создайте объект класса Employee, затем установите его свойства в следующие значения - имя 'john', возраст 25, зарплата 1000. -->

<?php
$user1 = new Employee;
$user1 -> name = 'john';
$user1 -> age = 25;
$user1 -> salary = 1000;
?>

<!-- Создайте второй объект класса Employee, установите его свойства в следующие значения - имя 'eric', возраст 26, зарплата 2000. -->

<?php
$user2 = new Employee;
$user2 -> name = 'eric';
$user2 -> age = 26;
$user2 -> salary = 2000;
?>

<!-- Выведите на экран сумму зарплат созданных юзеров. -->

<?php
echo 'Сумма зарпалат двух сотрудников: ' . ($user1 -> salary + $user2 -> salary);
?>

<br>
<br>
<!-- Выведите на экран сумму возрастов созданных юзеров. -->
<?php
echo 'Сумма возрастов двух сотрудников: ' . ($user1 -> age + $user2 -> age);

?>

<br>
<br>
<!-- Не подсматривая в мой код реализуйте такой же класс User с методом show(). -->

<?php
class User 
{
    public $name;
    public $age;

    public function show($str) {
        return $str . "!!!";
    }
}

$user1 = new User;
$user1 -> name = 'Klark';
$user1 -> age = 25;

echo $user1 -> show('Hello, ' . $user1 -> name);
?>


<br>
<br>
<!-- Сделайте в классе Employee метод getName, который будет возвращать имя работника. -->
<!-- Сделайте в классе Employee метод getAge, который будет возвращать возраст работника. -->
<!-- Сделайте в классе Employee метод getSalary, который будет возвращать зарплату работника. -->
<!-- Сделайте в классе Employee метод checkAge, который будет проверять то, что работнику больше 18 лет и возвращать true, если это так, и false, если это не так. -->
<!-- Создайте два объекта класса Employee, запишите в их свойства какие-либо значения. С помощью метода getSalary найдите сумму зарплат созданных работников. -->
<?php
class Employee2
{
    public $name;
    public $age;
    public $salary;

    public function getName() {
        return $this -> name;
    }
    public function getAge() {
        return $this -> age;
    }
    public function getSalary() {
        return $this -> salary;
    }
    public function checkAge() {
        if($this -> age > 18) {
            return true;
        } else {
            return 0;
        }
    }
}

$user1 = new Employee2;
$user1 -> name = 'Leo';
$user1 -> age = 29;
$user1 -> salary = 1500;
echo $user1 -> getName() . " ";
echo $user1 -> getAge() . " ";
echo $user1 -> getSalary() . "<br>";
echo $user1 -> checkAge() . "<br>";

$user2 = new Employee2;
$user2 -> age = 17;
$user2 -> salary = 2000;
echo $user2 -> checkAge() . "<br>";

echo $user1 -> getSalary() + $user2 -> getSalary();
?>

<br>
<br>
<!-- Сделайте класс User, в котором будут следующие свойства - name и age. -->
<!-- Сделайте метод setAge, который параметром будет принимать новый возраст пользователя. -->
<!-- Модифицируйте метод setAge так, чтобы он вначале проверял, что переданный возраст больше или равен 18. Если это так - пусть метод меняет возраст пользователя, а если не так - то ничего не делает. -->
<?php
class User2
{
    public $name;
    public $age;

    public function setAge($age) {
        if($age >= 18) {
            $this -> age = $age;
        }
       
    }
}

// Создайте объект класса User с именем 'john' и возрастом 25. С помощью метода setAge поменяйте возраст на 30. Выведите новое значение возраста на экран.
$user = new User2;
$user -> name = 'john';
$user -> age = '25';
echo $user -> age . "<br>";

$user -> setAge(30);
echo $user -> age . '<br>';

$user -> setAge(18);
echo $user -> age;
?>

<br>
<br>
<!-- Сделайте класс Employee, в котором будут следующие свойства работника - name, salary. Сделайте метод doubleSalary, который текущую зарплату будет увеличивать в 2 раза. -->
<?php
class Employee3 
{
    public $name;
    public $salary;

    public function doubleSalary() {
        $this->salary *=  2;
    }
}

$user = new Employee3;
$user->salary = 1000;
echo $user->salary . "<br>";
$user->doubleSalary();
echo $user->salary . "<br>";
$user->doubleSalary();
echo $user->salary . "<br>";
?>

<br>
<br>
<!-- Сделайте класс Rectangle, в котором в свойствах будут записаны ширина и высота прямоугольника. -->
<!-- В классе Rectangle сделайте метод getSquare, который будет возвращать площадь этого прямоугольника.
 -->
 <!-- В классе Rectangle сделайте метод getPerimeter, который будет возвращать периметр этого прямоугольника. -->
 <?php
class Rectangle 
{
    public $width;
    public $height;

    public function getSquare() {
        return $this -> width * $this -> height;
    }
    public function getPerimeter() {
        return ($this -> width * 2) + ($this -> height * 2);
    }
}
$rectangle_1 = new Rectangle;
$rectangle_1->width = 20;
$rectangle_1->height = 30;

echo $rectangle_1->getSquare() . "<br>";
echo $rectangle_1->getPerimeter() . "<br>";
 ?>


<br>
<br>
 <!-- Не подсматривая в мой код создайте такой же класс User с такими же методами. -->
 <!-- Создайте объект этого класса User проверьте работу методов setAge и addAge. -->
 <!-- Добавьте также метод subAge, который будет выполнять уменьшение текущего возраста на переданное количество лет. -->
 <!-- Сделать isCorrectAge() приватным методом -->
 <!-- Попробуйте вызвать метод isAgeCorrect снаружи класса. Убедитесь, что это будет вызывать ошибку. -->
 <?php
class User4 
{
    public $age;

    public function addAge($age) {
       if($this->isCorrectAge($age)) {
        return $this->age = $age;
       }
    }

    public function setAge($years) {
        $newAge = $this->age + $years;
        if($this->isCorrectAge($newAge)) {
            return $this->age = $newAge;
        }
    }

    public function subAge($years) {
        $newAge = $this->age - $years;
        if($this->isCorrectAge($newAge)) {
            return $this->age = $newAge;
        }
    }

    private function isCorrectAge($age) {
        if($age >=18 and $age <= 60) {
            return true;
        } else {
            return false;
        }
    }
}
$user = new User4;
$user->addAge(40);
echo $user->age . "<br>";

$user->setAge(40);
echo $user->age . "<br>";

$user->subAge(22);
echo $user->age;

// $user->isCorrectAge(55);
 ?>
<br>
<br>
 <!-- Сделайте класс Student со свойствами $name и $course (курс студента, от 1-го до 5-го). -->
 <!-- В классе Student сделайте public метод transferToNextCourse, который будет переводить студента на следующий курс. -->
 <!-- Выполните в методе transferToNextCourse проверку на то, что следующий курс не больше 5. -->
 <!-- Вынесите проверку курса в отдельный private метод isCourseCorrect. -->
 <?php
class Student 
{
    public $name;
    public $course;

    public function transferToNextCourse() {
        $newCourse = $this->course + 1;
        if($this->isCourseCorrect($newCourse)) {
            return $this->course = $newCourse;
        }
    }
    private function isCourseCorrect($course) {
        if($course <= 5) {
            return true;
        }
    }
}

$student1 = new Student;
$student1->name = "Ilia";
$student1->transferToNextCourse();
echo $student1->name ." учится на ". $student1->course . " курсе" . "<br>";
$student1->transferToNextCourse();
$student1->transferToNextCourse();
$student1->transferToNextCourse();
$student1->transferToNextCourse();
echo $student1->name ." учится на ". $student1->course . " курсе" . "<br>";
$student1->transferToNextCourse();
echo $student1->name ." учится на ". $student1->course . " курсе" . "<br>";
 ?>


<br>
<br>
 <!-- Сделайте класс Employee, в котором будут следующие публичные свойства - name, age, salary. Сделайте так, чтобы эти свойства заполнялись в конструкторе при создании объекта. -->
 <!-- Создайте объект класса Employee с именем 'eric', возрастом 25, зарплатой 1000. -->
 <!-- Создайте объект класса Employee с именем 'kyle', возрастом 30, зарплатой 2000. -->
 <!-- Выведите на экран сумму зарплат созданных вами юзеров. -->

 <?php
class Employee4
{
    public $name;
    public $age;
    public $salary;

    public function __construct($name, $age, $salary) {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
}

$user1 = new Employee4('eric', 25, 1000);
$user2 = new Employee4('kyle', 30, 2000);
echo 'Сумма зарплат обоих сотрудников - ' . ($user1->salary + $user2->salary) . "<br>";
 ?>

<br>
<br>
 <!-- Сделайте класс Employee, в котором будут следующие приватные свойства: name, age и salary. -->
 <!-- Сделайте геттеры и сеттеры для всех свойств класса Employee. -->
 <!-- Дополните класс Employee приватным методом isAgeCorrect, который будет проверять возраст на корректность (от 1 до 100 лет). Этот метод должен использоваться в сеттере setAge перед установкой нового возраста (если возраст не корректный - он не должен меняться). -->
<!-- Пусть зарплата наших работников хранится в долларах. Сделайте так, чтобы геттер getSalary добавлял в конец числа с зарплатой значок доллара. Говоря другими словами в свойстве salary зарплата будет хранится просто числом, но геттер будет возвращать ее с долларом на конце. -->

 <?php
class Employee5
{
    private $name;
    private $age;
    private $salary;

    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }

    public function getAge() {
        return $this->age;
    }
    public function setAge($age) {
        if($this->isAgeCorrect($age)) {
        $this->age = $age;
        }
    }

    public function getsalary() {
        return $this->salary . "$";
    }
    public function setSalary($salary) {
        $this->salary = $salary;
    }

    private function isAgeCorrect($age) {
        if($age >= 1 and $age <=100){
            return true;
        }
    }
}

$user = new Employee5;
$user->setAge(33);
echo $user->getAge() . "<br>";
$user->setName("Ilya");
echo $user->getName() . "<br>";;
$user->setAge(70);
echo $user->getAge() . "<br>";
$user->setSalary(1500);
echo $user->getSalary()
 ?>

<br>
<br>
<!-- Сделайте класс Employee, в котором будут следующие свойства: name, surname и salary. -->
<!-- Сделайте так, чтобы свойства name и surname были доступны только для чтения, а свойство salary - и для чтения, и для записи. -->
<?php
class Employee6 
{
    private $name;
    private $age;
    private $salary;

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
    public function getSalary() {
        return $this->salary;
    }
    public function setSalary($salary) {
        $this->salary = $salary;
    }
}
$user = new Employee6("Bond", 35);
$user->setSalary(2200);
echo $user->getName() . "<br>";
echo $user->getAge() . "<br>";
echo $user->getSalary() . "<br>";
?>

<br>
<br>
<!-- Сделайте несколько классов в разных файлах. Подключите ваши классы к файлу index.php. -->
<?php
require_once 'Car.php';
$bmw = new Car('red', 250);
$bmw->setTank(49);
echo $bmw->getColor() . "<br>";
echo $bmw->getSpeed() . "<br>";
echo $bmw->getTank() . "<br>";
?>

<br>
<br>
<?php
require_once 'Worker.php';
$ben = new Worker('Ben', 2, 'programmer', 1000);
echo 'Имя: ' . $ben->getName() . "<br>";
echo 'Стаж: ' . $ben->getExperience() . "<br>";
echo 'Должность: ' . $ben->getPosition() . "<br>";
echo 'Зарплата: ' . $ben->getSalary() . "<br>";

$ben->setExperience();
echo 'Имя: ' . $ben->getName() . "<br>";
echo 'Стаж: ' . $ben->getExperience() . "<br>";
echo 'Должность: ' . $ben->getPosition() . "<br>";
echo 'Зарплата: ' . $ben->getSalary() . "<br>";
$ben->setExperience();
echo 'Имя: ' . $ben->getName() . "<br>";
echo 'Стаж: ' . $ben->getExperience() . "<br>";
echo 'Должность: ' . $ben->getPosition() . "<br>";
echo 'Зарплата: ' . $ben->getSalary() . "<br>";
?>


<br>
<br>
<!-- Сделайте класс City, в котором будут следующие свойства: name, population (количество населения). -->
<?php
class City
{
    private $name;
    private $population;

    public function __construct($name, $population) {
        $this->name = $name;
        $this->population = $population;
    }
    public function getName() {
        return $this->name; 
    }
    public function getPopulation() {
        return $this->population; 
    }
    public function setPopulation($population) {
        if($this->isCorrectPopulation($population) )
         $this->population = $population;
    }

    private function isCorrectPopulation($population) {
        if($population >= $this->population - ($this->population * 0.05) and $population <= $this->population + ($this->population * 0.05)) {
            return true;
        }
     
    }
}

$stavropol = new City('Stavropol', 600000);
echo $stavropol->getName() . "<br>";
echo $stavropol->getPopulation() . "<br>";
$stavropol->setPopulation(630000);
echo $stavropol->getName() . "<br>";
echo $stavropol->getPopulation() . "<br>";
?>
<!-- Создайте 5 объектов класса City, заполните их данными и запишите в массив. -->
<?php
$arr = [
    new City('Stavropol', 600000),
    new City('Moscow', 10000000),
    new City('Tokio', 20000000),
    new City('Berlin', 5000000),
    new City('Marcel', 2000000),
]
?>
<br>
<br>
<!-- Переберите созданный вами массив с городами циклом и выведите города и их население на экран. -->
<?php
foreach($arr as $city) {
    echo $city->getName() . ' - ' . $city->getPopulation() . "<br>";
}
?>

<br>
<br>
<!-- Не подсматривая в мой код реализуйте такой же класс Student. -->
<?php
class Student2
{
    private $name;
    private $course;

    public function __construct($name) {
        $this->name = $name;
        $this->course = 1;
    }
    public function getName() {
       return $this->name;
    }
    public function getCourse() {
        return $this->course;
    }

    public function transferToNextCourse() {
        if($this->course < 5) {
            $this->course++;
        }
    }
}

$student = new Student2('Ilya');
echo $student->getName() . '<br>';
echo $student->getCourse() . '<br>';
echo $student->transferToNextCourse();
echo $student->transferToNextCourse();
echo $student->transferToNextCourse();
echo $student->transferToNextCourse();
echo $student->transferToNextCourse();
echo $student->transferToNextCourse();
echo $student->getCourse() . '<br>';
?>


<br>
<br>
<!-- Реализуйте класс Arr, похожий на тот, который я реализовал выше. В отличие от моего класса метод add вашего класса параметром должен принимать массив чисел. Все числа из этого массива должны добавляться в конец массива $this->numbers. -->
<!-- Реализуйте также метод getAvg, который будет находить среднее арифметическое чисел. -->

<?php
class Arr
{
    private $numbers = [];
    // public function __construct($) {
    //     $this->name = $name;
    //     $this->course = 1;
    // }
    public function add($num) {
        $this->numbers = array_merge($this->numbers, $num);
    }
    public function getNumbers() {
        return $this->numbers;
    }

    public function getAvg() {
        return array_sum($this->numbers) / count($this->numbers);
    }
}

$arr = new Arr;
$arr->add([1, 2, 3]);
var_dump($arr->getNumbers());
$arr->add([4, 5, 6]);
$arr->add([7, 8, 9]);
echo "<pre>";
print_r($arr->getNumbers());
echo "</pre>";
echo $arr->getAvg();
?>

<br>
<br>
<!-- Сделайте класс City, в котором будут следующие свойства - name, foundation (дата основания), population (население). Создайте объект этого класса. -->
<!-- Пусть дана переменная $props, в которой хранится массив названий свойств класса City. Переберите этот массив циклом foreach и выведите на экран значения соответствующих свойств. -->
<?php
class City2 
{
    public $name;
    public $foundation;
    public $population;

    public function __construct($name, $foundation, $population) {
        $this->name = $name;
        $this->foundation = $foundation;
        $this->population = $population;
 
    }

    // public function getName() {
    //     return $this->name;
    // }
    // public function getFoundation() {
    //     return $this->foundation;
    // }
    // public function getPopulation() {
    //     return $this->population;
    // }
}

$city = new City2('Moscow', 1345, 15000000);
$props = ['name', 'foundation', 'population'];
foreach($props as $elem) {
    echo $city->$elem . "<br>";
}
?>

<br>
<!-- Скопируйте мой код класса User и массив $props. В моем примере на экран выводится фамилия юзера. Выведите еще и имя, и отчество. -->
<?php
	class User5
	{
		public $surname; // фамилия
		public $name; // имя
		public $patronymic; // отчество
		
		public function __construct($surname, $name, $patronymic)
		{
			$this->surname = $surname;
			$this->name = $name;
			$this->patronymic = $patronymic;
		}
	}

    $user = new User5('Петров', 'Петр', 'Петрович');
    $arr = ['surname', 'name', 'patronymic'];
    echo $user->{$arr[0]}. '<br>';
    echo $user->{$arr[1]}. '<br>';
    echo $user->{$arr[2]}. '<br>';
?>


<br>
<br>
<!-- Пусть массив $methods будет ассоциативным с ключами method1 и method2:
	$methods = ['method1' => 'getName', 'method2' => 'getAge'];
Выведите имя и возраст пользователя с помощью этого массива. -->

<?php
	class User6
	{
		private $name;
		private $age;
		
		public function __construct($name, $age)
		{
			$this->name = $name;
			$this->age = $age;
		}
		
		public function getName()
		{
			return $this->name;
		}
		
		public function getAge()
		{
			return $this->age;
		}
	}

    $method = ['method1' => 'getName', 'method2' => 'getAge'];

    $user = new User6('Ilya', 33);
    echo $user->{$method['method1']}() . "<br>";
    echo $user->{$method['method2']}();
?>


<br>
<br>
<!-- Не подсматривая в мой код реализуйте такой же класс Arr и вызовите его метод getSum сразу после создания объекта. -->

<?php
class Arr2 
{
    private $numbers = [];

    public function __construct($num) {
        $this->numbers = $num;
    }
    public function getNumbers() {
        return $this->numbers;
    }
    public function setNumbers($num) {
        $this->numbers[] = $num;
    }
    public function getSum() {
        return array_sum($this->numbers);
    }
 }
// $arr = new Arr2([1, 2, 3]);
// var_dump($arr->getNumbers());
// echo '<br>';
// echo $arr->getSum() . '<br>';
// $arr->setNumbers(4);
// var_dump($arr->getNumbers());
// echo '<br>';
// echo $arr->getSum() . '<br>';
echo (new Arr2([10, 20, 30]))->getSum() + (new Arr2([40, 50, 70]))->getSum();
?>


<br>
<br>
<!-- Не подсматривая в мой код самостоятельно реализуйте такой же класс Arr, методы которого будут вызываться в виде цепочки. -->
<?php
class Arr3 
{
    private $number = [];

    public function add($num) {
        $this->number[] = $num;
        return $this;
    }
    public function addArr($num) {
       $this->number = array_merge($this->number, $num);
       return $this;
    }
    public function arrSum() {
      return  array_sum($this->number);
    }
}
echo (new Arr3)->add(2)->add(3)->addArr([4, 5, 6])->addArr([8, 9])->arrSum();
?>

<br>
<br>
<!-- Напишите реализацию методов класса ArrayAvgHelper, заготовки методов которого расположены ниже:-->

<?php
	class ArraySumHelper
	{
		/*
			Находит сумму первых
			степеней элементов массива:
		*/
		public function getAvg1($arr)
		{
           return $this->getSum($arr, 1);
		}
		
		/*
			Находит сумму вторых степеней
			элементов массива и извлекает
			из нее квадратный корень:
		*/
		public function getAvg2($arr)
		{
            return $this->calcSqrt($this->getSum($arr, 2), 2);
		}
		
		/*
			Находит сумму третьих степеней
			элементов массива и извлекает
			из нее кубический корень:
		*/
		public function getAvg3($arr)
		{
            return $this->calcSqrt($this->getSum($arr, 3), 3);
		}
		
		/*
			Находит сумму четвертых степеней
			элементов массива и извлекает
			из нее корень четвертой степени:
		*/
		public function getAvg4($arr)
		{
            return $this->calcSqrt($this->getSum($arr, 4), 4);
		}
		
		/*
			Вспомогательный метод, который параметром
			принимает массив и степень и возвращает
			сумму степеней элементов массива:
		*/
		private function getSum($arr, $power)
		{
            $sum = 0;
            foreach($arr as $elem) {
                $sum += pow($elem, $power);
            }
            return $sum;
		}
		
		/*
			Вспомогательный метод, который параметром
			принимает целое число и степень и возвращает
			корень заданной степени из числа:
		*/
		private function calcSqrt($num, $power)
		{
            return pow($num, 1/$power);
		}
	}

    $arr = new ArraySumHelper;
    echo $arr->getAvg1([1, 2, 3]). '<br>';
    echo $arr->getAvg2([1, 2, 3]). '<br>';
    echo $arr->getAvg3([1, 2, 3]). '<br>';
    echo $arr->getAvg4([1, 2, 3]). '<br>';
?> 

<br>
<br>
<!-- Реализуйте наследование User, Employee. -->
<?php
class User7
{
    private $name;
    private $age;
  
    public function getName() {
        return $this -> name;
    }
    public function getAge() {
        return $this -> age;
    }
    public function setName($name) {
        $this -> name = $name;
    }
    public function setAge($age) {
        $this -> age = $age;
    }
}

class Employee7 extends User7
{
    private $salary;

    public function getSalary() {
       return $this->salary;
    }
    public function setSalary($salary) {
        $this -> salary = $salary;
    }
}

$user = new User7;
$user->setName('Ilya');
echo $user->getName() . "<br>";

$employee = new Employee7;
$employee->setName('Jhon');
echo $employee->getName() . "<br>";

$employee->setAge(33);
echo $employee->getAge() . "<br>";

$employee->setSalary(1000);
echo $employee->getSalary() . "<br>";
?>

<!-- Не подсматривая в мой код реализуйте такой же класс Student, наследующий от класса User. -->

<?php
class Student5 extends User7
{
    private $course;

    public function getCourse() {
        return $this->course;
     }
     public function setCourse($course) {
         $this -> course = $course;
     }
}
$student = new Student5;
$student->setName('Andrey');
$student->setAge(30);
$student->setCourse(5);
echo $student->getName() . "<br>";
echo $student->getAge() . "<br>";
echo $student->getCourse() . "<br>";
?>

<br>
<br>
<!-- Сделайте класс Programmer, который будет наследовать от класса Employee. Пусть новый класс имеет свойство langs, в котором будет хранится массив языков, которыми владеет программист. Сделайте также геттер и сеттер для этого свойства. -->
<?php
class Programmer2 extends Employee7
{
    private $langs = [];

    public function getLangs() {
       return $this->langs;
    }
    public function push($langs) {
     $this->langs = array_merge($this->langs, $langs);
    }
}
$programmer = new Programmer2;
$programmer->setName('Ilya');
$programmer->setAge(33);
$programmer->push(['js', 'php', 'html']);
$programmer->setSalary(1000);

echo $programmer->getName() . "<br>";
echo $programmer->getAge() . "<br>";
var_dump($programmer->getLangs());
echo "<br>";
echo $programmer->getSalary() . "<br>";
?>

<br>
<br>
 <!-- Сделайте класс Driver (водитель), который будет наследовать от класса Employee. Пусть новый класс добавляет следующие свойства: водительский стаж, категория вождения (A, B, C, D), а также геттеры и сеттеры к ним. -->
 <?php
class Driver extends Employee7
{
    private $experience;
    private $category;

    public function getExperience() {
       return $this->experience;
    }
    public function getCategory() {
        return $this->category;
     }
     public function setExperience($experience) {
        $this->experience = $experience;
     }
     public function setCategory($category) {
         if($this->isCorrectCategory($category)) {
            $this->category = $category;
         }
      }
      private function isCorrectCategory($category) {
          if($category === "A" or $category=== "B" or $category === "C" or $category === "D") {
              return true;
          }
      }
}
$driver = new Driver;
$driver->setName('Ilya');
$driver->setAge(33);
$driver->setSalary(2200) . "<br>";
$driver->setExperience(10);
$driver->setCategory('B');

echo $driver->getName() . "<br>";
echo $driver->getAge() . "<br>";
echo $driver->getSalary() . "<br>";
echo $driver->getExperience() . "<br>";
echo $driver->getCategory() . "<br>";
 ?>

<br>
<br>
 <!-- Скопируйте мой код класса User. Самостоятельно не подсматривая в мой код реализуйте описанный класс Student с методами getCourse, setCourse и addOneYear. -->
 <?php
	class User11
	{
		private $name;
		protected $age;
		
		public function getName()
		{
			return $this->name;
		}
		
		public function setName($name)
		{
			$this->name = $name;
		}
		
		public function getAge()
		{
			return $this->age;
		}
		
		public function setAge($age)
		{
			$this->age = $age;
		}
	}

    class Student3 extends User11
    {
        private $course;
        public function __construct($course) {
            $this->course = $course;
        }
        public function getCourse() {
            return  $this->course;
        }
        public function setCourse($course) {
            $this->course = $course;
        }
        public function addOneCourse() {
            $this->age++;
            if($this->course < 5) {
                $this->course++;
            }
            
        }
 
    }
    $student = new Student3(2);
    $student->setName('Ilya');
    $student->setAge(33);

echo $student->getName() . "<br>";
echo $student->getAge() . "<br>";
echo $student->getCourse() . "<br>";

    $student->addOneCourse();
echo $student->getCourse() . "<br>";
echo $student->getAge() . "<br>";

$student->addOneCourse();
echo $student->getCourse() . "<br>";
echo $student->getAge() . "<br>";
?>


<br>
<br>
<!-- Модифицируйте код класса User так, чтобы в методе setName выполнялась проверка того, что длина имени более 3-х символов. -->
<!-- Добавьте в класс Student метод setName, в котором будет выполняться проверка того, что длина имени более 3-х символов и менее 10 символов. Пусть этот метод использует метод setName своего родителя, чтобы выполнить часть проверки. -->

<?php
class User12 
{
    private $name;
    private $age;

    public function getName() {
        return $this->name;
    }
    public function getAge() {
        return $this->age;
    }

    public function setName($name) {
        if(mb_strlen($name) > 3){
            $this->name = $name;
        }
        
    }
    public function setAge($age) {
        if($age > 18) {
            $this->age = $age;
        }
    }
}

class Students12 extends User12
{
    private $course;

    public function __construct($course) {
        $this->course = $course;
    }
    public function getCourse() {
        return $this->course;
    }
    public function setCourse($course) {
        $this->course = $course;
    }
    public function setAge($age) {
        if($age <= 25) {
            parent::setAge($age);
        }
    }
    public function setName($name) {
        if($age <= 10) {
            parent::setName($name);
        }
    }
}
$student = new Students12(2);
$student->setName('Rick');
$student->setAge(20);

echo $student->getName() . "<br>";
echo $student->getAge() . "<br>";
echo $student->getCourse() . "<br>";

$student->setName('Ric');
$student->setAge(26);
$student->setCourse(3);
echo $student->getName() . "<br>";
echo $student->getAge() . "<br>";
echo $student->getCourse() . "<br>";
?>

<br>
<br>
<!--Создайте класс Student, наследующий от User, со своим конструктором. -->

<?php
class User13 
{
    protected $name;
    protected $age;

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

class Students13 extends User13
{
    private $course;

    public function __construct($name, $age, $course) {
        $this->name = $name;
        $this->age = $age;
        $this->course = $course;
    }
    public function getCourse() {
        return $this->course;
    }
}
$student = new Students13('Alexno', 23, 5);

echo $student->getName() . "<br>";
echo $student->getAge() . "<br>";
echo $student->getCourse() . "<br>";
?>


<br>
<br>
<!-- Сделайте класс User, в котором будут следующие свойства только для чтения: name и surname. Начальные значения этих свойств должны устанавливаться в конструкторе. Сделайте также геттеры этих свойств. -->

<!-- Модифицируйте предыдущую задачу так, чтобы третьим параметром в конструктор передавалась дата рождения работника в формате год-месяц-день. Запишите ее в свойство birthday. Сделайте геттер для этого свойства. -->

<!-- Модифицируйте предыдущую задачу так, чтобы был приватный метод calculateAge, который параметром будет принимать дату рождения, а возвращать возраст с учетом того, был ли уже день рождения в этом году, или нет. -->

<!-- Модифицируйте предыдущую задачу так, чтобы метод calculateAge вызывался в конструкторе объекта, рассчитывал возраст пользователя и записывал его в приватное свойство age. Сделайте геттер для этого свойства. -->
<?php
class User15 
{
    private $name;
    private $surname;
    private $birthday;
    private $age;

    public function __construct($name, $surname, $birthday) {
        $this->name = $name;
        $this->surname = $surname;
        $this->birthday = $birthday;
        $this->age = $this->calculateAge($birthday);
    }

    public function getName() {
        return $this->name;
    }
    public function getSurname() {
        return $this->surname;
    }
    public function getBirthday() {
        return $this->birthday;
    }
    public function getAge() {
        return $this->age;
    }

    private function calculateAge($birthday) {
        $birthday_timestamp = strtotime($birthday);
        $age = date('Y') - date('Y', $birthday_timestamp);
        if (date('md', $birthday_timestamp) > date('md')) {
        $age--;
        }
    return $age;
    }

}

// Сделайте класс Employee, который будет наследовать от класса User. Пусть новый класс имеет свойство salary, в котором будет хранится зарплата работника. Зарплата должна передаваться четвертым параметром в конструктор объекта. Сделайте также геттер для этого свойства.
class Employee15 extends User15
{
    private $salary;

    public function __construct($name, $surname, $birthday, $salary) {
        parent::__construct($name, $surname, $birthday);
        $this->salary = $salary;
    }
    public function getSalary() {
        return $this->salary;
    }
}
$employee = new Employee15('Lev', 'Lenin', '1988-11-27', 1100);

echo $employee->getName() . "<br>";
echo $employee->getSurname() . "<br>";
echo $employee->getAge() . "<br>";
echo $employee->getSalary() . "<br>";
?>

<br>
<br>
<!-- Сделайте класс Product, в котором будут следующие свойства: name, price. -->
<?php
class Product 
{
    private $name;
    private $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName() {
        return $this->name;
    }
    public function getPrice() {
        return $this->price;
    }

}
// Создайте объект класса Product, запишите его в переменную $product1.
$product1 = new Product('car', '5000');
echo $product1->getName() . "<br>";
echo $product1->getPrice() . "<br>";

// Присвойте значение переменной $product1 в переменную $product2. Проверьте то, что обе переменные ссылаются на один и тот же объект.
$product2 = $product1;
echo $product2->getName();
?>

<br>
<br>
<!-- Самостоятельно повторите описанные мною классы Arr и SumHelper. -->

<!-- Добавьте в класс Arr метод getAvgMeanSum, который будет находить сумму среднего арифметического и среднего квадратичного из массива $this->nums. -->
<?php
class Arr5 
{
    private $array = [];
    private $sumHelper;

    public function __construct() {
        $this->sumHelper = new SumHelper;
        $this->avgHelper = new AvgHelper;
    }

    public function getArray() {
        return $this->array; 
    }
    public function getSum23() {
      return  $this->sumHelper->setSum1($this->array) + $this->sumHelper->setSum2($this->array);
    }

    public function getAvgMeanSum() {
        return $this->avgHelper->getAvg($this->array) + $this->avgHelper->getMeanSquare($this->array);
    }

    public function add($array){
        $this->array[] = $array;
    }
}

class SumHelper
{  
    public function setSum1($num) {
        return $this->setSum($num, 2);
    }
    public function setSum2($num) {
        return $this->setSum($num, 3);
    }
    private function setSum($num, $row) {
        $sum = 0;
        foreach($num as $elem) {
           $sum += pow($elem, $row);
        }
        return $sum;
    }
}

$arr = new Arr5;
$arr->add(1);
$arr->add(2);
$arr->add(3);
echo $arr->getSum23() . "<br>";
echo $arr->getAvgMeanSum();
?>


<br>
<br>
<!-- Создайте класс AvgHelper с методом getAvg, который параметром будет принимать массив и возвращать среднее арифметическое этого массива (сумма элементов делить на количество). -->

<!-- Добавьте в класс AvgHelper еще и метод getMeanSquare, который параметром будет принимать массив и возвращать среднее квадратичное этого массива (квадратный корень, извлеченный из суммы квадратов элементов, деленной на количество). -->
<?php
class AvgHelper 
{
    public function getAvg($arr) {
        return array_sum($arr) / count($arr);
    }
    public function getMeanSquare($arr) {
        return sqrt( array_sum($this->getSumMean($arr)) / count($arr));
    }

    private function getSumMean($arr) {
        $arr2 = [];    
        foreach($arr as $elem) {
            $arr2[] = pow($elem, 2);
            }
        return $arr2;
    }
}
$arr = new AvgHelper;
echo $arr->getAvg([1, 2, 3]) . "<br>";
echo $arr->getMeanSquare([1, 2, 3]) . "<br>";
?>

<br>
<br>
<!-- Сделайте класс Product, в котором будут приватные свойства name, price и quantity. Пусть все эти свойства будут доступны только для чтения. -->

<!-- Добавьте в класс Product метод getCost, который будет находить полную стоимость продукта (сумма умножить на количество). -->
<?php
class Product2
{
    private $name;
    private $price;
    private $quantity;

    public function __construct($name, $price, $quantity) {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getName() {
        return $this->name;
    }
    public function getPrice() {
        return $this->price;
    }
    public function getQuantity() {
        return $this->quantity;
    }

    public function getCost($price, $quantity) {
        return $this->price * $this->quantity;
    }
}
?>
<!-- Сделайте класс Cart. Данный класс будет хранить список продуктов (объектов класса Product) в виде массива. Пусть продукты хранятся в свойстве products. -->
<!-- Реализуйте в классе Cart метод add для добавления продуктов. -->

<!-- Реализуйте в классе Cart метод remove для удаления продуктов. Метод должен принимать параметром название удаляемого продукта. -->

<!-- Реализуйте в классе Cart метод getTotalCost, который будет находить суммарную стоимость продуктов. -->

<!-- Реализуйте в классе Cart метод getTotalQuantity, который будет находить суммарное количество продуктов (то есть сумму свойств quantity всех продуктов). -->

<!-- Реализуйте в классе Cart метод getAvgPrice, который будет находить среднюю стоимость продуктов (суммарная стоимость делить на количество всех продуктов). -->
<?php
class Cart 
{
    private $products = [];

    public function getProducts() {
        return $this->products;
    }

    public function add($prod) {
        $this->products[] = $prod;
    }

    public function remove($i) {
        $arr = [];
        foreach($this->products as $elem) {
          if($elem->getName() !== $i) {
            $arr[] = $elem;
          }
          $this->products = $arr;
           }

    // $i = array_search($elem, $this->products);
    // array_splice($this->products, $i, 1);
    }

    public function getTotalCost() {
        $sum = 0;
        foreach($this->products as $elem) {
           $sum += $elem->getPrice() * $elem->getQuantity();
        }
        return $sum;
    }

    public function getTotalQuantity() {
        $sum = 0;
        foreach($this->products as $elem) {
           $sum += $elem->getQuantity();
        }
        return $sum;
    }

    public function getAvgPrice() {
      return  $this->getTotalCost() / $this->getTotalQuantity();
    }
}

$cart = new Cart();
$cart->add(new Product2('milk', 5, 200));
$cart->add(new Product2('bread', 3, 500));
$cart->add(new Product2('apple', 7, 300));
echo '<pre>';
print_r($cart->getProducts());
echo '</pre>';

$cart->remove('apple');
$cart->remove('bread');

echo '<pre>';
print_r($cart->getProducts());
echo '</pre>';

echo $cart->getTotalCost() . "<br>";

echo $cart->getTotalQuantity() . "<br>";

echo $cart->getAvgPrice() . "<br>";
$cart->add(new Product2('orange', 3, 400));

echo '<pre>';
print_r($cart->getProducts());
echo '</pre>';

$cart->remove('milk');

echo '<pre>';
print_r($cart->getProducts());
echo '</pre>';
?>

<br>
<br>
<!-- Сделайте функцию compare, которая параметром будет принимать два объекта и возвращать true, если они имеют одинаковые свойства и значения являются экземплярами одного и того же класса, и false, если это не так. -->
<?php
function compare($a, $b) {
    if($a==$b) {
        return 'true';
    } else {
        return 'false';
    }
}
$prod1 = new Product2('milk', 5, 200);
$prod2 = new Product2('milk', 5, 200);
echo compare($prod1, $prod2);
?>

<br>
<br>
<!-- Сделайте функцию compare, которая параметром будет принимать два объекта и возвращать true, если переданные переменные ссылаются на один и тот же объект, и false, если на разные. -->
<?php
function compare2($a, $b) {
    if($a===$b) {
        return 'true';
    } else {
        return 'false';
    }
}
$prod1 = new Product2('milk', 5, 200);
$prod2 = $prod1;
echo compare2($prod1, $prod2);
?>

<br>
<br>
<!-- Сделайте функцию compare, которая параметром будет принимать два объекта и сравнивать их.
Функция должна возвращать 1, если переданные переменные ссылаются на один и тот же объект.
Функция должна возвращать 0, если объекты разные, но одного и того же класса и с теми же свойствами и их значениями.
Функция должна возвращать -1 в противном случае. -->
<?php
function compare3($a, $b) {
    if($a===$b) {
        return 1;
    } elseif($a==$b) {
        return 0;
    } else {
        return -1;
    }
}
$prod1 = new Product2('milk', 5, 200);
$prod2 = new Product2('milk', 5, 300);
echo compare3($prod1, $prod2);
?>

<br>
<br>
<!-- Скопируйте мой код класса Employee, затем самостоятельно реализуйте описанный класс EmployeesCollection, проверьте его работу. -->

<!-- Упростите ваш класс EmployeesCollection с использованием функции in_array, проверьте его работу. -->
<?php
	class Employee16
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
class EmployeesCollection
{
public $employee = [];

public function add($employee) {
    if(!in_array($employee, $this->employee, true)) {
        $this->employee[] =  $employee;
    }
 
}
// private function exists($newEmployee) {
//     foreach($this->employee as $elem) {
//         if($elem===$newEmployee) {
//             return true;
//         }
//     }
// }
}
$employee = new EmployeesCollection;
$em = new Employee16('Ilya', 1000);
$employee->add($em);
$employee->add($em);

var_dump($employee->employee);

?>

<br>
<br>
<!-- Сделайте класс Employee с публичными свойствами name (имя) и salary (зарплата). -->
<?php
class Employee17 
{
    public $name;
    public $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }
}
?>
<!-- Сделайте класс Student с публичными свойствами name (имя) и scholarship (стипендия). -->
<?php
class Student17 
{
    public $name;
    public $scholarship;

    public function __construct($name, $scholarship) {
        $this->name = $name;
        $this->scholarship = $scholarship;
    }
}
?>
<!-- Создайте по 3 объекта каждого класса и в произвольном порядке запишите их в массив $arr. -->
<?php
$arr = [new Employee17('John', 1000), new Employee17('Ilya', 2000), new Employee17('Smitt', 3000), new Student17('Andry', 200), new Student17('Rick', 220), new Student17('Ron', 250)];

// Переберите циклом массив $arr и выведите на экран столбец имен всех работников.
foreach($arr as $elem) {
    if($elem instanceof Employee17) {
        echo $elem->name . '<br>';
    }
}
echo '<br>';
// Аналогичным образом выведите на экран столбец имен всех студентов.
foreach($arr as $elem) {
    if($elem instanceof Student17) {
        echo $elem->name . '<br>';
    }
}

// Переберите циклом массив $arr и с его помощью найдите сумму зарплат работников и сумму стипендий студентов. После цикла выведите эти два числа на экран.
$sumEmployeeSalary = 0;
$sumStudentsScholarship = 0;
foreach($arr as $elem) {

    if($elem instanceof Employee17) {
         $sumEmployeeSalary += $elem->salary;
    }
    if($elem instanceof Student17) {
        $sumStudentsScholarship += $elem->scholarship ;
   }
}
echo 'З\П работников: ' . $sumEmployeeSalary . '<br>';
echo 'Степендия студентов: ' . $sumStudentsScholarship . '<br>';
?>

<br>
<br>
<!-- Сделайте класс User с публичным свойствами name и surname. -->
<?php
class User17 
{
    public $name;
    public $surname;

    public function __construct($name, $surname) {
        $this->name = $name;
        $this->surname = $surname;
    }
}
// Сделайте класс Employee, который будет наследовать от класса User и добавлять свойство salary.
class Employee18 extends User17 
{
    // public $name;
    // public $surname;

    // public function __construct($name, $surname) {
    //     $this->name = $name;
    //     $this->surname = $surname;
    // }
}

// Сделайте класс City с публичными свойствами name и population.
class City17 
{
    public $name;
    public $population;

    public function __construct($name, $population) {
        $this->name = $name;
        $this->population = $population;
    }
}

// Создайте 3 объекта класса User, 3 объекта класса Employee, 3 объекта класса City, и в произвольном порядке запишите их в массив $arr.
$arr = [new User17('John', 'Jonson'), new User17('Ivan', 'Ivanov'), new User17('Tim', 'Thompson'), new Employee18('Andry', 'Andreev'), new Employee18('Rick', 'Ricman'), new Employee18('Ron', 'Wisli'),  new City17('Moscow', 15000000),  new City17('Berlin', 5000000),  new City17('London', 20000000)];

// Переберите циклом массив $arr и выведите на экран столбец свойств name тех объектов, которые принадлежат классу User или потомку этого класса.
foreach($arr as $elem) {
    if($elem instanceof User17) {
        echo $elem->name . "<br>";
    }
}
echo "<br>";
// Переберите циклом массив $arr и выведите на экран столбец свойств name тех объектов, которые не принадлежат классу User или потомку этого класса.
foreach($arr as $elem) {
    if(!$elem instanceof User17) {
        echo $elem->name . "<br>";
    }
}
echo '<br>';
// Переберите циклом массив $arr и выведите на экран столбец свойств name тех объектов, которые принадлежат именно классу User, то есть не классу City и не классу Employee.
foreach($arr as $elem) {
    if($elem instanceof User17 and !$elem instanceof Employee18) {
        echo $elem->name . "<br>";
    }
}
?>

<br>
<br>
<!-- Скопируйте мой код классов Employee и Student и самостоятельно не подсматривая в мой код реализуйте такой же класс UsersCollection. -->
<?php
	class Employee19
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
	class Student19
	{
		private $name;
		private $scholarship; // стипендия
		
		public function __construct($name, $scholarship)
		{
			$this->name = $name;
			$this->scholarship = $scholarship;
		}
		
		public function getName()
		{
			return $this->name;
		}
		
		public function getScholarship()
		{
			return $this->scholarship;
		}
	}
?>

<?php
class UsersCollection
{
    private $employee = [];
    private $students = [];

    public function add($user) {
        if($user instanceof Employee19) {
            $this->employee[] = $user;
        }
        if($user instanceof Student19) {
            $this->students[] = $user;
        }
    }
    

    public function sumEmployee() {
        $sum = 0;
        foreach($this->employee as $elem) {
            $sum += $elem->getSalary();
        }
        return $sum;
    }
    public function sumStudents() {
        $sum = 0;
        foreach($this->students as $elem) {
            $sum += $elem->getScholarship();
        }
        return $sum;
    }

    public function sumEmployeeStudents() {
      return $this->sumEmployee() + $this->sumStudents();
    }
}
$usersCollection = new UsersCollection;
$usersCollection->add(new Employee19('John', 1000));
$usersCollection->add(new Employee19('Leo', 2000));

$usersCollection->add(new Student19('Pink', 100));
$usersCollection->add(new Student19('Rock', 200));

echo $usersCollection->sumEmployee() . '<br>';
echo $usersCollection->sumStudents() . '<br>';
echo $usersCollection->sumEmployeeStudents() . '<br>';
?>

<br>
<br>
<!-- Сделайте класс Post (должность), в котором будут следующие свойства, доступные только для чтения: name и salary. -->
<?php
class Post
{
    private $name;
    private $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }
    public function getName() {
        return $this->name;
    }
    public function getSalary() {
        return $this->salary;
    }
}
// Создайте несколько объектов класса Post: программист, менеджер водитель
$user1 = new Post('Программист', 5000);
$user2 = new Post('Менеджер', 2000);
$user3 = new Post('Водитель', 1000);

// Сделайте класс Employee, в котором будут следующие свойства: name и surname. Пусть начальные значения этих свойств будут передаваться параметром в конструктор.

// Сделайте геттеры и сеттеры для свойств name и surname.

// Пусть теперь третьим параметром конструктора будет передаваться должность работника, представляющая собой объект класса Post. Укажите тип этого параметра в явном виде.

// Сделайте так, чтобы должность работника (то есть переданный объект с должностью) записывалась в свойство post.

// Реализуйте в классе Employee метод changePost, который будет изменять должность работника на другую. Метод должен принимать параметром объект класса Post. Укажите в методе тип принимаемого параметра в явном виде.
class Employee20
{
    private $name;
    private $surname;
    private $post;

    public function __construct($name, $surname, Post $post) {
        $this->name = $name;
        $this->surname = $surname;
        $this->post = $post;
    }

    public function getName() {
        return $this->name;
    }
    public function getSurname() {
        return $this->surname;
    }
    public function getPost() {
        return $this->post;
    }
    public function setName(Post $name) {
        return $this->name = $name;
    }
    public function setSurname($surname) {
        return $this->surname;
    }
    public function changePost(Post $post) {
        return $this->post = $post;
    }
}

// Создайте объект класса Employee с должностью программист. При его создании используйте один из объектов класса Post, созданный нами ранее.
$employee = new Employee20('Ron', "Wizly", $user1);

// Выведите на экран имя, фамилию, должность и зарплату созданного работника.
echo $employee->getName() . ' ' . $employee->getSurname() . ' ' .  $employee->getPost()->getName() . ' ' .  $employee->getPost()->getSalary() . '<br>';
$employee->changePost($user2);
echo $employee->getPost()->getName();
?>

<br>
<br>
<!-- Пусть у нас дан вот такой класс ArraySumHelper, который мы рассматривали в одном из предыдущих уроков: -->
<!-- Переделайте методы класса ArraySumHelper на статические. -->

<?php
	class ArraySumHelper2
	{
		public static function getSum1($arr)
		{
			return self::getSum($arr, 1);
		}
		
		public static function getSum2($arr)
		{
			return self::getSum($arr, 2);
		}
		
		public static function getSum3($arr)
		{
			return self::getSum($arr, 3);
		}
		
		public static function getSum4($arr)
		{
			return self::getSum($arr, 4);
		}
		
		private static function getSum($arr, $power) {
			$sum = 0;
			
			foreach ($arr as $elem) {
				$sum += pow($elem, $power);
			}
			return $sum;
		}
	}

    echo ArraySumHelper2::getSum1([1, 2, 3]) . '<br>';
    echo ArraySumHelper2::getSum2([1, 2, 3]) . '<br>';

    // Пусть дан массив с числами. Найдите с помощью класса ArraySumHelper сумму квадратов элементов этого массива.
    $array = [1, 2, 3 , 4];
    echo ArraySumHelper2::getSum2($array) . '<br>';
?>

<br>
<br>
<!-- Сделайте класс Num, у которого будут два публичных статических свойства: num1 и num2. Запишите в первое свойство число 2, а во второе - число 3. Выведите сумму значений свойств на экран. -->
<?php
class Num
{
public static $num1;
public static $num2;
}
Num::$num1 = 2;
Num::$num2 = 3;

echo Num::$num1 + Num::$num2;
?>

<br>
<br>
<!-- Сделайте класс Num, у которого будут два приватны статических свойства: num1 и num2. Пусть по умолчанию в свойстве num1 хранится число 2, а в свойстве num2 - число 3. -->

<!-- Сделайте в классе Num метод getSum, который будет выводить на экран сумму значений свойств num1 и num2. -->
<?php
class Num2
{
public static $num1 = 2;
public static $num2 = 3;

public static function getSum() {
    return self::$num1 + self::$num2;
    }
}
echo Num2::getSum();
?>

<br>
<br>
<!-- Добавьте в наш класс Geometry метод, который будет находить объем шара по радиусу. С помощью этого метода выведите на экран объем шара с радиусом 10. -->
<?php
	class Geometry
	{
		private static $pi = 3.14; // вынесем Пи в свойство
		
		public static function getCircleSquare($radius)
		{
			return self::$pi * $radius * $radius;
		}
		
		public static function getCircleСircuit($radius)
		{
			return 2 * self::$pi * $radius;
		}
        public static function getBallVolume($radius) {
            return (4 * self::$pi * ($radius * $radius * $radius)) / 3;
        }
	}
    echo Geometry::getBallVolume(10);
?>

<br>
<br>
<!-- Не подсматривая в мой код реализуйте такой же класс User, подсчитывающий количество своих объектов. -->

<!-- Самостоятельно переделайте код вашего класса User в соответствии с теоретической частью урока. -->
<?php
class User21
{
    private $name;
    private static $count = 0;

    public function __construct($name) {
        $this->name = $name;
        self::$count++;
    }

    public static function getCount() {
        return self::$count;
    }
}

$user1 = new User21('Ilya');
echo User21::getCount() . '<br>';

$user2 = new User21('Jhon');
echo User21::getCount() . '<br>';
?>


<br>
<br>
<!-- Реализуйте предложенный класс Circle самостоятельно. -->
<?php
class Circle
{
    const PI = 3.14;
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public static function setRadius($radius) {
        $this->radius = $radius;
    }

    public function getSquare()
    {
        return self::PI * $this->radius * $this->radius;
    }
    
    // Найдем длину окружности:
    public function getCircuit()
    {
        return 2 * self::PI * $this->radius;
    }
}

$circle1 = new Circle(10);
echo $circle1->getSquare() . '<br>';
echo $circle1->getCircuit() . '<br>';
?>


<br>
<br>
<!-- Сделайте объект какого-нибудь класса. Примените к объекту функцию get_class и узнайте имя класса, которому принадлежит объект. -->
<?php
class User22
{
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

$user1 = new User22('Ilya', 33);
echo get_class($user1);
?>
<br>
<!-- Сделайте два класса: Test1 и Test2. Пусть оба класса имеют свойство name. Создайте некоторое количество объектов этих классов и запишите в массив $arr в произвольном порядке. Переберите этот массив циклом и для каждого объекта выведите значение его свойства name и имя класса, которому принадлежит объект. -->
<?php
class Test_1
{
    private $name;

    public function __construct($name){
        $this->name = $name;
    }
    public function getName(){
       return $this->name;
    }
}

class Test_2
{
    private $name;

    public function __construct($name){
        $this->name = $name;
    }
    public function getName(){
       return $this->name;
    }
}
$test1 = new Test_1('Ilya');
$test2 = new Test_1('Jhon');
$test3 = new Test_1('Tim');

$test4 = new Test_2('Tran');
$test5 = new Test_2('Kit');
$test6 = new Test_2('Leo');

$arr = [$test1, $test2, $test3, $test4, $test5, $test6];
foreach($arr as $elem) {
    echo get_class($elem) . ' - ' . $elem->getName() . '<br>';
}
?>

<br>
<br>
<!-- Сделайте класс Test с методами method1, method2 и method3. С помощью функции get_class_methods получите массив названий методов класса Test. -->
<?php
class Test_3
{
    private $num = 2;

    public function method1(){
       return pow($this->num, 2);
    }
    public function method2(){
        return pow($this->num, 3);
     }
     public function method3(){
        return pow($this->num, 4);
     }
}
var_dump(get_class_methods(Test_3));
echo '<br>';
// Создайте объект класса Test, запишите его в переменную $test. С помощью функции get_class_methods получите массив названий методов объекта. Переберите его циклом и в цикле вызовите каждый метод класса, используя объект $test. 
$test = new Test_3;
$arr = get_class_methods($test);
foreach($arr as $elem) {
    echo $test->$elem() . '<br>';
}
?>


<br>
<br>
<!-- Сделайте класс Test с публичными свойствами prop1 и prop2, а также с приватными свойствами prop3 и prop4. -->

<!-- Вызовите функцию get_class_vars внутри класса Test (например, в конструкторе). Выведите массив доступных свойств. -->
<?php
class Test_4
{
    public $prop_1;
    public $prop_2;
    private $prop_3;
    private $prop_4;

    public function __construct() {
       $arr = get_class_vars(Test_4);
       return $arr;
    }
}
// Вызовите функцию get_class_vars снаружи класса Test. Выведите массив доступных свойств.
$arr = get_class_vars(Test_4);
foreach($arr as $key => $elem) {
    echo $key . '<br>';
}
$arr2 = new Test_4;
echo '<pre>';
print_r($arr2);
echo '</pre>';
?>

<!-- Сделайте класс Test с публичными свойствами prop1 и prop2, а также с приватными свойствами prop3 и prop4. Создайте объект этого класса. С помощью функции get_object_vars получите массив свойств созданного объекта. -->

<?php
class Test_5
{
    public $prop_1;
    public $prop_2;
    private $prop_3;
    private $prop_4 = 1;

    public function __construct() {
       $arr = get_object_vars($this);
       return $arr;
    }
}

$test = new Test_5;
$arr = get_object_vars($test);
echo '<pre>';
print_r($arr);
echo '</pre>';

echo '<pre>';
print_r($test);
echo '</pre>';
?>

<!-- Пусть у вас есть класс Test1 и нет класса Test2. Проверьте, что выведет функция class_exists для класса Test1 и для класса Test2. -->

<?php
class Test_6
{

}

echo class_exists(Test_6) . '<br>';
var_dump(class_exists(Test_7));
?>

<br>
<br>
<!-- Пусть GET параметром в адресную строку передается название класса. Проверьте, существует ли такой класс. Выведите соответствующее сообщение на экран. -->
<a href="/?id=Test_6">oop</a>
<a href="/?id=Test_7">oop</a>
<?php
var_dump(class_exists($_GET[id]));
?>


<br>
<br>
<!-- Сделайте класс Test с методом method1 и без метода method2. Проверьте, что выведет функция method_exists для метода method1 и для метода method2. -->
<?php
class Test_7
{
    private $num = 2;

    public function method1(){
       return pow($this->num, 2);
    }
    // public function method2(){
    //     return pow($this->num, 3);
    //  }
    //  public function method3(){
    //     return pow($this->num, 4);
    //  }
}
var_dump(method_exists(Test_7, method1));
var_dump(method_exists(Test_7, method2));
?>
<br>
<br>
<!-- Пусть GET параметрами в адресную строку передаются название класса и его метод. Проверьте, существует ли такой класс. Если существует - проверьте существование переданного метода. Если и метод существует - создайте объект данного класса, вызовите указанный метод и выведите результат его работы на экран. -->
<a href="?class=Test_7&method=method2">проверка метода на существование</a>
<?php
if(class_exists($_GET['class'])){
    if(method_exists($_GET['class'], $_GET['method'])) {
        $test = new Test_7;
       echo  $test->method1();
    }
}
?>

<br>
<br>
<!-- Сделайте класс Test со свойством prop1 и без свойства prop2. Проверьте, что выведет функция property_exists для свойства prop1 и для свойства prop2. -->
<?php
class Test_8
{
    public $prop_1;


    public function __construct() {
       $arr = get_object_vars($this);
       return $arr;
    }
}
var_dump(property_exists(Test_8, prop_1));
var_dump(property_exists(Test_8, prop_2));
?>

<br>
<br>
<!-- Дан массив со свойствами класса. Дан также класс, имеющий часть из этих свойств. Переберите этот массив циклом, для каждого свойства проверьте, существует ли оно в классе и, если существует, выведите на экран значение этого свойства. -->
<?php
$array = ['prop1', 'prop2', 'prop3', 'prop4', 'prop5', 'prop6'];

class Test_9
{
    public $prop1 = 'test1';
    public $prop4 = 'test2';
    public $prop6 = 'test3';


    public function __construct() {
       $arr = get_object_vars($this);
       return $arr;
    }
}
$test = new Test_9;
foreach($array as $elem) {
    if(property_exists(Test_9, $elem)) {
        echo $test->$elem . '<br>';
    }
}
?>

<br>
<br>
<!-- Сделайте класс ChildClass наследующий от ParentClass. С помощью функции get_parent_class выведите на экран родителя класса ParentClass. -->
<?php
class ParentClass
{

}

class ChildClass extends ParentClass {

}
$child = new ChildClass;
echo get_parent_class($child);
?>

<br>
<br>
<!-- Сделайте класс ChildClass наследующий от ParentClass, который в свою очередь наследует от GrandParentClass -->
<?php
class GrandParentClass
{

}

class ParentClass2 extends GrandParentClass
{

}

class ChildClass2 extends ParentClass2
{

}
// С помощью функции is_subclass_of проверьте, является ли класс ChildClass потомком GrandParentClass.
if(is_subclass_of(ChildClass2, GrandParentClass)){
    echo 'yes';
}else {
    echo 'no';
}
echo '<br>';
// С помощью функции is_subclass_of проверьте, является ли класс ParentClass потомком GrandParentClass.
if(is_subclass_of(ParentClass2, GrandParentClass)){
    echo 'yes';
}else {
    echo 'no';
}
echo '<br>';
// С помощью функции is_subclass_of проверьте, является ли класс ChildClass потомком ParentClass.
if(is_subclass_of(ChildClass2, ParentClass2)) {
    echo 'yes';
}else {
    echo 'no';
}
?>

<br>
<br>
<!-- делайте класс ChildClass наследующий от ParentClass. Создайте объект класса ChildClass, запишите его в переменную $obj. -->
<?php
class ParentClass3 
{

}

class ChildClass3 extends ParentClass3
{

}
$obj = new ChildClass3;

// С помощью функции is_a проверьте, принадлежит ли объект $obj классу ChildClass.
var_dump(is_a($obj, ChildClass3));

// С помощью функции is_a проверьте, принадлежит ли объект $obj классу ParentClass.
var_dump(is_a($obj, ParentClass3));
var_dump($obj instanceof ParentClass);
?>

<br>
<br>
<!-- Выведите на экран список всех объявленных классов. -->
<?php
echo '<pre>';
print_r(get_declared_classes());
echo '</pre>'
?>

<br>
<br>
<!-- Самостоятельно, не подсматривая в мой код, реализуйте такой же абстрактный класс User, а также классы Employee и Student, наследующие от него. -->

<!-- Добавьте в ваш класс User такой же абстрактный метод increaseRevenue. Напишите реализацию этого метода в классах Employee и Student. -->

<!-- Добавьте также в ваш класс User абстрактный метод decreaseRevenue (уменьшить зарплату). Напишите реализацию этого метода в классах Employee и Student. -->
<?php
abstract class User23
{
    private $name;

    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }

    abstract protected function increaseRevenue($value);

    abstract protected function decreaseRevenue($value);
}
class Employee23 extends User23
{
    private $salary;
    public function getSalary() {
        return $this->salary;
    }
    public function setSalary($salary) {
        $this->salary = $salary;
    }

    public function increaseRevenue($value) {
        $this->salary += $value;
    }
    public function decreaseRevenue($value) {
        $this->salary -= $value;
    }
}
class Students23 extends User23
{
    private $scholarship;
    public function getScholarship() {
        return $this->scholarship;
    }
    public function setScholarship($scholarship) {
        $this->scholarship = $scholarship;
    }

    public function increaseRevenue($value) {
        $this->scholarship += $value;
    }
    public function decreaseRevenue($value) {
        $this->scholarship -= $value;
    }
}

$user = new Students23;
$user->setName('Ilya');
$user->setScholarship(202);

echo $user->getName('Ilya') . '<br>';
echo $user->getScholarship(). '<br>';

echo $user->increaseRevenue(150). '<br>';
echo $user->getScholarship(). '<br>';

echo $user->decreaseRevenue(100). '<br>';
echo $user->getScholarship(). '<br>';
?>

<br>
<br>
<!-- Сделайте аналогичный класс Rectangle (прямоугольник), у которого будет два приватных свойства: $a для ширины и $b для длины. Данный класс также должен наследовать от класса Figure и реализовывать его методы. -->

<!-- Добавьте в класс Figure метод getSquarePerimeterSum, который будет находить сумму площади и периметра. -->
<?php
abstract class Figure
{
    abstract protected function getSquare();
    abstract protected function getPerimeter();

    public function getSquarePerimeterSum() {
        return $this->getSquare() + $this->getPerimeter();
    }
}
class Rectangle2 extends Figure
{
    private $a;
    private $b;

    public function getA() {
        return $this->a;
    }
    public function getB() {
        return $this->b;
    }

    public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }
    public function getSquare() {
    return $this->a * $this->b;
}
    public function getPerimeter() {
    return 2* ($this->a + $this->b);
}
}
$rectangle = new Rectangle2(2, 4);
$rectangle->getA();
$rectangle->getB();

echo $rectangle->getSquare() . '<br>';
echo $rectangle->getPerimeter() . '<br>';
echo $rectangle->getSquarePerimeterSum() . '<br>';

?>