<div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
    <div class="member">
        <div class="member-img">
            <img src="{{ url('images') }}/{{ Auth::user()->foto }}" class="img-fluid" alt="">
            <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
        <div class="member-info">
            <h4>{{ Auth::user()->name }}</h4>
            <span>{{ Auth::user()->email }}</span>
        </div>
    </div>
</div>