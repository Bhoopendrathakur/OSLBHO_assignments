// Exercise The Fortune Teller
function tellfortune( Numberofchildren,partnername,location ,jobtitle)
{
    var future = 'You will be a '+ jobtitle +' in ' +location+ ' and married to ' + partnername + ' with ' 
    + Numberofchildren + ' kids.';
    console.log(future)
}
// calling function with three diffrent values

tellfortune(2 , 'Ayushi', 'Delhi','lawyer')
tellfortune(1 , 'Anushree', 'hyderabad','professor')
tellfortune(0 , 'payal', 'Mumbai','Actor')

// Output
// You will be a lawyer in Delhi and married to Ayushi with 2 kids.
// You will be a professor in hyderabad and married to Anushree with 1 kids.
// You will be a Actor in Mumbai and married to payal with 3 kids.