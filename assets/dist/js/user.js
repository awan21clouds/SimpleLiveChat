/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function User() {
    this.setUser = setUser;
    this.getUser = getUser;
}

function setUser() {


    $('#form-register').submit(function (event) {
        event.preventDefault();
        var formData = new FormData($(this)[0]);
        var d = new Date();
        var ajax = new Ajax();
        var user_id = d.getFullYear() + '' + ajax.concatString((d.getMonth() + 1)) + '' + ajax.concatString(d.getDate()) + '' + ajax.concatString(d.getHours()) + '' + ajax.concatString(d.getMinutes()) + '' + ajax.concatString(d.getSeconds()) + '' + (Math.floor(Math.random() * (9999 - 1000) + 1000));
        formData.append('user_id', user_id);
        ajax.ajaxLive('POST', '/SimpleLiveChat/chat/setUser', formData, 'html', false, false, false, false, success, null, null, null);
        return false;
    });
    function success(object) {
        $('#form-register')[0].reset();
        getUser();
    }
}

function getUser() {
    var ajax = new Ajax();
    ajax.ajaxLive('POST', '/SimpleLiveChat/chat/getUser', null, 'json', false, false, false, false, success, null, null, null);
    function success(object) {
        var html = '';
        $(object.data).each(function (i, v) {
            html += '<option value="'+v.user_id+'">'+v.username+'</option>';
//            alert(v.username);
        });
        $('#user-options').html(html);
    }
}