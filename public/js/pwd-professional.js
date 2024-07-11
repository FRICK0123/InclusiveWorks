//PWD Address Functions
    let pwd_address_overlay = document.getElementById('pwd-address-overlay');
    let pwd_address_close = document.getElementById('pwd-address-close');
    let overlay_pwd_address = document.getElementById('overlay-pwd-address');

    let main_pwd_address = document.getElementById('pwd-address');
    let pwd_address_submit = document.getElementById('pwd-address-submit');

    let region = document.getElementById('region');
    let city = document.getElementById('city');
    let province = document.getElementById('province');
    let barangay = document.getElementById('barangay');


    main_pwd_address.addEventListener('click', () => {
        main_pwd_address.blur();
        pwd_address_overlay.style.display = "flex";
        document.body.style.overflow = "hidden";
    });

    pwd_address_close.addEventListener('click', ()=>{
        pwd_address_overlay.style.display = 'none';
        document.body.style.overflow = "auto";
    });

    pwd_address_submit.addEventListener('click', ()=>{
        let selectedRegionOption = region.options[region.selectedIndex];
        let selectedProvinceOption = province.options[province.selectedIndex];
        let selectedCityOption = city.options[city.selectedIndex];
        let selectedBarangayOption = barangay.options[barangay.selectedIndex];
        let street = document.getElementById('street-text');

        main_pwd_address.value = `${selectedRegionOption.text}, ${selectedProvinceOption.text}, ${selectedCityOption.text}, ${selectedBarangayOption.text},${street.value}`;
        
        pwd_address_overlay.style.display = 'none';
        document.body.style.overflow = "auto";
    });

    main_pwd_address.addEventListener('keypress', () => {
        main_pwd_address.blur();
        pwd_address_overlay.style.display = "flex";
        document.body.style.overflow = "hidden";
    });

//PWD Address functions end

document.getElementById('pwd-register-return-btn').addEventListener('click',()=>{
    window.history.back();
});