var sn = false;
var sp = false;
var toLow = false;

document.querySelector("#name").addEventListener("click", function () {
  sortedArr = Array.from(photosArray); //sortedArr=photosArray
  sortedArr.sort((x, y) => x.name.localeCompare(y.name));
  unsortedCards(sortedArr);
  if (bs) {
    hideAll();
    for (const a of shownCards) {
      if (a.querySelector("div").classList.contains("best")) {
        a.style.display = "block";
      }
    }
  }
});

document.querySelector("#price").addEventListener("click", function(){
    toLow=false;
    sortbypricei();
});
function sortbypricei() {
  sortedArr = Array.from(photosArray);

  sortedArr.sort(function (x, y) {
    if (toLow) {
      if (
        parseFloat(x.price.split("$")[1]) > parseFloat(y.price.split("$")[1])
      ) {
        return -1;
      }
      if (
        parseFloat(x.price.split("$")[1]) < parseFloat(y.price.split("$")[1])
      ) {
        return 1;
      }
      return 0;
    } else {
        if (
            parseFloat(x.price.split("$")[1]) < parseFloat(y.price.split("$")[1])
          ) {
            return -1;
          }
          if (
            parseFloat(x.price.split("$")[1]) > parseFloat(y.price.split("$")[1])
          ) {
            return 1;
          }
          return 0;
    }
  });
  unsortedCards(sortedArr);
  if (bs) {
    hideAll();
    for (const a of shownCards) {
      if (a.querySelector("div").classList.contains("best")) {
        a.style.display = "block";
      }
    }
  }
}

document.querySelector("#sorting").addEventListener("click", function () {
    console.log("SOOORTIIINGGGGG");
  if (toLow) {
    toLow = false;
    document.querySelector("#sorting").classList.add("on");
  } else {
    toLow = true;
    document.querySelector("#sorting").classList.remove("on");
  };
  sortbypricei();
});
