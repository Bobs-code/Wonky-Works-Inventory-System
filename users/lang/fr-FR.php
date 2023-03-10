<?php
/*
Do not put any content above the opening PHP tag
TO CREATE A NEW LANGUAGE, COPY THE en-us.php to your own localization code name.
We are going to keep these files in the iso xx-xx format because that will also
allow us to autoformat numbers on the sites.

PLEASE put your name somewhere at the top of the language file so we can get in touch with
you to update it and thank you for your hard work!

PLEASE NOTE: DO NOT ADD RANDOM KEYS in the middle of the translations.  In order to make it easier to tell what language keys are missing, from this point forward, we are going to add all new language keys at the BOTTOM of this file. The number of lines in your language file will tell you which keys still need to be translated.  If you have questions please ask on the forums or on Discord.

UserSpice
An Open Source PHP User Management System
by the UserSpice Team at http://UserSpice.com

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

/*
%m1% - Dymamic markers which are replaced at run time by the relevant index.
*/

$lang = array();
//important strings
//You defiitely want to customize these for your language
$lang = array_merge($lang,array(
"THIS_LANGUAGE"	=>"French",
"THIS_CODE"			=>"en-US",
"MISSING_TEXT"	=>"Texte manquant",
));

//Database Menus
$lang = array_merge($lang,array(
"MENU_HOME"			=> "Accueil",
"MENU_HELP"			=> "Aide",
"MENU_ACCOUNT"	=> "Compte",
"MENU_DASH"			=> "Tableau de bord administrateur",
"MENU_USER_MGR"	=> "Gestion des utilisateurs",
"MENU_PAGE_MGR"	=> "Gestion de page",
"MENU_PERM_MGR"	=> "Gestion des autorisations",
"MENU_MSGS_MGR"	=> "Gestionnaire de messages",
"MENU_LOGS_MGR"	=> "Journaux syst??me",
"MENU_LOGOUT"		=> "Se d??connecter",
));

// Signup
$lang = array_merge($lang,array(
	"SIGNUP_TEXT"					=> "S'inscrire",
	"SIGNUP_BUTTONTEXT"		=> "S'inscrire",
	"SIGNUP_AUDITTEXT"		=> "Inscrit",
	));

// Signin
$lang = array_merge($lang,array(
	"SIGNIN_FAIL"				=> "** ??CHEC DE LA CONNEXION **",
	"SIGNIN_PLEASE_CHK" => "Veuillez v??rifier vos identifiants et mots de passe puis r??-essayer",
	"SIGNIN_UORE"				=> "Nom d'utilisateur ou courriel",
	"SIGNIN_PASS"				=> "Mot de passe",
	"SIGNIN_TITLE"			=> "Veuillez vous connecter",
	"SIGNIN_TEXT"				=> "S'identifier",
	"SIGNOUT_TEXT"			=> "se d??connecter",
	"SIGNIN_BUTTONTEXT"	=> "S'identifier",
	"SIGNIN_REMEMBER"		=> "Se souvenir de moi",
	"SIGNIN_AUDITTEXT"	=> "Connect??",
	"SIGNIN_FORGOTPASS"	=>"Mot de passe oubli??",
	"SIGNOUT_AUDITTEXT"	=> "D??connect??",
	));

