<header>
    <nav class="main-nav">
        <div class="logo-container">
            <a href="index.php"><img class="logo" src="images/logo.png" alt="logo"></a>
        </div>

        <div id="nav-icon">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <div class="menu-container">
            <ul class="menu">
                <li class="navButton"><a href="#registration">Join Event</a></li>
                <li><a href="index.php">Home</a></li>
                <li><a href="EventDetails.php">Event Details</a></li>
                <li><a href="OurSpeakers.php">Our Speakers</a></li>
                <li><a href="OurTeam.php">Our Team</a></li>
            </ul>
        </div>
    </nav>
</header>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function(){
        $('#nav-icon').click(function(){
            $(this).toggleClass('open');
            $('.menu-container').toggleClass('show'); 
        });
    });
</script>
