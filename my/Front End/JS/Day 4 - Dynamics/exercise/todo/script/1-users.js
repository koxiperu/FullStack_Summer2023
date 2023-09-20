/* This function is called at the launch of the page
  and will receive an array of users */

  function createUsers(usersArray) {
    console.log(usersArray);
    const usersForm=document.querySelector("#usersSelect option");
    for (const user of usersArray){
        const optionClone=usersForm.cloneNode(true);
        document.querySelector("#usersSelect").append(optionClone);
        
        optionClone.classList.add(user.username);
        optionClone.innerText=user.name;
        optionClone.value=user.id;
        
    };
    usersForm.remove();
    /* 1 - Creating the users select <option> dynamically */
    /* Loop over the array of user to
      duplicate <option> of the <select>
      and add this "new cloned option" to the select */
  
    /* and the innerText to the 'name' of the user */
    /* change the value to the 'id' of the user */
  }
  
  