<?php


class Solution {

    /**
     * @param String $s
     * @return String
     */
    function minRemoveToMakeValid($s) {
        $stack = new SplStack();
        $ans = $s;

        for($i=0; $i<strlen($s); $i++){
            if($s[$i] === ')' && !$stack->isEmpty() && $stack->top()[0] === '('){
                $stack->pop();
            }elseif($s[$i] === ')' || $s[$i] === '('){
                $stack->push([$s[$i], $i]);
            }
        }

        while(!$stack->isEmpty()){
            $index = $stack->pop()[1];
            $ans = substr($ans, 0, $index) . substr($ans, $index + 1, strlen($ans));
        }

        return $ans;
    }
}
