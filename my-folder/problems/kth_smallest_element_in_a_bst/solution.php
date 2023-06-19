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
     * @param Integer $k
     * @return Integer
     */
    function kthSmallest($root, $k) {
        $ans = [];
        $this->DFS($root, $k, $ans);

        return $ans[$k-1];
    }

    function DFS($root, $k, &$ans){
        if(!$root || $k===count($ans)){
            return;
        }

        $this->DFS($root->left, $k, $ans);
        $ans[] = $root->val;
        $this->DFS($root->right, $k, $ans);
    }
}
