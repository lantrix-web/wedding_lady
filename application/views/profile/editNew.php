<?php print_r($_FILES); ?>
<main>
    <!-- ======================== SEARCH START ======================== -->

    <div id="search" class="search">

        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <div class="search-wrapper">

                        <form  id="search-form" action="" method="" class="search-form" >

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

    <!-- ======================== PROFILE START ======================== -->

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

                <div id="profile-content" class="profile-content">

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

                        <section id="profile" class="profile-data-edit">

                            <!-- ======================== EDIT PROFILE DATA START ======================== -->
                            <form enctype="multipart/form-data" action="" method="post" class="pedit-form" >

                            <div class="profile-data-edit-wrapper">

                                <div class="row">

                                    <div class="col-lg-12">

                                        <div class="pd-edit-title">

                                            Редактирование профиля

                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-lg-4">

                                        <div class="profile-main-avatar" style="background-image: url(<?=$data['userInfo']['avatar']['img'] ?>);">

                                        </div>

                                    </div>

                                    <div class="col-lg-8">

                                        <div class="profile-photos-list">

                                            <div class="pp-list-wrapper">

                                                <div id="pp-container-photos" class="pp-container-photos">


                                                    <?php
                                                        foreach($data['userInfo']['images'] as $image)
                                                        { ?>
                                                            <div id="id_<?=$image['photo_id'] ?>" class="photos-row" style="background-image: url(<?=$image['img'] ?>); width: 90px; height: 80px;">

                                                                <a href="<?=$image['img'] ?>" photo-id="id_<?=$image['photo_id'] ?>" class="big" id=""></a>
                                                                <span class="del-icon pedit-del-icon del_img" data-id="<?=$data['userInfo']['profile']['id'];?>"  style="position: absolute; top: 2px; left: 2px; background-color: rgba(0, 0, 0, 0.62)"></span>
                                                                <span class="main_img" style="position: absolute; top: 55px; left: 2px; background-color: rgba(0, 0, 0, 0.62); color: antiquewhite;">main</span>
                                                            </div>

                                                        <?php }
                                                    ?>

                                                    <!-- INPUT ADD IMAGES -->

                                                    <div id="" class="photos-row file-wrap">
                                                        <input type="hidden" name="MAX_FILE_SIZE" value="3000000">
                                                        <input  name="image[]" type="file" multiple class="ep-input">

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-lg-12">

                                        <legend class="edit-required-info">

                                            Заполните информацию ниже, чтобы обновить профиль

                                            <span class="required-field-description">* обязательное поле для заполнения</span>

                                        </legend>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-lg-12">

                                        <div class="pedit-form-wrapper">

                                            <!-- EDIT FORM START -->


                                                <!-- Основная информация -->

                                                <div class="accordion-item">

                                                    <div class="accordion">

                                                        Основная информаця

                                                    </div>

                                                    <div class="accordion-details accordion-edit-details">

                                                        <div class="pedit-content">

                                                            <div class="pedit-form-group clear_fix">

                                                                <div class="pedit-label">

                                                                    <label class="required" for="">Имя на сайте:</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <input type="text" name="mask_name" value="<?=$data['userInfo']['profile']['mask_name'] ?>" id="" class="ep-input" required>

                                                                </div>

                                                            </div>

                                                            <div class="pedit-form-group clear_fix">

                                                                <div class="pedit-label">

                                                                    <label class="required"  for="">Дата рождения:</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <div class="pedit-bday fl_l">

                                                                        <div class="select-container">

                                                                            <?php
                                                                            $monthOptions = '<option value="0" id="month_option"></option>';
                                                                            $dayOptions = '<option value="0" id="day_option"></option>';
                                                                            $yearOptions = '<option value="0" id="year_option"></option>';

                                                                            for($month=1; $month<=12; $month++)
                                                                            {
                                                                                $monthName = date("M", mktime(0, 0, 0, $month));
                                                                                if($month == date("m",$data['userInfo']['profile']['birth']))
                                                                                {
                                                                                    $monthOptions .= "<option value=\"{$month}\" selected>{$monthName}</option>\n";

                                                                                }
                                                                                else{
                                                                                    $monthOptions .= "<option value=\"{$month}\">{$monthName}</option>\n";

                                                                                }
                                                                            }
                                                                            for($day=1; $day<=31; $day++) {
                                                                                if ($day == date("d", $data['userInfo']['profile']['birth']))
                                                                                {
                                                                                    $dayOptions .= "<option value=\"{$day}\" selected>{$day}</option>\n";

                                                                                }
                                                                                else
                                                                                {
                                                                                    $dayOptions .= "<option value=\"{$day}\">{$day}</option>\n";

                                                                                }
                                                                            }
                                                                            for($year=(date('Y')-18); $year>=1920; $year--)
                                                                            {
                                                                                if($year == date("Y", $data['userInfo']['profile']['birth']))
                                                                                {
                                                                                    $yearOptions .= "<option value=\"{$year}\" selected>{$year}</option>\n";
                                                                                }
                                                                                else
                                                                                {
                                                                                    $yearOptions .= "<option value=\"{$year}\">{$year}</option>\n";

                                                                                }
                                                                            }
                                                                            ?>
                                                                            <script type="text/javascript">
                                                                                function updateDays()
                                                                                {
                                                                                    //Create variables needed
                                                                                    var monthSel = document.getElementById('month');
                                                                                    var daySel   = document.getElementById('day');
                                                                                    var yearSel  = document.getElementById('year');
                                                                                    var monthVal = monthSel.value;
                                                                                    var yearVal  = yearSel.value;

                                                                                    //Determine the number of days in the month/year
                                                                                    var daysInMonth = 31;
                                                                                    if (monthVal==2)
                                                                                    {
                                                                                        daysInMonth = (yearVal%4==0 && (yearVal%100!=0 || yearVal%400==0)) ? 29 : 28;
                                                                                    }
                                                                                    else if (monthVal==4 || monthVal==6 || monthVal==9 || monthVal==11)
                                                                                    {
                                                                                        daysInMonth = 30;
                                                                                    }

                                                                                    //Add/remove options from days select list as needed
                                                                                    if(daySel.options.length > daysInMonth)
                                                                                    {   //Remove excess days, if needed
                                                                                        daySel.options.length = daysInMonth;
                                                                                    }
                                                                                    while (daySel.options.length != daysInMonth)
                                                                                    {   //Add additional days, if needed
                                                                                        daySel.options[daySel.length] = new Option(daySel.length+1, daySel.length+1, false);
                                                                                    }

                                                                                    return;
                                                                                }
                                                                            </script>
                                                                            <select name="day" id="day" class="ep-input" required>
                                                                                <?php echo $dayOptions; ?>
                                                                            </select>

                                                                        </div>

                                                                    </div>

                                                                    <div class="pedit-bmonth fl_l">

                                                                        <div class="select-container">

                                                                            <select name="month" id="month" onchange="updateDays();" class="ep-input" required>
                                                                                <?= $monthOptions; ?>
                                                                            </select>

                                                                        </div>

                                                                    </div>

                                                                    <div class="pedit-byear fl_l">

                                                                        <div class="select-container">

                                                                            <select name="year" id="year" onchange="updateDays();" class="ep-input" required>
                                                                                <?=$yearOptions; ?>
                                                                            </select>

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="pedit-form-group clear_fix">

                                                                <div class="pedit-label">

                                                                    <label class="required" for="">Знак зодиака:</label>

                                                                </div>

                                                                <div class="pedit-input">
                                                                    <?php
                                                                        $zadiak =
                                                                            [
                                                                                'Овен',
                                                                                'Телец',
                                                                                'Близнецы',
                                                                                'Рак',
                                                                                'Лев',
                                                                                'Дева',
                                                                                'Весы',
                                                                                'Скорпион',
                                                                                'Стрелец',
                                                                                'Козерог',
                                                                                'Водолей',
                                                                                'Рыбы',
                                                                            ]
                                                                    ?>

                                                                    <select name="zadiak" id="" class="ep-input" required>
                                                                        <?php
                                                                            foreach ($zadiak as $zad)
                                                                            {
                                                                                if ($zad == $data['userInfo']['profile']['zadiak'])
                                                                                {
                                                                                    echo "<option name=\"$zad\" selected>$zad</option>";
                                                                                }
                                                                                else
                                                                                {
                                                                                    echo "<option name=\"$zad\">$zad</option>";
                                                                                }
                                                                            }
                                                                        ?>
                                                                    </select>

                                                                </div>

                                                            </div>

                                                            <div class="pedit-form-group clear_fix">

                                                                <div class="pedit-label">

                                                                    <label class="required" for="">Фактический адрес:</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <div class="inputs-wrapper">

                                                                        <input type="text" value="<?=$data['userInfo']['profile']['country'] ?>" name="country" id="" class="ep-input" placeholder="Страна" required>

                                                                        <input type="text" value="<?=$data['userInfo']['profile']['locale'] ?>" name="locale" id="" class="ep-input" placeholder="Город" required>

                                                                        <input type="text" value="<?=$data['userInfo']['profile']['street'] ?>" name="street" id="" class="ep-input" placeholder="Улица" required>

                                                                        <input type="text" value="<?=$data['userInfo']['profile']['zip'] ?>" name="zip" id="" class="ep-input" placeholder="Индекс" required>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="pedit-form-group clear_fix">

                                                                <div class="pedit-label">

                                                                    <label class="required" for="">Семейное положение:</label>

                                                                </div>

                                                                <div class="pedit-input">
                                                                <?php $marriage = ["Не замужем", "Разведена", "Замужем"] ?>
                                                                    <select name="family" id="" class="ep-input" required>
                                                                        <?php
                                                                            foreach ($marriage as $status)
                                                                            {
                                                                                if($status == $data['userInfo']['profile']['family'])
                                                                                {
                                                                                    echo "<option name=\"$status\" selected>$status</option>";
                                                                                }
                                                                                else
                                                                                {
                                                                                    echo "<option name=\"$status\">$status</option>";
                                                                                }

                                                                            }
                                                                        ?>
                                                                    </select>

                                                                </div>

                                                            </div>

                                                            <div class="pedit-form-group clear_fix">

                                                                <div class="pedit-label">

                                                                    <label class="required" for="">Дети:</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <div id="pedit-children" class="pedit-children-container clear_fix">

                                                                        <!-- START Блок который дожен появится при клике на "Добавить" -->

                                                                        <?php
                                                                        if(!empty($data['userInfo']['chlidrens']))
                                                                        {
                                                                            foreach ($data['userInfo']['chlidrens'] as $child)
                                                                            { ?>
                                                                                <div id="pedit-wrap-child1" class="pedit-wrap-relation clear_fix">
                                                                                    <div class="pedit-relation-iput">
                                                                                        <div class="pedit-next-input fl_l">
                                                                                            <div class="pedit-cgender fl_l">
                                                                                                <div class="select-container">
                                                                                                    <select name="child_gender[]" class="ep-input">
                                                                                                        <option name="male" <?php if($child['child_gender'] == 'Мальчик'){echo 'selected';}?>>Мальчик</option>
                                                                                                        <option name="famale" <?php if($child['child_gender'] == 'Девочка'){echo 'selected';}?>>Девочка</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="pedit-cyear fl_l">
                                                                                                <div class="select-container">
                                                                                                    <select name="child_age[]" class="ep-input">
                                                                                                        <?php for($i = 0; $i<=40; $i++){ ?>
                                                                                                            <option name="<?=$i ?>" <?php if($child['age'] == $i) echo 'selected'?>><?=$i ?></option>
                                                                                                        <?php } ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pedit-right-control fl_l">
                                                                                            <span class="pedit-del-icon del-icon" href="" style="cursor: pointer;"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                                        <?php }
                                                                        }
                                                                        ?>
