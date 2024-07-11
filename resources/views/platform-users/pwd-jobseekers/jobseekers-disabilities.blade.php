<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PWD Jobseekers Disabilities</title>

    <link rel="stylesheet" href="css/main-style.css">
    <link rel="stylesheet" href="css/pwd-register.css">

    <!--Bootstrap Links-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!--Bootstrap Links end-->
</head>

<body style="background-color:#E6F4F1;
;">

    <header>
        <nav>
            <!--Brand-->
            <a href="#" class="navbar-brand inclusive-brand ms-3" tabindex="1">InclusiveWorks</a>

            <!--Accessibility Tools Sidebar-->
            <div class="accessibility-tools text-center d-none d-lg-block sidebar" data-bs-toggle="offcanvas"
                data-bs-target="#accessibility-tools" aria-controls="accessibility-tools">
                <a href="#" class="nav-link">
                    <img src="images/icons/faders.svg" alt="Accessibility Tools Icon">
                    <p class="link-label">Accessibility Tools</p>
                </a>
            </div>

            <!--Menu Sidebar Homepage-->
            <div class="sidebar d-lg-none me-3 text-center" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <a href="#" class="nav-link">
                    <img src="images/icons/faders.svg" alt="Accessibility Tools Icon">
                    <p class="link-label">Menu</p>
                </a>
            </div>
        </nav>
    </header>

    <!--Accessibility Tools Sidebar Contents-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="accessibility-tools" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header d-flex justify-content-between">
            <h4 class="offcanvas-title fw-5" id="offcanvasExampleLabel">Accessibility Tools</h4>
            <div class="sidebar-close text-center">
                <button type="button" class="btn" data-bs-dismiss="offcanvas" aria-label="Close"><img
                        src="images/icons/x-circle.svg" alt="Close" width="50"></button>
                <p>Close</p>
            </div>
        </div>
        <div class="offcanvas-body p-0">
            <ul class="tools-lists">
                <!--Pointer-->
                <li class="container-fluid d-flex justify-content-between align-items-center" aria-label="Pointer"
                    id="pointer-list">
                    <h4 class="">Pointer</h4>
                    <label class="pointer-switch text-center">
                        <input type="checkbox" id="pointer">
                        <span class="slider round"></span>
                        <p id="pointer-off-on" class="mt-2">Off</p>
                    </label>
                </li>

                <!--Screen Reader-->
                <li class="container-fluid d-flex justify-content-between align-items-center" aria-label="Screen Reader"
                    id="screen-reader-list">
                    <h4 class="">Screen Reader</h4>
                    <label class="screen-reader-switch text-center">
                        <input type="checkbox" id="screen-reader">
                        <span class="slider round"></span>
                        <p id="screen-reader-off-on" class="mt-2">Off</p>
                    </label>
                </li>

                <!--Font Customization-->
                <li class="container-fluid d-flex justify-content-between align-items-center"
                    aria-label="Font Customization" id="font-custom-list">
                    <h4 class="">Font Customization</h4>
                    <label class="font-custom-switch text-center">
                        <input type="checkbox" id="font-custom">
                        <span class="slider round"></span>
                        <p id="font-custom-off-on" class="mt-2">Off</p>
                    </label>
                </li>

                <!--High Contrast-->
                <li class="container-fluid d-flex justify-content-between align-items-center"
                    aria-label="High Contrast Mode" id="high-contrast-list">
                    <h4 class="">High Contrast Mode</h4>
                    <label class="high-contrast-switch text-center">
                        <input type="checkbox" id="high-contrast">
                        <span class="slider round"></span>
                        <p id="high-contrast-off-on" class="mt-2">Off</p>
                    </label>
                </li>
            </ul>

        </div>
    </div>
    <!--Accessibility Tools Sidebar Contents End-->

    <!--Menu Sidebar Contents-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header d-flex justify-content-between">
            <h4 class="offcanvas-title fw-5" id="offcanvasExampleLabel">Accessibility Tools</h4>
            <div class="sidebar-close text-center">
                <button type="button" class="btn" data-bs-dismiss="offcanvas" aria-label="Close"><img
                        src="images/icons/x-circle.svg" alt="Close" width="50"></button>
                <p>Close</p>
            </div>
        </div>
        <div class="offcanvas-body p-0">
            <ul class="tools-lists">
                <!--Tools-->
                <!--Menu Pointer-->
                <li class="container-fluid d-flex justify-content-between align-items-center" aria-label="Pointer"
                    id="menu-pointer-list">
                    <h4 class="">Pointer</h4>
                    <label class="menu-pointer-switch text-center">
                        <input type="checkbox" id="menu-pointer">
                        <span class="slider round"></span>
                        <p id="menu-pointer-off-on" class="mt-2">Off</p>
                    </label>
                </li>

                <!--Menu Screen Reader-->
                <li class="container-fluid d-flex justify-content-between align-items-center" aria-label="Screen Reader"
                    id="menu-screen-reader-list">
                    <h4 class="">Screen Reader</h4>
                    <label class="menu-screen-reader-switch text-center">
                        <input type="checkbox" id="menu-screen-reader">
                        <span class="slider round"></span>
                        <p id="menu-screen-reader-off-on" class="mt-2">Off</p>
                    </label>
                </li>

                <!--Menu Font Customization-->
                <li class="container-fluid d-flex justify-content-between align-items-center" aria-label="Screen Reader"
                    id="menu-font-custom-list">
                    <h4 class="">Font Customization</h4>
                    <label class="menu-font-custom-switch text-center">
                        <input type="checkbox" id="menu-font-custom">
                        <span class="slider round"></span>
                        <p id="menu-font-custom-off-on" class="mt-2">Off</p>
                    </label>
                </li>

                <!--High Contrast-->
                <li class="container-fluid d-flex justify-content-between align-items-center"
                    aria-label="High Contrast Mode" id="menu-high-contrast-list">
                    <h4 class="">High Contrast Mode</h4>
                    <label class="menu-high-contrast-switch text-center">
                        <input type="checkbox" id="menu-high-contrast">
                        <span class="slider round"></span>
                        <p id="menu-high-contrast-off-on" class="mt-2">Off</p>
                    </label>
                </li>
            </ul>

        </div>
    </div>

    <!--Menu Sidebar Contents end-->
        <section class="container-fluid mt-3">
            <div class="disabilities-process-heading text-center d-flex flex-column justify-content-center">
                {{-- <form action="#" method="POST" class="align-self-start"> --}}
                    {{-- @csrf --}}
                    <div class="align-self-start">
                        <button class="btn btn-primary p-3 fw-bold" id="goback">Go Back</button>
                    </div>
                {{-- </form> --}}
                <h3>What kind of Disabilities do you have?</h3>
            </div>
            <form method="POST" action="{{route('jobseekers_disabilities_page_validation')}}">
                @csrf
                <!--First Row-->
                <div class="pwd-process row">
                    <div class="col-md-4 d-flex justify-content-center align-items-center mt-3">
                        <label for="visual" class="text-center disabilities-cards" id="visual-card">
                            <img src="images/icons/visual-white.svg" alt="Person With Disabilities Create Profile Icon"
                                width="80" class="img-fluid mt-3">
                            <h4 class="mt-5 text-white">Visual Impairment</h4>
                            <input type="radio" id="visual" class="d-none" name="disabilities">
                            <button class="btn btn-primary w-50 p-2 mt-3 fw-bold text-white d-none" id="visual-btn">Next</button>
                        </label>
                    </div>
                
                    <div class="col-md-4 d-flex justify-content-center align-items-center mt-3">
                        <label class="text-center disabilities-cards" id="mobility-card">
                            <img src="images/icons/mobility-white.svg" alt="Person With Disabilities Magnifying glass Icon" width="80"
                                class="img-fluid mt-3">
                            <h4 class="mt-5 text-white">Mobility Impairment</h4>
                            <input type="radio" id="mobility" class="d-none" name="disabilities">
                            <button class="btn btn-primary w-50 p-2 mt-3 fw-bold text-white d-none" id="mobility-btn">Next</button>
                        </label>
                    </div>
                
                    <div class="col-md-4 d-flex justify-content-center align-items-center mt-3">
                        <label class="text-center disabilities-cards" id="hearing-card"> 
                            <img src="images/icons/hearing-white.svg" alt="Person With Disabilities Funnel Icon" width="80"
                                class="img-fluid mt-3">
                            <h4 class="mt-5 text-white">Hearing Impairment</h4>
                            <input type="radio" id="hearing" class="d-none" name="disabilities">
                            <button class="btn btn-primary w-50 p-2 mt-3 fw-bold text-white d-none" id="hearing-btn">Next</button>
                        </label>
                    </div>
                </div>
                <!--Second Row-->
                <div class="pwd-process row mt-md-5">
                    <div class="col-md-6 d-flex justify-content-center  mt-3">
                        <label class="text-center disabilities-cards" id="speaking-card">
                            <img src="images/icons/speaking-white.svg" alt="Person With Disabilities Eye Icon" width="80"
                                class="img-fluid mt-3">
                            <h4 class="mt-5 text-white">Speaking Impairment</h4>
                            <input type="radio" id="speaking" class="d-none" name="disabilities">
                            <button class="btn btn-primary w-50 p-2 mt-3 fw-bold text-white d-none" id="speaking-btn">Next</button>
                        </label>
                    </div>
                
                    <div class="col-md-6 d-flex justify-content-center  mt-3">
                        <label class="text-center disabilities-cards" id="learning-card">
                            <img src="images/icons/learning-white.svg" alt="Person With Disabilities Bried Case Icon" width="80"
                                class="img-fluid mt-3">
                            <h4 class="mt-5 text-white">Learning Impairment</h4>
                            <input type="radio" id="learning" class="d-none" name="disabilities">
                            <button class="btn btn-primary w-50 p-2 mt-3 fw-bold text-white d-none" id="learning-btn">Next</button>
                        </label>
                    </div>

                    <input type="hidden" value="" id="input-data" name="pwd-disability">
            </form>
            </div>
        </section>
    <!--Main Content-->
    
    <!--Disabilities Checkbox-->
