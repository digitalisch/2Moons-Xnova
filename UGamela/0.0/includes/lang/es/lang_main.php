<?php


if(!defined('INSIDE')){ die("attemp hacking");}

// Requerimientos
{$requeriments = array(
//Edificios
12 => array(3=>5,113=>3),
15 => array(14=>10,108=>10),
21 => array(14=>2),
33 => array(15=>1,113=>12),
//Tecnologias
106 => array(31=>3),
108 => array(31=>1),
109 => array(31=>4),
110 => array(113=>3,31=>6),
111 => array(31=>2),
113 => array(31=>1),
114 => array(113=>5,110=>5,31=>7),
115 => array(113=>1,31=>1),
117 => array(113=>1,31=>2),
118 => array(114=>3,31=>7),
120 => array(31=>1,113=>2),
121 => array(31=>4,120=>5,113=>4),
122 => array(31=>5,113=>8,120=>10,121=>5),
123 => array(31=>10,108=>8,114=>8),
199 => array(31=>12),
//Naves espaciales
202 => array(21=>2,115=>2),
203 => array(21=>4,115=>6),
204 => array(21=>1,115=>1),
205 => array(21=>3,111=>2,117=>2),
206 => array(21=>5,117=>4,121=>2),
207 => array(21=>7,118=>4),
208 => array(21=>4,117=>3),
209 => array(21=>4,115=>6,110=>2),
210 => array(21=>3,115=>3,106=>2),
211 => array(117=>6,21=>8,122=>5),
212 => array(21=>1),
213 => array(21=>9,118=>6,114=>5),
214 => array(21=>12,118=>7,114=>6,199=>1),
//Sistemas de defensa
401 => array(21=>1),
402 => array(113=>1,21=>2,120=>3),
403 => array(113=>3,21=>4,120=>6),
404 => array(21=>6,113=>6,109=>3,110=>1),
405 => array(21=>4,121=>4),
406 => array(21=>8,122=>7),
407 => array(110=>2,21=>1),
408 => array(110=>6,21=>6),
502 => array(44=>2),
503 => array(44=>4),
//Construcciones especiales
42 => array(41=>1),
43 => array(41=>1,114=>7)
);}

