// JavaScript Document PHP Test

(function() {

	//make listener for click on organ selector
	// swap description p and h2 to whichever was clicked

	var organs = document.querySelectorAll('li a');
	//var info = document.querySelector('#infoArea');

	[].forEach.call(organs, function(li) {
	li.addEventListener('click', changeInfoRequest, false);});

	var currentClass,
		organList = document.querySelectorAll('#organSelectorDesktop li'),
		organListMobile = document.querySelectorAll('#organSelectorMobile li'),
		swappingCon = document.querySelector('#organDescDesktop'),
		heading = document.querySelector('#organDescDesktop h2'),
		paragraph = document.querySelector('#organDescDesktop p'),
		modelImage = document.querySelector('#modelImgCon'),
		mobileDesc = document.querySelector('#mobileDescText');

	function changeInfo() {

		[].forEach.call(organList, function(organ) {
			organ.classList.remove("activeOrgan");
		});
		[].forEach.call(organListMobile, function(organ) {
			organ.classList.remove("activeOrgan");
		});

		document.querySelector('#mobileDescText').scrollIntoView({
  		behavior: 'smooth'
		});

		paragraph.innerHTML = "variableTestLongText";
		paragraph.scrollTop = 0;

		heading.classList.remove(currentClass);
		swappingCon.classList.remove(currentClass);
		modelImage.classList.remove(currentClass);

		this.classList.add("activeOrgan");

		heading.classList.add(this.id);
		swappingCon.classList.add(this.id);
		modelImage.classList.add(this.id);
		currentClass = this.id;

		document.getElementById("model").src="images/360/" + currentClass + "_modelNoGlow_" + document.getElementById("modelControl").value + ".png";
		var id = this.id;
		changeInfoRequest(id);
	}

	[].forEach.call(organList, function(organ) {
		organ.addEventListener('click',changeInfo,false);
	});
	[].forEach.call(organListMobile, function(organ) {
		organ.addEventListener('click',changeInfo,false);
	});

})();

function changeInfoRequest(id2) {
	httpRequest = new XMLHttpRequest();
	console.log("id = " + id2);

	//checking for if browser supports httpRequest to grab info
	if(!httpRequest) {
		console.log('Your browser wont support support functionality of this page.');
		return false;
	}
	//interacting with the database to grab info
	httpRequest.onreadystatechange = changeOrganInfo;
	httpRequest.open('GET','includes/adultQuery.php' + '?organ=' + id2);
	httpRequest.send();
}

function changeOrganInfo () {
	if(httpRequest.readyState === XMLHttpRequest.DONE && httpRequest.status === 200) {
		console.log("entered changeinfo");
		var organData = JSON.parse(httpRequest.responseText);
		var info = document.querySelector('#infoArea');
		var name = document.querySelector("#name");
		info.innerHTML = organData.Description;
		name.innerHTML = "The " + organData.Organ;
		organHighlight();
	}
}

function organHighlight() {
	var rangeInput = document.getElementById("modelControl"),
	 		value = rangeInput.value,
			selectedOrgan = document.getElementById("modelImgCon").className;

	switch(value) {
    case '1':
        document.getElementById("model").src="images/360/" + selectedOrgan + "_modelNoGlow_1.png";
        break;
    case '2':
        document.getElementById("model").src="images/360/" + selectedOrgan +"_modelNoGlow_2.png";
        break;
		case '3':
				document.getElementById("model").src="images/360/" + selectedOrgan +"_modelNoGlow_3.png";
				break;
		case '4':
				document.getElementById("model").src="images/360/" + selectedOrgan +"_modelNoGlow_4.png";
				break;
		case '5':
				document.getElementById("model").src="images/360/" + selectedOrgan +"_modelNoGlow_5.png";
				break;
		case '6':
				document.getElementById("model").src="images/360/" + selectedOrgan +"_modelNoGlow_6.png";
				break;
		case '7':
				document.getElementById("model").src="images/360/" + selectedOrgan +"_modelNoGlow_7.png";
				break;
    default:

		}
}
