
function display(srcf,srcd,pbig,psmall,d,tgtUrl)
{
	var ret ='';
	ret='<a href="'+tgtUrl;
 	ret+='?grp='+srcd;
    ret+='&fromurl='+srcf;
    ret+='&pic=img/'+pbig;
    ret+='&descr='+d+'" ';
    ret+=' title="'+d+' - Click for full-sized Picture">';
	ret+='<img src="img/'+ psmall+'" ';
    ret+=' alt="'+d+'" ';
    ret+=' class="img-responsive img-rounded block " />';
    ret+='</a>';
    document.write(ret);
 }
function display140(srcf,srcd,pbig,psmall,d,tgtUrl)
{
	var ret ='';
	ret='<a href="'+tgtUrl;
 	ret+='?grp='+srcd;
    ret+='&fromurl='+srcf;
    ret+='&pic=img/'+pbig;
    ret+='&descr='+d;
	ret+='&prv='+prv;
	ret+='&nxt='+nxt;
	ret+='"';
    ret+=' title="'+d+' - Click for full-sized Picture">';
	ret+='<img src="img/'+ psmall+'" ';
    ret+=' alt="'+d+'" ';
    ret+=' class="tnpic img-rounded block " />';
    ret+='</a>';
    document.write(ret);
 }

function display230(srcf,srcd,pbig,psmall,d,tgtUrl)
{
	var ret ='';
	ret='<a href="'+tgtUrl;
 	ret+='?grp='+srcd;
    ret+='&fromurl='+srcf;
    ret+='&pic=img/'+pbig;
    ret+='&descr='+d+'" ';
    ret+=' title="'+d+' - Click for full-sized Picture">';
	ret+='<img src="img/'+ psmall+'" ';
    ret+=' alt="'+d+'" ';
    ret+=' class="rhspic img-rounded block" />';
    ret+='</a>';
    document.write(ret);
 }
 function querySt(Key)
 {
    var ret='',url = window.location.href;
    KeysValues = url.split(/[\?&]+/);
    for (i = 0; i < KeysValues.length; i++)
	{
        KeyValue = KeysValues[i].split("=");
        if (KeyValue[0] == Key)
		{
            ret=KeyValue[1];
        }
    }
	return ret.replace(/%20/g, " ").replace(/%C2/g, "&copy;").replace(/%A9/g, " ")
}
