<?php
  
class Movie {

    public $titolo;
    public $regista;
    public $durata;
    public $annodiuscita;

    public function whatgenis(){
        if ($this->annodiuscita > 2000){
            return "NEXT GEN";
        }else{
             return "OLD GEN";
        };
     }

    function __construct($titolo,$regista,$durata,$annodiuscita) {
        $this->titolo=$titolo;
        $this->regista=$regista;
        $this->durata=$durata;
        $this->annodiuscita=$annodiuscita;
    }

 };


  $pulpfiction=new Movie("Pulp Fiction","Quentin Tarantino","120min",1994); 
  $inception=new Movie("Inception","Christopher Nolan","140min",2010); 
  

  var_dump($pulpfiction->generation, $inception->whatgenis());

?>