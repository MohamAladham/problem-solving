<?php


class Solution {

    /**
     * @param String $s
     * @return String
     */
    function removeDuplicates($s) {
        $stack = new SplStack();
        $ans = '';

        for($i=0; $i<strlen($s); $i++){
            if(!$stack->isEmpty() && $stack->top() === $s[$i]){
                $stack->pop();
            }else{
                $stack->push($s[$i]);
            }
        }

        while(!$stack->isEmpty()){
            $ans .= $stack->shift();
        }

        return $ans;
    }
}
