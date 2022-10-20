def fibo(n)
  n <= 2 ? 1 : fibo(n-1) + fibo(n-2)
end

p (1..5).map{|x| fibo(x)}

# Complexidade é O(2^N), pois chamamos a função fib 'n' vezes, e a função fib chama ela mesma recursivamente duas vezes.
