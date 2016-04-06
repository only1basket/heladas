/*Fuerza carga de inicializa en el onload*/

/* Autenticado */
function autenticado()
{
    var ret=0; //autenticado
    var dats = document.cookie.split('; ');
    var tcookie = new Array();
    var j = '';
    var pars = '';
    for (j in dats) {
        pars = dats[j].split('='); tcookie[pars[0]] = pars[1];
        if (pars[0]=='RUT_NS') ret=1;
    }
    return ret;
}
/* Autenticado */
function rut_aut()
{
    var rut="";
    var valida_rutAut=0;
    var dats = document.cookie.split('; ');
    var tcookie = new Array();
    var j = '';
    var pars = '';
    for (j in dats) {
        pars = dats[j].split('='); tcookie[pars[0]] = pars[1];
        if (pars[0]=='RUT_NS')  rut +=pars[1];
    }

    for (j in dats) {
        pars = dats[j].split('='); tcookie[pars[0]] = pars[1];
        if (pars[0]=='DV_NS')    rut += "-"+ pars[1];
    }

    return rut;
}

function formatoRut(texto, inputText){
	objRut = document.getElementById(inputText);
	var rut_aux = "";
	for ( i=0; i < texto.length ; i++ )
		if ( texto.charAt(i) != ' ' && texto.charAt(i) != '.' && texto.charAt(i) != '-' )
			rut_aux = rut_aux + texto.charAt(i);

	largo = rut_aux.length;

	if(largo == 0)
		return false;

	if (largo<2){
		return false;
	}

	for (i=0; i < largo ; i++ )	{
		var letra = rut_aux.charAt(i);

		if (!letra.match(/^([0-9]|[kK])$/)){			
			return false;
		}	
	}
	var rut_inv = "";	
	for ( i=(largo-1),j=0; i>=0; i--,j++ ){
		rut_inv = rut_inv + rut_aux.charAt(i);
	}
	
	var dtexto = "";	
	dtexto = dtexto + rut_inv.charAt(0);	
	dtexto = dtexto + '-';	
	cnt = 0;

	for ( i=1,j=2; i<largo; i++,j++ ){		
		if ( cnt == 3 ){			
			dtexto = dtexto + '.';			
			j++;			
			dtexto = dtexto + rut_inv.charAt(i);			
			cnt = 1;
		}		
		else{				
			dtexto = dtexto + rut_inv.charAt(i);			
			cnt++;
		}	
	}	

	rut_inv = "";	
	for ( i=(dtexto.length-1),j=0; i>=0; i--,j++ ){
		rut_inv = rut_inv + dtexto.charAt(i);
	}
	objRut.value = rut_inv.toUpperCase()
}


function validaRut(texto, inputText)
{
	alert('hola');
	objRut = document.getElementById(inputText);
	var rut_aux = "";
	for ( i=0; i < texto.length ; i++ )
		if ( texto.charAt(i) != ' ' && texto.charAt(i) != '.' && texto.charAt(i) != '-' )
			rut_aux = rut_aux + texto.charAt(i);

	largo = rut_aux.length;

	if(largo == 0)
		return false;

	if (largo<2){
		alert("Debe ingresar el rut completo");
		objRut.focus();
		objRut.select();
		return false;
	}

	for (i=0; i < largo ; i++ )	{
		var letra = rut_aux.charAt(i);

		if (!letra.match(/^([0-9]|[kK])$/)){			
			alert("El RUT ingresado no es válido");
			objRut.focus();
			objRut.select();
			return false;
		}	
	}
	var rut_inv = "";	
	for ( i=(largo-1),j=0; i>=0; i--,j++ ){
		rut_inv = rut_inv + rut_aux.charAt(i);
	}
	
	var dtexto = "";	
	dtexto = dtexto + rut_inv.charAt(0);	
	dtexto = dtexto + '-';	
	cnt = 0;

	for ( i=1,j=2; i<largo; i++,j++ ){		
		if ( cnt == 3 ){			
			dtexto = dtexto + '.';			
			j++;			
			dtexto = dtexto + rut_inv.charAt(i);			
			cnt = 1;
		}		
		else{				
			dtexto = dtexto + rut_inv.charAt(i);			
			cnt++;
		}	
	}	

	rut_inv = "";	
	for ( i=(dtexto.length-1),j=0; i>=0; i--,j++ ){
		rut_inv = rut_inv + dtexto.charAt(i);
	}
	objRut.value = rut_inv.toUpperCase()
	if ( validaDv(rut_aux, inputText) )
			return true;	
	
	return false;
}

