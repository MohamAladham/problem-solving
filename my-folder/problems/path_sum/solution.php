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
     * @param Integer $targetSum
     * @return Boolean
     */
    function hasPathSum($root, $targetSum) {  
        return $this->DFS($root, 0,$targetSum);
    }


    function DFS($root, $sum, $targetSum){
        $sum += $root->val;

        if(!$root){
            return false;
        }

        if(!$root->left && !$root->right){
            if($sum === $targetSum){
                return true;
            }else{
                return false;
            }
        }
        
        

        return $this->DFS($root->left, $sum,$targetSum) || $this->DFS($root->right, $sum, $targetSum);
    }



}
