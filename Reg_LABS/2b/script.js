function collect(){
  localStorage.setItem("surname", document.getElementById("surname").value);
  localStorage.setItem("name", document.getElementById("name").value);
  localStorage.setItem("age", document.getElementById("age").value);
}
function post(){
  document.getElementById("text").value = localStorage.getItem('surname') + " " + localStorage.getItem('name') + " " + localStorage.getItem('age') ;
}
