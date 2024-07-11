//PWD Firstname Overlay Functions
    let pwd_firstname_overlay = document.getElementById('pwd-firstname-overlay');
    let pwd_firstname_close = document.getElementById('pwd-firstname-close');
    let overlay_pwd_firstname = document.getElementById('overlay-pwd-firstname');

    let main_pwd_firstname = document.getElementById('pwd-firstname');
    let pwd_firstname_submit = document.getElementById('pwd-firstname-submit');

    main_pwd_firstname.addEventListener('click', () => {
        main_pwd_firstname.blur();
        pwd_firstname_overlay.style.display = "flex";
        document.body.style.overflow = "hidden";
    });

    pwd_firstname_close.addEventListener('click', ()=>{
        pwd_firstname_overlay.style.display = 'none';
        document.body.style.overflow = "auto";
    });

    pwd_firstname_submit.addEventListener('click', ()=>{
        main_pwd_firstname.value = overlay_pwd_firstname.value;
        pwd_firstname_overlay.style.display = 'none';
        document.body.style.overflow = "auto";
    });
//PWD Firstname overlay functions end

//PWD Lastname Overlay Functions
    let pwd_lastname_overlay = document.getElementById('pwd-lastname-overlay');
    let pwd_lastname_close = document.getElementById('pwd-lastname-close');
    let overlay_pwd_lastname = document.getElementById('overlay-pwd-lastname');

    let main_pwd_lastname = document.getElementById('pwd-lastname');
    let pwd_lastname_submit = document.getElementById('pwd-lastname-submit');

    main_pwd_lastname.addEventListener('click', () => {
        main_pwd_lastname.blur();
        pwd_lastname_overlay.style.display = "flex";
        document.body.style.overflow = "hidden";
    });

    pwd_lastname_close.addEventListener('click', ()=>{
        pwd_lastname_overlay.style.display = 'none';
        document.body.style.overflow = "auto";
    });

    pwd_lastname_submit.addEventListener('click', ()=>{
        main_pwd_lastname.value = overlay_pwd_lastname.value;
        pwd_lastname_overlay.style.display = 'none';
        document.body.style.overflow = "auto";
    });
//PWD Lastname overlay functions end

//PWD Email Functions
    let pwd_email_overlay = document.getElementById('pwd-email-overlay');
    let pwd_email_close = document.getElementById('pwd-email-close');
    let overlay_pwd_email = document.getElementById('overlay-pwd-email');

    let main_pwd_email = document.getElementById('pwd-email');
    let pwd_email_submit = document.getElementById('pwd-email-submit');

    main_pwd_email.addEventListener('click', () => {
        main_pwd_email.blur();
        pwd_email_overlay.style.display = "flex";
        document.body.style.overflow = "hidden";
    });

    pwd_email_close.addEventListener('click', ()=>{
        pwd_email_overlay.style.display = 'none';
        document.body.style.overflow = "auto";
    });

    pwd_email_submit.addEventListener('click', ()=>{
        main_pwd_email.value = overlay_pwd_email.value;
        pwd_email_overlay.style.display = 'none';
        document.body.style.overflow = "auto";
    });
//PWD Email functions end

//PWD Age Functions
    let pwd_age_overlay = document.getElementById('pwd-age-overlay');
    let pwd_age_close = document.getElementById('pwd-age-close');
    let overlay_pwd_age = document.getElementById('overlay-pwd-age');

    let main_pwd_age = document.getElementById('pwd-age');
    let pwd_age_submit = document.getElementById('pwd-age-submit');

    main_pwd_age.addEventListener('click', () => {
        main_pwd_age.blur();
        pwd_age_overlay.style.display = "flex";
        document.body.style.overflow = "hidden";
    });

    pwd_age_close.addEventListener('click', ()=>{
        pwd_age_overlay.style.display = 'none';
        document.body.style.overflow = "auto";
    });

    pwd_age_submit.addEventListener('click', ()=>{
        main_pwd_age.value = overlay_pwd_age.value;
        pwd_age_overlay.style.display = 'none';
        document.body.style.overflow = "auto";
    });
//PWD Age functions end

