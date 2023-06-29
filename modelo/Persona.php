<?php
class Persona
{
    public $Id;
    public $Nombre;
    public $Apellido;
    public $FechaNac;
    public $ObraSoc;
    public $ListDoc = array();

    public function MostrarDatos()
    {
        echo '<hr>';
        echo '<---- Persona ---> <br>';
        echo 'ID: ' . $this->Id . '<br>';
        echo 'Nombre: ' . $this->Nombre . '<br>';
        echo 'Apellido: ' . $this->Apellido . '<br>';
        echo 'Fecha de Nacimiento: ' . $this->FechaNac . '<br>';
        echo '<hr>';
        echo '<---Obra Social---> <br>';
        echo 'ID: ' . $this->ObraSoc->Id . '<br>';
        echo 'Razon Social: ' . $this->ObraSoc->RazonSocial . '<br>';
        echo 'Cuit: ' . $this->ObraSoc->Cuit . '<br>';
        echo 'Sitio Web: ' . $this->ObraSoc->SitioWeb . '<br>';
        echo 'Telefono: ' . $this->ObraSoc->Telefono . '<br>';
        echo '<hr> <hr>';
        echo '<--- Lista de Documentos: ---> <br>';
        foreach ($this->ListDoc as $d) {
            echo 'ID: ' . $d->Id . '<br>';
            echo 'Numero de documento: ' . $d->Numero . '<br>';
            echo 'Habilitado: ' . $d->Habilitado . '<br>';
            echo 'Tipo de documento ID: ' . $d->TipoDocumento->Id . '<br>';
            echo 'Tipo de documento Descripcion: ' . $d->TipoDocumento->Description . '<br>';
            echo 'Tipo de documento Habilitado: ' . $d->TipoDocumento->Habilitado . '<br>' . '<hr>';
        }
    }
}
