<!-- Реализуйте класс Country со свойствами name, age, population и геттерами для них. Пусть наш класс для сокращения своего кода использует уже созданный нами трейт Helper. -->
<?php
class Country
{
    use Helper;
    private $population;

    public function __construct($name, $age, $population) {
        $this->name = $name;
        $this->age = $age;
        $this->population = $population;
    }

    public function getPopulation() {
        echo $this->population;
    }
}

trait Helper
{
    private $name;
    private $age;
    
    public function getName()
    {
        return $this->name;
    }
    
    public function getAge()
    {
        return $this->age;
    }
}

$country = New Country('Moscow', 1000, 15000000);
echo $country->getName() . '<br>';
echo $country->getAge() . '<br>';
$country->getPopulation() . '<br>';
?>

<br>
<br>
<!-- Сделайте 3 трейта с названиями Trait1, Trait2 и Trait3. Пусть в первом трейте будет метод method1, возвращающий 1, во втором трейте - метод method2, возвращающий 2, а в третьем трейте - метод method3, возвращающий 3. Пусть все эти методы будут приватными. -->
<?php
trait Trait1 
{
private function method1() {
    return 1;
    }
}
trait Trait2 
{
private function method2() {
    return 2;
    }
}
trait Trait3
{ 
private function method3() {
    return 3;
    }
}

// Сделайте класс Test, использующий все три созданных нами трейта. Сделайте в этом классе публичный метод getSum, возвращающий сумму результатов методов подключенных трейтов.
class Test 
{
    use Trait1;
    use Trait2;
    use Trait3;

    public function getSum() {
        return $this->method1() + $this->method2() + $this->method3();
    }

}
$test = New Test;
echo $test->getSum();
?>


<br>
<br>
<!-- Сделайте 3 трейта с названиями Trait1, Trait2 и Trait3. Пусть в первом трейте будет метод method, возвращающий 1, во втором трейте - одноименный метод, возвращающий 2, а в третьем трейте - одноименный метод, возвращающий 3. -->
<?php
trait Trait_1 
{
private function method() {
    return 1;
    }
}
trait Trait_2 
{
private function method() {
    return 2;
    }
}
trait Trait_3
{ 
private function method() {
    return 3;
    }
}

// Сделайте класс Test, использующий все три созданных нами трейта. Сделайте в этом классе метод getSum, возвращающий сумму результатов методов подключенных трейтов.
class Test_2
{
    use Trait_1, Trait_2, Trait_3 {
        Trait_1::method insteadof Trait_2, Trait_3;
        Trait_1::method as method_1;
        Trait_2::method as method_2;
        Trait_3::method as method_3;
    }
    public function getSum() {
        return $this->method1 + $this->method2 + $this->method3;
    }
}
$test_2 = new Test_2;
echo $test->getSum();
?>

<br>
<br>
<!-- Скопируйте код моего трейта TestTrait и код моего класса Test. Удалите из класса метод method2. Убедитесь в том, что отсутствие его реализации приведет к ошибке PHP. -->
<?php
	trait TestTrait
	{
		public function method1()
		{
			return 1;
		}
		
		abstract public function method2();
	}
?>

<?php
	class Test_3
	{
		use TestTrait; // используем трейт
		
		// Реализуем абстрактный метод:
		public function method2()
		{
			return 2;
		}
	}
	
	$test = new Test_3;
    echo $test->method1() . '<br>';
    // echo $test->method2() . '<br>';
?>


<br>
<br>
<!-- Самостоятельно сделайте такие же трейты, как у меня и подключите их к классу Test. Сделайте в этом классе метод getSum, возвращающий сумму результатов методов подключенных трейтов. -->
<?php
trait Trait_4
{
    private function method1() {
        return 10;
    }
    private function method2() {
        return 20;
    }
}

trait Trait_5
{
    use Trait_4;

    private function method3() {
        return 30;
    }

}

class Test_4
{
    use Trait_5;
    public function getSum() {
        return $this->method1() + $this->method2() + $this->method3();
    }
}

$test = new Test_4;
echo $test->getSum();
?>

<br>
<br>
<!-- Пусть у вас есть трейт Trait1 и нет трейта Trait2. Проверьте, что выведет функция trait_exists для трейта Trait1 и для трейта Trait2. -->
<?php
trait Trait_6
{

}
var_dump(trait_exists(Trait_6));
var_dump(trait_exists(Trait_7));
?>

<br><br>
<!-- Выведите на экран список всех объявленных трейтов. -->
<?php
$arr = get_declared_traits();
echo '<pre>';
print_r($arr);
echo '</pre>';
?>