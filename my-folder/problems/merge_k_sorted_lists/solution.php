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
     * @param ListNode[] $lists
     * @return ListNode
     */
    function mergeKLists($lists) {
        $heap = new SplMinHeap();

        foreach($lists as $l){
            while($l){
                $heap->insert($l->val);
                $l = $l->next;
            }
        }

        $ans = new ListNode(0, new ListNode() );
        $pointer = $ans->next;
        
        while(!$heap->isEmpty()){
            //var_dump($pointer);
            $pointer->next = new ListNode($heap->extract());
            $pointer = $pointer->next;
        }

        return $ans->next->next;
    }
}
