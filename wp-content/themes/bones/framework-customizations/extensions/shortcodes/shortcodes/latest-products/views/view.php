<?php

          $ibro__latest_args = array( 'post_type' => 'product', 'posts_per_page' => 8, 'orderby' =>'date','order' => 'DESC' );

          $ibro_loop = new WP_Query( $ibro__latest_args );
        echo '<section>';
        echo '<div class="container">';
        echo '<div class="row">';
          if( $ibro_loop->have_posts() ):

            echo '<div class="row multi-columns-row">';

            while( $ibro_loop->have_posts() ) :

              $ibro_loop->the_post();
              global $product;

              echo '<div class="col-sm-6 col-md-3 col-lg-3">';
                echo '<div class="last-items__item">';
                  echo '<div class="last-items__image-holder">';

                    if (has_post_thumbnail( $ibro_loop->post->ID )):
                      echo get_the_post_thumbnail($ibro_loop->post->ID, 'shop_catalog');
                    else:
                      if( function_exists('woocommerce_placeholder_img_src') ):
                        echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="65px" height="115px" />';
                      endif;
                    endif;

                    echo '<div class="last-items__buttons">';
                      echo '<a class="last-items__item-more" href="'.get_permalink().'">'.__('Подробнее','ibro-shop').'</a>';
                      echo '<a class="last-items__item-buy" href="'.$product->add_to_cart_url().'">'.__('Купить','ibro-shop').'</a>';
                    echo '</div>';
                  echo '</div>';
                  echo '<h3 class="last-items__title"><a href="'.get_permalink().'">'.get_the_title().'</a></h3>';
                  if( function_exists('get_woocommerce_currency_symbol') ):
                    echo get_woocommerce_currency_symbol().$product->price;
                  endif;
                echo '</div>';
              echo '</div>';

            endwhile;

            echo '</div>';

            echo '<div class="row mt-30">';
              echo '<div class="col-sm-12 align-center">';
                if( function_exists('woocommerce_get_page_id') ):
                  echo '<a href="'.get_permalink( woocommerce_get_page_id( 'shop' )).'" class="btn btn-b btn-round">'.__('See all products','shop-isle').'</a>';
                endif;
              echo '</div>';
            echo '</div>';

          else:

            echo '<div class="row">';
              echo '<div class="col-sm-6 col-sm-offset-3">';
                echo '<p class="">'.__('No products found.','shop-isle').'</p>';
              echo '</div>';
            echo '</div>';

          endif;
          echo '</div>';
          echo '</div>';
echo '</section>';
          ?>
