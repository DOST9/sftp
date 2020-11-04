<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="src/jquery.booklet.latest.css" type="text/css" rel="stylesheet" media="screen, projection, tv" />

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<script> window.jQuery || document.write('<script src="booklet/jquery-2.1.0.min.js"><\/script>') </script>


	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>


	<script src="src/jquery.easing.1.3.js"></script>
	<script src="src/jquery.booklet.latest.min.js"></script>

	<script type="text/javascript">
		$(function() {

            //alert(window.innerHeight);
		    //single book
		    $('#mybook').booklet({
                width:  '850',
                height: '100%'
            });

		    //multiple books with ID's
		    //$('#mybook1, #mybook2').booklet();

		    //multiple books with a class
		    //$('.mycustombooks').booklet();
		});	
	</script>	
</head>
<body>
<div id="mybook">
    
    <div>
        <img src="images/cover.jpg" alt="" width="100%" height="100%">
    </div>

    <?php for($x=1; $x<=62; $x++)
        {
            echo '<div>
                <img src="images/'.$x.'.jpg" alt="" width="100%" height="100%">
            </div>';
        }
    ?>

    <div>
        <img src="images/back.jpg" alt="" width="100%" height="100%">
    </div>
</div>


</body>
</html>