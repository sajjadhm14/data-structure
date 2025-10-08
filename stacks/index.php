<?php
/** class represent how to stack an element in php.
 *
 * @param array $arr
 *
 * @param int $capacity
 *
 * @param int $top
 *
 */
class MyStack {
    private array $arr = [];
    private int $capacity;
    private int $top;

    public function __construct(int $cap) {
        $this->capacity = $cap;
        $this->arr = array_fill(0, $cap, null);
        $this->top = -1;
    }

    /**
     * method represent hot to add an element into stack.
     *
     * @param int $x element which is going to set in stack
     *
     * @return void
     */
    public function push(int $x): void {
        if ($this->top === $this->capacity - 1) {
            echo "Stack Overflow\n";
            return;
        }

        $this->arr[++$this->top] = $x;
    }

    /**
     * method represent how to show an element in stack with deleting it.
     *
     * @return int
     *
     */

    public function pop() {
    if($this->top == -1) {
        echo "Stack underflow\n";
        return -1;
    }
     return $this ->arr[$this->top--];
    }

    /**
     * method represent how to peak an element from stack without deleting it.
     * @return int|mixed
     */
    public function peak():mixed
    {
        if($this->top == -1) {
            echo "Stack is empty\n";
            return -1;
        }
        return $this->arr[$this->top];
    }

    /**
     * method represent how to check whether if stack is empty or not.
     *
     * @return bool
     */

    public function isEmpty(): bool
    {
        return $this->top == -1;
    }

    /**
     * method represent how to check whether if stack is full or not.
     * @return bool
     */

    public function isFull(): bool
    {
        return ($this->top == $this->capacity-1);
    }





}

//example

$s = new SplStack();
$s->push(1);
$s->push(2);
$s->push(3);



echo $s->pop();
echo "<br/>";
echo $s->pop();
echo "<br/>";
echo $s->pop();


