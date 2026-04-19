/***************************+
 * Search
 ***************************/
const input = document.querySelector("#searchInput");

input.addEventListener("keydown", function(event) {
  if (event.key === "Enter") {
    console.log("Enter wurde gedrückt");
    
    // hier deine Suchfunktion
    searchFunction(input.value);
  }
});

function searchFunction(value) {
  console.log("Suche nach:", value);
  let newVal = value.trim();
  window.location.href = `tricks.php?search=${newVal}`;
}