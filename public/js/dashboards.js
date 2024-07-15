//Onloader Script for Loading Screen Animation
var loader = document.getElementById('preloader');
window.addEventListener("load",function(){
    loader.style.display = "none";
});

//Profile Update
        document.getElementById('profile-pic').addEventListener('change', function (event) {
            const file = event.target.files[0];
            if (file) {
                const fileType = file.type;
                const validImageTypes = ['image/jpeg', 'image/png'];

                if (!validImageTypes.includes(fileType)) {
                    alert('Only JPG and PNG files are allowed.');
                    return;
                }

                const reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById('edit-profile-img').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });

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
