class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer[]
     */
    function maxSlidingWindow($nums, $k) {
        $count = count($nums);    
        $left=0;
        $arr = [];
        $queue = new SplQueue();

        for($right=0; $right<$count; $right++){
         
            while (!$queue->isEmpty() && $nums[$right] > $queue->top()) {
			    $queue->pop();
		    }
		 
            $queue->push($nums[$right]);
            
           if($right-$left+1==$k){
                $arr[] = $queue->bottom();
               
                if($nums[$left] == $queue->bottom()){
                   $queue->shift();
                }
               
                $left++;
            }
        }
        
        return $arr;
    }
}