import app from 'flarum/forum/app';

export default function () {

    const slider = document.querySelector('.slides');
    if (slider === null) return;
    let isDown = false;
    let startX;
    let scrollLeft;
    
    slider.addEventListener('mousedown', (e) => {
      isDown = true;
      slider.classList.add('active');
      startX = e.pageX - slider.offsetLeft;
      scrollLeft = slider.scrollLeft;
    });
    slider.addEventListener('mouseleave', () => {
      isDown = false;
      slider.classList.remove('active');
    });
    slider.addEventListener('mouseup', () => {
      isDown = false;
      slider.classList.remove('active');
    });
    slider.addEventListener('mousemove', (e) => {
      if(!isDown) return;
      e.preventDefault();
      const x = e.pageX - slider.offsetLeft;
      const walk = (x - startX) * 3; //scroll-sensitivity/speed
      slider.scrollLeft = scrollLeft - walk;
    });

    document.addEventListener('mouseup', function(e) {
        let container = document.getElementById('si');
        if (container === null) return;
        if (!container.contains(e.target)) {
            container.style.visibility = 'hidden';
        }
    });

}