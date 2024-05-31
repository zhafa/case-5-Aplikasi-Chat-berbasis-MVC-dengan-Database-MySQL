function sendMessage() {
  const username = document.getElementById("username").value;
  const message = document.getElementById("message").value;

  if (username && message) {
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "index.php?action=sendMessage", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          const response = JSON.parse(xhr.responseText);
          if (response.status === "success") {
            loadMessages();
            document.getElementById("message").value = "";
          } else {
            alert("Error sending message");
          }
        } else {
          alert("Error sending message");
        }
      }
    };
    xhr.send(
      `username=${encodeURIComponent(username)}&message=${encodeURIComponent(
        message
      )}`
    );
  }
}

function loadMessages() {
  const chatbox = document.getElementById("chatbox");
  const xhr = new XMLHttpRequest();
  xhr.open("GET", "index.php?action=getMessages", true);
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      chatbox.innerHTML = xhr.responseText;
    }
  };
  xhr.send();
}

// Auto-refresh chat setiap 5 detik
setInterval(loadMessages, 5000);

// Muat Data Obrolan Awal pada Load Page
window.onload = loadMessages;
