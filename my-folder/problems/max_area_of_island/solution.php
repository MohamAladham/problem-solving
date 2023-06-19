<?php


class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function maxAreaOfIsland($grid) {
        $max = 0; 

        for($i=0; $i<count($grid); $i++){
            for($j=0; $j<count($grid[0]); $j++){
                if($grid[$i][$j] === 1){
                    $max = max($max, $this->DFS($grid, $i, $j));
                }
            }
        }

        return $max;
    }

    function DFS(&$grid, $i, $j){
        if(!isset($grid[$i][$j]) || $grid[$i][$j] != 1){
            return 0;
        }

        $grid[$i][$j] = 0;

        return 1 + $this->DFS($grid, $i-1, $j) + $this->DFS($grid, $i+1, $j) 
        + $this->DFS($grid, $i, $j-1) + $this->DFS($grid, $i, $j+1);
    }    
}
