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
     * @return Integer[][]
     */
    function pathSum($root, $targetSum) {
        $list = [];
        $this->DFS($root, $targetSum, $list, []);
        return $list;
    }

    function DFS($root, $targetSum, &$list, $path){
        if(!$root){
            return;
        }

        if(!$root->left && !$root->right){
            $sum = 0;
            $path[] = $root->val;

            foreach($path as $p){
                $sum += $p;
            }

            if($sum === $targetSum){
                $list[] = $path;
            }

            return;
        }

        $path[] = $root->val;

        $this->DFS($root->left, $targetSum, $list, $path);
        $this->DFS($root->right, $targetSum, $list, $path);

    }
}
