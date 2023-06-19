<?php


class Solution {

    /**
     * @param Integer[][] $matrix
     * @return Integer[]
     */
    function spiralOrder($matrix) {
        /*
1  2  3  4
5  6  7  8
9  10 11 12
13 14 15 16

00 01 02 03 /13 23 33/ 32 31 30/ 20 10/ 11 12 22 21 
        */
        $ans = [];
        $r_to_right = 0;
        $r_to_left = count($matrix) - 1; // 3
        $c_to_down = count($matrix[0]) - 1; // 3  
        $c_to_up = 0;  

        
        while(count($ans) < count($matrix[0]) * count($matrix)){
            // row to right
            for($i=$c_to_up; $i<=$c_to_down; $i++){
                $ans[] = $matrix[$r_to_right][$i];
            }
            
            $r_to_right++;
            
            // column to down
            for($i=$r_to_right; $i<=$r_to_left; $i++){
                $ans[] = $matrix[$i][$c_to_down];
            }
           
            $c_to_down--;
            
            // row to left
            if($r_to_right <= $r_to_left){
                for($i=$c_to_down; $i>=$c_to_up; $i--){
                    $ans[] = $matrix[$r_to_left][$i];
                }
            }
            $r_to_left--;

            // column to up
            if($c_to_up <= $c_to_down){
                for($i=$r_to_left; $i>=$r_to_right; $i--){
                    $ans[] = $matrix[$i][$c_to_up];
                }
            }
            
            $c_to_up++;
        }

        return $ans;
    }
}
