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