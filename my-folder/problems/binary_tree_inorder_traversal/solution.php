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
     * @return Integer[]
     */
    function inorderTraversal($root) {
        $res = [];
        $this->DFS($root, $res);
        return $res;
    }


    function DFS($root, &$res){
        if(!$root){
            return;
        }

        $this->DFS($root->left, $res);
        $res[] = $root->val;
        $this->DFS($root->right, $res);
    }
}