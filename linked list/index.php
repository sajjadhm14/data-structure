<?php

/**
 * class represent how to add /travers/reverse/delete data in link list
 */

class LinkedList {
    private $firstNode = NULL;
    public $data;
    public $next;

    public function __construct($data = NULL) {
        $this->data = $data;
        $this->next = NULL;
    }

    /**
     * Method Add a new node to the end of the list
     * @param $data
     * @return void
     */
    public function insert($data) : void {
        $newNode = new LinkedList($data);
        if($this->firstNode === NULL){
            $this->firstNode = $newNode;
        }else{
            $currentNode = $this->firstNode;
            while($currentNode->next !== NULL){
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $newNode;
        }
    }

    /**
     * Method Traverse the list
     * @return void
     */
    public function traverse() : void {
        $currentNode = $this->firstNode;
        while($currentNode !== NULL){
            echo $currentNode->data . "\n";
            $currentNode = $currentNode->next;
        }
    }

    /**
     * Method Reverse the list
     * @return void
     *
     */
    public function reverse() {
        $prev = NULL;
        $current = $this->firstNode;
        while ($current !== NULL) {
            $next = $current->next;
            $current->next = $prev;
            $prev = $current;
            $current = $next;
        }
        $this->firstNode = $prev;
    }


}

$list = new LinkedList();
$list->insert(1);
$list->insert(2);
$list->insert(3);

echo "Linked List: ";
echo "<br/>";
$list->traverse();

$list->reverse();
echo "Reversed Linked List: \n";
$list->traverse();

//$list->delete(2);
echo "Linked List after deleting 2: \n";
$list->traverse();

