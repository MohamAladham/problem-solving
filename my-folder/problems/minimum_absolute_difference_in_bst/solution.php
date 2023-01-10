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
    function getMinimumDifference($root) {
        $min = PHP_INT_MAX;
        $prev = null;
        $this->DFS($root, $prev, $min);

        return $min;
    }


    function DFS($root, &$prev, &$min){
        if(!$root){
            return;
        }

        $this->DFS($root->left, $prev, $min);
        
        if(!is_null($prev)){
            $min = min($min, $root->val - $prev);
        }

        $prev = $root->val;
        $this->DFS($root->right, $prev, $min);
    }
}