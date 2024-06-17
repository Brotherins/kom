<?php

function feedback404()
{
    header("HTTP/1.0 404 Not Found");
    echo "<h1>404 Not Found</h1>";
    echo "GA USAH INTIP INTIP BRO.";
}

if (isset($_GET['toy'])) {
    $filename = "list.txt";
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $target_string = strtolower($_GET['toy']);
    foreach ($lines as $item) {
        if (strtolower($item) === $target_string) {
            $BRAND = strtoupper($target_string);
        }
    }
    if (isset($BRAND)) {
        $BRANDS = $BRAND;
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $fullUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        if (isset($fullUrl)) {
            $parsedUrl = parse_url($fullUrl);
            $scheme = isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : '';
            $host = isset($parsedUrl['host']) ? $parsedUrl['host'] : '';
            $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
            $query = isset($parsedUrl['query']) ? $parsedUrl['query'] : '';
            $baseUrl = $scheme . "://" . $host . $path . '?' . $query;
            $urlPath = $baseUrl;
        } else {
            echo "URL saat ini tidak didefinisikan.";
        }
    } else {
        feedback404();
        exit();
    }
} else {
    feedback404();
    exit();
}

?>





<!doctype html>
<html xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" lang="en-US"  data-authenticated-account>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- This is Squarespace. --><!-- rabbit-fish-75js -->
<base href="">
<meta charset="utf-8" />
<title><?php echo $BRAND; ?>  Official Situs Mahjong Ways 2 Gacor Dan Terpercaya</title>
<link rel="amphtml" href="https://mudah168.online/amp/toyota/?amp=<?php echo $BRAND; ?>">
<meta http-equiv="Accept-CH" content="Sec-CH-UA-Platform-Version, Sec-CH-UA-Model" /><link rel="icon" type="image/x-icon" href="https://assets.squarespace.com/universal/default-favicon.ico"/>
<link rel="canonical" href="<?php echo $urlPath ?>"/>
<meta property="og:site_name" content="<?php echo $BRAND; ?>"/>
<meta property="og:title" content="<?php echo $BRAND; ?>  Official Situs Mahjong Ways 2 Gacor Dan Terpercaya"/>
<meta property="og:url" content="<?php echo $urlPath ?>"/>
<meta property="og:type" content="product"/>
<meta property="og:description" content="<?php echo $BRAND; ?>  Merupakan Brand Yang Terkenal Dengan Permainan Mahjong Ways 2 , Di Percayai Memiliki RTP Yang Sangat Akurat, Dan Memberikan Kemengan Untuk Para Member."/>
<meta property="og:image" content="https://mudah168.online/img/6stocka.jpg?format=1500w"/>
<meta property="og:image:width" content="720"/>
<meta property="og:image:height" content="720"/>
<meta property="product:price:amount" content="50.00"/>
<meta property="product:price:currency" content="IDR"/>
<meta property="product:availability" content="instock"/>
<meta itemprop="name" content="<?php echo $BRAND; ?>  Official Situs Mahjong Ways 2 Gacor Dan Terpercaya"/>
<meta itemprop="url" content="<?php echo $urlPath ?>"/>
<meta itemprop="description" content="<?php echo $BRAND; ?>  Merupakan Brand Yang Terkenal Dengan Permainan Mahjong Ways 2 , Di Percayai Memiliki RTP Yang Sangat Akurat, Dan Memberikan Kemengan Untuk Para Member."/>
<meta itemprop="thumbnailUrl" content="https://mudah168.online/img/6stocka.jpg?format=1500w"/>
<link rel="image_src" href="https://mudah168.online/img/6stocka.jpg?format=1500w" />
<meta itemprop="image" content="https://mudah168.online/img/6stocka.jpg?format=1500w"/>
<meta name="twitter:title" content="<?php echo $BRAND; ?>  Official Situs Mahjong Ways 2 Gacor Dan Terpercaya"/>
<meta name="twitter:image" content="https://mudah168.online/img/6stocka.jpg?format=1500w"/>
<meta name="twitter:url" content="<?php echo $urlPath ?>"/>
<meta name="twitter:card" content="summary"/>
<meta name="twitter:description" content="<?php echo $BRAND; ?>  Merupakan Brand Yang Terkenal Dengan Permainan Mahjong Ways 2 , Di Percayai Memiliki RTP Yang Sangat Akurat, Dan Memberikan Kemengan Untuk Para Member."/>
<meta name="description" content="<?php echo $BRAND; ?>  Merupakan Brand Yang Terkenal Dengan Permainan Mahjong Ways 2 , Di Percayai Memiliki RTP Yang Sangat Akurat, Dan Memberikan Kemengan Untuk Para Member." />
<link rel="preconnect" href="https://images.squarespace-cdn.com">

