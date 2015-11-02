<?php 
class Pedidos_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    //creamos la funcion nuevo comentario que será la que haga la inserción a la base
    //de datos pasándole los datos a introducir en forma de array, siempre al estilo ci
    function nuevo_pedido($rut,$nombre,$apellido,$monto,$email,$fechat,$descripcion)
    {        
        date_default_timezone_set("America/Santiago");
        $fechah = date('Y-m-d');
        
        //Estado por defecto.
        $estado = "en curso";

        //Invertir la fecha.
        $invertir = explode("-",$fechat);
        $fecha_invert = $invertir[2]."-".$invertir[1]."-".$invertir[0];
        
        $data = array(
                'rut' => $rut,
                'nombre' => $nombre,
                'apellido' => $apellido,
                'monto' => $monto,
                'correo' => $email,
                'fecha_ent' => $fecha_invert,
                'descripcion' => $descripcion,
                'fechah' => $fechah,
                'estado' => $estado,
                );

        $data2 = array(
                'rCliente' => $rut,
                'nombre' => $nombre,
                'apellido' => $apellido,
                'correo' => $email,
                );
        //aqui se realiza la inserción, si queremos devolver algo deberíamos usar delantre return
        //y en el controlador despues de $nueva_insercion poner lo que queremos hacer, redirigir,
        //envíar un email, en fin, lo que deseemos hacer
        $this->db->insert('pedidos',$data);

        $query = $this->db->where("rCliente",$rut);
        $query = $this->db->get("clientes");

        if ($query->num_rows() == 0)
        {
            $this->db->insert('clientes',$data2);
        }
    }

    function cuanto_pedido($codigo)
    {        
        
        $aux = 'entregado';
        $sql = "SELECT * FROM pedidos WHERE Codigo_pedido = ? AND estado != ?";
        $query = $this->db->query($sql,array($codigo,'entregado'));

        //$query = $this->db->where("Codigo_pedido",$codigo);
        //$query = $this->db->get("pedidos");

        if ($query->num_rows() == 0)
        {
            echo "No existe pedido.";
        }
        else
        {
            return $query->result();
        }
    }

    function actualizar_pedido($codigo,$estado)
    {        
        $data = array(
            'Codigo_pedido' => $codigo,
            'estado' => $estado,
        );

        $query = $this->db->where('Codigo_pedido', $codigo);
        $query = $this->db->update('pedidos', $data);
    }






}/*fin del archivo comentarios model*/