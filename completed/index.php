<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>List / Grid view</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta http-equiv="imagetoolbar" content="no" />
<link href="/css/core.css" rel="stylesheet" type="text/css" />
</head>
<body>


<div id="wrapper">

	
	<div id="navigation">
		<a href="#" id="list">List view</a>
		<a href="#" id="grid">Grid view</a>
	</div>
	
	<div id="products">
	
		<?php for($i = 1; $i <= 4; $i++) { ?>
	
			<div class="product">
			
				<div class="wrapper">
					
					<div class="image">
						<img src="/images/0<?php echo $i; ?>.jpg" 
							alt="Image <?php echo $i; ?>"
							width="160" height="160" border="0" />
					</div>
					
					<div class="description">
					
						<h1><a href="#">Article title</a></h1>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin pellentesque, est ut venenatis aliquam, lorem quam porttitor ligula, eget ultrices velit dui sed quam. Praesent vehicula placerat lectus. Nulla pede. Quisque a nulla quis massa pulvinar sagittis. Pellentesque neque massa, mattis vulputate, pellentesque nec, vehicula volutpat, purus. Proin pretium dui et nulla cursus eleifend. Aenean aliquam urna eget urna. Vestibulum euismod elit. Donec eget augue sit amet neque elementum pretium. Proin posuere lacus id lacus. Duis vel justo suscipit neque ornare iaculis.</p>
	
					
					</div>
				
				</div>
			
			</div>
		
		<?php } ?>
	
	</div>

</div>



<script src="/js/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="/js/cookie.js" type="text/javascript"></script>
<script src="/js/core.js" type="text/javascript"></script>
</body>
</html>


