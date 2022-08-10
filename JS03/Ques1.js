// CALCULATE FACTORIAL USING RECURSION

function FACTORIAL(num)

{ 
   if(num>1) {
   return num*FACTORIAL(num-1);}
   else{
   return 1;}
}
console.log(FACTORIAL(5))
console.log(FACTORIAL(4))
console.log(FACTORIAL(6))
 
// OUTPUT
// factorial(5)=120
// factorial(4)=24
// factorial(6)=720