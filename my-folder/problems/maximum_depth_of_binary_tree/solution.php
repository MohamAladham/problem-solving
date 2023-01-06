/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function maxDepth($root) {
      // return $this->BFS($root);
       return $this->DFS($root);
    }

    function DFS($root){
        if(!$root){
            return 0;
        }

        return 1 + max($this->DFS($root->left), $this->DFS($root->right));
    }

    function BFS($root){
        if(!$root){
            return 0;
        }

        $queue = new SplQueue();
        $queue->enqueue($root);       
        $levels = 0;

        while(!$queue->isEmpty()){
            $count_queue = $queue->count();
            for($i=0; $i<$count_queue; $i++){
                $node = $queue->dequeue();
                if($node->left){
                    $queue->enqueue($node->left);       
                }
                if($node->right){
                    $queue->enqueue($node->right);       
                }
            }
            $levels++;
        }

        return $levels;
    }
}