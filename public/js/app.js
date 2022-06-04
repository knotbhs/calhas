jQuery(document).ready(function($){

window.onscroll = function(){
    if(window.pageYOffset > 140)
    {
        $("#header").addClass("active");
    }else{
        $("#header").removeClass("active");
    }
}

    function showMe(evt) {
        console.log("evt.value ", evt.value);
    }
    function makeDd() {
        'use strict';
        let json = new Function(`return ${document.getElementById('json_data').innerHTML}`)();
        /*  new MsDropdown("#json_dropdown", {
              byJson: {
                  data: json, selectedIndex:1
              }
          })*/
        MsDropdown.make("#json_dropdown", {
            byJson: {
                data: json, selectedIndex: 0
            }
        });
    }
    $("input.tel")
        .mask("9999?9-9999")
        .focusout(function (event) {
            var target, phone, element;
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;
            phone = target.value.replace(/\D/g, '');
            element = $(target);
            element.unmask();
    
            if (phone.length > 8) {
                element.mask("9999?9-9999");
            } else {
                element.mask("9999-9999?9");
            }
        });
    
    $("input.ddd")
        .mask("99?9")
        .focusout(function (event) {
            var target, phone, element;
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;
            phone = target.value.replace(/\D/g, '');
            element = $(target);
            element.unmask();
            if (phone.length > 2) {
                element.mask("999");
            } else {
                element.mask("99?9");
            }
        });
    $("form").submit(function (e) {
        if ($(".ddi").val().length > 0 && $(".ddd").val().length >= 1 && $(".tel").val().length >= 6) {
            $(".erroInput").each(function () {
                $(this).removeClass("erroInput");
            });
        } else {
            e.preventDefault();
    
            if ($(".ddi").val().replace(/\D/g, '').length <= 0) {
                $(".ddi").addClass("erroInput");
            }
            if ($(".ddd").val().replace(/\D/g, '').length <= 0) {
                $(".ddd").addClass("erroInput");
            }
            if ($(".tel").val().replace(/\D/g, '').length <= 6) {
                $(".tel").addClass("erroInput");
            }
        }
    });
});
