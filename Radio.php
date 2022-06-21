<?php require_once 'Teg.php' ?>
<?php require_once 'Submit.php' ?>
<?php require_once 'Hidden.php' ?>
<?php require_once 'Input.php' ?>

<?php
class Radio extends Tag 
{
public function __construct() {
    $this->setAttr('type', 'radio');
    parent::__construct('input');
    }

    public function open() {
        $name = $this->getAttr('name');
            if($name) {
            if(isset($_REQUEST[$name])) {
                $value = $_REQUEST[$name];
                
                if($value == $this->getAttr('value')) {
                    $this->setAttr('checked');
                } else {
                    $this->removeClass('checked');
                }
            }
                return parent::open();   
        }
    }

    public function __toString() {
        return $this->open();
    }
}
?>

<?php
$form = (new Form())->setAttrs(['action'=>'', 'method'=>'GET']);
echo $form->open();
echo (new Tag('div'))->setText('Введите имя:');
echo (new Input())->setAttr('name', 'name') . '<br><br>';
echo (new Tag('div'))->setText('Сколько вам лет?');

echo (new Radio())->setAttr('name', 'year')->setAttr('checked')->setAttr('value', '1') . (new Tag('span'))->setText('Меньше 18') . '<br>';

echo (new Radio())->setAttr('name', 'year')->setAttr('value', '2') . (new Tag('span'))->setText('от 18 до 35') . '<br>';

echo (new Radio())->setAttr('name', 'year')->setAttr('value', '3') . (new Tag('span'))->setText('старше 35') . '<br>';

echo new Submit();
echo $form->close();
?>
