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
     * @return Integer
     */
    function maxPathSum($root) {
        $max = PHP_INT_MIN;
        $this->DFS($root, $max);
        return $max;
    }


    function DFS($root, &$max){
        if(!$root){
            return 0;
        }

        $maxL = max($this->DFS($root->left, $max), 0);
        $maxR = max($this->DFS($root->right, $max), 0);

        $maxBranch = max($maxL+$root->val, $maxR+$root->val);
        $max = max($max ,$maxL + $root->val + $maxR);

        return $maxBranch;
    }
}
