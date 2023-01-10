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
        $this->DFS($root);
        return $root;
    }


    function DFS($root){
        if(!$root){
            return;
        }

        $right = $root->right;
        $root->right = $root->left;
        $root->left = $right;

        $this->DFS($root->right);
        $this->DFS($root->left);
    }
}