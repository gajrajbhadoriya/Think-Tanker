<!DOCTYPE html>
<html>
<head>
  <title>Sticky Notes</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
    }

    #container {
      display: flex;
      flex-wrap: wrap;
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }

    .note {
      background-color: #fff;
      box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
      padding: 10px;
      border-radius: 5px;
      width: 200px;
      margin: 10px;
    }

    .note textarea {
      border: none;
      resize: none;
      width: 100%;
      height: 100px;
    }

    .note button {
      margin-top: 5px;
      padding: 5px 10px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div id="container"></div>

  <script>
    const container = document.getElementById('container');

    function createNote() {
      const note = document.createElement('div');
      note.className = 'note';
      note.innerHTML = `
        <textarea placeholder="Type your note here..."></textarea>
        <button onclick="deleteNote(this)">Delete</button>
      `;
      container.appendChild(note);
    }

    function deleteNote(button) {
      const note = button.parentElement;
      container.removeChild(note);
    }

    // Create a note initially
    createNote();
  </script>
</body>
</html>
