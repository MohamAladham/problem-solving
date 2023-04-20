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

        $q = new SplQueue();
        $ans = [];
        $q->enqueue($root);

        while(!$q->isEmpty()){
            $count = $q->count();
            $level = [];

            for($i=0; $i<$count; $i++){
                $node = $q->dequeue();
                $level[] = $node->val;

                if($node->left){
                    $q->enqueue($node->left);
                }
                if($node->right){
                    $q->enqueue($node->right);
                }
            }

            $ans[] = $level;
        }

        return $ans;
    }
}