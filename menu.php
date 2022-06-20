<?php
require_once 'Link.php';
?>
<?php
    for($i=1; $i<=5; $i++){
        echo (new Link)->setAttr('href', "/page/$i.php")->setText("Cтраница $i")->addClass('menu')->show();
    }
?>