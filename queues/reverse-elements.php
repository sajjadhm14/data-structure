<?php


function reverseQueue(SplQueue $q): SplQueue
{
    $stack = [];

    // Transfer all elements from queue to stack
    while (!$q->isEmpty()) {
        $stack[] = $q->dequeue(); // array_push equivalent
    }

    // Transfer all elements back from stack to queue
    while (!empty($stack)) {
        $q->enqueue(array_pop($stack)); // LIFO to FIFO
    }

    return $q;
}

// Initialize and populate the queue
$q = new SplQueue();
$q->enqueue(5);
$q->enqueue(10);
$q->enqueue(15);
$q->enqueue(20);
$q->enqueue(25);

// Reverse the queue
$q = reverseQueue($q);

// Print the reversed queue
while (!$q->isEmpty()) {
    echo $q->dequeue() . " ";
}

echo PHP_EOL;

