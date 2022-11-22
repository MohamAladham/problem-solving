class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function nextGreaterElement($nums1, $nums2) {
        $stack = [];
        $hash_next = [];
        $ans = [];

        if(!$nums1 || !$nums2){
            return -1;
        }

        foreach($nums2 as $v){
            while($stack && $v > end($stack)){
                $popped = array_pop($stack);
                $hash_next[$popped] = $v;
            }
        
            array_push($stack, $v);
        }

        foreach($nums1 as $a){
            $ans[] = $hash_next[$a]??-1;
        }
        
        return $ans;
    }
}