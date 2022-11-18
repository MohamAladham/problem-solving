/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */

class Solution {
    /**
     * @param ListNode $head
     * @return Boolean
     */
    function hasCycle($head) {
   //     $pos = -1;
        $slow = $head;
        $fast = $head;

        while($fast != null && $fast->next != null){
            $fast = $fast->next->next;
            $slow = $slow->next;
            //$pos++;

            if($fast === $slow){
                return true;
            }
        }

        return false;
    }
}