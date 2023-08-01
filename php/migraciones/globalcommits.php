<?php 
include 'commitusuarios.php';
include __DIR__ .'/Proyecto/commitcarreras.php';
include __DIR__ .'/Proyecto/commitedificios.php';
include __DIR__ .'/Proyecto/commitestudiante.php';
include __DIR__ .'/Proyecto/commithorarios.php';
include __DIR__ .'/Proyecto/commitsalones.php';
include __DIR__ .'/Proyecto/commitusuario.php';
include __DIR__ .'/Proyecto/commitusuarios.php';

include_once __DIR__ .'/Tienda/commitcreditos.php';
include_once __DIR__ .'/Tienda/commitempleados.php';
include_once __DIR__ .'/Tienda/commitinventarios.php';
include_once __DIR__ .'/Tienda/committienda.php';
include_once __DIR__ .'/Tienda/commitventa.php';

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