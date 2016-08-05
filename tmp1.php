<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#hide").click(function(){
        $("#Zola").show();
       $("#Jim").hide();
       $("#Guy").hide();
    });
    $("#show").click(function(){
        $("p").show();
    });
});
</script>
</head>
<body>
<button id="Zola">Zola</button>
<button id="Jim">Jim</button>
<button id="Guy">Guy</button>
<div id="ZolaText">Zola</div>
<div id="JimText">Jim</div>
<div id="GuyText">Guy</div>
</body>
</html>