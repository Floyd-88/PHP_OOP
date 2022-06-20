<?php require_once 'Form.php' ?>

<?php
class Input extends Tag
{
    public function __construct() {

        parent::__construct('input');
    }
    public function open() {
        $inputName = $this->getAttr('name');

        if( $inputName ) {
            if(isset($_REQUEST[$inputName])) {
                $value = $_REQUEST[$inputName];
                $this->setAttr('value', $value);
            }
            
        }
        return parent::open();
    }

    public function __toString() {
        return $this->open();
    }

    public function sumNum() {
        $sum = 0; 
        foreach($_REQUEST as $elem) {
            if(is_numeric($elem)) {
                $sum += $elem; 
            }
        }
        return $sum;
    }
}
?>

<?php
// $form = (new Form())->setAttrs(['action'=>'', 'method'=>'GET']);
// echo $form->open();
// echo (new Tag('div'))->setText('Введите год:');
// echo (new Input())->setAttr('name', 'year');
// echo (new Input())->setAttr('type', 'submit');
// echo $form->close();
?>

<?php
// $form1 = (new Form())->setAttrs(['action'=>'', 'method'=>'GET']);
// echo $form1->open();
// echo (new Tag('div'))->setText('Введите имя:');
// echo (new Input())->setAttr('name','name') . '<br>';

// echo (new Tag('div'))->setText('Введите год:');
// echo (new Input())->setAttrs(['name'=>'year', 'value'=>date('Y')]) . '<br>';

// echo (new Input())->setAttr('type','submit');

// echo $form1->close();
?>

<!-- С помощью созданного класса сделайте форму с 5-ю инпутами. Пусть в каждый инпут можно ввести число. Сделайте так, чтобы после отправки на экран выводилась сумма этих чисел, а введенные значения не пропадали из инпутов. -->
<?php
// $form1 = (new Form())->setAttrs(['action'=>'', 'method'=>'GET']);
// echo $form1->open();
// echo (new Tag('div'))->setText('Введите число 1:');
// echo (new Input())->setAttr('name','num_1') . '<br>';

// echo (new Tag('div'))->setText('Введите число 2:');
// echo (new Input())->setAttr('name','num_2') . '<br>';

// echo (new Tag('div'))->setText('Введите число 3:');
// echo (new Input())->setAttr('name','num_3') . '<br>';

// echo (new Tag('div'))->setText('Введите число 4:');
// echo (new Input())->setAttr('name','num_4') . '<br>';

// echo (new Tag('div'))->setText('Введите число 5:');
// echo (new Input())->setAttr('name','num_5') . '<br>';

// echo (new Input())->setAttr('type','submit');

// echo (new Tag('div'))->setText(((new Input())->sumNum()));
// echo $form1->close();
?>