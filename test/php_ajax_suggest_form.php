<!DOCTYPE html>
<meta charset="utf-8">
<title>PHP AJAX 实时搜索 | 简单教程(www.twle.cn)</title>
<html>
<head>
<script>
function showResult(str)
{
    if (str.length==0)
    { 
        document.getElementById("livesearch").innerHTML="";
        document.getElementById("livesearch").style.border="0px";
        return;
    }
    if (window.XMLHttpRequest)
    {// IE7+, Firefox, Chrome, Opera, Safari 浏览器执行
        xmlhttp=new XMLHttpRequest();
    }
    else
    {// IE6, IE5 浏览器执行
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
            document.getElementById("livesearch").style.border="1px solid #A5ACB2";
        }
    }
    xmlhttp.open("GET","/php_ajax_suggest.php?q="+str,true);
    xmlhttp.send();
}
</script>
<p>PHP 基础教程 - 简单教程(www.twle.cn)</p>
<form>
<input type="text" size="30" onkeyup="showResult(this.value)">
<div id="livesearch"></div>
</form>