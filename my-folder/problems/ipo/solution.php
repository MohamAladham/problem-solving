class Solution {

    /**
     * @param Integer $k
     * @param Integer $w
     * @param Integer[] $profits
     * @param Integer[] $capital
     * @return Integer
     */
    function findMaximizedCapital($k, $w, $profits, $capital) {
        // fill all capitals in min heap
        $minHeap = new SplMinHeap();
        foreach($capital as $key=>$c){
            $minHeap->insert([$c, $key]);
        }

        //max heap for profits
        $maxHeap= new SplMaxHeap();
        for($i = 1 ; $i<= $k; $i++){
            while(!$minHeap->isEmpty() && $minHeap->top()[0] <= $w){
                // here we have current capital that is >= min capital needed
                // that means we do not need more money, we can invest 
                $c = $minHeap->extract();
                $maxHeap->insert([$profits[$c[1]], $c[1]]);
            }
            if($maxHeap->isEmpty()){
                break;
            }
            // here the current capital is < capital needed
            // so we need to have more money.
            //We add the profit from previous invested capitals to the current capital
            // so we can continue investing
            $j = $maxHeap->extract()[0];
            $w+=$j; 
        }
        return $w;
    }
}