<link rel="stylesheet" type="text/css" href="//assets.squarespace.com/universal/styles-compressed/commerce-2af06f7948db5477d8f5-min.en-US.css"><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/user-account-core-8f604c7774595f153b5f-min.en-US.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-user_account_core');</script>
<script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/user-account-core-8f604c7774595f153b5f-min.en-US.js" defer ></script><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].css = ["//assets.squarespace.com/universal/styles-compressed/user-account-core-e84acd73aa5ee3fcd4ad-min.en-US.css"]; })(SQUARESPACE_ROLLUPS, 'squarespace-user_account_core');</script>
<link rel="stylesheet" type="text/css" href="//assets.squarespace.com/universal/styles-compressed/user-account-core-e84acd73aa5ee3fcd4ad-min.en-US.css"><script data-name="static-context">Static = window.Static || {}; Static.SQUARESPACE_CONTEXT = {"facebookAppId":"314192535267336","facebookApiVersion":"v6.0","rollups":{"squarespace-announcement-bar":{"js":"//assets.squarespace.com/universal/scripts-compressed/announcement-bar-f5e166398f68a61e662f-min.en-US.js"},"squarespace-audio-player":{"css":"//assets.squarespace.com/universal/styles-compressed/audio-player-9fb16b1675c0ff315dae-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/audio-player-1bf932b43965a7ee4fbb-min.en-US.js"},"squarespace-blog-collection-list":{"css":"//assets.squarespace.com/universal/styles-compressed/blog-collection-list-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/blog-collection-list-bb0683614c41f8a11085-min.en-US.js"},"squarespace-calendar-block-renderer":{"css":"//assets.squarespace.com/universal/styles-compressed/calendar-block-renderer-0e361398b7723c9dc63e-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/calendar-block-renderer-90bf6109d7f9529faf8a-min.en-US.js"},"squarespace-chartjs-helpers":{"css":"//assets.squarespace.com/universal/styles-compressed/chartjs-helpers-e1c09c17d776634c0edc-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/chartjs-helpers-ae72e538cdd8d3806898-min.en-US.js"},"squarespace-comments":{"css":"//assets.squarespace.com/universal/styles-compressed/comments-24b74a0326eae0cd5049-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/comments-6a7d5c6470cfc1bf449f-min.en-US.js"},"squarespace-custom-css-popup":{"css":"//assets.squarespace.com/universal/styles-compressed/custom-css-popup-9852bb3e9a5b8206262c-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/custom-css-popup-ac39f31a32e6276c6b87-min.en-US.js"},"squarespace-dialog":{"css":"//assets.squarespace.com/universal/styles-compressed/dialog-be76ee4d94877d8a5c32-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/dialog-5fad3a9717c811658631-min.en-US.js"},"squarespace-events-collection":{"css":"//assets.squarespace.com/universal/styles-compressed/events-collection-0e361398b7723c9dc63e-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/events-collection-49534988d3b5a2f639b6-min.en-US.js"},"squarespace-form-rendering-utils":{"js":"//assets.squarespace.com/universal/scripts-compressed/form-rendering-utils-a05db6cb0e7323b29fa7-min.en-US.js"},"squarespace-forms":{"css":"//assets.squarespace.com/universal/styles-compressed/forms-8d93ba2c12ff0765b64c-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/forms-953994245c1347b8d72b-min.en-US.js"},"squarespace-gallery-collection-list":{"css":"//assets.squarespace.com/universal/styles-compressed/gallery-collection-list-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/gallery-collection-list-64b8938cf9ce62400835-min.en-US.js"},"squarespace-image-zoom":{"css":"//assets.squarespace.com/universal/styles-compressed/image-zoom-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/image-zoom-84d849c1eade7a08d59e-min.en-US.js"},"squarespace-pinterest":{"css":"//assets.squarespace.com/universal/styles-compressed/pinterest-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/pinterest-1d74306ec409d6fbfb22-min.en-US.js"},"squarespace-popup-overlay":{"css":"//assets.squarespace.com/universal/styles-compressed/popup-overlay-b2bf7df4402e207cd72c-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/popup-overlay-3fc66fb91506f355347a-min.en-US.js"},"squarespace-product-quick-view":{"css":"//assets.squarespace.com/universal/styles-compressed/product-quick-view-4aec27f1bd826750e9db-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/product-quick-view-b3283c3f1e9e7f764e8a-min.en-US.js"},"squarespace-products-collection-item-v2":{"css":"//assets.squarespace.com/universal/styles-compressed/products-collection-item-v2-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/products-collection-item-v2-fc4cdbcf05cd6cd955d4-min.en-US.js"},"squarespace-products-collection-list-v2":{"css":"//assets.squarespace.com/universal/styles-compressed/products-collection-list-v2-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/products-collection-list-v2-b9efee358f56ea8bf33b-min.en-US.js"},"squarespace-search-page":{"css":"//assets.squarespace.com/universal/styles-compressed/search-page-dcc0462e30efbd6dc562-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/search-page-d336028d4348f1d434c0-min.en-US.js"},"squarespace-search-preview":{"js":"//assets.squarespace.com/universal/scripts-compressed/search-preview-4abf20a9822c9ae76ebd-min.en-US.js"},"squarespace-simple-liking":{"css":"//assets.squarespace.com/universal/styles-compressed/simple-liking-a9eb87c1b73b199ce387-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/simple-liking-177101dab03c3e13f3eb-min.en-US.js"},"squarespace-social-buttons":{"css":"//assets.squarespace.com/universal/styles-compressed/social-buttons-98ee3a678d356d849b76-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/social-buttons-d792c7df445248333ed8-min.en-US.js"},"squarespace-tourdates":{"css":"//assets.squarespace.com/universal/styles-compressed/tourdates-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/tourdates-e26e971ffd0d3a7d6f4f-min.en-US.js"},"squarespace-website-overlays-manager":{"css":"//assets.squarespace.com/universal/styles-compressed/website-overlays-manager-6dfb472f441e39d78b13-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/website-overlays-manager-b95dcd45aaf3d48318ac-min.en-US.js"}},"pageType":50,"website":{"id":"6651dd7dbca8fb2794804852","identifier":"rabbit-fish-75js","websiteType":1,"contentModifiedOn":1716641298815,"cloneable":false,"hasBeenCloneable":false,"siteStatus":{"value":3,"expiration":1717850749350},"language":"en-US","timeZone":"Asia/Bangkok","machineTimeZoneOffset":25200000,"timeZoneOffset":25200000,"timeZoneAbbr":"ICT","siteTitle":"<?php echo $BRAND; ?>","fullSiteTitle":"Lounge Tunic / Black \u2014 <?php echo $BRAND; ?>","siteDescription":{"html":"","raw":false},"shareButtonOptions":{"3":true,"4":true,"2":true,"8":true,"1":true,"6":true,"7":true},"authenticUrl":"<?php echo $urlPath ?>","internalUrl":"<?php echo $urlPath ?>","baseUrl":"<?php echo $urlPath ?>","sslSetting":3,"isHstsEnabled":true,"socialAccounts":[{"serviceId":64,"addedOn":1716641149509,"profileUrl":"http://instagram.com/squarespace","id":"6651dd7dbca8fb2794804867","websiteId":"6651dd7dbca8fb2794804852","pullEnabled":false,"pushEnabled":true,"autoPushEnabled":false,"iconEnabled":true,"defaultPushMessage":"%t %u","accountState":1,"serviceName":"instagram-unauth","pushAvailable":true},{"serviceId":62,"addedOn":1716641149513,"profileUrl":"http://twitter.com/squarespace","id":"6651dd7dbca8fb2794804868","websiteId":"6651dd7dbca8fb2794804852","pullEnabled":false,"pushEnabled":true,"autoPushEnabled":false,"iconEnabled":true,"defaultPushMessage":"%t %u","accountState":1,"serviceName":"twitter-unauth","pushAvailable":true}],"createdOn":1716641149350,"templateId":"5c5a519771c10ba3470d8101","installationId":"6651dd7dbca8fb279480485a","templateWebsiteId":"624b503d84c2ba7dc187a92a","hasPassword":false,"typekitId":"","statsMigrated":false,"imageMetadataProcessingEnabled":false,"revalidateBefore":1716641173321,"captchaSettings":{"enabledForDonations":false},"showOwnerLogin":true},"websiteSettings":{"id":"6651dd7dbca8fb2794804855","websiteId":"6651dd7dbca8fb2794804852","subjects":[],"country":"VN","state":"HN","simpleLikingEnabled":true,"mobileInfoBarSettings":{"isContactEmailEnabled":false,"isContactPhoneNumberEnabled":false,"isLocationEnabled":false,"isBusinessHoursEnabled":false},"commentLikesAllowed":true,"commentAnonAllowed":true,"commentThreaded":true,"commentApprovalRequired":false,"commentAvatarsOn":true,"commentSortType":2,"commentFlagThreshold":0,"commentFlagsAllowed":true,"commentEnableByDefault":true,"commentDisableAfterDaysDefault":0,"disqusShortname":"","commentsEnabled":false,"storeSettings":{"returnPolicy":{"raw":false},"termsOfService":{"raw":false},"privacyPolicy":{"raw":false},"storeMailingList":{"connected":false,"list":"","useSingleOptIn":false},"expressCheckout":false,"continueShoppingLinkUrl":"/","testModeOn":true,"useLightCart":false,"showNoteField":false,"shippingCountryDefaultValue":"US","billToShippingDefaultValue":false,"showShippingPhoneNumber":true,"isShippingPhoneRequired":false,"showBillingPhoneNumber":true,"isBillingPhoneRequired":false,"currenciesSupported":["IDR","CAD","GBP","AUD","EUR","CHF","NOK","SEK","DKK","NZD","SGD","MXN","HKD","CZK","ILS","MYR","RUB","PHP","PLN","THB","BRL","ARS","COP","IDR","INR","JPY","ZAR"],"defaultCurrency":"IDR","selectedCurrency":"IDR","measurementStandard":1,"showCustomCheckoutForm":false,"checkoutPageMarketingOptInEnabled":true,"enableMailingListOptInByDefault":false,"isApplePayEnabled":false,"isPaymentRequestEnabled":true,"sameAsRetailLocation":false,"merchandisingSettings":{"scarcityEnabledOnProductItems":false,"scarcityEnabledOnProductBlocks":false,"scarcityMessageType":"DEFAULT_SCARCITY_MESSAGE","scarcityThreshold":10,"merchantLowStockAlertThreshold":5,"multipleQuantityAllowedForServices":true,"restockNotificationsEnabled":false,"restockNotificationsMailingListSignUpEnabled":false,"relatedProductsEnabled":false,"relatedProductsOrdering":"random","soldOutVariantsDropdownDisabled":false,"productComposerOptedIn":false,"productComposerABTestOptedOut":false,"productReviewsEnabled":false},"minimumOrderSubtotalEnabled":false,"minimumOrderSubtotal":{"currency":"IDR","value":"0.00"},"instagramShoppingLinkDestination":1,"storeMigratedToProductCollections2_0":false,"isLive":false,"multipleQuantityAllowedForServices":true},"useEscapeKeyToLogin":false,"ssBadgeType":1,"ssBadgePosition":4,"ssBadgeVisibility":1,"ssBadgeDevices":1,"pinterestOverlayOptions":{"mode":"disabled"},"ampEnabled":false,"userAccountsSettings":{"loginAllowed":true,"signupAllowed":true}},"cookieSettings":{"isCookieBannerEnabled":false,"isRestrictiveCookiePolicyEnabled":false,"isRestrictiveCookiePolicyAbsolute":false,"cookieBannerText":"","cookieBannerTheme":"","cookieBannerVariant":"","cookieBannerPosition":"","cookieBannerCtaVariant":"","cookieBannerCtaText":"","cookieBannerAcceptType":"OPT_IN","cookieBannerOptOutCtaText":"","cookieBannerHasOptOut":false,"cookieBannerHasManageCookies":true,"cookieBannerManageCookiesLabel":""},"websiteCloneable":false,"collection":{"title":"Shop","id":"6651dd9cddec1c497a06dbfb","fullUrl":"/","type":13,"permissionType":1},"item":{"title":"Lounge Tunic / Black","id":"6651dd9cddec1c497a06dbfa","fullUrl":"https://infdaily.com/","publicCommentCount":0,"commentState":1,"recordType":11},"subscribed":false,"appDomain":"squarespace.com","templateTweakable":true,"tweakJSON":{"form-use-theme-colors":"false","header-logo-height":"20px","header-mobile-logo-max-height":"30px","header-vert-padding":"4vw","header-width":"Full","maxPageWidth":"1200px","pagePadding":"4vw","tweak-blog-alternating-side-by-side-image-aspect-ratio":"1:1 Square","tweak-blog-alternating-side-by-side-image-spacing":"6%","tweak-blog-alternating-side-by-side-meta-spacing":"20px","tweak-blog-alternating-side-by-side-primary-meta":"Categories","tweak-blog-alternating-side-by-side-read-more-spacing":"20px","tweak-blog-alternating-side-by-side-secondary-meta":"Date","tweak-blog-basic-grid-columns":"2","tweak-blog-basic-grid-image-aspect-ratio":"3:2 Standard","tweak-blog-basic-grid-image-spacing":"50px","tweak-blog-basic-grid-meta-spacing":"37px","tweak-blog-basic-grid-primary-meta":"Categories","tweak-blog-basic-grid-read-more-spacing":"37px","tweak-blog-basic-grid-secondary-meta":"Date","tweak-blog-item-custom-width":"75","tweak-blog-item-show-author-profile":"true","tweak-blog-item-width":"Medium","tweak-blog-masonry-columns":"2","tweak-blog-masonry-horizontal-spacing":"30px","tweak-blog-masonry-image-spacing":"20px","tweak-blog-masonry-meta-spacing":"20px","tweak-blog-masonry-primary-meta":"Categories","tweak-blog-masonry-read-more-spacing":"20px","tweak-blog-masonry-secondary-meta":"Date","tweak-blog-masonry-vertical-spacing":"30px","tweak-blog-side-by-side-image-aspect-ratio":"1:1 Square","tweak-blog-side-by-side-image-spacing":"6%","tweak-blog-side-by-side-meta-spacing":"20px","tweak-blog-side-by-side-primary-meta":"Categories","tweak-blog-side-by-side-read-more-spacing":"20px","tweak-blog-side-by-side-secondary-meta":"Date","tweak-blog-single-column-image-spacing":"50px","tweak-blog-single-column-meta-spacing":"30px","tweak-blog-single-column-primary-meta":"Categories","tweak-blog-single-column-read-more-spacing":"30px","tweak-blog-single-column-secondary-meta":"Date","tweak-events-stacked-show-thumbnails":"true","tweak-events-stacked-thumbnail-size":"3:2 Standard","tweak-fixed-header":"false","tweak-fixed-header-style":"Basic","tweak-global-animations-animation-curve":"ease","tweak-global-animations-animation-delay":"0.1s","tweak-global-animations-animation-duration":"0.1s","tweak-global-animations-animation-style":"fade","tweak-global-animations-animation-type":"none","tweak-global-animations-complexity-level":"detailed","tweak-global-animations-enabled":"false","tweak-portfolio-grid-basic-custom-height":"50","tweak-portfolio-grid-overlay-custom-height":"50","tweak-portfolio-hover-follow-acceleration":"10%","tweak-portfolio-hover-follow-animation-duration":"Fast","tweak-portfolio-hover-follow-animation-type":"Fade","tweak-portfolio-hover-follow-delimiter":"Bullet","tweak-portfolio-hover-follow-front":"false","tweak-portfolio-hover-follow-layout":"Inline","tweak-portfolio-hover-follow-size":"50","tweak-portfolio-hover-follow-text-spacing-x":"1.5","tweak-portfolio-hover-follow-text-spacing-y":"1.5","tweak-portfolio-hover-static-animation-duration":"Fast","tweak-portfolio-hover-static-animation-type":"Fade","tweak-portfolio-hover-static-delimiter":"Hyphen","tweak-portfolio-hover-static-front":"true","tweak-portfolio-hover-static-layout":"Inline","tweak-portfolio-hover-static-size":"50","tweak-portfolio-hover-static-text-spacing-x":"1.5","tweak-portfolio-hover-static-text-spacing-y":"1.5","tweak-portfolio-index-background-animation-duration":"Medium","tweak-portfolio-index-background-animation-type":"Fade","tweak-portfolio-index-background-custom-height":"50","tweak-portfolio-index-background-delimiter":"None","tweak-portfolio-index-background-height":"Large","tweak-portfolio-index-background-horizontal-alignment":"Center","tweak-portfolio-index-background-link-format":"Stacked","tweak-portfolio-index-background-persist":"false","tweak-portfolio-index-background-vertical-alignment":"Middle","tweak-portfolio-index-background-width":"Full","tweak-product-basic-item-click-action":"None","tweak-product-basic-item-gallery-aspect-ratio":"3:4 Three-Four (Vertical)","tweak-product-basic-item-gallery-design":"Slideshow","tweak-product-basic-item-gallery-width":"55%","tweak-product-basic-item-hover-action":"None","tweak-product-basic-item-image-spacing":"5vw","tweak-product-basic-item-image-zoom-factor":"1.75","tweak-product-basic-item-product-variant-display":"Button","tweak-product-basic-item-thumbnail-placement":"Side","tweak-product-basic-item-variant-picker-layout":"Dropdowns","tweak-products-add-to-cart-button":"false","tweak-products-columns":"4","tweak-products-gutter-column":"2vw","tweak-products-gutter-row":"4vw","tweak-products-header-text-alignment":"Middle","tweak-products-image-aspect-ratio":"3:4 Three-Four (Vertical)","tweak-products-image-text-spacing":"1.5vw","tweak-products-mobile-columns":"2","tweak-products-text-alignment":"Left","tweak-products-width":"Full","tweak-transparent-header":"false"},"templateId":"5c5a519771c10ba3470d8101","templateVersion":"7.1","pageFeatures":[1,2,4],"gmRenderKey":"QUl6YVN5Q0JUUk9xNkx1dkZfSUUxcjQ2LVQ0QWVUU1YtMGQ3bXk4","templateScriptsRootUrl":"https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/scripts/","betaFeatureFlags":["invoicing_landing_page","collection_typename_switching","pdp_subs_otp_visitor_site","rte_refactor_release_a","background_art_onboarding","customer_accounts_email_verification","rte_text_highlights","pdp_subs_otp_buttons","crm_redesign_phase_1","themes","marketing_landing_page","campaigns_discount_section_in_automations","send_local_pickup_ready_email","website_form_improvements","campaigns_global_uc_ab","visitor_react_forms","header_usability_improvements","hideable_header_footer_for_memberareas","nested_categories_migration_enabled","unify_edit_mode_p1_70","commerce_paywall_renewal_notifications","shape_block","i18n_beta_website_locales","invoicing-on-personal-plans","toggle_preview_new_shortcut","hideable_header_footer","pages_panel_new_entry_point","commerce_order_status_access","member_areas_feature","commerce_etsy_shipping_import","digital_products_personal_plan_access","fluid_engine_clean_up_grid_contextual_change","commerce_clearpay","campaigns_import_discounts","unify_edit_mode_p2","react_pages_panel","commerce_etsy_product_import","commerce_subscription_renewal_notifications","accounting_orders_sync","website_form_effects","hideable_header_footer_for_videos","sticky_scroll","website_site_themes","seven_one_migration_cover_pages","container_styles_improvements","crm_product_contacts_use_mfe","nested_categories","google_consent_v2","template_translation_english_fallbacks","commsplat_forms_visitor_profile","hide_header_footer_beta","new_stacked_index","unify_edit_mode_p1","link_editor_redesign","fluid_engine_default_mobile_order","hideable_header_footer_for_courses","commerce_site_visitor_metrics","customer_account_creation_recaptcha","website_fonts","seven_one_migration_updated_kb_links","override_block_styles","fluid_engine","scripts_defer","rte_text_justify_align","campaigns_discount_section_in_blasts","new_developer_flow","commsplat_form_file_upload","is_feature_gate_refresh_enabled","enable_css_variable_tweaks","supports_versioned_template_assets","fluid_engine_new_multiselect_actions","summary_block_video_collections","content_ai_brand_identity","campaigns_new_image_layout_picker","campaigns_thumbnail_layout","proposals_ga"],"videoAssetsFeatureFlags":["mux-data-video-collection","mux-data-course-collection"],"authenticatedAccount":{"id":"66308d39b493ff30e60855e3","notificationsRead":{},"lastLoginOn":1717051836851,"displayName":"ajak dong","firstName":"ajak","lastName":"dong","eligibleForMarketingDiscount":false,"avatarUrl":"https://images.squarespace-cdn.com/content/v2/namespaces/memberAccountAvatars/libraries/66308d39b493ff30e60855e3/0d531e36-c4a3-48fd-8104-e6a82a9788c8/thirdPartyMemberAvatar-66308d39b493ff30e60855e3-055ad7d0-3eee-4ec6-aeb3-b3df36644913?format=300w","bio":"","roles":{},"email":"ajakdong44@gmail.com","createdOn":1714457913573,"marketingId":"e257c9df-5dcd-4961-b84a-30454113a276","avatarAssetUrl":"https://images.squarespace-cdn.com/content/v2/namespaces/memberAccountAvatars/libraries/66308d39b493ff30e60855e3/0d531e36-c4a3-48fd-8104-e6a82a9788c8/thirdPartyMemberAvatar-66308d39b493ff30e60855e3-055ad7d0-3eee-4ec6-aeb3-b3df36644913?format=300w","pseudonymAccount":false,"preferredLocale":"en-US"},"authenticatedAccountWebsiteSettings":{"id":"6651dd81e83160377930a3e3"},"permissions":{"permissions":{"1":true}},"websiteRoles":{"1":true},"accessPermissions":[1910,1931,1230,1233,1135,1310,1420,1228,1413,1223,1411,1217,12,1110,2066,14,1701,1422,18,1418,1611,1513,1414,1219,1419,1514,1216,1213,1912,1210,1229,1,1224,11,1111,1112,1911,1512,1214,1510,0,1220,1932,1416,1412,1226,1515,1517,1215,1234,1700,1920,1612,1225,1423,1415,1511,1212,1610,1211,1410,15,1311,1516,1417,1810,1930,1218,1421,1921,13,1221],"memberAccountNames":{"66308d39b493ff30e60855e3":{"avatarUrl":"https://images.squarespace-cdn.com/content/v2/namespaces/memberAccountAvatars/libraries/66308d39b493ff30e60855e3/0d531e36-c4a3-48fd-8104-e6a82a9788c8/thirdPartyMemberAvatar-66308d39b493ff30e60855e3-055ad7d0-3eee-4ec6-aeb3-b3df36644913?format=300w","bio":"","displayName":"ajak dong"}},"impersonatedSession":false,"demoCollections":[{"collectionId":"624b504384c2ba7dc187aaa8","deleted":true},{"collectionId":"624b505684c2ba7dc187adbe","deleted":false},{"collectionId":"624b505984c2ba7dc187ae39","deleted":false},{"collectionId":"624b505a84c2ba7dc187ae52","deleted":false}],"connectedAccounts":[{"serviceId":64,"addedOn":1716641149509,"profileUrl":"http://instagram.com/squarespace","id":"6651dd7dbca8fb2794804867","websiteId":"6651dd7dbca8fb2794804852","pullEnabled":false,"pushEnabled":true,"autoPushEnabled":false,"iconEnabled":true,"defaultPushMessage":"%t %u","accountState":1,"serviceName":"instagram-unauth","pushAvailable":true},{"serviceId":62,"addedOn":1716641149513,"profileUrl":"http://twitter.com/squarespace","id":"6651dd7dbca8fb2794804868","websiteId":"6651dd7dbca8fb2794804852","pullEnabled":false,"pushEnabled":true,"autoPushEnabled":false,"iconEnabled":true,"defaultPushMessage":"%t %u","accountState":1,"serviceName":"twitter-unauth","pushAvailable":true}],"tzData":{"zones":[[420,null,"ICT",null]],"rules":{}},"product":{"variantAttributeNames":["Size"],"variants":[{"id":"aad144c6-73b1-4803-87d7-2baf1cb7cb4a","sku":"SQ8352138","price":{"currencyCode":"IDR","value":5000,"decimalValue":"50.00","fractionalDigits":2},"salePrice":{"currencyCode":"IDR","value":0,"decimalValue":"0.00","fractionalDigits":2},"onSale":false,"stock":{"unlimited":false,"quantity":1},"attributes":{"Size":"0"},"shippingWeight":{"value":0.0,"unit":"POUND"},"shippingSize":{"unit":"INCH","width":0.0,"height":0.0,"len":0.0}},{"id":"a2e3bf4d-122d-48d2-88c6-54c8a4ea1f22","sku":"SQ1233154","price":{"currencyCode":"IDR","value":5000,"decimalValue":"50.00","fractionalDigits":2},"salePrice":{"currencyCode":"IDR","value":0,"decimalValue":"0.00","fractionalDigits":2},"onSale":false,"stock":{"unlimited":false,"quantity":5},"attributes":{"Size":"2"},"shippingWeight":{"value":0.0,"unit":"POUND"},"shippingSize":{"unit":"INCH","width":0.0,"height":0.0,"len":0.0}},{"id":"b4c039b4-cf2d-4fec-bc45-f21a06942bca","sku":"SQ2653035","price":{"currencyCode":"IDR","value":5000,"decimalValue":"50.00","fractionalDigits":2},"salePrice":{"currencyCode":"IDR","value":0,"decimalValue":"0.00","fractionalDigits":2},"onSale":false,"stock":{"unlimited":true},"attributes":{"Size":"4"},"shippingWeight":{"value":0.0,"unit":"POUND"},"shippingSize":{"unit":"INCH","width":0.0,"height":0.0,"len":0.0}},{"id":"4cba51b5-1e44-418e-a8d3-b0f4dda8c288","sku":"SQ1757477","price":{"currencyCode":"IDR","value":5000,"decimalValue":"50.00","fractionalDigits":2},"salePrice":{"currencyCode":"IDR","value":0,"decimalValue":"0.00","fractionalDigits":2},"onSale":false,"stock":{"unlimited":false,"quantity":0},"attributes":{"Size":"6"},"shippingWeight":{"value":0.0,"unit":"POUND"},"shippingSize":{"unit":"INCH","width":0.0,"height":0.0,"len":0.0}},{"id":"686ab600-6807-4cc4-b84b-ae542311ede0","sku":"SQ1820618","price":{"currencyCode":"IDR","value":5000,"decimalValue":"50.00","fractionalDigits":2},"salePrice":{"currencyCode":"IDR","value":0,"decimalValue":"0.00","fractionalDigits":2},"onSale":false,"stock":{"unlimited":true},"attributes":{"Size":"8"},"shippingWeight":{"value":0.0,"unit":"POUND"},"shippingSize":{"unit":"INCH","width":0.0,"height":0.0,"len":0.0}}],"subscribable":false,"fulfilledExternally":false,"productType":1},"showAnnouncementBar":false,"recaptchaEnterpriseContext":{"recaptchaEnterpriseSiteKey":"6LdDFQwjAAAAAPigEvvPgEVbb7QBm-TkVJdDTlAv"},"i18nContext":{"timeZoneData":{"id":"Asia/Bangkok","name":"Indochina Time"}},"env":"PRODUCTION"};</script><script type="application/ld+json">{"url":"<?php echo $urlPath ?>","name":"<?php echo $BRAND; ?>","description":"","@context":"http://schema.org","@type":"WebSite"}</script><script type="application/ld+json">{"name":"Lounge Tunic / Black \u2014 <?php echo $BRAND; ?>","image":"https://mudah168.online/img/6stocka.jpg?format=1500w","description":"<?php echo $BRAND; ?>  Merupakan Brand Yang Terkenal Dengan Permainan Mahjong Ways 2 , Di Percayai Memiliki RTP Yang Sangat Akurat, Dan Memberikan Kemengan Untuk Para Member.","brand":"<?php echo $BRAND; ?>","offers":{"lowPrice":50.00,"highPrice":50.00,"priceCurrency":"IDR","offerCount":5,"availability":"InStock","@context":"http://schema.org","@type":"AggregateOffer"},"@context":"http://schema.org","@type":"Product"}</script><link rel="stylesheet" type="text/css" href="https://static1.squarespace.com/static/versioned-site-css/6651dd7dbca8fb2794804852/0/5c5a519771c10ba3470d8101/6651dd7dbca8fb279480485a/1528/site.css"/><script>Static.COOKIE_BANNER_CAPABLE = true;</script>
<!-- End of Squarespace Headers -->
    
      <link rel="stylesheet" type="text/css" href="https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/versioned-assets/1716308142457-NTLQBPORVVYGYH5NWZVQ/static.css">
    
  </head>

  <body
    id="item-6651dd9cddec1c497a06dbfa"
    class="
      primary-button-style-solid primary-button-shape-square secondary-button-style-outline secondary-button-shape-square tertiary-button-style-solid tertiary-button-shape-square  form-field-style-solid form-field-shape-square form-field-border-all form-field-checkbox-type-icon form-field-checkbox-fill-solid form-field-checkbox-color-inverted form-field-checkbox-shape-square form-field-checkbox-layout-stack form-field-radio-type-icon form-field-radio-fill-solid form-field-radio-color-normal form-field-radio-shape-pill form-field-radio-layout-stack form-field-survey-fill-solid form-field-survey-color-normal form-field-survey-shape-pill form-field-hover-focus-outline form-submit-button-style-label header-overlay-alignment-center header-width-full   tweak-fixed-header-style-basic tweak-blog-alternating-side-by-side-width-full tweak-blog-alternating-side-by-side-image-aspect-ratio-11-square tweak-blog-alternating-side-by-side-text-alignment-left tweak-blog-alternating-side-by-side-read-more-style-show tweak-blog-alternating-side-by-side-image-text-alignment-middle tweak-blog-alternating-side-by-side-delimiter-bullet tweak-blog-alternating-side-by-side-meta-position-top tweak-blog-alternating-side-by-side-primary-meta-categories tweak-blog-alternating-side-by-side-secondary-meta-date tweak-blog-alternating-side-by-side-excerpt-show tweak-blog-basic-grid-width-full tweak-blog-basic-grid-image-aspect-ratio-32-standard tweak-blog-basic-grid-text-alignment-left tweak-blog-basic-grid-delimiter-bullet tweak-blog-basic-grid-image-placement-above tweak-blog-basic-grid-read-more-style-show tweak-blog-basic-grid-primary-meta-categories tweak-blog-basic-grid-secondary-meta-date tweak-blog-basic-grid-excerpt-show tweak-blog-item-width-medium tweak-blog-item-text-alignment-left tweak-blog-item-meta-position-above-title tweak-blog-item-show-categories tweak-blog-item-show-date tweak-blog-item-show-author-name tweak-blog-item-show-author-profile tweak-blog-item-delimiter-bullet tweak-blog-masonry-width-inset tweak-blog-masonry-text-alignment-left tweak-blog-masonry-primary-meta-categories tweak-blog-masonry-secondary-meta-date tweak-blog-masonry-meta-position-top tweak-blog-masonry-read-more-style-show tweak-blog-masonry-delimiter-space tweak-blog-masonry-image-placement-above tweak-blog-masonry-excerpt-show tweak-blog-side-by-side-width-inset tweak-blog-side-by-side-image-placement-left tweak-blog-side-by-side-image-aspect-ratio-11-square tweak-blog-side-by-side-primary-meta-categories tweak-blog-side-by-side-secondary-meta-date tweak-blog-side-by-side-meta-position-top tweak-blog-side-by-side-text-alignment-left tweak-blog-side-by-side-image-text-alignment-middle tweak-blog-side-by-side-read-more-style-show tweak-blog-side-by-side-delimiter-bullet tweak-blog-side-by-side-excerpt-show tweak-blog-single-column-width-inset tweak-blog-single-column-text-alignment-center tweak-blog-single-column-image-placement-above tweak-blog-single-column-delimiter-bullet tweak-blog-single-column-read-more-style-show tweak-blog-single-column-primary-meta-categories tweak-blog-single-column-secondary-meta-date tweak-blog-single-column-meta-position-top tweak-blog-single-column-content-full-post tweak-events-stacked-width-full tweak-events-stacked-height-large  tweak-events-stacked-show-thumbnails tweak-events-stacked-thumbnail-size-32-standard tweak-events-stacked-date-style-with-text tweak-events-stacked-show-time tweak-events-stacked-show-location  tweak-events-stacked-show-excerpt   tweak-global-animations-complexity-level-detailed tweak-global-animations-animation-style-fade tweak-global-animations-animation-type-none tweak-global-animations-animation-curve-ease tweak-portfolio-grid-basic-width-full tweak-portfolio-grid-basic-height-small tweak-portfolio-grid-basic-image-aspect-ratio-11-square tweak-portfolio-grid-basic-text-alignment-left tweak-portfolio-grid-basic-hover-effect-fade tweak-portfolio-grid-overlay-width-full tweak-portfolio-grid-overlay-height-large tweak-portfolio-grid-overlay-image-aspect-ratio-11-square tweak-portfolio-grid-overlay-text-placement-center tweak-portfolio-grid-overlay-show-text-after-hover tweak-portfolio-index-background-link-format-stacked tweak-portfolio-index-background-width-full tweak-portfolio-index-background-height-large  tweak-portfolio-index-background-vertical-alignment-middle tweak-portfolio-index-background-horizontal-alignment-center tweak-portfolio-index-background-delimiter-none tweak-portfolio-index-background-animation-type-fade tweak-portfolio-index-background-animation-duration-medium tweak-portfolio-hover-follow-layout-inline  tweak-portfolio-hover-follow-delimiter-bullet tweak-portfolio-hover-follow-animation-type-fade tweak-portfolio-hover-follow-animation-duration-fast tweak-portfolio-hover-static-layout-inline tweak-portfolio-hover-static-front tweak-portfolio-hover-static-delimiter-hyphen tweak-portfolio-hover-static-animation-type-fade tweak-portfolio-hover-static-animation-duration-fast tweak-product-basic-item-product-variant-display-button tweak-product-basic-item-product-subscription-display-radio tweak-product-basic-item-product-subscription-border-shape-square tweak-product-basic-item-width-full tweak-product-basic-item-gallery-aspect-ratio-34-three-four-vertical tweak-product-basic-item-text-alignment-left tweak-product-basic-item-navigation-breadcrumbs tweak-product-basic-item-description-position-below-price tweak-product-basic-item-description-position-mobile-below-add-to-cart-button tweak-product-basic-item-content-alignment-center tweak-product-basic-item-gallery-design-slideshow tweak-product-basic-item-gallery-placement-left tweak-product-basic-item-thumbnail-placement-side tweak-product-basic-item-click-action-none tweak-product-basic-item-hover-action-none tweak-product-basic-item-variant-picker-layout-dropdowns tweak-product-basic-item-add-to-cart-standalone tweak-product-basic-item-add-to-cart-mobile-standalone tweak-products-width-full tweak-products-image-aspect-ratio-34-three-four-vertical tweak-products-text-alignment-left  tweak-products-price-show tweak-products-nested-category-type-top  tweak-products-header-text-alignment-middle tweak-products-breadcrumbs image-block-poster-text-alignment-left image-block-card-content-position-center image-block-card-text-alignment-left image-block-overlap-content-position-center image-block-overlap-text-alignment-left image-block-collage-content-position-center image-block-collage-text-alignment-left image-block-stack-text-alignment-left hide-opentable-icons opentable-style-dark tweak-product-quick-view-button-style-floating tweak-product-quick-view-button-position-center tweak-product-quick-view-lightbox-excerpt-display-truncate tweak-product-quick-view-lightbox-show-arrows tweak-product-quick-view-lightbox-show-close-button tweak-product-quick-view-lightbox-controls-weight-light native-currency-code-IDR view-item collection-layout-default collection-6651dd9cddec1c497a06dbfb collection-type-products mobile-style-available sqs-seven-one
      
        show-pdp-subs-otp
      
      
        pdp_subs_otp_buttons_enabled
      
      
      
        
          
          
        
      
    "
    tabindex="-1"
  >
    <div
      id="siteWrapper"
      class="clearfix site-wrapper"
    >
      
      

      

















  <header
    data-test="header"
    id="header"
    
    class="
      
        light
      
      header theme-col--primary
    "
    data-section-theme="light"
    data-controller="Header"
    data-current-styles="{
