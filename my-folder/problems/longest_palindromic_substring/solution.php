class Solution {

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s) {
        $ans = '';
        $max = 0;

        for($i=0; $i<strlen($s); $i++){
            // madam (odd)
            $l = $i;
            $r = $i;
            while($r<strlen($s) && $l>=0 && $s[$l]===$s[$r]){
                 $l--;
                 $r++;
            }

            $length = $r - $l + 1;

            if($length>$max){
                $max = $length;
                $ans = '';
                for($k=$l+1; $k<$r; $k++){
                    $ans .= $s[$k];
                }
            }

            // maddam (even)
            $l = $i;
            $r = $i+1;
            while($r<strlen($s) && $l>=0 && $s[$l]===$s[$r]){
                 $l--;
                 $r++;
            }

            $length = $r - $l + 1;

            if($length>$max){
                $max = $length;
                $ans = '';
                for($k=$l+1; $k<$r; $k++){
                    $ans .= $s[$k];
                }
            }
        }


        return $ans;
    }
}