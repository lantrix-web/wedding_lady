$(document).ready(function () {


// Добавление ребенка на странице редактирования
    var id = 1;


    $('#pedit-add-children-link span').click(function () {

        var i;
        var option;
        var select = function () {
            for (i = 0; i < 40; i++ )
            {
                option += "<option name='i'>"+i+"</option>";
            }
        };
        select();

        // $('#child-input').after("" +
        //     "<div id='"+id+"'>" +
        //     "Возраст <select name='child_age[]'>" +
        //     option +
        //     "</select>" +
        //     "<select name='child_gender[]'>" +
        //     "<option name='male'>Мальчик</option>"+
        //     "<option name='female'>Девочка</option>"+
        //     "</select>"+
        //     "<span id='"+(id++)+"' class='del'>X</span>"+
        //     "</div>");
        $('#pedit-children').append(
            "<div id=\"pedit-wrap-child1\" class=\"pedit-wrap-relation clear_fix\">"+
            "<div class=\"pedit-relation-iput\">"+
            "<div class=\"pedit-next-input fl_l\">"+
            "<div class=\"pedit-cgender fl_l\">"+
            "<div class=\"select-container\">"+
            "<select name=\"child_gender[]\" class=\"ep-input\">"+
            "<option name=\"male\">Мальчик</option>"+
            "<option name=\"famale\">Девочка</option>"+
            "</select>"+
            "</div>"+
            "</div>"+
            "<div class=\"pedit-cyear fl_l\">"+
            "<div class=\"select-container\">"+
            "<select name=\"child_age[]\" class=\"ep-input\">"+
            option+
            "</select>"+
            "</div>"+
            "</div>"+
            "</div>"+
            "<div class=\"pedit-right-control fl_l\">"+
            "<span class=\"pedit-del-icon del-icon\" href=\"\" style=\"cursor: pointer;\"></span>"+
            "</div>"+
            "</div>"+
            "</div>"
        );


    });
    $(".pedit-wrap-relation .del-icon").click(function(){
        $(this).parent().parent().parent().remove();
    });
    // $("form div span.del").click(function(){
    //     $(this).parent().remove();
    // });
// Добавление ребенка на странице редактирования


// Удаление фото
    $('.del_img').click(function () {
        var ask = confirm('Вы уверены что хотите удалить это фото?');
        if(ask == true) {
            var id = $(this).attr('data-id');
            var link = $(this).siblings('a').attr('href');
            var ph_id = $(this).siblings('a').attr('photo-id');
            // alert(ph_id);
            // alert(link);
            $.ajax({
                type: "POST",
                url: '/profile/' + id,
                data: 'link=' + link + '&id=' + id,
                success: function (txt) {
                    if (txt == 'success') {
                        $('#' + ph_id).remove();
                    }
                }

            });
        }
    });
    // Удаление фото

    //Set avatar
    $('.main_img').click(function () {
        var photo_id = $(this).siblings('a').attr('photo-id');
        var user_id = $(this).siblings('span').attr('data-id');
        var src = $(this).siblings('a').attr('href');
        $.ajax({
           type:"POST",
            url:"/profile/"+user_id,
            data:'photo_id='+photo_id+'&user_id='+user_id+'&img_src='+src,
            success:function (suck) {
               if(suck == 'success')
               {
                   alert('Установлен новый аватар!');
               }
            }

        });
    });
    //Set avatar
    //Passport delete
    $('.del_pass').click(function () {
        var id = $(this).attr('data-id');
        var src = $(this).siblings('img').attr('src');
        var passport_id = $(this).parent('div').attr('id');
        $.ajax({
            type:"POST",
            url:"/profile/"+id,
            data:'src='+src+'&id='+id,
            success: function (yeap) {
                if(yeap == 'success')
                {
                    $('#'+passport_id).remove();
                }
            }
        });
    });
    //Passport delete

    //Login (main page) toggle
    $('#login-trigger').click(function(){
        $(this).next('#login-content').slideToggle();
        $(this).toggleClass('active');
        if ($(this).hasClass('active'))
            {
                $(this).find('span').html('&#x25B2;')
            }
        else
        {
            $(this).find('span').html('&#x25BC;')
        }

        });
    //Login (main page) toggle


    //Validation login form (main page)

    $('#login_form').validate({

        rules:{

            auth_login:{
                required: true,
                minlength: 4,
                maxlength: 16,
            },
            auth_password:{
                required: true,
                minlength: 6,
                maxlength: 16,
            },
        },
        messages:{
            auth_login:{
                required: "Это поле обязательно для заполнения",
                minlength: "Логин должен быть минимум 4 символа",
                maxlength: "Максимальное число символов - 16",
            },
            auth_password:{
                required: "Это поле обязательно для заполнения",
                minlength: "Пароль должен быть минимум 6 символов",
                maxlength: "Пароль должен быть максимум 16 символов",
            },
        },

        submitHandler: function (form) {
            var login = $('#name').serialize();
            var password = $('#pass').serialize();
            $.ajax({
                type: "POST",
                url: '/login',
                data: login+'&'+password,
                success: function (yea) {
                    if(yea == 'Неверный логин или пароль!')
                    {
                        $('#error_login').text(yea);
                    }
                    else if(yea == '/admin')
                    {
                        $(location).attr('href', yea);
                    }
                    else
                    {
                        $(location).attr('href', yea);
                    }

                }

            });
        }

    });
    //Validation login form (main page)


    /*
    Validation registration form
     */
    function var_dump () {
        var output = '', pad_char = ' ', pad_val = 4, lgth = 0, i = 0, d = this.window.document;
        var getFuncName = function (fn) {
            var name = (/\W*function\s+([\w\$]+)\s*\(/).exec(fn);
            if (!name) {
                return '(Anonymous)';
            }
            return name[1];
        };
        var repeat_char = function (len, pad_char) {
            var str = '';
            for (var i=0; i < len; i++) { str += pad_char; } return str; }; var getScalarVal = function (val) { var ret = ''; if (val === null) { ret = 'NULL'; } else if (typeof val === 'boolean') { ret = 'bool(' + val + ')'; } else if (typeof val === 'string') { ret = 'string(' + val.length + ') "' + val + '"'; } else if (typeof val === 'number') { if (parseFloat(val) == parseInt(val, 10)) { ret = 'int(' + val + ')'; } else { ret = 'float(' + val + ')'; } } else if (val === undefined) { ret = 'UNDEFINED'; // Not PHP behavior, but neither is undefined as value } else if (typeof val === 'function') { ret = 'FUNCTION'; // Not PHP behavior, but neither is function as value ret = val.toString().split("\n"); txt = ''; for(var j in ret) { txt += (j !=0 ? thick_pad : '') + ret[j] + "\n"; } ret = txt; } else if (val instanceof Date) { val = val.toString(); ret = 'string('+val.length+') "' + val + '"' } else if(val.nodeName) { ret = 'HTMLElement("' + val.nodeName.toLowerCase() + '")'; } return ret; }; var formatArray = function (obj, cur_depth, pad_val, pad_char) { var someProp = ''; if (cur_depth > 0) {
            cur_depth++;
        }
            base_pad = repeat_char(pad_val * (cur_depth - 1), pad_char);
            thick_pad = repeat_char(pad_val * (cur_depth + 1), pad_char);
            var str = '';
            var val = '';
            if (typeof obj === 'object' && obj !== null) {
                if (obj.constructor && getFuncName(obj.constructor) === 'PHPJS_Resource') {
                    return obj.var_dump();
                }
                lgth = 0;
                for (someProp in obj) {
                    lgth++;
                }
                str += "array(" + lgth + ") {\n";
                for (var key in obj) {
                    if (typeof obj[key] === 'object' && obj[key] !== null && !(obj[key] instanceof Date) && !obj[key].nodeName) {
                        str += thick_pad + "["+key+"] =>\n" + thick_pad+formatArray(obj[key], cur_depth+1, pad_val, pad_char);
                    } else {
                        val = getScalarVal(obj[key]);
                        str += thick_pad + "["+key+"] =>\n" + thick_pad + val + "\n";
                    }
                }
                str += base_pad + "}\n";
            } else {
                str = getScalarVal(obj);
            }
            return str;
        };
        output = formatArray(arguments[0], 0, pad_val, pad_char);
        for ( i=1; i < arguments.length; i++ ) {
            output += '\n' + formatArray(arguments[i], 0, pad_val, pad_char);
        }
        return output;
    }

    $('#reg').validate({
        rules:{
            username:{
                required: true,
                minlength: 5,
                maxlength: 15,
            },
            email:{
                required: true,
                email: true,
            },
            password:{
                required: true,
                minlength: 6,
                maxlength: 15,
            },
            city:{
                required: true,
                minlength: 2,
            },


        },

        messages:{
            username:
            {
                required: "Это поле обязательно для заполнения!",
                minlength: "Логин не может быть короче 5 символов",
                maxlength: "Логин не может быть длинее 15 символов",
            },
            email:
            {
                required: "Это поле обязательно для заполнения!",
                email: "Это не похоже на Email!",
            },
            password:{
                required: "Это поле обязательно для заполнения!",
                minlength: "Пароль не может быть короче 6 символов",
                maxlength: "Пароль не может быть длинее 15 символов",
            },
            city:{
                required: "Это поле обязательно для заполнения!",
                minlength: "Город не может состоять из 2х символов"
            },

        },
        submitHandler: function (form) {
            var username = $('#username').serialize();
            var email = $('#email').serialize();
            var city = $('#state').serialize();
            var passw = $('#password').serialize();
            var day = $('#day').serialize();
            var month = $('#month').serialize();
            var year = $('#year').serialize();

            $.ajax({
                type: "POST",
                url:'/ladies',
                data: username+'&'+email+'&'+city+'&'+passw+'&'+day+'&'+month+'&'+year,
                success: function (success) {
                    if(success == 'success')
                    {
                        alert('Регистрация прошла успешно, ожидайте подтверждения модератора!');
                    }
                    else
                    {
                        alert(success);
                    }
                }
            })
        }
    });



});


