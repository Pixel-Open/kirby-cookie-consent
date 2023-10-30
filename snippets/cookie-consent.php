<?= js('media/plugins/pixelopen/kirby-cookie-consent/tarteaucitronjs/tarteaucitron.js') ?>

<?php if (option('use_cookie') ?? (option('pixelopen.kirby-cookie-consent.use_cookie') ?? site()->use_cookie())->toBool()): ?>

<script>
tarteaucitron.init({
    "privacyUrl": <?= '"' . (option('pixelopen.kirby-cookie-consent.privacy_url') ?? site()->privacy_url()) . '"' ?>, /* Privacy policy url */
    "bodyPosition": <?= '"' . (option('pixelopen.kirby-cookie-consent.body_position') ?? site()->body_position()) . '"' ?>, /* or top to bring it as first element for accessibility */

    "hashtag": <?= '"' . (option('pixelopen.kirby-cookie-consent.hashtag') ?? site()->hashtag()) . '"' ?>, /* Open the panel with this hashtag */
    "cookieName": <?= '"' . (option('pixelopen.kirby-cookie-consent.cookie_name') ?? site()->cookie_name()) . '"' ?>, /* Cookie name */

    "orientation": <?= '"' . (option('pixelopen.kirby-cookie-consent.banner_position') ?? site()->banner_position()) . '"' ?>, /* Banner position (top - bottom - middle - popup) */

    "groupServices": <?= option('pixelopen.kirby-cookie-consent.group_service') != null ? var_export(option('pixelopen.kirby-cookie-consent.group_service'), true) : site()->group_service() ?>, /* Group services by category */
    "serviceDefaultState": "wait", /* Default state (true - wait - false) */

    "showAlertSmall": <?= option('pixelopen.kirby-cookie-consent.show_alert_small') != null ? var_export(option('pixelopen.kirby-cookie-consent.show_alert_small'), true) : site()->show_alert_small() ?>, /* Show the small banner on bottom right */
    "cookieslist": <?= option('pixelopen.kirby-cookie-consent.cookie_list') != null ? var_export(option('pixelopen.kirby-cookie-consent.cookie_list'), true) : site()->cookie_list() ?>, /* Show the cookie list */
    
    "showIcon": <?= option('pixelopen.kirby-cookie-consent.show_icon') != null ? var_export(option('pixelopen.kirby-cookie-consent.show_icon'), true) : site()->show_icon() ?>, /* Show cookie icon to manage cookies */
    // "iconSrc": "", /* Optionnal: URL or base64 encoded image */
    "iconPosition": <?= '"' . (option('pixelopen.kirby-cookie-consent.icon_position') ?? site()->icon_position()) . '"' ?>, /* Position of the icon between BottomRight, BottomLeft, TopRight and TopLeft */

    "adblocker": <?= option('pixelopen.kirby-cookie-consent.adblocker') != null ? var_export(option('pixelopen.kirby-cookie-consent.adblocker'), true) : site()->adblocker() ?>, /* Show a Warning if an adblocker is detected */

    "DenyAllCta" : <?= option('pixelopen.kirby-cookie-consent.deny_all_cta') != null ? var_export(option('pixelopen.kirby-cookie-consent.deny_all_cta'), true) : site()->deny_all_cta() ?>, /* Show the deny all button */
    "AcceptAllCta" : <?= option('pixelopen.kirby-cookie-consent.accept_all_cta') != null ? var_export(option('pixelopen.kirby-cookie-consent.accept_all_cta'), true) : site()->accept_all_cta() ?>, /* Show the accept all button when highPrivacy on */
    "highPrivacy": <?= option('pixelopen.kirby-cookie-consent.disable_auto_consent') != null ? var_export(option('pixelopen.kirby-cookie-consent.disable_auto_consent'), true) : site()->disable_auto_consent() ?>, /* HIGHLY RECOMMANDED Disable auto consent */

    "handleBrowserDNTRequest": <?= option('pixelopen.kirby-cookie-consent.handle_dnt_request') != null ? var_export(option('pixelopen.kirby-cookie-consent.handle_dnt_request'), true) : site()->handle_dnt_request() ?>, /* If Do Not Track == 1, disallow all */

    "removeCredit": <?= option('pixelopen.kirby-cookie-consent.remove_credit') != null ? var_export(option('pixelopen.kirby-cookie-consent.remove_credit'), true) : site()->remove_credit() ?>, /* Remove credit link */
    "moreInfoLink": <?= option('pixelopen.kirby-cookie-consent.more_info_link') != null ? var_export(option('pixelopen.kirby-cookie-consent.more_info_link'), true) : site()->more_info_link() ?>, /* Show more info link */
    "closePopup": <?= option('pixelopen.kirby-cookie-consent.close_popup') != null ? var_export(option('pixelopen.kirby-cookie-consent.close_popup'), true) : site()->close_popup() ?>, /* Show more info link */
    "useExternalCss": false, /* If false, the tarteaucitron.css file will be loaded */
    "useExternalJs": false, /* If false, the tarteaucitron.services.js file will be loaded */

    //"cookieDomain": ".my-multisite-domaine.fr", /* Shared cookie for subdomain website */

    "readmoreLink": "", /* Change the default readmore link pointing to tarteaucitron.io */
    
    "mandatory": <?= option('pixelopen.kirby-cookie-consent.mandatory') != null ? var_export(option('pixelopen.kirby-cookie-consent.mandatory'), true) : site()->mandatory() ?>, /* Show a message about mandatory cookies */
    "mandatoryCta": <?= option('pixelopen.kirby-cookie-consent.mandatory_cta') != null ? var_export(option('pixelopen.kirby-cookie-consent.mandatory_cta'), true) : site()->mandatory_cta() ?>, /* Show the disabled accept button when mandatory on */
});
</script>

<?= snippet('cookie-services') ?>

<?php endif ?>