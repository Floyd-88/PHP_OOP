<?php require_once 'HtmlList.php' ?>
<?php
class Ul extends HtmlList
{
    // private $ol;
    public function __construct() {
        parent::__construct('ul');
    }
}
?>

<?php
echo (new Ul) ->
addItem((new ListItem())->setText('item1'))->
addItem((new ListItem())->setText('item2'))->
addItem((new ListItem())->setText('item3'));
?>