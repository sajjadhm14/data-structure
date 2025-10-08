<?php


/**
 * class represent how to queue an element into stack
 *
 *
 */
class MyStack {
    public  $q1;

    public function __construct($q1){
        $this->q1 = new SplQueue();
    }

    /**
     * method push x value into queue
     * @param int $x
     * @return void
     */
    public function push (int $x){
        $this->q1->enqueue($x);
        $size = $this->q1->count();

        for ($i = 0; $i < $size -1; $i++) {
            $this->q1->enqueue($this->q1->dequeue());
        }

    }

    /**
     * method pop(get element into front) value in queue
     * @return void
     */
    public function pop (){
        if (!   $this->q1->isEmpty()) {
            $this->q1->dequeue();
        }
    }

    /**
     * method top(get element into rear) value in queue
     *
     * @return int|mixed
     */

    public function top (){
        if ($this->q1->isEmpty()) {
            return -1;
        }
        return $this->q1->bottom();
    }

    /**
     * method determine size of queue
     * @return int
     */
    public function size (){
        return $this->q1->count();
    }

}

$s = new MyStack();

$s->push(1);
$s->push(2);
$s->push(3);
$s->push(4);

echo $s->top();
echo $s->pop();
echo $s->top();
echo $s->pop();
echo $s->top();
echo $s->pop();


