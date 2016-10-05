<!DOCTYPE html>
<head>
<style>
body
{
	background-image: linear-gradient(rgba(0,0,0,0.9),rgba(0,0,0,0.5)),url('conserve.jpg');	
	background-attachment: fixed;
	color: white;
  
}
#header
{
	color: white;
}
#usercomp
{	    
    margin-top: 50px;
    color:white;
}
#form
{
  border:1px  solid white;
  border-radius:7px;
  width:400px;
  background-color:rgba(0,0,0,0.7);
  position:relative;
  padding:20px;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.5);
  margin-top:40px;
}
#header
{
  background-color:rgba(0,0,0,0.5);
  width:100%;  
}
.msg
{
  font-size: 12px;
  color:white;
}
td,tr
{
	
	padding:10px;
}
table, td, th {
    border: 1px solid #ddd;
    text-align: left;
    color:white;
    font-size:24px;
    border-radius:7px;
    margin-top:20px;

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 15px;
}
.modal-content
{
	background-color:rgba(0,0,0,0.5);
}
div.model-content
{
	color:black;
}
</style>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
<div  id="header">
<h1><strong>your web site title</strong><small>caption goes here ...</small></h1>
</div>

<div class= "container">
<div class="row">
<div class="col-md-12">
<table class="table table-rounded">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Savings</th>
    <td>Cleveland</td>
    <td>Brown</td>
    <td><input type="submit" class="form-control btn-success" value="update" id="submit" data-toggle="modal" data-target="#myModal" /></td>
  </tr>
  <tr>
    <td>Peter</td>
    <td>Griffin</td>
    <td>$100</td>
    <td>Cleveland</td>
    <td>Brown</td>
    <td><input type="submit" class="form-control btn-success" value="Update" id="submit" data-toggle="modal" data-target="#myModal" /></td>
  </tr>
  <tr>
    <td>Lois</td>
    <td>Griffin</td>
    <td>$150</td>
    <td>Cleveland</td>
    <td>Brown</td>
    <td><input type="submit" class="form-control btn-success" value="update" id="submit" data-toggle="modal" data-target="#myModal"/></td>
  </tr>
  <tr>
    <td>Joe</td>
    <td>Swanson</td>
    <td>$300</td>
    <td>Cleveland</td>
    <td>Brown</td>
    <td><input type="submit" class="form-control btn-success" value="Update" id="submit" data-toggle="modal" data-target="#myModal"/></td>
  </tr>
  <tr>
    <td>Cleveland</td>
    <td>Brown</td>
    <td>$250</td>
    <td>Cleveland</td>
    <td>Brown</td>
    <td><input type="submit" class="form-control btn-success" value="Update" id="submit" data-toggle="modal" data-target="#myModal"/></td>
  </tr>
</table>

</div>
</div>
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
       
        <div class="modal-body">
         <div class="row">
<div class="col-md-12">


<form method="post" id="usercomp" name="test.php" >   

         <div class="form-group">
              <label for="nameField" class="col-xs-2 ">Name</label>
              <div class="col-xs-10">
                <input type="text" class="form-control" id="nameField" name="name1" placeholder="Your Name"  required/><br>
              </div>
              </div>
<div class="form-group">
              <label for="nameField" class="col-xs-2">Name</label>
              <div class="col-xs-10">
                <input type="text" class="form-control" id="nameField"  name="name3" placeholder="Your Name" /><br>
              </div>
              </div>
<div class="form-group">
              <label for="nameField" class="col-xs-2">Name</label>
              <div class="col-xs-10">
                <input type="text" class="form-control" id="nameField" name="name4" placeholder="Your Name" /><br>
              </div>
              </div>
<div class="form-group">
              <label for="nameField" class="col-xs-2">Name</label>
              <div class="col-xs-10">
                <textarea class="form-control" rows="4" 
 col="50" id="nameField" name="name5" placeholder="Your Name"></textarea> <br>
              </div>
              </div>
<div class="form-group">
              <label for="nameField" class="col-xs-2">Name</label>
              <div class="col-xs-10">
                <input type="text" class="form-control" id="nameField" name="name6" placeholder="Your Name" /><br>
              </div>
              </div>

              <div class="  col-md-5 col-md-offset-4 ">
                <input type="submit" class="form-control btn-success" value="Enter" id="submit" /><br>
              </div>
              </div>

</form>
</div>
</div>

        </div>
        
      </div>
      

  </div>
  <
</div>
<script>
$(document).ready(function(){

$('#usercomp').submit(function(){
var data =$('#usercomp').serialize();

var url=$('#usercomp').attr('name');

console.log(url + data);
$.post(url,data, function(data){

  $(".msg").html(data);
})

return false;

});




});

</script>

</body>
</html>

