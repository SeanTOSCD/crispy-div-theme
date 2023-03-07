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
            <p>Feel free to use these colors responsibly to ensure a cohesive look and feel.</p>
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
            <p>Keep contrast in mind when implementing the logo. Always give the images room to breathe. Thanks!</p>
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
            <h3 class="brand-asset-title">Downloads</h3>
            <p>All logo and logomark variations can be downloaded to your machine in a single .zip file.</p>
            <div class="download-logos">
                <a href="<?php echo THEME_ASSETS . 'brand/crispy-div-brand-assets.zip'; ?>" download="crispy-div-brand-assets.zip" class="button button-purple">Download All Assets</a>
            </div>
		</div>
	</main>

<?php
get_footer();
