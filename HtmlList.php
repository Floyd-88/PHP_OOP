<?php require_once 'Teg.php' ?>
<?php require_once 'ListItem.php' ?>

<?php
class HtmlList extends Tag
{
    private $items = [];

    public function addItem(ListItem $li) {
        $this->items [] = $li;
        return $this;
    }

    public function show() {
        $result = $this->open();
        foreach($this->items as $item) {
            $result .= $item->show();
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
// echo (new HtmlList('ul'))->
// addItem((new ListItem())->setText('item1'))->
// addItem((new ListItem())->setText('item2'))->
// addItem((new ListItem())->setText('item3'));

?>

