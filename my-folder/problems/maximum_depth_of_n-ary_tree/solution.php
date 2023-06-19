/**
 * Definition for a Node.
 * class Node {
 *     public $val = null;
 *     public $children = null;
 *     function __construct($val = 0) {
 *         $this->val = $val;
 *         $this->children = array();
 *     }
 * }
 */

<?php


class Solution {

    private $counts_arr = [];

    /**
     * @param Node $root
     * @return integer
     */
    function maxDepth($root) {
        if(!$root){
            return 0;
        }

        $this->DFS($root, 1);
        return max($this->counts_arr);
        //return $this->BFS($root);
    }


    function BFS($node){
        $queue = new SplQueue();
        $queue->enqueue($node);
        $count = 0;

        while(!$queue->isEmpty()){
            $queue_count = $queue->count();

            for($i=0; $i<$queue_count; $i++){
                $node = $queue->dequeue();

                foreach($node->children as $child){
                    $queue->enqueue($child);
                }
            }

            $count++;
        }

        return $count;
    }

    function DFS($root, $count){
        if(!$root->children){
            $this->counts_arr[] = $count;
            return;
        }

        for($i=0; $i<count($root->children); $i++){
            $count++;
            $this->DFS($root->children[$i], $count);
            $count--;
        }

        return $count;
    }
}
