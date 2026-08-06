<?php
$currentPath = basename($_SERVER['SCRIPT_NAME']);
?>
<header class="site-header sticky-top shadow-sm bg-white">
    <nav class="navbar navbar-expand-lg navbar-light container py-3">
        <a class="navbar-brand navbar-brand fw-bold" href="index.php">GDSG</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#siteNavbar" aria-controls="siteNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="siteNavbar">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link<?php echo $currentPath === 'index.php' ? ' active' : ''; ?>" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link<?php echo $currentPath === 'about.php' ? ' active' : ''; ?>" href="about.php">About</a></li>
                <li class="nav-item"><a class="nav-link<?php echo $currentPath === 'research.php' ? ' active' : ''; ?>" href="research.php">Research</a></li>
                <li class="nav-item"><a class="nav-link<?php echo $currentPath === 'projects.php' ? ' active' : ''; ?>" href="projects.php">Projects</a></li>
                <li class="nav-item"><a class="nav-link<?php echo $currentPath === 'publications.php' ? ' active' : ''; ?>" href="publications.php">Publications</a></li>
                <li class="nav-item"><a class="nav-link<?php echo $currentPath === 'team.php' ? ' active' : ''; ?>" href="team.php">Team</a></li>
                <li class="nav-item"><a class="nav-link<?php echo $currentPath === 'news.php' ? ' active' : ''; ?>" href="news.php">News</a></li>
                <li class="nav-item"><a class="nav-link<?php echo $currentPath === 'gallery.php' ? ' active' : ''; ?>" href="gallery.php">Gallery</a></li>
                <li class="nav-item"><a class="nav-link<?php echo $currentPath === 'partners.php' ? ' active' : ''; ?>" href="partners.php">Partners</a></li>
                <li class="nav-item"><a class="nav-link<?php echo $currentPath === 'contact.php' ? ' active' : ''; ?>" href="contact.php">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>
