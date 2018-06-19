<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>Data</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="css/login.css" rel="stylesheet">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script language="JavaScript" src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">

</head>

<body onload="ajaxcall2();">
<div class="container">

	<div class="row">
		<h2 class="text-center">Question Bank</h2>

	</div>
	<div class="row">
    <button type="button" class="btn btn-success" style="margin-bottom: 50px; margin-left: 70%;" data-title="Edit" data-toggle="modal" data-target="#automate"><span class="glyphicon glyphicon-plus-sign"></span> Create Automated Paper</button>

  </div>
    
    
        <div class="row">
		
            <div class="col-md-12">
            
            
<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
    				<thead>
						<tr>
              <th>S.no</th>
							<th>Class</th>
							<th>Subject</th>
							<th>Marks</th>
							<th>Question</th>
							<th>Status</th>
                                 <th>Delete</th>
						</tr>
					</thead>

					

					<tbody id="addmainentity">
						
						
                           
                           
					</tbody>
				</table>

	
	</div>
	</div>
<div class="modal fade" id="automate" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title custom_align" id="Heading">Fill The Requirements!</h4>
      </div>
          <div class="modal-body">
       
        <div>
          <form action="retrivepaper.php" method="post">
      <select class="selectpicker" required style="margin-right: 10px; margin-bottom: 10px; margin-left: 70px; margin-top: 20px" name="class" id="Class" >Class
        <option value="none">Select Class</option> 
        <!--option value="Class 10th">Class 10th</option-->
        <option value="Class 11th">Class 11th</option>
        <option value="Class 12th">Class 12th</option>
       </select>
      <select class="selectpicker" required style="margin-right: 10px; margin-bottom: 10px; margin-left: 40px; margin-top: 20px" name="subject" id="subject">Subject
        <option value="none">Select Subject</option> 
        <option value="English">English</option>
        <option value="Hindi">Hindi</option>
        <option value="Maths">Maths</option>
        <option value="Physics">Physics</option> 
        <option value="chemistry">chemistry</option>
      <option value="Biology">Biology</option>  
    </select>
    <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
              <th>Marks</th>
              <th>NO. OF Questions</th>
            </tr>
          </thead>
            <tr>
              <th><input type="text" class="form-control" id="usr" placeholder="2" disabled ></th>
              <th><input type="text" class="form-control" value="0" name="marks2" id="marks2"></th>
            </tr><tr>
              <th><input type="text" class="form-control" id="usr" placeholder="4" disabled ></th>
              <th><input type="text" class="form-control" value="0" name="marks4" id="marks4"></th>
            </tr><tr>
              <th><input type="text" class="form-control" id="usr" placeholder="6" disabled ></th>
              <th><input type="text" class="form-control" value="0" name="marks6" id="marks6"></th>
            </tr><tr>
              <th><input type="text" class="form-control" id="usr" placeholder="8" disabled ></th>
              <th><input type="text" class="form-control" value="0" name="marks8" id="marks8"></th>
            </tr>
          

          <tbody>
            
            
                           
                           
          </tbody>
        </table>
</div>
       
      </div>
        <div class="modal-footer ">
        <button type="submit" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Create</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div>
      </form>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
    </body>

<script >
   function createpaper() {
    var cclass = document.getElementById("Class").value;
    var subject = document.getElementById("subject").value;
    var nm2 = document.getElementById("marks2").value;
    var nm4 = document.getElementById("marks4").value;
    var nm6 = document.getElementById("marks6").value;
    var nm8 = document.getElementById("marks8").value;
    var ajaxdata1 = {class:cclass,subject:subject,marks2:nm2,marks4:nm4,marks6:nm6,marks8:nm8};
    ajaxcall1(ajaxdata1);

   }

   function ajaxcall1(data) {
     console.log(data);
      $.ajax({ 
               type:"POST",
               url: 'retrivepaper.php',    //the script to call to get data          
               data: "data",                        //you can inserst url argumnets here to pass to api.php
                                                //for example "id=5&parent=6"
               dataType: 'json',                //data format      
                success: function(data)          //on recieve of reply
                {
                  console.log(data);
                 } 
             });
   }
 
 
   function ajaxcall2(){
    console.log("ajaxcall");
                $.ajax({ 

               url: 'retrivedata.php',    //the script to call to get data          
               data: "",                        //you can inserst url argumnets here to pass to api.php
                                                //for example "id=5&parent=6"
               dataType: 'json',                //data format      
                success: function(data)          //on recieve of reply
                {  var sno=0
                  console.log(data);
                    for(var i=0;i<=data.length;i++){
                     var cclass   = data[i]["class"];
                     var  subject = data[i]["subject"];
                     var  marks = data[i]["marks"];
                     var  question = data[i]["question"];
                     var  status = data[i]["status"];
                     console.log(question);
                     var sno = sno+1;
                     $("#addmainentity").append('<tr> <td>'+sno+'</td> <td>'+cclass+'</td> <td>'+subject+'</td> <td><input id="marks'+i+'" type="text" name="usrname" value="'+marks+'" hidden>'+marks+'</td> <td><textarea id="question'+i+'" type="text" name="usrname" style="display:none;"></textarea>'+question+'</td> <td> <button type="button" class="btn btn-default" style="margin-left: 30px;" onclick="approved('+i+');" ><span class="glyphicon glyphicon-ok"></span></button> </td>  <td><button type="button" class="btn btn-default" style="margin-left: 30px;" onclick="dltdata('+i+');"><span class=" glyphicon glyphicon-remove"></span></button></td> </tr>');
                      $('#question'+i+'').val(question);
                    }
                    
                } 
             });
      }

      function approved(data) {
       var txt = document.getElementById("question"+data).value;
       var marks = document.getElementById("marks"+data).value;
       var ajaxdata = {question:txt,marks:marks};
       console.log(txt);
       submitajax(ajaxdata);
       location.reload();
       
       console.log(txt);
      }

      function submitajax(data) {
        $.ajax({
               type:"POST",
               url:'updatestatus.php',
               // dataType="JSON",
               data : data,
               async : false,
               success: function(data){
               console.log(data);
               }
         });
        // body...
      }
      function dltdata(data) {
      var txt = document.getElementById("question"+data).value;
       var marks = document.getElementById("marks"+data).value;
       var ajaxdata = {question:txt,marks:marks};
       console.log(ajaxdata);
       dltajax(ajaxdata);
       location.reload();
      }
      function dltajax(data) {
        $.ajax({
               type:"POST",
               url:'deleteque.php',
               // dataType="JSON",
               data : data,
               async : false,
               success: function(data){
               console.log(data);
               }
         });
        // body...
      }

             
  
      
</script>


</html>