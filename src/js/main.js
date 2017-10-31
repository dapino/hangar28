var mediaquery = window.matchMedia("(min-width: 728px)");
  

if (mediaquery.matches) {
    fullpage.initialize('#fullpage', {
        'scrollingSpeed': 1000,
        css3:true,
    });
    window.onwheel = function() {onWheelActions()};
    function onWheelActions() {
        //inicio
        if (document.getElementById("inicio").classList.contains('active')){
            document.getElementById("mainLogo").classList.remove('small')
            document.getElementById("car").classList.add('hide')
            document.getElementById("car").classList.add('dirty')
            document.getElementById("car").classList.add('dirty_1')
            document.getElementById("car").classList.remove('clean')
        } else {
            document.getElementById("car").classList.remove('hide')
            document.getElementById("mainLogo").classList.add('small')
        }
        //lavado
        if (document.getElementById("recibo").classList.contains('active')){
            document.getElementById("car").classList.add('dirty')
            document.getElementById("car").classList.add('dirty_1')
            document.getElementById("car").classList.remove('clean')
        }
        //lavado
        if (document.getElementById("lavado").classList.contains('active')){
            document.getElementById("car").classList.add('dirty')
            document.getElementById("car").classList.add('dirty_1')
            document.getElementById("car").classList.remove('clean')
        }
        //shampoo
        if (document.getElementById("shampoo").classList.contains('active')){
            document.getElementById("car").classList.remove('dirty')
            document.getElementById("car").classList.add('dirty_1')
            document.getElementById("car").classList.remove('clean')
        }
        //descontaminacion
        if (document.getElementById("descontaminacion").classList.contains('active')){
            document.getElementById("car").classList.remove('dirty_1')
            document.getElementById("car").classList.add('clean')
        }
        //brillo
        if (document.getElementById("brillo").classList.contains('active')){
            document.getElementById("car").classList.add('shining')
        } else {
            document.getElementById("car").classList.remove('shining')
        }
        //interior
        if (document.getElementById("interior").classList.contains('active')){
            document.getElementById("carNormal").classList.add('hidden')
            document.getElementById("carInterior").classList.remove('hidden')
        } else {
            document.getElementById("carInterior").classList.add('hidden')
        }
        //motor
        if (document.getElementById("motor").classList.contains('active')){
            document.getElementById("car").classList.add('zoom')
            document.getElementById("carNormal").classList.add('hidden')
            document.getElementById("carMotor").classList.remove('hidden')
            
        } else {
            document.getElementById("car").classList.remove('zoom')
            document.getElementById("carNormal").classList.remove('hidden')
            document.getElementById("carMotor").classList.add('hidden')
        }
        //reserva
        if (document.getElementById("reserva").classList.contains('active')){
            openContact()
            document.getElementById("car").classList.add('small')
        } else {
            document.getElementById("car").classList.remove('small')
        }
    }
} else {
    // mediaquery no es 600
}

var bookingButton = document.getElementsByClassName("bookingButton");
var contactSection = document.getElementById('contactSection');
var closeContactEl = document.getElementById('closeContact');
var overlay = document.getElementById("overlay");


var openContact = function() {
    overlay.classList.add('visible')
    contactSection.classList.add('visible')
};

var closeContact = function() {
    overlay.classList.remove('visible')
    contactSection.classList.remove('visible')
};

closeContactEl.addEventListener('click', closeContact, false) 

for (var i = 0; i < bookingButton.length; i++) {
    bookingButton[i].addEventListener('click', openContact, false);
}
