/*function calculateShipping(rexy) {
	if (rexy > 25) {
		alert('yay free shipping')
	} else {
		alert('oh no paid shipping')
	}
}*/

var x = function make() {
	alert(paidfree)
}

var price = 20.08;
var discount = 10;
var total = price - discount;
var paidfree = "paid ship";

if (total>25) {
	paidfree = "free ship"
} 

x()