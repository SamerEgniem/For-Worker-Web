    function searchbar() {
      var input = document.getElementById("search").value.toLowerCase();
      if (input.includes("house")) {
        window.location.href = "houses.html";
      } else if (input.includes("yard")) {
        window.location.href = "yard.html";
      } else if (input.includes("car")) {
        window.location.href = "car.html";
      } else if (input.includes("construction")) {
        window.location.href = "construction.html";
      } else if (input.includes("tech")) {
        window.location.href = "tech.html";
      } else {
        alert("Sorry, we couldn't find any matching category.");
      }
    }
    let subMenu = document.getElementById("subMenu");
    function toggleMenu(){
      subMenu.classList.toggle("open-menu");
    }