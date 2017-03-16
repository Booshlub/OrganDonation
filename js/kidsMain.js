(function () {

var organs = document.querySelectorAll('#kidsList li');
var info = document.querySelector('#infoArea');
var editText = document.querySelector("#EditTextBox");

function changeInfoRequest() {

	var organList = document.querySelectorAll('#kidsList li');

	[].forEach.call(organList, function(organ) {
		organ.classList.remove("activeOrganKids");
	});

	this.classList.add("activeOrganKids");

	currentClass = this.id;

	console.log(this.id);

	document.getElementById("organ").src="images/" + "kids_" + currentClass + ".png";

	httpRequest = new XMLHttpRequest();

	//checking for if browser supports httpRequest to grab info
	if(!httpRequest) {
		console.log('Your browser wont support support functionality of this page.');
		return false;
	}
	//interacting with the database to grab info
	httpRequest.onreadystatechange = changeOrganInfo;
	httpRequest.open('GET','includes/query.php' + '?organ=' + this.id);
	httpRequest.send();
}

function changeOrganInfo () {
	if(httpRequest.readyState === XMLHttpRequest.DONE && httpRequest.status === 200) {
		var organData = JSON.parse(httpRequest.responseText);
		info.innerHTML = organData.Description;
	}
}

[].forEach.call(organs, function(li) {
	li.addEventListener('click', changeInfoRequest, false);
});

})();
