<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">    
    <meta name="author" content="DIVYANSH">
	<meta name="copyright" content="www.parkalert.xyz">
	<meta name="host" 	   content="www.parkalert.xyz">
	
	        <!--favicon-->
        <link rel='apple-touch-icon'   sizes='57x57' href='favicon/apple-touch-icon-57x57.png'>
        <link rel='apple-touch-icon'   sizes='60x60' href='favicon/apple-touch-icon-60x60.png'>
        <link rel='apple-touch-icon'   sizes='72x72' href='favicon/apple-touch-icon-72x72.png'>
        <link rel='apple-touch-icon' sizes='114x114' href='favicon/apple-touch-icon-114x114.png'>
        <link rel='apple-touch-icon' sizes='144x144' href='favicon/apple-touch-icon-144x144.png'>
        <link rel='apple-touch-icon' sizes='180x180' href='favicon/apple-touch-icon-180x180.png'>
        <link rel='icon' type='image/png' href='favicon/favicon-32x32.png' sizes='32x32'>
        <link rel='icon' type='image/png' href='favicon/android-chrome-192x192.png' sizes='192x192'>
        <link rel='icon' type='image/png' href='favicon/favicon-96x96.png' sizes='96x96'>
        <link rel='icon' type='image/png' href='favicon/favicon-16x16.png' sizes='16x16'>
	<link rel="shortcut icon" href="favicon/favicon-32x32.png" type="image/x-icon" />
	<title>ParkAlert</title>
</head>
<?php

require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}
?>
<?php require_once("models/top-nav.php"); ?>

	
<body id="page-wrapper" style="height:100vh">

<div class="container-fluid">
  <!-- Page Heading -->
  <div class="row">
    <div class="col-lg-12">
      <h1 align="center">
        Visitors 		
		
      </h1>
	  <br/>
	  <br/>
      <!-- CONTENT GOES HERE -->
<?php

		$date = Date('Y-m-d');
		$conn = new mysqli('mysql.hostinger.in','u267441530_root','myfamily0610','u267441530_spice');
		$r = $conn->query("select * from visitor_registration WHERE TimeStamp like'$date%' ORDER BY TimeStamp DeSC");
		//var_dump($r);		
		?>
	  
      <?php

      echo "
      <table class='table table-hover'>
      ";
      ?>
  <?php echo "
      <tr>
      <th>Id</th><th>Name</th><th>Mobile Number</th><th>Car Number</th><th>Flat Number</th><th>Purpose</th><th>Date and Time</th>
      </tr>";
	
		for($i = 0; $i < $r->num_rows; $i++){
			$row = $r->fetch_array(MYSQLI_ASSOC);

        echo "
        <tr>
        <td>".$row['Id']."</td>
        <td>".$row['Name']."</a></td>
        <td>".$row['Mobile_Number']."</td>
        <td>".$row['Car_Number']."</td>
        <td>".$row['Flat_Number']."</td>
        <td>".$row['Purpose']."</td>
        <td>".$row['TimeStamp']."</td>
        </tr>
		
        ";
      }
	  echo "</table>

	  ";

      ?>

    </div>
  </div>
  <!-- /.row -->

</div>

</body>
<!-- /#wrapper -->
<!-- footer -->
