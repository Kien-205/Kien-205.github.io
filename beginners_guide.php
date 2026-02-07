<?php
/*
 * Beginner's Guide Page
 * File: beginners_guide.php
 */

// 1. SEO Configuration
$page_title = "The Ultimate Beginner's Guide to Custom Mechanical Keyboards (2025)";
$meta_description = "Learn how to build your first custom mechanical keyboard. A complete guide covering switches, form factors (60%, TKL), keycaps, and sourcing parts in Malaysia.";
$show_breadcrumbs = true;

// SEO IMAGE SETTINGS
// Just set the path here. Master Layout will handle the full URL and OG tags.
$hero_image_path = "images/gradient_mechanical_keyboard_aesthetic.png"; 

// STRUCTURAL DATA (JSON-LD)
// Define the data here as an array. Master Layout will inject the image URL and create the script.
$json_ld_data = [
    "@context" => "https://schema.org",
    "@type" => "Article",
    "headline" => "The Ultimate Beginner's Guide to Custom Mechanical Keyboards",
    // "image" is automatically added by master_layout using $hero_image_path
    "datePublished" => date('c'),
    "author" => [
        "@type" => "Person",
        "name" => "KeebKustoms Team"
    ],
    "description" => $meta_description,
    "articleBody" => "So, you’ve heard the thock, seen the colorful setups on Instagram, and decided it’s time to ditch that membrane office keyboard...",
    "audience" => [
        "@type" => "Audience",
        "audienceType" => "Tech Enthusiasts, Gamers, Typists"
    ]
];

// 2. Start Content Buffering
ob_start();
?>

<!-- Specific Styles for the Blog Post -->
<style>
    .blog-container {
        display: grid;
        grid-template-columns: 1fr 300px; /* Content | Sidebar */
        gap: 40px;
    }

    /* Typography & Readability */
    .article-content {
        font-size: 1.1rem;
        color: #d0d0d0;
    }

    .article-content h2 {
        color: var(--text-main);
        font-size: 2rem;
        margin-top: 50px;
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 1px solid var(--border-color);
    }

    .article-content h3 {
        color: var(--accent-primary);
        font-size: 1.5rem;
        margin-top: 30px;
        margin-bottom: 15px;
    }

    .article-content p {
        margin-bottom: 20px;
        line-height: 1.8;
    }

    .article-content ul {
        margin-bottom: 20px;
        padding-left: 20px;
        list-style: disc;
    }
    
    .article-content li {
        margin-bottom: 10px;
    }

    /* Images */
    figure {
        margin: 30px 0;
        background: var(--bg-panel);
        padding: 10px;
        border-radius: 8px;
        border: 1px solid var(--border-color);
    }

    figure img {
        width: 100%;
        height: auto;
        border-radius: 4px;
        display: block;
    }

    figcaption {
        text-align: center;
        font-size: 0.9rem;
        color: var(--text-muted);
        margin-top: 10px;
        font-style: italic;
    }

    /* Sticky Sidebar / Table of Contents */
    .sidebar {
        position: relative;
    }

    .toc-widget {
        position: sticky;
        top: 100px; /* Below header */
        background: var(--bg-panel);
        padding: 20px;
        border-radius: 8px;
        border: 1px solid var(--border-color);
    }

    .toc-widget h4 {
        margin-bottom: 15px;
        color: var(--accent-primary);
        text-transform: uppercase;
        font-size: 0.9rem;
        letter-spacing: 1px;
    }

    .toc-list {
        list-style: none;
        padding: 0;
    }

    .toc-list li {
        margin-bottom: 10px;
    }

    .toc-list a {
        color: var(--text-muted);
        font-size: 0.95rem;
        text-decoration: none;
        transition: color 0.2s;
        display: block;
        padding-left: 10px;
        border-left: 2px solid transparent;
    }

    .toc-list a:hover {
        color: var(--text-main);
        border-left-color: var(--accent-secondary);
    }

    /* Mobile Responsive */
    @media (max-width: 900px) {
        .blog-container {
            grid-template-columns: 1fr;
        }
        .toc-widget {
            position: static; /* Unstick on mobile */
            margin-bottom: 30px;
        }
    }
</style>

