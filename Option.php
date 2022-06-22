<?php require_once 'Teg.php' ?>
<?php require_once 'Select.php' ?>
<?php
class Option extends Tag
{
    private $item;
    public function __construct() {
        parent::__construct('option');
    }

    public function setSelected() {
        $this->setAttr('selected');
        $this->item = array_keys($_REQUEST)[0];
      
        return $this;
    } 

    public function open() {
        
        if(isset($_REQUEST)) {
            $value = $_REQUEST[$this->item];

            if($value == $this->getAttr('value')) {
                $this->setAttr('selected');
            } else {
                $this->removeAttr('selected');
            }
            return parent::open();
        }
    }

    public function __toString() {
        return $this->open();
    }
}

?>
