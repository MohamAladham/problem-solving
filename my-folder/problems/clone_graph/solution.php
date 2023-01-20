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

class Solution {
    
    private $visited = [];
    
    /**
     * @param Node $node
     * @return Node
     */
    function cloneGraph($node) {
        if(!$node){
            return $node;
        }

        //return $this->BFS($node);
        return $this->DFS($node);
    }


    function BFS(Node $node):Node{
        $queue = new SplQueue();
        $queue->enqueue($node);
        $copy = new Node($node->val);
        $this->visited[$copy->val] = $copy;

        while(!$queue->isEmpty()){
            $current = $queue->dequeue();
            
            foreach($current->neighbors as $n){
               if(!isset($this->visited[$n->val])){
                    $queue->enqueue($n);
                    $this->visited[$n->val] = new Node($n->val);
                }
                
                $this->visited[$current->val]->neighbors[] = $this->visited[$n->val];
            }
        }

        return $this->visited[$node->val];
    }


    function DFS(Node $node):Node{
        if(isset($this->visited[$node->val])){
            return $this->visited[$node->val];
        }

        $copy = new Node($node->val);
        $this->visited[$node->val] = $copy;

        foreach($node->neighbors as $n){
            $copy->neighbors[] = $this->DFS($n);
        }

        return $copy;
    }



}