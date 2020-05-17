
var number1_element = document.getElementById('num1');//getting elements from DOM
var number2_element = document.getElementById('num2');
//functions
function divideThem(){

  var number1 = number1_element.value;
  var number2 = number2_element.value;

  let result = number1 / number2;

  var results_h4 = document.getElementById('results');//modyfying elements on DOM

  results_h4.innerText = result;
}
