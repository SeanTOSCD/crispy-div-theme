<?php
/**
 * Brand Assets Template
 */

get_header();
crispydiv_page_header( array(
	'title' => get_field( 'page_header_title' ) ?: get_the_title( get_the_ID() ),
	'title-class' => 'h2',
	'description' => get_field( 'page_header_description' ) ?: '',
) );
?>

	<main id="site-content" class="site-main">
		<div class="inner medium">
            <h3 class="brand-asset-title">Brand Colors</h3>
            <div class="section-description">
                <p>Please use these colors responsibly to ensure a cohesive look and feel. If you'd like to keep it simple, our two primary colors are purple <strong>(#341671)</strong> and orange <strong>(#f54952)</strong>.</p>
            </div>
            <div class="colors-grid">
                <div class="color-1">
                    <span class="hex">#422680</span>
                </div>
                <div class="color-2">
                    <span class="hex">#341671</span>
                </div>
                <div class="color-3">
                    <span class="hex">#280659</span>
                </div>
                <div class="color-4">
                    <span class="hex">#660f56</span>
                </div>
                <div class="color-5">
                    <span class="hex">#ae2d68</span>
                </div>
                <div class="color-6">
                    <span class="hex">#f54952</span>
                </div>
                <div class="color-7">
                    <span class="hex">#161616</span>
                </div>
                <div class="color-8 light-color">
                    <span class="hex">#f8f5fc</span>
                </div>
            </div>
            <h3 class="brand-asset-title">Logos & Logomark</h3>
            <div class="section-description">
                <p>Try to keep contrast in mind when implementing the logo so that the text is legible. Also be sure to give the logo room to breathe. Do not allow it to touch or overlap any other elements (subtle background design elements are okay).</p>
            </div>
            <div class="logos-grid">
                <div class="logo-white background-purple">
                    <img src="<?php echo THEME_ASSETS . 'brand/crispy-div-logo-white.svg'; ?>" alt="Crispy Div Logo - White">
                </div>
                <div class="logomark background-pink">
                    <img src="<?php echo THEME_ASSETS . 'brand/crispy-div-logo-mark.svg'; ?>" alt="Crispy Div Logomark">
                </div>
                <div class="logo-color background-gray">
                    <img src="<?php echo THEME_ASSETS . 'brand/crispy-div-logo-color.svg'; ?>" alt="Crispy Div Logo - Color">
                </div>
                <div class="logomark background-white">
                    <img src="<?php echo THEME_ASSETS . 'brand/crispy-div-logo-mark.svg'; ?>" alt="Crispy Div Logomark">
                </div>
            </div>
            <h3 class="brand-asset-title">Typography & Text</h3>
            <div class="section-description">
                <p>You have no obligation to use our preferred font when referencing our brand. If you choose to do so, we use <a href="https://fonts.google.com/specimen/Montserrat?query=montse" target="_blank" rel="nofollow">Montserrat</a> for headings (font weights 700 and 800) and <a href="https://fonts.google.com/specimen/Raleway?query=ralew" target="_blank" rel="nofollow">Raleway</a> for body text. Our Brand name is <strong>Crispy Div</strong>. That's capital C and D with a space between the two words.</p>
            </div>
            <div class="brand-name-grid">
                <div class="brand-name-example background-gray incorrect">
                    <span class="brand-name">CrispyDiv</span>
                    <span class="example-status">Incorrect</span>
                </div>
                <div class="brand-name-example background-gray incorrect">
                    <span class="brand-name">crispydiv</span>
                    <span class="example-status">Incorrect</span>
                </div>
                <div class="brand-name-example background-gray incorrect">
                    <span class="brand-name">crispy&nbsp;div</span>
                    <span class="example-status">Incorrect</span>
                </div>
                <div class="brand-name-example background-gray correct">
                    <span class="brand-name">Crispy&nbsp;Div</span>
                    <span class="example-status">Correct</span>
                </div>
            </div>
            <h3 class="brand-asset-title">Downloads</h3>
            <div class="section-description">
                <p>Logo and logomark variations can be downloaded in a single .zip file.</p>
            </div>
            <div class="download-logos">
                <a href="<?php echo THEME_ASSETS . 'brand/crispy-div-brand-assets.zip'; ?>" download="crispy-div-brand-assets.zip" class="button button-purple">Download All Assets</a>
            </div>
		</div>
	</main>

<?php
get_footer();
