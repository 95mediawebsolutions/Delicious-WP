<?php
/*
@Package Delious WP

Search Form Goes Here.

*/
?>


<?php $unique_id = esc_attr(uniqid());?>

    <form action="<?php echo esc_url(home_url('/'));?>" method="get">
        <div class="form-group">
            <div class="input-group mb-3">
            <input type="text" class="form-control" name="s" id="<?php echo $unique_id; ?>"
                placeholder='<?php echo esc_attr_x( 'Press Enter To Search', 'delicious-wp' ); ?>'>
                <div class="input-group-append">
                        <div class="input-group-append">
                            <button type="submit" class="btns"><span class="screen-reader-text"><?php _e( 'Search', 'delicious-wp' ); ?></span><i class="ti-search"></i></button>
                        </div>
                </div>
</div>
        <button class="btn delicious-btn mb-2 w-100 "type="submit">Search</button>
    </form>
