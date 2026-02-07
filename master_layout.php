<?php
/*
 * Mechanical Keyboard Blog - Master Layout
 * This file serves as the main template. 
 */

// Default values for the template variables
if (!isset($page_title)) {
    $page_title = "KeebKustoms | Mechanical Keyboard Guide Malaysia";
}

// SEO: Default Meta Description (Fallback)
if (!isset($meta_description)) {
    $meta_description = "The ultimate guide to mechanical keyboard customisation in Malaysia. Learn about switches, keycaps, sourcing parts in KL, and building custom boards.";
}

if (!isset($page_content)) {
    $page_content = '<div class="empty-state"><h2>No Content</h2></div>';
}

// --- AUTOMATIC URL GENERATION FOR SEO ---
// 1. Detect the base URL (http://localhost or https://yourdomain.com)
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$base_url = "$protocol://$host";

// 2. Generate Full Image URL if path is provided
$hero_image_full_url = ""; 
if (isset($hero_image_path) && !empty($hero_image_path)) {
    // Remove leading slash to prevent double slashes
    $hero_image_full_url = $base_url . '/' . ltrim($hero_image_path, '/');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Meta Tags -->
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($meta_description); ?>">
    
    <!-- Geo-targeting Meta Tags for Local SEO (Malaysia) -->
    <meta name="geo.region" content="MY">
    <meta name="geo.placename" content="Malaysia">
    <meta name="geo.position" content="4.2105;101.9758">
    <meta name="ICBM" content="4.2105, 101.9758">

    <!-- Open Graph / Social Media Meta Tags (Auto-Generated) -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $base_url . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($meta_description); ?>">
    <?php if ($hero_image_full_url): ?>
    <meta property="og:image" content="<?php echo $hero_image_full_url; ?>">
    <?php endif; ?>

    <!-- JSON-LD Structured Data Injection -->
    <?php if (isset($json_ld_data) && is_array($json_ld_data)): ?>
        <?php 
        // Automatically inject the hero image into the schema if it's missing
        if ($hero_image_full_url && !isset($json_ld_data['image'])) {
            $json_ld_data['image'] = [$hero_image_full_url];
        }
        ?>
    <script type="application/ld+json">
    <?php echo json_encode($json_ld_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>
    </script>
    <?php endif; ?>
    
    <!-- Using Inter font for a clean, technical look -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">

    <style>
        /* --- CSS VARIABLES & RESET --- */
        :root {
            /* Palette: Dark Mode / Synthwave / Cyberpunk inspired */
            --bg-body: #121212;
            --bg-panel: #1e1e1e;
            --bg-header: #181818;
            --text-main: #e0e0e0;
            --text-muted: #a0a0a0;
            --accent-primary: #00e5ff; /* Cyan switch stem color */
            --accent-secondary: #ff0055; /* Red/Pink modifier color */
            --border-color: #333333;
            --font-main: 'Inter', sans-serif;
            --font-mono: 'JetBrains Mono', monospace; /* For tech specs */
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: var(--font-main);
            background-color: var(--bg-body);
            color: var(--text-main);
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: color 0.2s ease;
        }

        ul {
            list-style: none;
        }

        /* --- HEADER & NAVIGATION --- */
        header {
            background-color: var(--bg-header);
            border-bottom: 1px solid var(--border-color);
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 4px 6px rgba(0,0,0,0.3);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            font-family: var(--font-mono);
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--text-main);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo span {
            color: var(--accent-primary);
        }

        .logo:hover {
            color: var(--accent-primary);
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            font-weight: 600;
            font-size: 0.95rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            padding: 5px 0;
            position: relative;
        }

        .nav-links a:hover {
            color: var(--text-main);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--accent-secondary);
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        /* --- MAIN CONTENT AREA --- */
        .main-wrapper {
            flex: 1; /* Pushes footer down */
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
            padding: 40px 20px;
        }

        /* Breadcrumbs style for blog depth */
        .breadcrumbs {
            font-family: var(--font-mono);
            font-size: 0.85rem;
            color: var(--text-muted);
            margin-bottom: 20px;
        }
        
        .breadcrumbs span {
            color: var(--accent-primary);
        }

        /* --- FOOTER --- */
        footer {
            background-color: var(--bg-header);
            border-top: 1px solid var(--border-color);
            padding: 40px 20px;
            margin-top: auto;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
        }

        .footer-col h4 {
            color: var(--text-main);
            margin-bottom: 20px;
            font-size: 1.1rem;
            border-left: 3px solid var(--accent-primary);
            padding-left: 10px;
        }

        .footer-col ul li {
            margin-bottom: 10px;
        }

        .footer-col ul li a:hover {
            color: var(--accent-primary);
            padding-left: 5px; /* Subtle movement */
        }

        .copyright {
            text-align: center;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #333;
            color: var(--text-muted);
            font-size: 0.9rem;
        }

        /* --- UTILITY / DEMO CLASSES --- */
        /* These are just to make the empty state look okay */
        .empty-state {
            border: 2px dashed var(--border-color);
            border-radius: 8px;
            padding: 50px;
            text-align: center;
            color: var(--text-muted);
            background-color: rgba(255,255,255, 0.02);
        }

        /* Mobile Menu Button (Hidden on Desktop) */
        .menu-toggle {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--text-main);
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 768px) {
            .nav-links {
                display: none; /* In a real app, you'd add JS to toggle this */
            }
            .menu-toggle {
                display: block;
            }
            .footer-content {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <header>
        <div class="nav-container">
            <a href="index.php" class="logo">
                Keeb<span>Kustoms</span>
            </a>
            
            <nav class="nav-links">
                <a href="index.php">Home</a>
                <a href="beginners_guide.php">Guide</a>
                <a href="keyboard_switches_guide.php">Switches</a>
                <a href="keycaps_guide.php">Keycaps</a>
            </nav>

            <div class="menu-toggle">☰</div>
        </div>
    </header>

    <!-- Main Content Injection -->
    <main class="main-wrapper">
        <?php 
        // Optional Breadcrumb output
        if (isset($show_breadcrumbs) && $show_breadcrumbs === true) {
            echo '<div class="breadcrumbs"><a href="index.php">Home</a> / <span>Current Page</span></div>';
        }
        ?>

        <!-- Dynamic Content Output -->
        <?php echo $page_content; ?>
        
    </main>

    <!-- Footer Section -->
    <footer>
        <div class="footer-content">
            <div class="footer-col">
                <h4>About KeebKustoms</h4>
                <p style="color: var(--text-muted); font-size: 0.9rem;">
                    The leading hub for mechanical keyboard customisation in Malaysia. 
                    From sourcing parts in KL to soldering PCBs, we help the local community build their dream boards.
                </p>
            </div>
            <div class="footer-col">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="beginners_guide.php">Beginner's Guide</a></li>
                    <li><a href="keyboard_switches_guide.php">Guide to Switches</a></li>
                    <li><a href="keycaps_guide.php">Types of Keycaps</a></li>
                    <li><a href="vendor_list.php">Vendor List (MY)</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Community</h4>
                <ul>
                    <li><a href="https://discord.com/">Discord Server</a></li>
                    <li><a href="https://www.reddit.com/r/MechanicalKeyboards/">Reddit /r/mk</a></li>
                    <li><a href="https://www.instagram.com/">Instagram</a></li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            &copy; <?php echo date("Y"); ?> KeebKustoms. All rights reserved. 
            <span style="color: var(--accent-secondary)">Click Clack.</span>
        </div>
    </footer>
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-T5JKHQ4ZSD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        
        gtag('config', 'G-T5JKHQ4ZSD');
    </script>
</body>
</html>