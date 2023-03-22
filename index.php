<?php
  class Movie{
    public $titolo;
    public $regista;
    public $durata;
    public $annodiuscita;

     function __construct($titolo,$regista,$durata,$annodiuscita) {
     $this->titolo=$titolo;
     $this->regista=$regista;
     $this->durata=$durata;
     $this->annodiuscita=$annodiuscita;
  }
 }


  $pulpfiction=new Movie("Pulp Fiction","Quentin Tarantino","120min",1994); 
  

  var_dump($pulpfiction);

?>