<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<footer class="footer-distributed">

    <div class="footer-left">
        <h3>Matri<span>Nepal</span></h3>

        <p class="footer-links">
            <a href="
        <?php
        if (isset($_SESSION['name'])) {
            echo "index2.php";
        } else {
            echo "index.php";
        }
        ?>
        ">Home</a>
            |
            <a href=" <?php
                        if (isset($_SESSION['name'])) {
                            echo "match.php";
                        } else {
                            echo "packages.php";
                        }
                        ?>">

                <?php
                if (isset($_SESSION['name'])) {
                    echo "Find Match";
                } else {
                    echo "Packages";
                }
                ?></a>
            |
            <a href="contact.php">Contact Us</a>

        </p>

        <p class="footer-company-name">Copyright © 2023 <strong>Gambhir Poudel</strong> All rights reserved</p>
    </div>

    <div class="footer-center">
        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>Hetauda</span>
                Bagmati Pradesh, Nepal</p>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p>+977 98225622566</p>
        </div>
        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:matrinepal@gmail.com">matrinepal@gmail.com</a></p>
        </div>
    </div>
    <div class="footer-right">
        <p class="footer-company-about">
            <span>About the company</span>
            <strong>MatriNepal</strong>
            where dreams find their perfect match. With a vast network of eligible singles,
            personalized matchmaking services, and a commitment to creating lasting unions,
            we empower individuals to embark on their journey towards lifelong companionship.
            Join us and let love lead the way.
        </p>
        <div class="footer-icons">
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa fa-envelope"></i></a>
        </div>
    </div>
</footer>
