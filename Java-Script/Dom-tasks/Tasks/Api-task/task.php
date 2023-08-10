<!DOCTYPE html>
<html>
<head>
  <title>API Fetching with User Input</title>
</head>
<body>
  <h1>User Data Fetching</h1>
  <label for="userId">Enter User ID:</label>
  <input type="number" id="userIdInput" min="1">
  <button id="fetchButton">Fetch User</button>
  <div id="userContainer">
    <p><strong>Name:</strong> <span id="userName"></span></p>
    <p><strong>Email:</strong> <span id="userEmail"></span></p>
    <p><strong>Username:</strong> <span id="userUsername"></span></p>
  </div>

  <script>
    const fetchButton = document.getElementById('fetchButton');
    const userIdInput = document.getElementById('userIdInput');
    const userName = document.getElementById('userName');
    const userEmail = document.getElementById('userEmail');
    const userUsername = document.getElementById('userUsername');

    fetchButton.addEventListener('click', fetchUser);

    function fetchUser() {
      const userId = userIdInput.value;

      if (!userId) {
        alert('Please enter a user ID.');
        return;
      }

      const apiUrl = `https://jsonplaceholder.typicode.com/users/${userId}`;

      fetch(apiUrl)
        .then(response => response.json())
        .then(user => {
          userName.textContent = user.name;
          userEmail.textContent = user.email;
          userUsername.textContent = user.username;
        })
        .catch(error => {
          console.error('Error fetching user:', error);
        });
    }
  </script>
</body>
</html>
