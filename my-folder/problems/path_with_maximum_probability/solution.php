<?php


class Solution {

    /**
     * @param Integer $n
     * @param Integer[][] $edges
     * @param Float[] $succProb
     * @param Integer $start
     * @param Integer $end
     * @return Float
     */
    function maxProbability($n, $edges, $succProb, $start, $end) {
        $adjs = [];
        $max = 0;

        for($i=0; $i<count($edges); $i++){
            $adjs[$edges[$i][0]][] = [$edges[$i][1], $succProb[$i]];
            $adjs[$edges[$i][1]][] = [$edges[$i][0], $succProb[$i]];
        }

        $heap = new SplMaxHeap();
        $visited = [];
        $heap->insert([1, $start]);

        while(!$heap->isEmpty()){
            [$nScc, $node] = $heap->extract();

            if(isset($visited[$node])){
                continue;
            }

            if($end === $node){
                $max = max($max, $nScc);
            }

            $visited[$node] = true;

            foreach($adjs[$node] as [$adjNode, $adjSucc]){
                $heap->insert([$adjSucc*$nScc, $adjNode]);
            }
        }

        return $max;
    }
}
