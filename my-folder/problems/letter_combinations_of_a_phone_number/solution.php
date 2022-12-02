class Solution {

    /**
     * @param String $digits
     * @return String[]
     */
    function letterCombinations($digits) {
        if(strlen($digits)==0)
            return [];

        $hash=["2"=>['a','b','c'],
              "3"=>['d','e','f'],
              "4"=>['g','h','i'],
              "5"=>['j','k','l'],
              "6"=>['m','n','o'],
              "7"=>['p','q','r','s'],
              "8"=>['t','u','v'],
              "9"=>['w','x','y','z']
        ];

        //if $digits has one digit only
        if(strlen($digits)==1)
            return $hash[$digits[0]];

        $res=$hash[$digits[0]];
        
        for($i=1;$i<strlen($digits);$i++)
          $res=$this->twoDigits($res,$hash[$digits[$i]]);
        
        return $res;   
    }
    
    function twoDigits($digit1,$digit2){
        $res=[];
        for($i=0;$i<sizeof($digit1);$i++){
            for($j=0;$j<sizeof($digit2);$j++){
                $res[] = $digit1[$i].$digit2[$j];
            }
        }
        return $res;
    }
}