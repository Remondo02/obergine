<?php

// Sans passer par le back office et les class additionnelles, on peut désactiver les meta (tags) sur la page d'un produit de boutique
 remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );


// Dans le backoffice 
/* hide category */
/* .product_meta {
    display: none;
  }
  .single-product header .entry-meta {
      display: none;
  } */