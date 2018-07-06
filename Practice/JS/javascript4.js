var icecream = [];

function addIceCream(flavor, scoups) {
	var icecreamObject = {
		"flavor": flavor,	
		"scoups": scoups
	};
	icecream.push(icecreamObject);
	/*if (scoups >= 3) {
		console.log(icecreamObject);
	}*/
	
}
	

addIceCream("vanilla", 2);
addIceCream("bannana", 4);
addIceCream("strewberry", 15);
addIceCream("nutella", 5);
addIceCream("bannana", 4);
addIceCream("bannana", 3);

var index = icecream.findIndex(function(item) {
	if(item.scoups >= 3) {
		return  true;
	}
})

console.log(icecream);

icecream.splice(index,1);
console.log("index", index);
console.log(icecream);

