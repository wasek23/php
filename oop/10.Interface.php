<?php
// Interface
interface firstInt{
    function hello($name, $msg);
}

interface secondInt{
    function address($village, $city);
}

interface thirdInt extends firstInt{
    function school($name, $address);
}


class ExtendsInt implements thirdInt{
    function hello($name, $msg){} // We have to declare parent interface also when we call child interface
    function school($name, $address){}
}

class MultiInterface implements firstInt, secondInt, thirdInt{
    function hello($name, $msg){}
    function address($village, $city){}
    function school($name, $address){}
}