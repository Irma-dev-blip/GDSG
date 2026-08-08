<?php
$pageTitle = 'Home';
require __DIR__ . '/includes/functions.php';
require __DIR__ . '/includes/header.php';
?>
<section class="hero-section">
    <div class="container hero-container">
        <div class="hero-stage">
            <div class="hero-visual" id="home-three-visual" aria-hidden="true"></div>
            <div class="hero-panel">
                <div class="hero-badge" role="status">
                    <span class="hero-badge__dot" aria-hidden="true"></span>
                    <span>Global Data Observatory Active</span>
                </div>
                <h1>Advancing Geospatial Intelligence</h1>
                <p>Bridging Artificial Intelligence and Earth Observation to decode complex spatial dynamics, model environmental shifts, and engineer sustainable urban futures through rigorous scientific inquiry.</p>
                <div class="hero-actions">
                    <a href="research.php" class="btn btn-outline-secondary">Explore Research</a>
                    <a href="publications.php" class="btn btn-outline-secondary">View Publications</a>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
(function () {
    const container = document.getElementById('home-three-visual');
    if (!container || typeof THREE === 'undefined') {
        return;
    }

    const width = container.clientWidth || 900;
    const height = container.clientHeight || 600;
    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(55, width / height, 0.1, 1000);
    const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
    renderer.setPixelRatio(Math.min(window.devicePixelRatio || 1, 2));
    renderer.setSize(width, height);
    container.appendChild(renderer.domElement);

    const globeGroup = new THREE.Group();
    scene.add(globeGroup);

    const globeGeometry = new THREE.IcosahedronGeometry(1.8, 5);
    const globeMaterial = new THREE.MeshStandardMaterial({
        color: 0x1f7f4e,
        emissive: 0x3366e0,
        metalness: 0.15,
        roughness: 0.7,
        transparent: true,
        opacity: 0.9,
        wireframe: true
    });
    const globe = new THREE.Mesh(globeGeometry, globeMaterial);
    globeGroup.add(globe);

    const grid = new THREE.GridHelper(6, 18, 0xa6b3a8, 0x6c7a6f);
    grid.material.transparent = true;
    grid.material.opacity = 0.18;
    grid.rotation.x = Math.PI / 2;
    globeGroup.add(grid);

    const pointsGeometry = new THREE.BufferGeometry();
    const pointCount = 180;
    const positions = new Float32Array(pointCount * 3);
    for (let i = 0; i < pointCount; i += 1) {
        const theta = Math.random() * Math.PI * 2;
        const phi = Math.acos(2 * Math.random() - 1);
        const radius = 1.95 + Math.random() * 0.1;
        positions[i * 3] = radius * Math.sin(phi) * Math.cos(theta);
        positions[i * 3 + 1] = radius * Math.cos(phi);
        positions[i * 3 + 2] = radius * Math.sin(phi) * Math.sin(theta);
    }
    pointsGeometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));
    const pointsMaterial = new THREE.PointsMaterial({
        color: 0xd52f2f,
        size: 0.035,
        transparent: true,
        opacity: 0.9
    });
    const points = new THREE.Points(pointsGeometry, pointsMaterial);
    globeGroup.add(points);

    const ambientLight = new THREE.AmbientLight(0xffffff, 0.85);
    scene.add(ambientLight);
    const pointLight = new THREE.PointLight(0xffffff, 1.7);
    pointLight.position.set(4, 4, 6);
    scene.add(pointLight);

    camera.position.set(0, 0, 5.8);

    let mouseX = 0;
    let mouseY = 0;
    container.addEventListener('pointermove', (event) => {
        const rect = container.getBoundingClientRect();
        mouseX = ((event.clientX - rect.left) / rect.width) * 2 - 1;
        mouseY = -((event.clientY - rect.top) / rect.height) * 2 + 1;
    });

    function animate() {
        requestAnimationFrame(animate);
        globe.rotation.y += 0.002;
        points.rotation.y += 0.003;
        globeGroup.rotation.y += (mouseX * 0.16 - globeGroup.rotation.y) * 0.06;
        globeGroup.rotation.x += (mouseY * 0.14 - globeGroup.rotation.x) * 0.06;
        renderer.render(scene, camera);
    }

    window.addEventListener('resize', () => {
        const newWidth = container.clientWidth || 900;
        const newHeight = container.clientHeight || 600;
        camera.aspect = newWidth / newHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(newWidth, newHeight);
    });

    animate();
})();
</script>
<section class="content-section">
    <div class="container">
        <div class="section-heading">
            <h2>Core Domains</h2>
            <p>Methodological foundations for spatial intelligence</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4">
                <article class="info-card hover-reveal-accent">
                    <a class="btn btn-core-domain" href="#">psychology</a>
                    <h3>GeoAI</h3>
                    <p>Developing advanced machine learning architectures specialized for spatial datasets, topological neural networks, and generative modeling of geographic phenomena.</p>
                </article>
            </div>
            <div class="col-lg-4">
                <article class="info-card hover-reveal-accent">
                    <a class="btn btn-core-domain" href="#">public</a>
                    <h3>Earth Observation</h3>
                    <p>Processing multi-spectral satellite imagery and LiDAR data to monitor environmental change, track deforestation, and quantify urban sprawl dynamics.</p>
                </article>
            </div>
            <div class="col-lg-4">
                <article class="info-card hover-reveal-accent">
                    <a class="btn btn-core-domain" href="#">hub</a>
                    <h3>Spatial Analytics</h3>
                    <p>Leveraging geospatial statistics to model climate risk, urban systems, and environmental resilience with rigorous scientific methods.</p>
                </article>
            </div>
        </div>
    </div>
</section>
<section class="content-section content-section--muted">
    <div class="container">
        <div class="section-heading section-heading--split">
            <div>
                <h2>Featured Projects</h2>
                <p>Current initiatives shaping sustainable and data-driven urban futures.</p>
            </div>
            <a href="projects.php" class="btn btn-outline-secondary">View all projects</a>
        </div>
        <div class="row g-4">
            <div class="col-lg-6">
                <article class="project-card">
                    <img src="assets/images/Agriculture_area_under_flood_GDSG_map.jpg" alt="Agricultural flood impact map" class="project-card__media">
                    <div class="project-card__body">
                        <span class="project-pill">Grant Awarded</span>
                        <h3>Urban Heat Island Mitigation Modeling</h3>
                        <p>Applying spatiotemporal deep learning to support urban cooling strategies and greenhouse gas reduction planning.</p>
                        <a href="project.php">View project details</a>
                    </div>
                </article>
            </div>
            <div class="col-lg-6">
                <article class="project-card">
                    <img src="assets/images/Forest_fire_Severity_Murree_Kotli_Map.jpg" alt="Forest fire severity map" class="project-card__media">
                    <div class="project-card__body">
                        <span class="project-pill project-pill--accent">New</span>
                        <h3>Topological Neural Networks for Spatial Graphs</h3>
                        <p>Designing graph-based GeoAI models to interpret complex spatial relationships in infrastructure and environmental networks.</p>
                        <a href="project.php">View project details</a>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
<section class="content-section">
    <div class="container">
        <div class="newsletter-card">
            <div>
                <h2>Research Updates</h2>
                <p>Quarterly publications and methodological insights from the lab.</p>
            </div>
            <a href="news.php" class="btn btn-primary-custom">Read news</a>
        </div>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
