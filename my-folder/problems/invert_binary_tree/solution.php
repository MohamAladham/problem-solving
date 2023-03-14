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
     * @return TreeNode
     */
    function invertTree($root) {
        if(!$root){
            return $root;
        }
        
        $q = new SplQueue();
        $q->enqueue($root);

        while(!$q->isEmpty()){
            $count = $q->count();

            for($i=0; $i<$count; $i++){
                $node = $q->dequeue();
            
                $left = $node->left;
                $node->left = $node->right;
                $node->right = $left;

                if($node->left){
                    $q->enqueue($node->left);
                }

                if($node->right){
                    $q->enqueue($node->right);
                }

            }
        }

        return $root;
    }
}