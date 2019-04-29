@if(env('APP_ENV') == 'production')
    <script>
        (function(e,t,n,i,s,a,c){e[n]=e[n]||function(){(e[n].q=e[n].q||[]).push(arguments)}
        ;a=t.createElement(i);c=t.getElementsByTagName(i)[0];a.async=true;a.src=s
        ;c.parentNode.insertBefore(a,c)
        })(window,document,"galite","script","https://cdn.jsdelivr.net/npm/ga-lite@2/dist/ga-lite.min.js");

        galite('create', 'UA-113707870-1', 'auto');
        galite('send', 'pageview');
    </script>
@endif