function validaDv( texto, inputText )
{
	largo = texto.length;
	if ( largo > 2 ){
		rut_aux = texto.substring(0, largo - 1);
		dv = texto.charAt(largo-1);
	}
	else{
		rut_aux = texto.charAt(0);	
		dv = texto.charAt(largo-1);	
	}
	
	if (rut_aux.match(/k+/)){
		alert("El RUT ingresado no es v�lido")
		document.getElementById(inputText).focus();
		document.getElementById(inputText).select();
		return false;
	}
	/*elementos a variables*/
	document.getElementById("rut").value=rut_aux ;
	document.getElementById("dv").value=dv;
	
	if ( rut_aux == null || dv == null )
		return 0;

	var dvr = '0'
	var suma = 0
	var mult  = 2
	var res = 0
	for (i= rut_aux.length-1 ; i >= 0; i--){	
		suma = suma + rut_aux.charAt(i) * mult		
		if (mult == 7) 
			mult = 2 
		else 
			mult++	
	}
	res = suma % 11	
	if (res==1)		
		dvr = 'k'	
	else if (res==0)		
		dvr = '0'	
	else{		
		dvi = 11-res		
		dvr = dvi + ""	
	}

	if (dvr != dv.toLowerCase()){
		alert("D�gito Verificador incorrecto")
		document.getElementById(inputText).focus();
		document.getElementById(inputText).select();
		return false;
	}

	return true;
}



function cuadroAut(){

	var link_aux = "https://zeus.sii.cl/AUT2000/InicioAutenticacion/IngresoCertificado.html?https://misii.sii.cl/cgi_misii/siihome.cgi";
//	var link_aux = "http://www.sii.cl/pagina/actualizada/suspension/hpi_suspension.htm";
	
	/*Los campos en el formalulario 
	por motivos de compatibilidad deben llevar name
	*/
	var var_aux = "<div id='autDivTop'></div><div id='autDivMid' style='text-align:left;font:12px arial;color:#FFFFFF;'>"
	var_aux +="<div><form id='myform' name='myform' action='https://misii.sii.cl/cgi_misii/siihome.cgi' method='post' style='display:inline' />";
//	var_aux +="<form id='myform' name='myform' action='http://www.sii.cl/pagina/actualizada/suspension/hpi_suspension.htm' method='post' style='display:inline' />";
	var_aux +="<input type='hidden' name='rut' id='rut'/>";
	var_aux +="<input type='hidden' name='dv'  id='dv' />";
	var_aux +="<input type='hidden' name='referencia' value=''/>";
	var aut = autenticado();

	if (aut==0){
		var_aux += "<div style='padding-left:45px; padding-top:35px;'><a href='https://zeus04.sii.cl/AUT2000/InicioAutenticacion/IngresoRutClave.html?https://misii.sii.cl/cgi_misii/siihome.cgi'><img src='img/btn_ingresar.gif' title='Ingresar'></a></div>" 
        var_aux += "<div style='text-align:center;vertical-align:bottom;'><p style='text-align:left; margin-left:32px;'><a href='" + link_aux + "' style='color:#FFFFFF;font:11px arial; margin-bottom:0px'>Identificarse con Certificado Digital</a></p></div></div>"
	}
	else{
		var_aux += "<div style='padding-left:27px; padding-top:35px; font-weight:bold;'>Rut:&nbsp;&nbsp;"+ rut_aut() +"</div><ul><li><a href='https://misii.sii.cl/cgi_misii/siihome.cgi' style='color:#FFFFFF;text-align:center;font:11px arial;'>Volver a Mi SII</a></li><li><a href='https://zeus.sii.cl/AUT2000/InicioAutenticacion/IngresoRutClave.html?https://misii.sii.cl/cgi_misii/siihome.cgi' style='color:#FFFFFF;text-align:center;font:11px arial;'>Identificar Nuevo Contribuyente</a></li><li><a href='https://zeus.sii.cl/cgi_AUT2000/autTermino.cgi'style='color:#FFFFFF;text-align:center;font:11px arial;'>Cerrar Sesi&oacute;n</a></li></ul>"
    	var_aux +="</form></div>";
//		var_aux += "<strong>Rut:"+ rut_aut() +"</strong><ul><li><strong><a href='http://www.sii.cl/pagina/actualizada/suspension/hpi_suspension.htm'>Volver a Mi SII</a></strong></li><li><a href='https://zeus.sii.cl/AUT2000/InicioAutenticacion/IngresoRutClave.html?https://misii.sii.cl/cgi_misii/siihome.cgi'>Identificar Nuevo Contribuyente</a> </li><li><a href='http://www.sii.cl/pagina/actualizada/suspension/hpi_suspension.htm'>Cerrar Sesi&oacute;n</a></li></ul><br />"
	}
	

	var_aux +="</div><div id='autDivBot'> <p style='margin-top:0px; text-align:left; margin-left:32px;'><a href='https://zeus.sii.cl/AUT2000/ObtenerClave/IngresoRut.html' style='font:11px arial;color:#FFFFFF;'>Obtener Clave</a><br /><a href='https://zeus.sii.cl/AUT2000/ClavesPerdidas/IngresoRut.html' style='font:11px arial;color:#FFFFFF;'>Recuperar Clave</a></p></div>"
//	var_aux +="</div><div id='autDivBot'><strong><a href='http://www.sii.cl/pagina/actualizada/suspension/hpi_suspension.htm' style='color:#FFFFFF;line-height:11px;'>Obtener Clave Secreta</a><br /><a href='http://www.sii.cl/pagina/actualizada/suspension/hpi_suspension.htm' style='color:#FFFFFF;line-height:11px;'>Recuperar Clave Secreta</a></strong></div>"
//	var_aux +="<div style='text-align:center;font:12px arial;margin-top:7px'><a href='https://home.sii.cl'><img src='/admin/img/pag_segura.jpg' /></a></div>"


//	var_aux +="<div style='text-align:center;font:12px arial;margin-top:7px'><a href="+'"'+"javascript:link_cert('https://home.sii.cl','/home_page/click/sii')"+'"'+"><img src='/admin/img/pag_segura.jpg' /></a></div>"

	document.write(var_aux);
	
	/*Agrega campos aut*/
	//inicializa();
}

