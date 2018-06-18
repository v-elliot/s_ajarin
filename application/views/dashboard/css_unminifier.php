<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>CSS Unminifier :: Beben Koben</title>
<meta name="author" content="Beben Koben">
<link rel="shortcut icon" type="image/x-icon" href="../img/papicon.png" />
<style>
#css-orig {height:180px;width:100%;color:#333;font-size:13px;font-family:'Courier New',Courier;border:1px solid #999}  
#minified-css-tab {width:20px;vertical-align:middle;text-align:center;color:#999}
#code {height:180px;width:100%;display:none}
#minified-css-button {vertical-align:middle;float:left}
input.text {height:19px;line-height:15px;border:1px solid #bbb;vertical-align:middle}
.left {float:left;color:#555;margin:0 0 7px 6px}
textarea {margin:5px 0}
</style>
</head>
<body>
<textarea id="css-orig">p{font:normal 14px/20px helvetica,arial,sans-serif;color:#333;}.woot{font-weight:bold}</textarea>
<button id="minified-css-button">Unminify</button>
<div class="left">tab width: <input id="minified-css-tab" class="text" type="text" value="4" /></div>
<textarea id="code"></textarea>
<script src="../js/unminify-css2.js"></script>
</body>
</html>