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
<?php


class Solution {

    /**
     * @param ListNode $head
     * @param Integer $left
     * @param Integer $right
     * @return ListNode
     */
    function reverseBetween($head, $left, $right) {
        $dummy = new ListNode();
        $dummy->next = $head;
        $pre = $dummy;
        
        for($i=1; $i<=$left-1; $i++){
            $pre = $pre->next;
        }

        $start = $pre->next;
        $next = $start->next;
    
        // 1 - 2 - 3 - 4 - 5 ; left=2; right =4 ---> pre = 1, start = 2, next = 3
        // dummy-> 1 -> 2 -> 3 -> 4 -> 5

        for($i=0; $i<$right-$left; $i++){
            $start->next = $next->next;
            $next->next = $pre->next;
            $pre->next = $next;
            $next = $start->next;    
        }

        return $dummy->next;
    }
}
