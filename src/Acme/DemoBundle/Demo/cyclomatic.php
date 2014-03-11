<?php
/**
 * Class Foo
 *
 * @author Jörn Wagner <joern.wagner@explicatis.com>
 * @SuppressWarnings(PHPMD.ShortVariable) 
 */
class Foo
{
    public function example()
    {
        $a  = $a1 = $a2 = 42;
        $b  = rand(0, 1234); $c = 13; $d = 69; $e = 'xyz'; $f = new \stdClass;
        $b1 = rand(0, 1234);
        $b2 = rand(0, 1234);
        if ($a == $b) {                // 1
            if ($a1 == $b1) {          // 2
                fiddle();
            } elseif ($a2 == $b2) {    // 3
                fiddle();
            } else {
                fiddle();
            }
        } elseif ($c == $d) {             // 4
            while ($c == $d) {            // 5
                fiddle();
            }
        } elseif ($e == $f) {             // 6
            for ($n = 0; $n < 30; $n++) { // 7
                fiddle();
            }
        } else {
            switch ($a) {
               case 1:         // 8
                    fiddle();
                    break;
                case 2:         // 9
                    fiddle();
                    break;
                case 3:         // 10
                    fiddle();
                    break;
                default:        // 11
                    fiddle();
                    break;
            }
        }
    }
}
