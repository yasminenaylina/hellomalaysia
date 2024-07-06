let text = document.getElementById('text');
let cloudLeft = document.getElementById('cloud-left');
let cloudRight = document.getElementById('cloud-right');
let wayangLeft = document.getElementById('wayang-left');
let wayangRight = document.getElementById('wayang-right');



window.addEventListener('scroll',() => {
    let value = window.scrollY;

    text.style.marginTop = value * 2.5 + 'px';
    cloudLeft.style.left = value * -1.5 + 'px';
    cloudRight.style.left = value * 1.5 + 'px';
    wayangLeft.style.left = value * 0.5 + 'px';
    wayangRight.style.left = value * -0.5 + 'px';

})



function smoothScroll(event, targetId) {
    event.preventDefault();
    
    const targetElement = document.getElementById(targetId);
    if (targetElement) {
        window.scrollTo({
            top: targetElement.offsetTop,
            behavior: 'smooth'
        });
    }
}


document.getElementById('discover-perlis').addEventListener('click', function() {
    var slideUp = document.createElement('div');
    slideUp.classList.add('slide-up');
    document.body.appendChild(slideUp);

    setTimeout(function() {
        slideUp.classList.add('active');
    }, 10);

    setTimeout(function() {
        window.location.href = 'php/perlis.php';
    }, 500); 
});


document.getElementById('discover-penang').addEventListener('click', function() {
    var slideUp = document.createElement('div');
    slideUp.classList.add('slide-up');
    document.body.appendChild(slideUp);

    setTimeout(function() {
        slideUp.classList.add('active');
    }, 10);

    setTimeout(function() {
        window.location.href= 'php/penang.php';
    }, 500);
});


document.getElementById('discover-johor').addEventListener('click', function() {
    var slideUp = document.createElement('div');
    slideUp.classList.add('slide-up');
    document.body.appendChild(slideUp);

    setTimeout(function() {
        slideUp.classList.add('active');
    }, 10);

    setTimeout(function() {
        window.location.href = 'php/johor.php';
    }, 500); 
});

document.getElementById('discover-kedah').addEventListener('click', function() {
    var slideUp = document.createElement('div');
    slideUp.classList.add('slide-up');
    document.body.appendChild(slideUp);

    setTimeout(function() {
        slideUp.classList.add('active');
    }, 10);

    setTimeout(function() {
        window.location.href = 'php/kedah.php';
    }, 500); 
});

document.getElementById('discover-kelantan').addEventListener('click', function() {
    var slideUp = document.createElement('div');
    slideUp.classList.add('slide-up');
    document.body.appendChild(slideUp);

    setTimeout(function() {
        slideUp.classList.add('active');
    }, 10);

    setTimeout(function() {
        window.location.href = 'php/kelantan.php';
    }, 500); 
});

document.getElementById('discover-melaka').addEventListener('click', function() {
    var slideUp = document.createElement('div');
    slideUp.classList.add('slide-up');
    document.body.appendChild(slideUp);

    setTimeout(function() {
        slideUp.classList.add('active');
    }, 10);

    setTimeout(function() {
        window.location.href = 'php/melaka.php';
    }, 500); 
});

document.getElementById('discover-negerisembilan').addEventListener('click', function() {
    var slideUp = document.createElement('div');
    slideUp.classList.add('slide-up');
    document.body.appendChild(slideUp);

    setTimeout(function() {
        slideUp.classList.add('active');
    }, 10);

    setTimeout(function() {
        window.location.href = 'php/negeri-sembilan.php';
    }, 500); 
});

document.getElementById('discover-pahang').addEventListener('click', function() {
    var slideUp = document.createElement('div');
    slideUp.classList.add('slide-up');
    document.body.appendChild(slideUp);

    setTimeout(function() {
        slideUp.classList.add('active');
    }, 10);

    setTimeout(function() {
        window.location.href = 'php/pahang.php';
    }, 500); 
});

document.getElementById('discover-perak').addEventListener('click', function() {
    var slideUp = document.createElement('div');
    slideUp.classList.add('slide-up');
    document.body.appendChild(slideUp);

    setTimeout(function() {
        slideUp.classList.add('active');
    }, 10);

    setTimeout(function() {
        window.location.href = 'php/perak.php';
    }, 500); 
});

document.getElementById('discover-sabah').addEventListener('click', function() {
    var slideUp = document.createElement('div');
    slideUp.classList.add('slide-up');
    document.body.appendChild(slideUp);

    setTimeout(function() {
        slideUp.classList.add('active');
    }, 10);

    setTimeout(function() {
        window.location.href = 'php/sabah.php';
    }, 500); 
});

document.getElementById('discover-sarawak').addEventListener('click', function() {
    var slideUp = document.createElement('div');
    slideUp.classList.add('slide-up');
    document.body.appendChild(slideUp);

    setTimeout(function() {
        slideUp.classList.add('active');
    }, 10);

    setTimeout(function() {
        window.location.href = 'php/sarawak.php';
    }, 500); 
});

document.getElementById('discover-selangor').addEventListener('click', function() {
    var slideUp = document.createElement('div');
    slideUp.classList.add('slide-up');
    document.body.appendChild(slideUp);

    setTimeout(function() {
        slideUp.classList.add('active');
    }, 10);

    setTimeout(function() {
        window.location.href = 'php/selangor.php';
    }, 500); 
});

document.getElementById('discover-terengganu').addEventListener('click', function() {
    var slideUp = document.createElement('div');
    slideUp.classList.add('slide-up');
    document.body.appendChild(slideUp);

    setTimeout(function() {
        slideUp.classList.add('active');
    }, 10);

    setTimeout(function() {
        window.location.href = 'php/terengganu.php';
    }, 500); 
});

document.getElementById('discover-kl').addEventListener('click', function() {
    var slideUp = document.createElement('div');
    slideUp.classList.add('slide-up');
    document.body.appendChild(slideUp);

    setTimeout(function() {
        slideUp.classList.add('active');
    }, 10);

    setTimeout(function() {
        window.location.href = 'php/kl.php';
    }, 500); 
});

document.getElementById('discover-labuan').addEventListener('click', function() {
    var slideUp = document.createElement('div');
    slideUp.classList.add('slide-up');
    document.body.appendChild(slideUp);

    setTimeout(function() {
        slideUp.classList.add('active');
    }, 10);

    setTimeout(function() {
        window.location.href = 'php/labuan.php';
    }, 500); 
});

document.getElementById('discover-putrajaya').addEventListener('click', function() {
    var slideUp = document.createElement('div');
    slideUp.classList.add('slide-up');
    document.body.appendChild(slideUp);

    setTimeout(function() {
        slideUp.classList.add('active');
    }, 10);

    setTimeout(function() {
        window.location.href = 'php/putrajaya.php';
    }, 500); 
});