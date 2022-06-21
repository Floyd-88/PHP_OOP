<?php require_once 'Teg.php' ?>
<?php require_once 'Input.php' ?>
<?php require_once 'Submit.php' ?>

<?php
class Textarea extends Tag
{
    public function __construct() {
        parent::__construct('textarea');
    }

    public function open() {
        $nameTextarea = $this->getAttr('name');
        
        if($nameTextarea) {
           
            if(isset($_REQUEST[$nameTextarea])) {
                $text = $_REQUEST[$nameTextarea];
                $this->setText($text);
            }
        }
        return parent::open();
    }
}
?>
<?php
	// echo (new Textarea)->show();
?>
<br>
<?php
	// echo (new Textarea)->setAttr('name', 'text')->show();
?>
<br><?php
	// echo (new Textarea)
	// 	->setAttr('name', 'text')
	// 	->setText('my mess')
	// 	->show();
?>
<br><br>
<?php
	$form = (new Form)->setAttrs(['action' => '', 'method' => 'GET']);
	
	echo $form->open();
		echo (new Input)->setAttr('name', 'user') . '<br>';
		echo (new Textarea)->setAttr('name', 'message')->show() . '<br>';
		echo new Submit;
	echo $form->close();
?>