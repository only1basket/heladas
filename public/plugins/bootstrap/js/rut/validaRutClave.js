function validaCampos() {
  var f=document.myform;
  var rut=trimobj(f.rut);
  var rut2='';
  var dv=trimobj(f.dv).toUpperCase();
  f.dv.value=dv;
  var clave=f.clave.value;
  j=0;
  for (i=0;i<=rut.length;i++){
      if (j==0 && rut.substr(i,1)=='0'){
         j=0;
      }else{
         rut2=rut2+rut.substr(i,1);
         j=1;
      }
  } 
  rut=rut2;
  document.myform.rut.value=rut2;
  if (rut=='' || !isNumero(rut) || rut*1==0) {
    alert('Rut Inválido');
    return (false);
  }else if ((!isNumero(dv) && (dv != "K")) || (dv == "")){
    alert('Dígito Verificador inválido');
    return (false);
  }else if (!validaM11(rut,dv)){
    alert('Dígito Verificador Erróneo');
    return(false);
  }else if (clave==''){
    alert('Debe ingresar Clave');
	document.getElementById("clave").focus();
    return(false);
  }
  return (true);
}

function valida(){

  asignaReferencia();

  if (!validaRut(document.getElementById("rut").value,document.getElementById("rut").id)) {
	return false;
  }

  if (validaCampos()) {
	return true;
  }

  return false;
}
