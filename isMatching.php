<?php 


// Created Using SplStack

$string = "(((((25+1)))))"; //input 

function isMatching($string) {

    if(empty($string)) {
        
        return 'YES';    
        
    }
    
    $stack = new SplStack();

    for ($i = 0; $i < strlen($string); $i++) {
        
    $mapParentheses = [
    
         ")" => "(", "}" =>"{", "]" => "["
    
    ];
        
      $char = $string[$i];

      // determind If the current char is a closing parenthesis.
      if (isset($mapParentheses[$char])) {

        $topElement = $stack->isEmpty() ? 'EMPTY STACK' : $stack->pop();

        // If the mapping for this bracket doesn't match the stack's top element, return false.
        if ($topElement != $mapParentheses[$char]) {
          return 'NO';
        }
      } elseif(isAValidParenthesis($char)) { 
        // determind If the current char is a opining parenthesis and is a valid parenthesis.
        // push it to the stack
        $stack->push($char);
      }
    }

    return $stack->isEmpty() ? 'YES' : 'NO';
  }

  
  
  function isAValidParenthesis($parenthesis) {
      
    
    $validParentheses = [

            '(',
            '{',
            '[',
            ')',
            '}',
            ']',
        
        ];
    
    return in_array($parenthesis, $validParentheses) ? true : false;
      
}



echo isMatching($string);
