// function that should return an array containing repetitions of the number argument



function replicate(occurence,num){
    if(occurence<1){
        return[];
    }
    return[num].concat(replicate(occurence-1,num));
}

let example1 = replicate(3,5);
let example2 = replicate(1,69);
let example3 = replicate(-2,6);


                        //OUTPUT
console.log(example1)   //[ 5, 5, 5 ]
console.log(example2)   //[ 69 ]
console.log(example3)   //[]