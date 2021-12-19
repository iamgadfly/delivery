// document.addEventListener("DOMContentLoaded", function () {
//     var menu = document.getElementsByClassName("menu__burger");
//     if (menu.contains("active")) {
//         menu.click().removeClass("active");
//     } else {
//         menu.click().adClass("active");
//     }
//     // menu.attr("src", "second.jpg");
//     // menu.click()
//     console.log(menu);
//     // когда весь HTML загружен
//     // setTimeout(function () {
//     //     // таймер-планировщик
//     //     document.getElementById("btn-click").click(); // вызвать клик на кнопку
//     // }, 2000); // через две секунды
//     // var elm = document.querySelector("div");
//     // elm.getElementsByClassName("header__body").onclick = function () {
//     //     console.log(322);
//     // };
//     // document.onclick = function (event) {
//     // console.log(event.target.tagName);
//     // };
//     // document.querySelector('.header__text').onclick() = function()
//     // var elm = document.querySelector("div");
//     // elm.onclick = function (event) {
//     //     console.log(event.target.tagName);
//     //     console.log(322);
//     // };
//     // document.getElementsByClassName("content__right-head").onclick =
//     //     function () {
//     //         console.log("fewfdsfew");
//     //     };

//     // document.querySelector(".header__text").onclick();
// });
$(document).ready(function () {
    $(".menu__burger").on("click", function () {
        $(".menu__burger").toggleClass("active");
        $(this).attr(
            "src",
            "https://img.icons8.com/ios-glyphs/30/000000/multiply.png"
        );

        if ($(".header__menuburger-block").hasClass("actived")) {
            $(this).attr(
                "src",
                "https://img.icons8.com/material-sharp/24/000000/menu--v3.png"
            );
        } else {
            $(this).attr(
                "src",
                "https://img.icons8.com/ios-glyphs/30/000000/multiply.png"
            );
        }
        $(".header__menuburger-block").toggleClass("actived");
    });
    $(".right__enter").on("click", function () {
        $(".right__enter").removeClass("activate");
        $(this).addClass("activate");
    });
    $("#u").on("click", function () {
        $(".email").addClass("activ");
        $(".nomber").addClass("activ");

        console.log("wfde");
    });
    $("#f").on("click", function () {
        $(".email").removeClass("activ");
        $(".nomber").removeClass("activ");
        console.log("wfde");

        // $(this).addClass("activate");
    });
    // $(document).mouseup(function (e) {
    //     // событие клика по веб-документу
    //     var div = $("#popup"); // тут указываем ID элемента
    //     if (
    //         !div.is(e.target) && // если клик был не по нашему блоку
    //         div.has(e.target).length === 0
    //     ) {
    //         // и не по его дочерним элементам
    //         div.hide(); // скрываем его
    //     }
    // });
    // if()
});
