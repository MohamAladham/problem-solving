class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Boolean
     */
    function checkSubarraySum($nums, $k) {
        // [23,2,4,6,7]  6
       
      /*  $reminder = [0 => -1];
        $total = 0;

        foreach($nums as $index=>$v){
                $total += $v;
                $r = $total%$k;

                if(!isset($reminder[$r])){
                    $reminder[$r] = $index;
                }
                elseif($index-$reminder[$r]>1){
                    return true;
                }
        }

        return false;
*/
       ////
       
        $mods = [0=>-1];
        $sum = 0;

        foreach($nums as $index=>$n){
            $sum += $n;

            if(isset($mods[$sum%$k]) && $index-$mods[$sum%$k]>1){
                return true;
            }

            if(!isset($mods[$sum%$k]))
            $mods[$sum%$k] = $index;
        }

        return false;
    }
}