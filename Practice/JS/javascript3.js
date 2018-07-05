function addIceCream(flavor, scoups) {
	var array = [];
	if (flavor === "nutella") {
		scoups = 10;
		for(var i = 0; i < scoups; i++){
			array.push(flavor);
			console.log(array[i]);
		}
	} else {
		for(var i = 0; i < scoups; i++){
			array.push(flavor);
			console.log(array[i]);
		}
	}
}

addIceCream("vanilla", 2);
addIceCream("bannana", 4);
addIceCream("strewberry", 15);
addIceCream("nutella", 5);

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