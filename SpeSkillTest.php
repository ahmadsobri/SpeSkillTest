<?php

class SpeSkillTest {
    //1.Narcissistic Number
    
    //2.Parity Outlier
    public function parityOutlier($integers){
      $odds = [];
      $evens = [];
      foreach ($integers as $item) {
        if ($item % 2) {
            array_push($odds, $item);
        }else{
            array_push($evens, $item);
        }
      }
      
        if(count($evens) === 1){
            return $evens[0];
        }else if(count($odds) === 1){
            return $odds[0];
        }else{
            return "false";
        }
    }
    
    //3.Needle in a Haystack
    public function findNeedle($arr, $key){
        foreach($arr as $k => $val){
            if($val === $key){
                return $k;
            }
        }
    }
    
    //4.The Blue Ocean Reverse
    public function blueOcean($arr_src,$filters){
        
      $temp = $arr_src;
      
        foreach($filters as $k => $val){
                 $result = []; 
            foreach($temp as $q => $v){
                          
              if($val != $v){
                  array_push($result,$v);
              }
              
                          
            }
            $temp = $result;
        }
      return $temp;
    }
}

// run

$spe = new SpeSkillTest;

$cc = [11, 13, 15, 19, 9, 13, -21];
echo $spe->parityOutlier($cc);

$arr = ["red", "blue", "yellow", "black", "grey"];
echo $spe->findNeedle($arr, "blue");

print_r($spe->blueOcean([1,2,3,4,6,10], [2]));
