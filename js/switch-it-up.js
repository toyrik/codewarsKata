/**
 * When provided with a number between 0-9, return it in words.
 * Input :: 1
 * Output :: "One".
 * If your language supports it, try using a switch statement.  
*/

function switchItUp(number){
  var str = number;
  switch(str){
    case 1: "One";
      break;
    case 2: "Two";
      break;
    case 3: "Three";
      break;
    case 4: "Four";
      break;
    case 5: "Five";
      break;
    case 6: "Six";
      break;
    case 7: "Seven";
      break;
    case 8: "Eight";
      break;
    case 9: "Nine";
      break;
    default: "Zero";
  }
}