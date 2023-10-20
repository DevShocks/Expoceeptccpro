
function logar() {
  console.log(email)

}

let form = document.getElementById("form");

form.addEventListener("submit", (e) => {
  e.preventDefault();


  
  var senha = document.querySelector("#senha").value
  var name = document.querySelector("#name").value

  if (senha != "" && name != "") {
      
      location = "?page=inicio"
  }
});