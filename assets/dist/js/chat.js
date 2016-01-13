/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var instanse = false;

function Chat() {
    this.setChat = setChat;
    this.getChat = getChat;
    this.slimScroll = slimScroll;
}

function setChat() {
    $('#form-chat').submit(function (event) {
        event.preventDefault();
        getChat();
        var formData = new FormData($(this)[0]);
        var d = new Date();
        var ajax = new Ajax();
        var chat_id = d.getFullYear() + '' + ajax.concatString((d.getMonth() + 1)) + '' + ajax.concatString(d.getDate()) +
        '' + ajax.concatString(d.getHours()) + '' + ajax.concatString(d.getMinutes()) + '' + ajax.concatString(d.getSeconds()) +
        '' + (Math.floor(Math.random() * (9999 - 1000) + 1000));
        var chat_time = d.getFullYear() + '/' + ajax.concatString((d.getMonth() + 1)) + '/' + ajax.concatString(d.getDate()) +
        ' ' + ajax.concatString(d.getHours()) + ':' + ajax.concatString(d.getMinutes()) + ':' + ajax.concatString(d.getSeconds());
        formData.append('chat_id', chat_id);
        formData.append('chat_time', chat_time);
        ajaxLive('POST', '/SimpleLiveChat/chat/setChat', formData, 'html', false, false, false, false, success, null, null, null);
        return false;
    });

    function success(object) {
        $('#form-chat input[name="chat_content"]').val("");
        getChat();
    }
}

function getChat() {
    var ajax = new Ajax();
    if (!instanse) {
        instanse = true;
        ajax.ajaxLive('POST', '/SimpleLiveChat/chat/getChat', null, 'json', false, false, false, false, success, null, null, null);
    } else {
        setTimeout(getChat, 1500);
    }

    function success(object) {
        var html = '';
        $(object.data).each(function (i, v) {
            var d = new Date(v.chat_time);
            if (v.user_id === $('#form-chat input[name="user_id"]').val()) {
                html += '<div class="direct-chat-msg right">';
                html += '<div class="direct-chat-info clearfix">';
                html += '<span class="direct-chat-name pull-right">' + v.username + '</span>';
                html += '<span class="direct-chat-timestamp pull-left">' + d.getFullYear() +
                '/' + ajax.concatString((d.getMonth() + 1)) + '/' + ajax.concatString(d.getDate()) +
                ' ' + ajax.concatString(d.getHours()) + ':' + ajax.concatString(d.getMinutes()) +
                ':' + ajax.concatString(d.getSeconds()) + '</span>';
                html += '</div>';
                html += '<img src="/SimpleLiveChat/assets/dist/img/default.png" class="direct-chat-img" alt="Message User Image"/>';
                html += '<div class="direct-chat-text">';
                html += v.chat_content;
                html += '</div>';
                html += '</div>';
            } else {
                html += '<div class="direct-chat-msg">';
                html += '<div class="direct-chat-info clearfix">';
                html += '<span class="direct-chat-name pull-left">' + v.username + '</span>';
                html += '<span class="direct-chat-timestamp pull-right">' + d.getFullYear() +
                '/' + ajax.concatString((d.getMonth() + 1)) + '/' + ajax.concatString(d.getDate()) +
                ' ' + ajax.concatString(d.getHours()) + ':' + ajax.concatString(d.getMinutes()) +
                ':' + ajax.concatString(d.getSeconds()) + '</span>';
                html += '</div>';
                html += '<img src="/SimpleLiveChat/assets/dist/img/default.png" class="direct-chat-img" alt="Message User Image"/>';
                html += '<div class="direct-chat-text">';
                html += v.chat_content;
                html += '</div>';
                html += '</div>';
            }
        });
        $('.direct-chat-messages').html(html);
        slimScroll();
        instanse = false;
    }
}

function slimScroll() {
    var scrollTo_int = $('.direct-chat-messages').prop('scrollHeight') + 'px';
    $('.direct-chat-messages').slimScroll({
        height: '330px',
        scrollTo: scrollTo_int,
        start: 'bottom',
        alwaysVisible: true
    });
}

