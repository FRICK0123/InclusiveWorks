//Accessibility Sidebar Script for large Screens
    //Pointer Switch Functionality
    let pointer_list = document.getElementById('pointer-list');
    let pointer = document.getElementById('pointer');
    let pointer_phrase = document.getElementById('pointer-off-on');

    pointer_list.addEventListener('click',()=>{
        pointer.checked = !pointer.checked;
        if(pointer.checked == true){
            pointer_phrase.innerHTML = "On";
        } else {
            pointer_phrase.innerHTML = "Off";
        }
    });
    //Pointer End

    //Screen Reader Functionality
    let screen_reader_list = document.getElementById('screen-reader-list');
    let screen_reader = document.getElementById('screen-reader');
    let screen_reader_phrase = document.getElementById('screen-reader-off-on');

    screen_reader_list.addEventListener('click',()=>{
        screen_reader.checked = !screen_reader.checked;
        if(screen_reader.checked == true){
            screen_reader_phrase.innerHTML = "On";
        } else {
            screen_reader_phrase.innerHTML = "Off";
        }
    });
    //Screen Reader End

    //Font Customization Functionality
    let font_custom_list = document.getElementById('font-custom-list');
    let font_custom = document.getElementById('font-custom');
    let font_custom_phrase = document.getElementById('font-custom-off-on');

    font_custom_list.addEventListener('click',()=>{
        font_custom.checked = !font_custom.checked;
        if(font_custom.checked == true){
            font_custom_phrase.innerHTML = "On";
        } else {
            font_custom_phrase.innerHTML = "Off";
        }
    });
    //Font Customization End

    //High Contrast Functionality
    let high_contrast_list = document.getElementById('high-contrast-list');
    let high_contrast = document.getElementById('high-contrast');
    let high_contrast_phrase = document.getElementById('high-contrast-off-on');

    high_contrast_list.addEventListener('click',()=>{
        high_contrast.checked = !high_contrast.checked;
        if(high_contrast.checked == true){
            high_contrast_phrase.innerHTML = "On";
        } else {
            high_contrast_phrase.innerHTML = "Off";
        }
    });
    //High Contrast End
//Accessibility Sidebar Script for large Screens End

//Accessibility Sidebar Script for Medium Screens
    //Pointer Switch Functionality
    let menu_pointer_list = document.getElementById('menu-pointer-list');
    let menu_pointer = document.getElementById('menu-pointer');
    let menu_pointer_phrase = document.getElementById('menu-pointer-off-on');

    menu_pointer_list.addEventListener('click',()=>{
        menu_pointer.checked = !menu_pointer.checked;
        if(menu_pointer.checked == true){
            menu_pointer_phrase.innerHTML = "On";
        } else {
            menu_pointer_phrase.innerHTML = "Off";
        }
    });
    //Pointer End

    //Screen Reader Functionality
    let menu_screen_reader_list = document.getElementById('menu-screen-reader-list');
    let menu_screen_reader = document.getElementById('menu-screen-reader');
    let menu_screen_reader_phrase = document.getElementById('menu-screen-reader-off-on');

    menu_screen_reader_list.addEventListener('click',()=>{
        menu_screen_reader.checked = !menu_screen_reader.checked;
        if(menu_screen_reader.checked == true){
            menu_screen_reader_phrase.innerHTML = "On";
        } else {
            menu_screen_reader_phrase.innerHTML = "Off";
        }
    });
    //Screen Reader End

    //Font Customization Functionality
    let menu_font_custom_list = document.getElementById('menu-font-custom-list');
    let menu_font_custom = document.getElementById('menu-font-custom');
    let menu_font_custom_phrase = document.getElementById('menu-font-custom-off-on');

    menu_font_custom_list.addEventListener('click',()=>{
        menu_font_custom.checked = !menu_font_custom.checked;
        if(menu_font_custom.checked == true){
            menu_font_custom_phrase.innerHTML = "On";
        } else {
            menu_font_custom_phrase.innerHTML = "Off";
        }
    });
    //Font Customization End

    //High Contrast Functionality
    let menu_high_contrast_list = document.getElementById('menu-high-contrast-list');
    let menu_high_contrast = document.getElementById('menu-high-contrast');
    let menu_high_contrast_phrase = document.getElementById('menu-high-contrast-off-on');

    menu_high_contrast_list.addEventListener('click',()=>{
        menu_high_contrast.checked = !menu_high_contrast.checked;
        if(menu_high_contrast.checked == true){
            menu_high_contrast_phrase.innerHTML = "On";
        } else {
            menu_high_contrast_phrase.innerHTML = "Off";
        }
    });
    //High Contrast End
//Accessibility Sidebar Script for Medium Screens End

    var loader = document.getElementById('preloader');
    window.addEventListener("load",function(){
        loader.style.display = "none";
    });

