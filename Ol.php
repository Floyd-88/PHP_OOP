<?php require_once 'HtmlList.php' ?>
<?php
class Ol extends HtmlList
{
    // private $ol;
    public function __construct() {
        parent::__construct('ol');
    }
}
?>

<?php
echo (new Ol) ->
addItem((new ListItem())->setText('item1'))->
addItem((new ListItem())->setText('item2'))->
addItem((new ListItem())->setText('item3'));
?>