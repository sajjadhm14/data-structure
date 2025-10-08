<?php


/**
 * class represent how to stack an element into queue with 1 stack
 */

class MyQueue {
    public $s1;

    public function __construct($s1){
        $this->s1 = new SplStack();
    }

    /**
     * methode enqueue x into stack
     *
     * @param int $x
     * @return void
     */
    public function enqueue(int $x){
        $this->s1->push($x);

    }

    /**
     * method dequeue x from stack
     * @return void
     */
    public function dequeue():void{
        if ($this->s1->isEmpty()) {
            echo "queue onder flow";
            return;

        }
        $x = $this->s1->pop();

        if($this->s1->isEmpty()){
            return;
        }


        $this->s1->push($x);
        return;
    }

    /**
     * method trigger element to top
     * @return int|mixed|void
     */
    public function front(){
        if ($this->s1->isEmpty()) {
            echo "queue is empty";
            return -1;
        }
        $x = $this->s1->pop();

        if($this->s1->isEmpty()){
            $this->s1->top();
            return $x;
        }

    }

    /**
     * method determine capacity of stack
     * @return mixed
     */

    public function size(){
        return $this->s1->size();
    }

}


$s = new myQueue(1);

$s->enqueue(1);
$s->enqueue(2);
$s->enqueue(3);

echo $s->dequeue();


