var icecream = [];

function addIceCream(flavor, scoups) {
	var icecreamObject = {
		"flavor": flavor,	
		"scoups": scoups
	};
	icecream.push(icecreamObject);
}
	

addIceCream("vanilla", 2);
addIceCream("bannana", 4);
addIceCream("strewberry", 15);
addIceCream("nutella", 5);
addIceCream("bannana", 4);
addIceCream("bannana", 3);

var newArray = icecream.filter(function(item) {
	return item.scoups === 3;
})

console.log(icecream);

console.log(newArray);

/*
homework:
mkae a function that knows how mutch flavors duplications we have and console.log the number of scoups

found: 3 duplicates
for flavor 1: 3 scoups
for flavor 2: 5 scoups
for flavor 3: 7 scoups
sum: all scoups of all flavor

reference code:

var icecream = [];

function addIceCream(flavor, scoups) {
	var icecreamObject = {
		"flavor": flavor,	
		"scoups": scoups
	};
	icecream.push(icecreamObject);
}
	

addIceCream("vanilla", 2);
addIceCream("bannana", 4);
addIceCream("strewberry", 15);
addIceCream("nutella", 5);
addIceCream("bannana", 4);
addIceCream("bannana", 3);
*/