// JavaScript Document
function defineAction(act,cate){
	var form = document.getElementById('form1');
	switch(act){
		case 'update':
			form.action="?page=orderupdate&cart=" + cate;
			form.submit();
			break;
		case 'delete':
			var answer = confirm("Do you want to delete the items from your shopping cart?");
			if(answer){
				form.action="?page=orderdelete&cart=" + cate;
				form.submit();
			}
			break;
		case 'checkout':
			form.action="?page=shipment&cart=" + cate;
			form.submit();
			break;
	} 
}

function validfun() {

	var frm_elementf= document.getElementById('txtfirstname');
	var frm_elementl= document.getElementById('txtlastname');
	var frm_elemente= document.getElementById('txtemail');
	var frm_elementa= document.getElementById('txtaddress');
	var frm_elementc= document.getElementById('txtpostcode');
	var frm_elementci= document.getElementById('txtcity');
	var frm_elementp= document.getElementById('txtphone');
	var frm_elementfa= document.getElementById('txtfax');
	var frm_elementpw= document.getElementById('txtpwd');
	var frm_elementcpw= document.getElementById('txtcpwd');
	
	if ((frm_elementf.value.length < 1 ) ||
	(frm_elementl.value.length < 1) || 
	(frm_elemente.value.length < 1) || 
	(frm_elementa.value.length < 1) || 
	((document.form.sex[0].checked == false ) && ( document.form.sex[1].checked == false )) ||
	(document.form.txtcountry.selectedIndex == 0 ) || (document.form.txtcountry.selectedIndex == '' )
	(frm_elementc.value.length < 1) || 
	(frm_elementci.value.length < 1) || 
	(frm_elementp.value.length < 1) || 
	(frm_elementfa.value.length < 1) || 
	((frm_elementpw.value) != (frm_elementcpw.value) ))
	{				
		alert("Please fill out all the fields.");
		 return false;
	}
	else
	{
		return true;
	}
}