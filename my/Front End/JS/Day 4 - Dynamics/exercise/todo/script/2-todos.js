/* This function is called when the form is submitted
    and will receive the todo of the selected user */


    
  /* 2 - Create a <li> for the todos, crossed if completed */
  /* create a <li> for each todo of the TodoArray */
  /* this li will contains the 'title' of the todo */
  /* If the todo is completed (boolean) cross it with a line-through */
  /* 3 - Warning... if you select a user and then another user you end up with the todos from both users */
  // clean the lists
  /* It means you need to clean the #todo <section> when a need user is select */
function createTodos(filteredTodos) {  
  document.querySelector("#todos").innerHTML="";
    document.querySelector("#done").innerHTML="";
    for (const todoItem of filteredTodos){
    
    if (todoItem.completed){
      createDone(todoItem.title);
    }else {
      const liElement=document.createElement("li");
      document.querySelector("#todos").append(liElement);
      liElement.innerText=todoItem.title;
      liElement.completed=todoItem.completed;
      liElement.addEventListener("click", function(){
        createDone(liElement.innerText);
        liElement.remove();
      })
  }        
};
};

function createDone(deal) {
  const doneElement=document.createElement("li");
  document.querySelector("#done").append(doneElement);
  doneElement.innerText= deal;
  doneElement.style.textDecoration="line-through";
};





/*  BONUS 1 - Modify the createTodos function
to put the completed todos inside the #done <section> */

/*  BONUS 2 - When you click on a todo, it get moved to the done */

/*  BONUS 3 - When you click on a completed todo, it get moved to the todo */

