/* This function is called when the form is submitted
    and will receive the todo of the selected user */
function createTodos(filteredTodos) {
  console.log(filteredTodos);
  const todoList = document.querySelector("#todos");
  todoList.innerHTML = "";
  for (const todo of filteredTodos) {
    const listItem = document.createElement("li");
    todoList.append(listItem);
    listItem.innerText = todo.title;
    if (todo.completed == true) {
      listItem.style.textDecoration = "line-through";
    }
  }
//   /* 2 - create a <li> for each todo of the TodoArray */
//   /* this li will contain the 'title' of the todo */
//   /* If the todo is completed (boolean) cross it with a line-through */
//   /* 3 - Warning... if you select a user and then another user you end up with the todos from both users */
//   // clean the lists
//   /* It means you need to clean the #todo <section> when a new user is selected */
 }

// ***--- BONUS ---*** //

/*  BONUS 1 - Modify the createTodos function
to put the completed todos inside the #done <section> */

// function createTodos(filteredTodos) {
//   console.log(filteredTodos);
//   const todoList = document.querySelector("#todos");
//   const doneList = document.querySelector("#done");
//   todoList.innerHTML = "";
//   doneList.innerHTML = "";
//   for (const todo of filteredTodos) {
//     const listItem = document.createElement("li");
//     if (todo.completed == true) {
//       doneList.append(listItem);
//       listItem.innerText = todo.title;
//     } else {
//       todoList.append(listItem);
//       listItem.innerText = todo.title;
//     }
//   }
// }

/*  BONUS 2 - When you click on a todo, it get moved to the done */

/*  BONUS 3 - When you click on a completed todo, it get moved to the todo */

// function createTodos(filteredTodos) {
//   console.log(filteredTodos);
//   const todoList = document.querySelector("#todos");
//   const doneList = document.querySelector("#done");
//   todoList.innerHTML = "";
//   doneList.innerHTML = "";
//   for (const todo of filteredTodos) {
//     const listItem = document.createElement("li");
//     if (todo.completed == true) {
//       doneList.append(listItem);
//     } else {
//       todoList.append(listItem);
//     }
//     listItem.innerText = todo.title;
//     listItem.addEventListener("click", function () {
//       if (todoList.contains(listItem)) {
//         doneList.append(listItem);
//       } else {
//         todoList.append(listItem);
//       }
//     });
//   }
// }
