(function()
{
    var video = document.getElementById('video'),
        canvas = document.getElementById('canvas'),
        context = canvas.getContext('2d'),
        photo = document.getElementById('photo'),
        vendorURL = window.URL || window.webkitURL;
    
    navigator.getMedia =    navigator.getMedia ||
                            navigator.webkitGetUserMedia ||
                            navigator.mozGetUserMedia ||
                            navigator.msGetUserMedia;

    navigator.getMedia(
        {
            video: true,
            audio: false
        },
        function(stream)
        {
            video.src = vendorURL.createObjectURL(stream);
            video.play();
        },
        function(error)
        {

        }
    );
var data;
    document.getElementById('save').addEventListener('click', function () {
        sendimagetourl(data);
    }
    );

    function sendimagetourl(image) {
        var data = "img=" + image;
        var httpc = new XMLHttpRequest();
        var url = "save.php";
        httpc.open("POST", url, true);
        console.log(image);
        httpc.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        httpc.onreadystatechange = function () {
            if (httpc.readyState == 4 && httpc.status == 200) {
                // alert("SUCCESS!");
                alert(httpc.responseText);
            }
        }
        httpc.send(data);
    }
    document.getElementById('capture').addEventListener('click', function () {
        // var dataurl = canvas.toDataURL();
        // document.getElementById("img").Value = dataurl;
        context.drawImage(video, 0, 0, 400, 300);
        data = canvas.toDataURL('img/png');
        photo.setAttribute('src', data);
        // document.getElementById("frm").submit();
    });
})();