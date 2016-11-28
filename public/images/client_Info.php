<!DOCTYPE HTML>
<?php
$functions=$_SERVER['DOCUMENT_ROOT'].'/functions.php';
include($functions);


include ("$html_header_server");
?>
<html>
	<head>
		<title>gravLab</title>
		<?php include ("$resources_server"); ?>
		<?php include ("$database_login_info_server"); ?>
	</head>

	<body>
	<?php 
    		$cID=$_SESSION['clientID'];
    		$query2=mysqli_fetch_row(mysqli_query($link, "SELECT * FROM clientInfo WHERE clientID=$cID"));
    ?>
	<br>
		<div class="uk-container uk-container-center">
		    <div class="uk-grid" data-uk-grid-margin>
		        <div class="uk-width-medium-2-3"><!--Company Info-->
		            <div class="uk-panel uk-panel-box">
		            <h4 class="uk-panel-title"> <?php echo $query2[1].' -- Client ID: '.$query2[0]?> </h4>
		            	<div class="uk-grid uk-grid-divider">
			                <div class="uk-width-1-1">
			                    <div class="uk-grid uk-grid-divider">
			                        <div class="uk-width-1-2"><div class="uk-panel">
											<?php
												echo $query2[2]." "."<br>";
												echo $query2[3] .', '.$query2[4];
										  	?>
								  	</div></div>

			                        <div class="uk-width-1-2"><div class="uk-panel">
			                        <?php
			                        	echo "Plant Number: " . $query2[5];
			                        ?>
			                        </div></div>
			                    </div>
			                </div>
			            </div>
			                <hr class="uk-grid-divider">
	                	<div class="uk-grid uk-grid-divider">
			                <div class="uk-width-1-1">
			                    <div class="uk-grid uk-grid-divider">
			                        <div class="uk-width-1-2"><div class="uk-panel">
									<?php
			                        	echo "Contact: " . $query2[6];
			                        ?>
								  	</div></div>

			                        <div class="uk-width-1-2"><div class="uk-panel">
			                        <?php
			                        	echo "Contact Number: " . $query2[7];
			                        ?>
			                        </div></div>
			                    </div>
			                </div>
			            </div>    
		            </div>
		        </div>
	        </div>
	    </div>
	    <br>
		<div class="uk-container uk-container-center">
		    <div class="uk-grid" data-uk-grid-margin>
		        <div class="uk-width-medium-2-3"><!--Company Units-->
		            <div class="uk-panel uk-panel-box">
		            <h4 class="uk-panel-title"> <?php echo $query2[1]."'s Units"?> </h4>
		            	<div>
		            		<ul>
			            	<?php
			            	$query=mysqli_query($link, "SELECT * FROM clientUnits WHERE clientID=$cID");
			            	while($row=mysqli_fetch_array($query)){
			            	echo '<li> Unit ID: ' .$row['unitID']. ' -- Unit Model: '.$row['unitModel'].'</li>';
			            	echo '<hr>';
			            	}
			            	?>
			            	</ul>
		            	</div> 
		            </div>
		        </div>
	        </div>
	    </div>
	    <br>
	    <div class="uk-container uk-container-center">
		    <div class="uk-grid" data-uk-grid-margin>
		        <div class="uk-width-medium-2-3"><!--Company Jobs-->
		            <div class="uk-panel uk-panel-box">
		            <h4 class="uk-panel-title"> <?php echo $query2[1]."'s Jobs"?> </h4>
		            	<div>
		            		<ul>
			            	<?php
			            	$query=mysqli_query($link, "SELECT * FROM jobs WHERE clientID=$cID");
			            	while($row=mysqli_fetch_array($query)){
			            	echo '<li><a href="'.$main_job_display_http.'?jobID='.$row['jobID'].'">'.$row['jobTitle']. ' -- Job ID: '.$row['jobID'].'</a></li>';
			            	echo '<br>';
			            	}
			            	?>
			            	</ul>
		            	</div> 
		            </div>
		        </div>
	        </div>
	    </div>		
	</body>
</html>