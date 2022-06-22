<?php
class TagHelper
{
    public function open($name, $attrs = []) {
        $attrsStr = $this->setAttrs($attrs);
        return "<$name $attrsStr>";
    }
    public function close($name) {
        return "</$name>";
    }
    public function show($name, $text) {
       return $this->open($name) . $text . $this->close($name);
    }
    public function setAttrs($attrs) {
        if(!empty($attrs)) {
            $result = '';

            foreach($attrs as $key=>$value) {
                if($value == false) {
                    $result .= " $key";
                } else {
                    $result .= " $key = \"$value\"";
                }
            }
            return $result;
        } else {

            return '';
        }
    }
}
?>

<?php
	$th = new TagHelper();
	
	// echo $th->open('form', ['action' => '', 'method' => 'GET']);
	// 	echo $th->open('input', ['name' => 'year']);
	// 	echo $th->open('input', ['type' => 'submit']);
	// echo $th->close('form');
?>
<?php
	// $tb = new TagHelper();	
	// echo $tb->show('div', 'Hello world');
?>
