function ActivarBtn() {
			document.PersonasF.BtnPersona.disabled = false;
			document.MateriasF.BtnMateria.disabled = false;
			document.gruposF.BtnGrupo.disabled = false;

		}


function DesactivarBtn() {
			document.PersonasF.BtnPersona.disabled = true;
			document.MateriasF.BtnMateria.disabled = true;
			document.gruposF.BtnGrupo.disabled = true;			
		}

		var x = 0;

function controlador(){


	if (x == 0) {

			x = x + 1;

			DesactivarBtn();


					} 


		else {

				ActivarBtn();


			}



						}		

