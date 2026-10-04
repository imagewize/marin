<?php
/**
 * Title: Store Home
 * Slug: marin/home-store
 * Categories: featured
 * Block Types: core/post-content
 * Description: A skincare store front page built from Aludra blocks: hero, trust bar, category cards, newest products, brand story, stats, reviews and a closing call to action. Registered only when Aludra and WooCommerce are active.
 *
 * @package Marin
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$shop_url = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/' );
$cat_url  = static function ( $slug ) use ( $shop_url ) {
	$term = get_term_by( 'slug', $slug, 'product_cat' );
	$link = $term ? get_term_link( $term ) : false;
	return ( $link && ! is_wp_error( $link ) ) ? $link : $shop_url;
};
$kit      = get_page_by_path( 'essentials-kit', OBJECT, 'product' );
$kit_url  = $kit ? get_permalink( $kit ) : $shop_url;
?>
<!-- wp:aludra/hero-split {"className":"is-style-night"} -->
<div class="wp-block-aludra-hero-split alignfull is-style-night" style="margin-top:0;margin-bottom:0"><div class="hero-split__inner"><!-- wp:group {"className":"hero-split__content","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group hero-split__content"><!-- wp:paragraph {"className":"hero-split__eyebrow"} -->
<p class="hero-split__eyebrow">New: the Essentials Kit</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hero-split__title","style":{"typography":{"lineHeight":"1.15"}}} -->
<h1 class="wp-block-heading hero-split__title" style="line-height:1.15">Skincare, <em>made simple</em></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hero-split__lead"} -->
<p class="hero-split__lead">Gentle, effective formulas for a three-step routine you will actually keep. Cleanse, treat, moisturise.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"hero-split__ctas","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-buttons hero-split__ctas"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( $shop_url ); ?>">Shop all products</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( $cat_url( 'kits' ) ); ?>">Browse kits</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"hero-split__trust"} -->
<p class="hero-split__trust"><span class="hero-split__check">✓</span> Free shipping over $50&nbsp;&nbsp;·&nbsp;&nbsp;<span class="hero-split__check">✓</span> 30-day returns</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-split__media"} -->
<div class="wp-block-group hero-split__media"><!-- wp:cover {"overlayColor":"primary","isUserOverlayColor":true,"minHeight":480,"minHeightUnit":"px","contentPosition":"bottom left","style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="border-radius:12px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px;min-height:480px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em"}},"textColor":"base","fontSize":"small"} -->
<p class="has-base-color has-text-color has-small-font-size" style="letter-spacing:0.12em;text-transform:uppercase">Small batches, made with care</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div></div>
<!-- /wp:aludra/hero-split -->

<!-- wp:aludra/trust-bar -->
<div class="wp-block-aludra-trust-bar alignfull"><div class="trust-bar__inner"><!-- wp:group {"className":"trust-bar__items","style":{"spacing":{"blockGap":"32px"}},"layout":{"type":"flex","flexWrap":"wrap","alignItems":"center","justifyContent":"center"}} -->
<div class="wp-block-group trust-bar__items"><!-- wp:group {"className":"trust-item","style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","alignItems":"center","flexWrap":"nowrap"}} -->
<div class="wp-block-group trust-item"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/icons/truck.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>Free shipping over $50</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"trust-item","style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","alignItems":"center","flexWrap":"nowrap"}} -->
<div class="wp-block-group trust-item"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/icons/returns.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>30-day returns</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"trust-item","style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","alignItems":"center","flexWrap":"nowrap"}} -->
<div class="wp-block-group trust-item"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/icons/leaf.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>Gentle, fragrance-free options</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"trust-item","style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","alignItems":"center","flexWrap":"nowrap"}} -->
<div class="wp-block-group trust-item"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/icons/lock.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>Secure checkout</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:aludra/trust-bar -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"},"margin":{"top":"0","bottom":"0"},"blockGap":"48px"}},"backgroundColor":"tertiary","layout":{"type":"constrained","contentSize":"1200px","wideSize":"1200px"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:24px;padding-bottom:80px;padding-left:24px"><!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="letter-spacing:0.12em;text-transform:uppercase">Shop by category</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textColor":"contrast"} -->
<h2 class="wp-block-heading has-contrast-color has-text-color">Find your <em>routine</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"16px"}},"layout":{"type":"grid","minimumColumnWidth":"16rem"}} -->
<div class="wp-block-group"><!-- wp:cover {"overlayColor":"main","isUserOverlayColor":true,"minHeight":360,"minHeightUnit":"px","contentPosition":"bottom left","style":{"spacing":{"padding":{"top":"32px","right":"32px","bottom":"32px","left":"32px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px;min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-main-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em"}},"textColor":"base","fontSize":"small"} -->
<p class="has-base-color has-text-color has-small-font-size" style="letter-spacing:0.12em;text-transform:uppercase">Daily care</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"textColor":"base"} -->
<h3 class="wp-block-heading has-base-color has-text-color">Moisturisers</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small"} -->
<p class="has-base-color has-text-color has-link-color has-small-font-size"><a href="<?php echo esc_url( $cat_url( 'moisturisers' ) ); ?>">Explore →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"overlayColor":"primary","isUserOverlayColor":true,"minHeight":360,"minHeightUnit":"px","contentPosition":"bottom left","style":{"spacing":{"padding":{"top":"32px","right":"32px","bottom":"32px","left":"32px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px;min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em"}},"textColor":"base","fontSize":"small"} -->
<p class="has-base-color has-text-color has-small-font-size" style="letter-spacing:0.12em;text-transform:uppercase">New arrivals</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"textColor":"base"} -->
<h3 class="wp-block-heading has-base-color has-text-color">Serums</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small"} -->
<p class="has-base-color has-text-color has-link-color has-small-font-size"><a href="<?php echo esc_url( $cat_url( 'serums' ) ); ?>">Explore →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"overlayColor":"primary-alt","isUserOverlayColor":true,"minHeight":360,"minHeightUnit":"px","contentPosition":"bottom left","style":{"spacing":{"padding":{"top":"32px","right":"32px","bottom":"32px","left":"32px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px;min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-primary-alt-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em"}},"textColor":"base","fontSize":"small"} -->
<p class="has-base-color has-text-color has-small-font-size" style="letter-spacing:0.12em;text-transform:uppercase">Daily essentials</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"textColor":"base"} -->
<h3 class="wp-block-heading has-base-color has-text-color">Cleansers</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small"} -->
<p class="has-base-color has-text-color has-link-color has-small-font-size"><a href="<?php echo esc_url( $cat_url( 'cleansers' ) ); ?>">Explore →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"overlayColor":"secondary","isUserOverlayColor":true,"minHeight":360,"minHeightUnit":"px","contentPosition":"bottom left","style":{"spacing":{"padding":{"top":"32px","right":"32px","bottom":"32px","left":"32px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px;min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em"}},"textColor":"base","fontSize":"small"} -->
<p class="has-base-color has-text-color has-small-font-size" style="letter-spacing:0.12em;text-transform:uppercase">Gift ideas</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"textColor":"base"} -->
<h3 class="wp-block-heading has-base-color has-text-color">Kits</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small"} -->
<p class="has-base-color has-text-color has-link-color has-small-font-size"><a href="<?php echo esc_url( $cat_url( 'kits' ) ); ?>">Explore →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"},"margin":{"top":"0","bottom":"0"},"blockGap":"48px"}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"1200px","wideSize":"1200px"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:24px;padding-bottom:80px;padding-left:24px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="letter-spacing:0.12em;text-transform:uppercase">Best sellers</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textColor":"contrast"} -->
<h2 class="wp-block-heading has-contrast-color has-text-color">Bestsellers <em>to try first</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( $shop_url ); ?>">View all</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-collection {"queryId":1,"query":{"perPage":4,"pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"popularity","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill","fixedWidth":""},"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."}} -->
<div class="wp-block-woocommerce-product-collection"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"aspectRatio":"3/4"} -->
<!-- wp:woocommerce/product-sale-badge {"isDescendentOfQueryLoop":true,"fontSize":"x-small","align":"left"} /-->
<!-- /wp:woocommerce/product-image -->

<!-- wp:post-terms {"term":"product_cat","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em"}},"textColor":"secondary","fontSize":"x-small"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large","fontFamily":"display"} /-->

<!-- wp:woocommerce/product-summary {"isDescendentOfQueryLoop":true,"summaryLength":14,"textColor":"secondary","fontSize":"small"} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","fontSize":"medium"} /-->

<!-- wp:woocommerce/product-button {"isDescendentOfQueryLoop":true,"textAlign":"left","fontSize":"small","className":"is-style-outline"} /--></div>
<!-- /wp:group -->
<!-- /wp:woocommerce/product-template -->

<!-- wp:woocommerce/product-collection-no-results -->
<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"textColor":"secondary"} -->
<p class="has-text-align-center has-secondary-color has-text-color">No products yet. Add some in WooCommerce to fill this band.</p>
<!-- /wp:paragraph -->
<!-- /wp:woocommerce/product-collection-no-results --></div>
<!-- /wp:woocommerce/product-collection --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"96px","bottom":"72px","left":"24px","right":"24px"},"margin":{"top":"0","bottom":"0"},"blockGap":"48px"}},"backgroundColor":"primary-alt","textColor":"base","layout":{"type":"constrained","contentSize":"1200px","wideSize":"1200px"}} -->
<div class="wp-block-group alignfull has-base-color has-primary-alt-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:96px;padding-right:24px;padding-bottom:72px;padding-left:24px"><!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em"}},"textColor":"sand-deep","fontSize":"small"} -->
<p class="has-sand-deep-color has-text-color has-small-font-size" style="letter-spacing:0.12em;text-transform:uppercase">The routine</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textColor":"base"} -->
<h2 class="wp-block-heading has-base-color has-text-color">Cleanse, treat, <em>moisturise</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"32px"}},"layout":{"type":"grid","minimumColumnWidth":"16rem"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"24px"},"blockGap":"12px"},"border":{"top":{"color":"var:preset|color|primary-accent","width":"1px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--primary-accent);border-top-width:1px;padding-top:24px"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}},"textColor":"sand-deep","fontSize":"display","fontFamily":"display"} -->
<p class="has-sand-deep-color has-text-color has-display-font-family has-display-font-size" style="line-height:1">01</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"textColor":"base","fontSize":"x-large"} -->
<h3 class="wp-block-heading has-base-color has-text-color has-x-large-font-size">Cleanse</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"primary-accent"} -->
<p class="has-primary-accent-color has-text-color">Gentle formulas that clean without the tight, dry feeling.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small"} -->
<p class="has-base-color has-text-color has-link-color has-small-font-size"><a href="<?php echo esc_url( $cat_url( 'cleansers' ) ); ?>">Shop cleansers →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px"},"blockGap":"12px"},"border":{"top":{"color":"var:preset|color|primary-accent","width":"1px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--primary-accent);border-top-width:1px;padding-top:24px"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}},"textColor":"sand-deep","fontSize":"display","fontFamily":"display"} -->
<p class="has-sand-deep-color has-text-color has-display-font-family has-display-font-size" style="line-height:1">02</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"textColor":"base","fontSize":"x-large"} -->
<h3 class="wp-block-heading has-base-color has-text-color has-x-large-font-size">Treat</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"primary-accent"} -->
<p class="has-primary-accent-color has-text-color">Toners and serums that refine, brighten and balance.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small"} -->
<p class="has-base-color has-text-color has-link-color has-small-font-size"><a href="<?php echo esc_url( $cat_url( 'serums' ) ); ?>">Shop serums →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px"},"blockGap":"12px"},"border":{"top":{"color":"var:preset|color|primary-accent","width":"1px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--primary-accent);border-top-width:1px;padding-top:24px"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}},"textColor":"sand-deep","fontSize":"display","fontFamily":"display"} -->
<p class="has-sand-deep-color has-text-color has-display-font-family has-display-font-size" style="line-height:1">03</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"textColor":"base","fontSize":"x-large"} -->
<h3 class="wp-block-heading has-base-color has-text-color has-x-large-font-size">Moisturise</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"primary-accent"} -->
<p class="has-primary-accent-color has-text-color">Lightweight daily hydration with ceramides and squalane.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small"} -->
<p class="has-base-color has-text-color has-link-color has-small-font-size"><a href="<?php echo esc_url( $cat_url( 'moisturisers' ) ); ?>">Shop moisturisers →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:aludra/stat-rail -->
<div class="wp-block-aludra-stat-rail alignfull" style="margin-top:0;margin-bottom:0"><div class="stat-rail__shell"><!-- wp:aludra/stat-item {"number":"3 steps","caption":"To a complete routine","good":true} -->
<div class="wp-block-aludra-stat-item stat-rail__item is-good"><div class="stat-rail__num">3 steps</div><div class="stat-rail__cap">To a complete routine</div></div>
<!-- /wp:aludra/stat-item -->

<!-- wp:aludra/stat-item {"number":"16","caption":"Products in the range"} -->
<div class="wp-block-aludra-stat-item stat-rail__item"><div class="stat-rail__num">16</div><div class="stat-rail__cap">Products in the range</div></div>
<!-- /wp:aludra/stat-item -->

<!-- wp:aludra/stat-item {"number":"30 days","caption":"Free returns"} -->
<div class="wp-block-aludra-stat-item stat-rail__item"><div class="stat-rail__num">30 days</div><div class="stat-rail__cap">Free returns</div></div>
<!-- /wp:aludra/stat-item --></div></div>
<!-- /wp:aludra/stat-rail -->

<!-- wp:aludra/split-section {"revealOnScroll":true} -->
<div class="wp-block-aludra-split-section alignfull" data-aludra-reveal="true" style="margin-top:0;margin-bottom:0"><div class="split-section__shell"><div class="split-section__header"><p class="split-section__label">Our story</p><h2 class="split-section__heading">Made <em>simple</em></h2><p class="split-section__lead">Every formula starts with a question: what does skin actually need?</p></div><div class="split-section__panes"><!-- wp:group {"className":"split-section__media"} -->
<div class="wp-block-group split-section__media"><!-- wp:cover {"overlayColor":"primary","isUserOverlayColor":true,"minHeight":420,"minHeightUnit":"px","contentPosition":"bottom left","style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="border-radius:12px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px;min-height:420px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em"}},"textColor":"base","fontSize":"small"} -->
<p class="has-base-color has-text-color has-small-font-size" style="letter-spacing:0.12em;text-transform:uppercase">Small batches, made with care</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"split-section__content","style":{"spacing":{"padding":{"top":"2.5rem","right":"2.5rem","bottom":"2.5rem","left":"2.5rem"},"blockGap":"1.25rem"},"border":{"radius":"12px"}},"backgroundColor":"main","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group split-section__content has-base-color has-main-background-color has-text-color has-background" style="border-radius:12px;padding-top:2.5rem;padding-right:2.5rem;padding-bottom:2.5rem;padding-left:2.5rem"><!-- wp:paragraph -->
<p>We started with a short list: ingredients we can explain, formulas that are gentle enough for daily use, and nothing in the box you would not keep.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Today the range is larger, but the rule is the same. If we would not use it ourselves, it does not ship.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base","textColor":"main","className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-main-color has-base-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( $shop_url ); ?>">Shop the range</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div></div>
<!-- /wp:aludra/split-section -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"},"margin":{"top":"0","bottom":"0"},"blockGap":"48px"}},"backgroundColor":"tertiary","layout":{"type":"constrained","contentSize":"1200px","wideSize":"1200px"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:24px;padding-bottom:80px;padding-left:24px"><!-- wp:heading {"style":{"typography":{"textAlign":"center"}},"textColor":"contrast"} -->
<h2 class="wp-block-heading has-text-align-center has-contrast-color has-text-color">Loved by our <em>customers</em></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"grid","minimumColumnWidth":"18rem"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"2.25rem","right":"2.25rem","bottom":"2.25rem","left":"2.25rem"},"blockGap":"1rem"},"border":{"radius":"16px","width":"1px"}},"borderColor":"border-light","backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-border-light-border-color has-base-background-color has-background" style="border-width:1px;border-radius:16px;padding-top:2.25rem;padding-right:2.25rem;padding-bottom:2.25rem;padding-left:2.25rem"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.15em"}},"textColor":"accent","fontSize":"medium"} -->
<p class="has-accent-color has-text-color has-medium-font-size" style="letter-spacing:0.15em"><span class="screen-reader-text">Rated 5 out of 5 stars</span><span aria-hidden="true">★★★★★</span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic","lineHeight":"1.35"}},"textColor":"contrast","fontSize":"large","fontFamily":"display"} -->
<p class="has-contrast-color has-text-color has-display-font-family has-large-font-size" style="font-style:italic;line-height:1.35">Beautifully made and exactly as described. It arrived quickly and I have used it every day since.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-weight:600">Verified buyer, <span style="font-weight:400">London</span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"2.25rem","right":"2.25rem","bottom":"2.25rem","left":"2.25rem"},"blockGap":"1rem"},"border":{"radius":"16px","width":"1px"}},"borderColor":"border-light","backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-border-light-border-color has-base-background-color has-background" style="border-width:1px;border-radius:16px;padding-top:2.25rem;padding-right:2.25rem;padding-bottom:2.25rem;padding-left:2.25rem"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.15em"}},"textColor":"accent","fontSize":"medium"} -->
<p class="has-accent-color has-text-color has-medium-font-size" style="letter-spacing:0.15em"><span class="screen-reader-text">Rated 5 out of 5 stars</span><span aria-hidden="true">★★★★★</span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic","lineHeight":"1.35"}},"textColor":"contrast","fontSize":"large","fontFamily":"display"} -->
<p class="has-contrast-color has-text-color has-display-font-family has-large-font-size" style="font-style:italic;line-height:1.35">The quality is a step above anything else I have bought in this category. Easily worth the price.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-weight:600">Verified buyer, <span style="font-weight:400">Melbourne</span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"2.25rem","right":"2.25rem","bottom":"2.25rem","left":"2.25rem"},"blockGap":"1rem"},"border":{"radius":"16px","width":"1px"}},"borderColor":"border-light","backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-border-light-border-color has-base-background-color has-background" style="border-width:1px;border-radius:16px;padding-top:2.25rem;padding-right:2.25rem;padding-bottom:2.25rem;padding-left:2.25rem"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.15em"}},"textColor":"accent","fontSize":"medium"} -->
<p class="has-accent-color has-text-color has-medium-font-size" style="letter-spacing:0.15em"><span class="screen-reader-text">Rated 5 out of 5 stars</span><span aria-hidden="true">★★★★★</span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic","lineHeight":"1.35"}},"textColor":"contrast","fontSize":"large","fontFamily":"display"} -->
<p class="has-contrast-color has-text-color has-display-font-family has-large-font-size" style="font-style:italic;line-height:1.35">Great service from start to finish, and the packaging alone made it feel like a gift. I will be back.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-weight:600">Verified buyer, <span style="font-weight:400">Toronto</span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:aludra/cta-banner -->
<div class="wp-block-aludra-cta-banner alignfull" style="margin-top:0;margin-bottom:0"><div class="cta-banner__content"><!-- wp:heading {"className":"cta-banner__title","style":{"typography":{"lineHeight":"1.2"}}} -->
<h2 class="wp-block-heading cta-banner__title" style="line-height:1.2">Not sure where to start?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"cta-banner__lead"} -->
<p class="cta-banner__lead">The Essentials Kit bundles a cleanser, serum and moisturiser: a complete routine in three steps.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"cta-banner__ctas","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons cta-banner__ctas"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( $kit_url ); ?>">Shop the kit</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:aludra/cta-banner -->