{$pricelist = array(

1 => array('metal'=>40,'crystal'=>10,'deuterium'=>0,'energy'=>0,'factor'=>3/2,"description"=>"Las minas de metal proveen los recursos b�sicos de un imperio emergente, y permiten la construcci�n de edificios y naves."),
2 => array('metal'=>30,'crystal'=>15,'deuterium'=>0,'energy'=>0,'factor'=>1.6,"description"=>"Los cristales son el recurso principal usado para construir circuitos electr�nicos y ciertas aleaciones."),
3 => array('metal'=>150,'crystal'=>50,'deuterium'=>0,'energy'=>0,'factor'=>3/2,"description"=>"El deuterio se usa como combustible para naves, y se recolecta en el mar profundo. Es una sustancia muy escasa, y por ello, relativamente cara."),
4 => array('metal'=>50,'crystal'=>20,'deuterium'=>0,'energy'=>0,'factor'=>3/2,"description"=>"Las plantas de energ�a solar convierten energ�a fot�nica en energ�a el�ctrica, para su uso en casi todos los edificios y estructuras."),
12 => array('metal'=>500,'crystal'=>200,'deuterium'=>100,'energy'=>0,'factor'=>1.8,"description"=>"Un reactor de fusi�n nuclear que produce un �tomo de helio a partir de dos �tomos de deuterio usando una presi�n extremadamente alta y una elevad�sima temperatura."),
14 => array('metal'=>200,'crystal'=>60,'deuterium'=>100,'energy'=>0,'factor'=>2,"description"=>"Las f�bricas de robots proporcionan unidades baratas y de f�cil construcci�n que pueden ser usadas para mejorar o construir cualquier estructura planetaria. Cada nivel de mejora de la f�brica aumenta la eficiencia y el numero de unidades rob�ticas que ayudan en la construcci�n."),
15 => array('metal'=>500000,'crystal'=>250000,'deuterium'=>50000,'energy'=>0,'factor'=>2,"description"=>"La f�brica de nanobots es la �ltima evoluci�n de la rob�tica. Cada mejora proporciona nanobots m�s y m�s eficientes que incrementan la velocidad de construcci�n."),
21 => array('metal'=>200,'crystal'=>100,'deuterium'=>50,'energy'=>0,'factor'=>2,"description"=>"El hangar es el lugar donde se construyen naves y estructuras de defensa planetaria."),
22 => array('metal'=>1000,'crystal'=>0,'deuterium'=>0,'energy'=>0,'factor'=>2,"description"=>"Almac�n de metal sin procesar."),
23 => array('metal'=>1000,'crystal'=>500,'deuterium'=>0,'energy'=>0,'factor'=>2,"description"=>"Almac�n de cristal sin procesar."),
24 => array('metal'=>1000,'crystal'=>1000,'deuterium'=>0,'energy'=>0,'factor'=>2,"description"=>"Contenedores enormes para almacenar deuterio."),
31 => array('metal'=>100,'crystal'=>200,'deuterium'=>100,'energy'=>0,'factor'=>2,"description"=>"Se necesita un laboratorio de investigaci�n para conducir la investigaci�n en nuevas tecnolog�as."),
33 => array('metal'=>0,'crystal'=>25000,'deuterium'=>5000,'energy'=>500,'factor'=>2,"description"=>"El Terraformer es necesario para habilitar �reas inaccesibles de tu planeta para edificar infraestructuras."),
34 => array('metal'=>10000,'crystal'=>20000,'deuterium'=>0,'energy'=>0,'factor'=>2,"description"=>"El dep�sito de la alianza ofrece la posibilidad de repostar a las flotas aliadas que est�n estacionadas en la �rbita ayudando a defender."),
44 => array('metal'=>10000,'crystal'=>10000,'deuterium'=>500,'energy'=>0,'factor'=>2,"description"=>"El silo es un lugar de almacenamiento y lanzamiento de misiles planetarios."),
//Tecnologias
106 => array('metal'=>200,'crystal'=>1000,'deuterium'=>200,'energy'=>0,'factor'=>2,"description"=>"Usando esta tecnolog�a, puede obtenerse informaci�n sobre otros planetas."),
108 => array('metal'=>0,'crystal'=>400,'deuterium'=>600,'energy'=>0,'factor'=>2,"description"=>"Cuanto m�s elevado sea el nivel de tecnolog�a de computaci�n, m�s flotas podr�s controlar simultaneamente. Cada nivel adicional de esta tecnologia, aumenta el numero de flotas en 1."),
109 => array('metal'=>800,'crystal'=>200,'deuterium'=>0,'energy'=>0,'factor'=>2,"description"=>"Este tipo de tecnolog�a incrementa la eficiencia de tus sistemas de armamento. Cada mejora de la tecnolog�a militar a�ade un 10% de potencia a la base de da�o de cualquier arma disponible."),
110 => array('metal'=>200,'crystal'=>600,'deuterium'=>0,'energy'=>0,'factor'=>2,"description"=>"La tecnolog�a de defensa se usa para generar un escudo de part�culas protectoras alrededor de tus estructuras. Cada nivel de esta tecnolog�a aumenta el escudo efectivo en un 10% (basado en el nivel de una estructura dada)."),
111 => array('metal'=>1000,'crystal'=>0,'deuterium'=>0,'energy'=>0,'factor'=>2,"description"=>"Las aleaciones altamente sofisticadas ayudan a incrementar el blindaje de una nave a�adiendo el 10% de su fuerza en cada nivel a la fuerza base."),
113 => array('metal'=>0,'crystal'=>800,'deuterium'=>400,'energy'=>0,'factor'=>2,"description"=>"Entendiendo la tecnolog�a de diferentes tipos de energ�a, muchas investigaciones nuevas y avanzadas pueden ser adaptadas. La tecnolog�a de energ�a es de gran importancia para un laboratorio de investigaci�n moderno."),
114 => array('metal'=>0,'crystal'=>4000,'deuterium'=>2000,'energy'=>0,'factor'=>2,"description"=>"Incorporando la cuarta y quinta dimensi�n en la tecnolog�a de propulsi�n, se puede disponer de un nuevo tipo de motor; que es m�s eficiente y usa menos combustible que los convencionales."),
115 => array('metal'=>400,'crystal'=>0,'deuterium'=>600,'energy'=>0,'factor'=>2,"description"=>"Ejecutar investigaciones en esta tecnolog�a proporciona motores de combusti�n siempre m�s rapido, aunque cada nivel aumenta solamente la velocidad en un 10% de la velocidad base de una nave dada."),
117 => array('metal'=>2000,'crystal'=>4000,'deuterium'=>6000,'energy'=>0,'factor'=>2,"description"=>"El sistema del motor de impulso se basa en el principio de la repulsi�n de part�culas. La materia repelida es basura generada por el reactor de fusi�n usado para proporcionar la energ�a necesaria para este tipo de motor de propulsi�n."),
118 => array('metal'=>10000,'crystal'=>20000,'deuterium'=>6000,'energy'=>0,'factor'=>2,"description"=>"Los motores de hiperespacio permiten entrar al mismo a trav�s de una ventana hiperespacial para reducir dr�sticamente el tiempo de viaje. El hiperespacio es un espacio alternativo con m�s de 3 dimensiones."),
120 => array('metal'=>200,'crystal'=>100,'deuterium'=>0,'energy'=>0,'factor'=>2,"description"=>"La tecnolog�a l�ser es un importante conocimiento; conduce a la luz monocrom�tica firmemente enfocada sobre un objetivo. El da�o puede ser ligero o moderado dependiendo de la potencia del rayo..."),
121 => array('metal'=>1000,'crystal'=>300,'deuterium'=>100,'energy'=>0,'factor'=>2,"description"=>"La tecnolog�a i�nica enfoca un rayo de iones acelerados en un objetivo, lo que puede provocar un gran da�o debido a su naturaleza de electrones cargados de energ�a."),
122 => array('metal'=>2000,'crystal'=>4000,'deuterium'=>1000,'energy'=>0,'factor'=>2,"description"=>"Las armas de plasma son incluso m�s peligrosas que cualquier otro sistema de armamento conocido, debido a la naturaleza agresiva del plasma"),
123 => array('metal'=>240000,'crystal'=>400000,'deuterium'=>160000,'energy'=>0,'factor'=>2,"description"=>"Los cient�ficos de tus planetas pueden comunicarse entre ellos a trav�s de esta red."),
199 => array('metal'=>0,'crystal'=>0,'deuterium'=>0,'energy'=>300000,'factor'=>3,"description"=>"A trav�s del disparo de part�culas concentradas de gravit�n se genera un campo gravitacional artificial con suficiente potencia y poder de atracci�n para destruir no solo naves, sino lunas enteras."),
//Naves espaciales
202 => array('metal'=>2000,'crystal'=>2000,'deuterium'=>0,'energy'=>0,'consumption'=>20,'speed'=>28000,'capacity'=>5000,'name'=>"Nave peque�a de carga",'description'=>"Las naves peque�as de carga son naves muy �giles usadas para transportar recursos desde un planeta a otro."),
203 => array('metal'=>6000,'crystal'=>6000,'deuterium'=>0,'energy'=>0,'consumption'=>50,'speed'=>17250,'capacity'=>25000,'name'=>"Nave grande de carga",'description'=>"La nave grande de carga es una versi�n avanzada de las naves peque�as de carga, permitiendo as� una mayor capacidad de almacenamiento y velocidades m�s altas gracias a un mejor sistema de propulsi�n."),
204 => array('metal'=>3000,'crystal'=>1000,'deuterium'=>0,'energy'=>0,'consumption'=>20,'speed'=>28750,'capacity'=>50,'name'=>"Cazador ligero",'description'=>"El cazador ligero es una nave maniobrable que puedes encontrar en casi cualquier planeta. El coste no es particularmente alto, pero asimismo el escudo y la capacidad de carga son muy bajas."),
205 => array('metal'=>6000,'crystal'=>4000,'deuterium'=>0,'energy'=>0,'consumption'=>75,'speed'=>28000,'capacity'=>100,'name'=>"Cazador pesado",'description'=>"El cazador pesado es la evoluci�n logica del ligero, ofreciendo escudos reforzados y una mayor potencia de ataque."),
206 => array('metal'=>20000,'crystal'=>7000,'deuterium'=>2000,'energy'=>0,'consumption'=>300,'speed'=>42000,'capacity'=>800,'name'=>"Crucero",'description'=>"Los cruceros de combate tienen un escudo casi tres veces m�s fuerte que el de los cazadores pesados y m�s del doble de potencia de ataque. Su velocidad de desplazamiento est� tambi�n entre las m�s r�pidas jam�s vista."),
207 => array('metal'=>40000,'crystal'=>20000,'deuterium'=>0,'energy'=>0,'consumption'=>500,'speed'=>31000,'capacity'=>1500,'name'=>"Nave de batalla",'description'=>"Las naves de batalla son la espina dorsal de cualquier flota militar. Blindaje pesado, potentes sistemas de armamento y una alta velocidad de viaje, as� como una gran capacidad de carga hace de esta nave un duro rival contra el que luchar."),
208 => array('metal'=>10000,'crystal'=>20000,'deuterium'=>10000,'energy'=>0,'name'=>"Colonizador",'description'=>"Esta nave proporciona lo necesario para ir a donde ning�n hombre ha llegado antes y colonizar nuevos mundos."),
209 => array('metal'=>10000,'crystal'=>6000,'deuterium'=>2000,'energy'=>0,'consumption'=>300,'speed'=>4600,'capacity'=>20000,'name'=>"Reciclador",'description'=>"Los recicladores se usan para recolectar escombros flotando en el espacio para reciclarlos en recursos �tiles."),
210 => array('metal'=>0,'crystal'=>1000,'deuterium'=>0,'energy'=>0,'consumption'=>1,'speed'=>230000000,'capacity'=>5,'name'=>"Sonda de espionaje",'description'=>"Las sondas de espionaje son peque�os droides no tripulados con un sistema de propulsi�n excepcionalmente r�pido usado para espiar en planetas enemigos."),
211 => array('metal'=>50000,'crystal'=>25000,'deuterium'=>15000,'energy'=>0,'consumption'=>1000,'speed'=>11200,'capacity'=>500,'name'=>"Bombardero",'description'=>"El Bombardero es una nave de prop�sito especial, desarrollado para atravesar las defensas planetarias m�s pesadas."),
212 => array('metal'=>0,'crystal'=>2000,'deuterium'=>500,'energy'=>0,'name'=>"Sat�lite solar",'description'=>"Los sat�lites solares son simples sat�lites en �rbita equipados con c�lulas fotovoltaicas y transmisores para llevar la energ�a al planeta. Se transmite por este medio a la tierra usando un rayo l�ser especial."),
213 => array('metal'=>60000,'crystal'=>50000,'deuterium'=>15000,'energy'=>0,'consumption'=>1000,'speed'=>15500,'capacity'=>2000,'name'=>"Destructor",'description'=>"El destructor es la nave m�s pesada jam�s vista y posee un potencial de ataque sin precedentes."),
214 => array('metal'=>5000000,'crystal'=>4000000,'deuterium'=>1000000,'energy'=>0,'name'=>"Estrella de la muerte",'description'=>"No hay nada tan grande y peligroso como una estrella de la muerte aproxim�ndose."),
//Sistemas de defensa
401 => array('metal'=>2000,'crystal'=>0,'deuterium'=>0,'energy'=>0,"description"=>"El lanzamisiles es un sistema de defensa sencillo, pero barato."),
402 => array('metal'=>1500,'crystal'=>500,'deuterium'=>0,'energy'=>0,"description"=>"Por medio de un rayo l�ser concentrado, se puede provocar m�s da�o que con las armas bal�sticas normales."),
403 => array('metal'=>6000,'crystal'=>2000,'deuterium'=>0,'energy'=>0,"description"=>"Los l�sers grandes posee una mejor salida de energ�a y una mayor integridad estructural que los l�sers peque�os."),
404 => array('metal'=>20000,'crystal'=>15000,'deuterium'=>2000,'energy'=>0,"description"=>"Usando una inmensa aceleraci�n electromagn�tica, los ca�ones gauss aceleran proyectiles pesados."),
405 => array('metal'=>2000,'crystal'=>6000,'deuterium'=>0,'energy'=>0,"description"=>"Los ca�ones i�nicos disparan rayos de iones altamente energ�ticos contra su objetivo, desestabilizando los escudos y destruyendo los componentes electr�nicos."),
406 => array('metal'=>50000,'crystal'=>50000,'deuterium'=>30000,'energy'=>0,"description"=>"Los ca�ones de plasma liberan la energ�a de una peque�a erupci�n solar en una bala de plasma. La energ�a destructiva es incluso superior a la del Destructor."),
407 => array('metal'=>10000,'crystal'=>10000,'deuterium'=>0,'energy'=>0,"description"=>"La c�pula peque�a de protecci�n cubre el planeta con un delgado campo protector que puede absorber inmensas cantidades de energ�a."),
408 => array('metal'=>50000,'crystal'=>50000,'deuterium'=>0,'energy'=>0,"description"=>"La c�pula grande de protecci�n proviene de una tecnolog�a de defensa mejorada que absorbe incluso m�s energ�a antes de colapsarse."),
502 => array('metal'=>8000,'crystal'=>2000,'deuterium'=>0,'energy'=>0,"description"=>"Los misiles de intercepci�n destruyen los misiles interplanetarios."),
503 => array('metal'=>12500,'crystal'=>2500,'deuterium'=>10000,'energy'=>0,"description"=>"Los misiles interplanetarios destruyen los sistemas de defensa del enemigo."),
//Construcciones especiales
41 => array('metal'=>10000,'crystal'=>20000,'deuterium'=>10000,'energy'=>0,"description"=>"Dado que la luna no tiene atm�sfera, se necesita una base lunar para generar espacio habitable."),
42 => array('metal'=>10000,'crystal'=>20000,'deuterium'=>10000,'energy'=>0,"description"=>"Usando el sensor phalanx, las flotas de otros imperios pueden ser descubiertas y observadas. Cuanto mayor sea la cadena de sensores phalanx, mayor el rango que pueda escanear."),
43 => array('metal'=>1000000,'crystal'=>2000000,'deuterium'=>1000000,'energy'=>0,"description"=>"El salto cu�ntico usa portales transmisores-receptores capaces de enviar incluso la mayor flota instantaneamente a un portal lejano.")

);}

