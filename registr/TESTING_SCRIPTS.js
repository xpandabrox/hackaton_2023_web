let login = document.querySelector('#login');
let password = document.querySelector('#password');
let submit = document.querySelector('#submit');

let users={};

function User(login,password){
    this.login = login;
    this.password = password;
}

function createId(users){
    return Object.keys(users).length;
}


submit.addEventListener('click', () => {
    const loginUser = login.value;
    const passwordUser = password.value;

    const user = new User(loginUser,passwordUser);

    const userId = 'User' + createId(users);

    users[userId]= user;

    console.log(users);

})

function Test(play_state){
    var elem = document.getElementById('Main__div');
    elem.style.animationName = 'Reg';
    // elem.style.animationPlayState = play_state;
    elem.style.animationTimingFunction='cubic-bezier(0, 0.43, 0.02, 1.09)';
    elem.style.animationDuration = '1s';
    elem.style.animationFillMode='forwards';
}
function POD(play_state){
    var elem = document.getElementById('Main__div');
    elem.style.animationName = 'Reg_revers';
    // elem.style.animationPlayState = play_state;
    elem.style.animationTimingFunction = 'cubic-bezier(1, 0.03, 1, 0.04)';
    elem.style.animationDuration = '1s';
    elem.style.animationFillMode='forwards';
}
// document.getElementById('elem').style.backgroundColor = '#FF0000';
// cubic-bezier(0.95,-0.71, 1,-0.51)