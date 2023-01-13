/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */

class Solution {
    
    /**
     * @param TreeNode $root
     * @param TreeNode $p
     * @param TreeNode $q
     * @return TreeNode
     */
    function lowestCommonAncestor($root, $p, $q) {
        return $this->DFS($root, $p, $q);
    }


    function DFS($root, $p, $q){
        if(!$root || $root === $p || $root === $q){
            return $root;
        }

        $left = $this->DFS($root->left, $p, $q);       
        $right = $this->DFS($root->right, $p, $q);
        
        if(!$left){
            return $right;
        }

        if(!$right){
            return $left;
        }

        if($right && $left){
            return $root;
        }
    }
}