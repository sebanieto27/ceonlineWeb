@php
    $tracking = \App\Models\SiteSetting::getGroup('tracking');
@endphp

{{-- Google Tag Manager — carga diferida hasta primera interacción del usuario --}}
{{-- Esto evita que GTM bloquee el critical path y mejora el score de Lighthouse --}}
@if(!empty($tracking['gtm_container_id']))
<script>
(function() {
    var gtmId = '{{ $tracking['gtm_container_id'] }}';
    var gtmLoaded = false;

    function loadGTM() {
        if (gtmLoaded) return;
        gtmLoaded = true;

        // Inicializar dataLayer antes de cargar GTM
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' });

        var s = document.createElement('script');
        s.async = true;
        s.src = 'https://www.googletagmanager.com/gtm.js?id=' + gtmId;
        document.head.appendChild(s);
    }

    // Cargar en la primera interacción real del usuario
    var events = ['scroll', 'click', 'keydown', 'touchstart', 'mousemove'];
    events.forEach(function(evt) {
        window.addEventListener(evt, loadGTM, { once: true, passive: true });
    });

    // Fallback: cargar a los 5 segundos si no hubo interacción (ej: lectores de pantalla)
    setTimeout(loadGTM, 5000);
})();
</script>
@endif

{{-- Google Analytics 4 (solo si no hay GTM) --}}
@if(!empty($tracking['ga4_measurement_id']) && empty($tracking['gtm_container_id']))
<script async src="https://www.googletagmanager.com/gtag/js?id={{ $tracking['ga4_measurement_id'] }}"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', '{{ $tracking['ga4_measurement_id'] }}');
</script>
@endif

{{-- Google Ads (solo si no hay GTM) --}}
@if(!empty($tracking['google_ads_id']) && empty($tracking['gtm_container_id']))
<script async src="https://www.googletagmanager.com/gtag/js?id={{ $tracking['google_ads_id'] }}"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', '{{ $tracking['google_ads_id'] }}');
</script>
@endif

{{-- Meta Pixel --}}
@if(!empty($tracking['meta_pixel_id']))
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '{{ $tracking['meta_pixel_id'] }}');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id={{ $tracking['meta_pixel_id'] }}&ev=PageView&noscript=1"/></noscript>
@endif

{{-- LinkedIn Insight Tag --}}
@if(!empty($tracking['linkedin_partner_id']))
<script type="text/javascript">
_linkedin_partner_id = "{{ $tracking['linkedin_partner_id'] }}";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script>
<script type="text/javascript">
(function(l) {
if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])};
window.lintrk.q=[]}
var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})(window.lintrk);
</script>
<noscript><img height="1" width="1" style="display:none" alt="" src="https://px.ads.linkedin.com/collect/?pid={{ $tracking['linkedin_partner_id'] }}&fmt=gif" /></noscript>
@endif

{{-- Custom head scripts --}}
@if(!empty($tracking['custom_head_scripts']))
{!! $tracking['custom_head_scripts'] !!}
@endif
