<?php

    class movie {
        public $titolo;
        public $genere;
        public $durata;
        public $anno;


        public function __construct($_titolo, $_genere, $_durata, $_anno){
            $this -> titolo = $_titolo;
            $this -> genere = $_genere;
            $this -> durata = $_durata;
            $this -> anno = $_anno;
        }
    }

    $film = new movie("American Sniper", "Guerra", 2014, "2h 12m"  );

    echo "<div style = 'border: 1px solid; width: 200px; text-align: center; display: inline-block'>";
        echo "<p>" . "Titolo:" . " " . $film -> titolo . "</p>";
        echo "<p>" . "Genere:" . " " . $film -> genere . "</p>";
        echo "<p>" . "Durata:" . " " . $film -> durata . "</p>";
        echo "<p>" . "Anno:" . " " . $film -> anno . "</p>";
    echo "</div>";

    $film2 = new movie("The Fast and the Furious: Tokyo Drift", "Azione", 2006, "1h 44m"  );
    
    echo "<div style = 'border: 1px solid; width: 200px; text-align: center; margin-top:20px; margin-left:20px; display: inline-block'>";
        echo "<p>" . "Titolo:" . " " . $film2 -> titolo . "</p>";
        echo "<p>" . "Genere:" . " " . $film2 -> genere . "</p>";
        echo "<p>" . "Durata:" . " " . $film2 -> durata . "</p>";
        echo "<p>" . "Anno:" . " " . $film2 -> anno . "</p>";
    echo "</div>";
    
?>