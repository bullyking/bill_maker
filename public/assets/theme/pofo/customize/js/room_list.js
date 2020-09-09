$(document).ready(function() {
    var url = $('.url').val();
    var token = $('.token').val();

    var appendHtml = onRenderLoading();
    $('.room_16').html('');
    $('.room_16').append(appendHtml);

    $('.input-group.date').datepicker({
        format: "dd/mm/yyyy",
        viewMode: "date",
        minViewMode: "date",
        calendarWeeks: true,
        autoclose: true
    });

    $('body').on('click', '.create_new_room', function() {
        var loadingCss = onRenderLoading();
        $('.dummy_room').html('');
        $('.dummy_room').append(loadingCss);
    }).on('click', '.view_sidebar', function() {
        var chkActive = $('#sidebar.active').length;
        if (chkActive > 0) {
            $('#sidebar').removeClass('active');
            $('body').css('overflow-y', 'scroll');
        } else {
            $('.type_save').val('new');
            $('.idTemp').val(0);
            var htmlLoading = onRenderLoadingSidebar();
            $('#section_manage_room .profile-details').html('');
            $('#section_manage_room .profile-details').append(htmlLoading);

            $('#sidebar').addClass('active');
            $('body').css('overflow-y', 'hidden');
            $('.pace-done').css('overflow-y', 'hidden');

            $.ajax({
                method: 'GET',
                url: url + '/render_room_detail/new/0',
                success: function(data) {
                    setTimeout(function() {
                        $('#section_manage_room .profile-details').html('');
                        $('#section_manage_room .profile-details').append(data);
                    }, 500);
                }
            });
        }
    }).on('click', '.close_sidebar', function() {
        $('#sidebar').removeClass('active');
        $('body').css('overflow-y', 'scroll');
    }).on('click', '.overlay-to-close', function() {
        $('#sidebar').removeClass('active');
        $('body').css('overflow-y', 'scroll');
    }).on('click', '.view_detail', function() {
        $('.type_save').val('update');
        $('.idTemp').val(this.id);

        var htmlLoading = onRenderLoadingSidebar();
        $('#section_manage_room .profile-details').html('');
        $('#section_manage_room .profile-details').append(htmlLoading);

        $('#sidebar').addClass('active');
        $('body').css('overflow-y', 'hidden');
        $('.pace-done').css('overflow-y', 'hidden');

        $.ajax({
            method: 'GET',
            url: url + '/render_room_detail/update/' + this.id,
            success: function(data) {
                setTimeout(function() {
                    $('#section_manage_room .profile-details').html('');
                    $('#section_manage_room .profile-details').append(data);
                }, 500);
            }
        });

    }).on('click', '.save_room', function() {
        $.ajax({
            method: 'POST',
            url: url + '/room_list/save_room_detail',
            data: {
                _token: token,
                type: $('.type_save').val(),
                idRoom: $('.idTemp').val(),
                title_name: $('#title_name').val(),
                fullname: $('#fullname').val(),
                nickname: $('#nickname').val(),
                age: $('#age').val(),
                dob: $('#dob').val(),
                gender: $('#gender').val(),
                contact: $('#phone_number').val(),
                email: $('#email').val(),
                room_number: $('#room_number').val(),
                room_price: $('#room_price').val(),
                cable_price: $('#cable_price').val(),
                trash_price: $('#trash_price').val(),
                check_in_date: $('#check_in_date').val(),
                remark: $('#remark').val()
            },
            success: function(data) {
                console.log('data', data);
            }
        });
        // $('#sidebar').removeClass('active');
        // $('body').css('overflow-y', 'scroll');
    });

});

