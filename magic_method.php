<!-- Сделайте класс User, в котором будут следующие свойства - name, surname, patronymic. Сделайте так, чтобы при выводе объекта через echo на экран выводилось ФИО пользователя. -->
<?php
class User{
    private $name;
    private $surname;
    private $patronymic;

    public function __construct($n, $a, $p) {
        $this->name = $n;
        $this->surname = $a;
        $this->patronymic = $p;
    }

    public function __toString() {
        return $this->name . ' ' . $this->surname . ' ' . $this->patronymic;
    }
}
$user = new User('Ilya', 'Sazonov', 'Anatolevich');
echo $user;
?>

<br>
<br>
<!-- Не подсматривая в мой код, реализуйте такой же класс Arr. -->
<?php
class Arr
{
    private $numbers = [];

    public function add($num) {
        $this->numbers[] = $num;
        return $this;
    }
    public function __toString() {
        return (string) array_sum($this->numbers);
    }
}
$arr = new Arr;
echo $arr->add(1)->add(2)->add(3);
?>


<br>
<br>
<!-- Пусть дан вот такой класс User, свойства которого доступны только для чтения с помощью геттеров:
	class User
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
Переделайте код этого класса так, чтобы вместо геттеров использовался магический метод __get. -->
<?php
	class User_2
	{
		private $name;
		private $age;
		
		public function __construct($name, $age)
		{
			$this->name = $name;
			$this->age = $age;
		}
		
        public function __toString() {
            return $this->name . ' ' . $this->age;
        }
        public function __get($property) {
            return $this->$property;
        }

		// public function getName()
		// {
		// 	return $this->name;
		// }
		
		// public function getAge()
		// {
		// 	return $this->age;
		// }
	}
    $user = new User_2('Ilya', 33);
    echo $user . '<br>';
    echo $user->name . ' ';
    echo $user->age;
?>

<br><br>
<!-- 
Сделайте класс Date с публичными свойствами year, month и day.    
С помощью магии сделайте свойство weekDay, которое будет возвращать день недели, соответствующий дате. -->
<?php
class Date
{
    public $year;
    public $month;
    public $day;

    public function __get($property) {
        if($property == 'weekDay'){
            $arr = ["вс", "пн", "вт", "ср", "чт", "пт", "сб"];
            return $arr[date('w', strtotime($this->year .'-'. $this->month .'-'.$this->day))];
        }
    }  
}
$date = new Date;
$date->year = 2022;
$date->month = 6;
$date->day = 15;
echo $date->weekDay;
?>

<br>
<br>
<!-- Пусть дан вот такой класс User с геттерами и сеттерами свойств:
	class User
	{
		private $name;
		private $age;
		
		public function getName()
		{
			return $this->name;
		}
		
		public function setName($name)
		{
			if ($name != '') { // проверяем имя на непустоту
				$this->name = $name;
			}
		}
		
		public function getAge()
		{
			return $this->age;
		}
		
		public function setAge($age)
		{
			if ($age >= 0 and $age <= 70) { // проверяем возраст
				$this->age = $age;
			}
		}
	}
Переделайте код этого класса так, чтобы вместо геттеров и сеттеров использовались магический методы __get и __set. -->
<?php
	class User_3
	{
		private $name;
		private $age;

        public function __get($property) {
            return $this->$property;
        }

        public function __set($property, $value) {
            switch($property){
                case 'name':
                    if($value != '') {
                        $this->$property = $value;
                    }
                    break;
                case 'age':
                    if($value >= 0 and $value <= 70) {
                        $this->$property = $value;
                    }
                    break;
                    default:
                    echo 'Такого свойства нет!!!';
                    break;
            }
	}
}

    $user = new User_3;
    $user->name = 'Ilya';
    echo $user->name . ' ';
    $user->age = 70;
    echo $user->age . ' ';
?>