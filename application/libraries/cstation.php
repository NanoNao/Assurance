<?

class Cstation
{

private $_ID;
private $_Nom;
private $_Code;
private $_Image;
private $_Insee;

    public function  __construct($ID=0,$Nom="",$Code="",$insee=0,$Image=""){ //CREE LA CLASSE CONTENU

        $this->_ID=$ID;
        $this->_Nom=$Nom;
        $this->_Code=$Code;
        $this->_Image=$Image;
        $this->_Insee=$insee;
    }

    public function getID() {return $this->_ID;} //GETTER 
    public function getNom() {return $this->_Nom;} 
    public function getImage() {return $this->_Image;} //GETTER 




}
?>
