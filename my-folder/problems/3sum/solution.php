<?php


class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums) {
        sort( $nums );
        $arr = [];
        $count = count($nums);

        foreach($nums as $k=>$n){
            if($k > 0 && $n === $nums[$k-1]){
                continue;
            }

            $l = $k +1;
            $r = $count -1;

            while($l < $r){
                $sum = $n + $nums[$l] + $nums[$r];

                if($sum > 0){
                    $r--;
                }elseif($sum < 0){
                    $l++;
                }else{
                    $arr[] = [$n, $nums[$l], $nums[$r]];
                    $l++;
                    while($nums[$l] == $nums[$l-1] && $l<$r){
                        $l++;
                    }
                }
            }
        }

        return $arr;
    }
}
