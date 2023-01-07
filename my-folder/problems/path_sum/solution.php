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

    private $targetSum;

    /**
     * @param TreeNode $root
     * @param Integer $targetSum
     * @return Boolean
     */
    function hasPathSum($root, $targetSum) {
        $this->targetSum = $targetSum;
        return $this->DFS($root, 0);
    }


    function DFS($root, $sum){
        if(!$root){
            return false;
        }

        $sum += $root->val;

        if(!$root->left && !$root->right){
            return $sum === $this->targetSum;
        }

        return $this->DFS($root->left, $sum) || $this->DFS($root->right, $sum);
    }
}