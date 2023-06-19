<?php


class Solution {

    /**
     * @param String[][] $board
     * @param String $word
     * @return Boolean
     */
    function exist($board, $word) {
        for($i=0; $i<count($board); $i++){
            for($j=0; $j<count($board[0]); $j++){
                if($this->DFS($board, $word, $i, $j, 0)){
                    return true;
                }
            }
        }

        return false;
    }


    function DFS($board, $word, $i, $j, $index){
        if($index === strlen($word)){
            return true;
        }
        if(!isset($board[$i][$j]) || $board[$i][$j] === '*' || $board[$i][$j] !== $word[$index]){
            return false;
        }

        $temp = $board[$i][$j];
        $board[$i][$j] = '*';
        $directions = [[0,1], [0,-1], [1,0], [-1,0]];

        foreach($directions as $d){
            $r = $i + $d[0];
            $c = $j + $d[1];
            if($this->DFS($board, $word, $r, $c, $index+1)){
                return true;
            }
        }

        $board[$i][$j] = $temp;
        
        return false;
    }
}
