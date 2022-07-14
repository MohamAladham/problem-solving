class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
$old_s = $s;

    $arr = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000,
    ];

    $special_arr = [
        'IV' => 2,
        'IX' => 2,
        'XL' => 20,
        'XC' => 20,
        'CD' => 200,
        'CM' => 200,
    ];

    // $s  = 'LVIII'
    $s = str_split( $s );

    $sum = 0;

    foreach ( $s as $v )
    {
        $sum = $sum + $arr[$v];
    }

    foreach ( $special_arr as $k=>$v )
    {
        if ( strpos( $old_s, $k ) !== FALSE )
        {
    //        var_dump('sss');
            $sum -= $v;
        }
    }

    return $sum;
    }
}