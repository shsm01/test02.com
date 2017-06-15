<?php
class Point2D {

    var $x, $y;
    var $label;

    function Point2D($x, $y) 
    {
        $this->x = $x;
        $this->y = $y;
    }

    function setLabel($label) 
    {
        $this->label = $label;
    }

    function getPoint() 
    {
        return array("x" => $this->x,
                     "y" => $this->y,
                     "label" => $this->label);
    }
}

// "$label" объявлена, но не установлена
$p1 = new Point2D(1.233, 3.445);
print_r(get_object_vars($p1));

$p1->setLabel("point #1");
print_r(get_object_vars($p1));

?>