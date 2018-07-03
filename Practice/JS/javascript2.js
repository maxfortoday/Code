var price = 20;
var discount = 10;
var isManager = true;
var totalPrice = 0;
var StyleBoolian = isManager ? "hell yea" : "no whay";

function calculate(price, discount, isManager) {
	totalPrice = price - (price*(discount/100));

	if (price < 25) {
		totalPrice += 15;
		
	} 
	if (isManager) {
		totalPrice *= 0.5;
	}
}


calculate(price, discount, isManager); 
alert("Your total price is " + totalPrice + " Manager discount applied? " + StyleBoolian);

/*
homework:
make a function for how mutch icecreem someone wants
the icecreem parameters:
1: flaivor
2: number of scoups


addIcecream(flavor,count) {
	array.push("how mutch we added the icecream flavor")
}

addIceCream("vanilla", 2);
addIceCream("bannana", 4);
addIceCream("strewberry", 1);

if i added "nutella" then call it 10 times

alert ("all arrays results")
*/