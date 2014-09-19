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
      <ul  class="nav nav-pills pull-right">
        <li><a href="index.html" >Home</a></li>
        <li><a href="parent.php" >Parent</a></li>
        <li><a href="teacher.php">Teacher</a></li>
		<li class="active"><a href="advisor.php" class="selected">Career Advisor</a></li>
        </ul>
      </nav>
	
    </header>
    <div id="wrapper">
    <section>
   <form action="advisor.php" method="post" align = "center">

<input type="submit" name="women" value="ICT For Women" class="btn btn-success btn-lg">
<input type="submit" name="intership" value="ICT Internships" class="btn btn-success btn-lg">
<input type="submit" name="programs" value="ICT programs" class="btn btn-success btn-lg">
<input type="submit" name="university" value="University" class="btn btn-success btn-lg"> 
<input type="submit" name="career" value="Career" class="btn btn-success btn-lg"> 
<br><br>




<div class="row">
  <div class="col-md-4">
  <p><input  type="button" class="btn btn-primary btn-lg" value="Help People" name="help"></p>
   <p><input type="button" class="btn btn-primary btn-lg" value="Marketing and Sales" name="marketing"></p>
    <p><input type="button" class="btn btn-primary btn-lg" value="Business Analyses" name="business"></p>
     <p><input type="button" class="btn btn-primary btn-lg" value="Creativity and Innovation" name="creative"></p>
	  <p><input type="button" class="btn btn-primary btn-lg" value="Engineering and Technical" name="engineer"</p>
  </div>
  <div class="col-md-4 col-md-offset-4">
  
  <?php
	require 'controller.php';
	
	if(isset($_POST['help']))
   {
     $query  = "select * from career where Job_Type='Helpful' ";
	 
	 $result = pg_query($query) or die("Query failed:".pg_last_error());

    echo "<div class='table-responsive'><table border='1' align = 'center' class='table table-hover'>
	     <tr>
         <th></th>        
        </tr>\n";

    while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value'></td>\n";
     }
     echo "\t</tr>\n";
    }
    echo "</table></div>\n";
	
	// Free resultset
      pg_free_result($result);

// Closing connection
     }
	 
	 if(isset($_POST['business']))
   {
     $query  = "select * from career where Job_Type='Business Analysis' ";
	 
	 $result = pg_query($query) or die("Query failed:".pg_last_error());

    echo "<div class='table-responsive'><table border='1' align = 'center' class='table table-hover'>
	     <tr>
         <th></th>        
        </tr>\n";

    while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value'></td>\n";
     }
     echo "\t</tr>\n";
    }
    echo "</table></div>\n";
	
	// Free resultset
      pg_free_result($result);

// Closing connection
     }
	 
	 if(isset($_POST['marketing']))
   {
     $query  = "select * from career where Job_Type='Marketing' ";
	 
	 $result = pg_query($query) or die("Query failed:".pg_last_error());

    echo "<div class='table-responsive'><table border='1' align = 'center' class='table table-hover'>
	      <tr>
         <th></th>         
        </tr>\n";

    while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value'></td>\n";
     }
     echo "\t</tr>\n";
    }
    echo "</table></div>\n";
	
	// Free resultset
      pg_free_result($result);

// Closing connection
     }
	 
	 if(isset($_POST['creative']))
   {
     $query  = "select * from career where Job_Type='Creative' ";
	 
	 $result = pg_query($query) or die("Query failed:".pg_last_error());

    echo "<div class='table-responsive'><table border='1' align = 'center' class='table table-hover'>
	     <tr>
         <th></th>        
        </tr>\n";

    while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value'></td>\n";
     }
     echo "\t</tr>\n";
    }
    echo "</table></div>\n";
	
	// Free resultset
      pg_free_result($result);

// Closing connection
     }
	 
	 if(isset($_POST['engineer']))
   {
     $query  = "select * from career where Job_Type='Engineering' ";
	 
	 $result = pg_query($query) or die("Query failed:".pg_last_error());

    echo "<div class='table-responsive'><table border='1' align = 'center' class='table table-hover'>
	     <tr>
         <th></th>        
        </tr>\n";

    while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value'></td>\n";
     }
     echo "\t</tr>\n";
    }
    echo "</table></div>\n";
	
	// Free resultset
      pg_free_result($result);

// Closing connection
     }
	 
  ?>
  </div>
</div>
</form>
    </section>
    <footer>
       <img src="img/twitter-wrap.png" alt="twitter logo" class="social-icon">
       <img src="img/facebook-wrap.png" alt="facebook logo" class="social-icon">
      <p>&copy; 2014</p>
    </footer>
      </div>
  </body>
</html>
