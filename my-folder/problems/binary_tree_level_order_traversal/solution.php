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
     * @return Integer[][]
     */
    function levelOrder($root) {
        if(!$root){
            return [];
        }
        
        $queue = new SplQueue();
        $queue->enqueue($root);
        $output = [];

        while(!$queue->isEmpty()){
            $qCount = $queue->count();
            $level = [];

            for($i=0; $i<$qCount; $i++){
                $node = $queue->dequeue();
                $level[] = $node->val;

                if($node->left){
                    $queue->enqueue($node->left);
                }
                if($node->right){
                    $queue->enqueue($node->right);
                }
            }

            $output[] = $level;
        }

        return $output;
    }
}