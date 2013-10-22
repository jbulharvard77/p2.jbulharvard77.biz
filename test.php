<?php
class A {
    public $testA = 1;
}  

class B {
    public $testB = "class B";
}  

$a = new A;
$b = $a;     
$b->testA = 2;

$c = new B;
$a = $c;

$a->testB = "Changed Class B";

echo "<br/> object a: "; var_dump($a);
echo "<br/> object b: "; var_dump($b);
echo "<br/> object c: "; var_dump($c);

?>