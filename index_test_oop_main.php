<?php

error_reporting(E_ALL);

interface interfaceExample
{
    public function requiredMethod();
}

trait traitExample
{

   public function traitMethod()
   {
       return 'hello trait';
   }
}

abstract class parentClass implements interfaceExample
{
    use traitExample;

    private $a;
    public $b;
    protected $c;

    public function __construct($a,$b,$c)
    {
         $this->a=$a;
         $this->b=$b;
         $this->c=$c;
    }

   public function getA()
   {
       return $this->a;
   }

  public  function requiredMethod()
  {
      return 'This is required method from interface';
  }

  abstract function testAbstract();


}

class childClass extends parentClass
{
    public $d;

    public function __construct($a, $b, $c, $d)
    {
        parent::__construct($a, $b, $c);
        $this->d = $d;
    }

    public function getC()
    {
        return $this->c;
    }

    public function testAbstract()
    {
        return 'abstractMethod';
    }

}


$obj=new childClass('A2','B2','C2','D2');

echo $obj->getA().'<br>';
echo $obj->b.'<br>';
echo $obj->getC().'<br>';
echo $obj->d.'<br>';

echo $obj->requiredMethod().'<br>';

echo $obj->traitMethod().'<br>';

echo $obj->testAbstract().'<br>';



