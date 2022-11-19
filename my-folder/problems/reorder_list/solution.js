/**
 * Definition for singly-linked list.
 * function ListNode(val, next) {
 *     this.val = (val===undefined ? 0 : val)
 *     this.next = (next===undefined ? null : next)
 * }
 */
/**
 * @param {ListNode} head
 * @return {void} Do not return anything, modify head in-place instead.
 */
var reorderList = function(head) {
    let median = findMedian(head);
    let cur1 = head;
    let cur2 = reverseList(median);
    let dummyHead = new ListNode(), cur = dummyHead;
    while (cur1 && cur2) {
        cur.next = cur1;
        cur = cur.next;
        cur1 = cur1.next;
        if (!cur1) break;
        cur.next = cur2;
        cur = cur.next;
        cur2 = cur2.next;
    }
    return dummyHead.next;
    // T.C: O(N)
    // S.C: O(1)
};
function reverseList(head) {
    let prev = null, cur = head;
    while (cur !== null) {
        let next = cur.next;
        cur.next = prev;
        prev = cur;
        cur = next;
    }
    return prev;
}

function findMedian(head) {
    let slow = head, fast = head;
    while (fast !== null) {
        fast = fast.next;
        if (!fast) break;
        fast = fast.next;
        slow = slow.next;
    }
    return slow;
}