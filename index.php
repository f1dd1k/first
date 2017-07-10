<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>Тег BUTTON</title>
 </head>
 <body>
 <div id="Summ"></div>
<script >
a= prompt("ку",'2');
</script >
 <script >
 var a,b,c,t,l,i
 i=0
  t=0
  l=0;
function d(){

//a= prompt("ку",'vvedit 4uso');
  var SummDok = document.getElementById('Summ'),
SummSumm='tra-la-la';
SummDok.innerHTML = a
alert (a);}



function newMyWindow1() {
var m=[]
  var newWin=[]
  for (i=0;i<1;i++){ 
  newWin= window.open("about:blank", "helo"+a, "width=100,height=100,left="+l +",top="+t+"");
  newWin.document.write(a);

a=+a+2

l=l+100
if (l>400){
l=0;
t+=100}
}
}
</script>



  <p style="text-align: center"><button id = "n" onclick="newMyWindow1(this.href)">Calculated</button>

 </body>
</html>
