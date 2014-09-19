<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ICT Careers</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link href='http://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400italic,700italic,400,700,800' rel='stylesheet' type='text/css'>
     <link rel="stylesheet" href="pcss/main.css">
	 <meta name = "viewport" content="width=device-width, initial-scale=1.0"> 
	 <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <style>
      footer{
       color: green;
      }
      </style>
      
  </head>
  <body>
    <header>
       <div  id="logo">
        <h1>Victorian Digital Careers</h1>
        <h2>ICT Student Engagement</h2>
      </div>
      <nav>
	   <div class="container">
      <ul class="nav nav-pills pull-right">
        <li><a href="index.html" >Home</a></li>
        <li class="active"><a href="parent.php" class="selected">Parent</a></li>
        <li><a href="teacher.php">Teacher</a></li>
		<li><a href="advisor.php">Career Advisor</a></li>
        </ul>
      </nav>
    </header>
	<br><br>
    <div id="wrapper">
    <section>
    
	<form action="parent.php" method="post" align = "center">

<input type="submit" name="women" value="ICT For Women" class="btn btn-success btn-lg">
<input type="submit" name="intership" value="ICT Internships" class="btn btn-success btn-lg">
<input type="submit" name="programs" value="ICT programs" class="btn btn-success btn-lg">
<input type="submit" name="university" value="University" class="btn btn-success btn-lg"> 
<input type="submit" name="career" value="Career" class="btn btn-success btn-lg"> 
<br><br>


</form>

	<?php
	require 'controller.php';
	
	if(isset($_POST['women']))
   {
     $query  = "select * from women_program";
	 
	 $result = pg_query($query) or die("Query failed:".pg_last_error());

    echo "<table border='1' align = 'center' class="table table-hover">
	     <tr>
         <th>Women Program</th>        
        </tr>\n";

    while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value'></td>\n";
     }
     echo "\t</tr>\n";
    }
    echo "</table>\n";
	
	// Free resultset
      pg_free_result($result);

// Closing connection
     }
	 
	 if(isset($_POST['internship']))
   {
     $query  = "select * from internship";
	 
	 $result = pg_query($query) or die("Query failed:".pg_last_error());

    echo "<table border='1' align = 'center' class="table table-hover">
	     <tr>
         <th>Internship Programs</th>        
        </tr>\n";

    while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td> $col_value </td>\n";
     }
     echo "\t</tr>\n";
    }
    echo "</table>\n";
	
	// Free resultset
      pg_free_result($result);

// Closing connection
     }
	 
	 if(isset($_POST['university']))
   {
     $query  = "select * from university";
	 
	 $result = pg_query($query) or die("Query failed:".pg_last_error());

    echo "<table border='1' align = 'center' class="table table-hover">
	     <tr>
         <th>University Name</th> 
          <th>Website</th>  
          <th>Contact</th>  		  
        </tr>\n";

    while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td> $col_value </td>\n";
     }
     echo "\t</tr>\n";
    }
    echo "</table>\n";
	
	// Free resultset
      pg_free_result($result);

// Closing connection
     }
	 
	/* if(isset($_POST['career']))
   {
     $query  = "select * from career";
	 
	 $result = pg_query($query) or die("Query failed:".pg_last_error());

    echo "<table border='1' align = 'center' class="table table-hover">
	     <tr>
         <th>Career Code</th> 
          <th>Job Role</th>  
          <th>Average Salary</th> 
           <th>Description</th>  
     	</tr>\n";

    while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
     }
     echo "\t</tr>\n";
    }
    echo "</table>\n";
	
	// Free resultset
      pg_free_result($result);

// Closing connection
     } */
	 
	 if(isset($_POST['programs']))
   {
     $query  = "select * from general_programs";
	 
	 $result = pg_query($query) or die("Query failed:".pg_last_error());

    echo  "<table border='1' align = 'center' class="table table-hover">
	     <tr>
         <th>ICT Programs</th> 
          
     	</tr>\n";  

    while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
     }
     echo "\t</tr>\n";
    }
    echo "</table>\n";
	
	// Free resultset
      pg_free_result($result);

// Closing connection
     }
	 
pg_close($con);

    
	
	?>
	
	
	
    </section>
    <footer>
      <img src="img/twitter-wrap.png" alt="twitter logo" class="social-icon">
     <img src="img/facebook-wrap.png" alt="facebook logo" class="social-icon">
      <p>&copy; 2014</p>
    </footer>
      </div>
  </body>
</html>