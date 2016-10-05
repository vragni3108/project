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
<div class="row col-md-5 col-md-offset-7">  
<div id="form">
<div class="row">
<div class="col-md-12">

<form method="post" id="usercomp" name="test.php" >   

          <p><b><h2>Register your complaint</h2></b></p>

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
<div class="msg">
</div>
</div>
</div>
</div>
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