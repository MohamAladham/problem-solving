class Solution {

    /**
     * @param Integer $n
     * @param Integer[][] $edges
     * @return Integer[]
     */
    function findMinHeightTrees(int $n, array $edges): array {
        if ($n == 0) {
            // If the tree has no nodes, return an empty array
            return [];
        } elseif ($n == 1) {
            // If the tree has only one node, return an array containing that node
            return [0];
        }

        // Initialize variables
        $res = [];
        $degrees = []; // Array to keep track of degrees of each node
        $adj = []; // Adjacency list to store connections between nodes

        // Populate $degrees and $adj based on input edges
        foreach ($edges as $edge) {
            $adj[$edge[0]][] = $edge[1];
            $adj[$edge[1]][] = $edge[0];
            $degrees[$edge[0]]++;
            $degrees[$edge[1]]++;
        }

        // Add all leaf nodes (i.e., nodes with only one edge) to a queue
        $queue = new SplQueue();
        for ($i = 0; $i < $n; $i++) {
            if ($degrees[$i] == 1) {
                $queue->enqueue($i);
            }
        }

        // Traverse the tree level by level until we reach the root(s)
        while (!$queue->isEmpty()) {
            $res = []; // Clear the $res array before we start traversing the next level
            $size = $queue->count(); // Keep track of the size of the queue at the start of each iteration

            // Traverse each node in the current level
            for ($i = 0; $i < $size; $i++) {
                $cur = $queue->dequeue();
                $res[] = $cur; // Add the current node to the $res array

                // Update the degree count for each neighbor of the current node
                foreach ($adj[$cur] as $neighbor) {
                    $degrees[$neighbor]--;
                    // If the neighbor now has only one edge, add it to the queue
                    if ($degrees[$neighbor] == 1) {
                        $queue->enqueue($neighbor);
                    }
                }
            }
        }

        // Return the root(s) of the minimum height trees
        return $res;
    }


}