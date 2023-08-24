<?php
class Stack {
    private $stack;

    public function __construct() {
        $this->stack = array();
    }

    
    public function push($data) {
        array_push($this->stack, $data);
    }

    
    public function pop() {
        if ($this->isEmpty()) {
            return null; 
        }
        return array_pop($this->stack);
    }

    
    public function peek() {
        if ($this->isEmpty()) {
            return null;
        }
        return end($this->stack);
    }

    
    public function isEmpty() {
        return empty($this->stack);
    }

    
    public function size() {
        return count($this->stack);
    }
}


$stack = new Stack();

$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->push(4);
$stack->push(5);
$stack->push(6);



//echo $stack->pop(); 
echo $stack->pop(); 
echo $stack->peek(); 
echo $stack->isEmpty(); 
echo $stack->size(); 
