var icecream = [];
function addIceCream(flavor,
scoups) {
	var icecreamObject = {
		"flavor": flavor,
		"scoups": scoups
	};
	if (icecream.length < 1) {
		icecream.push(icecreamObject);
	}else {
		var add = true;
		icecream.forEach (function (element) {
			if (element.flavor === icecreamObject.flavor) {
				element.scoups += icecreamObject.scoups;
				add = false;

			}
		});
	}if (add) {
		icecream.push(icecreamObject);
	}

}
addIceCream("vanilla", 2);
addIceCream("bannana", 4);
addIceCream("strewberry", 15);
addIceCream("nutella", 5);
addIceCream("bannana", 3);
addIceCream("bannana", 3);

console.table(icecream);

var sum = icecream.reduce((a,b) => {
	return (a.flavor || a) + b.flavor	
	console.log(sum.a);
console.log(sum.b);
});
console.log(sum.length);




var task_names = icecream.map((task) => {
	if (task.flavor == "bannana") {
		return {flavor: "myfavoritfruit", scoups: task.scoups};
	}  else {
		return task;
	}
});

console.table(task_names);