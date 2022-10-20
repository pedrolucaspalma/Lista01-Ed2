package main

import "fmt"

func main() {
	const LIMITE_MAXIMO = 5
	for i := 0; i < LIMITE_MAXIMO; i++ {
		for j := 0; j < LIMITE_MAXIMO; j++ {
			fmt.Println(i)
		}
	}
}

// Um loop for dentro de outro é um exemplo simples que ilustra a compleixdade O(n²). 
// No exemplo acima, para cada iteração realizada das 5 totais do loop mais externo, realizam-se outras 5 iterações no loop interno, fazendo com que a complexidade aumente de maneira exponencial.