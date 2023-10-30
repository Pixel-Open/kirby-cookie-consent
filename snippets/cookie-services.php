<script>

<?php if (option('pixelopen.kirby-cookie-consent.google_tag_manager') || site()->google_tag_manager()->isNotEmpty()): ?>
    tarteaucitron.user.googletagmanagerId = <?= "'" . (option('pixelopen.kirby-cookie-consent.google_tag_manager') ?? site()->google_tag_manager()) . "'" ?>;
    (tarteaucitron.job = tarteaucitron.job || []).push('googletagmanager');
<?php endif ?>

<?php if (option('pixelopen.kirby-cookie-consent.google_analytics_ga') || site()->google_analytics_ga()->isNotEmpty()): ?>
    tarteaucitron.user.gajsUa = <?= "'" . (option('pixelopen.kirby-cookie-consent.google_analytics_ga') ?? site()->google_analytics_ga()) . "'" ?>;
    tarteaucitron.user.gajsMore = function () { /* add here your optionnal _ga.push() */ };
    (tarteaucitron.job = tarteaucitron.job || []).push('gajs');
<?php endif ?>

<?php if (option('pixelopen.kirby-cookie-consent.google_analytics_gtag') || site()->google_analytics_gtag()->isNotEmpty()): ?>
    tarteaucitron.user.multiplegtagUa = <?= "['" . str_replace(" ", "', '", (option('pixelopen.kirby-cookie-consent.google_analytics_gtag') ?? site()->google_analytics_gtag())) . "']" ?>;
    (tarteaucitron.job = tarteaucitron.job || []).push('multiplegtag');
<?php endif ?>

<?php if (option('pixelopen.kirby-cookie-consent.google_analytics_universal') || site()->google_analytics_universal()->isNotEmpty()): ?>
    tarteaucitron.user.analyticsUa = <?= "'" . (option('pixelopen.kirby-cookie-consent.google_analytics_universal') ?? site()->google_analytics_universal()) . "'" ?>;
    tarteaucitron.user.analyticsMore = function () { /* optionnal ga.push() */ };
    tarteaucitron.user.analyticsUaCreate = { /* optionnal create configuration */ };
    tarteaucitron.user.analyticsAnonymizeIp = true;
    tarteaucitron.user.analyticsPageView = { /* optionnal pageview configuration */ };
    tarteaucitron.user.analyticsMore = function () { /* optionnal ga.push() */ };
    (tarteaucitron.job = tarteaucitron.job || []).push('analytics');
<?php endif ?>

<?php if (option('pixelopen.kirby-cookie-consent.pixel_facebook') || site()->pixel_facebook()->isNotEmpty()): ?>
    tarteaucitron.user.facebookpixelId = <?= "'" . (option('pixelopen.kirby-cookie-consent.pixel_facebook') ?? site()->pixel_facebook()) . "'" ?>;
    tarteaucitron.user.facebookpixelMore = function () { /* add here your optionnal facebook pixel function */ };
    (tarteaucitron.job = tarteaucitron.job || []).push('facebookpixel');
<?php endif ?>

/* ------- Add your own services here ------- */



/* ------------------------------------------ */

</script>