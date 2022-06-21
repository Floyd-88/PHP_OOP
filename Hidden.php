<?php require_once 'Teg.php' ?>
<?php require_once 'Input.php' ?>
<?php require_once 'Submit.php' ?>

<?php
class Hidden extends Tag
{
    public function __construct() {
        $this->setAttr('type', 'hidden');
        parent::__construct('input');
    }
    
}
?>

<?php
// $form = (new Form)->setAttrs([
//     'action' => '',
//     'method' => 'GET'
// ]);

// echo $form->open();
//     echo (new Hidden)->setAttr('name', 'id')->setAttr('value', '123');
//     echo (new Input)->setAttr('name', 'year');
//     echo new Submit;
// echo $form->close();
?>

