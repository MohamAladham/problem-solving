<?php


class Solution {

    /**
     * @param String $s
     * @return String[]
     */
   function restoreIpAddresses( $s )
    {
        $result = [];
        $this->trackIp( $result, [], $s );

        return $result;
    }

    function trackIp( &$result, $ip, $input )
    {
        if ( count( $ip ) === 4 )
        {
            $ip = implode( '.', $ip );
            if ( $input !== "" || in_array( $ip, $result ) )
            {
                return FALSE;
            }
            array_push( $result, $ip );

            return TRUE;
        }
        if ( $input === "" || $input === FALSE )
        {
            return FALSE;
        }
        if ( $input[0] == 0 )
        {
            $ip[]  = $input[0];
            $input = substr( $input, 1 );
            $this->trackIp( $result, $ip, $input );
        } else
        {
            $oneDigit      = $input[0];
            $oneDigitInput = substr( $input, 1 );
            $this->trackIp( $result, array_merge( $ip, [ $oneDigit ] ), $oneDigitInput );

            $twoDigit      = $input[0] . $input[1];
            $twoDigitInput = substr( $input, 2 );
            $this->trackIp( $result, array_merge( $ip, [ $twoDigit ] ), $twoDigitInput );

            $threeDigit = @$input[0] . @$input[1] . @$input[2];
            if ( $threeDigit < 256 )
            {
                $threeDigitInput = substr( $input, 3 );
                $this->trackIp( $result, array_merge( $ip, [ $threeDigit ] ), $threeDigitInput );
            }
        }
    }
}
