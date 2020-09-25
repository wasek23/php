<?php
// Traits
trait firstTrait{
    function traitFunc(){
        echo "Simple Text From Trait Function";
    }
}
// $firstTr = new firstTrait; // We can't create an object of trait

class UseTrait{
    use firstTrait;
}
$useTr = new UseTrait;
$useTr->traitFunc();
echo "<br/> <br/>";


// Precedence Order
class PreClass{
    function preFunc(){
        echo "Precedence Order From Class function";
    }
}

trait preTrait{
    function preFunc(){
        parent::preFunc();
        echo "<br/>";
        echo "Precedence Order From Trait function";
    }
}

class PreCommon extends preClass{
    use preTrait;
}
$preCommonClass = new PreCommon;
$preCommonClass->preFunc();
echo "<br/> <br/>";


// Alternate Precedence Order
trait altPreTrait{
    function altPreFunc(){
        echo "Alternate Precedence Order From Trait Function";
    }
}

class AltPreClass{
    use altPreTrait;

    function altPreFunc(){
        echo "Alternate Precedence Order From Class Function";
    }
}
$altPreClassObj = new AltPreClass();
$altPreClassObj->altPreFunc();
echo "<br/> <br/>";


// Multiple Trait
trait multiTrait1{
    function multiFunc1(){
        echo "Multiple Trait Function 1 From multiTrait1";
    }
}
trait multiTrait2{
    function multiFunc2(){
        echo "Multiple Trait Function 2 From multiTrait2";
    }
}
trait multiTrait3{
    function multiFunc3(){
        echo "Multiple Trait Function 3 From multiTrait3";
    }
}

class MultiClass{
    use multiTrait1, multiTrait2, multiTrait3;
}
$multiClassObj = new MultiClass;
$multiClassObj->multiFunc1();
echo "<br/>";
$multiClassObj->multiFunc2();
echo "<br/>";
$multiClassObj->multiFunc3();
echo "<br/> <br/>";


// Collisions
trait collTrait1{
    function collFunc1(){
        echo "Collision Trait Function 1 From collTrait1";
    }

    function collFunc2(){
        echo "Collision Trait Function 2 From collTrait1";
    }
}
trait collTrait2{
    function collFunc1(){
        echo "Collision Trait Function 1 From collTrait2";
    }

    function collFunc2(){
        echo "Collision Trait Function 2 From collTrait2";
    }
}

class CollClass{
    use collTrait1, collTrait2{
        collTrait1::collFunc1 insteadof collTrait2;
        collTrait2::collFunc2 insteadof collTrait1;
    }
}
$collClassObj = new CollClass;
$collClassObj->CollFunc1();
echo "<br/>";
$collClassObj->CollFunc2();
echo "<br/> <br/>";


// Change Trait Visibility Control
trait visibleTrait{
    public function visibleFunc1(){
        echo "Visible Trait Function 1 From visibleTrait";
    }

    private function visibleFunc2(){
        echo "Visible Trait Function 2 From visibleTrait";
    }
}

class VisibleClass{
    use visibleTrait { visibleFunc2 as public; }
}
$visibleClassObj = new VisibleClass;
// $visibleClassObj->visibleFunc1();
// echo "<br/>";
$visibleClassObj->visibleFunc2();
echo "<br/> <br/>";


// Trait Composed From Trait
trait compTrait1{
    function compFunc(){
        echo "Composed Trait Function From compTrait1";
    }
}

trait compTrait2{
    use compTrait1;
}

class CompClass{
    use compTrait2;
}
$compClassObj = new CompClass;
$compClassObj->compFunc();