var nameContainer = document.getElementById('name');
var btn = document.getElementById("myBtn");

btn.addEventListener("click", function() {
var ourRequest = new XMLHttpRequest();
ourRequest.open('GET','http://mba.bkksol.com/PK/getJSON.php');
ourRequest.onload = function(){
    var ourData = JSON.parse(ourRequest.responseText);
    console.log(ourData[0]);
    
};
ourRequest.send();
});

function renderHTML(data){

}
