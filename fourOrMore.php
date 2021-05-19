<?php 

// input 
$array = [1, 2, 3, 1, 3, 6, 6, 6, 6, 6, 3,3];
$info = [];
$result = [];


for ($i = 0; $i < count($array); $i++)
{
    if ($array[abs($array[$i])] >= 0) {

        $array[abs($array[$i])] = -$array[abs($array[$i])];

    }else {

        if(isset($info[abs($array[$i])])) {


            $info[abs($array[$i])] = $info[abs($array[$i])] + 1;

            if($info[abs($array[$i])] + 1 >= 4 ) {

                $result[abs($array[$i])] = $info[abs($array[$i])] ;

            }

        }else {

            $info[abs($array[$i])] = 2;
        }
    }

}

echo "Count of the integers that found 4 or more time is :  ";
echo count($result);