<script>
    const disabilities = (card, checkbox, card_input, card_value, btn) => {
        card.addEventListener('click', () => {
            // Check the radio button and set the input value
            checkbox.checked = true;
            card_input.value = card_value;

            // Reset all cards' styles
            document.querySelectorAll('.disabilities-cards').forEach(c => {
                c.style.backgroundColor = "#007BFF"; // Reset to default color
                c.querySelector('button').classList.add('d-none'); // Hide button
            });

            // Highlight the selected card
            card.style.backgroundColor = "#FFC107";
            card.querySelector('button').classList.remove('d-none');
        });
    };

    let visual_card = document.getElementById('visual-card');
    let visual = document.getElementById('visual');
    let input_data = document.getElementById('input-data');

    let mobility_card = document.getElementById('mobility-card');
    let mobility = document.getElementById('mobility');

    let hearing_card = document.getElementById('hearing-card');
    let hearing = document.getElementById('hearing');

    let speaking_card = document.getElementById('speaking-card');
    let speaking = document.getElementById('speaking');

    let learning_card = document.getElementById('learning-card');
    let learning = document.getElementById('learning');

    let visual_btn = document.getElementById('visual-btn');
    let mobility_btn = document.getElementById('mobility-btn');
    let hearing_btn = document.getElementById('hearing-btn');
    let speaking_btn = document.getElementById('speaking-btn');
    let learning_btn = document.getElementById('learning-btn');


    disabilities(visual_card, visual, input_data, "visual", visual_btn);
    disabilities(mobility_card, mobility, input_data, "mobility", mobility_btn);
    disabilities(hearing_card, hearing, input_data, "hearing", hearing_btn);
    disabilities(speaking_card, speaking, input_data, "speaking", speaking_btn);
    disabilities(learning_card, learning, input_data, "learning", learning_btn);

    document.getElementById('goback').addEventListener('click',()=>{
    window.history.back();
});

</script>




    <!--Javascript-->
    <script src="js/main-script.js"></script>


</body>

</html>