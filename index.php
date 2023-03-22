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
  

  var_dump($pulpfiction,$pulpfiction->whatgenis(),$inception, $inception->whatgenis());

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1><?php echo $pulpfiction->titolo ?></h1>
        <p><?php echo $pulpfiction->regista ?></p>
        <p><?php echo $pulpfiction->durata ?></p>
        <p><?php echo $pulpfiction->annodiuscita ?></p>  
    </div>
    <div>
        <h1><?php echo $inception->titolo ?></h1>
        <p><?php echo $inception->regista ?></p>
        <p><?php echo $inception->durata ?></p>
        <p><?php echo $inception->annodiuscita ?></p>  
    </div>
</body>
</html>