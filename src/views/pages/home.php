<?=$render('header')?>
    <section class="container main">
        
        <section class="feed mt-10">
            
            <div class="row">
                <div class="column pr-5">
                    <div class="box feed-new">
                        <div class="box-body">
                            <div class="feed-new-editor m-10 row">
                                <div class="feed-new-avatar">
                                    <img src="<?=$base?>/images/users/22/profile-photo.jpg" />
                                </div>
                                <div class="feed-new-input-placeholder">O que você está pensando, Daniel?</div>
                                <div class="feed-new-input" contenteditable="true"></div>
                                <div class="feed-new-send">
                                    <img src="<?=$base?>/images/send.png" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box feed-item">
                        <div class="box-body">
                            <div class="feed-item-head row mt-20 m-width-20">
                                <div class="feed-item-head-photo">
                                    <img src="<?=$base?>/images/users/22/profile-photo.jpg" />
                                </div>
                                <div class="feed-item-head-info">
                                    <a href=""><span class="fidi-name">Daniel</span></a>
                                    <span class="fidi-action">fez um post</span>
                                    <br/>
                                    <span class="fidi-date">15/08/2023</span>
                                </div>
                                <div class="feed-item-head-btn">
                                    <img src="<?=$base?>/images/more.png" />
                                </div>
                            </div>
                            <div class="feed-item-body mt-10 m-width-20">
                                Hello World
                            </div>
                            <div class="feed-item-buttons row mt-20 m-width-20">
                                <div class="like-btn">56</div>
                                <div class="msg-btn">2</div>
                            </div>
                            <div class="feed-item-comments">
                                
                                <div class="fic-item row m-height-10 m-width-20">
                                    <div class="fic-item-photo">
                                        <img src="<?=$base?>/images/users/22/profile-photo.jpg" />
                                    </div>
                                    <div class="fic-item-info">
                                        <a href="">Daniel</a>
                                        Comentando no meu próprio post
                                    </div>
                                </div>

                                <div class="fic-item row m-height-10 m-width-20">
                                    <div class="fic-item-photo">
                                        <a href=""><img src="<?=$base?>/images/user.png" /></a>
                                    </div>
                                    <div class="fic-item-info">
                                        <a href="">João</a>
                                        Muito legal, parabéns!
                                    </div>
                                </div>

                                <div class="fic-answer row m-height-10 m-width-20">
                                    <div class="fic-item-photo">
                                        <img src="<?=$base?>/images/users/22/profile-photo.jpg" />
                                    </div>
                                    <input type="text" class="fic-item-field" placeholder="Escreva um comentário" />
                                </div>

                            </div>
                        </div>
                    </div>

                    

                </div>
                <div class="column side pl-5">
                    <div class="box banners">
                        <div class="box-header">
                            <div class="box-header-text">Patrocinios</div>
                            <div class="box-header-buttons">
                                
                            </div>
                        </div>
                        <div class="box-body">
                            <a href=""><img src="https://alunos.b7web.com.br/media/courses/php.jpg" /></a>
                            <a href=""><img src="https://alunos.b7web.com.br/media/courses/laravel.jpg" /></a>
                        </div>
                    </div>
                    
                </div>
            </div>

        </section>
    </section>
    <div class="modal">
        <div class="modal-inner">
            <a rel="modal:close">&times;</a>
            <div class="modal-content"></div>
        </div>
    </div>
    <script type="text/javascript" src="<?=$base?>/js/pages.js"></script>
    <script type="text/javascript" src="<?=$base?>/js/vanillaModal.js"></script>
</body>
</html>