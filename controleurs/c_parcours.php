﻿<?php
$action = $_REQUEST['action'];
switch($action){
	case 'modif':{
                                    include('Include/include.php');
                                    include('Include/classe.php');
		include("vues/v_ModifJoueursAsk.php");
		break;
	}
                  case 'nouveau':{
                                    include('Include/include.php');
                                    include('Include/classe.php');
		include("vues/v_NvJoueurs.php");
		break;
                  }
                  case 'supprimer':{
                                    include('Include/include.php');
                                    include('Include/classe.php');
		include("vues/v_SupprJoueursAsk.php");
		break;
                  }
	default :{
		include("vues/v_sommaire.php");
		break;
	}
}
?>