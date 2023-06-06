document.addEventListener('DOMContentLoaded', function() {
    const chmButton = document.getElementById('chmButton');
    const hamadaButton = document.getElementById('hamadaButton');
    const saindouButton = document.getElementById('saindouButton');
    const chmVideo = document.getElementById('chmVideo');
    const hamadaVideo = document.getElementById('hamadaVideo');
    const saindouVideo = document.getElementById('saindouVideo');
    const experienceCount = document.getElementById('experienceCount');
    const installationsCount = document.getElementById('installationsCount');
    const partnersCount = document.getElementById('partnersCount');
    const formationsCount = document.getElementById('formationsCount');
    const voirOffresButton = document.getElementById('voirOffresButton');


    let activeTab = 'CHM';
    setActiveTab()


    chmButton.addEventListener('click', function() {
        activeTab = 'CHM';
        setActiveTab();
    });

    hamadaButton.addEventListener('click', function() {
        activeTab = 'M. Hamada';
        setActiveTab();
    });

    saindouButton.addEventListener('click', function() {
        activeTab = 'M. Saindou';
        setActiveTab();
    });

    function setActiveTab() {
        chmButton.classList.remove('active');
        hamadaButton.classList.remove('active');
        saindouButton.classList.remove('active');

        if (activeTab === 'CHM') {
            chmButton.classList.add('active');
            chmVideo.style.display = 'block';
            hamadaVideo.style.display = 'none';
            saindouVideo.style.display = 'none';
        } else if (activeTab === 'M. Hamada') {
            hamadaButton.classList.add('active');
            chmVideo.style.display = 'none';
            hamadaVideo.style.display = 'block';
            saindouVideo.style.display = 'none';
        } else if (activeTab === 'M. Saindou') {
            saindouButton.classList.add('active');
            chmVideo.style.display = 'none';
            hamadaVideo.style.display = 'none';
            saindouVideo.style.display = 'block';
        }
    }

    const counters = [
        { value: 0, target: 25, increment: 1, interval: 100 },
        { value: 0, target: 320, increment: 5, interval: 40 },
        { value: 0, target: 158, increment: 3, interval: 40 },
        { value: 0, target: 9, increment: 1, interval: 100 }
    ];

    let isSectionVisible = false;

    window.addEventListener('scroll', checkSectionVisibility);

    function checkSectionVisibility() {
        const sectionTop = document.getElementById('section').offsetTop;
        const windowBottom = window.pageYOffset + window.innerHeight;

        if (windowBottom > sectionTop && !isSectionVisible) {
            isSectionVisible = true;
            startCountUpAnimation();
        }
    }

    function startCountUpAnimation() {
        const countIntervals = counters.map(counter => {
            return setInterval(() => {
                if (counter.value >= counter.target) {
                    clearInterval(countIntervals[counter.value]);
                    return;
                }

                counter.value += counter.increment;
                counter.value = counter.value > counter.target ? counter.target : counter.value;

                if (counter === counters[0]) {
                    experienceCount.textContent = counter.value;
                } else if (counter === counters[1]) {
                    installationsCount.textContent = counter.value;
                } else if (counter === counters[2]) {
                    partnersCount.textContent = counter.value;
                } else if (counter === counters[3]) {
                    formationsCount.textContent = counter.value;
                }
            }, counter.interval);
        });
    }
});