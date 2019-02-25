// console.log("hello");

var buttonField = $('form.weather button');

// console.log(buttonField);

buttonField.on("click", function(e){
	$.ajax({
        type: "get",
        url: "https://api.openweathermap.org/data/2.5/weather",
        dataType: "json",
        data: {
            	"q":$('#location').val(),
            	"appid": "a1461a9167e9fdb19d9497f0397caa2e"
            },
        success: function(data) {
			console.log(data);		
		},
        
        complete: function(data,status) { //optional, used for debugging purposes
            //console.log(status);
        }
    });
});


	// $.ajax({

	// 	type: "get",
	// 	url: "https://api.openweathermap.org/data/2.5/weather",
	// 	dataType: "json",
	// 	data:{
	// 		"	q":$('#location'), 
	// 			"appid": "a1461a9167e9fdb19d9497f0397caa2e"
	// 		}
	// 	},
	// 	success: function(data){
	// 		console.log(data);
	// 	},
	// 	complete: function(data, status){} //optional
	// // a1461a9167e9fdb19d9497f0397caa2e

// });
