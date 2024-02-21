<?php
global $gleshop_theme_options;
global $gleshop_theme_socnetwork;
?>


<footer class="footer" id="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 col-md-3">
                <h4>
                    Information
                </h4>
                <ul class="list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="">Payment</a></li>
                    <li><a href="">Delivery</a></li>
                    <li><a href="">Contacts</a></li>
                </ul>

            </div>

            <div class="col-6 col-md-3">
                <?php if (!empty($gleshop_theme_options['address']) or !empty($gleshop_theme_options['working_hours'])): ?>
                    <h4>
                        Working hours
                    </h4>
                    <ul class="list-unstyled">
                        <?php if (!empty($gleshop_theme_options['address'])): ?>
                            <li> <?php echo $gleshop_theme_options['address']; ?></li>
                        <?php endif; ?>
                        <?php if (!empty($gleshop_theme_options['working_hours'])): ?>
                            <li> <?php echo $gleshop_theme_options['working_hours']; ?></li>
                        <?php endif; ?>
                    </ul>

                <?php endif; ?>

            </div>

            <div class="col-6 col-md-3">
                <h4>
                    Contacts
                </h4>
                <ul class="list-unstyled">
                    <?php if (!empty($gleshop_theme_options['phone'])): ?>
                        <li>
                            <a href="tel:+<?php echo str_replace(array(' ', '-', '+', '(', ')'), array('', '', '', '', ''), $gleshop_theme_options['phone']); ?>"><?php echo $gleshop_theme_options['phone']; ?></a>
                        </li>
                    <?php endif; ?>
                </ul>

            </div>

            <div class="col-6 col-md-3">
                <h4>
                    Follow us
                </h4>
                <ul class="footer-icons">
                    <?php foreach ($gleshop_theme_socnetwork as $socnet_item): ?>
                        <li><a href="<?php echo $socnet_item['option_link']; ?>"><i
                                        class="fa-brands <?php echo $socnet_item['option_select']; ?>"></i></a></li>
                    <?php endforeach; ?>
                </ul>

            </div>
        </div>
    </div>
</footer>

</div> <!-- wrapper -->

<button id="top"><i class="fa-solid fa-circle-up"></i></button>


<?php wp_footer() ?>
</body>
</html>