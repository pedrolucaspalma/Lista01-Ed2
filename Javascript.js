function reverse(str)
{
    let n = str.length;
    var stack = [];
    
    let i;
    for(i = 0; i < n; i++)
        stack.push(str[i]);
  
    // Pop all characters of string
    // and put them back to str
    for(i = 0; i < n; i++)
    {
        let ch = stack.pop();
        str[i] = ch;
    }
}

let string = "Ao Contrario".split("");
 
reverse(string);

console.log("Reverse: " + string.join(""));

//Complexidade é O(n) pois utilizamos somente uma string como entrada da função principal e a percorremos de forma linear usando o for como laço de repetição
