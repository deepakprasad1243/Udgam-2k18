 <!DOCTYPE html>
 <html>
 <head>
 <title>UDGAM'18 FEEDS</title>
 
 <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
 
 </head>
 <body>
 
 
  <?php include 'connection.php'; ?>
 <div class="row">
  
    
	         
			 
	<div class="col-md-12">
					
							

		<div class="container" >
			
			<div class="row" >
				
<!--------------------------------------------------------content start--------------------------------------------------------------------------------->
			
  
    
	         
			
	<div class="col-md-12">	       





					   <div id="annon_head" style="padding-left:32px;">
          <h2><b>FEEDS</b></h2>
          <hr>
        </div>
		
		
	
	
	
	
	
	
	
  
					
							

		
			
			<div class="row"  >
				
				<div class="col-md-12" >
					<div class="panel panel-default"style="border-color:#3C7570; background-color:#e5e0e0;border-width: thick;">
						<!---<div class="panel-heading"style="background-color:#e5e0e0;border-radius: 1.5em 1.5em 0em 0em;"id="annon_head">
							<div   style="text-align:center;height:20px;color:#9E9EA7;padding-top:5px;"><h2>Administration</h2><hr></div>
						</div>-->
						<div class="panel-body">
						
						
						
						
						<!--------------------form header-------------------------------------------------------->
							
							
  
  <form action="" method="post" class="form-horizontal">
  
  
  <div style="padding-left:25%; ">
  <br>
  <div class="row" >
		  <div class="col-md-4" ><label for="name">USERNAME: </label>
	      <input type="text" name="name" class="form-control" id="name" placeholder="username." required></div>
		  <div class="col-md-4" ><label for="pass">PASSWORD: </label>
	      <input type="password" name="pass" class="form-control" id="pass" placeholder="password." required></div>
 </div>
  
 <br> <div class="form-group " > 
    <div class="col-sm-4" Style="padding-top:10px;">
      <button type="submit" name="feed" class="btn btn-primary btn-group-justified">FEEDBACKS</button>
    </div>
	<div class="col-sm-4" Style="padding-top:10px;">
      <button type="submit" name="event" class="btn btn-primary btn-group-justified">Registrations</button>
    </div>
  </div>
  
  </div>
  
  <?php
  
if($_POST)
{
if($_POST['name']=='udgam' && $_POST['pass']=='udgam@18')
{
	
if(isset($_POST['feed']))
{
		$sql="SELECT * FROM `feedback`";
	    $result=mysqli_query($con,$sql) or die("error ..semister registerion not done!! ".mysqli_error($con));    
	    $row=mysqli_fetch_array($result);
		
		
if($row)
{	      $count = 1;
		  echo '<br><br><div >
          <h2><b>ALL FEEDBACKS</b></h2>
          <hr  style="border-width: medium;border-color:#3C7570;">
        </div>
			';		
echo ('<div style="overflow:auto;max-height:800px;">
<table  style="border-radius: 1.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: medium;" class="table table-striped table-responsive"  >');
echo ('<thead>
      <tr>
	    <th>S.NO.</th>
        <th>NAME</th>
        <th>EMAIL ID</th>
		<th>PHONE NO.</th>
		<th>SUBJECT</th>
		<th>MESSAGE</th>
      </tr>
    </thead>
	<tbody>');
	while($row)
	{
		$name=$row['Name'];
		$email=$row['Email'];
		$number=$row['Number'];
		$sub=$row['Subject'];
		$message=$row['Message'];
		echo ('<tr>
		<td>'.$count++.'</td>
		<td>'.$name.'</td>
		<td>'.$email.'</td>
		<td>'.$number.'</td>
		<td>'.$sub.'</td>
		<td>'.$message.'</td>
		
		</tr>
		
		');
		
		
		$row=mysqli_fetch_array($result);
		
		
		
	}
	

  
}
  else
  {
	  echo '<div id="annon_head" >
          <h2><b>ALL FEEDBACKS</b></h2>
          <hr  style="border-width: medium;border-color:#3C7570;">
        </div><br>
	  <div class="row" >
				
				<div class="col-md-8" >
					<div class="panel panel-default" style="border-radius:.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: thin;text-align:center">
						
						<div class="panel-body">';
	  
	 echo '<span style="color:red;text-align:center;"><b><i>&#10008;&nbsp&nbspNo Feedback to show. </i></b></span>'; 
	  echo '</div>
</div>
</div>
</div>';

  }
		
		
		
		
}
	
	if(isset($_POST['event']))
	{
		$sql="SELECT * FROM `event`";
	    $result=mysqli_query($con,$sql) or die("error ..semister registerion not done!! ".mysqli_error($con));    
	    $row=mysqli_fetch_array($result);
		
		
if($row)
{	      $count = 1;
		  echo '<br><br><div >
          <h2><b>ALL REGISTRATIONS</b></h2>
          <hr  style="border-width: medium;border-color:#3C7570;">
        </div>
			';		
echo ('<div style="overflow:auto;max-height:800px;">
<table  style="border-radius: 1.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: medium;" class="table table-striped table-responsive"  >');
echo ('<thead>
      <tr>
	    <th>S.NO.</th>
        <th>NAME</th>
        <th>EMAIL ID</th>
		<th>PHONE NO.</th>
		<th>EVENT NAME</th>
		
      </tr>
    </thead>
	<tbody>');
	while($row)
	{
		$name=$row['Name'];
		$email=$row['Email'];
		$number=$row['Phone'];
		$event=$row['Ename'];
		
		echo ('<tr>
		<td>'.$count++.'</td>
		<td>'.$name.'</td>
		<td>'.$email.'</td>
		<td>'.$number.'</td>
		<td>'.$event.'</td>
		
		
		</tr>
		
		');
		
		
		$row=mysqli_fetch_array($result);
		
		
		
	}
	

  
}
  else
  {
	  echo '<div id="annon_head" >
          <h2><b>ALL REGISTRATIONS</b></h2>
          <hr  style="border-width: medium;border-color:#3C7570;">
        </div><br>
	  <div class="row" >
				
				<div class="col-md-8" >
					<div class="panel panel-default" style="border-radius:.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: thin;text-align:center">
						
						<div class="panel-body">';
	  
	 echo '<span style="color:red;text-align:center;"><b><i>&#10008;&nbsp&nbspNo Registrations to show. </i></b></span>'; 
	  echo '</div>
</div>
</div>
</div>';

  }
		
		
		
		
	}
			

		
}
else
{
    echo '
	  <div class="row" >
				
				<div class="col-md-8" >
					<div class="panel panel-default" style="border-radius:.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: thin;text-align:center">
						
						<div class="panel-body">';
	  
	 echo '<span style="color:red;text-align:center;"><b><i>&#10008;&nbsp&nbspInvalid username or password. </i></b></span>'; 
	  echo '</div>
</div>
</div>
</div>';	
}
} 
  
  
 
  
 ?>
 
 
	

  
  

  
	  
 
  
  

  
</form>
  

							
							
							
							
						<!----------------------------------------------------------------------------------------->	
						</div>
					</div>
				</div>
				
			</div>
		
    </div>				
							
							
							
							
							
				
				
				
												
					
				
				
					
			
				
  
  





	<!---------------------------------------------------------end------------------------------------------------------------------------>			
			</div>
		</div>
    </div>				
							
							
							
							
							
				
				
				
												
					
				
				
					
			
				
  
  
</div>
<br><br><br>
</body>
</html>
