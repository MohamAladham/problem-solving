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
     * @param Integer $k
     * @return Integer
     */
    function kthSmallest($root, $k) {
        $this->k = $k;
        $depth = 0;
        $this->res = null;
        $this->DFS($root, $depth);

        return $this->res;
    }

    function DFS($root, &$depth){
        if($this->res) return;
            
        if($root->left)
            $this->DFS($root->left, $depth);

        $depth++;

        if($depth === $this->k){
            $this->res = $root->val;
            return;
        }

        if($root->right)
            $this->DFS($root->right, $depth);
    }
}