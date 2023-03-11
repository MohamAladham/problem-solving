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
     * @return NULL
     */
    function flatten(&$root) {
        if($root == null || ($root->left == null && $root->right == null)){
            return $root;
        }

        $res = new TreeNode();
        $pointer = $res;
        $this->preOrderTraverse($root, $pointer);
        $res = $res->right;
        $root = $res;
    }

    function preOrderTraverse($root, &$pointer){
        if($root == null){
            return;
        }
        
        $pointer->right = new TreeNode($root->val, null);
        $pointer = $pointer->right;
            
        $this->preOrderTraverse($root->left, $pointer);
        $this->preOrderTraverse($root->right, $pointer);
    }
}