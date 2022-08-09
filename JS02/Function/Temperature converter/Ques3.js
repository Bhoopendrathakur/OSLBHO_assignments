//  Function-celsiusToFaherenheit
function celsiusToFaherenheit(tempInCelcius) {
    if( tempInCelcius || tempInCelcius === 0){
        let tempInFaherenheit = (9 * tempInCelcius/5)+32;
        console.log(tempInCelcius+ "°C is " + tempInFaherenheit+  "°F" ) ;
    }
    else{
        console.log('Input A Number')
    }
}
celsiusToFaherenheit(5);
celsiusToFaherenheit(-41);

// Output
// 5°C is 41°F
// -41°C is -41.8°F


// Function FaherenheitTocelsius
function FaherenheitTocelsius(tempInFaherenheit) {
    if( tempInFaherenheit || tempInFaherenheit === 0){
        let tempInCelcius = 5 * (tempInFaherenheit-32)/9;
        console.log(tempInFaherenheit+ "°F is " + tempInCelcius+  "°C" ) ;
    }
    else{
        console.log('Input A Number')
    }
}
FaherenheitTocelsius(0)
FaherenheitTocelsius(-40)

// Output
// 0°F is -17.77777777777778°C
// -40°F is -40°C