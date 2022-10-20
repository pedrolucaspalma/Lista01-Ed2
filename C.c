#include<stdio.h>

int fib(int n) {
  if (n == 1)
    return 0;
  else if (n == 2)
    return 1;
  else
    return (fib(n - 1) + fib(n - 2));
}

int main() {
  int n = 5;
  int i;
  printf("Sequencia de fibonacci :\n");
  for (i = 1; i <= n; i++) {
    printf("%d ", fib(i));
  }
}

//Complexidade é O(2^N), pois chamamos a função fib 'n' vezes, e a função fib chama ela mesma recursivamente duas vezes.
