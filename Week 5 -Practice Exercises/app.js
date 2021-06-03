let fs = require("fs");
/* Read text file, then call the callback function
  (the first argument of the callback is reserved for an error object 
  and the second argument of the callback is reserved for response data )
  */
fs.readFile("./quote.txt", (err, data) => {
	// First thing; check to see if err is not null
	if (err) {
		return console.log(err);
	}
	//  if err not null don't run th rest of the code
	console.log(data);
});
// new
new Promise((resolve, reject) => {
	fs.readFile("./quote.txt", (err, data) => {
		// Check to see if there is error, reject it
		if (err) {
			reject(err);
		} else {
			resolve(data);
		}
	});
})
	// The .then() can be chained to handle the fulfillment
	.then((data) => {
		console.log(data.toString());
	})
	// The .catch() can be used for handling the errors(if any).
	.catch((err) => {
		console.log(err);
	});
