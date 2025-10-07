<?php

//enqueue
//dequeue
//into front
//into rear
//check if is empty
//size of lists;
//class Queue{
//    private $arr;
//
//    private $capacity;
//
//    private $size;
//
//
//    public function __construct(int $c){
//        $this->capacity = $c;
//        $this->size = 0;
//        $this->arr = [];
//    }
//
//    public function enqueue(int $x)
//    {
//        if ($this->isFull()){
//            echo 'queue is full' . PHP_EOL;
//        }
//
//        $this->arr[$this->size++] = $x;
//
//    }
//
//
//    public function dequeue(){
//        if($this->isEmpty()){
//            echo 'queue is empty' . PHP_EOL;
//        }
//
//        for ($i=1; $i<=$this->size; $i++) {}
//    }
//}
//
//
//
//
//$q = new myQueue(10);
//$q ->enqueue(2);
//$q->enqueue(3);
//$q->enqueue(4);
//
//
//$q->dequeue();
//echo $q->getFront() . PHP_EOL;
//
//echo $q->getRear() . PHP_EOL;
//echo $q->top() . PHP_EOL;
//
//if($q->isEmpty()){
//    echo 'queue is empty'.PHP_EOL;
//}else{
//    echo 'queue is full'.PHP_EOL;
//}



//class node {
//    public $data;
//
//    public $left;
//
//    public $right;
//
//
//
//    public function __construct($value)
//    {
//        $this->data = $value;
//        $this->left = null;
//        $this->right = null;
//    }
//}
//     function levelOrder($root)
//    {
//        if ($root === null) {
//            return [];
//        }
//
//        $q = new SplQueue();
//        $res = [];
//
//        $q->enqueue($root);
//
//        while (!$q->isEmpty()) {
//            $levelSize = $q->count();
//            $currentLevel =[];
//        }
//
//        for ($i = 0; $i < $levelSize; $i++) {
//            $node = $q->dequeue();
//            $currentLevel =$node->data;
//
//            if ($node->left !== null) {
//                $q->enqueue($node->left);
//            }
//            if ($node->right !== null) {
//                $q->enqueue($node->right);
//            }
//
//            $res[] = $currentLevel;
//
//        }
//        return $res;
//    }
//
//    $root = new Node(5);
//    $root->left = new Node(12);
//    $root->right = new Node(13);
//
//    $root->left->left = new Node(7);
//    $root->left->right = new Node(14);
//
//    $root->right->right = new Node(2);
//
//    $root->left->left->left = new Node(17);
//    $root->left->left->right = new Node(23);
//
//    $root->left->right->left = new Node(27);
//    $root->left->right->right = new Node(3);
//
//    $root->right->right->left = new Node(8);
//    $root->right->right->right = new Node(11);
//
//    $result = levelOrder($root);
//
//    foreach ($result as $level) {
//
//    }




//function reverseQueue(splQueue $q) : SplQueue
//{
//    $stak = [];
////    transform from queue to stack
//    while (!$q->isEmpty()) {
//        $stak[] = $q->dequeue();
//    }
//
//    while (empty($stak)) {
//        $q->enqueue(array_pop($stak));
//    }
//}


function moveKToEnd(SplQueue$q, int $k)
{
  if ($k == 0){
      return;
  }

  $e = $q->requeue();

  moveKtoEnd($q, $k-1);

  $q->enqueue($e);

}

function moveKToStart(SplQueue $q, int $k)
{
    moveKToEnd($q, $k);

    $size =$q->count();

    $s =$size - $k;

    while($s-- > 0){
        $x = $q->dequeue();
        $q->enqueue($x);
    }
    return $q;
}