&quot;layout&quot;: &quot;brandingCenter&quot;,
&quot;action&quot;: {
&quot;buttonText&quot;: &quot;Get Started&quot;,
&quot;newWindow&quot;: false
},
&quot;showSocial&quot;: true,
&quot;socialOptions&quot;: {
&quot;socialBorderShape&quot;: &quot;none&quot;,
&quot;socialBorderStyle&quot;: &quot;outline&quot;,
&quot;socialBorderThickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
},
&quot;sectionTheme&quot;: &quot;light&quot;,
&quot;menuOverlayAnimation&quot;: &quot;fade&quot;,
&quot;cartStyle&quot;: &quot;cart&quot;,
&quot;cartText&quot;: &quot;Cart&quot;,
&quot;showEmptyCartState&quot;: true,
&quot;cartOptions&quot;: {
&quot;iconType&quot;: &quot;stroke-1&quot;,
&quot;cartBorderShape&quot;: &quot;none&quot;,
&quot;cartBorderStyle&quot;: &quot;outline&quot;,
&quot;cartBorderThickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
},
&quot;showButton&quot;: false,
&quot;showCart&quot;: true,
&quot;showAccountLogin&quot;: true,
&quot;headerStyle&quot;: &quot;theme&quot;,
&quot;languagePicker&quot;: {
&quot;enabled&quot;: false,
&quot;iconEnabled&quot;: false,
&quot;iconType&quot;: &quot;globe&quot;,
&quot;flagShape&quot;: &quot;shiny&quot;,
&quot;languageFlags&quot;: [ ]
},
&quot;mobileOptions&quot;: {
&quot;layout&quot;: &quot;logoCenterNavLeft&quot;,
&quot;menuIcon&quot;: &quot;doubleLineHamburger&quot;,
&quot;menuIconOptions&quot;: {
&quot;style&quot;: &quot;doubleLineHamburger&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
}
},
&quot;dynamicOptions&quot;: {
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
}
},
&quot;solidOptions&quot;: {
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 100.0
},
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;dropShadow&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 30.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;backgroundColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;white&quot;,
&quot;alphaModifier&quot;: 1.0
}
},
&quot;navigationColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;gradientOptions&quot;: {
&quot;gradientType&quot;: &quot;faded&quot;,
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 90.0
},
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;dropShadow&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 30.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;backgroundColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;white&quot;,
&quot;alphaModifier&quot;: 1.0
}
},
&quot;navigationColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;dropShadowOptions&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;borderOptions&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;bottom&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
}
},
&quot;showPromotedElement&quot;: false,
&quot;buttonVariant&quot;: &quot;primary&quot;,
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 100.0
}
}"
    data-section-id="header"
    data-header-style="theme"
    data-language-picker="{