{$tech = array(
//Contrucciones
0 => "Construcci�n",
1 => "Mina de metal",
2 => "Mina de cristal",
3 => "Sintetizador de deuterio",
4 => "Planta de energ�a solar",
12 => "Planta de fusi�n",
14 => "F�brica de Robots",
15 => "F�brica de Nanobots",
21 => "Hangar",
22 => "Almac�n de metal",
23 => "Almac�n de cristal",
24 => "Contenedor de deuterio",
31 => "Laboratorio de investigaci�n",
33 => "Terraformer",
34 => "Dep�sito de la Alianza",
44 => "Silo",
//Tecnologias
100 => "Investigaci�n",
106 => "Tecnolog�a de espionaje",
108 => "Tecnolog�a de computaci�n",
109 => "Tecnolog�a militar",
110 => "Tecnolog�a de defensa",
111 => "Tecnolog�a de blindaje",
113 => "Tecnolog�a de energ�a",
114 => "Tecnolog�a de hiperespacio",
115 => "Motor de combusti�n",
117 => "Motor de impulso",
118 => "Propulsor hiperespacial",
120 => "Tecnolog�a l�ser",
121 => "Tecnolog�a i�nica",
122 => "Tecnolog�a de plasma",
123 => "Red de investigaci�n intergal�ctica",
199 => "Tecnolog�a de gravit�n",
//Naves
200 => "Naves espaciales",
202 => "Nave peque�a de carga",
203 => "Nave grande de carga",
204 => "Cazador ligero",
205 => "Cazador pesado",
206 => "Crucero",
207 => "Nave de batalla",
208 => "Colonizador",
209 => "Reciclador",
210 => "Sonda de espionaje",
211 => "Bombardero",
212 => "Sat�lite solar",
213 => "Destructor",
214 => "Estrella de la muerte",
//Naves
400 => "Sistemas de defensa",
401 => "Lanzamisiles",
402 => "L�ser peque�o",
403 => "L�ser grande",
404 => "Ca��n Gauss",
405 => "Ca��n i�nico",
406 => "Ca��n de plasma",
407 => "C�pula peque�a de protecci�n",
408 => "C�pula grande de protecci�n",
502 => "Misil de intercepci�n",
503 => "Misil interplanetario",
//Construcciones especiales
40 => "Construcciones especiales",
41 => "Base lunar",
42 => "Sensor Phalanx",
43 => "Salto cu�ntico"
);}

