@php
$url = Request::url();
@endphp

<div>
    <div class="social-links">
        <a class="social-button messenger mr-2" onClick="window.open('fb-messenger://share?link=' + encodeURIComponent(link) + '&app_id=' + encodeURIComponent(app_id));" id="">@include('global.icons.social.messenger')</a>
        <a class="social-button facebook mr-2" onClick="window.open('https://www.facebook.com/sharer/sharer.php?u={{$url}}', '_blank', 'width=500, height=300');" id="">@include('global.icons.social.facebook')</a>
            <a class="social-button twitter mr-2" onClick="window.open('https://twitter.com/intent/tweet?text={{$description}}&amp;url={{$url}}', '_blank', 'width=500, height=300');" id="">@include('global.icons.social.twitter')</a>
            <a class="social-button linkedin mr-2" onClick="window.open('http://www.linkedin.com/shareArticle?mini=true&amp;url={{$url}}&amp;title={{$title}}&amp;summary={{$description}}', '_blank', 'width=500, height=300');" id="">@include('global.icons.social.linkedin')</a>
            <a class="social-button whatsapp" onClick="window.open('https://wa.me/?text={{$url}}', '_blank', 'width=500, height=300');" id="">@include('global.icons.social.whatsapp')</a>
    </div>
</div>
