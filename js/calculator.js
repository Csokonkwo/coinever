var Basic = {
    name : "Basic",
    percentage : 10.5,
    minimum : 1000,
    maximum : 4999

}

var Regular= {
    name : "Regular",
    percentage : 14.0,
    minimum :5000,
    maximum : 9999

} 

var Standard = {
    name : "Standard",
    percentage : 21.0,
    minimum :10000,
    maximum : 49999

}

var Premium = {
    name : "Premium",
    percentage : 28.0,
    minimum :50000,
    maximum : 10000000000

}


function calculate(type){
var plans = Array(Basic,Regular,Standard,Premium);

var select = document.querySelector(".calculator select");

var amount = document.querySelector(".calculator .amount");

var interest = document.querySelector(".calculator .interest span");

var totalreturns = document.querySelector(".calculator .total span");
    
    
//Determines which object to use
var toUse = null;

for(var x = 0;x<plans.length;x++){
var value = select.value;
if(value == plans[x].name){
toUse = plans[x];
}



}
if(type == 'plan'){
    var calcAmount = toUse.minimum;
amount.min = toUse.minimum;
amount.max = toUse.maximum;
amount.value = calcAmount

}
else{
    var calcAmount = amount.value;
    amount.value = calcAmount
}


if(amount.value < toUse.minimum || amount.value > toUse.maximum){
amount.value = "Invalid Amount"
}
else{

    var profit = Math.round((toUse.percentage/100) * calcAmount);

    interest.innerHTML = profit;
    
    amount.value = calcAmount;
    totalreturns.innerHTML = Number(amount.value) + Number(profit);
}


}


function calcInvest(){
    
    var expected = document.querySelector("#expecteda");
    var plans = Array(Basic,Regular,Standard,Premium);

    var select = document.querySelector("select");

    var amount = document.querySelector("#invest-amount");

    //Determines which object to use when you catch the required object in the loop
        
    var toUse = null;

    for(var x = 0;x<plans.length;x++){

    var value = select.value; //gets the value of the select element

    if(value == plans[x].name){
    toUse = plans[x]; //If the value is correct assign the particular element to the global toUse variable to work with on the next line
    }

    } 



    if(amount.value < toUse.minimum || amount.value > toUse.maximum){
        expected.innerHTML ="Please enter a valid amount for Package selected";
        //Checks whether the amount entered is equal to the selected plans value return false here ;
        return false;
    }
    else{

    //Else statement means if is contained in the range as specified return true here
    return true
    }


}



function calcInv(){

    var amount = document.querySelector("#invest-amount");
    var plan = document.querySelector("#invest-plan");
    var expected = document.querySelector("#expecteda");

    if(plan.value == 'Basic'){
        expect_this = amount.value * 0.25 + " Profit daily";
    }

    else if(plan.value == 'Regular'){
        expect_this = amount.value * 0.015 + " Profit daily";
    }

    else if(plan.value == 'Standard'){
        expect_this = amount.value * 0.020 + " Profit daily";
    }

    else if(plan.value == 'Premium'){
        expect_this = amount.value * 0.030 + " Profit daily";
    }

    expected.innerHTML = "$" + expect_this;

}