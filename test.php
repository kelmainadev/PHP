
<?php
namespace inherits {

    class Tests{

        function multiplication(){
            $x = 5;
            $y = 9;

            echo $x * $y;


        }


        function additions(){
            $x = 9;
            $y = 6;

            echo $x + $y;
        }
        function subtraction(){

            $x = 8;
            $y = 5;

            echo $x - $y;
        }
    }
    class additions extends Tests{

    }
    $r = new additions();
    $r ->additions();
    ?>


<?php } ?>