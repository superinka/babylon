
<div class="col-xs-12 col-sm-6 col-md-9 categories-box">
    <div class="row cate-list">
      <div class="block-title title1"><h2><span><span>Các sản phẩm chính</span></span></h2></div>
      <?php 
            $args = array(
                  'number'     => $number,
                  'orderby'    => $orderby,
                  'order'      => $order,
                  'hide_empty' => $hide_empty,
                  'include'    => $ids
              );

              $product_categories = get_terms( 'product_cat', $args );

              $count = count($product_categories);
               if ( $count > 0 ){
                   echo "<ul>";
                   foreach ( $product_categories as $product_category ) {
                    $thumbnail_id = get_woocommerce_term_meta( $product_category->term_id, 'thumbnail_id', true );
                    $image = wp_get_attachment_url( $thumbnail_id );
                     ?>
                      <li class="product-category">
                      <div class="col-md-4 col-sm-12 col-xs-12">
                        <figure>
                          <img class="img-responsive" style="height: 240px;width: 255px;"src="<?php echo $image; ?>">
                          <figcaption>
                            <h3><?php echo $product_category->name ?></h3>
                            <span><?php echo $product_category->count ?> sản phẩm</span>
                            <a href="<?php echo get_term_link( $product_category )?>">Xem</a>
                          </figcaption>
                        </figure>
                        <div class="cate-title">
                          <span><a href="<?php echo get_term_link( $product_category )?>"><?php echo $product_category->name ?></a></span>
                        </div>
                      </div>
                    </li>
                     <?php
                      
                   }
                   echo "</ul>";
               }
      ?>

        <div class="clearfix"></div>
      </ul>
    </div>
  </div>
  <!-- end categories-box -->