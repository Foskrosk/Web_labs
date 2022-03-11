document.getElementsByTagName('a')[0].onclick = function() {
   var text = "text";
    var csvData = 'data:application/txt;charset=utf-8,' + encodeURIComponent(text);
    this.href = csvData;
    this.target = '_blank';
    this.download = 'txt.txt';
}

/*
  var data = [];
  data.push(document.getElementById("email").value);
  data.push(document.getElementById("age").value);
  data.push(document.getElementById("wage").value);
  data.push(document.getElementById("cat-name").value);
  var sel = document.getElementById("box1");
  var text= sel.options[sel.selectedIndex].text;
  localStorage.setItem("collected_data", JSON.stringify(data));
  *///fs=require("fs")
  //fs.writeFileSync("txt.txt", "my text",  "ascii")


function post(){
  received_data =  JSON.parse(localStorage.getItem('collected_data'));
  for (var i = 1; i < received_data.length+1; i++) {
    document.getElementById(i).innerText = received_data[i-1];
  }
}
