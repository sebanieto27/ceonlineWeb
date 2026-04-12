@php
    $tracking = \App\Models\SiteSetting::getGroup('tracking');
@endphp

{{-- Google Tag Manager (noscript) --}}
@if(!empty($tracking['gtm_container_id']))
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id={{ $tracking['gtm_container_id'] }}" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
@endif

{{-- Custom body scripts --}}
@if(!empty($tracking['custom_body_scripts']))
{!! $tracking['custom_body_scripts'] !!}
@endif
