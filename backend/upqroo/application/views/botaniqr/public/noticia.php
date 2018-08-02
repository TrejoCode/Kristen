<div class="white-space-25"></div>
<div class="noticia flex justify">
    <div class="container">
        <div class="column">
            <div class="title">
                <h2><?php echo $titulo; ?></h2>
            </div>
            <div class="publish">
                <div class="row">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <p><?php echo $fecha; ?></p>
                </div>
            </div>
            <div class="notice-banner">
                <div class="container">
                    <div class="responsive-img">
                        <img src="<?php echo base_url().$imgUrl;?>" alt="">
                    </div>
                </div>
            </div>
            <div class="white-space-16"></div>
            <div class="notice-description">
                <div class="container">
                    <div class="column">
                       <?php echo $descripcion;?>
                    </div>
                </div>
            </div>
            <div class="white-space-8"></div>
            <div class="comments">
                <div class="container">
                    <div class="column">
                        <div class="fb-like" data-href="http://upqroobotaniqr.com/noticia/" data-layout="standard" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
                        <div class="fb-comments" width="100%" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="5"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
