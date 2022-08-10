// Product of an array using recursion
function productOfArray(ar){
    if(ar.length<1){
        return false;

    }

    if(ar.length===1){
        return ar[0];
    }
    return ar.shift()*productOfArray(ar);
}


let six= productOfArray([1,2,3]);
let sixty= productOfArray([1,2,3,10]);
let sixHundred= productOfArray([1,2,3,10,10]);

console.log(six);
console.log(sixty);
console.log(sixHundred);

//OUTPUT
// 6
// 60
// 600