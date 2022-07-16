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
var deleteDuplicates = function(head) {
    
    
    let current = head;
    

    while(current !== null)
      {
          if(current.next && current.val === current.next.val){
              current.next  = current.next.next;
              //current.next = null;

             }
          
          
          if(current.next&& current.next.val === current.val){
             continue;
             }
          
          current = current.next;
      }
    
    return head;
    
};