<?php require_once 'Input.php' ?>

<?php
class Submit extends Input
{
    public function __construct() {
        $this->setAttr('type', 'submit');

        parent::__construct();
    }
}
?>

<?php
$form3 = (new Form())->setAttrs(['action'=>'', 'method'=>'GET']);
echo $form3->open();

echo (new Tag('div'))->setText('Имя');
echo (new Input())->setAttr('name', 'name');

echo (new Tag('div'))->setText('Зарплата');
echo (new Input())->setAttr('name', 'salary');

echo (new Tag('div'))->setText('Дней');
echo (new Input())->setAttr('name', 'days') . '<br>';

echo new Submit;

echo (new Tag('div'))->setText((new Input())->sumNum());

echo $form3->close();
?>