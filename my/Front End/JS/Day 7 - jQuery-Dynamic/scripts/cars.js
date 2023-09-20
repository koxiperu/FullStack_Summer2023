const goalsArray = [
  {
    name: "Maserati Guibli",
    picture: "images/goals/maserati.png",
    goal: 85000,
    current: 68000,
    riched: false,
  },
  {
    name: "Playstation 4",
    picture: "images/goals/ps4.png",
    goal: 800,
    current: 150,
    riched: false,
  },
  {
    name: "Samsung Galaxy S10e",
    picture: "",
    goal: 1000,
    current: 300,
    riched: false,
  },
  {
    name: "Boat",
    picture: "",
    goal: 10000,
    current: 10000,
    riched: true,
  },
  {
    name: "Rolex",
    picture: "",
    goal: 5000,
    current: 5000,
    riched: true,
  },
];
var totalCars = 0;
var totalRiched = 0;
const carTempl = $("#car");
//load the page

for (const a of goalsArray) {
  totalCars += 1;
  if (a.riched) {
    totalRiched += 1;
  }
}
$("#all").find("p").text(totalCars);
$("#riched").find("p").text(totalRiched);
$("html").ready(hideAll);

//show all cars
function showGoal(carArr) {
    const carClone = carTempl.clone();
    const currentPr = carArr.current;
    const goalPr = carArr.goal;
    const carName = carArr.name;
    const backImage = carArr.picture;
    console.log(
      "Name - " + carName + ". Current $ - " + currentPr + ". Goal - " + goalPr
    );
    console.log(backImage);
    $("main").append(carClone);
    carClone.find("#car_name").text(carName);
    carClone.find("#current_price").text("$" + currentPr);
    carClone.find("#goal_price").text("$" + goalPr);
    const wcl = (currentPr * 100) / goalPr;
    const wgl = 100 - wcl;
    carClone.find("#current_line").css({
      width: wcl + "%",
    });
    carClone.find("#goal_line").css({
      width: wgl + "%",
    });
    carClone.css({
    "display":"inherit",
      "background-color": "#A5B0DA",
      "background-image": "url(" + backImage + ")",
      "background-size": "cover",
    });  
  carTempl.remove();
}

// clean ALL
function hideAll() {
     const secArr=$("section");
     console.log(secArr);
   for (let sec of secArr) {
     $(sec).hide();
   }
 }

//listen click of REACHED
$("#riched").on("click", function () {    
    hideAll();
    for (const richAr of goalsArray) {
    if (richAr.riched){
        showGoal(richAr);
    }
}
    
});

//listen click of ALL
$("#all").on("click", function(){
    hideAll();
    for (const allAr of goalsArray) {
        showGoal(allAr);
    }
});

