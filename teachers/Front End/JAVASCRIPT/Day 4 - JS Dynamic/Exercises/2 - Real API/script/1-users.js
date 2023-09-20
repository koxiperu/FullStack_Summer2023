/* This function is called at the launch of the page
  and will receive an array of users */

function createUsers(usersArray) {
  console.log(usersArray);
  /* 1 - Creating the users select <option> dynamically */
  /* Loop in the array of users to
    duplicate <option> inside the <select> element
    and add this "new cloned option" to the select */
    const mockOption = document.querySelector("option");

    for (const user of usersArray) {
    const clonedOption = mockOption.cloneNode(true);
    document.querySelector("select").append(clonedOption);
    /* add innerText for the 'name' of the user */
    clonedOption.innerText = user.name;
    /* change the 'value' of the <option> to the 'id' of the user */
    clonedOption.value = user.id;
  }
}
