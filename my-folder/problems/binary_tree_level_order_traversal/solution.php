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
     * @return Integer[][]
     */
    function levelOrder($root) {
        if(!$root){
            return [];
        }

        $q = new SplQueue();
        $q->enqueue($root);
        $ans = [];

        while(!$q->isEmpty()){
            $count = $q->count();
            $arr = [];

            for($i=0; $i<$count; $i++){
                $node = $q->dequeue();
                $arr[] = $node->val;

                if($node->left){
                    $q->enqueue($node->left);
                }
                if($node->right){
                    $q->enqueue($node->right);
                }
            }

            $ans[] = $arr;
        }

        return $ans;
    }
}
