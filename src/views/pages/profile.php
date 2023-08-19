<?=$render('header')?>

<section class="feed">

<div class="row">
    <div class="box flex-1 border-top-flat">
        <div class="box-body">
            <div class="profile-cover" style="background-image: url('<?= $base ?>/images/profile-cover.jpg');"></div>
            <div class="profile-info m-20 row">
                <div class="profile-info-avatar">
                    <img src="<?= $base ?>/images/user.png" />
                </div>
                <div class="profile-info-name">
                    <div class="profile-info-name-text"><?= $fullName ?></div>
                    <div class="profile-info-location">Jequitinhonha</div>
                </div>
                <div class="profile-info-data row">
                    <div class="profile-info-item m-width-20">
                        <div class="profile-info-item-n">100</div>
                        <div class="profile-info-item-s">Seguidores</div>
                    </div>
                    <div class="profile-info-item m-width-20">
                        <div class="profile-info-item-n">0</div>
                        <div class="profile-info-item-s">Seguindo</div>
                    </div>
                    <div class="profile-info-item m-width-20">
                        <div class="profile-info-item-n">1</div>
                        <div class="profile-info-item-s">Posts</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">

    <div class="column side pr-5">
        
        <div class="box">
            <div class="box-body">
                
                <div class="user-info-mini">
                    <img src="<?= $base ?>/images/calendar.png" />
                    16/08/2006 (17 anos)
                </div>

                <div class="user-info-mini">
                    <img src="<?= $base ?>/images/pin.png" />
                    Minas Gerais, Brasil
                </div>

                <div class="user-info-mini">
                    <img src="<?= $base ?>/images/work.png" />
                    Tesla Inc.
                </div>

            </div>
        </div>

        <div class="box">
            <div class="box-header m-10">
                <div class="box-header-text">
                    Seguindo
                    <span>(363)</span>
                </div>
                <div class="box-header-buttons">
                    <a href="">ver todos</a>
                </div>
            </div>
            <div class="box-body friend-list">
                
                <div class="friend-icon">
                    <a href="">
                        <div class="friend-icon-avatar">
                            <img src="media/avatars/avatar.jpg" />
                        </div>
                        <div class="friend-icon-name">
                            Info 0122
                        </div>
                    </a>
                </div>

                <div class="friend-icon">
                    <a href="">
                        <div class="friend-icon-avatar">
                            <img src="media/avatars/avatar.jpg" />
                        </div>
                        <div class="friend-icon-name">
                            Info 0122
                        </div>
                    </a>
                </div>

                <div class="friend-icon">
                    <a href="">
                        <div class="friend-icon-avatar">
                            <img src="media/avatars/avatar.jpg" />
                        </div>
                        <div class="friend-icon-name">
                            Info 0122
                        </div>
                    </a>
                </div>

                <div class="friend-icon">
                    <a href="">
                        <div class="friend-icon-avatar">
                            <img src="media/avatars/avatar.jpg" />
                        </div>
                        <div class="friend-icon-name">
                            Info 0122
                        </div>
                    </a>
                </div>

                <div class="friend-icon">
                    <a href="">
                        <div class="friend-icon-avatar">
                            <img src="media/avatars/avatar.jpg" />
                        </div>
                        <div class="friend-icon-name">
                            Info 0122
                        </div>
                    </a>
                </div>

                <div class="friend-icon">
                    <a href="">
                        <div class="friend-icon-avatar">
                            <img src="media/avatars/avatar.jpg" />
                        </div>
                        <div class="friend-icon-name">
                            Info 0122
                        </div>
                    </a>
                </div>

                <div class="friend-icon">
                    <a href="">
                        <div class="friend-icon-avatar">
                            <img src="media/avatars/avatar.jpg" />
                        </div>
                        <div class="friend-icon-name">
                            Info 0122
                        </div>
                    </a>
                </div>

            </div>
        </div>

    </div>
    <div class="column pl-5">

        <div class="box">
            <div class="box-header m-10">
                <div class="box-header-text">
                    Fotos
                    <span>(12)</span>
                </div>
                <div class="box-header-buttons">
                    <a href="">ver todos</a>
                </div>
            </div>
            <div class="box-body row m-20">
                
                <div class="user-photo-item">
                    <a href="#modal-1" rel="modal:open">
                        <img src="media/uploads/1.jpg" />
                    </a>
                    <div id="modal-1" style="display:none">
                        <img src="media/uploads/1.jpg" />
                    </div>
                </div>

                <div class="user-photo-item">
                    <a href="#modal-2" rel="modal:open">
                        <img src="media/uploads/1.jpg" />
                    </a>
                    <div id="modal-2" style="display:none">
                        <img src="media/uploads/1.jpg" />
                    </div>
                </div>

                <div class="user-photo-item">
                    <a href="#modal-3" rel="modal:open">
                        <img src="media/uploads/1.jpg" />
                    </a>
                    <div id="modal-3" style="display:none">
                        <img src="media/uploads/1.jpg" />
                    </div>
                </div>

                <div class="user-photo-item">
                    <a href="#modal-4" rel="modal:open">
                        <img src="media/uploads/1.jpg" />
                    </a>
                    <div id="modal-4" style="display:none">
                        <img src="media/uploads/1.jpg" />
                    </div>
                </div>
                
            </div>
        </div>

        <div class="box feed-item">
                        <div class="box-body">
                            <div class="feed-item-head row mt-20 m-width-20">
                                <div class="feed-item-head-photo">
                                    <img src="<?=$base?>/images/user.png" />
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
                                        <img src="<?=$base?>/images/user.png" />
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
                                        <img src="<?=$base?>/images/user.png" />
                                    </div>
                                    <input type="text" class="fic-item-field" placeholder="Escreva um comentário" />
                                </div>

                            </div>
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

<?=$render('footer')?>