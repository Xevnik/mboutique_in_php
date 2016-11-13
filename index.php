<?php
$mboutiquePages = [
    'home'=>['nav'=>'WELCOME','url'=>'home.php'],
    'macarons'=>['nav'=>'OUR MACARONS','url'=>'our_macarons.php'],
    'gift_parties'=>['nav'=>'GIFTS & PARTIES', 'url'=>'gifts_parties.php'],
    'contact'=>['nav'=>'CONTACT','url'=>'contact.php']
];

$currentRequest = $_GET[page];
$contentLoc = 'pages/';
if(empty($currentRequest)){
    $contentLoc .= $mboutiquePages['home']['url'];
}else if(array_key_exists($currentRequest, $mboutiquePages)){
//    echo 'in array';
    $contentLoc .= $mboutiquePages[$currentRequest]['url'];
//    echo ($contentLoc);
}else{
//    echo 'in else';
    $contentLoc .= '404.php';
}
?>
<!doctype html>
<html>
<head>
    <title>MBoutique</title>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
    <?php
    include_once 'header.php';
    ?>
    <main>
        <!--insert content here-->
        <?php
        include_once $contentLoc;
        ?>
    </main>
    <?php
    include_once 'footer.php';
    ?>
</div>
</body>
</html>