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
     * @param TreeNode $p
     * @param TreeNode $q
     * @return Boolean
     */
    function isSameTree($p, $q) {
        return $this->DFS($p, $q);
    }


    function DFS($p, $q){
        if($p->val !== $q->val){
            return false;
        }

        if(!$p || !$q){
            return true;
        }

        if(!$this->DFS($p->left, $q->left) || !$this->DFS($p->right, $q->right)){
            return false;
        }

        return true;
    }
}