<?php
/**
 * Title: Social Profile Card
 * Slug: ollie/social-profile-card
 * Description: 
 * Categories: ollie/card
 * Keywords: profile, links, social, twitter, facebook, instagram, linktree, avatar, bio
 * Viewport Width: 600
 * Block Types: 
 * Post Types: 
 * Inserter: true
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","right":"0","left":"0"},"blockGap":"0"},"border":{"radius":"5px"}},"className":"is-style-default","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-default" style="border-radius:5px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|small"},"border":{"radius":{"topLeft":"5px","topRight":"5px"}}},"gradient":"purple","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-purple-gradient-background has-background" style="border-top-left-radius:5px;border-top-right-radius:5px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:image {"id":56,"width":"132px","height":"132px","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-rounded-full"} -->
<figure class="wp-block-image aligncenter size-full is-resized is-style-rounded-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/avatar-1.webp" alt="" class="wp-image-56" style="width:132px;height:132px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"base","fontSize":"medium"} -->
<p class="has-text-align-center has-base-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:600">Eric Voyager</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"tertiary"} -->
<p class="has-text-align-center has-tertiary-color has-text-color">Creator and Product Director at IdeaFlow</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"}},"border":{"radius":{"bottomLeft":"5px","bottomRight":"5px"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-tertiary-background-color has-background" style="border-bottom-left-radius:5px;border-bottom-right-radius:5px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:paragraph {"align":"center","textColor":"secondary"} -->
<p class="has-text-align-center has-secondary-color has-text-color">Use this profile box as a LinkTree alternative. Link your social media accounts to this page so your followers can find all of your important links.</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"base","iconColorValue":"#fff","iconBackgroundColor":"primary","iconBackgroundColorValue":"#4d34fa","align":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|small"},"margin":{"top":"var:preset|spacing|medium"}}},"className":"is-style-default"} -->
<ul class="wp-block-social-links aligncenter has-icon-color has-icon-background-color is-style-default" style="margin-top:var(--wp--preset--spacing--medium)"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"dribbble"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"chain"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
