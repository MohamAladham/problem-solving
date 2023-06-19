/**
 * Definition for a Node.
 * class Node {
 *     public $val = null;
 *     public $neighbors = null;
 *     function __construct($val = 0) {
 *         $this->val = $val;
 *         $this->neighbors = array();
 *     }
 * }
 */

<?php


class Solution {
    /**
     * @param Node $node
     * @return Node
     */
    function cloneGraph($node) {
    /*
    
    1:[2,4]
    2:[1,3]
    .
    .
     */   

        $visited = [];
        return $this->DFS($node, $visited);

    }

    function DFS($node, &$visited){
        if(!$node){
            return $node;
        }
        
        if(isset($visited[$node->val])){
            return $visited[$node->val];
        }
        
        $copy = new Node($node->val);
        $visited[$copy->val] = $copy;

        foreach($node->neighbors as $n){
            $copy->neighbors[] = $this->DFS($n, $visited);
        }

        return $copy;
    }
}
