<?php
class Teg
{
    private $name;
    private $arr;

    public function __construct($name, $arr = []){
        $this->name = $name;
        $this->arr = $arr;
    }
    public function open() {
        $name = $this->name;
        $array = $this->atributeClass($this->arr);

        return "<$name . ' ' . $array>";

    }
    public function close() {
        return "</$this->name>";
    }

    private function atributeClass($arr) {
        if(!empty($arr)) {
            $result = '';
            foreach($arr as $name=>$value) {
                $result .= "$name='$value' ";
            }
            return $result;
        }else {
            return "";
        }

    }
}
$header = new Teg('header');
echo $header->open() . 'header сайта' . $header->close();

$h1 = new Teg('h1');
echo $h1->open() . 'Hello' . $h1->close();

$img = new Teg('img', ['src'=>'https://get.wallhere.com/photo/landscape-sea-reflection-bridge-suspension-bridge-1680x1050-px-nonbuilding-structure-cable-stayed-bridge-truss-bridge-706446.jpg', 'alt'=>'picture', 'height'=>'100pv']);
echo $img->open();
?>
