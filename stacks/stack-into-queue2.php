<?php

/**
 * class represent how to stack an element into queue with 2 stacks
 */

class MyQueue{
    public $s1;
    public $s2;

    public function __construct($s1, $s2){
        $this->s1 = new SplStack();
        $this->s2 = new SplStack();
    }

    /**
     * method enqueue x value into stack
     * @param int $x
     * @return void
     */
    public function enqueue(int $x){
        $this->s1->push($x);
        while(!$this->s2 ->isEmpty()){
            $this->s2->push($this->s1->pop());
        }
        $temp = $this->s1;
        $this->s1= $this->s2;
        $this->s2 = $temp;
    }


    /**
     * method dequeue x value from stack
     * @return void
     */
    public function dequeue():void{
        if ($this->s1 ->isEmpty()){
            return;
        }
        $this->s1->pop();
    }

    /**
     * methode trigger element into top
     * @return int|mixed
     */
    public function front(){
        if($this->s1->isEmpty()){
            return -1;
        }
        return $this->s1->top();
    }

    /**
     * methode determine size of stack
     * @return mixed
     */
    public function size()
    {
        return $this->s1->size()+ $this->s2->count();
    }



}

$q = new MyQueue();
$q->enqueue(1);
$q->enqueue(2);
$q->enqueue(3);
$q->enqueue(4);
$q->enqueue(5);
echo $q->dequeue();








