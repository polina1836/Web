 let expression = '';
let result = '';

function updateExpression(value) {
  expression += value;
  document.getElementById('expression').value = expression;
}

function clearExpression() {
  expression = '';
  result = '';
  document.getElementById('expression').value = expression;
  document.getElementById('result').value = result;
}

function evaluateExpression() {
  try {
    result = eval(expression);
    document.getElementById('result').value = result;
  } catch (error) {
    result = 'Error';
    document.getElementById('result').value = result;
  }
}