<?php

namespace ProximityRacing;

class CalculatorView {

    public function __construct() {
    }

    public function presentCalculated() {
        $html = "";
        if(isset($_SESSION['error'])) {
            $error = $_SESSION['error'];
            $html .= <<<HTML
            <h5 class="text-center mt-5">$error</h5>
HTML;
        }

        if(isset($_SESSION['year']) && isset($_SESSION['calculatedValue'])) {
            $res = $_SESSION['calculatedValue'];
            $year = $_SESSION['year'];
            $html .= <<<HTML
            <h5 class="text-center mt-5">Your iRating in $year would be $res</h5>
HTML;
        }

        return $html;
    }
}



