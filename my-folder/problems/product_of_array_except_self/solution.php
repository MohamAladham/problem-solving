<?php


class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function productExceptSelf($nums) {
        // [1,  2,  3, 4]
        // [1,  2,  6, 24] <-- pre
        // [24, 24, 12,4] <-- post
        // [24, 12, 8, 6]

        $pre = [];
        $post = [];
        $ans = [];

        for($i=0; $i<count($nums); $i++){
            if($i === 0){
                $pre[] = $nums[$i];
            }else{
                $pre[] = $pre[$i - 1] * $nums[$i];
            }
        }

        for($i=count($nums)-1; $i>=0; $i--){
            if($i === count($nums) -1){
                $post[$i] = $nums[$i];
            }else{
                $post[$i] = $post[$i + 1] * $nums[$i];
            }
        }

        for($i=0; $i<count($nums); $i++){
            $i_pre = $pre[$i - 1] ?? 1;
            $i_post = $post[$i + 1] ?? 1;
            $ans[$i] = $i_pre * $i_post;
        }

        return $ans;
    }
}