$lang['TITLE_GAME'] = 'Ugamela';

$lang['description'] = 'descripci�n';
$lang['Version'] = 'Versi�n';
$lang['Descripti�n'] = 'Descripci�n';
$lang['Error'] = 'Error';
$lang['notpossiblethisway'] = 'No es posible de esta manera';


$lang['ENCODING'] = 'iso-8859-1';
$lang['DIRECTION'] = 'ltr';
$lang['LEFT'] = 'left';
$lang['RIGHT'] = 'right';
$lang['DATE_FORMAT'] =  'd M Y'; // Esto se deber�a cambiar al formato predeterminado para tu idioma, formato como php date()



$lang['Username'] = 'Nombre de Usuario';
$lang['Password'] = 'Contrase�a';
$lang['Email'] = 'Email';


$lang['Metal'] = 'Metal';
$lang['Crystal'] = 'Cristal';
$lang['Deuterium'] = 'Deuterio';
$lang['Energy'] = 'Energ�a';

$lang['level'] = 'nivel';
$lang['Requirements'] = 'Requisitos';
$lang['Requires'] = 'Requiere';
$lang['ConstructionTime'] = 'Tiempo de producci�n';


$lang['Name'] = 'Nombre';
$lang['Information_on'] = 'Informaci�n en %n:';
//  Index.php
$lang['NoFrames'] = 'Tu explorador no soporta frames.';