function ejecuta_opcion()
{
	if (valida()) {document.myform.submit();}
}

function cuadroAut2(){

   /* eval�a si MiSii est� suspendido en la Barra de Navegaci�n, si es as�, suspende la caja de autenticaci�n */
   if ( menu.muestraLink(1,0).indexOf("suspension") == -1 )
   {
      linkCertDig = "https://zeus.sii.cl/AUT2000/InicioAutenticacion/IngresoCertificado.html" + window.location.search;
      linkBoton = "javascript:ejecuta_opcion()";
   }
   else
   {
      linkCertDig = "http://www.sii.cl/pagina/actualizada/suspension/hpi_suspension.htm";
      linkBoton = "http://www.sii.cl/pagina/actualizada/suspension/hpi_suspension.htm";
   }
	
	/*Los campos en el formalulario por motivos de compatibilidad deben llevar name	*/
	var var_aux = "<div id='autDivTop'></div><div id='autDivMid2' style='text-align:left;font:12px arial;color:#FFFFFF;'>"
	var_aux +="<form id='myform' name='myform' action='https://zeus.sii.cl/cgi_AUT2000/autInicio.cgi' method='post' style='display:inline' />";
	var_aux +="<input type='hidden' name='rut' id='rut'/>";
	var_aux +="<input type='hidden' name='dv'  id='dv' />";
	var_aux +="<input type='hidden' name='referencia' value=''/>";

    var_aux +="&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; RUT  &nbsp;&nbsp;&nbsp;<input id='rut' type='text' class='input' size='12' maxlength='12' onblur='javascript:formatoRut(this.value, this.id)' />  <br /><br />&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Clave &nbsp;<input id='clave' name='clave' type='password' class='input' size='12' maxlenght='12' /> <br /> <br />"
	var_aux += "<div style='padding-left:45px; '><a href='" + linkBoton + "'><img src='https://zeus.sii.cl/admin/img/btn_ingresar.gif' title='Ingresar'></a></div>" 
	
	var_aux +="<script type='text/javascript'>document.getElementById('rut').focus();</script>"
	
	var_aux +="</form>";
	var_aux +="</div><div style='clear:both;'></div><div id='autDivBot' align='center'> <div style='text-align:left;padding-top:13px; padding-left:20px;'><a href='" + linkCertDig + "' style='color:#FFFFFF;text-align:center;font:12px arial;margin-bottom:0px'>Identificarse con Certificado Digital</a></div><div style='clear:both;'></div></div>"


	document.write(var_aux);
	
	/*Agrega campos aut*/
	//inicializa();
}

function quitarFrame()
{
if (self.parent.frames.length != 0)
   self.parent.location=document.location.href;
}
quitarFrame();
