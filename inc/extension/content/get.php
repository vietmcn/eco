<?php 
if ( !defined( 'ABSPATH' ) ) :
    exit;
endif;
if ( !class_exists( 'Eco_Query' ) ) :
    class Eco_Query
    {
        public function Query() 
        {

        }
    }
    
endif;

$Eco_Querys = new Echo_Query;