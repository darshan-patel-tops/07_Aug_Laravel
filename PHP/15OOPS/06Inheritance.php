<?php



class calc
{
    public $num1 = 13;
    protected $num2 = 12 ;
    private $num3 = 11;


    public function aot()
    {
        echo "Total is from parent ".$this->num1+$this->num2+$this->num3."<br>";
        echo $this->num3."<br>";
    }
}

class acalc  extends calc
{
    public function aot()
    {
        parent::aot();
        // parent::$num3;
        // self::aot();
        echo "Total is  from child ".$this->num1+$this->num2;
        // echo "Total is  from child".$this->num1+$this->num2+$this->num3;
    }
}




$obj = new acalc;
$obj->aot();

?>


