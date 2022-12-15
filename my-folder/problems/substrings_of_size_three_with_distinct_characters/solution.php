class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function countGoodSubstrings($s) {
        $res = 0;
        $l = 0;
        $r = 2;

        while($r<strlen($s)){
           $hash = []; 

           for($i=$l; $i<=$r; $i++){
               if(isset($hash[$s[$i]])){
                    $l++;
                    $r++;
                    continue 2;
               }
               $hash[$s[$i]] = true;
           }

           $res++;
           $l++;
           $r++;
        }


        return $res;
    }
}