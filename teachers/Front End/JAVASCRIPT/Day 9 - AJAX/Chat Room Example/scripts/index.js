const baseUrl = "https://chat-api-course.onrender.com";
let userArray;

// GET [USERS]
fetch(baseUrl + "/users")
  .then((data) => data.json())
  .then(function (res) {
    // console.log(res);
    userArray = res.data;
    const model = document.querySelector("#userList li");
    for (const userData of userArray) {
      const clone = model.cloneNode(true);
      document.querySelector("#userList").append(clone);
      clone.innerText = userData.username;
    }
    model.remove();
  });

// GET [ROOMS]
fetch(baseUrl + "/rooms")
  .then((data) => data.json())
  .then(function (res) {
    // console.log(res);
    const roomsArray = res.data;
    const model = document.querySelector("#roomsList li");
    for (const room of roomsArray) {
      const clone = model.cloneNode(true);
      document.querySelector("#roomsList").append(clone);
      clone.innerText = room.roomName;
    }
    model.remove();
  });

// POST [ROOMS]
document
  .querySelector("#roomForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    const roomValue = document.querySelector("#roomInput").value;
    const fetchParams = {
      method: "POST",
      body: JSON.stringify({ roomName: roomValue }),
      headers: {
        "Content-Type": "application/json",
      },
    };
    fetch(baseUrl + "/rooms", fetchParams)
      .then((data) => data.json())
      .then(function (res) {
        console.log(res);
      });
  });