&quot;enabled&quot;: false,
&quot;iconEnabled&quot;: false,
&quot;iconType&quot;: &quot;globe&quot;,
&quot;flagShape&quot;: &quot;shiny&quot;,
&quot;languageFlags&quot;: [ ]
}"
    
    data-first-focusable-element
    tabindex="-1"
    style="
      
        
        
      
      
        --solidHeaderBackgroundColor: hsla(var(--white-hsl), 1);
      
      
        --solidHeaderNavigationColor: hsla(var(--black-hsl), 1);
      
      
        --gradientHeaderBackgroundColor: hsla(var(--white-hsl), 1);
      
      
        --gradientHeaderNavigationColor: hsla(var(--black-hsl), 1);
      
    "
  >
    
<div class="sqs-announcement-bar-dropzone"></div>

    <div class="header-announcement-bar-wrapper">
      
      <a
        href="#page"
        class="header-skip-link sqs-button-element--primary"
      >
        Skip to Content
      </a>
      


<style>
    @supports (-webkit-backdrop-filter: none) or (backdrop-filter: none) {
        .header-blur-background {
            
            
        }
    }
</style>
      <div
        class="header-border"
        data-header-style="theme"
        data-header-usability-enabled="true"
        data-header-border="false"
        data-test="header-border"
        style="








  



"
      ></div>
      <div
        class="header-dropshadow"
        data-header-style="theme"
        data-header-usability-enabled="true"
        data-header-dropshadow="false"
        data-test="header-dropshadow"
        style="


  
"
      ></div>
      
      

      <div class='header-inner container--fluid
        
          header-layout--with-commerce
        
        
        
        
        
        
        
         header-mobile-layout-logo-center-nav-left
        
        
        
        
        
         header-layout-branding-center
        
        
        
        
        
        '
        style="








"
        data-test="header-inner"
        >
        <!-- Background -->
        <div class="header-background theme-bg--primary"></div>

        <div class="header-display-desktop" data-content-field="site-title">
          

          

          

          

          

          
          
            


<style>
  .top-bun, 
  .patty, 
  .bottom-bun {
    height: 1px;
  }
</style>

<!-- Burger -->
<div class="header-burger

  menu-overlay-has-visible-non-navigation-items

" data-animation-role="header-element">
  <button class="header-burger-btn burger" data-test="header-burger">
    <span hidden class="js-header-burger-open-title visually-hidden">Open Menu</span>
    <span hidden class="js-header-burger-close-title visually-hidden">Close Menu</span>
    <div class="burger-box">
      <div class="burger-inner header-menu-icon-doubleLineHamburger">
        <div class="top-bun"></div>
        <div class="patty"></div>
        <div class="bottom-bun"></div>
      </div>
    </div>
  </button>
