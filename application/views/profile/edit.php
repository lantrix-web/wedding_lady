<h1>Edit girl</h1>
<?php

//foreach ($data['userInfo'] as $key => $value)
//{
//    echo "<p>Поле: $key, значение: $value</p>";
//
//}
echo @$data['errors'];
?>

<form enctype="multipart/form-data" action="" method="post" >
    first_name<input type="text" name="first_name" value="<?=$data['userInfo']['profile']['first_name']?>">*<br>
    last_name<input type="text" name="last_name" value="<?=$data['userInfo']['profile']['last_name']?>">*<br>
    pref_min_age
    <select name="pref_min_age">
        <?php
            for($i = 18; $i<100; $i++)
            {
                if($data['userInfo']['profile']['pref_min_age'] == $i){
                    echo "<option name='".$i."' selected>$i</option>";

                }
                else
                {
                    echo "<option name='".$i."'>$i</option>";

                }
            }
        ?>
    </select><br>
    pref_max_age <select name="pref_max_age">
        <?php
        for($i = 18; $i<100; $i++)
        {

            if($data['userInfo']['profile']['pref_max_age'] == $i)
            {
                echo "<option name='".$i."' selected>$i</option>";
            }

            else
            {
                echo "<option name='".$i."'>$i</option>";
            }
        }
        ?>
    </select><br>
    height<input type="text" name="height" value="<?=$data['userInfo']['profile']['height'] ?>"><br>
    weight<input type="text" name="weight" value="<?=$data['userInfo']['profile']['weight'] ?>"><br>
    hair_color<input type="text" name="hair_color" value="<?=$data['userInfo']['profile']['hair_colour'] ?>"><br>
    eye_color<input type="text" name="eye_color" value="<?=$data['userInfo']['profile']['eye_color'] ?>"><br>
    smoker<select name="smoker">
        <?php
        if($data['userInfo']['profile']['eye_color'])
        { ?>
            <option name="1" selected>Да</option>

        <?php }
