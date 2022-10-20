import java.util.Stack;

public class Main {
    public static void reverse(StringBuffer str)
    {
        int n = str.length();
        Stack<Character> obj = new Stack();

        int i;
        for (i = 0; i < n; i++)
            obj.push(str.charAt(i));

        for (i = 0; i < n; i++) {
            char ch = obj.pop();
            str.setCharAt(i, ch);
        }
    }

    // driver function
    public static void main(String args[])
    {
        StringBuffer string = new StringBuffer("ED2 eh mt bom");

        reverse(string);

        System.out.println("Reverse: " + string);
    }
}

//Complexidade é O(n) pois utilizamos somente uma string como entrada da função principal e a percorremos de forma linear usando o for como laço de repetição
