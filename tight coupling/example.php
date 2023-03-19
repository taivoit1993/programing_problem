<?php
class A
{
    private $value = 0;

    public function setValue($value){
        $this->value = $value;
    }

    public function getValue(){
        return $this->value;
    }

}

class B
{
    private $a;
    function __construct(A $a)
    {
        $this->a = $a;
    }

    public function  getValue()
    {
        print("value = " . $this->a->getValue());
    }
}
$a = new A();
$a->setValue(10);
$b = new B($a);
$b->getValue();
