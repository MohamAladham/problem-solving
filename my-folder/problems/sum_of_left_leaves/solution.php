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
    function sumOfLeftLeaves($root) {
        $sum = 0;
        $this->DFS($root, $sum);
        return $sum;
    }


    function DFS($root, &$sum){
        if(!$root){
            return 0;
        }

        if(!$root->left && !$root->right){
            return  $root->val;
        }

        $sum += $this->DFS($root->left, $sum);
        $this->DFS($root->right, $sum);
    }
}