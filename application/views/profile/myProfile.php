<!-- ======================== SEARCH START ======================== -->

<div id="search" class="search">

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <div class="search-wrapper">

                    <form id="search-form" action="" method="" class="search-form">

                        <div class="row">

                            <div class="col-xs-12 col-lg-3 search-field">

                                <!-- <span class="icon-search"><img src="/images/search.png" alt=""></span> -->

                                <input type="text" class="form-control" id="" name="" value="" placeholder="Enter search options">

                            </div>

                            <div class="col-xs-12 col-lg-3 slider-age">

                                <label for="">Age:</label>

                                <div id="slider-range"></div>

                            </div>

                            <div class="col-xs-12 col-lg-4 checkboxes text-center">

                                <div class="checkbox">

                                    <input type="checkbox" name="" value="">

                                    <label for="">New</label>

                                </div>

                                <div class="checkbox">

                                    <input type="checkbox" name="" value="">

                                    <label for="">Popular</label>

                                </div>

                                <div class="checkbox">

                                    <input type="checkbox" name="" value="">

                                    <label for="">Online</label>

                                </div>

                                <a class="more-opt" ref="#">More option <img src="/images/arrow-down.png" alt=""></a>

                            </div>

                            <div class="col-xs-6 col-xs-offset-3 col-lg-2 col-lg-offset-0 search-submit">

                                <button type="submit" class="btn btn-purple">search</button>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- ======================== SEARCH END ======================== -->


