<section id="banner">
    <div class="slide active" style="background-image: url('./media/banner1.jpg');"></div>
    <div class="slide" style="background-image: url('./media/banner2.jpg');"></div>
    <div class="slide" style="background-image: url('./media/banner3.jpg');"></div>

    <div class="banner-content">
        <p>Tous vos Films & Series dans une seule plateforme</p>
    </div>
</section>

<script>
    const slides = document.querySelectorAll('#banner .slide');
    let current = 0;

    setInterval(() => {
        slides[current].classList.remove('active');
        current = (current + 1) % slides.length;
        slides[current].classList.add('active');  
    }, 10000); // change les slides toutes les 10 secondes
</script>

    
