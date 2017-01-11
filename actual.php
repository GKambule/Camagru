<html>
    <head>
        <title>SNAPER</title>
        <link rel ="stylesheet" type="text/css" href="Styling.css">
    </head>
    <body>
        <center><h1>SnapeR</h1></center>
        <hr>
            <div class="booth">
                <video id="video" width="400" height="300" autoplay></video>
                <a href="#" id="capture" class="Capture_Button">Snap Shot</a>
                <canvas id="canvas" width="400" height="300"></canvas>
                <img id="photo" src="" alt="New Pic">
				<a href="#" id="save" class="Capture_Button">Save image</a>
				<form id="frm" action="save.php" method="post" style="display:none">
					<input type="text" name="img" id="img" value=""/>
					<input type="submit"  value="submit"/>
				</form>
            </div>
            <script src="video.js">
            
            </script>
    </body>
</html>