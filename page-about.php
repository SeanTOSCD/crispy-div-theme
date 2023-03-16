<?php
/**
 * About page template
 */
get_header();
crispydiv_page_header( array(
	'bg-color' => 'background-purple',
	'corner-accent-color' => 'white-orange',
	'title' => get_field( 'page_header_title' ) ?: get_the_title( get_the_ID() ),
	'description' => get_field( 'page_header_description' ) ?: '',
) );
?>

<section class="history-section background-gray">
	<div class="inner medium">
		<div class="history-grid">
            <div class="history-grid-content">
                <span class="history-title h5 heavy">Development & Design History</span>
                <p>Crispy Div is the brainchild of Sean Davis, a web developer and designer from St. Louis, Missouri. Sean started building websites in 2007 with heavy focus on WordPress beginning in 2008 (<a href="https://profiles.wordpress.org/sdavis2702/" target="_blank">Sean's WordPress profile</a>).</p>
                <p>As the first employee and eventual Partner at <a href="https://sandhillsdev.com/about/" target="_blank">Sandhills Development LLC</a>, Sean co-owned and helped design and develop several popular WordPress plugins such as <span class="semi-heavy">Easy Digital Downloads</span>, <span class="semi-heavy">AffiliateWP</span>, and <span class="semi-heavy">Restrict Content Pro</span> before acquisition.</p>
                <p>Before his 7+ years at Sandhills, Sean developed a WordPress theme framework called <span class="semi-heavy">Volatyl</span> along with many other WordPress themes and plugins. Sean has also contributed to the popular WordPress starter theme <span class="semi-heavy">Underscores (_s)</span>.</p>
            </div>
            <div class="history-grid-media">
                <div class="history-grid-media-inner framed">
                    <div class="history-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sean-davis-headshot.png" alt="Sean Davis" />
                    </div>
                    <p class="sean-label"><span class="name">Sean Davis</span><span class="title">Web Developer & Designer</span></p>
                    <div class="link-grid">
                        <a class="github-icon" href="https://github.com/SeanTOSCD" title="Sean Davis on GitHub" target="_blank"><i class="fa-brands fa-github"></i></a><a class="wordpress-icon" href="https://profiles.wordpress.org/sdavis2702/" title="Sean Davis on WordPress" target="_blank"><i class="fa-brands fa-wordpress"></i></a><a class="homepage-icon" href="https://toscd.com/" title="Sean Davis Homepage" target="_blank"><i class="fa-solid fa-circle-user"></i></a>
                    </div>
                    <p>
		                <?php
		                crispydiv_button(
			                array(
				                'text' => 'Email Sean Directly',
				                'url' => 'mailto:sean@toscd.com',
				                'classes' => array( 'button', 'purple', 'outline' ),
			                )
		                );
		                ?>
                    </p>
                </div>
            </div>
		</div>
	</div>
</section>

<section class="who-works">
    <div class="section-heading element-spacing medium corner-accent black-pink">
        <h2 class="section-title">Here's how we work<span class="highlight-text">.</span></h2>
        <div class="section-description">
            <p>Sean is the sole developer and designer behind Crispy Div. However, a network of talented individuals (curated by Sean) may come together to work on any given project. <strong>It all depends on the scope and needed resources.</strong> If we're a good fit for each other, here's generally how things go:</p>
        </div>
    </div>
    <div class="how-we-work-grid general-grid three-col border-top-over-white">
        <div class="grid-item">
            <div class="grid-item-content">
                <span class="grid-item-icon element-lead-icon colored"><i class="fa-light fa-comments"></i></span>
                <h3 class="grid-item-title">Consult</h3>
                <p>Meet to discuss project goals and gather information about your target audience, brand, and any specific functionality that you want to include on the website.</p>
            </div>
        </div>
        <div class="grid-item">
            <div class="grid-item-content">
                <span class="grid-item-icon element-lead-icon colored"><i class="fa-light fa-presentation-screen"></i></span>
                <h3 class="grid-item-title">Propose</h3>
                <p>Based on information gathered during consultation, you will be presented with a proposal outlining the scope of work, timeline, and cost for the project.</p>
            </div>
        </div>
        <div class="grid-item">
            <div class="grid-item-content">
                <span class="grid-item-icon element-lead-icon colored"><i class="fa-light fa-palette"></i></span>
                <h3 class="grid-item-title">Design</h3>
                <p>Upon agreement, Crispy Div will start designing. This may include wireframes and mockups to give you an idea of how the website will look and function.</p>
            </div>
        </div>
        <div class="grid-item">
            <div class="grid-item-content">
                <span class="grid-item-icon element-lead-icon colored"><i class="fa-light fa-code"></i></span>
                <h3 class="grid-item-title">Develop</h3>
                <p>With an approved design, the development phase will begin. This includes technical implementation and testing the website to ensure it is fully functional.</p>
            </div>
        </div>
        <div class="grid-item">
            <div class="grid-item-content">
                <span class="grid-item-icon element-lead-icon colored"><i class="fa-light fa-rocket-launch"></i></span>
                <h3 class="grid-item-title">Launch</h3>
                <p>After successful design, development and configuration, we are clear to launch your newly designed website and make it live for the public to enjoy.</p>
            </div>
        </div>
        <div class="grid-item">
            <div class="grid-item-content">
                <span class="grid-item-icon element-lead-icon colored"><i class="fa-light fa-screwdriver-wrench"></i></span>
                <h3 class="grid-item-title">Maintain</h3>
                <p>If it makes sense for your business, Crispy Div will provide ongoing maintenance and support to ensure that the website stays up-to-date and is functioning properly.</p>
            </div>
        </div>
    </div>
</section>

<section class="footer-lead-cta element-spacing large">
    <div class="service-content">
        <span class="footer-lead-cta-title h4 heavy">Let's have a conversation<span class="highlight-text">.</span></span>
        <p>If you believe we're a good fit, let's work. If you have questions, just reach out.</p>
        <?php
        crispydiv_button(
            array(
                'text'  => 'Start the Conversation',
                'url'  => home_url( '/contact' ),
                'classes' => array( 'button', 'large' ),
            )
        );
        ?>
    </div>
</section>

<?php
get_footer();