<div class="profile-wrapper">

    <div class="container">

        <div class="row">

            <!-- ======================== SIDEBAR MENU START ======================== -->

            <div id="profile-sidebar" class="profile-sidebar">

                <div class="col-lg-2">

                    <div class="sidebar-wrapper">

                        <div class="sidebar-title">

                            my menu

                        </div>

                        <div class="sidebar-menu">

                            <ul>

                                <li id="l-ms">
                                    <a href="#">
													<span class="left-fixer">
														<span class="left-icon fl_l"></span>
														<span class="left-label inl_bl">messages</span>
														<span class="right-count">(5)</span>
													</span>
                                    </a>
                                </li>

                                <li id="l-ch">
                                    <a href="#">
													<span class="left-fixer">
														<span class="left-icon fl_l"></span>
														<span class="left-label inl_bl">chats</span>
														<span class="right-count">(11)</span>
													</span>
                                    </a>
                                </li>

                                <li id="l-cnn">
                                    <a href="#">
													<span class="left-fixer">
														<span class="left-icon fl_l"></span>
														<span class="left-label inl_bl">connections</span>
														<span class="right-count">(2)</span>
													</span>
                                    </a>
                                </li>

                                <li id="l-vie">
                                    <a href="#">
													<span class="left-fixer">
														<span class="left-icon fl_l"></span>
														<span class="left-label inl_bl">viewed</span>
														<span class="right-count">(1)</span>
													</span>
                                    </a>
                                </li>

                                <li id="l-lik">
                                    <a href="#">
													<span class="left-fixer">
														<span class="left-icon fl_l"></span>
														<span class="left-label inl_bl">liked</span>
														<span class="right-count">(1)</span>
													</span>
                                    </a>
                                </li>

                                <li id="l-fav">
                                    <a href="#">
													<span class="left-fixer">
														<span class="left-icon fl_l"></span>
														<span class="left-label inl_bl">favorite</span>
														<span class="right-count">(1)</span>
													</span>
                                    </a>
                                </li>

                                <li id="l-cnt">
                                    <a href="#">
													<span class="left-fixer">
														<span class="left-icon fl_l"></span>
														<span class="left-label inl_bl">contacts</span>
														<span class="right-count">(1)</span>
													</span>
                                    </a>
                                </li>

                                <li id="l-blk">
                                    <a href="#">
													<span class="left-fixer">
														<span class="left-icon fl_l"></span>
														<span class="left-label inl_bl">blocked</span>
														<span class="right-count">(1)</span>
													</span>
                                    </a>
                                </li>

                                <li id="l-pm">
                                    <a href="#">
													<span class="left-fixer">
														<span class="left-icon fl_l"></span>
														<span class="left-label inl_bl">possible match</span>
														<span class="right-count">(1)</span>
													</span>
                                    </a>
                                </li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

            <!-- ======================== SIDEBAR MENU END ======================== -->

            <!-- ======================== PROFILE DATA START ======================== -->

            <div class="col-lg-10">

                <!-- ======================== BREADCRUMBS START ======================== -->

                <section id="breadcrumbs" class="breadcrumbs-section">

                    <div class="row">

                        <div class="col-lg-12">

                            <a class="go-back" href="#">Go back</a>

                            <ul class="breadcrumbs">
                                <li><span>Home</span></li>
                                <li><span>Profiles</span></li>
                                <li><span>Kate (id12345)</span></li>
                            </ul>

                        </div>

                    </div>

                </section>

                <!-- ======================== BREADCRUMBS END ======================== -->

                <section id="profile" class="profile">

                    <div class="row">

                        <div class="col-lg-5">

                            <!-- ======================== PROFILE AVATAR START ======================== -->

                            <div class="profile-avatar-wrapper">

                                <div class="profile-avatar">

                                    <a href="<?=$data['userInfo']['avatar']['img'] ?>" class="big"><img class="object-fit-cover" src="<?=$data['userInfo']['avatar']['img'] ?>" alt=""></a>


                                </div>

                                <!-- ======================== PROFILE PHOTOS START ======================== -->

                                <div class="profile-photos">

                                    <ul class="popup-gallery">
                                        <?php
                                            foreach ($data['userInfo']['images'] as $photo){
                                        ?>
                                                <li>
                                                    <a href="<?= $photo['img'] ?>" class="big">
                                                        <img class="object-fit-cover" src="<?= $photo['img'] ?>" alt="">
                                                    </a>
                                                </li>
                                        <?php } ?>

                                    </ul>

                                </div>

                                <!-- ======================== PROFILE PHOTOS END ======================== -->

                            </div>

                            <!-- ======================== PROFILE AVATAR END ======================== -->

                            <!-- ======================== PROFILE FUNCTIONS START ======================== -->



                            <!-- ======================== PROFILE FUNCTIONS END ======================== -->

                            <!-- ======================== PROFILE VIDEO START ======================== -->

                            <div class="profile-video">

                                <div class="profile-video-wrapper">

                                    <iframe width="100%" height="192" src="<?=$data['userInfo']['profile']['video'] ?>" frameborder="0" allowfullscreen></iframe>

                                </div>

                            </div>

                            <!-- ======================== PROFILE VIDEO END ======================== -->

                        </div>


                        <!-- ======================== PROFILE DATA START ======================== -->

                        <div class="col-lg-7">

                            <div class="profile-data">

                                <div class="profile-data-name">

                                    <?=$data['userInfo']['profile']['mask_name'] ?>, <?php $birth = date('Y', $data['userInfo']['profile']['birth']); $now = date('Y', time()); echo ($now - $birth); ?> <span class="is-online">(online)</span>

                                </div>

                                <div class="profile-data-location">

                                    <ul>
                                        <li id="l-ky">
														<span class="left-fixer">
															<span class="left-icon fl_l"></span>
															<span class="left-label inl_bl"><?=$data['userInfo']['profile']['locale'] ?>, Ukraine</span>
														</span>
                                        </li>
                                        <li id="l-bih">
														<span class="left-fixer">
															<span class="left-icon fl_l"></span>
															<span class="left-label inl_bl"><?= date('m-d', $data['userInfo']['profile']['birth']) ?> (<?=$data['userInfo']['profile']['zadiak']?>)</span>
														</span>
                                        </li>
                                        <li id="l-sgl">
														<span class="left-fixer">
															<span class="left-icon fl_l"></span>
															<span class="left-label inl_bl"><?= $data['userInfo']['profile']['family']; ?></span>
														</span>
                                        </li>
                                    </ul>

                                </div>

                                <!-- Personal Data Block 1 -->

                                <div class="personal-data">

                                    <div class="personal-info">

                                        <div class="label">

                                            Children:

                                        </div>

                                        <div class="labeled">

                                            <?php
                                            if(empty($data['userInfo']['chlidrens']))
                                            {
                                                echo 'No';
                                            }
                                            else
                                            {
                                                foreach ($data['userInfo']['chlidrens'] as $child)
                                                {
                                                    echo $child['child_gender'].'('.$child['age'].')'.', ';
                                                }

                                            }
                                            ?>

                                        </div>

                                    </div>

                                    <div class="personal-info">

                                        <div class="label">

                                            More Children:

                                        </div>

                                        <div class="labeled">

                                            Yes

                                        </div>

                                    </div>

                                    <div class="personal-info">

                                        <div class="label">

                                            Religion:

                                        </div>

                                        <div class="labeled">

                                            <?= $data['userInfo']['profile']['religion'] ?>

                                        </div>

                                    </div>

                                    <div class="personal-info">

                                        <div class="label">

                                            Education:

                                        </div>

                                        <div class="labeled">

                                            <?= $data['userInfo']['profile']['education'] ?>


                                        </div>

                                    </div>

                                    <div class="personal-info">

                                        <div class="label">

                                            Occupation:

                                        </div>

                                        <div class="labeled">

                                            <?= $data['userInfo']['profile']['profession'] ?>

                                        </div>

                                    </div>

                                    <div class="personal-info">

                                        <div class="label">

                                            English level:

                                        </div>

                                        <div class="labeled">

                                            <?= $data['userInfo']['profile']['english_skill_level'] ?>


                                        </div>

                                    </div>

                                    <div class="personal-info">

                                        <div class="label">

                                            Driver license:

                                        </div>

                                        <div class="labeled">

                                            <?= $data['userInfo']['profile']['driver_license'] ?>


                                        </div>

                                    </div>

                                </div>

                                <!-- Personal Data Block 2 -->

                                <div class="personal-data">

                                    <div class="personal-info">

                                        <div class="label">

                                            Eye color:

                                        </div>

                                        <div class="labeled">

                                            <?= $data['userInfo']['profile']['eye_color'] ?>


                                        </div>

                                    </div>

                                    <div class="personal-info">

                                        <div class="label">

                                            Hair color:

                                        </div>

                                        <div class="labeled">

                                            <?= $data['userInfo']['profile']['hair_colour'] ?>


                                        </div>

                                    </div>

                                    <div class="personal-info">

                                        <div class="label">

                                            Heigh:

                                        </div>

                                        <div class="labeled">

                                            <?= $data['userInfo']['profile']['height'] ?>

                                        </div>

                                    </div>

                                    <div class="personal-info">

                                        <div class="label">

                                            Weigh:

                                        </div>

                                        <div class="labeled">

                                            <?= $data['userInfo']['profile']['weight'] ?>


                                        </div>

                                    </div>

                                    <div class="personal-info">

                                        <div class="label">

                                            Smoking:

                                        </div>

                                        <div class="labeled">

                                            <?= $data['userInfo']['profile']['smoker'] ?>


                                        </div>

                                    </div>

                                    <div class="personal-info">

                                        <div class="label">

                                            Drinking:

                                        </div>

                                        <div class="labeled">

                                            <?= $data['userInfo']['profile']['alcohol'] ?>


                                        </div>

                                    </div>

                                </div>

                                <!-- Personal Data Block 3 -->

                                <div class="personal-data">

                                    <div class="personal-info">

                                        <div class="label">

                                            Favorite food:

                                        </div>

                                        <div class="labeled">

                                            <?= $data['userInfo']['profile']['favorite_food'] ?>


                                        </div>

                                    </div>

                                    <div class="personal-info">

                                        <div class="label">

                                            Favorite music:

                                        </div>

                                        <div class="labeled">

                                            <?= $data['userInfo']['profile']['favorite_music'] ?>


                                        </div>

                                    </div>

                                    <div class="personal-info">

                                        <div class="label">

                                            Favorite movie:

                                        </div>

                                        <div class="labeled">

                                            <?= $data['userInfo']['profile']['favorite_movie'] ?>

                                        </div>

                                    </div>

                                    <div class="personal-info">

                                        <div class="label">

                                            Favorite city:

                                        </div>

                                        <div class="labeled">

                                            <?= $data['userInfo']['profile']['favorite_city'] ?>


                                        </div>

                                    </div>

                                    <div class="personal-info">

                                        <div class="label">

                                            Favorite gift:

                                        </div>

                                        <div class="labeled">

                                            <?= $data['userInfo']['profile']['favorite_gifts'] ?>


                                        </div>

                                    </div>

                                </div>

                                <!-- Personal Data Block 4 -->

                                <div class="personal-data">

                                    <div class="personal-info">

                                        <div class="label">

                                            About me:

                                        </div>

                                        <div class="labeled">

                                            <?= $data['userInfo']['profile']['about'] ?>


                                        </div>

                                    </div>

                                    <div class="personal-info">

                                        <div class="label">

                                            My hobbies:

                                        </div>

                                        <div class="labeled">

                                            <?= $data['userInfo']['profile']['hobbie'] ?>

                                        </div>

                                    </div>

                                    <div class="personal-info">

                                        <div class="label">

                                            My dream:

                                        </div>

                                        <div class="labeled">

                                            <?= $data['userInfo']['profile']['dreams'] ?>

                                        </div>

                                    </div>

                                    <div class="personal-info">

                                        <div class="label">

                                            About my partner:

                                        </div>

                                        <div class="labeled">

                                            <?= $data['userInfo']['profile']['ideal_mate'] ?>

                                        </div>

                                    </div>

                                    <div class="personal-info">

                                        <div class="label">

                                            Age specification:

                                        </div>

                                        <div class="labeled">

                                            <?= $data['userInfo']['profile']['pref_min_age'] ?>
                                            -
                                            <?= $data['userInfo']['profile']['pref_max_age'] ?>
                                            years

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <!-- ======================== PROFILE DATA END ======================== -->

                    </div>

                </section>

            </div>

            <!-- ======================== PROFILE DATA END ======================== -->

        </div>

    </div>

</div>

<!-- ========================PROFILE END ======================== -->