<?php
class Frontend extends CI_Model {

    public function __construct()
        {
                $this->load->database();
        }
   

        /*Catalogo*/
    public function get_destinos_traslados()
    {
        
        $query = $this->db->query('SELECT A.id, A.nombre_del_destino from zona B 
        inner join destino A on A.id_zona =B.id 
        WHERE A.id_zona = 1 AND A.id_categorias_traslados = 1 AND activo = 1');       
        return $query->result_array();


    }
     /*Catalogo*/
    public function get_destinos_excursion()
    {
        $query = $this->db->query('SELECT A.id, A.nombre_del_destino from zona B 
        inner join destino A on A.id_zona =B.id 
        WHERE A.id_zona = 1 AND A.id_categorias_traslados = 2 AND activo = 1');
        return $query->result_array();
    }
    



    public function get_resultados_traslados()
    {
         /*redondo o simple*/   
        $tipo_traslado=$this->input->post("tipo_traslado");
        /*zona 1  roo , zona 2 Cuernavaca */
        $zona=$this->input->post("zona");
        /*al hotel o la excursion */
        $destino=$this->input->post("destino");
        /*no personas */
        $pax=$this->input->post("pax");
        /* aerpuerto- hotel, hotel excursion*/
        $id_categoria_traslado=$this->input->post("id_categoria_traslado");
        
        if($tipo_traslado > 1)
        {
        $query = $this->db->query('
        select  B.id_rangos_pax, C.nombre_del_destino,A.precio , round(A.precio*1.16 * 2) as precio_total, E.nombre, E.foto from tarifas A 
        inner join rangos_pax B on id_rangos_pax = id_rangos
        inner join destino C on C.id = A.id_destino
        inner join zona D on D.id = C.id_zona
        inner join camionetas E on E.id = B.id_camionetas
        WHERE D.id= 1
        AND C.id = '.$destino.'
        AND B.pax_min <= '.$pax.'
        AND B.pax_max >= '.$pax.'
        ORDER BY pax_min
        ');
        
        }
        else{
        $query = $this->db->query('
        select  B.id_rangos_pax, C.nombre_del_destino,A.precio , round(A.precio*1.16) as precio_total, E.nombre, E.foto from tarifas A 
        inner join rangos_pax B on id_rangos_pax = id_rangos
        inner join destino C on C.id = A.id_destino
        inner join zona D on D.id = C.id_zona
        inner join camionetas E on E.id = B.id_camionetas
        WHERE D.id= 1
        AND C.id = '.$destino.'
        AND B.pax_min <= '.$pax.'
        AND B.pax_max >= '.$pax.'
        ORDER BY pax_min
        ');
        }
        
        return $query->result_array();
    }

    public function setClientes(){
       
        
        $tipo_traslado_rd =$this->input->post('tipo_traslado_rd');
        $fecha_llegada=$this->input->post('fecha_llegada');
        $fecha_salida=$this->input->post('fecha_salida');
        $origen=$this->input->post('origen');
        $id_destino=$this->input->post('id_destino');
        $pax=$this->input->post('pax');
        $id_categoria_traslado=$this->input->post('id_categoria_traslado');
        $id_zona=$this->input->post('id_zona');
        $total=$this->input->post('total');
        $id_rangos_pax=$this->input->post('id_rangos_pax');
        $status=$this->input->post('status');
        $token=$this->input->post('token');
  
        $data = array(
            'tipo_traslado_rd' =>  $tipo_traslado_rd,
            'fecha_llegada' => $fecha_llegada,
            'fecha_salida' => $fecha_salida,
            'origen' => $origen,
            'id_destino' => $id_destino,
            'pax' => $pax,
            'id_categoria_traslado' =>$id_categoria_traslado ,
            'id_zona' => $id_zona,
            'total' => $total,
            'id_rangos_pax' => $id_rangos_pax,
            'token' => $token,
            'status' => $status
    );
    
        if ( $this->db->insert('clientes', $data) ){
            echo $this->db->insert_id();
        } else {
            return false;
        }    


    }

    public function getInfo(){

        $id =$this->uri->segment(2);   
        $query = $this->db->query('select * from clientes A inner join destino B on B.id = A.id_destino WHERE  A.id='.$id.'');
        $row = $query->row();
        return $row;
        
    }

    public function setReserva(){
        $id=$this->input->post('id');
        $nombre_completo=$this->input->post('nombre_completo');
        $correo=$this->input->post('correo');
        $telefono=$this->input->post('telefono');
        $vuelo_ll=$this->input->post('vuelo_ll');
        $aerolinea_ll=$this->input->post('aerolinea_ll');
        $hora_llegada_ll=$this->input->post('hora_llegada_ll');
        $comentarios_ll=$this->input->post('comentarios_ll');
        $vuelo_s=$this->input->post('vuelo_s');

        $aerolinea_s=$this->input->post('aerolinea_s');
        $hora_llegada_s=$this->input->post('hora_llegada_s');
        $comentarios_s=$this->input->post('comentarios_s');

        $hotel_hospeda=$this->input->post('hotel_hospeda');
        $no_habitacion=$this->input->post('no_habitacion');

        $punto_hotel_regreso=$this->input->post('punto_hotel_regreso');
        $ninos=$this->input->post('ninos');


        $data = array(
            'nombre_completo' =>  $nombre_completo,
            'correo' => $correo  ,
            'telefono' =>  $telefono,
            'vuelo_ll' => $vuelo_ll ,
            'aerolinea_ll' => $aerolinea_ll ,
            'hora_llegada_ll' => $hora_llegada_ll ,
            'comentarios_ll' =>  $comentarios_ll,
            'vuelo_s' =>$vuelo_s  ,
            'aerolinea_s' =>  $aerolinea_s,
            'hora_llegada_s' =>  $hora_llegada_s,
            'comentarios_s' =>  $comentarios_s,

            'hotel_hospeda' =>  $hotel_hospeda,
            'no_habitacion' =>  $no_habitacion,
            'punto_hotel_regreso' => $punto_hotel_regreso,
            'ninos' =>  $ninos
    );

            $this->db->where('id', $id);
            $this->db->update('clientes', $data);
        
    }

    public function confirmacionPago()
    {
        $data = array(
            'pagada' =>  1
        );

        $token=$this->input->get('pid');
        $this->db->where('token', $token);
        $this->db->update('clientes', $data);
    }

    public function getReservaPagada($token){
        $query = $this->db->query('select * from clientes A inner join destino B on B.id = A.id_destino WHERE  token="'.$token.'"');
        $row = $query->row();
        return $row;
        
    }
    

}

?>