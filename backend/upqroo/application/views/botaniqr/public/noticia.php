<div class="noticia flex justify-center">
    <div class="container">
        <div class="column">
            <div class="white-space-32"></div>
            <div class="title">
                <h2><?php echo $nombre; ?></h2>
            </div>
            <div class="white-space-16"></div>
            <div class="publish">
                <div class="row align-center">
                    <i class="far fa-calendar-alt"></i>
                    <p> <?php echo $fecha; ?></p>
                </div>
            </div>
            <div class="white-space-32"></div>
            <div class="notice-banner">
                <div class="container">
                    <div class="responsive-img">
                        <img src="<?php echo $imagen; ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="white-space-32"></div>
            <div class="notice-description">
                <div class="container">
                    <div class="column">
                        <?php echo $descripcion; ?>
                    </div>
                </div>
            </div>
            <div class="white-space-32"></div>
            <div class="comments">
                <div class="container">
                    <div class="column">
                        <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
                        <div class="fb-comments" width="100%" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="5"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
