<?php

        // Dynamisation du titre.
        

        $get_title = get_bloginfo();
        $get_title_array = str_split($get_title );
        
        $i = 0;
        $title1 = [];
        $title2 = [];
        
        foreach ($get_title_array as $key => $value) {
            if( $i == 0 ) {
                $i++;
                $title1[] = $value;
            } else {
                $title2[] = $value;
            }
        }
        $part1 = implode($title1);
        $part2 = implode($title2);

        ?>
        