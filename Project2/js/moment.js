window.onload = init;


function init()
{

}

var buttonSubmit = document.getElementById('button1');
// buttonSubmit.onclick = getInfo;

buttonSubmit.addEventListener('click', getInfo);
// console.log("123")
function getInfo()
{

	// e.preventDefault();
	// fname = fnameInput;
	// lname = lnameInput;
	var fnameInput = document.getElementById("fname");
	var fname = fnameInput.value;

	var lnameInput = document.getElementById("lname");
	var lname  = lnameInput.value;

	var radioButton;
	var radioList = document.getElementsByName('radioB')
	var sizes = radioList.length;
	// console.log("11111111");
	// for(var i = 0; i < sizes; i++)
	// {
	// 	// console.log("222222222");
	// 	if(radioList[i].checked == true){
	// 		console.log(radioList[i]);
	// 		radioButton = radioList[i].value;
	// 		// alert("This the radio button: " + radioButton.value);
	// 		break;
	// 	}
	// }

	var checked = Array.from(document.getElementsByName('radioB')
		.filter(radioBtn => radioBtn.checked));

	console.log(checked);

	console.log( "Radio button: ", radioButton);


	var dogInfo = document.getElementById('radio1');
	var dog = dogInfo.value;
	var catInfo = document.getElementById('radio2');
	var cat = catInfo.value;
	var lionInfo = document.getElementById('radio3');
	var lion = lionInfo.value;

	var addImg = document.getElementById('addImgHere');
	console.log(radioButton);
	if(checked  === dog)
	{
		addImg.innerHTML = "Dooggggggggggggggggggg";
	}
	else if(radioButton === cat)	
	{
		addImg.innerHTML = "Catttttttttttttttttttt";		
	}
	else if(radioButton === lion)
	{
		addImg.innerHTML = "Lionnnnnnnnnnnnnnnnnnn";
	}

	// createImg(addImg);

	// while(true)
	// {
	// 	console.log(lname.value)
	// }
	// console.log(radioButton);
	// console.log("Hello World")
	console.log("Helloe worlllllllllllllllllllll");
}
// $('#button1').on("click", function(){
// 	//alert("Hello");
// 	let fname = $("#fname").val();
// 	let lname = $("#lname").val();


	 
// });

// function createImg(addImg)
// {
// 	console.log("In side create functionNNNNNNNNNNNNNNNNNNNNNNNNNNNNN");
// 	addImg.innerHTML = "Dooggggggggggggggggggg";	
// }