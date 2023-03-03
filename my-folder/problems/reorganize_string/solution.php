class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reorganizeString($s) {
        $hash = [];
        $maxHeap = new SplMaxHeap();
        $res = '';

        for($i=0; $i<strlen($s); $i++){
            $hash[$s[$i]] = $hash[$s[$i]] ?? 0;
            $hash[$s[$i]]++;
        }

        foreach($hash as $k=>$v){
            $maxHeap->insert([$v, $k]);
        }

        while(!$maxHeap->isEmpty()){
            $top = $maxHeap->extract();
            
            if(isset($prev) && $prev[0] > 0){
                $maxHeap->insert($prev);
            }
        
            $res .= $top[1];
            $prev = [$top[0]-1, $top[1]];
        }

        return strlen($res) === strlen($s) ? $res : "";
    }
}