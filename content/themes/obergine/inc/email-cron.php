<?php 

function isa_add_cron_recurrence_interval( $schedules ) {
 
    $schedules['every_three_minutes'] = array(
            'interval'  => 10,
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
    $favorites = get_user_favorites(); 
    foreach ($favorites as $item) {
        $message = 'Il serait temps de planter :' . $item;
    }
    var_dump($message);

};
     




    $to = '';
    $subject = 'Test my 3-minute cron job';
 
    wp_mail( $to, $subject, $message );
 
} 