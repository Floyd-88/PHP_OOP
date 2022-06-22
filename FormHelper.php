<?php require_once 'TagHelper.php' ?>

<?php
class FormHelper extends TagHelper
{
public function openForm( $attrs = []) {
    return $this->open('form', $attrs);
}

public function closeForm() {
    return $this->close('form');
}

public function input($attrs = []) {
    if(isset($attrs['name'])) {
        $name = $attrs['name'];
        if(isset($_REQUEST[$name])) {
            $value = $_REQUEST[$name];
            $attrs['value'] = $value;
        }
    } 
    return $this->open('input', $attrs) . '<br>';
}

public function hidden($attrs = []) {
    $attrs['type'] = 'hidden';
    return $this->open('input', $attrs);
}

public function checkbox($attrs = [], $text) {
    $attrs['type'] = 'checkbox';
    $attrs['value'] = 1;

    if(isset($attrs['name'])) {
        $name = $attrs['name'];
        
        if(isset($_REQUEST[$name]) and $_REQUEST[$name] == 1) {
            $attrs['checked'] = true;
        } 
        $hidden = $this->hidden(['name'=>$name, 'value'=> 0]);
    } else {
        $hidden = '';
    }
    return $this->open('p') . $hidden . $this->open('input', $attrs) . $text .$this->close('p');
}

public function textarea($text = '', $attrs = []) {
    $attrs['name'] = 'text';
    $name = $attrs['name'];
    if(isset($_REQUEST[$name])) {
        $value = $_REQUEST[$name];
        $text = $value;
    }
    return $this->open('textarea', $attrs) . $text . $this->close('textarea') . '<br><br>';
}

public function select($select = [], $option = []) {
$str = '';
$name = $select['name'];
    foreach($option as $elem) {
        if($elem['attrs']['value'] == $_REQUEST[$name]) {
            $elem['attrs']['selected'] = true;
        } else {
            unset($elem['attrs']['selected']);
        }
      $str .= $this->open('option', $elem['attrs']) . $elem['text'] . $this->close('option'); 
    }

    return $this->open('select', $select) . 
    $str. 
    $this->close('select');
}

public function submit($attrs = []) {
    $attrs['type'] = 'submit';
    return $this->open('input', $attrs);
    }
}
?>

<?php
	$fh = new FormHelper();
	
	echo $fh->openForm(['action' => '', 'method' => 'GET']);
    echo $fh->show('h3', 'Введите год своего рождения:');
		echo $fh->input(['name' => 'year']);
    
    echo $fh->show('h3', 'Выберите город проживания:');
		echo $fh->checkbox(['name' => 'chec1'], 'Москва');
        echo $fh->checkbox(['name' => 'chec2'], 'London');
        echo $fh->checkbox(['name' => 'chec3'], 'Vena');

    echo $fh->show('h3', 'Пункты меню:');    
    echo $fh->select(
		['name' => 'list', 'class' => 'eee'],
		[
			['text' => 'item1', 'attrs' => ['value' => '1']],
			['text' => 'item2', 'attrs' => ['value' => '2', 'selected' => true]],
			['text' => 'item3', 'attrs' => ['value' => '3', 'class' => 'last']],
		]
	);

    echo $fh->show('h3', 'Напишите комментарий:');
        echo $fh->textarea();
		echo $fh->submit();
	echo $fh->closeForm();
?>
