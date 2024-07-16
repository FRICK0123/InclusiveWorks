var loader = document.getElementById('preloader');
window.addEventListener("load",function(){
    loader.style.display = "none";
});
//Employer Dashboard Script
function dashboard(){
    document.getElementById('dashboard').submit();
}

function job_posting(){
    document.getElementById('job_postings').submit();
}

function applicants(){
    document.getElementById('applicants').submit();
}

function messages(){
    document.getElementById('messages').submit();
}

function about(){
    document.getElementById('about').submit();
}

function contact(){
    document.getElementById('contact').submit();
}

function logout(){
    document.getElementById('logout').submit();
}

//Dashboard Right Side
function view_job(formID){
    document.getElementById(formID).submit();
}