var profile_hover=$('.profile_hover')
var image_profil= $('.photo')
var fermer_menu_profile=$('.fermer_menu_profile')
var setting_side_bar=$('.setting_side_bar')
var open_parametre=$('.open_parametre')
var close_setting_bar=$('.close_setting_bar')
var btn_open_sidbar=$('.btn_open_sidbar')
var sidbar=$('.sidbar')
var body=$('.body')
var btn_close_sidbar=$('.btn_close_sidbar')
var sidebar_acceuil=$('.sidebar_acceuil')
var open_side_bar_acceuil=$('.open_side_bar_acceuil')
var close_menu_acceuil=$('.close_menu_acceuil')
var boite_model_acceuil=$('.boite_model_acceuil')

image_profil.on('click',function(){
    profile_hover.removeClass('hidden')
    profile_hover.addClass('flex')
})
fermer_menu_profile.on('click',function(){
    profile_hover.removeClass('flex')
    profile_hover.addClass('hidden')
})
open_parametre.on('click',function(){
    setting_side_bar.removeClass('right-[-15rem]')
    setting_side_bar.addClass('right-0')
})
close_setting_bar.on('click',function(){
    setting_side_bar.addClass('right-[-15rem]')
    setting_side_bar.removeClass('right-0')
})
btn_open_sidbar.on('click',function(){
   sidbar.removeClass('max-[1000px]:hidden')
})
btn_close_sidbar.on('click',function(){
    sidbar.addClass('max-[1000px]:hidden')
})
open_side_bar_acceuil.on('click',function(){
    sidebar_acceuil.removeClass('left-[-16rem]')
    sidebar_acceuil.addClass('left-0')
})
close_menu_acceuil.on('click',function(){
    sidebar_acceuil.removeClass('left-0')
    sidebar_acceuil.addClass('left-[-16rem]')
})
$(document).ready(function() {
    $(window).scroll(function() {
      if ($(window).scrollTop() > 0) {
        $(".navbar_acceuil").removeClass("top-14");
        boite_model_acceuil.removeClass("top-36")
        boite_model_acceuil.addClass("top-20")
    } else if ($(window).scrollTop() === 0) {
        $(".navbar_acceuil").addClass("top-14");
        boite_model_acceuil.removeClass("top-20")
        boite_model_acceuil.addClass("top-36")
      }
    });
  });

//   setTimeout(function(){
//     let activeSlide = document.querySelector('.slide.translate-x-0');
//     activeSlide.classList.remove('translate-x-0');
//     activeSlide.classList.add('-translate-x-full');
//     let nextSlide = activeSlide.nextElementSibling;
//     nextSlide.classList.remove('translate-x-full');
//     nextSlide.classList.add('translate-x-0');
// }, 3000);

var btn_next_slide=$('.next_slide')
var btn_prev_slide=$('.prev_slide')
btn_next_slide.on('click',function(){
    nextSlide()
})
btn_prev_slide.on('click',function(){
    previousSlide()
})
function nextSlide(){
    let activeSlide = document.querySelector('.slide.translate-x-0');
    activeSlide.classList.remove('translate-x-0');
    activeSlide.classList.add('-translate-x-full');

    let nextSlide = activeSlide.nextElementSibling;
    nextSlide.classList.remove('translate-x-full');
    nextSlide.classList.add('translate-x-0');
}

function previousSlide(){
    let activeSlide = document.querySelector('.slide.translate-x-0');
    activeSlide.classList.remove('translate-x-0');
    activeSlide.classList.add('translate-x-full');

    let previousSlide = activeSlide.previousElementSibling;
    previousSlide.classList.remove('-translate-x-full');
    previousSlide.classList.add('translate-x-0');
}
$(document).ready(function(){
    var checkbox_robot=$('.checkbox_robot')
    var checkbox_condition=$('.checkbox_condition')
    checkbox_robot.prop('checked', false);
    checkbox_condition.prop('checked',false);

    checkbox_condition.change(function(){
        var icon_condition_verifie=$('.icon_condition_verifie')
        if(checkbox_condition.is(':checked')){
        icon_condition_verifie.removeClass('hidden')
        checkbox_condition.addClass('hidden')
        }
    })
    $('.checkbox_robot').change(function(){
        var icon_robot_verifie=$('.icon_robot_verifie')
        var img_capatcha=$('.img_capatcha')
        if (checkbox_robot.is(':checked')) {
            checkbox_robot.addClass('hidden')
            icon_robot_verifie.removeClass('hidden')
            img_capatcha.addClass('animate-once')
        }
    })
})
var open_boite_model_acceuil=$('.open_boite_model_acceuil')
var ferme_boite_model_acceuil=$('.ferme_boite_model_acceuil')
var btn_connect=$('.btn_connect');
open_boite_model_acceuil.on('click',function(){
    boite_model_acceuil.removeClass('hidden')
})
ferme_boite_model_acceuil.on('click',function(){
    boite_model_acceuil.addClass('hidden')
})
btn_connect.on('click',function(){
    boite_model_acceuil.addClass('hidden')
})

