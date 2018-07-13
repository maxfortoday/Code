var results = [{
	"flavor" : "lemon",
	"rank": 5,
	"answers": 10
},
{
"flavor" : "lemon",
	"rank": 3,
	"answers": 2
},
{
"flavor" : "lemon",
	"rank": 4,
	"answers": 1
},
{
"flavor" : "strewberry",
	"rank": 1,
	"answers": 1
},
{
"flavor" : "strewberry",
	"rank": 3,
	"answers": 11
},
{
"flavor" : "chocolate",
	"rank": 5,
	"answers": 4
},
{
"flavor" : "vanilla",
	"rank": 4,
	"answers": 5
},
{
"flavor" : "banana",
	"rank": 3,
	"answers": 7
},
{
"flavor" : "nutella",
	"rank": 5,
	"answers": 3
},
{
"flavor" : "mint",
	"rank": 1,
	"answers": 8
}];


var task_names = new Set(results.map(item => item.flavor))

console.log("task_names", task_names);

function getAnswers(flavor) {
	var flavorArray = results.filter(item => item.flavor == flavor);
	console.log("flavorArray", flavorArray);
}