<!--
                                                                        <!-- END Блок который дожен появится при клике на "Добавить" -->

                                                                    </div>

                                                                    <div id="pedit-add-children-link" class="pedit-input-link">

                                                                        <span style="cursor: pointer; color: #2196f3">Добавить</span>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="pedit-form-group clear_fix">

                                                                <div class="pedit-label">

                                                                    <label class="required" for="">Хотите ли больше детей:</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <div class="radio-b-wrapper">

                                                                        <input type="radio" id="more-children-yes" class="ep-radio" name="childrens_possibility" value="Yes" <?php if($data['userInfo']['profile']['childrens_possibility'] == 'Yes'){ echo 'checked'; }?>>

                                                                        <label for="more-children-yes">Да</label>

                                                                        <input type="radio" id="more-children-no" class="ep-radio" name="childrens_possibility" value="No" <?php if($data['userInfo']['profile']['childrens_possibility'] == 'No'){ echo 'checked'; }?>>

                                                                        <label for="more-children-no">Нет</label>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="pedit-form-group clear_fix">

                                                                <div class="pedit-label">

                                                                    <label class="required" for="">Видео презентация (Youtube):</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <input type="text" value="<?= $data['userInfo']['profile']['video'] ?>" name="video" id="" class="ep-input" placeholder="Ссылка на видео" required>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                                <!-- Внешние параметры -->

                                                <div class="accordion-item">

                                                    <div class="accordion">

                                                        Внешние параметры

                                                    </div>

                                                    <div class="accordion-details accordion-edit-details">

                                                        <div class="pedit-content">

                                                            <div class="pedit-form-group clear_fix">

                                                                <div class="pedit-label">

                                                                    <label class="required" for="">Рост (см):</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <input type="text" name="height" value="<?=$data['userInfo']['profile']['height'] ?>" id="" class="ep-input" required>

                                                                </div>

                                                            </div>

                                                            <div class="pedit-form-group clear_fix">

                                                                <div class="pedit-label">

                                                                    <label class="required" for="">Вес (кг):</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <input type="text" name="weight" value="<?=$data['userInfo']['profile']['weight'] ?>" id="" class="ep-input" required>

                                                                </div>

                                                            </div>

                                                            <div class="pedit-form-group clear_fix">

                                                                <div class="pedit-label">

                                                                    <label class="required" for="">Цвет волос:</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <input type="text" name="hair_color" value="<?=$data['userInfo']['profile']['hair_colour'] ?>" id="" class="ep-input" required>

                                                                </div>

                                                            </div>

                                                            <div class="pedit-form-group clear_fix">

                                                                <div class="pedit-label">

                                                                    <label class="required" for="">Цвет глаз:</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <input type="text" name="eye_color" value="<?=$data['userInfo']['profile']['eye_color'] ?>" id="" class="ep-input" required>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                                <!-- Навыки -->

                                                <div class="accordion-item">

                                                    <div class="accordion">

                                                        Навыки

                                                    </div>

                                                    <div class="accordion-details accordion-edit-details">

                                                        <div class="pedit-content">

                                                            <div class="pedit-form-group clear_fix">

                                                                <div class="pedit-label">

                                                                    <label class="required" for="">Образование (специальность):</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <input type="text" name="education" value="<?=$data['userInfo']['profile']['education'] ?>" id="" class="ep-input" required>

                                                                </div>

                                                            </div>

                                                            <div class="pedit-form-group clear_fix">

                                                                <div class="pedit-label">

                                                                    <label class="required" for="">Профессиональная деятельность:</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <input type="text" name="profession" value="<?=$data['userInfo']['profile']['profession'] ?>" id="" class="ep-input" required>

                                                                </div>

                                                            </div>

                                                            <div class="pedit-form-group clear_fix">
                                                                <?php
                                                                    $english = [
                                                                        'Beginner',
                                                                        'Pre-Intermediate',
                                                                        'Intermediate',
                                                                        'Upper-Intermediate',
                                                                        'Advanced',
                                                                        'Proficiency'
                                                                    ];
                                                                ?>

                                                                <div class="pedit-label">

                                                                    <label class="required" for="">Знание английского языка:</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <select name="english_skill_level" id="" class="ep-input" required>
                                                                        <?php
                                                                        foreach ($english as $skill)
                                                                        {
                                                                            if($data['userInfo']['profile']['english_skill_level'] == $skill)
                                                                            {
                                                                                echo "<option name=\"$skill\" selected>$skill</option>";
                                                                            }
                                                                            else
                                                                            {
                                                                                echo "<option name=\"$skill\">$skill</option>";
                                                                            }
                                                                        }
                                                                        ?>
                                                                    </select>

                                                                </div>

                                                            </div>

                                                            <div class="pedit-form-group clear_fix">

                                                                <div class="pedit-label">

                                                                    <label class="required" for="">Водительские права:</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <div class="radio-b-wrapper">

                                                                        <input type="radio" id="drivers-license-yes" name="driver_licence" value="Yes" <?php if($data['userInfo']['profile']['driver_license'] == 'Yes'){ echo 'checked'; }?> >

                                                                        <label for="drivers-license-yes">Есть</label>

                                                                        <input type="radio" id="drivers-license-no" name="driver_licence" value="No" <?php if($data['userInfo']['profile']['driver_license'] == 'No'){ echo 'checked'; }?>>

                                                                        <label for="drivers-license-no">Нет</label>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                                <!-- Жизненная позиция -->

                                                <div class="accordion-item">

                                                    <div class="accordion">

                                                        Жизненная позиция

                                                    </div>

                                                    <div class="accordion-details accordion-edit-details">

                                                        <div class="pedit-content">

                                                            <div class="pedit-form-group clear_fix">

                                                                <div class="pedit-label">

                                                                    <label class="required" for="">Вероисповедание:</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <input type="text" name="religion" value="<?=$data['userInfo']['profile']['religion'] ?>" id="" class="ep-input" required>

                                                                </div>

                                                            </div>

                                                            <div class="pedit-form-group clear_fix">
                                                                <?php $smoking=['Да', 'Нет'] ?>

                                                                <div class="pedit-label">

                                                                    <label class="required" for="">Курите ли Вы:</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <select name="smoker" id="" class="ep-input" required>
                                                                        <?php foreach ($smoking as $smoke)
                                                                        {
                                                                            if($data['userInfo']['profile']['smoker'] == $smoke)
                                                                            {
                                                                                echo "<option name=\"$smoke\" selected>$smoke</option>";
                                                                            }
                                                                            else
                                                                            {
                                                                                echo "<option name=\"$smoke\">$smoke</option>";
                                                                            }
                                                                        }
                                                                        ?>
                                                                    </select>

                                                                </div>

                                                            </div>

                                                            <div class="pedit-form-group clear_fix">
                                                                <?php
                                                                $alcohol =
                                                                    [
                                                                        'Негативное',
                                                                        'Компромиссное',
                                                                        'Положительное',
                                                                    ]
                                                                ?>
                                                                <div class="pedit-label">

                                                                    <label class="required" for="">Отношение к алкоголю:</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <select name="alcohol" id="" class="ep-input" required>
                                                                        <?php
                                                                            foreach ($alcohol as $alc)
                                                                            {
                                                                                if($data['userInfo']['profile']['alcohol'] == $alc)
                                                                                {
                                                                                    echo "<option name=\"$alc\" selected>$alc</option>";
                                                                                }
                                                                                else
                                                                                {
                                                                                    echo "<option name=\"$alc\">$alc</option>";
                                                                                }
                                                                            }
                                                                        ?>
                                                                    </select>

                                                                </div>

                                                            </div>

                                                            <div class="pedit-form-group clear_fix">

                                                                <div class="pedit-label">

                                                                    <label class="required" for="">Жизненное кредо:</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <textarea type="text" name="creed" id="" class="ep-input" maxlength="255" required><?=$data['userInfo']['profile']['creed'] ?></textarea>

                                                                </div>

                                                            </div>

                                                            <div class="pedit-form-group clear_fix">

                                                                <div class="pedit-label">

                                                                    <label class="required" for="">Опишите себя:</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <textarea type="text" name="about" id="" class="ep-input" maxlength="255" required><?=$data['userInfo']['profile']['about']?></textarea>

                                                                </div>

                                                            </div>

                                                            <div class="pedit-form-group clear_fix">

                                                                <div class="pedit-label">

                                                                    <label class="required" for="">Увлечения:</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <textarea type="text" name="hobbie" id="" class="ep-input" maxlength="255" required><?=$data['userInfo']['profile']['hobbie'] ?></textarea>

                                                                </div>

                                                            </div>

                                                            <div class="pedit-form-group clear_fix">

                                                                <div class="pedit-label">

                                                                    <label class="required" for="">Ваша мечта:</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <textarea type="text" name="dreams" id="" class="ep-input" maxlength="255" required><?=$data['userInfo']['profile']['dreams'] ?></textarea>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                                <!-- Предпочтения -->

                                                <div class="accordion-item">

                                                    <div class="accordion">

                                                        Предпочтения

                                                    </div>

                                                    <div class="accordion-details accordion-edit-details">

                                                        <div class="pedit-content">

                                                            <div class="pedit-form-group clear_fix">

                                                                <div class="pedit-label">

                                                                    <label class="required" for="">Любимая еда:</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <input type="text" name="food" value="<?=$data['userInfo']['profile']['favorite_food'] ?>" id="" class="ep-input" required>

                                                                </div>

                                                            </div>

                                                            <div class="pedit-form-group clear_fix">

                                                                <div class="pedit-label">

                                                                    <label class="required" for="">Любимая музыка:</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <input type="text" name="music" value="<?=$data['userInfo']['profile']['favorite_music'] ?>" id="" class="ep-input" required>

                                                                </div>

                                                            </div>

                                                            <div class="pedit-form-group clear_fix">

                                                                <div class="pedit-label">

                                                                    <label class="required" for="">Любимый фильм:</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <input type="text" name="favorite_movie" value="<?=$data['userInfo']['profile']['eye_color'] ?>" id="" class="ep-input" required>

                                                                </div>

                                                            </div>

                                                            <div class="pedit-form-group clear_fix">

                                                                <div class="pedit-label">

                                                                    <label class="required" for="">Любимое время года:</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <input type="text" name="season" value="<?=$data['userInfo']['profile']['favorite_season'] ?>" id="" class="ep-input" required>

                                                                </div>

                                                            </div>

                                                            <div class="pedit-form-group clear_fix">

                                                                <div class="pedit-label">

                                                                    <label class="required" for="">Любимый город:</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <input type="text" name="favorite_city" value="<?=$data['userInfo']['profile']['favorite_city'] ?>" id="" class="ep-input" required>

                                                                </div>

                                                            </div>

                                                            <div class="pedit-form-group clear_fix">

                                                                <div class="pedit-label">

                                                                    <label class="required" for="">Любимые подарки:</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <input type="text" name="gift" value="<?=$data['userInfo']['profile']['favorite_gifts'] ?>" id="" class="ep-input" required>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                                <!-- О партнере -->

                                                <div class="accordion-item">

                                                    <div class="accordion">

                                                        О партнере

                                                    </div>

                                                    <div class="accordion-details accordion-edit-details">

                                                        <div class="pedit-content">

                                                            <div class="pedit-form-group clear_fix">

                                                                <div class="pedit-label">

                                                                    <label class="required" for="">О потенциальном партнере:</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <textarea name="ideal_mate" id="" class="ep-input" maxlength="255" required><?=$data['userInfo']['profile']['ideal_mate'] ?></textarea>

                                                                </div>

                                                            </div>

                                                            <div class="pedit-form-group clear_fix">

                                                                <div class="pedit-label">

                                                                    <label class="required" for="">Возраст потенциального партнера:</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <div class="inputs-wrapper">

                                                                        <input type="text" value="<?=$data['userInfo']['profile']['pref_min_age'] ?>" name="pref_min_age" id="" class="ep-input" placeholder="от" required>

                                                                        <input type="text" value="<?=$data['userInfo']['profile']['pref_max_age'] ?>" name="pref_max_age" id="" class="ep-input" placeholder="до" required>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                                <!-- Контактные данные (для администрации) -->

                                                <div class="accordion-item">

                                                    <div class="accordion">

                                                        Контактные данные (для администрации)

                                                    </div>

                                                    <div class="accordion-details accordion-edit-details">

                                                        <div class="pedit-content">

                                                            <div class="pedit-form-group clear_fix">

                                                                <div class="pedit-label">

                                                                    <label class="required" for="">Фото паспорта:</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <div id="pas-container-photos" class="pp-container-photos">

                                                                        <ul class="pas-page-wrapper">

                                                                            <li><span class="pas-page">Cтр 1</span></li>


                                                                        </ul>

                                                                        <!-- INPUT ADD IMAGES -->

                                                                        <div id="" class="photos-row file-wrap">

                                                                            <input class="ep-input" type="file" name="passport[]" multiple min="1" max="25">

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="pedit-form-group clear_fix">

                                                                <div class="pedit-label">

                                                                    <label class="required" for="">Фамилия</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <input type="text" value="<?=$data['userInfo']['profile']['last_name'] ?>" name="last_name" id="" class="ep-input" required>

                                                                </div>

                                                                <div class="pedit-label">

                                                                    <label class="required" for="">Имя</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <input type="text" value="<?=$data['userInfo']['profile']['first_name'] ?>" name="first_name" id="" class="ep-input" required>

                                                                </div>

                                                                <div class="pedit-label">

                                                                    <label class="required" for="">Отчество</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <input type="text" value="<?=$data['userInfo']['profile']['otchestvo'] ?>" name="otchestvo" id="" class="ep-input" required>

                                                                </div>

                                                            </div>

                                                            <div class="pedit-form-group clear_fix">

                                                                <div class="pedit-label">

                                                                    <label class="required" for="">Адрес прописки:</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <textarea name="prop_address" id="" class="ep-input" maxlength="255" required><?=$data['userInfo']['profile']['prop_address'] ?></textarea>

                                                                </div>

                                                            </div>

                                                            <div class="pedit-form-group clear_fix">

                                                                <div class="pedit-label">

                                                                    <label class="required" for="">Индекс:</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <input type="text" value="<?=$data['userInfo']['profile']['prop_index'] ?>" name="prop_index" id="" class="ep-input" required>

                                                                </div>

                                                            </div>

                                                            <div class="pedit-form-group clear_fix">

                                                                <div class="pedit-label">

                                                                    <label class="required" for="">Номер телефона:</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <input type="tel" value="<?=$data['userInfo']['phones'][0]['phone'] ?>" name="phone[]" id="" class="ep-input" placeholder="+38 ( ___ ) ___ - __ -__" required>

                                                                </div>

                                                            </div>

                                                            <div class="pedit-form-group clear_fix">

                                                                <div class="pedit-label">

                                                                    <label for="">Запасной номер телефона:</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <input type="tel" value="<?=$data['userInfo']['phones'][1]['phone'] ?>" name="phone[]" id="" class="ep-input" placeholder="+38 ( ___ ) ___ - __ -__">

                                                                </div>

                                                            </div>

                                                            <div class="pedit-form-group clear_fix">

                                                                <div class="pedit-label">

                                                                    <label class="required" for="">Email:</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <input type="email" value="<?= $data['userInfo']['profile']['email'] ?>" name="email" id="" class="ep-input" required>

                                                                </div>

                                                            </div>

                                                            <div class="pedit-form-group clear_fix">

                                                                <div class="pedit-label">

                                                                    <label for="">Запасной e-mail:</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <input type="email" value="<?= $data['userInfo']['profile']['email_optional'] ?>" name="email_optional" id="" class="ep-input">

                                                                </div>

                                                            </div>

                                                            <div class="pedit-form-group clear_fix">

                                                                <div class="pedit-label">

                                                                    <label for="">Skype:</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <input type="text" value="<?= $data['userInfo']['profile']['skype'] ?>" name="skype" id="" class="ep-input">

                                                                </div>

                                                            </div>

                                                            <div class="pedit-form-group clear_fix">

                                                                <div class="pedit-label">

                                                                    <label class="required" for="">Viber:</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <div class="radio-b-wrapper">

                                                                        <input type="radio" id="viber-yes" name="viber" value="Yes" <?php if($data['userInfo']['profile']['viber'] == 'Yes'){ echo 'checked'; }?>>

                                                                        <label for="viber-yes">Есть</label>

                                                                        <input type="radio" id="viber-no" name="viber" value="No" <?php if($data['userInfo']['profile']['viber'] == 'No'){ echo 'checked'; }?>>

                                                                        <label for="viber-no">Нет</label>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="pedit-form-group clear_fix">

                                                                <div class="pedit-label">

                                                                    <label class="required" for="">Face Time:</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <div class="radio-b-wrapper">

                                                                        <input type="radio" id="facetime-yes" name="face_time" value="Yes" <?php if($data['userInfo']['profile']['face_time'] == 'Yes'){ echo 'checked'; }?>>

                                                                        <label for="facetime-yes">Есть</label>

                                                                        <input type="radio" id="facetime-no" name="face_time" value="No" <?php if($data['userInfo']['profile']['face_time'] == 'No'){ echo 'checked'; }?>>

                                                                        <label for="facetime-no">Нет</label>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="pedit-form-group clear_fix">

                                                                <div class="pedit-label">

                                                                    <label for="">Странички в соц.сетях:</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <div class="inputs-wrapper">

                                                                        <input type="text" value="<?php foreach ($data['userInfo']['social'] as $social){ if($social['name'] == 'fb' ){ echo $social['link']; } } ?>" name="fb" id="" class="ep-input" placeholder="Facebook">

                                                                        <input type="text" value="<?php foreach ($data['userInfo']['social'] as $social){ if(in_array('vk', $social)){ echo $social['link']; } } ?>" name="vk" id="" class="ep-input" placeholder="Vkontakte">

                                                                        <input type="text" value="<?php foreach ($data['userInfo']['social'] as $social){ if(in_array('inst', $social)){ echo $social['link']; } } ?>" name="instagram" id="" class="ep-input" placeholder="Instagram">

                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="pedit-form-group clear_fix">

                                                                <div class="pedit-label">

                                                                    <label class="required" for="">Как вы о нас узнали?</label>

                                                                </div>

                                                                <div class="pedit-input">

                                                                    <input type="text" value="<?= $data['userInfo']['profile']['about_us'] ?>" name="about_us" id="" class="ep-input" required>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                                <!-- Кнопка Сохранения данных -->

                                                <div class="submit-wrapper">

                                                    <button type="submit" name="edit" class="btn btn-purple">Сохранить и продолжить</button>

                                                </div>

                                            </form>

                                            <!-- EDIT FORM END -->

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!-- ======================== EDIT PROFILE DATA END ======================== -->

                        </section>

                    </div>

                </div>

                <!-- ======================== PROFILE DATA END ======================== -->

            </div>

        </div>

    </div>

    <!-- ========================PROFILE END ======================== -->

</main>

