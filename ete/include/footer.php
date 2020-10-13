<style>
    #footer {
        bottom: 0;
        background-color: #4C4C4C;
        min-height: 320px;
        font-size: 18px;
        font-weight: 400;
        padding: 1%;
        color: rgb(177, 177, 177);
    }

    #foot-text {
        padding-top: 2%;
        margin: auto 0;
    }

    .c-nav {
        list-style: none;
        line-height: 1.8em;
        padding: 0;
        padding-top: 1%;
    }

    .c-links {
        width: 100%;
        justify-content: space-around;
        padding-left: 2%;
        padding-top: 2%;
    }

    .c-link {
        color: #EEE;
    }

    .c-link:hover {
        color: #ff5c00;
        text-decoration: none;
    }

    .fonta {
        padding: 1% 1% 0 1%;
        color:#ff5c00;
        margin-left: 2%;
    }

    .fonta:hover {
        color: #EEE;
    }

    .c-contact{
        width: 100%;
        text-align: center;
    }

    .lazyloaded{
        max-height: 8em;
    }

    #foot-title{
        margin: auto 0;
    }
    
  @media only screen and (max-width: 992px) {
  #foot-text{ 
    display: none;
  }

  .c-nav {
        text-align: center;
        margin: 8% 0 8% 0;
        font-size: 14px;
        line-height: 2em;
    }

    .c-contact{
        font-size: 14px;
    }
  }
  @media only screen and (max-width: 767px) {
  #foot-title{
        display: none;
    }
}
</style>


<?php
    require_once '../function/co.php';
    require_once '../function/select_apparence.php';
    ?>

<div class="container-fluid" id="footer">
    <div class="row mx-auto  justify-content-center align-text-center mt-2 mb-2">
        <div class="col-md-2"  id="foot-title">
            <div class="c-content-title-1"> <img
                    src="https://www.ete-indien-editions.fr/wp-content/uploads/logo-ete-indien-editions.png"
                    data-lazy-src="https://www.ete-indien-editions.fr/wp-content/uploads/logo-ete-indien-editions.png"
                    class="lazyloaded" data-was-processed="true"><noscript><img
                        src="https://www.ete-indien-editions.fr/wp-content/uploads/logo-ete-indien-editions.png" /></noscript>
            </div>
        </div>
        <div class="col-md-3" id="foot-text">
            <p class="c-about"><?=$app['text_footer']?></p>
        </div>
        <div class="col-md-7">
            <div class="row mx-auto mt-2">
                <div class="c-links">
                    <ul id="menu-menu-du-pied-de-page" class="c-nav">
                        <div class="row mx-auto">
                            <div class="col-md-6">
                                <li id="menu-item-285"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-285"><a
                                        href="<?=$app['lien_1']?>"
                                        class="c-link"><?=$app['titre_lien_1']?></a>
                                </li>
                                <li id="menu-item-302"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-302"><a
                                        href="<?=$app['lien_3']?>"
                                        class="c-link"><?=$app['titre_lien_3']?></a></li>
                                <li id="menu-item-255"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-255"><a
                                        href="<?=$app['lien_5']?>" class="c-link"><?=$app['titre_lien_5']?></a>
                                </li>
                                <li id="menu-item"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-255"><a
                                        href="<?=$app['lien_7']?>" class="c-link"><?=$app['titre_lien_7']?></a>
                                </li>
                            </div>
                            <div class="col-md-6">
                                <li class="fon" id="menu-item-284"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-284">
                                    <a href="<?=$app['lien_2']?>"
                                        class="c-link"><?=$app['titre_lien_1']?></a></li>
                                <li class="fon" id="menu-item-258"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-258"><a
                                        href="<?=$app['lien_4']?>"
                                        class="c-link"><?=$app['titre_lien_4']?></a></li>
                                        <li id="menu-item-257"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-257"><a
                                        href="<?=$app['lien_6']?>"
                                        class="c-link"><?=$app['titre_lien_6']?></a></li>
                                        <li id="menu-item"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-255"><a
                                        href="<?=$app['lien_8']?>" class="c-link"><?=$app['titre_lien_8']?></a>
                                </li>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row mx-auto">
        <p class="c-contact"><?=$app['info_footer']?></p>
    </div>
    <div class="row mx-auto justify-content-center align-text-center">
        <a href="https://www.youtube.com/channel/UCEpjfMrcnR8dRO_CBYTccHA" class="fonta"> <i class="fab fa-youtube fa-2x" ></i>
        </a>
        <a href="https://www.facebook.com/eteindieneditions/" class="fonta"> <i class="fab fa-facebook fa-2x"></i>
        </a>
        <a href="https://twitter.com/editionsete" class="fonta"> <i class="fab fa-twitter fa-2x"></i> </a>
        </ul>
    </div>
</div>
