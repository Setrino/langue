/**
 * Created with JetBrains PhpStorm.
 * User: sergeikostevitch
 * Date: 8/29/13
 * Time: 5:17 PM
 * To change this template use File | Settings | File Templates.
 */

$(document).ready(function(){

    var divs = document.getElementsByTagName('div');

    console.log(divs.length);

    for(var i = 0; i < divs.length; i++){

        //console.log(divs[i].id);

        var id = divs[i].id;

        var reg = new RegExp('^[0-9]$');

        if(reg.test(id.split("")[0])){

            $('#' + id).hide();
            console.log(divs[i].id);
        }
    }
});

$( document ).ready(function() {
    console.log( "ready!" );
});