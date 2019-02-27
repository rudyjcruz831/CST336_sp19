$(document).ready(function() {

    $("#state").change(function() {

        $.ajax({
            type: "get",
            url: "http://itcdland.csumb.edu/~milara/ajax/countyList.php",
            dataType: "json",
            data: {
                "state": $("#state").val(),

            },
            success: function(data) {
                $("#countySelect").empty();
                for (var i = 0; i < data.length; i++) {
                    var contyin = data[i]['county'];
                    $("#countySelect").append("<option>" + contyin + "</option>");
                }
                console.log(data);

            },
            complete: function(data, status) {
                console.log(status);
            }

        });

    });

    $("#zip").change(function() {
        $.ajax({
            type: "get",
            url: "http://itcdland.csumb.edu/~milara/ajax/cityInfoByZip.php",
            dataType: "json",
            data: {
                "zip": $("#zip").val(),
            },

            success: function(data) {

                $("#city").html("City: " + '${data.city}');
                $("#latitude").html("Latitude: " + '${data.latitude}');
                $("#longitude").html("Longitude: " + '${data.longitude}');

                if (data == false) {

                    $("#zipError").html("Zip code not found").css({ "color": "#dc3545" });
                    $("#zip").css({ "border-color": "#dc3545" });
                    
                }else{
                    
                   $("#zipError").html("").css({ "color": "#28a745" });
                   $("#zip").css({ "border-color": "#28a745" });
                }
            },
            error: function(xhr) {
                if (xhr) {
                    $("#zipError").html("Zip code not found").css({ "color": "#dc3545" });
                    $("#zip").css({ "border-color": "#dc3545" });
                }

            },

            complete: function(data, status) {
                console.log(status);
            }
        });
    });

    $('#button').click(function() {

        var password1 = $("#password1").val();
        var password2 = $("#password2").val();
        
        if (password1 != password2) {
            $("#passW").html("Password is not matching").css({ "color": "#dc3545" });
            $("#password1").css({ "border-color": "#dc3545" });
            $("#password2").css({ "border-color": "#dc3545" });
        
        }else{
            $("#passW").html("Password is matching").css({ "color": "#28a745" });
            $("#password1").css({ "border-color": "#28a745" });
            $("#password2").css({ "border-color": "#28a745" });
        }  

    });

    $("#newUserName").change(function() {

        var username = ["k", "jeff88", "lindsS"];
        var userNameNew = $("#newUserName").val();

        for (i = 0; i < username.length; i++) {
            var name = username[i]
            if (userNameNew == name) {
                $("#available").html("Username is not available!").css({ "color": "#dc3545" });
                $("#newUserName").css({ "border-color": "#dc3545" });
                break;
            }
            else {
                $("#available").html("Username is available!").css({ "color": "#28a745" });
                $("#newUserName").css({ "border-color": "#28a745" });
            }
        }
    });
});