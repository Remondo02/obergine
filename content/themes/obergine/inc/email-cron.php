<?php 

function isa_add_cron_recurrence_interval( $schedules ) {
 
    $schedules['every_three_minutes'] = array(
            'interval'  => 180,
            'display'   => __( 'Every 3 Minutes', 'textdomain' )
    );
     
    return $schedules;
}
add_filter( 'cron_schedules', 'isa_add_cron_recurrence_interval' );

if ( ! wp_next_scheduled( 'your_three_minute_action_hook' ) ) {
    wp_schedule_event( time(), 'every_three_minutes', 'your_three_minute_action_hook' );
}


add_action('your_three_minute_action_hook', 'isa_test_cron_job_send_mail');
 
function isa_test_cron_job_send_mail() {

    if (is_user_logged_in()){ 

        $user_posts_ids = get_user_favorites();
        foreach($user_posts_ids as $id) {  
            $plant_month = get_field( "mois_de_semis", $id); 
            
            foreach($plant_month as $key) {                   
                
                $key = strtolower($key); 
                $month = date_i18n('F');
                
                $month = '<span class="main__container__main-container__top__content__icones__month__march planting-date date-valid date-icone">'.$month.'</span>';         
                
                
                if( $key == $month) {
                    $item = get_the_title($id) . ', ' . $item ;
                    
                }
                
            }
            
        }
        $message = 'Légumes et fruits à planter:' . $item;
        var_dump($message);
            
    };
    

};

    $to = 'emma.marceau@gmail.com';
    $subject = 'Test my 3-minute cron job';
 
    wp_mail( $to, $subject, $message );
 
} 