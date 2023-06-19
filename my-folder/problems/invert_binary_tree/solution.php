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
     * @return TreeNode
     */
    function invertTree($root) {
        $q = new SplQueue();

        if(!$root){
            return $root;
        }

        $q->enqueue($root);

        while(!$q->isEmpty()){
            $count = $q->count();

            for($i=0; $i<$count; $i++){
                $node = $q->dequeue();

                $temp = $node->left;
                $node->left = $node->right;
                $node->right = $temp;

                if($node->left){
                    $q->enqueue($node->left);
                }
                if($node->right){
                    $q->enqueue($node->right);
                }
            }
        }

        return $root;
    }
}
