(function () {

var organs = document.querySelectorAll('#videoChooser li');

function changeVideo()
{
	console.log("entered change");
	var video = document.querySelector("#videoSource");
	console.log("video is " + video);
	video.src = "video/test.mp4";
	video.load();
	
}

[].forEach.call(organs, function(li) {
	li.addEventListener('click', changeVideo, false);
});

})();