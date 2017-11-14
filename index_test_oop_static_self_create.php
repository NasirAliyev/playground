<?php

error_reporting(E_ALL);

abstract class parentClass
{
   public static function create()
    {
        return new static();
    }
}


class childClass extends parentClass
{

}

print_r(childClass::create());


