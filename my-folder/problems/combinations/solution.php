<?php


class Solution {

    /**
     * @param Integer $n
     * @param Integer $k
     * @return Integer[][]
     */
    function combine($n, $k) {
        $list = [];
        $this->DFS($n, $k, $list, [], 1);

        return $list;
    }


    function DFS($n, $k, &$list, $set, $start){
        if(count($set) === $k){
            $list[] = $set;
            return;
        }

        for($i=$start; $i<=$n; $i++){
            $set[] = $i;
            $this->DFS($n, $k, $list, $set, $i+1);
            array_pop($set);
        }
    }
}
