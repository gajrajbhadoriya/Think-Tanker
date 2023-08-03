
/* Dom Create */
//var newElement = document.createElement("p");

var newElement = document.createElement("h2");

console.log(newElement);

var newText = document.createTextNode("This is just text");

console.log(newText);

/* JavaScript AppendChild*/

newElement.appendChild(newText);

//document.getElementById("test").appendChild(newElement);
    

/* JavaScript  InsertBefore */

var target = document.getElementById("test");
target.insertBefore(newElement,target.childNodes[0])

