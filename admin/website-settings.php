<?php
    ob_start();
	session_start();

	$pageTitle = 'Website Settings';

	if(isset($_SESSION['username_restaurant_qRewacvAqzA']) && isset($_SESSION['password_restaurant_qRewacvAqzA']))
	{
		include 'connect.php';
  		include 'Includes/functions/functions.php'; 
		include 'Includes/templates/header.php';
		include 'Includes/templates/navbar.php';

		$stmt = $con->prepare("SELECT * FROM website_settings");
        $stmt->execute();
        $options = $stmt->fetchAll();

        ?>
<div class="card">
            	<div class="card-header">
                	Website Settings
           		</div>
                <div class="card-body">
            		<form method="POST" class="website_settings_form" action="website-settings.php">
                   		<div class="panel-">
                        	<div class="panel-header-X">
                                <div class="main-title">
                                    Settings
                                </div>
                            </div>
                            <div class="save-header-X">
                                <div style="display:flex">
                                    <div class="icon">
                                        <i class="fa fa-sliders-h"></i>
                                    </div>
                                    <div class="title-container">Website details</div>
                                </div>
                            </div>
                            <div class="panel-body-X">

<div class="form-group">
<table border="1" cellspacing="20" cellpadding="20"  style="width:1000px; height:200px;">

<tbody>
	<?php
		include('connect.php');
		$result = $con->prepare("SELECT * FROM website_settings ORDER BY option_id");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
	<tr class="record">
		<td><?php echo $row['option_name']; ?></td>
		<td><?php echo $row['option_value']; ?></td>
		<td><a href="website-setting-form.php?id=<?php echo $row['option_id']; ?>"> edit </a></td>
	</tr>
	<?php
		}}
	?></div>
</tbody>
</table>