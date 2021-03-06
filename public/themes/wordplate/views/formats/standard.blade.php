<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-xl-8">
            <article class="support">

                {!! the_content() !!}

                <h3 class="text-muted">Share this:</h3>
                <div class="d-flex flex-wrap" >
                    <social-sharing-icons
                        network="email"
                        icon="envelope"
                        class="share-network email"
                        url="{!! (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" !!}"
                        title="{!! $headline != '' ? $headline : the_title() !!}"
                        description="{!! wp_trim_words(strip_tags($post->post_content),20,'...') !!}"
                    ></social-sharing-icons>
                    <social-sharing-icons
                        network="facebook"
                        icon="facebook"
                        class="share-network facebook"
                        url="{!! (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" !!}"
                        title="{!! $headline != '' ? $headline : the_title() !!}"
                        description="{!! wp_trim_words(strip_tags($post->post_content), 20, '...') !!}"
                    ></social-sharing-icons>
                    <social-sharing-icons
                        network="linkedin"
                        icon="linkedin"
                        class="share-network linkedin"
                        url="{!! (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" !!}"
                        title="{!! $headline != '' ? $headline : the_title() !!}"
                    ></social-sharing-icons>
                    <social-sharing-icons
                        network="pinterest"
                        icon="pinterest"
                        class="share-network pinterest"
                        url="{!! (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" !!}"
                        title="{!! $headline != '' ? $headline : the_title() !!}"
                        media="{!! get_the_post_thumbnail_url() !!}"
                    ></social-sharing-icons>
                    <social-sharing-icons
                        network="twitter"
                        icon="twitter"
                        class="share-network twitter"
                        url="{!! (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" !!}"
                        title="{!! $headline != '' ? $headline : the_title() !!}"
                    ></social-sharing-icons>
                </div>
            </article>
        </div>
    </div>
</div>
