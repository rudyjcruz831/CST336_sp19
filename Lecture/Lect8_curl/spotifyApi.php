<?php
//step1
$cSession = curl_init();


$api = BQBaaJJlbcit-CjyzfgMkQARe28WuxQgGrdSKk8PkbDFmAHRY_wv350NC6DAwQDLivGm3wV1Jed5-cmUCNcFPyENEyhIpwhFEw0TZCXqKRA4I92GObf6NA9qg7C6UZToP6RSpMyF35krXtOZWNS4Ny5mZfEQhdOf1A;

//step2
curl_setopt($cSession,CURLOPT_URL,"https://api.spotify.com/v1/browse/featured-playlists");
curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
curl_setopt($cSession,CURLOPT_HEADER, false);
curl_setopt($cSession,CURLOPT_HTTPHEADER, array(
    "Accept: application/json",
    "Content-Type: application/json",
    "Authorization: Bearer $apiKey"
));

//step3
$results = curl_exec($cSession);
$err = curl_error($cSession);

//step4
curl_close($cSession);

//step5
echo $results;

?>