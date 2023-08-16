<?php


// class is a collection of data member and member function only
// object it is used to access class

class mobile
{
    function sms()
    {
        echo "sms<br>";
    }

    public function call()
    {
        echo "call<br>";
    }

    protected function chat()
    {
        echo "Chat<br>";
    }
    private function gallery()
    {
        echo "gallery<br>";
    }
}

$object = new mobile;
$object->sms();
$object->sms();
$object->call();
// $object->chat();
// $object->gallery();











?>