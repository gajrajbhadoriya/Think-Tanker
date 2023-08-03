// var newElement = document.createElement("li");
// var newText = document.createTextNode("THIS IS FOR TESTING PERPOSE");

// newElement.appendChild(newText); 
// console.log(newElement);

var target = document.getElementById("list");
var oldElement = target.children[1];

target.removeChild(oldElement);

// clone node example

/* JavaScript CloneNode*/

// var target = document.getElementById("list1").children[0];

// var copyElement = target.cloneNode(true);

// console.log(copyElement);


// document.getElementById("list2").appendChild(copyElement);

// document.getElementById("test").appendChild(copyElement);