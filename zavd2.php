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
var max= prompt("Введіть кількість блоків",'2');

var min=0
     var rand = min - 0.5 + Math.random() * (max - min )
    rand = Math.round(rand);
    alert(rand)
  
var newDiv;
var i;
function qwe()

{var chuslo1=this.innerHTML

chuslo=document.getElementById(+chuslo1);
if (+chuslo1 ==rand){

chuslo.className= "spanGreen";}
else {
chuslo.className= "spanRed";}



}
function wr( ) 
{
for ( i=0;i<max;i++){


newBlock();

}}
function newBlock(){
 newDiv = document.createElement('div');
   newDiv.className = "span1";
newDiv.innerHTML = +i;
newDiv.id=+i;
document.body.appendChild(newDiv);
newDiv.addEventListener("click", qwe);


}

wr()
</script >


 </body>
</html>
