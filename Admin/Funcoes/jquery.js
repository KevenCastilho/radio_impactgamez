function MostraEscondeStatus()
		{
		if(document.getElementById("Status").style.display == "none")
			{
			$("#Status").fadeIn();
			}else{
			$("#Status").fadeOut();
			}
		}
		
var MostraID=new Array();
function MostraEsconde(ID)
	{
	
	if(MostraID[ID] == '')
		{
		MostraID[ID] = 2;
		}
	
	ME = document.getElementById('Local_' + ID);
	NME = document.getElementById('MostraEsconde_' + ID);
	
	if(MostraID[ID] == 2)
		{
		
		NME.innerHTML = 'Mostrar Detalhes';
		ME.style.display = 'none';
		
		MostraID[ID] = 1;
		
		}else{
		
		NME.innerHTML = 'Esconder Detalhes';
		ME.style.display = '';
		
		MostraID[ID] = 2;
		
		}
	}