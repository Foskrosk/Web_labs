function collect(){
  var data = [];
  data.push(document.getElementById("name").value);
  data.push(document.getElementById("age").value);
  data.push(document.getElementById("wage").value);
  data.push(document.getElementById("cat-name").value);
  localStorage.setItem("collected_data", JSON.stringify(data));
}
function post(){
  received_data =  JSON.parse(localStorage.getItem('collected_data'));
  for (var i = 1; i < received_data.length+1; i++) {
    document.getElementById(i).innerText = received_data[i-1];
  }
}
