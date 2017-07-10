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
 var a,b,t,l,i,z,w
 var  c
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
var k
var m=[]
  var newWin=[]
 for (var j=0;j<3;j++){
 
 
 if (a>10) {
 c=a
 }
 z=a%10
 if (a>10){
 var des=a/10}
 des=Math.floor( des);
   switch (des){ 
  case 1: k="X";
  break;
   case 2: k="XX";
  break;
   case 3: k="XXX";
  break;
   case 4: k="XL";
  break;
   case 5: k="L";
  break;
   case 6: k="LX";
  break;
   case 7: k="LXX";
  break;
   case 8: k="LXXX";
  break;
   case 9: k="XC";
  break;
   case 10: k="C";
  break;
  default: k=' ';}
  switch (z){ 
  case 1: w="I";
  break;
   case 2: w="II";
  break;
   case 3: w="III";
  break;
   case 4: w="IV";
  break;
   case 5: w="V";
  break;
   case 6: w="VI";
  break;
   case 7: w="VII";
  break;
   case 8: w="VIII";
  break;
   case 9: w="IX";
  break;
   case 0: w="X";
  break;
  default: w=' ';}
  
 b=w+w 
  }
  
  
  
  
  
  
  for (i=0;i<1;i++){ 
  newWin= window.open("about:blank", "helo"+a, "width=100,height=100,left="+l +",top="+t+"");
  newWin.document.write(k+w);

a=+a+2

l=l+100// для переміщення вікна
if (l>400){
l=0;
t+=100}

				}
}
</script>



  <p style="text-align: center"><button id = "n" onclick="newMyWindow1(this.href)">Calculated</button>

 </body>
</html>