function onRenderLoading() {
    var txtHtml = '<div class="timeline-wrapper">';
    txtHtml += '<div class="timeline-item">';
    txtHtml += '<div class="animated-background-82px">';
    txtHtml += '<div class="background-masker header-top"></div>';
    txtHtml += '<div class="background-masker header-left"></div>';
    txtHtml += '<div class="background-masker header-right"></div>';
    txtHtml += '<div class="background-masker header-bottom"></div>';
    txtHtml += '<div class="background-masker subheader-left"></div>';
    txtHtml += '<div class="background-masker subheader-right"></div>';
    txtHtml += '<div class="background-masker subheader-bottom"></div>';
    txtHtml += '<div class="background-masker content-top"></div>';
    txtHtml += '<div class="background-masker content-first-end"></div>';
    txtHtml += '<div class="background-masker content-second-line"></div>';
    txtHtml += '<div class="background-masker content-second-end"></div>';
    txtHtml += '<div class="background-masker content-third-line"></div>';
    txtHtml += '<div class="background-masker content-third-end"></div> ';
    txtHtml += '</div><br>';
    txtHtml += '<div class="animated-background-82px">';
    txtHtml += '<div class="background-masker header-top"></div>';
    txtHtml += '<div class="background-masker header-left"></div>';
    txtHtml += '<div class="background-masker header-right"></div>';
    txtHtml += '<div class="background-masker header-bottom"></div>';
    txtHtml += '<div class="background-masker subheader-left"></div>';
    txtHtml += '<div class="background-masker subheader-right"></div>';
    txtHtml += '<div class="background-masker subheader-bottom"></div>';
    txtHtml += '<div class="background-masker content-top"></div>';
    txtHtml += '<div class="background-masker content-first-end"></div>';
    txtHtml += '<div class="background-masker content-second-line"></div>';
    txtHtml += '<div class="background-masker content-second-end"></div>';
    txtHtml += '<div class="background-masker content-third-line"></div>';
    txtHtml += '<div class="background-masker content-third-end"></div> ';
    txtHtml += '</div><br>';
    txtHtml += '<div class="animated-background-82px">';
    txtHtml += '<div class="background-masker header-top"></div>';
    txtHtml += '<div class="background-masker header-left"></div>';
    txtHtml += '<div class="background-masker header-right"></div>';
    txtHtml += '<div class="background-masker header-bottom"></div>';
    txtHtml += '<div class="background-masker subheader-left"></div>';
    txtHtml += '<div class="background-masker subheader-right"></div>';
    txtHtml += '<div class="background-masker subheader-bottom"></div>';
    txtHtml += '<div class="background-masker content-top"></div>';
    txtHtml += '<div class="background-masker content-first-end"></div>';
    txtHtml += '<div class="background-masker content-second-line"></div>';
    txtHtml += '<div class="background-masker content-second-end"></div>';
    txtHtml += '<div class="background-masker content-third-line"></div>';
    txtHtml += '<div class="background-masker content-third-end"></div> ';
    txtHtml += '</div><br>';
    txtHtml += '<div class="animated-background-82px">';
    txtHtml += '<div class="background-masker header-top"></div>';
    txtHtml += '<div class="background-masker header-left"></div>';
    txtHtml += '<div class="background-masker header-right"></div>';
    txtHtml += '<div class="background-masker header-bottom"></div>';
    txtHtml += '<div class="background-masker subheader-left"></div>';
    txtHtml += '<div class="background-masker subheader-right"></div>';
    txtHtml += '<div class="background-masker subheader-bottom"></div>';
    txtHtml += '<div class="background-masker content-top"></div>';
    txtHtml += '<div class="background-masker content-first-end"></div>';
    txtHtml += '<div class="background-masker content-second-line"></div>';
    txtHtml += '<div class="background-masker content-second-end"></div>';
    txtHtml += '<div class="background-masker content-third-line"></div>';
    txtHtml += '<div class="background-masker content-third-end"></div> ';
    txtHtml += '</div>';
    txtHtml += '</div>';
    txtHtml += '</div>';
    return txtHtml;
}

