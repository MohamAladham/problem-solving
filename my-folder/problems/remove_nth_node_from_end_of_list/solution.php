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
     * @param ListNode $head
     * @param Integer $n
     * @return ListNode
     */
    function removeNthFromEnd($head, $n) {
        $dummy = new ListNode(0, $head);
        $left =  $dummy;
        $right = $head;

        for($i=0; $i<$n; $i++){
            $right = $right->next;
        }

        while($right){
            $left = $left->next;
            $right = $right->next;
        }

        $left->next = $left->next->next;

        return $dummy->next;
    }
}



