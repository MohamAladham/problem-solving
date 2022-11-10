class ParkingSystem {
    
    private $big;
    private $medium;
    private $small;
    
    
    /**
     * @param Integer $big
     * @param Integer $medium
     * @param Integer $small
     */
    function __construct($big, $medium, $small) {
        $this->big  = $big;
        $this->medium = $medium;
        $this->small = $small;
    }
  
    /**
     * @param Integer $carType
     * @return Boolean
     */
    function addCar($carType) {
        switch($carType){
            case 1:
                if($this->big){
                    $this->big--;
                    return true;
                }
            break;
            case 2:
                if($this->medium){
                    $this->medium--;
                    return true;
                }
            break;
            case 3:
                if($this->small){
                    $this->small--;
                    return true;
                }
            break;
        }

        return false;
    }
}

/**
 * Your ParkingSystem object will be instantiated and called as such:
 * $obj = ParkingSystem($big, $medium, $small);
 * $ret_1 = $obj->addCar($carType);
 */