<select id="make" name="make">
<option value="">--</option>
<?php
     $term_query = new WP_Term_Query( array( 'taxonomy' => 'make', 'parent' => 0 ) );
     if ( ! empty( $term_query->terms ) ) {
        foreach ( $term_query ->terms as $term ) {
            $term_children = get_term_children( $term->term_id, 'make' );
            foreach($term_children as $children){
                $child = get_term_by( 'id', $children, 'make' );
                echo '<option class="' . $child->name . '" value="' . $child->name . '">' . $child->name . '</option>';
            }
        }
     } else {
     };
?>
</select>
