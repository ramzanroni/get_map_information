<?php 
 
$userIP = '103.130.112.59'; 
$apiURL = 'https://freegeoip.app/json/'.$userIP; 
$ch = curl_init($apiURL); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
$apiResponse = curl_exec($ch); 
curl_close($ch); 
$ipData = json_decode($apiResponse, true); 
 
if(!empty($ipData)){ 
    $country_code = $ipData['country_code']; 
    $country_name = $ipData['country_name']; 
    $region_code = $ipData['region_code']; 
    $region_name = $ipData['region_name']; 
    $city = $ipData['city']; 
    $zip_code = $ipData['zip_code']; 
    $latitude = $ipData['latitude']; 
    $longitude = $ipData['longitude']; 
    $time_zone = $ipData['time_zone']; 
     
    echo 'Your Country Name: '.$country_name.'<br/>'; 
    echo 'Your Country Code: '.$country_code.'<br/>'; 
    echo 'Your Region Code: '.$region_code.'<br/>'; 
    echo 'Your Region Name: '.$region_name.'<br/>'; 
    echo 'Your City: '.$city.'<br/>'; 
    echo 'Your Zipcode: '.$zip_code.'<br/>'; 
    echo 'Your Latitude: '.$latitude.'<br/>'; 
    echo 'Your Longitude: '.$longitude.'<br/>'; 
    echo 'Your Time Zone: '.$time_zone; 
}else{ 
    echo 'IP data is not found!'; 
} 
 
?>