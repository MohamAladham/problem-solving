<?php


class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function nextGreaterElements($nums) {
        /*


2:1
        */
       
        $ans = array_fill(0,count($nums), -1);
        $stack = new SplStack();

        for($i=1; $i<=2; $i++){
            for($j=0; $j<count($nums); $j++){
                while(!$stack->isEmpty() && $stack->top()[0] < $nums[$j]){
                    list($value, $index) = $stack->pop();
                    $ans[$index] = $nums[$j];
                }

                $stack->push([$nums[$j], $j]);
            }
        }

        return $ans;
    }
}
