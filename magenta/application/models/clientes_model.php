<?php 
class Clientes_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function buscapedidoclt($rut)
    {        
        $query = $this->db->where("Rut",$rut);
        $query = $this->db->get("pedidos");

        if ($query->num_rows() == 0)
        {
            //
        }
        else
        {
            return $query->result();
        }
    }

       function listaclt()
    {        
        $query = $this->db->get("clientes");

        if ($query->num_rows() == 0)
        {
            //
        }
        else
        {
            return $query->result();
        }
    }

        function buscaclt($rut)
    {        
        $query = $this->db->where("rCliente",$rut);
        $query = $this->db->get("clientes");

        if ($query->num_rows() == 0)
        {
            //echo "No Existe Cliente";
        }
        else
        {
            return $query->result();
        }
    }

     function actualizarclt($rut, $nombre, $apellido, $email)
     {
        $data = array(
            'rCliente' => $rut,
            'nombre' => $nombre,
            'apellido' => $apellido,
            'correo' => $email
        );

        $data2 = array(
            'Rut' => $rut,
            'Nombre' => $nombre,
            'Apellido' => $apellido,
            'correo' => $email
        );

        $query = $this->db->where('rCliente', $rut);
        $query = $this->db->update('clientes', $data);

        $query2 = $this->db->where('Rut', $rut);
        $query2 = $this->db->update('pedidos', $data2);
    }
//hola estoy provando github
}
 
/*fin del archivo comentarios model*/