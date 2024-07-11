//Login Username Overlay Functions
    let login_username_overlay = document.getElementById('login-username-overlay');
    let login_username_close = document.getElementById('login-username-close');
    let overlay_login_username = document.getElementById('overlay-login-username');
    let main_login_username = document.getElementById('login-username');
    let login_username_submit = document.getElementById('login-username-submit');

    main_login_username.addEventListener('click', () => {
        main_login_username.blur();
        login_username_overlay.style.display = "flex";
        document.body.style.overflow = "hidden";
    });

    login_username_close.addEventListener('click', ()=>{
        login_username_overlay.style.display = 'none';
        document.body.style.overflow = "auto";
    });

    login_username_submit.addEventListener('click', ()=>{
        main_login_username.value = overlay_login_username.value;
        login_username_overlay.style.display = 'none';
    });
//Login username overlay functions end

//Login Password Overlay Functions
    let login_password_overlay = document.getElementById('login-password-overlay');
    let login_password_close = document.getElementById('login-password-close');
    let overlay_login_password = document.getElementById('overlay-login-password');
    let main_login_password = document.getElementById('login-password');
    let login_password_submit = document.getElementById('login-password-submit');

    main_login_password.addEventListener('click', () => {
        main_login_password.blur();
        login_password_overlay.style.display = "flex";
        document.body.style.overflow = "hidden";
    });

    login_password_close.addEventListener('click', ()=>{
        login_password_overlay.style.display = 'none';
        document.body.style.overflow = "auto";
    });

    login_password_submit.addEventListener('click', ()=>{
        main_login_password.value = overlay_login_password.value;
        login_password_overlay.style.display = 'none';
    });
//Login Password overlay functions end

//script for showing and hiding password whenever the checkbox is clicked
    function showPassword(){

    }
    document.getElementById('showPclass').addEventListener('click',()=>{
        let showP = document.getElementById('showP');
        if(showP.checked == true){
            overlay_login_password.type = 'text';
        } else {
            overlay_login_password.type = 'password';
        }
    });