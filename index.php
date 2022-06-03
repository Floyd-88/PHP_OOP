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