<div class="blog-container">
    
    <!-- Main Article -->
    <article class="article-content">
        <h1>The Ultimate Beginner's Guide to Custom Mechanical Keyboards</h1>
        <p class="intro">
            So, you’ve heard the "thock", seen the colorful setups on Instagram, and decided it’s time to ditch that membrane office keyboard. Welcome to the rabbit hole. Building a custom mechanical keyboard is one of the most rewarding tech hobbies out there.
        </p>

        <!-- Use the local path variable here -->
        <!-- Ideally add specific width/height attributes to prevent layout shift (CLS) for SEO -->
        <img src="<?php echo $hero_image_path; ?>" alt="Black and White Gradient Custom Mechanical Keyboard on a desk" style="width:100%; border-radius:8px; margin-bottom:30px;">

        <h2 id="anatomy">1. The Anatomy of a Keyboard</h2>
        <p>Before you buy anything, you need to understand what goes inside. A custom board isn't just one piece; it's a sandwich of components.</p>
        
        <ul>
            <li><strong>Case:</strong> The housing. Can be plastic (ABS/Polycarbonate) or metal (Aluminum). It defines the weight and sound pitch.</li>
            <li><strong>PCB (Printed Circuit Board):</strong> The brain. <em>Hot-swap</em> PCBs allow you to plug switches in like Lego. <em>Solder</em> PCBs require tools.</li>
            <li><strong>Plate:</strong> Holds the switches in place. Materials like Brass (stiff, high pitch) or POM/Polycarbonate (flexible, deep sound) change the feel.</li>
            <li><strong>Stabilizers (Stabs):</strong> Essential for big keys (Spacebar, Enter). Bad stabs rattle; good stabs are silent.</li>
        </ul>

        <h2 id="sizes">2. Choosing Your Form Factor</h2>
        <p>Size matters. Do you need a number pad for Excel? Or do you want more mouse space for gaming?</p>

        <figure>
            <img src="images/mechanical_keyboard_layout_75.png" alt="75% Mechanical Keyboard Layout Diagram" style="width:100%; height:auto; border-radius:4px; display:block;">
            <figcaption>The 75% layout (shown here) is currently the most popular balance of size and function.</figcaption>
        </figure>

        <h3>60% Layout</h3>
        <p>No F-row, no arrows, no numpad. Extremely compact. You access missing keys using layers (like holding Function + 1 for F1).</p>

        <h3>65% & 75% Layouts</h3>
        <p>The sweet spot. You get arrow keys and (on 75%) the Function row, but it's still much smaller than a standard keyboard.</p>

        <h3>Tenkeyless (TKL) Layout</h3>
        <p>The standard layout minus the number pad. It retains the separate navigation cluster (Home, End, Arrows) and F-row. A classic choice for those who want a traditional feel without the bulk.</p>

        <h3>Full Size Layout (100%)</h3>
        <p>The traditional 104-key layout you grew up with. Includes the number pad. Essential for heavy data entry or productivity work, but it takes up a lot of desk real estate.</p>

        <h2 id="switches">3. Switches: The Heart of the Feel</h2>
        <p>This is the most subjective part. Switches are generally color-coded:</p>
        <ul>
            <li><strong>Linear (Red/Black/Yellow):</strong> Smooth straight down. No bump. Preferred by gamers.</li>
            <li><strong>Tactile (Brown/Clear/Holy Panda):</strong> A physical "bump" halfway down. Great for typing feedback.</li>
            <li><strong>Clicky (Blue/Green):</strong> A bump accompanied by a loud click. Love it or hate it.</li>
        </ul>

        <h2 id="sourcing">4. Where to Buy (Malaysia & Global)</h2>
        <p>Finding parts can be tricky. Here is how to navigate the market.</p>
        
        <h3>Global Vendors</h3>
        <p>Sites like KBDfans, CannonKeys, and NovelKeys are staples in the community. However, shipping fees can add up.</p>

        <h3>Sourcing in Malaysia (MY)</h3>
        <p>We are lucky to have a thriving local scene. To save on shipping and taxes, check out these local options:</p>
        <ul>
            <li><strong>Shopee/Lazada:</strong> Great for budget parts like Akko switches and keycap clones.</li>
            <li><strong>Local Proxies/Vendors:</strong> Look for specialized stores like Mecha Store or Rebult Keyboards for premium Group Buy extras and lubricants like Krytox 205g0.</li>
            <li><strong>Facebook Marketplace / Carousell:</strong> The best place to find second-hand GMK sets or built boards in KL.</li>
        </ul>

        <h2 id="conclusion">Conclusion</h2>
        <p>Your first build doesn't have to be perfect. Start with a budget hot-swap kit, buy a switch tester to find your preference, and enjoy the process. Happy building!</p>

    </article>

    <!-- Sidebar / TOC -->
    <aside class="sidebar">
        <div class="toc-widget">
            <h4>Table of Contents</h4>
            <ul class="toc-list">
                <li><a href="#anatomy">1. Anatomy of a Keyboard</a></li>
                <li><a href="#sizes">2. Form Factors</a></li>
                <li><a href="#switches">3. Switch Types</a></li>
                <li><a href="#sourcing">4. Sourcing Parts (MY)</a></li>
                <li><a href="#conclusion">Conclusion</a></li>
            </ul>
        </div>
    </aside>

</div>

<?php
// 3. Capture Buffer and Include Master
$page_content = ob_get_clean();
include 'master_layout.php';
?>