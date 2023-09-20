const baseUrl="https://chat-api-course.onrender.com";
let userArray;
let roomArray;

//Get [users]
fetch(baseUrl+"/users").then((data)=>data.json()).then(function(res){
    userArray=res.data;
    console.log(userArray);
    const model=document.querySelector("#userList li");
    for (const userData of userArray){
        const clone=model.cloneNode(true);
        document.querySelector("#userList").append(clone);
        clone.innerText=userData.username;
    }
    model.remove();    
})

//get [message]
fetch(baseUrl+"/rooms").then((data)=>data.json()).then(function(res){
    roomArray=res.data;
    console.log(roomArray);
    const model=document.querySelector("#roomsList li");
    for(const roomData of roomArray){
        const clone=model.cloneNode(true);
        document.querySelector("#roomsList").append(clone);
        clone.innerText=roomData.roomName;
    }
    model.remove();
})

//POST [rooms]
document.querySelector("#roomForm").addEventListener("submit",function(event){
    event.preventDefault();
    const roomValue=document.querySelector("#roomInput").value;
    
    const fetchParam={
        method:"POST",
        body:JSON.stringify({roomName:roomValue}),
        headers:{
            "Content-Type":"application/json",
        }
    };
fetch(baseUrl+"/rooms",fetchParam).then((data)=>data.json()).then(function(res){
    console.log(res);
});
});