function onRenderLoadingSidebar() {
    var txtHtml = '<div class="caption sidebarLoading" id="caption">';
    txtHtml += '<div class="title"></div>';
    txtHtml += '<a type="button" class="close close_sidebar">';
    txtHtml += '<span aria-hidden="true">×</span>';
    txtHtml += '</a>';
    txtHtml += '</div>';
    txtHtml += '<div class="timeline-wrapper">';
    txtHtml += '<div class="timeline-item">';
    txtHtml += '<div class="animated-background-82px">';
    txtHtml += '<div class="background-masker header-top"></div>';
    txtHtml += '<div class="background-masker header-left"></div>';
    txtHtml += '<div class="background-masker header-right"></div>';
    txtHtml += '<div class="background-masker header-bottom"></div>';
    txtHtml += '<div class="background-masker subheader-left"></div>';
    txtHtml += '<div class="background-masker subheader-right"></div';
    txtHtml += '<div class="background-masker subheader-bottom"></div>';
    txtHtml += '<div class="background-masker content-top"></div>';
    txtHtml += '<div class="background-masker content-first-end"></div>';
    txtHtml += '<div class="background-masker content-second-line"></div>';
    txtHtml += '<div class="background-masker content-second-end"></div>';
    txtHtml += '<div class="background-masker content-third-line"></div>';
    txtHtml += '<div class="background-masker content-third-end"></div>';
    txtHtml += '</div>><br>';
    txtHtml += '<div class="animated-background-82px">';
    txtHtml += '<div class="background-masker header-top"></div>';
    txtHtml += '<div class="background-masker header-left"></div>';
    txtHtml += '<div class="background-masker header-right"></div>';
    txtHtml += '<div class="background-masker header-bottom"></div>';
    txtHtml += '<div class="background-masker subheader-left"></div>';
    txtHtml += '<div class="background-masker subheader-right"></div';
    txtHtml += '<div class="background-masker subheader-bottom"></div>';
    txtHtml += '<div class="background-masker content-top"></div>';
    txtHtml += '<div class="background-masker content-first-end"></div>';
    txtHtml += '<div class="background-masker content-second-line"></div>';
    txtHtml += '<div class="background-masker content-second-end"></div>';
    txtHtml += '<div class="background-masker content-third-line"></div>';
    txtHtml += '<div class="background-masker content-third-end"></div>';
    txtHtml += '</div>><br>';
    txtHtml += '<div class="animated-background-82px">';
    txtHtml += '<div class="background-masker header-top"></div>';
    txtHtml += '<div class="background-masker header-left"></div>';
    txtHtml += '<div class="background-masker header-right"></div>';
    txtHtml += '<div class="background-masker header-bottom"></div>';
    txtHtml += '<div class="background-masker subheader-left"></div>';
    txtHtml += '<div class="background-masker subheader-right"></div';
    txtHtml += '<div class="background-masker subheader-bottom"></div>';
    txtHtml += '<div class="background-masker content-top"></div>';
    txtHtml += '<div class="background-masker content-first-end"></div>';
    txtHtml += '<div class="background-masker content-second-line"></div>';
    txtHtml += '<div class="background-masker content-second-end"></div>';
    txtHtml += '<div class="background-masker content-third-line"></div>';
    txtHtml += '<div class="background-masker content-third-end"></div>';
    txtHtml += '</div>><br>';
    txtHtml += '<div class="animated-background-82px">';
    txtHtml += '<div class="background-masker header-top"></div>';
    txtHtml += '<div class="background-masker header-left"></div>';
    txtHtml += '<div class="background-masker header-right"></div>';
    txtHtml += '<div class="background-masker header-bottom"></div>';
    txtHtml += '<div class="background-masker subheader-left"></div>';
    txtHtml += '<div class="background-masker subheader-right"></div';
    txtHtml += '<div class="background-masker subheader-bottom"></div>';
    txtHtml += '<div class="background-masker content-top"></div>';
    txtHtml += '<div class="background-masker content-first-end"></div>';
    txtHtml += '<div class="background-masker content-second-line"></div>';
    txtHtml += '<div class="background-masker content-second-end"></div>';
    txtHtml += '<div class="background-masker content-third-line"></div>';
    txtHtml += '<div class="background-masker content-third-end"></div>';
    txtHtml += '</div>><br>';
    txtHtml += '<div class="animated-background-82px">';
    txtHtml += '<div class="background-masker header-top"></div>';
    txtHtml += '<div class="background-masker header-left"></div>';
    txtHtml += '<div class="background-masker header-right"></div>';
    txtHtml += '<div class="background-masker header-bottom"></div>';
    txtHtml += '<div class="background-masker subheader-left"></div>';
    txtHtml += '<div class="background-masker subheader-right"></div';
    txtHtml += '<div class="background-masker subheader-bottom"></div>';
    txtHtml += '<div class="background-masker content-top"></div>';
    txtHtml += '<div class="background-masker content-first-end"></div>';
    txtHtml += '<div class="background-masker content-second-line"></div>';
    txtHtml += '<div class="background-masker content-second-end"></div>';
    txtHtml += '<div class="background-masker content-third-line"></div>';
    txtHtml += '<div class="background-masker content-third-end"></div>';
    txtHtml += '</div>><br>';
    txtHtml += '<div class="animated-background-82px">';
    txtHtml += '<div class="background-masker header-top"></div>';
    txtHtml += '<div class="background-masker header-left"></div>';
    txtHtml += '<div class="background-masker header-right"></div>';
    txtHtml += '<div class="background-masker header-bottom"></div>';
    txtHtml += '<div class="background-masker subheader-left"></div>';
    txtHtml += '<div class="background-masker subheader-right"></div';
    txtHtml += '<div class="background-masker subheader-bottom"></div>';
    txtHtml += '<div class="background-masker content-top"></div>';
    txtHtml += '<div class="background-masker content-first-end"></div>';
    txtHtml += '<div class="background-masker content-second-line"></div>';
    txtHtml += '<div class="background-masker content-second-end"></div>';
    txtHtml += '<div class="background-masker content-third-line"></div>';
    txtHtml += '<div class="background-masker content-third-end"></div>';
    txtHtml += '</div>>';
    txtHtml += '</div>';
    txtHtml += '</div>';
    return txtHtml;
}
