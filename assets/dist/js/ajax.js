/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function Ajax(){
    this.ajaxLive = ajaxLive;
    this.concatString = concatString;
}

function ajaxLive(type, url, data, dataType, async, cache, contentType, processData, success, error, complete, beforeSend) {    
    $.ajax({
        type: type,
        url: url,
        data: data,
        dataType: dataType,
        async: async,
        cache: cache,
        contentType: contentType,
        processData: processData,
        beforeSend: beforeSend,
        success: success,
        error: error,
        complete: complete
    });
}


function concatString(val) {
    if (val.toString().length === 1) {
        val = '0' + val;
    }
    return val;
}
