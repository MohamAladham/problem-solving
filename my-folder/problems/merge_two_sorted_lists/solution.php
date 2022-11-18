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
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    function mergeTwoLists($list1, $list2) {
     
        $head = null;
        $pointer = null;

        while($list1 || $list2){
            if(!$list1){
                $node = $list2;
                $list2 = $list2->next;
            }elseif(!$list2){
                $node = $list1;
                $list1 = $list1->next;
            }elseif($list1->val <= $list2->val ){
                $node = $list1;
                $list1 = $list1->next;
            }else{
                $node = $list2;
                $list2 = $list2->next;
            }

            if($head === NULL){
                $pointer = $node;
                $head = $pointer;
            }else{
                $pointer->next = $node;
                $pointer = $pointer->next;
            }
        }


        return $head;
    }
}