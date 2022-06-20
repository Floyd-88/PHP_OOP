<?php
require_once 'Teg.php';
?>

<?php
class Link extends Tag {
    const ACTIVE = 'active';

public function __construct() {
    $this->setAttr('href', '');
    parent::__construct('a');
    }

public function open() {
    $this->activeLink();
    return parent::open();
}

private function activeLink() {
    if ($this->getAttr('href') === $_SERVER['REQUEST_URI']) {
        $this->addClass(self::ACTIVE);
    }
} 

}

?>
