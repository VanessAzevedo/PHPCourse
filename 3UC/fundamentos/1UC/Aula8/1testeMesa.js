var a = 5;
var b = 7;

for(i=0; i<=5; i++){ //i++ acrescenta o valor de 1 em 1 ao i.
    if(b < i){
        console.log(a);
    }
    a=i-1; //a passou a ser igual a 0, que é o valor inicial de i. Os valores foram atualizados 
    b--; //vai tirando o valor de 1 em 1 de b. Os valores foram atualizados 
}