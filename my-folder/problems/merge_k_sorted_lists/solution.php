/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode[] $lists
     * @return ListNode
     */
    function mergeKLists($lists) {
        $arr = [];
        
        foreach($lists as $l){
            $iterator = $l;
            
            while($iterator){
                //$arr[] = $iterator->val;
                array_push($arr, $iterator->val);
                $iterator = $iterator->next;
            }
        }    

        sort($arr);

        $result = null;
        
        for($i = (count($arr) - 1); $i >= 0; $i--) {            
            $result = new ListNode($arr[$i], $result);
        }
        
        return $result;
    }

}








