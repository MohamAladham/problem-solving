/**
 * Definition for a Node.
 * class Node {
 *     function __construct($val = 0) {
 *         $this->val = $val;
 *         $this->left = null;
 *         $this->right = null;
 *         $this->next = null;
 *     }
 * }
 */

class Solution {
    /**
     * @param Node $root
     * @return Node
     */
    public function connect($root) {
        $q = new SplQueue();
        $q->enqueue($root);

        while(!$q->isEmpty()){
            $count = $q->count();

            for($i=0; $i<$count; $i++){
                $node = $q->dequeue();
                
                if($i < $count -1){
                    $node->next = $q->bottom();
                }

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