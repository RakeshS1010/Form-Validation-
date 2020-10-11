var row=1;
var button =  document.getElementById("button");
button.addEventListener("click",displayDetails);

function displayDetails() {
    var name = document.getElementById("name").value;
    var city=document.getElementById("city").value;
    var occupation=document.getElementById("occupation").value;    
    
    
    if(!name || !city || !occupation) {
        alert("Please fill all the fields");
    return;
        
    }
    
    var display=document.getElementById("display");
    var newRow=display.insertRow(row);
    
    var cell1=newRow.insertCell(0);
    var cell2=newRow.insertCell(1);
    var cell3=newRow.insertCell(2);
    
    
    cell1.innerHTML=name;
    cell2.innerHTML=city;
    cell3.innerHTML=occupation;
    
    row++;
    
}




