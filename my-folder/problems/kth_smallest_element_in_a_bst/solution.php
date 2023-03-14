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
class Solution {

    /**
     * @param TreeNode $root
     * @param Integer $k
     * @return Integer
     */
    function kthSmallest($root, $k) {
        $arr = [];
        $this->DFS($root, $k, $arr);
var_dump($arr);
        return $arr[$k-1];
    }


    function DFS($root, $k, &$arr){
        if(!$root || count($arr) === $k){
            return;
        }

        $this->DFS($root->left, $k, $arr);
        
        $arr[] = $root->val;
        
        $this->DFS($root->right, $k, $arr);
    }
}