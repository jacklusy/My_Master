const signInBtnLink = document.querySelector('.signInBtn-link');
const signUpBtnLink = document.querySelector('.registerBtn-link');
const wrapper = document.querySelector('.form-wrapper');

signUpBtnLink.addEventListener('click', () => {
    wrapper.classList.toggle('active');
});

signInBtnLink.addEventListener('click', () => {
    wrapper.classList.toggle('active');
});

function white() {
document.getElementById('back_white').style.display="none";

}


function white2() {
    document.getElementById('back_white').style.display="block";
    
}