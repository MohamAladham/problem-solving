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
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    function mergeTwoLists($list1, $list2) {
        $res = new ListNode(-1);
        $head = $res;

        while($list1 || $list2){
            if(!$list2 || ($list1 && $list1->val < $list2->val)){
                $head->next = new ListNode($list1->val, null);
                $list1 = $list1->next;
            }else{
                $head->next = new ListNode($list2->val, null);
                $list2 = $list2->next;
            }

            $head = $head->next;
        }

        return $res->next;
    }
}
