<header>
    <div class="desktop d-none d-lg-flex">
        <div class="container">
            <div class="menu">
                <a href="/" class="header-logo"><img src="/images/365jobs.png" alt="logo"></a>

                <div class="navbar">
                    <a href="/positionspage" title="Positions">Positions</a>
                    <a href="/services" title="Services">Services</a>
                    <a href="/aboutuspage" title="About us">About us</a>
                    <a href="/newspage" title="News">News</a>
                    <a href="/contact" title="Contact">Contact</a>
                </div>

                <a href="/looking-for-applicants" class="primary-btn">I am an employer</a>
            </div>
        </div>
    </div>

    <div class="mobile d-flex d-lg-none" id="myMobile">
        <div class="container">
            <div class="menu">
                <a href="/" class="header-logo"><img src="/images/365jobs.png" alt="logo"></a>

                <button class="hamburger" id="burgerBtn">
                    <span class="bar1"></span>
                    <span class="bar2"></span>
                    <span class="bar3"></span>
                </button>
            </div>
        </div>

        <div class="sidebar">
            <div class="navbar">
                <a href="/positionspage" title="Positions">Positions</a>
                <a href="/services" title="Services">Services</a>
                <a href="/aboutuspage" title="About us">About us</a>
                <a href="/blog" title="News">News</a>
                <a href="/contact" title="Contact">Contact</a>
            </div>

            <a href="/looking-for-applicants-teliko" title="er" class="mobhead">Looking for applicants</a>
            <a href="#" title="er" class="mobhead transparent">Looking for a job</a>
        </div>
    </div>

</header>


<script>
    document.addEventListener("DOMContentLoaded", () => {
        //sticky-header
        window.addEventListener('scroll', () => {
            const stickyEls = document.querySelectorAll(".desktop, .mobile");

            if (sidebar.classList.contains("sidebar")){
                el.classList.remove('sticky');
            }

            stickyEls.forEach(el => {
                el.classList.toggle('sticky', window.scrollY > 3);
            });
        });

        //hamburger
        const hamburger = document.getElementById("burgerBtn");
        const sidebar = document.querySelector(".mobile .sidebar");

        hamburger.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            hamburger.classList.toggle("active");
        });

    });
</script>
