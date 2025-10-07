<?php



class MyStacks {
    private array $arr=[];

    private int $capacity;

    private int $top;

    public function __construct(int $cap) {
        $this-> capacity = $cap;
        $this->arr = array_fill(0, $cap, null);
        $this->top = -1;
    }

    public function push(int $x)
    {
        if($this->top === $this->capacity -1 ) {
            re
        }
    }
}


