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
    function maxDepth($root) {
        if(!$root){
return 0;
        }
        $q = new SplQueue();
        $q->enqueue($root);
        $count = 0;

        while(!$q->isEmpty()){
            $qCount = $q->count();
            $count++;

            for($i=0; $i<$qCount; $i++){
                $node = $q->dequeue();

                if($node->left){
                    $q->enqueue($node->left);
                }
                if($node->right){
                    $q->enqueue($node->right);
                }
            }
        }

        return $count;
    }
}
