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
        
        $queue = new SplQueue();
        $queue->enqueue($root);
        $res = [];
        $iterations = 0;

        while(!$queue->isEmpty()){
            $count = $queue->count();
            $arr = [];
            
            for($i=0; $i<$count; $i++){
                $root =  $queue->dequeue();
                
                if($iterations%2===0){
                    $arr[] = $root->val;
                }else{
                    array_unshift($arr, $root->val);
                }
                
                if($root->left){
                    $queue->enqueue($root->left);
                }

                if($root->right){
                    $queue->enqueue($root->right);
                }
            }

            $res[] = $arr; 
            $iterations++;
        }


        return $res;
    }
}