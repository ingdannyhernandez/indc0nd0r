function crearXMLHttpRequest() 
	{
  	var xmlHttp=null;
  	if (window.ActiveXObject) 
    	xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
  	else 
    	if (window.XMLHttpRequest) 
      		xmlHttp = new XMLHttpRequest();
  	return xmlHttp;
	}
function cargarDiv(url,donde,i) 
	{
  	if(url=='')
  		{
    	return;
  		}
  	i=crearXMLHttpRequest();
  	i.onreadystatechange = procesarEventos;
  	i.open("POST", url, true);
  	i.send(null);
	
	function procesarEventos()
		{
 		var contenedor;
 		contenedor = document.getElementById(donde);
  		if(i.readyState == 4)
  			{
    		contenedor.innerHTML = i.responseText;
  			} 
 		else 
  			{
    		contenedor.innerHTML = '<center><img src="imagenes/preload.gif"></center>';
  			}
		}
	
	}
function pasarConEnter (field, event) {  
    var keyCode = event.keyCode ? event.keyCode : event.which ? event.which : event.charCode;  
    if (keyCode == 13) {  
        var i;  
        for (i = 0; i < field.form.elements.length; i++)  
            if (field == field.form.elements[i])  
                break;  
        i = (i + 1) % field.form.elements.length;  
        field.form.elements[i].focus();  
        return false;  
    }   
    else  
    return true;  
}  
function AbrirCentrado3(Url) 
			{
			var largo = 450;
			var altura = 600;
			var adicionales= "";
			var exa = "";
			var top = (screen.height-altura)/2;
			var izquierda = (screen.width-largo)/2; 
			nuevaVentana4=window.open(''+ Url + '','Modificar','width=' + largo + ',height=' + altura + ',top=' + top + ',left=' + izquierda + ',features=' + adicionales + '');
			nuevaVentana4.focus();
			}
function AbrirCentrado4(Url) 
			{
			var largo = 450;
			var altura = 300;
			var adicionales= "";
			var exa = "";
			var top = (screen.height-altura)/2;
			var izquierda = (screen.width-largo)/2; 
			nuevaVentana4=window.open(''+ Url + '','Modificar','width=' + largo + ',height=' + altura + ',top=' + top + ',left=' + izquierda + ',features=' + adicionales + '');
			nuevaVentana4.focus();
			}
function AbrirCentrado5(Url) 
			{
			var largo = 720;
			var altura = 400;
			var adicionales= "";
			var exa = "";
			var top = (screen.height-altura)/2;
			var izquierda = (screen.width-largo)/2; 
			nuevaVentana4=window.open(''+ Url + '','Modificar','width=' + largo + ',height=' + altura + ',top=' + top + ',left=' + izquierda + ',features=' + adicionales + '');
			nuevaVentana4.focus();
			}						
function EjecutarLink(direccion)
    {
	 self.location.href=direccion;
	 }
function EjecutarLink2()
    {
	alert("hola");	
	 //self.location.href=direccion;
	 }	 
////////////////////////////////////////////////////////////////
var hexVals = new Array("0","1","2","3","4","5","6","7","8","9","A","B","C","D","E","F"); 
var unsafeString = "%^[]`"; 



function decToHex(num, radix) // part of URL Encode 
{ 
var hexString = ""; 
while (num >= radix) 
{ 
temp = num % radix; 
num = Math.floor(num / radix); 
hexString += hexVals[temp]; 
} 
hexString += hexVals[num]; 
return reversal(hexString); 
} 

function reversal(s) // part of URL Encode 
{ 
var len = s.length; 
var trans = ""; 
for (i=0; i<len; i++) 
{ 
trans = trans + s.substring(len-i-1, len-i); 
} 
s = trans; 
return s; 
} 

function isURLok(compareChar) // part of URL Encode 
{ 
if (unsafeString.indexOf(compareChar) == -1 && compareChar.charCodeAt(0) > 32 && compareChar.charCodeAt(0) < 123) 
{ 
return true; 
} 
else 
{ 
return false; 
} 
}	 
function irAlindex()
	{
	location.href="index.php";
	}
function irAlindexespermatograma()
	{
	location.href="index.php?opcion=tablaespermatograma";
	}

function BuscarResultados(paciente)
    {
	var fechai=document.form1.fechai.value;
	var fechaf=document.form1.fechaf.value;	
	 cargarDiv("ordenesPaciente.php?paciente="+paciente+"&fechai="+fechai+"&fechaf="+fechaf,"resultados","3");
	}					



function dar_formato(num) { 
num = num.toString().replace(/$|,/g,''); 
if(isNaN(num)) 
num = "0"; 
sign = (num == (num = Math.abs(num))); 
num = Math.floor(num*100+0.50000000001); 
cents = num%100; 
num = Math.floor(num/100).toString(); 
if(cents<10) 
cents = "0" + cents; 
for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++) 
num = num.substring(0,num.length-(4*i+3))+','+ 
num.substring(num.length-(4*i+3)); 
return (((sign)?'':'-')  + num + '.' + cents); 
}


	
 function compare_dates(fecha, fecha2)  
  {  
    var xMonth=fecha.substring(3, 5);  
    var xDay=fecha.substring(0, 2);  
    var xYear=fecha.substring(6,10);  
    var yMonth=fecha2.substring(3, 5);  
    var yDay=fecha2.substring(0, 2);  
    var yYear=fecha2.substring(6,10);  
    if (xYear> yYear)  
    {  
        return(true)  
    }  
    else  
    {  
      if (xYear == yYear)  
      {   
        if (xMonth> yMonth)  
        {  
            return(true)  
        }  
        else  
        {   
          if (xMonth == yMonth)  
          {  
            if (xDay> yDay)  
              return(true);  
            else  
              return(false);  
          }  
          else  
            return(false);  
        }  
      }  
      else  
        return(false);  
    }  
}  	
function palert()
	{
	alert("prueba");
	}