<?php


class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function nextGreaterElement($nums1, $nums2) {
        $stack = new SplStack();
        $hash = [];
        $res = [];

        foreach($nums2 as $n){
            while(!$stack->isEmpty() && $stack->top() < $n){
                $hash[$stack->pop()] = $n;
            }

            $stack->push($n);
        }

        foreach($nums1 as $n){
            $res[] = $hash[$n] ?? -1;
        }

        return $res;
    }
}