{//overview
$lang['Planet_menu'] = 'Men� del planeta';
$lang['Planet'] = 'Planeta';
$lang['Have_new_message'] = 'Tienes 1 mensaje nuevo';
$lang['Have_new_messages'] = 'Tienes %m mensajes nuevos';
$lang['Server_time'] = 'Hora';
$lang['Events'] = 'Eventos';
$lang['Free'] = 'Libre';
$lang['Diameter'] = 'Di�metro';
$lang['fields'] = 'campos';
$lang['Developed_fields'] = 'Campos ocupados';
$lang['max_eveloped_fields'] = 'campos m�x. de construcci�n';
$lang['Temperature'] = 'Temperatura';
$lang['approx'] = 'aprox.';
$lang['to'] = 'hasta';
$lang['�C'] = '�C';
$lang['Position'] = 'Posici�n';
$lang['Points'] = 'Puntos';
$lang['Rank'] = 'Lugar';
$lang['of'] = 'de';
}
{// message.php
$lang['Action'] = 'Acci�n';
$lang['Date'] = 'Fecha';
$lang['From'] = 'De';
$lang['Subject'] = 'Asunto';
$lang['Ok'] = 'Ok';
$lang['show_only_partial_espionage_reports'] = 'Mostrar unicamente encabezado de los informes de espionaje';
$lang['Delete_marked_messages'] = 'Borrar mensajes marcados';
$lang['Delete_all_messages'] = 'Borrar todos los mensajes';
}
//notes.php
{
$lang['NoTitle'] = 'Sin titulo';
$lang['NoText'] = 'Sin texto';
$lang['Delete'] = 'Borrar';
$lang['MakeNewNote'] = 'Crear nueva nota';
$lang['ThereIsNoNote'] = 'No hay ninguna nota';
$lang['Createnote'] = 'Hacer una nota';
$lang['Editnote'] = 'Editar nota';
$lang['Priority'] = 'Prioridad';
$lang['Notice'] = 'Nota';
$lang['characters'] = 'Caracteres';
$lang['Important'] = 'Importante';
$lang['Normal'] = 'Normal';
$lang['Unimportant'] = 'Sin importancia';
$lang['Size'] = 'Tama�o';
$lang['Back'] = 'Volver';
$lang['Save'] = 'Guardar';
$lang['Apply'] = 'Aceptar';
$lang['Reset'] = 'Restablecer';


$lang['NoteUpdated'] = 'La nota fue actualizada, <a href="notes"><blink>redireccionando...</blink></a>';

$lang['NoteAdded'] = 'La nota se ingreso correctamente, <a href="notes"><blink>redireccionando...</blink></a>';

$lang['NoteDeleted'] = 'La nota se borro con exito, <a href="notes"><blink>redireccionando...</blink></a>';
$lang['NoteDeleteds'] = 'Las notas se borraron con exito, <a href="notes"><blink>redireccionando...</blink></a>';
}
/*
  Corresponde a la parte de la funcion de error();
*/
$lang['ErrorPage'] = 'P�gina de errores';
$lang['Query'] = 'Consulta';
$lang['Queries'] = 'Consultas';
$lang['Table'] = 'Tabla';
$lang['universe0'] = 'Universo 0';

