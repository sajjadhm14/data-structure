<?php


function moveKToEnd(SplQueue $q, int $k)
{
    if ($k == 0) {
        return;
    }

    // Dequeue the front element
    $e = $q->dequeue();

    // Recursive call with k-1
    moveKToEnd($q, $k - 1);

    // Enqueue the stored element back to queue
    $q->enqueue($e);
}

function reverseFirstK(SplQueue $q, int $k): SplQueue
{
    // Move first k elements to the end (recursive step)
    moveKToEnd($q, $k);

    // Rotate the remaining elements (size - k) to front
    $size = $q->count();
    $s = $size - $k;

    while ($s-- > 0) {
        $x = $q->dequeue();
        $q->enqueue($x);
    }

    return $q;
}

// Initialize and populate the queue
$q = new SplQueue();
$q->enqueue(1);
$q->enqueue(2);
$q->enqueue(3);
$q->enqueue(4);
$q->enqueue(5);

$k = 3;

$q = reverseFirstK($q, $k);

// Print the resulting queue
while (!$q->isEmpty()) {
    echo $q->dequeue() . " ";
}

echo PHP_EOL;

