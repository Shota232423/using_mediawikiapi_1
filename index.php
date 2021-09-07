<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
$title = 'カーメロ・アンソニー';
$url = "https://ja.wikipedia.org/w/api.php?action=query&prop=extracts&exintro=1&explaintext=1&format=json&titles=".urlencode($title);
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
curl_close();

$response_array = json_decode($response, true);//jsonデコードする、配列にする

$page_title = $response_array['query']['pages']['485246']['title'];
$explain_text = $response_array['query']['pages']['485246']['extract'];
?>

<body>
    <h1><?php echo $page_title ?></h1>
    <p><?php echo $explain_text ?></p>

</body>

</html>