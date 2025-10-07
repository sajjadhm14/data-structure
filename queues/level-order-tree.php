<?php


class Node
{
    public $data;
    public $left;
    public $right;

    public function __construct($value)
    {
        $this->data = $value;
        $this->left = null;
        $this->right = null;
    }
}

function levelOrder($root)
{
    if ($root === null) {
        return [];
    }

    $queue = new SplQueue();
    $res = [];

    // Enqueue root
    $queue->enqueue($root);

    while (!$queue->isEmpty()) {
        $levelSize = $queue->count();
        $currentLevel = [];

        for ($i = 0; $i < $levelSize; $i++) {
            $node = $queue->dequeue();
            $currentLevel[] = $node->data;

            if ($node->left !== null) {
                $queue->enqueue($node->left);
            }

            if ($node->right !== null) {
                $queue->enqueue($node->right);
            }
        }

        $res[] = $currentLevel;
    }

    return $res;
}

// Build the tree:
//       5
//      / \
//    12   13
//    / \    \
//   7  14    2
//  / \ / \  / \
// 17 23 27 3 8 11

$root = new Node(5);
$root->left = new Node(12);
$root->right = new Node(13);

$root->left->left = new Node(7);
$root->left->right = new Node(14);

$root->right->right = new Node(2);

$root->left->left->left = new Node(17);
$root->left->left->right = new Node(23);

$root->left->right->left = new Node(27);
$root->left->right->right = new Node(3);

$root->right->right->left = new Node(8);
$root->right->right->right = new Node(11);

$result = levelOrder($root);

foreach ($result as $level) {
    foreach ($level as $val) {
        echo $val . " ";
    }
    echo PHP_EOL;
}
