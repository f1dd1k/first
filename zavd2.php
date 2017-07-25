<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>dom</title> <style> .span1 { 
  display: block;
  width: 50px;
  height: 50px;
  background: yellow;
  margin: 10px;
  float: left; }
  
  
		.spanRed{
			background: red;
			display: block;
			width: 50px;
			height: 50px;
			margin: 10px;
			float: left;
		}

		.spanGreen{
			background: green;
			display: block;
			width: 50px;
			height: 50px;
			margin: 10px;
			float: left;
		}

	</style>
</head>
 
 <body>

 <script >
var a= prompt("Введіть кількість блоків",'2');

</script >
<script >
var newDiv;
var i;
function qwe()
{alert ('q')}
function wr( ) 
{
for ( i=0;i<a;i++){


newBlock();

}}
function newBlock(){
 newDiv = document.createElement('div');
   newDiv.className = "span1";
newDiv.innerHTML = +i;

document.body.appendChild(newDiv);
newDiv.onclick=qwe();
}
wr()
</script >


 </body>
</html>
