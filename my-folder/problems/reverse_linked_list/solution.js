/**
 * Definition for singly-linked list.
 * function ListNode(val, next) {
 *     this.val = (val===undefined ? 0 : val)
 *     this.next = (next===undefined ? null : next)
 * }
 */
/**
 * @param {ListNode} head
 * @return {ListNode}
 */
var reverseList = function(head) {

    if(!head){
       return head;
       }
    
    let prev = head;
    let next = head.next;
    head.next = null;

    while (next !== null) {
        prev = head;
        head = next;
        next = head.next;
        head.next = prev;
    }
    
    return head;
};