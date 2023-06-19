<?php


class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function orangesRotting($grid) {
        $queue = new SplQueue();
        $minutes = 0;
        $fresh = 0;

        foreach($grid as $r=>$rows){
            foreach($rows as $c=>$v){
                if($v === 1){
                    $fresh++;
                }elseif($v === 2){
                    $queue->enqueue([$r, $c]);
                }
            }                
        }

        $directions = [[0,1],[0,-1],[1,0],[-1,0]];

        while(!$queue->isEmpty() && $fresh){
            $count_queue = $queue->count();

            for($i=0; $i<$count_queue; $i++){
                $rotten = $queue->dequeue();
                $rotten_r = $rotten[0];
                $rotten_c = $rotten[1];

                foreach($directions as $dir){
                    $orange_r = $rotten_r + $dir[0];
                    $orange_c = $rotten_c + $dir[1];
                    
                    if(!isset($grid[$orange_r][$orange_c])){
                        continue;
                    }
                    
                    $orange = $grid[$orange_r][$orange_c];

                    if($orange === 1){
                        $grid[$orange_r][$orange_c] = 2;
                        $queue->enqueue([$orange_r, $orange_c]);
                        $fresh--;
                    }
                }

            }

            $minutes++;
        }

        return $fresh ? -1 : $minutes;
    }
}
