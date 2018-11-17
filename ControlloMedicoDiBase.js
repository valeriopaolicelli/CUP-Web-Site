function Controllo()
{var username=document.registrazionemedico.username.value;
 var lusername=document.registrazionemedico.username.value.length;
 var idusername="checkusername";
 var okusername="true";
 var password=document.registrazionemedico.password.value;
 var idpassword="checkpassword";
 var okpassword="true";
 var repassword=document.registrazionemedico.repassword.value;
 var idrepassword="checkrepassword";
 var okrepassword="true";
 var email=document.registrazionemedico.email.value;
 var idemail="checkemail";
 var okemail="true";
 var nome=document.registrazionemedico.nome.value;
 var idnome="checknome";
 var oknome="true";
 var cognome=document.registrazionemedico.cognome.value;
 var idcognome="checkcognome";
 var okcognome="true";
 var cf=document.registrazionemedico.cf.value;
 var idcf="checkcf";
 var okcf="true";
 var giornodinascita=document.registrazionemedico.giornodinascita.value;
 var mesedinascita=document.registrazionemedico.mesedinascita.value;
 var annodinascita=document.registrazionemedico.annodinascita.value;
 var iddatadinascita="checkdatadinascita";
 var okdatadinascita="true";
 var luogodinascita=document.registrazionemedico.luogodinascita.value;
 var idluogodinascita="checkluogodinascita";
 var okluogodinascita="true"; 
 var residenza=document.registrazionemedico.residenza.value;
 var idresidenza="checkresidenza";
 var okresidenza="true";
 var indirizzo=document.registrazionemedico.indirizzo.value;
 var idindirizzo="checkindirizzo";
 var okindirizzo="true";
 var numerocivico=document.registrazionemedico.numerocivico.value;
 var cap=document.registrazionemedico.cap.value;
 var idcap="checkcap";
 var okcap="true";
 var imgokuser=document.createElement("IMG");
 var imgnotokuser=document.createElement("IMG");
 var imgokpassw=document.createElement("IMG");
 var imgnotokpassw=document.createElement("IMG");
 var imgokrepassw=document.createElement("IMG");
 var imgnotokrepassw=document.createElement("IMG");
 var imgokemail=document.createElement("IMG");
 var imgnotokemail=document.createElement("IMG");
 var imgoknome=document.createElement("IMG");
 var imgnotoknome=document.createElement("IMG");
 var imgokcognome=document.createElement("IMG");
 var imgnotokcognome=document.createElement("IMG");
 var imgokcf=document.createElement("IMG");
 var imgnotokcf=document.createElement("IMG");
 var imgokdatadinascita=document.createElement("IMG");
 var imgnotokdatadinascita=document.createElement("IMG");
 var imgokluogodinascita=document.createElement("IMG");
 var imgnotokluogodinascita=document.createElement("IMG");
 var imgokresidenza=document.createElement("IMG");
 var imgnotokresidenza=document.createElement("IMG");
 var imgokindirizzo=document.createElement("IMG");
 var imgnotokindirizzo=document.createElement("IMG");
 var imgokcap=document.createElement("IMG");
 var imgnotokcap=document.createElement("IMG");
 imgokuser.setAttribute("src","Immagini/Ok.png");
 imgnotokuser.setAttribute("src","Immagini/Err.png");
 imgokpassw.setAttribute("src","Immagini/Ok.png");
 imgnotokpassw.setAttribute("src","Immagini/Err.png");
 imgokrepassw.setAttribute("src","Immagini/Ok.png");
 imgnotokrepassw.setAttribute("src","Immagini/Err.png");
 imgokemail.setAttribute("src","Immagini/Ok.png");
 imgnotokemail.setAttribute("src","Immagini/Err.png");
 imgoknome.setAttribute("src","Immagini/Ok.png");
 imgnotoknome.setAttribute("src","Immagini/Err.png");
 imgokcognome.setAttribute("src","Immagini/Ok.png");
 imgnotokcognome.setAttribute("src","Immagini/Err.png");
 imgokcf.setAttribute("src","Immagini/Ok.png");
 imgnotokcf.setAttribute("src","Immagini/Err.png");
 imgokdatadinascita.setAttribute("src","Immagini/Ok.png");
 imgnotokdatadinascita.setAttribute("src","Immagini/Err.png");
 imgokluogodinascita.setAttribute("src","Immagini/Ok.png");
 imgnotokluogodinascita.setAttribute("src","Immagini/Err.png"); 
 imgokresidenza.setAttribute("src","Immagini/Ok.png");
 imgnotokresidenza.setAttribute("src","Immagini/Err.png");
 imgokindirizzo.setAttribute("src","Immagini/Ok.png");
 imgnotokindirizzo.setAttribute("src","Immagini/Err.png");
 imgokcap.setAttribute("src","Immagini/Ok.png");
 imgnotokcap.setAttribute("src","Immagini/Err.png");
  
 if(username=="Inserisci il nome utente"){document.getElementById(idusername).innerHTML="";
                                          document.getElementById(idusername).appendChild(imgnotokuser);
                                          alert("Il campo 'Username' risulta vuoto.");
                                          document.registrazionemedico.username.focus();
                                          okusername="false";
				                          return false;}				  
 if(lusername<8){document.getElementById(idusername).innerHTML = "";
                 document.getElementById(idusername).appendChild(imgnotokuser);
                 alert("L'Username deve avere almeno 8 caratteri.");
                 document.registrazionemedico.username.focus();
                 okusername="false";
				 return false;}
 if(okusername=="true"){document.getElementById(idusername).innerHTML = "";
                        document.getElementById(idusername).appendChild(imgokuser);}
 if(password=="Inserisci la password"){document.getElementById(idpassword).innerHTML="";
                                       document.getElementById(idrepassword).innerHTML=""; 
									   document.getElementById(idpassword).appendChild(imgnotokpassw);
                                       document.getElementById(idrepassword).appendChild(imgnotokrepassw);
                                       alert("Il campo 'Password' risulta vuoto.");
                                       document.registrazionemedico.password.focus();
                                       okpassword="false";
									   return false;}				  
 if(password!=repassword){document.getElementById(idpassword).innerHTML="";
                          document.getElementById(idrepassword).innerHTML=""; 
						  document.getElementById(idpassword).appendChild(imgnotokpassw);
                          document.getElementById(idrepassword).appendChild(imgnotokrepassw);
                          alert("Le passowrd inserite non coincidono.");
                          document.registrazionemedico.password.focus();
                          okpassword="false";
						  return false;}
 if(okpassword=="true"){document.getElementById(idpassword).innerHTML="";
                        document.getElementById(idrepassword).innerHTML="";
                        document.getElementById(idpassword).appendChild(imgokpassw);
                        document.getElementById(idrepassword).appendChild(imgokrepassw);}						  
 if(email=="Inserisci la mail"){document.getElementById(idemail).innerHTML="";
                                document.getElementById(idemail).appendChild(imgnotokemail);
                                alert("Il campo 'Email' risulta vuoto.");
                                document.registrazionemedico.email.focus();
                                okemail="false";
								return false;}
 if(okemail=="true"){document.getElementById(idemail).innerHTML = "";
                     document.getElementById(idemail).appendChild(imgokemail);
					 document.registrazionemedico.email.value=document.registrazionemedico.email.value.toUpperCase();}								
 if(nome=="Inserisci il nome"){document.getElementById(idnome).innerHTML="";
                               document.getElementById(idnome).appendChild(imgnotoknome);
                               alert("Il campo 'Nome' risulta vuoto.");
                               document.registrazionemedico.nome.focus();
                               oknome="false";
							   return false;}
 if(oknome=="true"){document.getElementById(idnome).innerHTML="";
                    document.getElementById(idnome).appendChild(imgoknome);
					document.registrazionemedico.nome.value=document.registrazionemedico.nome.value.toUpperCase();}						  
 if(cognome=="Inserisci il cognome"){document.getElementById(idcognome).innerHTML="";
                                     document.getElementById(idcognome).appendChild(imgnotokcognome);
                                     alert("Il campo 'Cognome' risulta vuoto.");
                                     document.registrazionemedico.cognome.focus();
                                     okcognome="false";
									 return false;}
 if(okcognome=="true"){document.getElementById(idcognome).innerHTML="";
                       document.getElementById(idcognome).appendChild(imgokcognome);
					   document.registrazionemedico.cognome.value=document.registrazionemedico.cognome.value.toUpperCase();}										 
 if(cf=="Inserisci il codice fiscale"){document.getElementById(idcf).innerHTML="";
                                       document.getElementById(idcf).appendChild(imgnotokcf);
                                       alert("Il campo 'Codice Fiscale' risulta vuoto.");
                                       document.registrazionemedico.cf.focus();
                                       okcf="false";
									   return false;}
 if(okcf=="true"){document.getElementById(idcf).innerHTML="";
                  document.getElementById(idcf).appendChild(imgokcf);
				  document.registrazionemedico.cf.value=document.registrazionemedico.cf.value.toUpperCase();}										   
 if(giornodinascita=="GIORNO"){document.getElementById(iddatadinascita).innerHTML="";
                               document.getElementById(iddatadinascita).appendChild(imgnotokdatadinascita);
                               alert("Il campo 'GIORNO' risulta vuoto.");
                               document.registrazionemedico.giornodinascita.focus();
                               okdatadinascita="false";
							   return false;}
 if(mesedinascita=="MESE"){document.getElementById(iddatadinascita).innerHTML="";
                           document.getElementById(iddatadinascita).appendChild(imgnotokdatadinascita);
                           alert("Il campo 'MESE' risulta vuoto.");
                           document.registrazionemedico.mesedinascita.focus();
                           okdatadinascita="false";
						   return false;}
 if(annodinascita=="ANNO"){document.getElementById(iddatadinascita).innerHTML="";
                           document.getElementById(iddatadinascita).appendChild(imgnotokdatadinascita);
                           alert("Il campo 'ANNO' risulta vuoto.");
                           document.registrazionemedico.annodinascita.focus();
                           okdatadinascita="false";
						   return false;}
 if(isNaN(annodinascita)){document.getElementById(iddatadinascita).innerHTML="";
                          document.getElementById(iddatadinascita).appendChild(imgnotokdatadinascita);
                          alert("L'anno di nascita deve essere un numero!");
                          document.registrazionemedico.annodinascita.focus();
						  okdatadinascita="false";
						  return false;}						   
 if(okdatadinascita=="true"){document.getElementById(iddatadinascita).innerHTML="";
                             document.getElementById(iddatadinascita).appendChild(imgokdatadinascita);}							   
 if(luogodinascita=="Inserisci il luogo di nascita"){document.getElementById(idluogodinascita).innerHTML="";
                                                     document.getElementById(idluogodinascita).appendChild(imgnotokluogodinascita);
                                                     alert("Il campo 'Luogo Di Nacita' risulta vuoto.");
                                                     document.registrazionemedico.luogodinascita.focus();
                                                     okluogodinascita="false";
						                             return false;}
 if(okluogodinascita=="true"){document.getElementById(idluogodinascita).innerHTML="";
                             document.getElementById(idluogodinascita).appendChild(imgokluogodinascita);
							 document.registrazionemedico.luogodinascita.value=document.registrazionemedico.luogodinascita.value.toUpperCase();}								
 if(residenza=="Inserisci la residenza"){document.getElementById(idresidenza).innerHTML="";
                                         document.getElementById(idresidenza).appendChild(imgnotokresidenza);
                                         alert("Il campo 'Residenza' risulta vuoto.");
                                         document.registrazionemedico.residenza.focus();
                                         okresidenza="false";
				                         return false;}
 if(okresidenza=="true"){document.getElementById(idresidenza).innerHTML="";
                         document.getElementById(idresidenza).appendChild(imgokresidenza);
						 document.registrazionemedico.residenza.value=document.registrazionemedico.residenza.value.toUpperCase();}											 
 if(indirizzo=="Inserisci la via"){document.getElementById(idindirizzo).innerHTML="";
                                   document.getElementById(idindirizzo).appendChild(imgnotokindirizzo);
                                   alert("Il campo 'Indirizzo' risulta vuoto.");
                                   document.registrazionemedico.indirizzo.focus();
                                   okindirizzo="false";
								   return false;}
 if(numerocivico=="Numero"){document.getElementById(idindirizzo).innerHTML="";
                            document.getElementById(idindirizzo).appendChild(imgnotokindirizzo);
                            alert("Il campo 'Numero' risulta vuoto.");
                            document.registrazionemedico.numerocivico.focus();
                            okindirizzo="false";
						    return false;}
 if(isNaN(numerocivico)){document.getElementById(idindirizzo).innerHTML="";
                         document.getElementById(idindirizzo).appendChild(imgnotokindirizzo);
                         alert("Il Numero civico deve essere un numero!");
                         document.registrazionemedico.numerocivico.focus();
						 okindirizzo="false";
						 return false;}			
 if(okindirizzo=="true"){document.getElementById(idindirizzo).innerHTML="";
                         document.getElementById(idindirizzo).appendChild(imgokindirizzo);
						 document.registrazionemedico.indirizzo.value=document.registrazionemedico.indirizzo.value.toUpperCase();}							 
 if(cap=="CAP"){document.getElementById(idcap).innerHTML="";
                document.getElementById(idcap).appendChild(imgnotokcap);
                alert("Il campo 'CAP' risulta vuoto.");
                document.registrazionemedico.cap.focus();
                okcap="false";
				return false;}
 if(isNaN(cap)){document.getElementById(idcap).innerHTML="";
                document.getElementById(idcap).appendChild(imgnotokcap);
                alert("Il CAP deve essere un numero!");
                document.registrazionemedico.cap.focus();
				okcap="false";
				return false;}				
 if(okcap=="true"){document.getElementById(idcap).innerHTML="";
                   document.getElementById(idcap).appendChild(imgokcap);}				 
 if(!document.registrazionemedico.accetto.checked){alert("Non hai accettato le condizioni per la registrazione.");
                                                   document.registrazionemedico.accetto.focus();
                                                   return false;}
}
function unlock(c,i)
{if(c.checked){document.getElementById(i).disabled=false;}
 else{document.getElementById(i).disabled = 'disabled';}
}