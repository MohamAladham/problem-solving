<?php


class Solution {

    /**
     * @param Integer[][] $graph
     * @return Integer[][]
     */
    function allPathsSourceTarget($graph) {
        /* [
            0 [1,2],
            1 [3],
            2 [3],
            3 []
            ]

        */

        $ans = [];
        $path = [];
        $this->backtrack($graph, $path, $ans);

        return $ans;
    }

    function backtrack($graph, $path, &$ans, $i=0){
        var_dump(($path));
        if($i === count($graph) - 1){
            $path[] = $i;
            $ans[] = $path;
            return;
        }

        if(count($path) === count($graph) - 1){
            return;
        }


        for($j=0; $j<count($graph[$i]); $j++){
            array_push($path, $i);
            $this->backtrack($graph, $path, $ans, $graph[$i][$j]);
            array_pop($path);
        }

    }
}
