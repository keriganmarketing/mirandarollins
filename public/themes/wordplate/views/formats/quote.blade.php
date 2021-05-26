
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-xl-8">
            <article class="support">

                <blockquote>{{ the_content() }}</blockquote>
                <small class="text-muted">&mdash; {{ $headline != '' ? $headline : the_title() }}</small>

            </article>
        </div>
    </div>
</div>
