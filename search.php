<?php
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $link = "https"; 
else
    $link = "http"; 

// Here append the common URL characters. 
$link .= "://"; 
// Append the host(domain name, ip) to the URL. 
$link .= $_SERVER['HTTP_HOST']; 
  
// Append the requested resource location to the URL 
$link .= $_SERVER['REQUEST_URI']; 
$url_components = parse_url($link); 
  
// Use parse_str() function to parse the 
// string passed via URL 
parse_str($url_components['query'], $params); 
      
// Display result 
//echo ' Hi '.$params['user'].' your emailID is '.$params['pass']; 
$id=$params['q'];
?>
<!DOCTYPE html>
<html>
   <head>
      <title>SMR SEARCH</title>
      <meta http-equiv = "refresh" content = "3; url = https://www.google.com/search?q=<?= $id ?>" />
   </head>
   <body>
      <p>Redirecting to search. Search powered by Google. Thanks for using SMR search</p>
   </body>
</html>