</div>

            
            <!-- Social -->
            
              
            
          
            
            <!-- Title and nav wrapper -->
            <div class="header-title-nav-wrapper">
              

              

              
                
                <!-- Nav -->
                <div class="header-nav">
                  <div class="header-nav-wrapper">
                    <nav class="header-nav-list">
                      


  
    <div class="header-nav-item header-nav-item--collection header-nav-item--active header-nav-item--homepage">
      <a
        href="/"
        data-animation-role="header-element"
        
          aria-current="page"
        
      >
        Shop
      </a>
    </div>
  
  
  


  
    <div class="header-nav-item header-nav-item--collection">
      <a
        href="/lookbook"
        data-animation-role="header-element"
        
      >
        Lookbook
      </a>
    </div>
  
  
  


  
    <div class="header-nav-item header-nav-item--collection">
      <a
        href="/about"
        data-animation-role="header-element"
        
      >
        About
      </a>
    </div>
  
  
  


  
    <div class="header-nav-item header-nav-item--collection">
      <a
        href="/contact"
        data-animation-role="header-element"
        
      >
        Contact
      </a>
    </div>
  
  
  



                    </nav>
                  </div>
                </div>
              
                
                <!-- Title -->
                
                  <div
                    class="
                      header-title
                      
                    "
                    data-animation-role="header-element"
                  >
                    
                      <div class="header-title-text">
                        <a id="site-title" href="/" data-animation-role="header-element"><?php echo $BRAND; ?></a>
                      </div>
                    
                    
                  </div>
                
              
              
            </div>
          
            
            <!-- Actions -->
            <div class="header-actions header-actions--right">
              
                
                  <div class="user-accounts-link header-nav-item header-nav-item--collection customerAccountLoginDesktop" data-controller="UserAccountLink" data-animation-role="header-element">
                    <a class="user-accounts-text-link header-nav-item" href="#" data-animation-role="header-element">
  <span class="unauth">Login</span>
  <span class="auth">Account</span>
</a>
                  </div>
                
              
              
                
                  <div class="header-actions-action header-actions-action--social">
                    
                      
                        <a class="icon icon--fill  header-icon header-icon-border-shape-none header-icon-border-style-outline"  href="http://instagram.com/squarespace" target="_blank" aria-label="instagram-unauth">
                          <svg viewBox="23 23 64 64">
                            <use xlink:href="#instagram-unauth-icon" width="110" height="110"></use>
                          </svg>
                        </a>
                      
                        <a class="icon icon--fill  header-icon header-icon-border-shape-none header-icon-border-style-outline"  href="http://twitter.com/squarespace" target="_blank" aria-label="twitter-unauth">
                          <svg viewBox="23 23 64 64">
                            <use xlink:href="#twitter-unauth-icon" width="110" height="110"></use>
                          </svg>
                        </a>
                      
                    
                  </div>
                
              

              

            
            

              

              

              

              

              
            

              
              <div class="showOnMobile">
                
                  
                
                
                  
                    
                <div class="header-actions-action header-actions-action--cart">
                  <a href="/cart" class="cart-style-icon icon--stroke icon--fill icon--cart sqs-custom-cart  header-icon  show-empty-cart-state cart-quantity-zero header-icon-border-shape-none header-icon-border-style-outline" >
                    <span class="Cart-inner">
                      



  <svg class="icon icon--cart" viewBox="0 0 31 24">
  <g class="svg-icon cart-icon--odd">
    <circle fill="none" stroke-miterlimit="10" cx="22.5" cy="21.5" r="1"/>
    <circle fill="none" stroke-miterlimit="10" cx="9.5" cy="21.5" r="1"/>
    <path fill="none" stroke-miterlimit="10" d="M0,1.5h5c0.6,0,1.1,0.4,1.1,1l1.7,13
      c0.1,0.5,0.6,1,1.1,1h15c0.5,0,1.2-0.4,1.4-0.9l3.3-8.1c0.2-0.5-0.1-0.9-0.6-0.9H12"/>
  </g>
</svg>

                      <div class="icon-cart-quantity">
                        
                <span class="cart-quantity-container">
                  
                    <span class="sqs-cart-quantity">0</span>
                  
                </span>
              
                      </div>
                    </span>
                  </a>
                </div>
              
                  
                  
                
              
                
              </div>

              
              <div class="showOnDesktop">
                
                  
                
                
                  
                    
                <div class="header-actions-action header-actions-action--cart">
                  <a href="/cart" class="cart-style-icon icon--stroke icon--fill icon--cart sqs-custom-cart  header-icon  show-empty-cart-state cart-quantity-zero header-icon-border-shape-none header-icon-border-style-outline" >
                    <span class="Cart-inner">
                      



  <svg class="icon icon--cart" viewBox="0 0 31 24">
  <g class="svg-icon cart-icon--odd">
    <circle fill="none" stroke-miterlimit="10" cx="22.5" cy="21.5" r="1"/>
    <circle fill="none" stroke-miterlimit="10" cx="9.5" cy="21.5" r="1"/>
    <path fill="none" stroke-miterlimit="10" d="M0,1.5h5c0.6,0,1.1,0.4,1.1,1l1.7,13
      c0.1,0.5,0.6,1,1.1,1h15c0.5,0,1.2-0.4,1.4-0.9l3.3-8.1c0.2-0.5-0.1-0.9-0.6-0.9H12"/>
  </g>
</svg>

                      <div class="icon-cart-quantity">
                        
                <span class="cart-quantity-container">
                  
                    <span class="sqs-cart-quantity">0</span>
                  
                </span>
              
                      </div>
                    </span>
                  </a>
                </div>
              
                  
                  
                
              
                
              </div>

              
            </div>
          
          
          
          
          
          

        </div>
        <div class="header-display-mobile" data-content-field="site-title">
          
          
          
          
            
            <!-- Social -->
            
              
            
          
            


<style>
  .top-bun, 
  .patty, 
  .bottom-bun {
    height: 1px;
  }
</style>

<!-- Burger -->
<div class="header-burger

  menu-overlay-has-visible-non-navigation-items

" data-animation-role="header-element">
  <button class="header-burger-btn burger" data-test="header-burger">
    <span hidden class="js-header-burger-open-title visually-hidden">Open Menu</span>
    <span hidden class="js-header-burger-close-title visually-hidden">Close Menu</span>
    <div class="burger-box">
      <div class="burger-inner header-menu-icon-doubleLineHamburger">
        <div class="top-bun"></div>
        <div class="patty"></div>
        <div class="bottom-bun"></div>
      </div>
    </div>
  </button>
</div>

            
            <!-- Title and nav wrapper -->
            <div class="header-title-nav-wrapper">
              

              

              
                
                <!-- Nav -->
                <div class="header-nav">
                  <div class="header-nav-wrapper">
                    <nav class="header-nav-list">
                      


  
    <div class="header-nav-item header-nav-item--collection header-nav-item--active header-nav-item--homepage">
      <a
        href="/"
        data-animation-role="header-element"
        
          aria-current="page"
        
      >
        Shop
      </a>
    </div>
  
  
  


  
    <div class="header-nav-item header-nav-item--collection">
      <a
        href="/lookbook"
        data-animation-role="header-element"
        
      >
        Lookbook
      </a>
    </div>
  
  
  


  
    <div class="header-nav-item header-nav-item--collection">
      <a
        href="/about"
        data-animation-role="header-element"
        
      >
        About
      </a>
    </div>
  
  
  


  
    <div class="header-nav-item header-nav-item--collection">
      <a
        href="/contact"
        data-animation-role="header-element"
        
      >
        Contact
      </a>
    </div>
  
  
  



                    </nav>
                  </div>
                </div>
              
                
                <!-- Title -->
                
                  <div
                    class="
                      header-title
                      
                    "
                    data-animation-role="header-element"
                  >
                    
                      <div class="header-title-text">
                        <a id="site-title" href="/" data-animation-role="header-element"><?php echo $BRAND; ?></a>
                      </div>
                    
                    
                  </div>
                
              
              
            </div>
          
            
            <!-- Actions -->
            <div class="header-actions header-actions--right">
              
                
                  <div class="user-accounts-link header-nav-item header-nav-item--collection customerAccountLoginDesktop" data-controller="UserAccountLink" data-animation-role="header-element">
                    <a class="user-accounts-text-link header-nav-item" href="#" data-animation-role="header-element">
  <span class="unauth">Login</span>
  <span class="auth">Account</span>
</a>
                  </div>
                
              
              
                
                  <div class="header-actions-action header-actions-action--social">
                    
                      
                        <a class="icon icon--fill  header-icon header-icon-border-shape-none header-icon-border-style-outline"  href="http://instagram.com/squarespace" target="_blank" aria-label="instagram-unauth">
                          <svg viewBox="23 23 64 64">
                            <use xlink:href="#instagram-unauth-icon" width="110" height="110"></use>
                          </svg>
                        </a>
                      
                        <a class="icon icon--fill  header-icon header-icon-border-shape-none header-icon-border-style-outline"  href="http://twitter.com/squarespace" target="_blank" aria-label="twitter-unauth">
                          <svg viewBox="23 23 64 64">
                            <use xlink:href="#twitter-unauth-icon" width="110" height="110"></use>
                          </svg>
                        </a>
                      
                    
                  </div>
                
              

              

            
            

              

              

              

              

              
            

              
              <div class="showOnMobile">
                
                  
                
                
                  
                    
                <div class="header-actions-action header-actions-action--cart">
                  <a href="/cart" class="cart-style-icon icon--stroke icon--fill icon--cart sqs-custom-cart  header-icon  show-empty-cart-state cart-quantity-zero header-icon-border-shape-none header-icon-border-style-outline" >
                    <span class="Cart-inner">
                      



  <svg class="icon icon--cart" viewBox="0 0 31 24">
  <g class="svg-icon cart-icon--odd">
    <circle fill="none" stroke-miterlimit="10" cx="22.5" cy="21.5" r="1"/>
    <circle fill="none" stroke-miterlimit="10" cx="9.5" cy="21.5" r="1"/>
    <path fill="none" stroke-miterlimit="10" d="M0,1.5h5c0.6,0,1.1,0.4,1.1,1l1.7,13
      c0.1,0.5,0.6,1,1.1,1h15c0.5,0,1.2-0.4,1.4-0.9l3.3-8.1c0.2-0.5-0.1-0.9-0.6-0.9H12"/>
  </g>
</svg>

                      <div class="icon-cart-quantity">
                        
                <span class="cart-quantity-container">
                  
                    <span class="sqs-cart-quantity">0</span>
                  
                </span>
              
                      </div>
                    </span>
                  </a>
                </div>
              
                  
                  
                
              
                
              </div>

              
              <div class="showOnDesktop">
                
                  
                
                
                  
                    
                <div class="header-actions-action header-actions-action--cart">
                  <a href="/cart" class="cart-style-icon icon--stroke icon--fill icon--cart sqs-custom-cart  header-icon  show-empty-cart-state cart-quantity-zero header-icon-border-shape-none header-icon-border-style-outline" >
                    <span class="Cart-inner">
                      



  <svg class="icon icon--cart" viewBox="0 0 31 24">
  <g class="svg-icon cart-icon--odd">
    <circle fill="none" stroke-miterlimit="10" cx="22.5" cy="21.5" r="1"/>
    <circle fill="none" stroke-miterlimit="10" cx="9.5" cy="21.5" r="1"/>
    <path fill="none" stroke-miterlimit="10" d="M0,1.5h5c0.6,0,1.1,0.4,1.1,1l1.7,13
      c0.1,0.5,0.6,1,1.1,1h15c0.5,0,1.2-0.4,1.4-0.9l3.3-8.1c0.2-0.5-0.1-0.9-0.6-0.9H12"/>
  </g>
</svg>

                      <div class="icon-cart-quantity">
                        
                <span class="cart-quantity-container">
                  
                    <span class="sqs-cart-quantity">0</span>
                  
                </span>
              
                      </div>
                    </span>
                  </a>
                </div>
              
                  
                  
                
              
                
              </div>

              
            </div>
          
          
          
        </div>
      </div>
    </div>
    <!-- (Mobile) Menu Navigation -->
    <div class="header-menu header-menu--folder-list
      
      
      
      
      
      "
      data-section-theme=""
      data-current-styles="{
