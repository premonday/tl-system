<hr class="m-0 p-0">
<div class="container pt-0">
    <div class="row flex-row">
        <div class="col py-4 my-3">
            {{ $content }}
        </div>
        <div class="sidebar-300 mr-3">
            {{ isset($sidebar) ? $sidebar : '' }}
        </div>
    </div>
</div>

