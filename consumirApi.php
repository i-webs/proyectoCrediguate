<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" type="text/css" href="assets/css/styleConsumoApi.css">
  <title>Consumo de api</title>
</head>
<body>




<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://httpbin.org/get",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "accept: application/json"
  ),
));

$response = curl_exec($curl);
$status_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);



curl_close($curl);


if($status_code != 200){
  echo '<h1 class"titulo"> NO SE CONECTO A LA API CORRECTAMENTE </h1>';
  
}

else{
  echo '<h1 class="titulo"> FELICIDADES SE CONECTO CORRECTAMENTE A LA API DE http://httpbin.org/</h1>';
  echo '<p class="response">'.$response.'</p>';

}
?>


  <nav id="menu">
        <ul class="links">
          <li class="btn"><a href="index.html">Inicio</a></li>

        </ul>
      </nav>

</body>
</html>