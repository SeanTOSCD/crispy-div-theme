<?php
/**
 * Front page of the site
 */

get_header();
?>

    <section class="page-header">
        <div class="page-header-hero">
            <div class="page-header-hero-inner">
                <div class="inner no-vertical-spacing">
                    <div class="what-we-do">
                        <div class="content-wrap">
                            <h1 class="page-header-title"><?php echo get_crispydiv_tagline(); ?></h1>
                            <div class="page-header-description">
                                <p>Getting started with WordPress is simple. Molding WordPress to your needs can be difficult. We find creative ways to solve that problem.</p>
                            </div>
                            <p class="page-header-cta dual-cta">
                                <?php
                                crispydiv_button( array(
	                                'text' => 'Start the Conversation',
	                                'url' => home_url( '/contact/' ),
	                                'classes' => array( 'button', 'primary' ),
                                ) );
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php echo get_crispydiv_services_grid( true, true, array( 'background-purple' ) ); ?>
    </section>

    <section class="plugin-integration-section">
        <div class="customization-logos-wrap element-spacing small background-gray">
            <span class="customizations-title subdued-title">Experienced with your favorite plugins, themes, libraries, and services:</span>
		    <?php
		    $customization_logos = get_customization_logos( array(
                    'easy-digital-downloads',
                    'gravity-forms',
                    'advanced-custom-fields',
                    'searchwp',
                    'facetwp',
            ) );
		    if ( ! empty( $customization_logos ) ) {
			    ?>
                <div class="customizations-grid">
				    <?php foreach ( $customization_logos as $logo ) { ?>
                        <div class="customization-logo">
						    <?php $logo_name = isset( $logo['alias'] ) ? $logo['alias'] : $logo['name']; ?>
                            <img class="logo <?php echo str_replace( " ", "-", strtolower( $logo_name ) ); ?>-logo" src="<?php echo THEME_IMAGES . 'logos/' . $logo['image']; ?>" alt="<?php echo $logo['name'] . ' - ' . $logo['description']; ?>" aria-describedby="<?php echo $logo['description']; ?>">
                        </div>
				    <?php } ?>
                </div>
			    <?php
		    }
		    ?>
        </div>
        <div class="advanced-custom-fields-highlight element-spacing large">
            <div class="acf-grid">
                <div class="acf-highlight-content">
                    <img class="advanced-custom-fields-logo" src="<?php echo THEME_IMAGES . 'logos/advanced-custom-fields-logo.png'; ?>" alt="Advanced Custom Fields">
                    <span class="h5 acf-highlight-title color-black">Tweak your settings, not our code.</span>
                    <p><a href="https://advancedcustomfields.com/" target="_blank">Advanced Custom Fields</a> (ACF) is a powerful plugin that allows you to create custom fields for your WordPress site. We use it to create custom post types, taxonomies, fields, and more.</p>
                    <p>With ACF's incredible features, <strong class="color-black">we can make every element of your site editable from the WordPress dashboard</strong>. This allows you to control your site's content, regardless of type or structure, without having to deal with code or theme edits.</p>
                    <p>We write field values directly to your WordPress theme. You manage content from your WordPress dashboard. There's no need for overlap.</p>
                </div>
                <div class="acf-graphic">
                    <img class="advanced-custom-fields-graphic" src="<?php echo THEME_IMAGES . 'advanced-custom-fields-hero-area-fields.png'; ?>" alt="Advanced Custom Fields - Page Hero Fields">
                </div>
            </div>
        </div>
        <div class="facetwp-gravity-forms-grid">
            <div class="facetwp-grid-item element-spacing back">
                <img class="logo facetwp-logo" src="<?php echo THEME_IMAGES . 'logos/facetwp-logo.png'; ?>" alt="FacetWP">
                <p><a href="https://facetwp.com/" target="_blank">FacetWP</a> introduces advanced filtering for WordPress. The smart functionality allows site visitors to control what content they see and find what they are looking for much faster.</p>
                <p>We use FacetWP in a number of ways, including blog post filtering. Let your readers <strong class="color-black">filter blog posts by category, tag, or custom field</strong> of your choosing (including fields created by Advanced Custom Fields). It's intelligent, fast, lightweight, and incredibly useful.</p>
            </div>
            <div class="gravity-forms-grid-item element-spacing">
                <img class="logo gravity-forms-logo" src="<?php echo THEME_IMAGES . 'logos/gravity-forms-logo.svg'; ?>" alt="Gravity Forms">
                <p><a href="https://www.gravityforms.com" target="_blank">Gravity Forms</a> is more than just a custom form builder. Its robust functionality can handle everything from collecting online payments via Stripe to routing detailed support requests to Help Scout.</p>
                <p>We use Gravity Forms to streamline interactions with users and maintain a detailed records. With <strong class="color-black">over 30 form fields to choose from</strong> and integration capabilities through its API & webhook functionality, the possibilities are endless and exciting.</p>
            </div>
        </div>
        <div class="small-cta-section element-spacing tiny background-pink">
            <p>Curious about a specific plugin or service? <a href="<?php echo home_url( '/contact/' ); ?>">Send us an email</a> to ask questions. No obligations.</p>
        </div>
    </section>

    <section class="theme-development-section background-purple">
        <div class="real-data-header element-spacing large">
            <span class="grid-item-icon element-lead-icon colored"><i class="fa-light fa-table-layout"></i></span>
            <h2 class="section-title">We build themes <br class="disappearing-br">based on real data<span class="highlight-text">.</span></h2>
            <p class="subdued-links attribution">According to studies conducted by <a href="https://www.nngroup.com" target="_blank">Nielsen Norman Group</a>:</p>
            <ul class="nng-stats">
                <li><i class="fa-solid fa-circle"></i><p class="stat-title">Above the Fold</p>Users spend 80% of their time on a website looking at the information presented above the fold on page load.</li>
                <li><i class="fa-solid fa-circle"></i><p class="stat-title">The "F" pattern</p>User scan content in an "F" pattern: from top left moving horizontally, down the left side, then across the middle.</li>
                <li><i class="fa-solid fa-circle"></i><p class="stat-title">Skimmable Content</p>Users are more likely to engage with content that is presented in short paragraphs and with clear headings.</li>
            </ul>
        </div>
        <div class="mock-browser-grid element-spacing large">
            <div class="mock-browser-wrap">
                <div class="mock-website" noindex>
				    <?php get_template_part( 'template-parts/mock-browser' ); ?>
                </div>
            </div>
            <div class="design-description">
                <p class="blurb-title">Does this design look familiar?</p>
                <p>There's a reason why so many website designs follow the same content structure. It's proven, and it works.</p>
                <p>You've probably seen dozens of websites like this example.</p>
                <ul>
                    <li>Logo top left, navigation top right</li>
                    <li>Informative hero area above the fold</li>
                    <li>3-column features highlight</li>
                    <li>Logo pond for social proof</li>
                    <li>Action buttons with high contrast</li>
                </ul>
                <p>There's a time and place for shock and awe, and that's when your ability to shock and awe holds value.</p>
                <p>In most other cases, it's a distraction. We won't reinvent the wheel with our designs. We'll convert your visitors.</p>
            </div>
        </div>
        <div class="the-standard-title element-spacing small">
            <span class="h4">Every <?php echo THEME_NAME; ?> website meets the <br class="disappearing-br">following standards. <span class="highlight-text">No exceptions.</span></span>
        </div>
        <div class="standards-grid general-grid">
            <div class="grid-item">
                <div class="grid-item-content">
                    <span class="grid-item-icon element-lead-icon colored"><i class="fa-light fa-mobile"></i></span>
                    <h3 class="grid-item-title color-black">Mobile-friendly</h3>
                    <p>Both desktop and mobile designs are standard. More than 60% of all web traffic is mobile (<a href="https://gs.statcounter.com/platform-market-share/desktop-mobile/worldwide/#yearly-2011-2022" target="_blank">source</a>).</p>
                </div>
            </div>
            <div class="grid-item">
                <div class="grid-item-content">
                    <span class="grid-item-icon element-lead-icon colored"><i class="fa-light fa-bullseye-arrow"></i></span>
                    <h3 class="grid-item-title color-black">Purpose-driven</h3>
                    <p>Pages are designed to guide visitors towards an action, like clicking a link or reading specific text.</p>
                </div>
            </div>
            <div class="grid-item">
                <div class="grid-item-content">
                    <span class="grid-item-icon element-lead-icon colored"><i class="fa-light fa-handshake-angle"></i></span>
                    <h3 class="grid-item-title color-black">Accessibility-focused</h3>
                    <p>Clarity, contrast, and usability are paramount, providing the best user experience for visitors.</p>
                </div>
            </div>
            <div class="grid-item">
                <div class="grid-item-content">
                    <span class="grid-item-icon element-lead-icon colored"><i class="fa-light fa-timer"></i></span>
                    <h3 class="grid-item-title color-black">Fast-loading</h3>
                    <p>47% of users expect a page to load in two seconds or less. 40% will leave after three seconds (<a href="https://www.thinkwithgoogle.com/consumer-insights/consumer-trends/mobile-page-speed-new-industry-benchmarks/" target="_blank">source</a>).</p>
                </div>
            </div>
            <div class="grid-item">
                <div class="grid-item-content">
                    <span class="grid-item-icon element-lead-icon colored"><i class="fa-light fa-pen-ruler"></i></span>
                    <h3 class="grid-item-title color-black">Meticulously-designed</h3>
                    <p>Even the tiny details matter. When viewed as a whole, you can feel if a design is <em>crisp</em> or sloppy.</p>
                </div>
            </div>
            <div class="grid-item">
                <div class="grid-item-content">
                    <span class="grid-item-icon element-lead-icon colored"><i class="fa-light fa-shield-check"></i></span>
                    <h3 class="grid-item-title color-black">Well-secured</h3>
                    <p>Only trusted and maintained scripts and resources are used. Site owners and visitors are protected.</p>
                </div>
            </div>
        </div>
        <div class="small-cta-section element-spacing tiny background-pink">
            <p><a class="cta-link" href="<?php echo home_url( '/contact/' ); ?>">Reach out to start the conversation.</a> Let's see if we're a good fit. No obligations.</p>
        </div>
    </section>

    <section class="courses-section">
        <div class="section-heading element-spacing large">
            <span class="grid-item-icon element-lead-icon colored"><i class="fa-light fa-graduation-cap"></i></span>
            <h2 class="section-title">Build WordPress <br class="disappearing-br">yourself, your way<span class="highlight-text">.</span></h2>
            <div class="section-description">
                <p>Sometimes you just have to "roll your own." We get it. In fact, that's how the journey begins for most self-taught developers and designers. Welcome to the club. We're here to help you <strong>learn the tricks of the trade, skip the unnecessary hardships</strong>, and actually get some work done. Here's what we have to offer.</p>
            </div>
        </div>
        <?php echo get_crispydiv_courses_grid(); ?>
    </section>

    <section class="contact-cta-section element-spacing medium">
        <span class="cta-title h4">Got questions?</span>
        <p>Don't be shy! <a class="cta-link" href="<?php echo home_url( '/contact/' ); ?>">Send an email</a> with your inquiry. No obligations.</p>
    </section>

<?php
get_footer();
