<!DOCTYPE html>
<html>
<head>
  <title>Counter</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }

    #counter {
      font-size: 48px;
    }

    button {
      font-size: 24px;
      padding: 10px 20px;
      margin: 0 10px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div id="counter">0</div>
  <button onclick="increment()">Increment</button>
  <button onclick="decrement()">Decrement</button>

  <script>
    let count = 0;
    const counterElement = document.getElementById('counter');

    function updateCounter() {
      counterElement.textContent = count;
    }

    function increment() {
      count++;
      updateCounter();
    }

    function decrement() {
      if (count > 0) {
        count--;
        updateCounter();
      }
    }
  </script>
</body>
</html>
