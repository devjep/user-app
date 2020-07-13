//data table
$('#userTable').DataTable();


//delete button
$(".delete").click(function(e){
    
    var r = confirm('Are you sure you want to delete?');
    if(r != true)
    {
        return false;
    }
   
})
//reset button
$(".reset").click(function(e){
    var l = confirm('Are you sure you want to reset the data?');
    if(l == true)
    {
        //clear or reset form value
        document.getElementById("firstname").value = '';
        document.getElementById("lastname").value = '';
        document.getElementById("email").value = '';
        document.getElementById("image").value = '';
        document.getElementById("firstname").focus();
    }
    else{
        return false;
    }
   
})


//Image Preview
var loadFile = function(event) {
var reader = new FileReader();
reader.onload = function(){
    var output = document.getElementById('output');
    output.src = reader.result;
};
reader.readAsDataURL(event.target.files[0]);
};

