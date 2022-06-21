<?php require_once 'Teg.php' ?>
<?php require_once 'Submit.php' ?>
<?php require_once 'Hidden.php' ?>
<?php require_once 'Input.php' ?>

<?php
class Checkbox extends Tag 
{
public function __construct() {
    $this->setAttr('type', 'checkbox');
    $this->setAttr('value', '1');
    parent::__construct('input');
    }

    public function open() {
        $name = $this->getAttr('name');
        if($name) {
            $hidden = (new Hidden())->
            setAttr('name', $name)->
            setAttr('value', '0');

            if(isset($_REQUEST[$name])) {
                $value = $_REQUEST[$name];

                if($value == 1) {
                    $this->setAttr('checked');
                } else {
                    $this->removeClass('checked');
                }
            }
                return parent::open();
        } else {
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
echo (new Tag('div'))->setText('Укажите города которые вы бы хотели посетить:');
echo (new Checkbox())->setAttr('name', 'city_1') . (new Tag('span'))->setText('Moscow') . '<br>';
echo (new Checkbox())->setAttr('name', 'city_2') . (new Tag('span'))->setText('London') . '<br>';
echo (new Checkbox())->setAttr('name', 'city_3') . (new Tag('span'))->setText('New-York') . '<br>';
echo new Submit();
echo $form->close();
?>
