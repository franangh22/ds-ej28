<?php
require_once 'modelo/Persona.php';
require_once 'modelo/ObraSocial.php';
require_once 'modelo/Documento.php';
require_once 'modelo/TipoDocumento.php';

#Instanciar clase ObraSocial
$ObraSoc = new ObraSocial();
$ObraSoc->Id = 1;
$ObraSoc->RazonSocial = 'Grupo';
$ObraSoc->Cuit = '53436463463';
$ObraSoc->SitioWeb = 'ObraSoc.ar';
$ObraSoc->Telefono = '0-800 AT AL CLIENTE';

#Instanciar clase Tipo de Documento
$t1 = new TipoDocumento();
$t1->Id = 1;
$t1->Description = 'DNI';
$t1->Habilitado = true . ' <-True';

$t2 = new TipoDocumento();
$t2->Id = 1;
$t2->Description = 'DNI';
$t2->Habilitado = true . ' <-True';

#Instanciar Documento
$d1 = new Documento();
$d1->Id = 1;
$d1->Numero = '40123123';
$d1->Habilitado = true . ' <-True';
$d1->TipoDocumento = $t1;

$d2 = new Documento();
$d2->Id = 2;
$d2->Numero = '50123123';
$d2->Habilitado = true . ' <-True';
$d2->TipoDocumento = $t2;

#Instanciar clase Persona
$clasePers= new Persona();
$clasePers->Id = 1;
$clasePers->Nombre = 'Mickey';
$clasePers->Apellido = 'Mouse';
$clasePers->FechaNac = '05/12/1928';
$clasePers->ObraSoc = $ObraSoc;
$clasePers->ListDoc[] = $d1;
$clasePers->ListDoc[] = $d2;
$clasePers->MostrarDatos(); 
