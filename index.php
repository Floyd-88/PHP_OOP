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