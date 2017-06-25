<!DOCTYPE>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无限极JSON解析Demo</title>
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="js/jquery.SuperSlide.2.1.1.source.js"></script>

</head>
<body>
<ul id="json">
</ul>
<script>

    window.onload = function () {
        $.ajax({
            type : "GET",
            url : "article",
            dataType : "json",
            success : function (data) {
                document.getElementById("json").innerHTML = jsonCode(data);
            }
        });
    };

    function jsonCode(j) {
        var text = new Array(),k;
        for(i=0;i<j.length;i++) {
            for (k in j[i]) {
                //组合html展示状态
                if (typeof(j[i][k]) == "object") {
                    text += "<ul>"+jsonCode(j[i][k])+"</ul>";
                }else if (typeof(j[i][k]) != "undefined") {
                    text += "<li>"+j[i][k]+"</li>";
                }
            }
        }
        return text;
    }

</script>
</body>
</html>