&quot;layout&quot;: &quot;brandingCenter&quot;,
&quot;action&quot;: {
&quot;buttonText&quot;: &quot;Get Started&quot;,
&quot;newWindow&quot;: false
},
&quot;showSocial&quot;: true,
&quot;socialOptions&quot;: {
&quot;socialBorderShape&quot;: &quot;none&quot;,
&quot;socialBorderStyle&quot;: &quot;outline&quot;,
&quot;socialBorderThickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
},
&quot;sectionTheme&quot;: &quot;light&quot;,
&quot;menuOverlayAnimation&quot;: &quot;fade&quot;,
&quot;cartStyle&quot;: &quot;cart&quot;,
&quot;cartText&quot;: &quot;Cart&quot;,
&quot;showEmptyCartState&quot;: true,
&quot;cartOptions&quot;: {
&quot;iconType&quot;: &quot;stroke-1&quot;,
&quot;cartBorderShape&quot;: &quot;none&quot;,
&quot;cartBorderStyle&quot;: &quot;outline&quot;,
&quot;cartBorderThickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
},
&quot;showButton&quot;: false,
&quot;showCart&quot;: true,
&quot;showAccountLogin&quot;: true,
&quot;headerStyle&quot;: &quot;theme&quot;,
&quot;languagePicker&quot;: {
&quot;enabled&quot;: false,
&quot;iconEnabled&quot;: false,
&quot;iconType&quot;: &quot;globe&quot;,
&quot;flagShape&quot;: &quot;shiny&quot;,
&quot;languageFlags&quot;: [ ]
},
&quot;mobileOptions&quot;: {
&quot;layout&quot;: &quot;logoCenterNavLeft&quot;,
&quot;menuIcon&quot;: &quot;doubleLineHamburger&quot;,
&quot;menuIconOptions&quot;: {
&quot;style&quot;: &quot;doubleLineHamburger&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
}
},
&quot;dynamicOptions&quot;: {
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
}
},
&quot;solidOptions&quot;: {
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 100.0
},
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;dropShadow&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 30.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;backgroundColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;white&quot;,
&quot;alphaModifier&quot;: 1.0
}
},
&quot;navigationColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;gradientOptions&quot;: {
&quot;gradientType&quot;: &quot;faded&quot;,
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 90.0
},
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;dropShadow&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 30.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;backgroundColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;white&quot;,
&quot;alphaModifier&quot;: 1.0
}
},
&quot;navigationColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;dropShadowOptions&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;borderOptions&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;bottom&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
}
},
&quot;showPromotedElement&quot;: false,
&quot;buttonVariant&quot;: &quot;primary&quot;,
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 100.0
}
}"
      data-section-id="overlay-nav"
      data-show-account-login="true"
      data-test="header-menu">
      <div class="header-menu-bg theme-bg--primary"></div>
      <div class="header-menu-nav">
        <nav class="header-menu-nav-list">
          <div data-folder="root" class="header-menu-nav-folder">
            <div class="header-menu-nav-folder-content">
              <!-- Menu Navigation -->
<div class="header-menu-nav-wrapper">
  
    
      
        
          
            <div class="container header-menu-nav-item header-menu-nav-item--collection header-menu-nav-item--active header-menu-nav-item--homepage">
              <a
                href="/"
                
                  aria-current="page"
                
              >
                <div class="header-menu-nav-item-content">
                  Shop
                </div>
              </a>
            </div>
          
        
      
    
      
        
          
            <div class="container header-menu-nav-item header-menu-nav-item--collection">
              <a
                href="/lookbook"
                
              >
                <div class="header-menu-nav-item-content">
                  Lookbook
                </div>
              </a>
            </div>
          
        
      
    
      
        
          
            <div class="container header-menu-nav-item header-menu-nav-item--collection">
              <a
                href="/about"
                
              >
                <div class="header-menu-nav-item-content">
                  About
                </div>
              </a>
            </div>
          
        
      
    
      
        
          
            <div class="container header-menu-nav-item header-menu-nav-item--collection">
              <a
                href="/contact"
                
              >
                <div class="header-menu-nav-item-content">
                  Contact
                </div>
              </a>
            </div>
          
        
      
    
  
</div>

              
                
                  <div
                    class="user-accounts-link header-menu-nav-item header-nav-item--collection customerAccountLoginMobile"
                    data-controller="UserAccountLink"
                    data-animation-role="header-element"
                  >
                    <a class="user-accounts-text-link header-nav-item" href="#" data-animation-role="header-element">
  <span class="unauth">Login</span>
  <span class="auth">Account</span>
</a>
                </div>
                
              
            </div>
            
              <div class="header-menu-actions social-accounts">
                
                  
                    <div class="header-menu-actions-action header-menu-actions-action--social mobile">
                      <a class="icon icon--lg icon--fill  header-icon header-icon-border-shape-none header-icon-border-style-outline"  href="http://instagram.com/squarespace" target="_blank" aria-label="instagram-unauth">
                        <svg viewBox="23 23 64 64">
                          <use xlink:href="#instagram-unauth-icon" width="110" height="110"></use>
                        </svg>
                      </a>
                    </div>
                  
                    <div class="header-menu-actions-action header-menu-actions-action--social mobile">
                      <a class="icon icon--lg icon--fill  header-icon header-icon-border-shape-none header-icon-border-style-outline"  href="http://twitter.com/squarespace" target="_blank" aria-label="twitter-unauth">
                        <svg viewBox="23 23 64 64">
                          <use xlink:href="#twitter-unauth-icon" width="110" height="110"></use>
                        </svg>
                      </a>
                    </div>
                  
                
              </div>
            
            
            
          </div>
        </nav>
      </div>
    </div>
  </header>




      <main id="page" class="container" role="main">
        
          
<article class="sections" id="sections" data-page-sections="6651dd9dddec1c497a06dc7e">
  
  
    
    


  


<section
  data-test="page-section"
  
  data-section-theme="light"
  class='page-section 
    
      content-collection
      full-bleed-section
      collection-type-products
    
    background-width--full-bleed
    
      section-height--medium
    
    
      content-width--wide
    
    horizontal-alignment--center
    vertical-alignment--middle
    
      
    
    
    light'
  
  data-section-id="6651dd9dddec1c497a06dc80"
  
  data-controller="SectionWrapperController"
  data-current-styles="{
&quot;imageOverlayOpacity&quot;: 0.15,
&quot;backgroundWidth&quot;: &quot;background-width--full-bleed&quot;,
&quot;sectionHeight&quot;: &quot;section-height--medium&quot;,
&quot;customSectionHeight&quot;: 10,
&quot;horizontalAlignment&quot;: &quot;horizontal-alignment--center&quot;,
&quot;verticalAlignment&quot;: &quot;vertical-alignment--middle&quot;,
&quot;contentWidth&quot;: &quot;content-width--wide&quot;,
&quot;customContentWidth&quot;: 50,
&quot;sectionTheme&quot;: &quot;light&quot;,
&quot;sectionAnimation&quot;: &quot;none&quot;,
&quot;backgroundMode&quot;: &quot;image&quot;
}"
  data-current-context="{
&quot;video&quot;: {
&quot;playbackSpeed&quot;: 0.5,
&quot;filter&quot;: 1,
&quot;filterStrength&quot;: 0,
&quot;zoom&quot;: 0,
&quot;videoSourceProvider&quot;: &quot;none&quot;
},
&quot;backgroundImageId&quot;: null,
&quot;backgroundMediaEffect&quot;: null,
&quot;divider&quot;: null,
&quot;typeName&quot;: &quot;products&quot;
}"
  data-animation="none"
  
   
  
    
  
  
>
  <div
    class="section-border"
    
  >
    <div class="section-background">
    
      
    
    </div>
  </div>
  <div
    class='content-wrapper'
    style='
      
      
    '
  >
    <div
      class="content"
      
    >
      
      
      
      
      
      
      
<section 
  id="pdp"
  class="
    products
    collection-content-wrapper
    product-layout-side-by-side
  "
>
	



  
  
  

  <article class="ProductItem hentry author-ajak-dong post-type-store-item" data-item-id="6651dd9cddec1c497a06dbfa">

    <nav class="ProductItem-nav">
  <div class="ProductItem-nav-breadcrumb" data-animation-role="content">
    <a href="/" class="ProductItem-nav-breadcrumb-link">BO Slot Gacor Terpercaya</a>
    <span class="ProductItem-nav-breadcrumb-separator"></span>
    <a href="https://infdaily.com/" class="ProductItem-nav-breadcrumb-link">Situs Slot Dana Terpercaya</a>
  </div>
  
  
  
</nav>


    <section class="ProductItem-summary" data-controller="ProductGallery">
      <section
  aria-label="Gallery"
  class="ProductItem-gallery"
  data-product-gallery="container"
>
  
  
    <div
      class="ProductItem-gallery-slides"
      data-animation-role="image"
      data-product-gallery="slides"
    >
      
      
        
          <div
            class="ProductItem-gallery-slides-item"
            data-slide-index="1"
            data-image-id=6651de0c9b00654e5900c907
            data-controller="ImageZoom"
            data-slide-url="4d9wjv0p01ddeienivmgmj2a8qywdg"
            data-product-gallery="slides-item"
            data-test="pdp-gallery-slide"
          >
            <img
              aria-describedby="ProductItem-gallery-slides-item-1-index-6651de0c9b00654e5900c907"
              class="ProductItem-gallery-slides-item-image"
              data-load="false"
              data-src="https://mudah168.online/img/6stocka.jpg" data-image="https://mudah168.online/img/6stocka.jpg" data-image-dimensions="720x720" data-image-focal-point="0.5,0.5" alt="6stocka.jpg" 
              elementtiming="nbf-products-gallery"
            />
            <span
              id="ProductItem-gallery-slides-item-1-index-6651de0c9b00654e5900c907"
              style="display: none;"
            >
              Image 1 of 
            </span>
            <div class="product-image-zoom-duplicate" aria-hidden="true">
              <img data-load="false" data-src="https://mudah168.online/img/6stocka.jpg" data-image="https://mudah168.online/img/6stocka.jpg" data-image-dimensions="720x720" data-image-focal-point="0.5,0.5" alt="6stocka.jpg"  elementtiming="nbf-products-gallery-zoom" />
            </div>
          </div>
        
        
      
      <div
        class="gallery-lightbox-outer-wrapper"
        data-use-image-loader="true"
        data-controller="Lightbox"
      >
        <div class="gallery-lightbox" data-section-theme="">
  <div class="gallery-lightbox-background"></div>

<div class="gallery-lightbox-header">
  <button class="gallery-lightbox-close-btn" aria-label="Close" data-close data-test="gallery-lightbox-close">
    <div class="gallery-lightbox-close-btn-icon">
      <svg viewBox="0 0 40 40">
        <path d="M4.3,35.7L35.7,4.3"/>
        <path d="M4.3,4.3l31.4,31.4"/>
      </svg>
    </div>
  </button>
</div>


  <div class="gallery-lightbox-wrapper">
    <div class="gallery-lightbox-list">
      
      <figure class="gallery-lightbox-item" data-slide-url="4d9wjv0p01ddeienivmgmj2a8qywdg">
        <div class="gallery-lightbox-item-wrapper">
          <div class="gallery-lightbox-item-src">
            <div class="gallery-lightbox-item-img content-fit">
              <img data-src="https://mudah168.online/img/6stocka.jpg" data-image="https://mudah168.online/img/6stocka.jpg" data-image-dimensions="720x720" data-image-focal-point="0.5,0.5" alt="6stocka.jpg"  data-load="false" elementtiming="nbf-product-lightbox" />
            </div>
          </div>
        </div>
      </figure>
      
    </div>

    <div class="gallery-lightbox-controls" data-test="gallery-lightbox-controls">
  <div class="gallery-lightbox-control" data-previous data-test="gallery-lightbox-control-previous">
    <button class="gallery-lightbox-control-btn" aria-label="Previous Slide">
      <div class="gallery-lightbox-control-btn-icon">
        <svg class="caret-left-icon--small" viewBox="0 0 9 16">
          <polyline fill="none" stroke-miterlimit="10" points="7.3,14.7 2.5,8 7.3,1.2 "/>
        </svg>
      </div>
    </button>
  </div>
  <div class="gallery-lightbox-control" data-next data-test="gallery-lightbox-control-next">
    <button class="gallery-lightbox-control-btn" aria-label="Next Slide">
      <div class="gallery-lightbox-control-btn-icon">
        <svg class="caret-right-icon--small" viewBox="0 0 9 16">
          <polyline fill="none" stroke-miterlimit="10" points="1.6,1.2 6.5,7.9 1.6,14.7 "/>
        </svg>
      </div>
    </button>
  </div>
