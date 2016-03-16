'use strict';
// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

var favorite = 'orange'; // TODO: change this to your favorite color from the list

// TODO: Create a block of if/else statements to check for every color except indigo and violet.
// TODO: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.

// TODO: Have a final else that will catch indigo and violet.
// TODO: In the else, log: I do not know anything by that color.

// TODO: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.





if ( color == "orange" ) {
    console.log("An orange is the color Orange");
}else if ( color == "red") {
    console.log("Cherries are Red");
}else if (color == "yellow") {
    console.log("The man in Yellow hat");
}else if (color == "green") {
    console.log("Plants are Green");
}else if (color == "blue") {
    console.log("I'm blue da ba dee da ba dye");
}else   {
    console.log("I do not know anything about the color");
}


// we are adding a double parenthesis because this is now the order of operations, if color is red and it is NOT 
// my favorite then we give it the output of it not being our favorite color. also a message variable is created so
// the message can now be displayed
//  
var message = (color == favorite) ? "This is my favorite color!!!" : "This is not my favorite color";
console.log(message);
