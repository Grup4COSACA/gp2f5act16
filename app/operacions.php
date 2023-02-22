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

    public function prisma_hexagonal($h, $c) {
            $area_base = (3 * sqrt(3) * pow($c, 2)) / 2;
            $volum = $area_base * $h;
            return $volum;
      }

    public function TroncCon($h, $r1, $r2) {
            $volum = (1/3) * pi() * $h * ($r1*2 + $r1 || $r2 + $r2**2);
            return $volum;
    }

    public function Ortoedre($l) {
            $volum = (1/3) * sqrt(2) * ($l ** 3);
            return $volum;
    }
	}

?>