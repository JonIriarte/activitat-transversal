<?php
class Edicion{
    private $id; 
    private $ano; 
    private $finalizada;
    
    public function __construct(){
        
    }



    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of ano
     */ 
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set the value of ano
     *
     * @return  self
     */ 
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get the value of finalizada
     */ 
    public function getFinalizada()
    {
        return $this->finalizada;
    }

    /**
     * Set the value of finalizada
     *
     * @return  self
     */ 
    public function setFinalizada($finalizada)
    {
        $this->finalizada = $finalizada;

        return $this;
    }
}


?>