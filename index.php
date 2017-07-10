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
 var int c
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
 for (var j=0;j<3;j++){
 c=a/100;
 
 if (c!=0) {
 z=c
 }
 z=c%10
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
  default: w="lol";}
  
 b=w+w 
  }
  
  
  
  
  
  
  for (i=0;i<1;i++){ 
  newWin= window.open("about:blank", "helo"+a, "width=100,height=100,left="+l +",top="+t+"");
  newWin.document.write(b);

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
