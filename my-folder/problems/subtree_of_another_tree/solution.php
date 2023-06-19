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
<?php


class Solution {

    /**
     * @param TreeNode $root
     * @param TreeNode $subRoot
     * @return Boolean
     */
    function isSubtree($root, $subRoot) {
        $this->subRoot = $subRoot;
        return $this->DFS($root);        
    }


    function DFS($r){
        if($r == $this->subRoot){
            return true;
        }

        if(!$r){
            return false;
        }

        if($this->DFS($r->left) || $this->DFS($r->right)){
            return true;
        }

        return false;
    }

}
