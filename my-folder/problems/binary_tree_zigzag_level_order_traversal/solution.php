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
     * @return Integer[][]
     */
    function zigzagLevelOrder($root) {
        if(!$root){
            return [];
        }
        
        $iteration = 0;
        $ans = [];
        $q = new SplQueue();
        $q->enqueue($root);
        

        while(!$q->isEmpty()){
            $count = $q->count();
            $arr = [];
            
            for($i=0; $i<$count; $i++){
                $node = $q->dequeue();

                if($iteration%2 === 0){
                   $arr[] = $node->val;  
                }else{
                   array_unshift($arr, $node->val);
                }

                if($node->left){
                    $q->enqueue($node->left);
                }
                if($node->right){
                    $q->enqueue($node->right);
                }
            }

            $ans[] = $arr;



            $iteration++;
        }

        return $ans;
    }
}