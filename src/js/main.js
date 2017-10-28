fullpage.initialize('#fullpage', {
    'scrollingSpeed': 1000,
    css3:true,
});


window.onwheel = function() {onWheelActions()};

function onWheelActions() {
    

//inicio
    if (document.getElementById("inicio").classList.contains('active')){
        document.getElementById("car").classList.add('hide')
        document.getElementById("car").classList.add('dirty')
        document.getElementById("car").classList.add('dirty_1')
        document.getElementById("mainLogo").classList.remove('small')

    } else {
        document.getElementById("car").classList.remove('hide')
        document.getElementById("mainLogo").classList.add('small')
    }
//lavado
    if (document.getElementById("recibo").classList.contains('active')){
        document.getElementById("car").classList.add('dirty')
        document.getElementById("car").classList.add('dirty_1')
    }
//lavado
    if (document.getElementById("lavado").classList.contains('active')){
        document.getElementById("car").classList.add('dirty')
        document.getElementById("car").classList.add('dirty_1')
    }
//shampoo
    if (document.getElementById("shampoo").classList.contains('active')){
        document.getElementById("car").classList.remove('dirty')
    }
//descontaminacion
    if (document.getElementById("descontaminacion").classList.contains('active')){
        document.getElementById("car").classList.remove('dirty_1')
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
}