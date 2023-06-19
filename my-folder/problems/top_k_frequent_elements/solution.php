<?php


class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer[]
     */
    function topKFrequent($nums, $k) {
        $maxHeap = new SplMaxHeap();
        $hash = [];

        foreach($nums as $n){
            $hash[$n] = isset($hash[$n]) ? $hash[$n]+1 : 1;
        }

        foreach($hash as $k_=>$v){
            $maxHeap->insert([$v, $k_]);
        }

        $ans = [];

        while(!$maxHeap->isEmpty()){
            if(count($ans) === $k){
                break;
            }
            $ans[] = $maxHeap->extract()[1];
        }

        return $ans;
    }
}
