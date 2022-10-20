
<?php
    function binarySearch(Array $arr, $x)
    {
        // check for empty array
        if (count($arr) === 0) return false;
        $low = 0;
        $high = count($arr) - 1;
        
        while ($low <= $high) {
            
            // compute middle index
            $mid = floor(($low + $high) / 2);
    
            // element found at mid
            if($arr[$mid] == $x) {
                return true;
            }
    
            if ($x < $arr[$mid]) {
                // search the left side of the array
                $high = $mid -1;
            }
            else {
                // search the right side of the array
                $low = $mid + 1;
            }
        }
        
        // If we reach here element x doesnt exist
        return false;
    }
    
    // Driver code
    $arr = array(1, 2, 3, 4, 5);
    $value = 5;
    if(binarySearch($arr, $value) == true) {
        echo $value." Exists";
    }
    else {
        echo $value." Doesnt Exist";
    }


    // O código acima executa uma busca binária dentro de um array.
    // O algoritmo de busca binária é um exemplo clássico de complexidade O(log n), visto que a cada iteração realizada, metade dos valores restantes do array são descartados.
    // Isso se deve pelo fato de que, assumindo que o array é ordenado, nós podemos começar no valor intermediário do array e realizar uma verificação: 
        // Caso o valor a ser procurado seja maior que o atual, vamos para o próximo valor central à direita da posição atual.
        // Caso seja menor, fazemos o mesmo para a esquerda
    // Portanto, a cada vez que realizamos essa verificação, descartamos metade dos valores restantes.
?>
