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
     * @return Boolean
     */
    function evaluateTree($root) {
        if(!$root->left){
            return $root->val;
        }

        if($root->val == 2 ){
            return $this->evaluateTree($root->left) || $this->evaluateTree($root->right);
        }else{
            return $this->evaluateTree($root->left) && $this->evaluateTree($root->right);
        }    
    }
}
