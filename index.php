<?php
  class Movie{
    public $titolo;
    public $regista;
    public $durata;
    public $annodiuscita;
    public $generation = "WCK";

    public function whatgenis($generation){
        if ($annodiuscita > 2000){
             $this->generation = print("NEXT GEN");
        }else{
             $this->generation = print("OLD GEN");
        };
     }

     function __construct($titolo,$regista,$durata,$annodiuscita,$generation) {
     $this->titolo=$titolo;
     $this->regista=$regista;
     $this->durata=$durata;
     $this->annodiuscita=$annodiuscita;
     $this->generation=$generation;

   }
 };


  $pulpfiction=new Movie("Pulp Fiction","Quentin Tarantino","120min",1994,""); 
  $inception=new Movie("Inception","Christopher Nolan","140min",2010,""); 
  

  var_dump($pulpfiction,$inception);

?>