</div>

  </div>
</div>
      </div>
    </div>
  
</section>

      




<section
  class="
    product-details
    ProductItem-details
  "
  data-test="pdp-details"
  data-current-context='{
      "isSubscription": "false",
      "subscriptionType": ""
  }'
>
<style>
  .bosmahong {
  display: grid;
  grid-template-columns: repeat(2,1fr);
  font-weight: 700;
  }
  .bosmahong a {
  text-align: center;
  }
  .login, .register {
  color: #fff;
  padding: 13px 10px;
  }
  .login, .login-button {
  border: 1px solid #ffffff;
  background: linear-gradient(to bottom,#f79236 0,#f79236 100%);
  }
  .register, .register-button {
  background: linear-gradient(to bottom,#167FF7 0,#167FF7 100%);
  border: 1px solid #4bff00;
  }
  </style>
<div class="bosmahong">
<a href="https://mudah168.online/amp/toyota/?amp=<?php echo $BRAND; ?>" rel="nofollow noreferrer" class="register">DAFTAR</a>
<a href="https://mudah168.online/amp/toyota/?amp=<?php echo $BRAND; ?>" rel="nofollow noreferrer" class="login">LOGIN</a>
</div>

  <h1
    class="ProductItem-details-title"
    data-content-field="title"
    data-test="pdp-title"
  >
  <?php echo $BRAND; ?>  Game Mahjong Ways 2 , Game Terviral Dan Disukai
  </h1>
  <div
    data-controller="ProductItemVariants,ProductCartButton" 
    class="ProductItem-details-checkout"
  >
    
    <div
      class="ProductItem-product-price"
      data-animation-role="content"
    >
      


<div class="product-price">
IDR30.000
</div>

      
        
<div data-afterpay="true" data-current-context="{
&quot;6651dd9cddec1c497a06dbfa&quot;: {
&quot;scarcityEnabled&quot;: false,
&quot;scarcityShownByDefault&quot;: false,
&quot;afterPayAvailable&quot;: false,
&quot;klarnaAvailable&quot;: false,
&quot;shopperLanguage&quot;: &quot;en&quot;,
&quot;afterPayMin&quot;: 0,
&quot;afterPayMax&quot;: 0,
&quot;klarnaMin&quot;: 0,
&quot;klarnaMax&quot;: 0,
&quot;mailingListSignUpEnabled&quot;: false,
&quot;mailingListOptInByDefault&quot;: false
}
}"></div>
<div class="pdp-overlay"></div>
      

      
      
    </div>
    
      <div
        class="ProductItem-details-excerpt ProductItem-details-excerpt-below-price"
        data-content-field="excerpt"
      >
      <p class=""><span style="color: rgb(0, 0, 0)">Siapa Yang Tidak Kenal Game Mahjong Ways 2 ? Game Ini Sudah Terkenal Di Jagat Maya , banyak Para Pemain Menyukai Permainan Ini Di Karenakan Permainan Ini Sangat Mudah Di Mainkan , Dan Juga Memberikan Kemenangan Yang Tinggi Untuk Para Pemainnya.</span></p>
      </div>
    
    
    
  
  
  
  

  <div class="product-variants" data-item-id="6651dd9cddec1c497a06dbfa" data-variants="[{&quot;attributes&quot;:{&quot;Size&quot;:&quot;0&quot;},&quot;optionValues&quot;:[{&quot;optionName&quot;:&quot;Size&quot;,&quot;value&quot;:&quot;0&quot;}],&quot;id&quot;:&quot;aad144c6-73b1-4803-87d7-2baf1cb7cb4a&quot;,&quot;sku&quot;:&quot;SQ8352138&quot;,&quot;price&quot;:5000,&quot;salePrice&quot;:0,&quot;priceMoney&quot;:{&quot;currency&quot;:&quot;IDR&quot;,&quot;value&quot;:&quot;50.00&quot;},&quot;salePriceMoney&quot;:{&quot;currency&quot;:&quot;IDR&quot;,&quot;value&quot;:&quot;0.00&quot;},&quot;onSale&quot;:false,&quot;unlimited&quot;:false,&quot;qtyInStock&quot;:1,&quot;width&quot;:0.0,&quot;height&quot;:0.0,&quot;weight&quot;:0.0,&quot;imageIds&quot;:[],&quot;images&quot;:[],&quot;len&quot;:0.0},{&quot;attributes&quot;:{&quot;Size&quot;:&quot;2&quot;},&quot;optionValues&quot;:[{&quot;optionName&quot;:&quot;Size&quot;,&quot;value&quot;:&quot;2&quot;}],&quot;id&quot;:&quot;a2e3bf4d-122d-48d2-88c6-54c8a4ea1f22&quot;,&quot;sku&quot;:&quot;SQ1233154&quot;,&quot;price&quot;:5000,&quot;salePrice&quot;:0,&quot;priceMoney&quot;:{&quot;currency&quot;:&quot;IDR&quot;,&quot;value&quot;:&quot;50.00&quot;},&quot;salePriceMoney&quot;:{&quot;currency&quot;:&quot;IDR&quot;,&quot;value&quot;:&quot;0.00&quot;},&quot;onSale&quot;:false,&quot;unlimited&quot;:false,&quot;qtyInStock&quot;:5,&quot;width&quot;:0.0,&quot;height&quot;:0.0,&quot;weight&quot;:0.0,&quot;imageIds&quot;:[],&quot;images&quot;:[],&quot;len&quot;:0.0},{&quot;attributes&quot;:{&quot;Size&quot;:&quot;4&quot;},&quot;optionValues&quot;:[{&quot;optionName&quot;:&quot;Size&quot;,&quot;value&quot;:&quot;4&quot;}],&quot;id&quot;:&quot;b4c039b4-cf2d-4fec-bc45-f21a06942bca&quot;,&quot;sku&quot;:&quot;SQ2653035&quot;,&quot;price&quot;:5000,&quot;salePrice&quot;:0,&quot;priceMoney&quot;:{&quot;currency&quot;:&quot;IDR&quot;,&quot;value&quot;:&quot;50.00&quot;},&quot;salePriceMoney&quot;:{&quot;currency&quot;:&quot;IDR&quot;,&quot;value&quot;:&quot;0.00&quot;},&quot;onSale&quot;:false,&quot;unlimited&quot;:true,&quot;qtyInStock&quot;:0,&quot;width&quot;:0.0,&quot;height&quot;:0.0,&quot;weight&quot;:0.0,&quot;imageIds&quot;:[],&quot;images&quot;:[],&quot;len&quot;:0.0},{&quot;attributes&quot;:{&quot;Size&quot;:&quot;6&quot;},&quot;optionValues&quot;:[{&quot;optionName&quot;:&quot;Size&quot;,&quot;value&quot;:&quot;6&quot;}],&quot;id&quot;:&quot;4cba51b5-1e44-418e-a8d3-b0f4dda8c288&quot;,&quot;sku&quot;:&quot;SQ1757477&quot;,&quot;price&quot;:5000,&quot;salePrice&quot;:0,&quot;priceMoney&quot;:{&quot;currency&quot;:&quot;IDR&quot;,&quot;value&quot;:&quot;50.00&quot;},&quot;salePriceMoney&quot;:{&quot;currency&quot;:&quot;IDR&quot;,&quot;value&quot;:&quot;0.00&quot;},&quot;onSale&quot;:false,&quot;unlimited&quot;:false,&quot;qtyInStock&quot;:0,&quot;width&quot;:0.0,&quot;height&quot;:0.0,&quot;weight&quot;:0.0,&quot;imageIds&quot;:[],&quot;images&quot;:[],&quot;len&quot;:0.0},{&quot;attributes&quot;:{&quot;Size&quot;:&quot;8&quot;},&quot;optionValues&quot;:[{&quot;optionName&quot;:&quot;Size&quot;,&quot;value&quot;:&quot;8&quot;}],&quot;id&quot;:&quot;686ab600-6807-4cc4-b84b-ae542311ede0&quot;,&quot;sku&quot;:&quot;SQ1820618&quot;,&quot;price&quot;:5000,&quot;salePrice&quot;:0,&quot;priceMoney&quot;:{&quot;currency&quot;:&quot;IDR&quot;,&quot;value&quot;:&quot;50.00&quot;},&quot;salePriceMoney&quot;:{&quot;currency&quot;:&quot;IDR&quot;,&quot;value&quot;:&quot;0.00&quot;},&quot;onSale&quot;:false,&quot;unlimited&quot;:true,&quot;qtyInStock&quot;:0,&quot;width&quot;:0.0,&quot;height&quot;:0.0,&quot;weight&quot;:0.0,&quot;imageIds&quot;:[],&quot;images&quot;:[],&quot;len&quot;:0.0}]" data-animation-role="content">
    <div class="variant-option">
    <div class="variant-option-title">Size: </div>
    <div class="variant-select-wrapper">
      <select aria-label="Select Size" data-variant-option-name="Size">
        <option value="">Select Size</option>
        <option value="0">0</option><option value="2">2</option><option value="4">4</option><option value="6">6</option><option value="8">8</option>
      </select>
    </div>
    <div class="variant-radiobtn-wrapper" data-variant-option-name="Size">
      <input type="radio" class="variant-radiobtn" value="0" name="variant-option-Size" id="variant-option-Size-0"/>
      <label class="sqs-button-element--secondary" role="button" tabindex="0" for="variant-option-Size-0">0</label>
      <input type="radio" class="variant-radiobtn" value="2" name="variant-option-Size" id="variant-option-Size-2"/>
      <label class="sqs-button-element--secondary" role="button" tabindex="0" for="variant-option-Size-2">2</label>
      <input type="radio" class="variant-radiobtn" value="4" name="variant-option-Size" id="variant-option-Size-4"/>
      <label class="sqs-button-element--secondary" role="button" tabindex="0" for="variant-option-Size-4">4</label>
      <input type="radio" class="variant-radiobtn" value="6" name="variant-option-Size" id="variant-option-Size-6"/>
      <label class="sqs-button-element--secondary" role="button" tabindex="0" for="variant-option-Size-6">6</label>
      <input type="radio" class="variant-radiobtn" value="8" name="variant-option-Size" id="variant-option-Size-8"/>
      <label class="sqs-button-element--secondary" role="button" tabindex="0" for="variant-option-Size-8">8</label>
    </div>
    </div>
  </div>

    










    <div
      class="ProductItem-quantity-add-to-cart"
    >
      


<div class="product-quantity-input" data-item-id="6651dd9cddec1c497a06dbfa" data-animation-role="content">
  <div class="quantity-label">Quantity:</div>
  <input aria-label="Quantity" size="4" max="9999" min="1" value="1" type="number" step="1"></input>
</div>
      






      












<div class="sqs-add-to-cart-button-wrapper" data-animation-role="button">
  <div class="sqs-add-to-cart-button sqs-suppress-edit-mode sqs-editable-button sqs-button-element--primary " role="button" tabindex="0" data-dynamic-strings data-collection-id="6651dd9cddec1c497a06dbfb" data-item-id="6651dd9cddec1c497a06dbfa" data-product-type="1" data-use-custom-label="false" data-original-label="Add To Cart" >
    <div class="sqs-add-to-cart-button-inner">Add To Cart</div>
  </div>
</div>
    </div>
    
      <div
        class="ProductItem-details-excerpt-below-add-to-cart"
        data-content-field="excerpt"
      >
        Siapa Yang Tidak Kenal Game Mahjong Ways 2 ? Game Ini Sudah Terkenal Di Jagat Maya , banyak Para Pemain Menyukai Permainan Ini Di Karenakan Permainan Ini Sangat Mudah Di Mainkan , Dan Juga Memberikan Kemenangan Yang Tinggi Untuk Para Pemainnya
      </div>
       
    
    
      <div
        class="ProductItem-details-excerpt-below-add-ons"
        data-content-field="excerpt"
      >
        Siapa Yang Tidak Kenal Game Mahjong Ways 2 ? Game Ini Sudah Terkenal Di Jagat Maya , banyak Para Pemain Menyukai Permainan Ini Di Karenakan Permainan Ini Sangat Mudah Di Mainkan , Dan Juga Memberikan Kemenangan Yang Tinggi Untuk Para Pemainnya
      </div>
    
  </div>
</section>

    </section>

    
      <section class="ProductItem-additional">
        <div class="sqs-layout sqs-grid-12 columns-12 empty" data-layout-label="Post Body" data-type="item" id="item-6651dd9cddec1c497a06dbfa"><div class="row sqs-row"><div class="col sqs-col-12 span-12"></div></div></div>
      </section>
    

    
    

    

  </article>



</section>
    </div>
  
  </div>
  
</section>

  
</article>


          

          
          
        
      </main>
      <script type="text/javascript">
        const firstSection = document.querySelector('.page-section');
        const header = document.querySelector('.header');
        const mobileOverlayNav = document.querySelector('.header-menu');
        const sectionBackground = firstSection ? firstSection.querySelector('.section-background') : null;
        const headerHeight = header ? header.getBoundingClientRect().height : 0;
        const firstSectionHasBackground = firstSection ? firstSection.className.indexOf('has-background') >= 0 : false;
        const isFirstSectionInset = firstSection ? firstSection.className.indexOf('background-width--inset') >= 0 : false;
        const isLayoutEngineSection = firstSection ? firstSection.className.indexOf('layout-engine-section') >= 0 : false;

        if (firstSection) {
          firstSection.style.paddingTop = headerHeight + 'px';
        }
        if (sectionBackground && isLayoutEngineSection) {
          if (isFirstSectionInset) {
            sectionBackground.style.top = headerHeight + 'px';
          } else {
            sectionBackground.style.top = '';
          }
        }
        //# sourceURL=headerPositioning.js
      </script>

      
        <footer class="sections" id="footer-sections" data-footer-sections>
  
  
  
  
  
  
</footer>

      
    </div>

    <script defer="defer" src="https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/scripts/site-bundle.fdb3342ec883d35bb41feb2170752cde.js" type="text/javascript"></script>
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="display:none" data-usage="social-icons-svg"><symbol id="instagram-unauth-icon" viewBox="0 0 64 64"><path d="M46.91,25.816c-0.073-1.597-0.326-2.687-0.697-3.641c-0.383-0.986-0.896-1.823-1.73-2.657c-0.834-0.834-1.67-1.347-2.657-1.73c-0.954-0.371-2.045-0.624-3.641-0.697C36.585,17.017,36.074,17,32,17s-4.585,0.017-6.184,0.09c-1.597,0.073-2.687,0.326-3.641,0.697c-0.986,0.383-1.823,0.896-2.657,1.73c-0.834,0.834-1.347,1.67-1.73,2.657c-0.371,0.954-0.624,2.045-0.697,3.641C17.017,27.415,17,27.926,17,32c0,4.074,0.017,4.585,0.09,6.184c0.073,1.597,0.326,2.687,0.697,3.641c0.383,0.986,0.896,1.823,1.73,2.657c0.834,0.834,1.67,1.347,2.657,1.73c0.954,0.371,2.045,0.624,3.641,0.697C27.415,46.983,27.926,47,32,47s4.585-0.017,6.184-0.09c1.597-0.073,2.687-0.326,3.641-0.697c0.986-0.383,1.823-0.896,2.657-1.73c0.834-0.834,1.347-1.67,1.73-2.657c0.371-0.954,0.624-2.045,0.697-3.641C46.983,36.585,47,36.074,47,32S46.983,27.415,46.91,25.816z M44.21,38.061c-0.067,1.462-0.311,2.257-0.516,2.785c-0.272,0.7-0.597,1.2-1.122,1.725c-0.525,0.525-1.025,0.85-1.725,1.122c-0.529,0.205-1.323,0.45-2.785,0.516c-1.581,0.072-2.056,0.087-6.061,0.087s-4.48-0.015-6.061-0.087c-1.462-0.067-2.257-0.311-2.785-0.516c-0.7-0.272-1.2-0.597-1.725-1.122c-0.525-0.525-0.85-1.025-1.122-1.725c-0.205-0.529-0.45-1.323-0.516-2.785c-0.072-1.582-0.087-2.056-0.087-6.061s0.015-4.48,0.087-6.061c0.067-1.462,0.311-2.257,0.516-2.785c0.272-0.7,0.597-1.2,1.122-1.725c0.525-0.525,1.025-0.85,1.725-1.122c0.529-0.205,1.323-0.45,2.785-0.516c1.582-0.072,2.056-0.087,6.061-0.087s4.48,0.015,6.061,0.087c1.462,0.067,2.257,0.311,2.785,0.516c0.7,0.272,1.2,0.597,1.725,1.122c0.525,0.525,0.85,1.025,1.122,1.725c0.205,0.529,0.45,1.323,0.516,2.785c0.072,1.582,0.087,2.056,0.087,6.061S44.282,36.48,44.21,38.061z M32,24.297c-4.254,0-7.703,3.449-7.703,7.703c0,4.254,3.449,7.703,7.703,7.703c4.254,0,7.703-3.449,7.703-7.703C39.703,27.746,36.254,24.297,32,24.297z M32,37c-2.761,0-5-2.239-5-5c0-2.761,2.239-5,5-5s5,2.239,5,5C37,34.761,34.761,37,32,37z M40.007,22.193c-0.994,0-1.8,0.806-1.8,1.8c0,0.994,0.806,1.8,1.8,1.8c0.994,0,1.8-0.806,1.8-1.8C41.807,22.999,41.001,22.193,40.007,22.193z"/></symbol><symbol id="instagram-unauth-mask" viewBox="0 0 64 64"><path d="M43.693,23.153c-0.272-0.7-0.597-1.2-1.122-1.725c-0.525-0.525-1.025-0.85-1.725-1.122c-0.529-0.205-1.323-0.45-2.785-0.517c-1.582-0.072-2.056-0.087-6.061-0.087s-4.48,0.015-6.061,0.087c-1.462,0.067-2.257,0.311-2.785,0.517c-0.7,0.272-1.2,0.597-1.725,1.122c-0.525,0.525-0.85,1.025-1.122,1.725c-0.205,0.529-0.45,1.323-0.516,2.785c-0.072,1.582-0.087,2.056-0.087,6.061s0.015,4.48,0.087,6.061c0.067,1.462,0.311,2.257,0.516,2.785c0.272,0.7,0.597,1.2,1.122,1.725s1.025,0.85,1.725,1.122c0.529,0.205,1.323,0.45,2.785,0.516c1.581,0.072,2.056,0.087,6.061,0.087s4.48-0.015,6.061-0.087c1.462-0.067,2.257-0.311,2.785-0.516c0.7-0.272,1.2-0.597,1.725-1.122s0.85-1.025,1.122-1.725c0.205-0.529,0.45-1.323,0.516-2.785c0.072-1.582,0.087-2.056,0.087-6.061s-0.015-4.48-0.087-6.061C44.143,24.476,43.899,23.682,43.693,23.153z M32,39.703c-4.254,0-7.703-3.449-7.703-7.703s3.449-7.703,7.703-7.703s7.703,3.449,7.703,7.703S36.254,39.703,32,39.703z M40.007,25.793c-0.994,0-1.8-0.806-1.8-1.8c0-0.994,0.806-1.8,1.8-1.8c0.994,0,1.8,0.806,1.8,1.8C41.807,24.987,41.001,25.793,40.007,25.793z M0,0v64h64V0H0z M46.91,38.184c-0.073,1.597-0.326,2.687-0.697,3.641c-0.383,0.986-0.896,1.823-1.73,2.657c-0.834,0.834-1.67,1.347-2.657,1.73c-0.954,0.371-2.044,0.624-3.641,0.697C36.585,46.983,36.074,47,32,47s-4.585-0.017-6.184-0.09c-1.597-0.073-2.687-0.326-3.641-0.697c-0.986-0.383-1.823-0.896-2.657-1.73c-0.834-0.834-1.347-1.67-1.73-2.657c-0.371-0.954-0.624-2.044-0.697-3.641C17.017,36.585,17,36.074,17,32c0-4.074,0.017-4.585,0.09-6.185c0.073-1.597,0.326-2.687,0.697-3.641c0.383-0.986,0.896-1.823,1.73-2.657c0.834-0.834,1.67-1.347,2.657-1.73c0.954-0.371,2.045-0.624,3.641-0.697C27.415,17.017,27.926,17,32,17s4.585,0.017,6.184,0.09c1.597,0.073,2.687,0.326,3.641,0.697c0.986,0.383,1.823,0.896,2.657,1.73c0.834,0.834,1.347,1.67,1.73,2.657c0.371,0.954,0.624,2.044,0.697,3.641C46.983,27.415,47,27.926,47,32C47,36.074,46.983,36.585,46.91,38.184z M32,27c-2.761,0-5,2.239-5,5s2.239,5,5,5s5-2.239,5-5S34.761,27,32,27z"/></symbol><symbol id="twitter-unauth-icon" viewBox="0 0 64 64"><path d="M48,22.1c-1.2,0.5-2.4,0.9-3.8,1c1.4-0.8,2.4-2.1,2.9-3.6c-1.3,0.8-2.7,1.3-4.2,1.6 C41.7,19.8,40,19,38.2,19c-3.6,0-6.6,2.9-6.6,6.6c0,0.5,0.1,1,0.2,1.5c-5.5-0.3-10.3-2.9-13.5-6.9c-0.6,1-0.9,2.1-0.9,3.3 c0,2.3,1.2,4.3,2.9,5.5c-1.1,0-2.1-0.3-3-0.8c0,0,0,0.1,0,0.1c0,3.2,2.3,5.8,5.3,6.4c-0.6,0.1-1.1,0.2-1.7,0.2c-0.4,0-0.8,0-1.2-0.1 c0.8,2.6,3.3,4.5,6.1,4.6c-2.2,1.8-5.1,2.8-8.2,2.8c-0.5,0-1.1,0-1.6-0.1c2.9,1.9,6.4,2.9,10.1,2.9c12.1,0,18.7-10,18.7-18.7 c0-0.3,0-0.6,0-0.8C46,24.5,47.1,23.4,48,22.1z"/></symbol><symbol id="twitter-unauth-mask" viewBox="0 0 64 64"><path d="M0,0v64h64V0H0z M44.7,25.5c0,0.3,0,0.6,0,0.8C44.7,35,38.1,45,26.1,45c-3.7,0-7.2-1.1-10.1-2.9 c0.5,0.1,1,0.1,1.6,0.1c3.1,0,5.9-1,8.2-2.8c-2.9-0.1-5.3-2-6.1-4.6c0.4,0.1,0.8,0.1,1.2,0.1c0.6,0,1.2-0.1,1.7-0.2 c-3-0.6-5.3-3.3-5.3-6.4c0,0,0-0.1,0-0.1c0.9,0.5,1.9,0.8,3,0.8c-1.8-1.2-2.9-3.2-2.9-5.5c0-1.2,0.3-2.3,0.9-3.3 c3.2,4,8.1,6.6,13.5,6.9c-0.1-0.5-0.2-1-0.2-1.5c0-3.6,2.9-6.6,6.6-6.6c1.9,0,3.6,0.8,4.8,2.1c1.5-0.3,2.9-0.8,4.2-1.6 c-0.5,1.5-1.5,2.8-2.9,3.6c1.3-0.2,2.6-0.5,3.8-1C47.1,23.4,46,24.5,44.7,25.5z"/></symbol></svg>

  </body>
</html>
