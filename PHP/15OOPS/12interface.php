<?php




interface pizza_hut
{
    public function sqft($area);
    public function employee();
    public function oven();
    public function ingredient();
    // echo "Project";
}


class pizza_shop implements pizza_hut
{
       


        public function sqft($sqkm)
        {
            echo "Assesment<br>";
        }
        public function employee()
        {
            echo "employee<br>";
        }
        public function oven()
        {
            echo "oven<br>";
        }
        public function ingredient()
        {
            echo "ingredient<br>";
        }
        public function atmosphere()
        {
            echo "atmosphere<br>";
        }

        
}



$obj = new pizza_shop;
$obj->sqft(100);
$obj->employee();
$obj->oven();
$obj->ingredient();
$obj->atmosphere();












?>