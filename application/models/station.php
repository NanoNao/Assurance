<?
class Station extends CI_MODEL {



    public function __construct(){ //CONSTRUCTION DE CONTEU_SQL

        $this->load->database();
        $this->load->library('Cstation');
    }

    public function getAll() //RECUPERE TOUTES LA TABLEA CONENU
    {

        $query = $this->db->get('station');
        $data= array();
        foreach ($query->result() as $row)
        {
            $data[$row->ID] = new Cstation($row->ID,$row->Nom,$row->Code,$row->Insee,$row->Image);


        }
           return $data;

    }
    

/*  public function post_Stations($data){

        $data = array(
            'code' => $this->input->post('idstation'),
            'caracteristiques' => $this->input->post('caract'),
            'id_lieu' => $this->input->post('localparc')
        );

        return $this->db->insert('stations', $data);
    }*/



}