// Account Page
$lang = array_merge($lang,array(
	"ACCT_EDIT"					=> "Editer les infos du compte",
	"ACCT_2FA"					=> "G??rer l'authentification ?? 2 facteurs",
	"ACCT_SESS"					=> "G??rer les sessions",
	"ACCT_HOME"					=> "Accueil du compte",
	"ACCT_SINCE"				=> "Membre depuis",
	"ACCT_LOGINS"				=> "Nombre de connexions",
	"ACCT_SESSIONS"			=> "Nombre de sessions actives",
	"ACCT_MNG_SES"			=> "Cliquez sur le bouton G??rer les sessions dans la barre lat??rale gauche pour plus d'informations.",
	));

	//General Terms
	$lang = array_merge($lang,array(
		"GEN_ENABLED"			=> "Activ??",
		"GEN_DISABLED"		=> "D??sactiv??",
		"GEN_ENABLE"			=> "Activer",
		"GEN_DISABLE"			=> "D??sactiver",
		"GEN_NO"					=> "Non",
		"GEN_YES"					=> "Oui",
		"GEN_MIN"					=> "min",
		"GEN_MAX"					=> "max",
		"GEN_CHAR"				=> "caract??res", //as in characters
		"GEN_SUBMIT"			=> "Soumettre",
		"GEN_MANAGE"			=> "G??rer",
		"GEN_VERIFY"			=> "V??rifier",
		"GEN_SESSION"			=> "Session",
		"GEN_SESSIONS"		=> "Sessions",
		"GEN_Courriel"				=> "Courriel", // probablement courriel en France
		"GEN_FNAME"				=> "Pr??nom",
		"GEN_LNAME"				=> "Nom de famille",
		"GEN_UNAME"				=> "Nom d'utilisateur",
		"GEN_PASS"				=> "Mot de passe",
		"GEN_MSG"					=> "Message",
		"GEN_TODAY"				=> "aujourd'hui",
		"GEN_CLOSE"				=> "Fermer",
		"GEN_CANCEL"			=> "Annuler",
		"GEN_CHECK"				=> "[ Tout s??lectionner/D??s??lectionner ]",
		"GEN_WITH"				=> "Avec",
		"GEN_UPDATED"			=> "Mis ?? jour",
		"GEN_UPDATE"			=> "Mettre ?? jour",
		"GEN_BY"					=> "Par",
		"GEN_FUNCTIONS"		=> "Fonctions",
		"GEN_NUMBER"			=> "Nombre",
		"GEN_NUMBERS"			=> "Nombres",
		"GEN_INFO"				=> "Information",
		"GEN_REC"					=> "Enregistr??",
		"GEN_DEL"					=> "Effac??",
		"GEN_NOT_AVAIL"		=> "Non disponible",
		"GEN_AVAIL"				=> "Disponible",
		"GEN_BACK"				=> "Retour",
		"GEN_RESET"				=> "Reinitialiser",
		"GEN_REQ"					=> "Requis",
		"GEN_AND"					=> "et",
		"GEN_SAME"				=> "doit ??tre le m??me",
		));

