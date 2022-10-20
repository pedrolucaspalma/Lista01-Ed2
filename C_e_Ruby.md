# Os algoritmos escritos em Ruby e C imprimem a sequência de fibonacci

## Em ambos os casos mostrados abaixo, nós iteraremos sobre uma sequência de números e realizamos uma operação chamando as funções `fib` e `fibo` para cada iteração realizada

```C
  for (i = 1; i <= n; i++) {
    printf("%d ", fib(i));
  }
```

```ruby
p (1..5).map{|x| fibo(x)}
```

## A diferença entre os dois casos é que no exemplo em C, nós iteramos com base em um contador, enquanto no exemplo em Ruby, nos iteramos sobre um range (array) de números

## Em ambos os casos, a complexidade é O(n), ou seja, o número de operações realizadas pelos algoritmos aumenta linearmente de acordo com o número de dados a serem manipulados
