<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Calculator</title>
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
    margin: 0;
}

h1 {
    text-align: center;
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    font-size: 20px;
    text-align: right;
}

div {
    display: flex;
    margin: 5px 0;
}

button {
    padding: 10px 20px;
    font-size: 20px;
    cursor: pointer;
    background-color: #ffffff;
    border: 1px solid #cccccc;
    border-radius: 5px;
    flex: 1;
    margin: 5px;
}

button:hover {
    background-color: #f0f0f0;
}

button.operator {
    background-color: #f0f0f0;
    color: #ff6600;
}

button.clear {
    background-color: #ff6666;
    color: white;
}

button.calculate {
    background-color: #3399ff;
    color: white;
}

</style>
<body>
    <h1>Simple Calculator</h1>
    <div>
        <input type="text" id="result" readonly>
    </div>
    <div>
        <button class="number">1</button>
        <button class="number">2</button>
        <button class="number">3</button>
        <button class="operator">+</button>
    </div>
    <div>
        <button class="number">4</button>
        <button class="number">5</button>
        <button class="number">6</button>
        <button class="operator">-</button>
    </div>
    <div>
        <button class="number">7</button>
        <button class="number">8</button>
        <button class="number">9</button>
        <button class="operator">*</button>
    </div>
    <div>
        <button class="number">0</button>
        <button class="clear">C</button>
        <button class="calculate">=</button>
        <button class="operator">/</button>
    </div>
    <script src="script.js"></script>
    <script>
        const resultDisplay = document.getElementById('result');
        const numbers = document.getElementsByClassName('number');
        const operators = document.getElementsByClassName('operator');
        const calculateButton = document.querySelector('.calculate');
        const clearButton = document.querySelector('.clear');

        let currentOperand = '';
        let previousOperand = '';
        let currentOperator = null;

        function appendNumber(number) {
            currentOperand += number;
            updateDisplay();
        }

        function chooseOperator(operator) {
            if (currentOperand === '') return;
            if (previousOperand !== '') {
                calculate();
            }
            currentOperator = operator;
            previousOperand = currentOperand;
            currentOperand = '';
        }

        function calculate() {
            let result;
            const prev = parseFloat(previousOperand);
            const current = parseFloat(currentOperand);
            if (isNaN(prev) || isNaN(current)) return;
            switch (currentOperator) {
                case '+':
                    result = prev + current;
                    break;
                case '-':
                    result = prev - current;
                    break;
                case '*':
                    result = prev * current;
                    break;
                case '/':
                    result = prev / current;
                    break;
                default:
                    return;
            }
            currentOperand = result.toString();
            currentOperator = null;
            previousOperand = '';
            updateDisplay();
        }

        function clear() {
            currentOperand = '';
            previousOperand = '';
            currentOperator = null;
            updateDisplay();
        }

        function updateDisplay() {
            resultDisplay.value = currentOperand;
        }

        // Add event listeners for numbers, operators, and buttons
        for (const number of numbers) {
            number.addEventListener('click', () => appendNumber(number.textContent));
        }

        for (const operator of operators) {
            operator.addEventListener('click', () => chooseOperator(operator.textContent));
        }

        calculateButton.addEventListener('click', calculate);
        clearButton.addEventListener('click', clear);
    </script>
</body>

</html>