//validation class
	$lang = array_merge($lang,array(
		"VAL_SAME"				=> "doit ??tre le m??me",
		"VAL_EXISTS"			=> "existe d??j??. Merci d'en choisir un autre",
		"VAL_DB"					=> "erreur de la base de donn??es",
		"VAL_NUM"					=> "doit ??tre un nombre",
		"VAL_INT"					=> "doit ??tre un nombre entier",
		"VAL_Courriel"				=> "doit ??tre une adresse courriel valide",
		"VAL_NO_Courriel"		=> "ne peut pas ??tre une adresse courriel",
		"VAL_SERVER"			=> "Doit ??tre un serveur valide",
		"VAL_LESS"				=> "Doit ??tre inf??rieur ??",
		"VAL_GREAT"				=> "Doit ??tre sup??rieur ??",
		"VAL_LESS_EQ"			=> "Doit ??tre inf??rieur ou ??gal ??",
		"VAL_GREAT_EQ"		=> "Doit ??tre sup??rieur ou ??gal ??",
		"VAL_NOT_EQ"			=> "Ne doit pas ??tre ??gal ??",
		"VAL_EQ"					=> "Doit ??tre ??gal ??",
		"VAL_TZ"					=> "doit ??tre un nom de fuseau horaire valide",
		"VAL_MUST"				=> "Doit ??tre",
		"VAL_MUST_LIST"		=> "Doit ??tre l'un des suivants",
		"VAL_TIME"				=> "Doit ??tre une heure valide",
		"VAL_SEL"					=> "n'est pas une s??lection valide",
		"VAL_NA_PHONE"		=> "doit ??tre un num??ro de t??l??phone nord-am??ricain valide",
	));

		//Time
	$lang = array_merge($lang,array(
		"T_YEARS"			=> "Ann??es",
		"T_YEAR"			=> "Ann??e",
		"T_MONTHS"		=> "Mois",
		"T_MONTH"			=> "Mois",
		"T_WEEKS"			=> "Semaines",
		"T_WEEK"			=> "Semaine",
		"T_DAYS"			=> "Jours",
		"T_DAY"				=> "Jour",
		"T_HOURS"			=> "Heures",
		"T_HOUR"			=> "Heure",
		"T_MINUTES"		=> "Minutes",
		"T_MINUTE"		=> "Minute",
		"T_SECONDS"		=> "Secondes",
		"T_SECOND"		=> "Seconde",
		));


		//Passwords
	$lang = array_merge($lang,array(
		"PW_NEW"		=> "Nouveau mot de passe",
		"PW_OLD"		=> "Ancien mot de passe",
		"PW_CONF"		=> "Confirmer le mot de passe",
		"PW_RESET"	=> "R??initialiser le mot de passe",
		"PW_UPD"		=> "Mot de passe mis ?? jour",
		"PW_SHOULD"	=> "Le mot de passe devrait...",
		"PW_SHOW"		=> "Montrer le mot de passe",
		"PW_SHOWS"	=> "Montrer les mots de passe",
		));


		//Join
	$lang = array_merge($lang,array(
		"JOIN_SUC"			=> "Bienvenue ",
		"JOIN_THANKS"		=> "Merci pour votre inscription!",
		"JOIN_HAVE"			=> "avoir au moins ",
		"JOIN_CAP"			=> " lettre majuscule",
		"JOIN_TWICE"		=> "??tre tap?? deux fois correctement",
		"JOIN_CLOSED"		=> "Inscription malheureusement d??sactiv??e en ce moment. S.V.P. contacter l'administrateur du site si vous avez des questions ou des probl??mes.",
		"JOIN_TC"				=> "Termes et conditions de l'inscription",
		"JOIN_ACCEPTTC" => "J'accepte les termes et conditions de l'utilisateur",
		"JOIN_CHANGED"	=> "Nos termes ont ??t?? modifi??s",
		"JOIN_ACCEPT" 	=> "Accepter les termes et conditions pour utilisateur et continuer",
		));

		//Sessions
	$lang = array_merge($lang,array(
		"SESS_SUC"	=> "Ferm?? avec succ??s ",
		));

		//Messages
	$lang = array_merge($lang,array(
		"MSG_SENT"			=> "Message envoy??!",
		"MSG_MASS"			=> "Votre message collectif a ??t?? envoy??!",
		"MSG_NEW"				=> "Nouveau message",
		"MSG_NEW_MASS"	=> "Nouveau message collectif",
		"MSG_CONV"			=> "Conversations",
		"MSG_NO_CONV"		=> "Pas de conversations",
		"MSG_NO_ARC"		=> "Pas de conversation",
		"MSG_QUEST"			=> "Envoyer un courriel de confirmation si activ???",
		"MSG_ARC"				=> "conversations archiv??s",
		"MSG_VIEW_ARC"	=> "Voir les conversations archiv??s",
		"MSG_SETTINGS"  => "Param??tres de la messagerie",
		"MSG_READ"			=> "Lire",
		"MSG_BODY"			=> "Contenu",
		"MSG_SUB"				=> "Sujet",
		"MSG_DEL"				=> "Remis",
		"MSG_REPLY"			=> "R??ponse",
		"MSG_QUICK"			=> "R??ponse rapide",
		"MSG_SELECT"		=> "S??lectionner un utilisateur",
		"MSG_UNKN"			=> "Destinataire inconnu",
		"MSG_NOTIF"			=> "Message de notifications de courriels",
		"MSG_BLANK"			=> "Le message doit avoir un contenu",
		"MSG_MODAL"			=> "Cliquez ici ou appuyez sur Alt + R pour atteindre sur cette case OU appuyez sur Maj + R pour ouvrir la bo??te de r??ponse allong??e

!",
		"MSG_ARCHIVE_SUCCESSFUL"        => "Vous avez archiv?? avec succ??s %m1% discussions",
		"MSG_UNARCHIVE_SUCCESSFUL"      => "Vous avez d??sarchiv?? %m1% discussions avec succ??s",
		"MSG_DELETE_SUCCESSFUL"         => "Vous avez supprim?? avec succ??s %m1% discussions",
		"USER_MESSAGE_EXEMPT"         			=> "L'utilisateur est %m1% exempt?? de messages.",
		"MSG_MK_READ"		=> "lu",
		"MSG_MK_UNREAD"	=> "Non lu",
		"MSG_ARC_THR"		=> "Archiver les discussions s??lectionn??es",
		"MSG_UN_THR"		=> "D??sarchiver les discussions s??lectionn??es",
		"MSG_DEL_THR"		=> "Supprimer les discussions s??lectionn??es",
		"MSG_SEND"			=> "Envoyer le message",
		));

	//2 Factor Authentication
	$lang = array_merge($lang,array(
		"2FA"				=> "Authentification ?? 2 facteurs",
		"2FA_CONF"	=> "Etes vous s??r de vouloir d??sactiver 2FA ? Votre compte ne sera plus prot??g??.",
		"2FA_SCAN"	=> "lisez ce code QR avec votre application d'authentification ou saisissez la cl??",
		"2FA_THEN"	=> "Puis entrer une de vos cl??s uniques ici",
		"2FA_FAIL"	=> "Il y a eu un probl??me pour v??rifier 2FA. S.V.P. voir Internet ou contacter l'assistance.",
		"2FA_CODE"	=> "Code 2FA",
		"2FA_EXP"		=> "1 empreinte digitale expir??e",
		"2FA_EXPD"	=> "Expir??",
		"2FA_EXPS"	=> "En cours d'expiration",
		"2FA_ACTIVE"=> "sessions actives",
		"2FA_NOT_FN"=> "Pas d'empreinte trouv??e",
		"2FA_FP"		=> "Empreintes digitales",
		"2FA_NP"		=> "<strong>Echec login</strong> Double facteur d'authentification non pr??sent. S.V.P. essayer de nouveau.",
		"2FA_INV"		=> "<strong>Echec login</strong> double facteur d'authentification invalide. S.V.P. essayer de nouveau.",
		"2FA_FATAL"	=> "<strong>Erreur fatale</strong> S.V.P. contacter l'administrateur du syst??me.",
		));

	//Redirect Messages - These get a plus between each word // needs work in French
	$lang = array_merge($lang,array(
		"REDIR_2FA"						=> "D??sol??.Deux+facteurs+n'est+pas+activ??+en+ce+moment",
		"REDIR_2FA_EN"				=> "2+facteur+authentification+Activ??e",
		"REDIR_2FA_DIS"				=> "2+facteur+authentification+Desactiv??e",
		"REDIR_2FA_VER"				=> "2+facteur+authentification+v??rifi??e+et+activ??e",
		"REDIR_SOM_TING_WONG" => "erreur+S.V.P.+essayer+de+nouveau.",
		"REDIR_MSG_NOEX"			=> "Ce+thread+ne+vous+appartient+pas+ou+n'existe+pas.",
		"REDIR_UN_ONCE"				=> "Le+nom+d'utilisateur+a+d??j??+??t??+chang??.",
		"REDIR_EM_SUCC"				=> "Courriel+Mise+??+jour+r??ussie",
		));

	//Courriels
	$lang = array_merge($lang,array(
		"EML_CONF"			=> "Confirmer courriel",
		"EML_VER"				=> "V??rifiez votre courriel",
		"EML_CHK"				=> "Demande d'Courriel re??ue. S.V.P. voir vos courriels pour v??rification. Pensez ?? consulter vos dossiers Spam et Junk lorsque le lien de v??rification expire ",
		"EML_MAT"				=> "Votre courriel n'??tait pas le m??me.",
		"EML_HELLO"			=> "Bonjour de ",
		"EML_HI"				=> "Bonjour ",
		"EML_AD_HAS"		=> "Un administrateur a chang?? votre mot de passe.",
		"EML_AC_HAS"		=> "Un administrateur a cr???? votre compte.",
		"EML_REQ"				=> "Vous devrez ??tablir votre mot de passe en utilisant le lien ci dessus.",
		"EML_EXP"				=> "S.V.P. , notez , le lien mot de passe expirera dans ",
		"EML_VER_EXP"		=> "S.V.P. , notez, le lien de v??rification expirera dans ",
		"EML_CLICK"			=> "Cliquer ici pour connection.",
		"EML_REC"				=> "Il est recommand?? de changer de mot de passe apr??s connection.",
		"EML_MSG"				=> "Vous avez un nouveau message de",
		"EML_REPLY"			=> "Cliquez ici pour r??pondre ou voir la discussion",
		"EML_WHY"				=> "Vous recevez ce courriel parce qu'une demande de renouvellement de mot de passe a ??t?? faite. Si ce n'??tait pas vous , vous pouvez ignorer ce courriel.",
		"EML_HOW"				=> "Si c'??tait vous , cliquez sur le lien ci dessous pour poursuivre le processus de changement de mot de passe.",
		"EML_EML"				=> "Une demande de modification de votre courriel a ??t?? faite ?? partir de votre compte d'utilisateur.",
		"EML_VER_EML"		=> "Merci pour votre inscription. une fois que vous aurez v??rifi?? votre adresse courriel vous serez pr??t ?? vous connecter ! S.V.P. cliquez sur le lien ci dessous pour v??rifier votre adresse courriel.",

		));

		//Verification
		$lang = array_merge($lang,array(
			"VER_SUC"			=> "Votre courriel a ??t?? v??rifi??!",
			"VER_FAIL"		=> "Il nous est impossible de v??rifier votre compte . S.V.P. essayez de nouveau.",
			"VER_RESEND"	=> "Renvoyer un courriel de v??rification",
			"VER_AGAIN"		=> "Saisir votre adresse courriel et essayez de nouveau",
			"VER_PAGE"		=> "<li>V??rifiez votre courriel et cliquez sur le lien qui vous est envoy??</li><li>Termin??</li>",
			"VER_RES_SUC" => "<p>Votre lien de v??rification a ??t?? envoy?? ?? votre adresse e-mail.</p><p>Cliquez sur le lien dans l'e-mail pour terminer la v??rification. Assurez-vous de v??rifier votre dossier de courrier ind??sirable si le courriel n'est pas dans votre bo??te de r??ception.</p><p>Les liens de v??rification ne sont valables que pour ",
			"VER_OOPS"		=> "Ooops...quelque chose n'a pas fonctionn??, peut-??tre un lien ancien sur lequel vous avez cliqu??. Cliquez ci dessous pour essayer de nouveau",
			"VER_RESET"		=> "Votre mot de passe a ??t?? chang??!",
			"VER_INS"			=> "<li>Entrez votre adresse courriel et cliquez sur r??initialiser</li> <li> regardez vos courriels et cliquez sur le lien qui vous a ??t?? envoy??.</li><li>Suivez les instructions sur l'??cran</li>",
			"VER_SENT"		=> "<p>Votre lien pour modifier votre mot de passe a ??t?? envoy?? ?? votre adresse courriel.</p>
			    							<p>Cliquez sur le lien dans le courriel pour r??initialiser votre mot de passe. Assurez-vous de v??rifier votre dossier de courrier ind??sirable si le courriel n'est pas dans votre bo??te de r??ception.</p><pLes liens de r??initialisation ne sont valables que pour ",
			"VER_PLEASE"	=> "S.V.P. Modifiez votre mot de passe",
			));

	//User Settings
	$lang = array_merge($lang,array(
		"SET_PIN"				=> "r??initialiser le PIN",
		"SET_WHY"				=> "Pourquoi je ne peux pas changer ??a?",
		"SET_PW_MATCH"	=> "Doit ??tre semblable au nouveau mot de passe",

		"SET_PIN_NEXT"	=> "Vous pourrez changer le PIN la prochaine fois que vous ferez une v??rification",
		"SET_UPDATE"		=> "Mettre ?? jour vos donn??es d'utilisateur",
		"SET_NOCHANGE"	=> "L'administrateur a d??sactiv?? la capacit?? de changer de nom d'utilisateur.",
		"SET_ONECHANGE"	=> "L'administrateur n'a autoris?? qu'un changement de nom d'utilisateur et vous avez d??j?? utilis?? cette possibilit??.",

		"SET_GRAVITAR"	=> "<strong>Voulez vous changer votre photo? </strong><br> Visitez <a href='https://en.gravatar.com/'https://en.gravatar.com/</a> et cr??ez votre compte avec le m??me courriel que vous utilisez sur ce site . Cela fonctionne pour des millions de sites. C'est rapide et facile! utilis??e sur ce site",

		"SET_NOTE1"			=> "<p><strong>S.V.P., notez</strong> qu'il y a une demande en attente pour mettre ?? jour votre courriel ??",

		"SET_NOTE2"			=> ".</p><p>S.V.P., utilisez le courriel de v??rification pour r??pondre ?? cette demande.</p>
		<p>Si vous avez besoin d'un nouveau courriel de v??rification, S.V.P. re-entrez le courriel ci dessus et faites de nouveau la demande.</p>",

		"SET_PW_REQ" 		=> "N??cessaire pour changer de mot de passe: courriel, ou r??initialiser le PIN",
		"SET_PW_REQI" 	=> "N??cessaire pour changer de mot de passe",

		));

	//Errors
	$lang = array_merge($lang,array(
		"ERR_FAIL_ACT"		=> "Echec pour fermer la session en cours , Erreur: ",
		"ERR_Courriel"				=> "Courriel non envoy?? pour cause d'erreur. S.V.P. contacter l'administrateur du site.",
		"ERR_EM_DB"				=> "Ce courriel n'existe pas dans votre base de donn??es",
		"ERR_TC"					=> "S.V.P. lire et accepter les termes et conditions",
		"ERR_CAP"					=> "Vous avez ??chou?? au test captcha, robot!",
		"ERR_PW_SAME"			=> "Votre ancien mot de passe ne peut ??tre le m??me que le nouveau",
		"ERR_PW_FAIL"			=> "La v??rification de mot de passe en cours a ??chou?? . Echec de la mise ?? jour. S.V.P. essayer de nouveau.",
		"ERR_GOOG"				=> "<strong>REMARQUE:</strong> Si vous ??tes connect?? avec votre compte google / facebook, utilisez le lien mot de passe oubli?? pour changer de mot de passe ... sauf si vous ??tes dou?? pour quesser",
		"ERR_EM_VER"			=> "La v??rification de courriel n'est pas activ??e. S.V.P. Contacter l'administrateur syst??me.",
		"ERR_Courriel_STR"		=> "Quelque chose est bizarre. S.V.P. re-v??rifiez notre courriel. Nous sommes d??sol??s pour les inconv??nients",

		));

	//Maintenance Page
	$lang = array_merge($lang,array(
		"MAINT_HEAD"		=> "Nous serons bient??t de retour!",
		"MAINT_MSG"			=> "D??sol?? pour le d??sagr??ment mais nous effectuons actuellement des op??rations de maintenance .<br> Nous reviendrons tr??s rapidement en ligne.!",
		"MAINT_BAN"			=> "D??sol?? , vous avez ??t?? interdit . Si vous pensez que c'est une erreur , S.V.P. contactez l'administrateur.",
		"MAINT_TOK"			=> "Il y avait une erreur dans votre formulaire . S.V.P. retournez en arri??re et essayez de nouveau. S.V.P. notez que soumettre le formulaire en rafra??chissant la page peut causer une erreur. Si cela continue de se produire , S.V.P. contactez l'administrateur.",
		"MAINT_OPEN"		=> "Un logiciel libre de gestion d'utilisateurs en PHP.",
		"MAINT_PLEASE"	=> "Vous avez correctement install?? UserSpice! <br> Pour consulter notre documentation de mise en route, rendez-vous sur"
		));

		//dataTables Added in 4.4.08
		//NOTE: do not change the words like _START_ between the two _ symbols!
		$lang = array_merge($lang,array(
		"DAT_SEARCH"    => "Chercher",
		"DAT_FIRST"     => "Premier",
		"DAT_LAST"      => "Dernier",
		"DAT_NEXT"      => "Suivant",
		"DAT_PREV"      => "Pr??c??dent",
		"DAT_NODATA"        => "Pas de donn??es disponibles en tableau",
		"DAT_INFO"          => "Affichage _START_ ?? _END_ du _TOTAL_ entr??es",
		"DAT_ZERO"          => "Affichage ?? ?? ?? de ?? entr??es",
		"DAT_FILTERED"      => "(Filtr?? de _MAX_ total entr??es)",
		"DAT_MENU_LENG"     => "affichage _MENU_ entr??es",
		"DAT_LOADING"       => "Chargement...",
		"DAT_PROCESS"       => "Traitement...",
		"DAT_NO_REC"        => "Pas d'enregistrements correspondant trouv??s",
		"DAT_ASC"           => "Activer pour trier ordre ascendant",
		"DAT_DESC"          => "Activer pour trier ordre descendant",
		));


///////////////////////////////////////////////////////////////

//Backend Translations for UserSpice
$lang = array_merge($lang,array(
"BE_DASH"    			=> "Tableau interface",
"BE_SETTINGS"     => "Param??tres",
"BE_GEN"					=> "General",
"BE_REG"					=> "Inscription",
"BE_CUS"					=> "Param??tres personnalis??s",
"BE_DASH_ACC"			=> "Acc??s au tableau interface",
"BE_TOOLS"				=> "Outils",
"BE_BACKUP"				=> "Sauvegarde",
"BE_UPDATE"				=> "Mises ?? jour",
"BE_CRON"				  => "T??ches Cron",
"BE_IP"				  	=> "Gestionnaire d'IP",
));



//LEAVE THIS LINE AT THE BOTTOM.  It allows users/lang to override these keys
if(file_exists($abs_us_root.$us_url_root."usersc/lang/".$lang["THIS_CODE"].".php")){
	include($abs_us_root.$us_url_root."usersc/lang/".$lang["THIS_CODE"].".php");
}
 //do not put a closing php tag here
