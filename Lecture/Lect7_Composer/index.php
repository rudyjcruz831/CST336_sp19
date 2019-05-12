<!DOCTYPE html>
<html>
    <head>
        <title>Testing google sign up</title>
    </head>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="243934142999-bufd6rm66tf4q0dmgdlj7jft2g8iblgs.apps.googleusercontent.com">
    <script>
        function onSignIn(googleUser) {
            var profile = googleUser.getBasicProfile();
            console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
            console.log('Name: ' + profile.getName());
            console.log('Image URL: ' + profile.getImageUrl());
            console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
        }
        function signOut() {
            var auth2 = gapi.auth2.getAuthInstance();
            auth2.signOut().then(function () {
                console.log('User signed out.');
            });
        }
    </script>
    
    <body>
        <div>
            <!--<button>click me</button>-->
            <div class="g-signin2" data-onsuccess="onSignIn"></div>
            <a href="#" onclick="signOut();">Sign out</a>

        </div>
        
    </body>
</html>