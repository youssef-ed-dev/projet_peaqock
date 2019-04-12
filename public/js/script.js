
var profileImg = document.getElementsByClassName('profileImg');
var containers = document.getElementsByClassName('container');
var profileClicked = false;
var images = [
    "url('http://saegus.com/wp-content/themes/saegus/public/js/parcours/assets/svg/candidat.svg')",
    "url('http://saegus.com/wp-content/themes/saegus/public/js/parcours/assets/svg/client.svg')",
    "url(http://saegus.com/wp-content/themes/saegus/public/js/parcours/assets/svg/media.svg)",
    "url(http://saegus.com/wp-content/themes/saegus/public/js/parcours/assets/svg/client.svg)",
    "url(http://saegus.com/wp-content/themes/saegus/public/js/parcours/assets/svg/candidat.svg)"
];

for(var i = 0 ; i < containers.length ; i++){
    containers[i].children[1].style.backgroundImage = images[i];
}
function test(event){
    profileClicked = true;
    var myDiv = document.getElementById(event.target.id);
    var parentContainer = myDiv.parentNode;
    if(!event.target.classList.contains('borderRadiusProfile')){
        for( var i = 1 ; i < 6 ; i++ ){
            var otherDivs = document.getElementById('pro-Cont'+i);
            if(otherDivs.classList.contains('borderRadiusProfile')){
                otherDivs.classList.remove('borderRadiusProfile');
                var otherParentContainer = otherDivs.parentNode;
                otherParentContainer.children[0].style.opacity= '0';
                otherParentContainer.children[2].style.opacity= '0';
                otherParentContainer.children[0].classList.remove('addMarginBottom');
                otherParentContainer.children[2].classList.remove('addMarginTop');
            }
        }
        myDiv.classList.add('borderRadiusProfile');
        parentContainer.children[0].style.opacity= '1';
        parentContainer.children[2].style.opacity= '1';
        parentContainer.children[0].classList.add('addMarginBottom');
        parentContainer.children[2].classList.add('addMarginTop');
    }
    if(profileClicked){
        document.getElementById('hidden_button').style.padding = '15px 20px';
        document.getElementById('hidden_button').innerHTML = 'Démarrer l’expérience ';
    }
}
function overTheProfile(event){
    var parentContainer = event.target.parentNode;
    parentContainer.children[0].classList.add('addOpacity');
    parentContainer.children[2].classList.add('addOpacity');
}
function leaveTheProfile(event){
    var parentContainer = event.target.parentNode;
    parentContainer.children[0].classList.remove('addOpacity');
    parentContainer.children[2].classList.remove('addOpacity')
}