{//left menu
$lang['Overview'] = 'Visi�n general';
$lang['Buildings'] = 'Edificios';
$lang['Resources'] = 'Recursos';
$lang['Research'] = 'Investigaci�n';
$lang['Shipyard'] = 'Hangar';
$lang['Fleet'] = 'Flota';
$lang['Technology'] = 'Tecnolog�a';
$lang['Galaxy'] = 'Galaxia';
$lang['Defense'] = 'Defensa';
$lang['Alliance'] = 'Alianzas';
$lang['Board'] = 'Foro';
$lang['Statistics'] = 'Estad�sticas';
$lang['Search'] = 'Buscar';
$lang['Help'] = 'Ayuda';
$lang['Messages'] = 'Mensajes';
$lang['Notes'] = 'Notas';
$lang['Buddylist'] = 'Compa�eros';
$lang['Options'] = 'Opciones';
$lang['Logout'] = 'Salir';
$lang['Rules'] = 'Reglas';
$lang['Legal Notice'] = 'Contacto';
}
{//Errores de Cookies
$lang['cookies']['Error1'] = 'Datos invalidos de cookie (Error 1). Por favor, borre '.
			'las cookies e inicie de nuevo.<br /><a href="login.php?do=login">'.
			'Iniciar sesi�n</a><br /><br />Si el error persiste, trat�Ede contactar'.
			' a un administrador del servidor. Muchas gracias.';
$lang['cookies']['Error2'] = 'Datos invalidos de cookie (Error 2). Por favor, borre'.
			' las cookies e inicie de nuevo.<br /><a href="login.php?do=login">'.
			'Iniciar sesi�n</a><br /><br />Si el error persiste, trat�Ede contactar'.
			' a un administrador del servidor. Muchas gracias.';
$lang['cookies']['Error3'] = 'Datos invalidos de cookie (Error 3). Por favor, borre'.
			' las cookies e inicie de nuevo.<br /><a href="login.php?do=login">'.
			'Iniciar sesi�n</a><br /><br />Si el error persiste, trat�Ede contactar'.
			' a un administrador del servidor. Muchas gracias.';
}
//Login
$lang['Login'] = 'Entrar';
$lang['Please_Login'] = 'Por favor, <a href="login.php" target="_main">identif&iacute;cate...</a>';
$lang['Please_Wait'] = 'Espere por favor';
$lang['Remember_me'] = 'Recordar contrase&ntilde;a';
$lang['Register'] = 'Registrarse';

//Misc
$lang['Time'] = 'Time';//*

// Created by Perberos. All rights reversed (C) 2006 
?>
