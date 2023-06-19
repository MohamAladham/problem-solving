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
    function sumNumbers($root) {
        $res = 0;
        $this->DFS($root, $res, "");

        return $res;
    }

    function DFS(?TreeNode $root, int &$res, string $path){
        if(!$root){
            return;
        }

        $path .= $root->val;

        if(!$root->left && !$root->right){
            $res += (int) $path;
            return;
        }

        $this->DFS($root->left, $res, $path);
        $this->DFS($root->right, $res, $path);
    }
}