//PWD Contact Functions
    let pwd_contact_overlay = document.getElementById('pwd-contact-overlay');
    let pwd_contact_close = document.getElementById('pwd-contact-close');
    let overlay_pwd_contact = document.getElementById('overlay-pwd-contact');

    let main_pwd_contact = document.getElementById('pwd-contact');
    let pwd_contact_submit = document.getElementById('pwd-contact-submit');

    main_pwd_contact.addEventListener('click', () => {
        main_pwd_contact.blur();
        pwd_contact_overlay.style.display = "flex";
        document.body.style.overflow = "hidden";
    });

    pwd_contact_close.addEventListener('click', ()=>{
        pwd_contact_overlay.style.display = 'none';
        document.body.style.overflow = "auto";
    });

    pwd_contact_submit.addEventListener('click', ()=>{
        main_pwd_contact.value = overlay_pwd_contact.value;
        pwd_contact_overlay.style.display = 'none';
        document.body.style.overflow = "auto";
    });
//PWD Contact functions end

//PWD Username Functions
    let pwd_username_overlay = document.getElementById('pwd-username-overlay');
    let pwd_username_close = document.getElementById('pwd-username-close');
    let overlay_pwd_username = document.getElementById('overlay-pwd-username');

    let main_pwd_username = document.getElementById('pwd-username');
    let pwd_username_submit = document.getElementById('pwd-username-submit');

    main_pwd_username.addEventListener('click', () => {
        main_pwd_username.blur();
        pwd_username_overlay.style.display = "flex";
        document.body.style.overflow = "hidden";
    });

    pwd_username_close.addEventListener('click', ()=>{
        pwd_username_overlay.style.display = 'none';
        document.body.style.overflow = "auto";
    });

    pwd_username_submit.addEventListener('click', ()=>{
        main_pwd_username.value = overlay_pwd_username.value;
        pwd_username_overlay.style.display = 'none';
        document.body.style.overflow = "auto";
    });
//PWD Username functions end

//PWD Password Functions
    let pwd_password_overlay = document.getElementById('pwd-password-overlay');
    let pwd_password_close = document.getElementById('pwd-password-close');
    let overlay_pwd_password = document.getElementById('overlay-pwd-password');

    let main_pwd_password = document.getElementById('pwd-password');
    let pwd_password_submit = document.getElementById('pwd-password-submit');

    main_pwd_password.addEventListener('click', () => {
        main_pwd_password.blur();
        pwd_password_overlay.style.display = "flex";
        document.body.style.overflow = "hidden";
    });

    pwd_password_close.addEventListener('click', ()=>{
        pwd_password_overlay.style.display = 'none';
        document.body.style.overflow = "auto";
    });

    pwd_password_submit.addEventListener('click', ()=>{
        main_pwd_password.value = overlay_pwd_password.value;
        pwd_password_overlay.style.display = 'none';
        document.body.style.overflow = "auto";
    });
//PWD Password functions end 

//script for showing and hiding password whenever the checkbox is clicked

    const showPassword = (passwordClass, checkbox, inputField) => {
        passwordClass.addEventListener('click',()=>{
            if(checkbox.checked == true){
                inputField.type = 'text';
            } else {
                inputField.type = 'password';
            }
        });
    };
    //Password Overlay checkbox
    showPassword(document.getElementById('showPclass'),document.getElementById('showP'),overlay_pwd_password);

//PWD Password Functions
    let pwd_confirm_password_overlay = document.getElementById('pwd-confirm-password-overlay');
    let pwd_confirm_password_close = document.getElementById('pwd-confirm-password-close');
    let overlay_pwd_confirm_password = document.getElementById('overlay-pwd-confirm-password');

    let main_pwd_confirm_password = document.getElementById('pwd-confirm-password');
    let pwd_confirm_password_submit = document.getElementById('pwd-confirm-password-submit');

    main_pwd_confirm_password.addEventListener('click', () => {
        main_pwd_confirm_password.blur();
        pwd_confirm_password_overlay.style.display = "flex";
        document.body.style.overflow = "hidden";
    });

    pwd_confirm_password_close.addEventListener('click', ()=>{
        pwd_confirm_password_overlay.style.display = 'none';
        document.body.style.overflow = "auto";
    });

    pwd_confirm_password_submit.addEventListener('click', ()=>{
        main_pwd_confirm_password.value = overlay_pwd_confirm_password.value;
        pwd_confirm_password_overlay.style.display = 'none';
        document.body.style.overflow = "auto";
    });

    //Confirm Password Overlay checkbox
    showPassword(document.getElementById('showConfirmclass'),document.getElementById('showConfirm'),overlay_pwd_confirm_password);
//PWD Password functions end