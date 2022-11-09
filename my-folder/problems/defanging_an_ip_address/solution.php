class Solution {

    /**
     * @param String $address
     * @return String
     */
    function defangIPaddr($address) {
       // return str_replace('.','[.]',$address);

       $ipd = '';
       $address = str_split($address);

       foreach($address as $ch){
           $ipd .= $ch==='.'?'[.]':$ch;
       }

       return $ipd;
    }
}