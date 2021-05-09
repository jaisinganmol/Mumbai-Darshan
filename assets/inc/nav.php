<!-- nav.php -->
<!-- This file is the menu-navigation used across all php files -->

<nav>

    <ul class="menu" id="menu-id">
        <li class="menu-item <?php if ($page == "home") {
                                    echo "active";
                                } else {
                                    echo "inactive";
                                } ?>"><a href="index.php">Home</a></li>
        <li class="menu-item <?php if ($page == "Mumbai Darshan") {
                                    echo "active";
                                } else {
                                    echo "inactive";
                                } ?>"><a href="about.php">About</a></li>
        <li class="menu-item <?php if ($page == "mumbai") {
                                    echo "active";
                                } else {
                                    echo "inactive";
                                } ?>"><a href="mumbai.php">Mumbai's Heritage</a></li>
        <li class="menu-item <?php if ($page == "school") {
                                    echo "active";
                                } else {
                                    echo "inactive";
                                } ?>"><a href="school.php">School</a></li>
        <li class="menu-item <?php if ($page == "family") {
                                    echo "active";
                                } else {
                                    echo "inactive";
                                } ?>"><a href="family.php">Family</a></li>
        <li class="menu-item <?php if ($page == "nature") {
                                    echo "active";
                                } else {
                                    echo "inactive";
                                } ?>"><a href="nature.php">Nature</a></li>
        <li class="menu-item <?php if ($page == "trains") {
                                    echo "active";
                                } else {
                                    echo "inactive";
                                } ?>"><a href="trains.php">Trains</a></li>
        <li class="menu-item <?php if ($page == "temples") {
                                    echo "active";
                                } else {
                                    echo "inactive";
                                } ?>"><a href="temples.php">Temples</a></li>
        <li class="menu-item <?php if ($page == "food") {
                                    echo "active";
                                } else {
                                    echo "inactive";
                                } ?>"><a href="food.php">Food</a></li>
        <li class="menu-item <?php if ($page == "sports") {
                                    echo "active";
                                } else {
                                    echo "inactive";
                                } ?>"><a href="sports.php">Sports</a></li>
        <li class="menu-item <?php if ($page == "commentsForm") {
                                    echo "active";
                                } else {
                                    echo "inactive";
                                } ?>"><a href="commentsForm.php">Contact Page</a></li>
        <li class="menu-item <?php if ($page == "documentation") {
                                    echo "active";
                                } else {
                                    echo "inactive";
                                } ?>"><a href="documentation.php">Documentation</a></li>
        <li class="menu-item <?php if ($page == "references") {
                                    echo "active";
                                } else {
                                    echo "inactive";
                                } ?>"><a href="references.php">References</a></li>
        <li class="menu-item inactive mobile-only" onclick="closemenu();"><a href=""><i class="las la-angle-up"></i> Close Menu</a></li>
    </ul>
</nav>