<?php
	interface iTag
	{
		// Геттер имени:
		public function getName();
		
		// Геттер текста:
		public function getText();
		
		// Геттер всех атрибутов:
		public function getAttrs();
		
		// Геттер одного атрибута по имени:
		public function getAttr($name);
		
		// Открывающий тег, текст и закрывающий тег:
		public function show();
		
		// Открывающий тег:
		public function open();
		
		// Закрывающий тег:
		public function close();
		
		// Установка текста:
		public function setText($text);
		
		// Установка атрибута:
		public function setAttr($name, $value = true);
		
		// Установка атрибутов:
		public function setAttrs($attrs);
		
		// Удаление атрибута:
		public function removeAttr($name);
		
		// Установка класса:
		public function addClass($className);
		
		// Удаление класса:
		public function removeClass($className);
	}
?>

<?php
class Tag implements iTag 
{
    private $name;
    private $text;
    private $arr = [];

    public function __construct($name){
        $this->name = $name;
    }

    //Геттер имени:
    public function getName() {
        return $this->name;
    }
    //Геттер текста внутри тега:
    public function getText() {
        return $this->text;
    }

    //Геттер всех атрибутов:
    public function getAttrs() {
        return $this->arr;
    }

    //Геттер свойства конкретного атребута по имени:
    public function getAttr($name) {
        if(isset($this->arr[$name])){
            return $this->arr[$name];
        } else {
            return null;
        }        
    }

    //Вывести html разметку на экран:
    public function show() {
        return $this->open() . $this->text . $this->close();
    }

    //Открывающий тег:
    public function open() {
        $name = $this->name;
        $array = $this->atributeClass($this->arr);
        return "<$name $array>";
    }

    //Закрывающий тег:
    public function close() {
        return "</$this->name>";
    }    

    //Установка текста в тег:
    public function setText($text) {
        $this->text = $text;
        return $this;
    }

    //Добавление атрибута:
    public function setAttr($name, $value = true) {
        $this->arr[$name] = $value;
        return $this; 
    }

    //Добавление массива атрибутов в массив arr:
    public function setAttrs($arr) {
        foreach($arr as $name=>$value) {
            $this->setAttr($name, $value);
        }
        return $this;
    }

    //Удвление атрибута:
    public function removeAttr($name) {
        if(isset($this->arr[$name])) {
          unset($this->arr[$name]);
        }
        return $this; 
    }

    //Установка класса:
    public function addClass($className) {
        if(isset($this->arr['class'])){
            $classNames = explode(' ', $this->arr['class']);
            if(!in_array($className, $classNames)) {
                $classNames[] = $className;
                $this->arr['class'] = implode(' ', $classNames);
            }
        } else {
            $this->arr['class'] = $className;
        }
        return $this;
    }

    //Удаление класса:
    public function removeClass($className) {
        if(isset($this->arr['class'])) {
            $classNames = explode(' ', $this->arr['class']);
            if(in_array($className, $classNames)) {
                $n = array_search($className, $classNames);
                if($n !== false) {
                    unset($classNames[$n]);
                    $this->arr['class'] = implode(' ', $classNames);
                }
            }
        }
        return $this;
    } 

    //Установка атрибутов в тег:
    private function atributeClass($arr) {
        if(!empty($arr)) {
            $result = '';
            foreach($arr as $name=>$value) {
                if($value === true) {
                    $result .= " $name ";
                } else {
                    $result .= " $name='$value' ";
                }
            }
            return $result;
        }else {
            return "";
        }
    }
    public function __toString() {
        return $this->show();
     }
}



// $header = new Tag('header');
// echo $header->setText('Header сайта')->show() . '<br>';

// $h1 = new Tag('h1');
// echo $h1->setText('Hello')->show() . '<br>';

// $img = new Tag('img');
// echo $img->setAttr('src', 'https://get.wallhere.com/photo/landscape-sea-reflection-bridge-suspension-bridge-1680x1050-px-nonbuilding-structure-cable-stayed-bridge-truss-bridge-706446.jpg')->setAttr('alt', 'picture')->setAttr('height', '100px')->open();
// echo $img->removeAttr('height')->setAttr('height', '200px')->removeAttr('alt')->open();
// $img1 = new Tag('img');
// $img1->setAttr('src', 'https://get.wallhere.com/photo/landscape-sea-reflection-bridge-suspension-bridge-1680x1050-px-nonbuilding-structure-cable-stayed-bridge-truss-bridge-706446.jpg');
// echo $img1->setAttrs(['height' =>'300px', 'alt' => 'img'])->open();
// echo '<br>';
// $input = new Tag('input');
// echo $input->setAttr('type', 'password')->setAttr('value', '1234567')->setAttr('disabled', true)->open();
?>
<!-- <br>
<br> -->
<?php
// echo (new Tag('input'))->setAttr('name', 'name1')->open();
?>
<!-- <br>
<br> -->
<?php
// echo (new Tag('input'))->setAttr('name', 'name2')->open(); 
?>
<!-- <br>
<br> -->

<?php
	// Выведет <input class="eee">:
	// echo (new Tag('input'))->addClass('eee')->open();
?>
<?php
	// Выведет <input class="eee bbb">:
	// echo (new Tag('input'))->addClass('eee')->addClass('bbb')->open();
?>
<?php
	// Выведет <input class="eee bbb kkk">:
	// echo (new Tag('input'))
	// 	->setAttr('class', 'eee bbb')
	// 	->addClass('kkk')->open();
?>
<?php
	// Выведет <input class="eee bbb">:
	// echo (new Tag('input'))
	// 	->setAttr('class', 'eee bbb')
	// 	->addClass('eee') // такой класс уже есть и не добавится
	// 	->open();
?>
<?php
	// Выведет <input class="eee bbb">:
	// echo (new Tag('input'))
	// 	->addClass('eee')
	// 	->addClass('bbb')
	// 	->addClass('eee') // такой класс уже есть и не добавится
	// 	->open();
?>

<!-- <br>
<br> -->
<?php
	// echo (new Tag('input'))
	// 	->setAttr('class', 'eee zzz kkk') // добавим 3 класса
	// 	->removeClass('kkk') // удалим класс 'zzz'
	// 	->open(); // выведет <input class="eee kkk">
?>
<!-- <br> -->
<?php
// echo $header->getName() . '<br>';
// echo $header->getText() . '<br>';
// var_dump($input->getAttrs());
// echo '<br>';
// var_dump($input->getAttr('uuu'));
?>