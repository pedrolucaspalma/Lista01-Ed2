# Os algoritmos escritos em Ruby e C imprimem a sequência de fibonacci

## Em ambos os casos mostrados abaixo, nós iteraremos sobre uma sequência de números e realizamos uma operação chamando as funções `fib` e `fibo` para cada iteração realizada. A cada vez que chamamos essa função, ela se chama de maneira recursiva duas vezes.

```C
  for (i = 1; i <= n; i++) {
    printf("%d ", fib(i));
  }
```

```ruby
p (1..5).map{|x| fibo(x)}
```

## Uma diferença entre os dois casos que vale destacar é que no exemplo em C, nós iteramos com base em um contador, enquanto no exemplo em Ruby, nos iteramos sobre um range (array) de números

## Em ambos os casos, a complexidade é O(2^n), ou seja, o número de operações realizadas pelos algoritmos aumenta exponencialmente de acordo com o número de dados a serem manipulados