?>
        <option name="0">Нет</option>
    </select>*<br>
    religion<input type="text" name="religion" value="<?=$data['userInfo']['profile']['religion'] ?>"><br>
    about<input type="text" name="about" value="<?=$data['userInfo']['profile']['about']?>">*<br>
    hobbie<input type="text" name="hobbie" value="<?=$data['userInfo']['profile']['hobbie'] ?>"><br>
    education <input type="text" name="education" value="<?=$data['userInfo']['profile']['education'] ?>"><br>
    ideal_mate<input type="text" name="ideal_mate" value="<?=$data['userInfo']['profile']['ideal_mate'] ?>"><br>
    dreams<input type="text" name="dreams" value="<?=$data['userInfo']['profile']['dreams'] ?>"><br>
    food <input type="text" name="food" value="<?=$data['userInfo']['profile']['favorite_food'] ?>"><br>
    music<input type="text" name="music" value="<?=$data['userInfo']['profile']['favorite_music'] ?>"><br>
    season<input type="text" name="season" value="<?=$data['userInfo']['profile']['favorite_season'] ?>"><br>
    english_skill_level <select name="english_skill_level">
        <option name="basic">Basic</option>
        <option name="elementary">Elementary</option>
        <option name="pre_inter">Pre Intermediate</option>
        <option name="inter">Intermediate</option>
        <option name="up_inter">Upper Intermediate</option>
        <option name="advanced">Advanced</option>
    </select><br>
    gift <input type="text" name="gift" value="<?=$data['userInfo']['profile']['favorite_gifts'] ?>"><br>

    <hr>
    Отчество<input type="text" name="otchestvo" value="<?=$data['userInfo']['profile']['otchestvo'] ?>">*<br>
    Телефон <input type="tel" name="phone"><br>
    Имя на сайте <input type="text" name="mask_name" value="<?=$data['userInfo']['profile']['mask_name'] ?>"><br>
    Откуда вы узнали про нас <input type="text" name="about_us" value="<?=$data['userInfo']['profile']['about_us'] ?>"><br>
    Водительские права <select name="driver_license">
        <option name="yes">Есть</option>
        <option name="no">Нет</option>
    </select><br>
    Любимый город <input type="text" name="favorite_city" value="<?=$data['userInfo']['profile']['favorite_city'] ?>"><br>
    Любимый фильм <input type="text" name="favorite_movie" value="<?=$data['userInfo']['profile']['eye_color'] ?>"><br>
    Жизненное кредо <input type="text" name="creed" value="<?=$data['userInfo']['profile']['creed'] ?>"><br>
    Семейное положение <select name="family">
        <option name="not_married">Не замужем</option>
        <option name="married">Замужем</option>
        <option name="divorced">Разведена</option>
    </select><br>
    <hr>
    Социальные сети:<br>
    vk<input type="text" name="vk" value="<?=$data['userInfo']['social'][0]['link'] ?>"><br>
    facebook<input type="text" name="fb"  value="<?=$data['userInfo']['social'][1]['link'] ?>"><br>
    instagram<input type="text" name="instagram" value="<?=$data['userInfo']['social'][2]['link'] ?>">
    <hr>
    Проффесиональная дефятельность <input type="text" name="profession" value="<?=$data['userInfo']['profile']['profession'] ?>"><br>
    Знак задиака <select name="zadiak">
        fa
    </select><br>
    Face Time<select name="face_time">
        <option name="yes">Есть</option>
        <option name="no">Нет</option>
    </select><br>
    Viber <select name="viber">
        <option name="yes">Есть</option>
        <option name="no">Нет</option>
    </select><br>
    Skype <input type="text" name="skype" value="<?=$data['userInfo']['profile']['skype'] ?>"><br>
    Фактический адрес <input type="text" name="fact_address" value="<?=$data['userInfo']['profile']['fact_address'] ?>">
    Почтовый индекс <input type="number" name="fact_index" value="<?=$data['userInfo']['profile']['fact_post_index'] ?>"><br>
    Адрес прописки <input type="text" name="prop_address" value="<?=$data['userInfo']['profile']['prop_address'] ?>">
    Почтовый индекс <input type="number" name="prop_index" value="<?=$data['userInfo']['profile']['prop_index'] ?>"><br>
    Отношение к алкоголю <select name="alcohol">
        <option>Негативное</option>
        <option>Компромиссное</option>
        <option>Нейтральное</option>
        <option>Положительное</option>
    </select><br>


    Хотите ещё детей? <select name="childrens_possibility">
        <option name="Yes">Да</option>
        <option name="No">Нет</option>
    </select><br>

    Ребёнок <button type="button" id="add-child">Добавить</button><br>
    <div id="child-input">

    </div>
    <?php
    if(!empty($data['userInfo']['chlidrens']))
    {
        foreach ($data['userInfo']['chlidrens'] as $child){

        ?>
        <div>
        Возраст <select name='child_age[]'>
                <?php
                for($i = 0; $i<40; $i++)
                {
                    if($child['age'] == $i)
                    {
                        echo "<option name=\"$i\" selected >$i</option>";
                    }
                    else
                    {
                        echo "<option name=\"$i\">$i</option>";
                    }
                }
                ?>
        </select>
            <select name="child_gender[]">
                <?php

                    if($child['child_gender'] == 'Мальчик')
                    {
                        echo "<option name=\"male\" selected>Мальчик</option>";
                        echo "<option name=\"female\">Девочка</option>";
                    }
                    elseif($child['child_gender'] == 'Девочка')
                    {
                        echo "<option name=\"female\" selected>Девочка</option>";
                        echo "<option name=\"male\" >Мальчик</option>";

                    }


                ?>
            </select>
            <span class="del">X</span>
        </div>


    <?php } }
?>
    Видео с ютуба (ссылка) <input type="text" name="video" value="<?=$data['userInfo']['profile']['video'] ?>"> <br>
    <input type="hidden" name="MAX_FILE_SIZE" value="3000000">

    <?php
        if(!empty($data['userInfo']['images']))
        {
            foreach ($data['userInfo']['images'] as $image)
            {  ?>
                    <div class=\"img_wrap\" style='position: relative;'>

                    <img src="<?=$image['img'] ?>"  id="<?=$image['photo_id'] ?>" height="180px">
                    <span style="position: absolute; left: 20%" class="del_img" data-id="<?=$data['userInfo']['profile']['id'];?>">X</span>
                    <span style="position: absolute; left: 20%; top:20%;" class="main_img" photo-id="<?=$image['photo_id'] ?>">На главную</span>
                    </div>

           <?php }

        }

    ?>
    Выбрать Фотографию <input  type="file" name="image[]" multiple min="1" max="25"><br>
    <?php
    if(!empty($data['userInfo']['passport']))
    {
        foreach ($data['userInfo']['passport'] as $photo) {
            ?>
            <div class="passport_wrap" style='position: relative;' id="passport_<?=$photo['photo_id'] ?>">
                <img src="<?= $photo['link'] ?>" height="180px">
                <span style="position: absolute; left: 20%" class="del_pass" data-id="<?=$data['userInfo']['profile']['id'];?>">X</span>

            </div>
    <?php
        }
    }


?>
    Фото паспорта <input type="file" name="passport[]" multiple min="1" max="25">
    <input type="submit" value="edit" name="edit"><br>
</form>
