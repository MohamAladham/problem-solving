class TimeMap {
    private $hash = [];
   
    /**
     */
    function __construct() {
        
    }
  
    /**
     * @param String $key
     * @param String $value
     * @param Integer $timestamp
     * @return NULL
     */
    function set($key, $value, $timestamp) {
        $this->hash[$key][] = [$timestamp, $value];
       // var_dump($this->hash);
    }
  
    /**
     * @param String $key
     * @param Integer $timestamp
     * @return String
     */ 
    function get($key, $timestamp) {
        // get the timestamp OR the most nearest minimum one.
        
        if(!isset($this->hash[$key]) || !$this->hash[$key]){
            return '';
        }
        
        $l = 0;
        $r = count($this->hash[$key]) - 1;
        $max = [0, ''];

        while($l<=$r){
            $m = floor(($l+$r)/2);
            $hashed_key = $this->hash[$key][$m];
            
            if($hashed_key[0] === $timestamp){
                return $hashed_key[1];
            }elseif($hashed_key[0] < $timestamp){
                $l = $m + 1;
                $max_temp = max($max[0], $hashed_key[0]);
                $max = $max[0] === $max_temp? $max: $hashed_key;
            }else{
                $r = $m -1;
            }
        }

        return $max[1];
    }
}

/**
 * Your TimeMap object will be instantiated and called as such:
 * $obj = TimeMap();
 * $obj->set($key, $value, $timestamp);
 * $ret_2 = $obj->get($key, $timestamp);
 */