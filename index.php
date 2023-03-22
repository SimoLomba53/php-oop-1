<?php
  class Movie{
    public $titolo;
    public $regista;
    public $durata;
    public $annodiuscita;
  }


  $pulpfiction= new Movie(); 
  $pulpfiction->titolo= "Pulp Fiction";
  $pulpfiction->regista="Quentin Tarantino";
  $pulpfiction->durata="120min";
  $pulpfiction->annodiuscita=1994;

  var_dump($pulpfiction);

?>