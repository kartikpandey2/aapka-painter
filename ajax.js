function click(str)
{
var http=new XMLHttpRequest();
http.onreadystatechange=function()
{
	if(this.readyState == 4 && status == 200)
	{
		document.getElementById("text_id").innerHTML= this.responseText;
	}
};
http.open("GET","test_ajax.php?q="+str,true);
http.send();
}