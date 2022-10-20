# Os algoritmos escritos em Javascript e Java invertem o conteúdo de uma string

## Em ambos os casos (mostrados abaixo), itera-se 2 vezes sobre algo. Inicialmente, iteramos sobre a string, e criamos uma pilha de caracteres dessa string. Em seguida, iteramos outra vez, dessa vez sobre a pilha de caracteres, e tiramos o último elemento desse array e fazemos a substituição na posição equivalente na string

```javascript
for (i = 0; i < n; i++) stack.push(str[i]);

for (i = 0; i < n; i++) {
	let ch = stack.pop();
	str[i] = ch;
}
```

```java
for (i = 0; i < n; i++)
    obj.push(str.charAt(i));

for (i = 0; i < n; i++) {
    char ch = obj.pop();
    str.setCharAt(i, ch);
}

```

## A complexidade dos algoritmos também é O(n), visto que o número de operações cresce linearmente de acordo com o tamanho da string desejada. O fato de iteramos duas vezes sobre cada caracter não altera, assintoticamente, a complexidade do algoritmo
