<?php
	class operacions{				
		public function cilindre($r, $h) {
            $pi = 3.14159265359;
            $superficie = (2 * $pi * $r * $h) + (2 * $pi * $r * $r);
            $volum = $pi * $r * $r * $h;
            return array(
              'superficie' => $superficie,
              'volum' => $volum
            );
          }
		
		public function esfera($r) {
            $pi = 3.14159265359;
            $superficie = 4 * $pi * $r * $r;
            $volum = (4 / 3) * $pi * $r * $r * $r;
            return array(
              'superficie' => $superficie,
              'volum' => $volum
            );
          }
		
		public function piramide($b, $h) {
            $superficie = ($b * $h) + (2 * (($b * sqrt(($h * $h) / 2)) / 2));
            $volum = ($b * $h * $b) / 3;
            return array(
            'superficie' => $superficie,
            'volum' => $volum
        );
        }

		public function cono($r, $h) {
            $pi = 3.14159265359;
            $slant_height = sqrt($r * $r + $h * $h);
            $superficie = $pi * $r * ($r + $slant_height);
            $volum = ($pi * $r * $r * $h) / 3;
            return array(
              'superficie' => $superficie,
              'volum' => $volum
            );
          }

		public function cub($a){
            $superficie = 6 * $a * $a;
            $volum = $a * $a * $a;
            return array(
              'superficie' => $superficie,
              'volum' => $volum
            );
    }
	}

?>