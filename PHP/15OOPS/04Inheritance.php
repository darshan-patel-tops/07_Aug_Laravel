<?php




class petrolcar
{
    public function car()
    {
        echo " Petrol Car<br>";
    }
    public function tyre()
    {
        echo " Petrol tyre<br>";
    }
    public function steering()
    {
        echo " Petrol steering<br>";
    }
    public function body()
    {
        echo " Petrol body<br>";
    }
    public function engine()
    {
        echo " Petrol engine<br>";
    }
}


class evcar extends petrolcar
{
    public function car()
    {
        echo " EV Car<br>";
    }
    public function tyre()
    {
        echo " EV tyre<br>";
    }
    public function steering()
    {
        echo " EV steering<br>";
    }
    public function body()
    {
        petrolcar::class::body();
        echo " EV body<br>";
    }
    public function engine()
    {
        petrolcar::class::engine();
        echo " EV engine<br>";
    }
}


$car = new evcar;

$car->body();
$car->engine();
// petrolcar::





[

"name"=>"vishal",
"name"=>"vishal",
"name"=>"vishal",
"name"=>"vishal",

];

foreach ($variable as $key => $value) 
{
    # code...
}
















?>