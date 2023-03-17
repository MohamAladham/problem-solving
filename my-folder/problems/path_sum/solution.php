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
     * @param Integer $targetSum
     * @return Boolean
     */
    function hasPathSum($root, $targetSum) {
        $sum = $root->val;
        $found= null;

        $this->DFS($root, $targetSum, $sum, $found);

        return $found;
    }


    function DFS($root, $targetSum, &$sum, &$found){
        if($sum === $targetSum && !$root->left && !$root->right){
            $found = true;
            return;
        }
        
        if(!$root || $found){
            return;
        }

        if($root->left){
            $sum += $root->left->val;
            $this->DFS($root->left, $targetSum, $sum, $found);
            $sum -= $root->left->val;
        }
    
        if($root->right){
            $sum += $root->right->val;
            $this->DFS($root->right, $targetSum, $sum, $found);
            $sum -= $root->right->val;
        }
    }
}