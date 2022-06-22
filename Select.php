<?php require_once 'Teg.php' ?>
<?php require_once 'Option.php' ?>
<?php require_once 'Form.php' ?>
<?php require_once 'Submit.php' ?>


<?php
class Select extends Tag
{
    private $arrOption = [];

    public function __construct() {
        parent::__construct('select');
    }
    
    public function add( Option $option) {
        $this->arrOption[] = $option;
        return $this;
    }

    public function show() {
        $result = $this->open();

        foreach($this->arrOption as $arrOption) {
            $result .= $arrOption->show();
        }

        $result .= $this->close();

        return $result;
    }

    public function __toString() {
        return $this->show();
    }
}
?>

<?php
$form = (new Form())->setAttrs(['action'=>'', 'method'=>'GET']);
echo $form->open();
	echo (new Select())->setAttr('name', 'name')
		->add( (new Option())->setText('1')->setAttr('value', 'item1') )
		->add( (new Option())->setText('2')->setSelected()->setAttr('value', 'item2') )
		->add( (new Option())->setText('3')->setAttr('value', 'item3') )
	->show();
    echo '<br>';
    echo new Submit;

echo $form->close();
?>

<!-- <form action="" method="GET">

<select name="name" id="">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
</select>
<input type="submit">

</form> -->