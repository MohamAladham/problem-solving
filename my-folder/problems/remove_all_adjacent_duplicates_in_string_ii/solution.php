<?php


class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return String
     */
    function removeDuplicates($s, $k) {
        // deeedbbcccbdaa   k = 3
/*

b:1
d:1
__
*/
        $ans = '';
        $stack = new SplStack();

        for($i=0; $i<strlen($s); $i++){
            while(!$stack->isEmpty() && $stack->top()[0] === $s[$i] && $stack->top()[1] === $k-1){
                $stack->pop();
                $i++;
            }

            $top = null;

            if(!$stack->isEmpty()){
                $top = $stack->top();
            }

            if($top && $top[0] === $s[$i]){
                $top = $stack->pop();
                $stack->push([$s[$i], $top[1]+1]);
            }else{
                $stack->push([$s[$i], 1]);
            }
        }

        while(!$stack->isEmpty()){
            $ele = $stack->shift();
            $char = $ele[0];
            $count = $ele[1];

            while($count--){
                $ans .= $char;
            }
        }
    
        return $ans;
    }
}
