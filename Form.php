<?php require_once 'Teg.php' ?>

<?php
class Form extends Tag
{
    public function __construct() {
        parent::__construct('form');
    }
}
?>

<?php
// echo (new Form())->setAttrs(['action'=>'', 'method'=>'GET']);
?>