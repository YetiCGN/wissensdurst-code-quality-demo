<?php

class DirtyClass {
    public function violatePsr2() {
        $i = $j = 0;
        $j = rand(0,1000);
        if ($i !== $j)
        {
            throw new \Exception('Fail!');
        }
    }
}
