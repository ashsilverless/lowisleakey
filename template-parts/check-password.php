<!--Password Module-->
<section id="login-overlay">
    <?php $the_unique_id = get_field('unique_id'); ?>
    <?php $the_password = get_field('password'); ?>
    <div class="header-overlay">
        <div class="row">
            <div class="logo">
                <a href="<?php echo site_url(); ?>">
                    <?php get_template_part('inc/img/logo'); ?>
                </a>
            </div>
        </div>
    </div>
    <?php $pageImage = get_field('log_in_background', 'options'); ?>

    <div class="full-page-panel" style="background-image: url(<?php echo $pageImage; ?>);">
        <div class="row">
            <div class="details-entry">
                <h1 class="heading heading__lg">
                    Your Safari
                </h1>
                <h2 class="heading heading__primary heading__sm">
                    Go to your own place
                </h2>
                <div class="inputs">
                    <div class="input-wrapper unique-id">
                        <input id="unique_id" type="text" name="uniqueID" placeholder="Unique ID" />
                        <span>
                            <?php get_template_part('inc/img/padlock '); ?>
                        </span>
                        <div class="proceed-itin" id="goto-itin">
                            <?php get_template_part('inc/img/chevron'); ?>
                        </div>

                        <div class="icon-animated icon-animated-tick" tabindex="-1" aria-hidden="true">
                            <svg class="circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="50" />
                            </svg>

                            <div class="tick">
                                <svg class="tick-leg1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 52">
                                    <polygon class="" points="1,41 0,48 25,52 25,45" />
                                </svg>
                                <svg class="tick-leg2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 52">
                                    <polygon class="" points="18,45 25,47 25,0 18,0" />
                                </svg>
                            </div>
                        </div>

                        <div class="error-message">
                            <p>Oops, looks like there has been a problem.</p>
                            <p>Please try again or <a href="">contact us</a> for help</p>
                        </div>
                    </div>

                    <?php if (strpos($_SERVER["REQUEST_URI"], "/safari-tour-ideas/") !== false) { ?>
                    <div class=" input-wrapper password">
                        <input id="password" type="text" placeholder="Password*" />
                        <div class="error-message password">
                            <p>Oops, looks like there has been a problem.</p>
                            <p>Please try again or <a href="">contact us</a> for help</p>
                        </div>
                    </div>

                    <div class="input-wrapper submit-button">
                        <button id="check-details">Submit</button>
                    </div>
                    <?php } ?>
                </div>
            </div>
            </row>
        </div>
</section>
<!--Password Module End-->