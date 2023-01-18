class Solution {

    /**
     * @param Integer[][] $graph
     * @return Integer[][]
     */
    function allPathsSourceTarget($graph) {
        $listOfPaths = [];
        $this->DFS($graph, $listOfPaths, [0], count($graph) - 1);
        return $listOfPaths;
        return $this->BFS($graph);
    }


    function BFS($graph){
        $queue = new SplQueue();
        // initiate the queue with the first node (the starting point of the path)
        $queue->enqueue([0]);
        $listOfPaths = [];
        // our target is the last node.
        $target = count($graph) - 1;

        while(!$queue->isEmpty()){
            $path = $queue->dequeue();
            $endofPath = end($path);

            if($endofPath === $target){ // the end of the path = our target? we reached it.
                $listOfPaths[] = $path;
            }else{ // else, go with other possible paths of the current one.
                foreach($graph[$endofPath] as $n){
                    // try the current path with the new node ($n)
                    array_push($path, $n);
                    $queue->enqueue($path);
                    // remove the $n so we try others in next iterations.
                    array_pop($path);
                }
            }
        }

        return $listOfPaths;
    }


    function DFS($graph, &$listOfPaths, $path, $target){
        // the end of the path = our target? we reached the target node.
        if(end($path) === $target){
            $listOfPaths[] = $path;
            return;
        }

        // else, go with other possible paths of the current one.
        foreach($graph[end($path)] as $n){
            // try the current path with the new node ($n)
            array_push($path, $n);
            $this->DFS($graph, $listOfPaths, $path, $target);
            // remove the $n so we try others in next iterations.
            array_pop($path);
        }
    }
}