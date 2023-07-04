<?php 
#globalcommits.php
include_once 'commitusuarios.php';
include_once 'Proyecto/commitcarreras.php';
include_once 'Proyecto/commitedificios.php';
include_once 'Proyecto/commitestudiante.php';
include_once 'Proyecto/commithorarios.php';
include_once 'Proyecto/commitsalones.php';
include_once 'Proyecto/commitusuario.php';
include_once 'Proyecto/commitusuarios.php';

include_once 'Tienda/commitcreditos.php';
include_once 'Tienda/commitempleados.php';
include_once 'Tienda/commitinventarios.php';
include_once 'Tienda/committienda.php';
include_once 'Tienda/commitventa.php';

usuarioscommit();

carrerascommit();
edificioscommit();
estudiantescommit();
horarioscommit();
salonescommit();
usuariocommit();
usuarioscommit();

creditoscommit();
empleadoscommit();
inventariocommit();
tiendacommit();
ventacommit();

?>