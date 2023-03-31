class Solution {

    /**
     * @param Integer[][] $times
     * @param Integer $n
     * @param Integer $k
     * @return Integer
     */
    function networkDelayTime($times, $n, $k) {
        $adjs = [];
        // [0, 1, 2]
        // [current, neighbour, time]
        foreach($times as $t){
            $adjs[$t[0]][] = [$t[1], $t[2]];
        }

        $minHeap = new SplMinHeap();
        $minHeap->insert([0, $k]);
        $visited = [];
        $totalTime = 0;

        while(!$minHeap->isEmpty()){
            list($time, $node) = $minHeap->extract();

            if(in_array($node, $visited)){
                continue;
            }

            $visited[] = $node;
            $totalTime = max($totalTime, $time);

            foreach($adjs[$node] as $adjNode){
                list($neighbour, $n_time) = $adjNode;

                if(in_array($neighbour, $visited)){
                    continue;
                }

                // $time + $n_time to keep tracking the previous times
                $minHeap->insert([$time + $n_time, $neighbour]);
            }
        }

        return count($visited) === $n ? $totalTime : -1;
    }
}