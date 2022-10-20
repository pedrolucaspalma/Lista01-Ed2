# Os algoritmos em Elixir e Rust simplesmente imprimem uma string no Standard Output (geralmente o terminal) do usuário

````rust
fn main() {
    println!("Hello World");
}
```elixir
defmodule Main do
  IO.puts("Hello World")
end
````

## Independentemente do que fosse passado como parâmetro para as funções, isso não afetaria a quantidade de operações realizadas pelo algoritmo e ele simplesmente imprimiria a string, realizando então apenas uma única operação, o que faz com que ele seja O(1), com complexidade assintótica de tempo constante
