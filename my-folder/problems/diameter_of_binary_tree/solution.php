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
    function diameterOfBinaryTree($root) {
        $res = 0;
        $this->DFS($root, $res);
        return $res;
    }


    function DFS($root, &$res){
        if(!$root){
            return 0;
        }

        $left = $this->DFS($root->left, $res);
        $right = $this->DFS($root->right, $res);
        $res = max($res, $left+$right);

        return 1 + max($left, $right);
    }
}