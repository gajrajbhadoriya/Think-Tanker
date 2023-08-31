<?php
class context{

    private $strategy;

    public function setStrategy(stretgy $value){
        $this->strategy = $value;
    }

    public function getStrategy(){
        $this->strategy ;
    }

    public function ContectInterface(){
        $this->strategy->AlgorithmInterface();
    }
}
abstract class stretgy{
    public abstract function AlgorithmInterface();
}

trait Meet{
    public $a = 12;
    public $b = 13;
    public $c;
    public function AlgorithmInterface(){

        $this->c = $this->a + $this->b ;
        echo $this->c . " - ";
    }
}

trait Meet1{
    public $a = 3;
    public $b = 3;
    public $c;
    public function AlgorithmInterface(){
        $this->c = $this->a + $this->b ;
        echo $this->c;
    }
}
class a extends stretgy{
    use Meet;
}

class b extends stretgy{
    use Meet1;
    
}

$context = new context();
$contexta = new a();
$context->setStrategy($contexta);
$context->ContectInterface();

$contextb = new b();
$context->setStrategy($contextb);
$context->ContectInterface();
?>
