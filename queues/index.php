<?php

/**
 *  class representing implementation of queues.
 */
class myQueue
{
    private array $arr;
    private int $capacity;
    private int $size;

    public function __construct(int $c)
    {
        $this->capacity = $c;
        $this->arr = [];
        $this->size = 0;
    }
    /*
    * method represent is empty implementation to check whether is any queue is exists.
    *
    * @return bool
    *
    */
    public function isEmpty(): bool
    {
        return $this->size === 0;
    }

    /*
     * method represent is empty implementation to check whether how many queues is out there .
     *
     * @return bool
     */

    public function isFull(): bool
    {
        return $this->size === $this->capacity;
    }

    /*
     * Adds an element x at the rear of the queue.
     *
     * @param int $x to add number into queue
     *
     * @return void
     */
    public function enqueue(int $x): void
    {
        if ($this->isFull()) {
            echo "Queue is full!\n";
            return;
        }
        $this->arr[$this->size++] = $x;
    }

    /*
     * Removes the front element of the queue.
     *
     *
     * @return void
     */
    public function dequeue(): void
    {
        if ($this->isEmpty()) {
            echo "Queue is empty!\n";
            return;
        }
        for ($i = 1; $i < $this->size; $i++) {
            $this->arr[$i - 1] = $this->arr[$i];
        }
        $this->size--;
        unset($this->arr[$this->size]); // clean up the last element
    }

    /*
     *  Returns the front element of the queue.
     *
     * @return int
     *
     */
    public function getFront(): int
    {
        if ($this->isEmpty()) {
            echo "Queue is empty!\n";
            return -1;
        }
        return $this->arr[0];
    }

    /*
     * Returns the last element of the queue.
     *
     * @return int
     *
     */
    public function getRear(): int
    {
        if ($this->isEmpty()) {
            echo "Queue is empty!\n";
            return -1;
        }
        return $this->arr[$this->size - 1];
    }
}

// Example usage
$q = new myQueue(3);

$q->enqueue(10);
$q->enqueue(20);
$q->enqueue(30);
echo "Front: " . $q->getFront() . PHP_EOL;

$q->dequeue();
echo "Front: " . $q->getFront() . PHP_EOL;
echo "Rear: " . $q->getRear() . PHP_EOL;

$q->enqueue(40);





