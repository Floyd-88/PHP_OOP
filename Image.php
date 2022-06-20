<?php
require_once 'Teg.php';
?>

<?php
class Image extends Tag
{
public function __construct(){
$this->setAttr('src', '')->setAttr('alt', '');

parent::__construct('img');
    }
    public function __toString() {
        return parent::open();
    }
}
?>

<?php
echo (new Image())->setAttrs(['src' => 'https://pro-dachnikov.com/uploads/posts/2021-10/1633461433_3-p-dom-vozle-ozera-foto-3.jpg', 'alt' => 'house', 'width' => '300', 'height' => '200'])-> open();
echo '<br>';
$img = new Image();
echo $img->setAttr('src', 'http://almode.ru/uploads/posts/2021-06/1624031449_21-almode_ru-p-dom-v-lesu-u-ozera-23.jpg')->setAttr('alt', 'house2')->setAttr('width', 200);
echo $img;
?>