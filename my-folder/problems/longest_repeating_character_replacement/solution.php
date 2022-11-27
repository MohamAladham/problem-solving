class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return Integer
     */
    function characterReplacement($s, $k) {
        $count = strlen($s);
        $hash_count = [];
        $l = 0;
        $ans = 0;

        for($r=0; $r<$count; $r++){
            $hash_count[$s[$r]] = isset($hash_count[$s[$r]]) ? $hash_count[$s[$r]]+1 : 1;

            while($r - $l + 1 - max($hash_count) > $k ){
                $hash_count[$s[$l]] -= 1;
                $l++;
            }

            $ans = max($ans, $r-$l+1);
        }

        return $ans;
    }
}