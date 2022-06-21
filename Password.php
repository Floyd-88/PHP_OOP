<?php require_once 'Teg.php' ?>
<?php require_once 'Submit.php' ?>

<?php
class Password extends Tag
{
    public function __construct() {
        $this->setAttr('type', 'password');
        parent::__construct('input');
    }
}
?>

<?php
$form = (new Form())->setAttrs(['action'=>'', 'method'=>'GET']);
echo $form->open();
echo new Password();
echo new Submit();
echo $form->close();
?>

<?php
	$form = (new Form)->setAttrs([
		'action' => '',
		'method' => 'GET'
	]);
	
	echo $form->open();
		echo (new Input)   ->setAttr('name', 'login');
		echo (new Password)->setAttr('name', 'passw');
		echo new Submit;
	echo $form->close();
?>