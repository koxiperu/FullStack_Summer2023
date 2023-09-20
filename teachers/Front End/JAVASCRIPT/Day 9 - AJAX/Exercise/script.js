// URL to get a random user
const customUrl = "https://randomuser.me/api";

// select the different elements of the page
const theButton = document.querySelector("#buttonId");
const theImg = document.querySelector("img");

// when the page is loaded, we call the randomUser() function
randomUser();

// the button will get a new random user when we click on it
theButton.addEventListener("click", randomUser);

// this function will get a random user and display it's information on the page
function randomUser() {
  fetch(customUrl)
    .then((data) => data.json())
    .then(function (res) {
      const userData = res.results[0];
      const gender = userData.gender;

      // display the full name
      document.querySelector("#userName").innerText =
        userData.name.first + " " + userData.name.last;
      // display the email address
      document.querySelector("#userEmail").innerText = userData.email;
      // display the profile picture
      theImg.src = userData.picture.large;

      // if the image and the button don't have the current gender as a class
      // (also works if they don't have a class for the gender at all, so when we load the page)
      if (
        !theImg.classList.contains(gender) &&
        !theButton.classList.contains(gender)
      ) {
        // remove all existing gender classes
        theImg.classList.remove("male");
        theButton.classList.remove("male");
        theImg.classList.remove("female");
        theButton.classList.remove("female");

        // apply the right class instead
        theButton.classList.add(gender);
        theImg.classList.add(gender);
      }
    });
}
