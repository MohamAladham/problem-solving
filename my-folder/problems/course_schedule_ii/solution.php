<?php


class Solution {

    /**
     * @param Integer $numCourses
     * @param Integer[][] $prerequisites
     * @return Integer[]
     */
    function findOrder($numCourses, $prerequisites) {
        $adj = [];
        $output = [];

        foreach ($prerequisites as $p) {
            $adj[$p[0]][] = $p[1];
        }

        $nodeToVisitedState = [];

        for ($i = 0; $i < $numCourses; $i++) {
            if (!$this->DFS($i, $adj, $nodeToVisitedState, $output)) {
                return [];
            }
        }

        return $output;
    }



    function DFS($currentNode, $adj, &$nodeToVisitedState, &$output) {
        // Base cases
        $currentVisitedState = $nodeToVisitedState[$currentNode] ?? 0;
        // We're seeing a node again as part of one of its children recursive calls --> we have a cycle.
        if ($currentVisitedState == 1) {
            return false;
        }
        // We've already recursively explored all children of this node --> we can already determine that there is no cycle.
        elseif ($currentVisitedState == 2) {
            return true;
        }

        // Mark the node as currently being recursively explored (but not complete again) so that we can identify if one of its children recursive calls touches it again (and thus that we have a cycle)
        $nodeToVisitedState[$currentNode] = 1;

        foreach ($adj[$currentNode] as $neighbour) {
            if (!$this->DFS($neighbour, $adj, $nodeToVisitedState, $output)) {
                return false;
            }
        }

        // We're done recursively exploring its children - mark it as completely visited so we don't attempt to explore it again.
        $nodeToVisitedState[$currentNode] = 2;
        $output[] = $currentNode;

        return true;
    }
}
