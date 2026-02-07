<?php
/*
 * Switch Guide Page
 * File: keyboard_switches_guide.php
 */

// 1. SEO Configuration
$page_title = "The Complete Guide to Mechanical Keyboard Switches (2025 Edition)";
$meta_description = "Linear vs Tactile vs Clicky? Find the perfect switch for your mechanical keyboard. We cover actuation force, sound profiles, and the best switches available in Malaysia.";
$show_breadcrumbs = true;

// SEO IMAGE SETTINGS
$hero_image_path = "images/mechanical_keyboard_switches_breakdown.gif"; 

// STRUCTURAL DATA (JSON-LD)
$json_ld_data = [
    "@context" => "https://schema.org",
    "@type" => "Article",
    "headline" => "The Complete Guide to Mechanical Keyboard Switches",
    "datePublished" => date('c'),
    "author" => [
        "@type" => "Person",
        "name" => "KeebKustoms Team"
    ],
    "description" => $meta_description,
    "articleBody" => "The switch is the soul of the mechanical keyboard. It determines the feel, the sound, and the responsiveness of every keystroke...",
];

// 2. Start Content Buffering
ob_start();
?>

<!-- Specific Styles for the Switch Guide -->
<style>
    .switch-guide-container {
        max-width: 900px; /* Focused reading width */
        margin: 0 auto;
    }

    /* Section Typography */
    .section-title {
        color: var(--text-main);
        font-size: 2rem;
        margin-top: 50px;
        margin-bottom: 25px;
        padding-bottom: 10px;
        border-bottom: 1px solid var(--border-color);
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .section-title span {
        color: var(--accent-primary);
        font-size: 1.5rem;
    }

    p {
        color: #d0d0d0;
        margin-bottom: 20px;
        font-size: 1.05rem;
        line-height: 1.8;
    }

    /* Switch Type Cards */
    .switch-types-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
        margin: 40px 0;
    }

    .switch-card {
        background: var(--bg-panel);
        border: 1px solid var(--border-color);
        border-radius: 12px;
        padding: 25px;
        transition: transform 0.2s, border-color 0.2s;
    }

    .switch-card:hover {
        transform: translateY(-5px);
        border-color: var(--accent-primary);
    }

    .switch-header {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
        gap: 10px;
    }

    .color-dot {
        width: 15px;
        height: 15px;
        border-radius: 50%;
        display: inline-block;
    }

    .switch-card h3 {
        font-size: 1.4rem;
        margin: 0;
    }

    .switch-card ul {
        list-style: none;
        margin-top: 15px;
        padding: 0;
        font-size: 0.9rem;
        color: var(--text-muted);
    }
    
    .switch-card li {
        margin-bottom: 8px;
        padding-left: 15px;
        border-left: 2px solid var(--border-color);
    }

    /* Comparison Table */
    .tech-table {
        width: 100%;
        border-collapse: collapse;
        margin: 30px 0;
        background: var(--bg-panel);
        border-radius: 8px;
        overflow: hidden;
    }

    .tech-table th, .tech-table td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid var(--border-color);
    }

    .tech-table th {
        background: #252525;
        color: var(--accent-primary);
        text-transform: uppercase;
        font-size: 0.85rem;
        letter-spacing: 1px;
    }

    .tech-table tr:last-child td {
        border-bottom: none;
    }

    /* Recommendation Badge */
    .rec-badge {
        display: inline-block;
        padding: 4px 8px;
        border-radius: 4px;
        font-size: 0.75rem;
        font-weight: bold;
        text-transform: uppercase;
        margin-right: 8px;
    }
    
    .badge-budget { background: #2ecc71; color: #121212; }
    .badge-premium { background: #f1c40f; color: #121212; }
    .badge-clicky { background: #3498db; color: #fff; }

</style>

<div class="switch-guide-container">
    
    <h1>The Complete Guide to Mechanical Switches</h1>
    <p class="intro">
        If the PCB is the brain of the keyboard, the switch is the soul. It determines the feel, the sound, and the responsiveness of every keystroke. Whether you want a silent office board or a "thocky" gaming setup, it all starts here.
    </p>

    <img src="<?php echo $hero_image_path; ?>" alt="Mechanical Keyboard Switches Breakdown" style="width:100%; border-radius:8px; margin-bottom:30px; border:1px solid var(--border-color);">

    <!-- Technical Glossary -->
    <h2 class="section-title"><span>01.</span> Know the Lingo</h2>
    <p>Before buying boxes of switches from Shopee, you need to understand the spec sheets.</p>
    
    <table class="tech-table">
        <tr>
            <th>Term</th>
            <th>Definition</th>
        </tr>
        <tr>
            <td><strong>Actuation Force</strong></td>
            <td>How hard you need to press to register a key (measured in grams/gf). 45g is light; 67g is heavy.</td>
        </tr>
        <tr>
            <td><strong>Bottom-out</strong></td>
            <td>The force required to press the key all the way down until it hits the housing.</td>
        </tr>
        <tr>
            <td><strong>Travel Distance</strong></td>
            <td>Total distance the stem moves. Standard is 4.0mm. "Speed" switches are shorter (3.4mm).</td>
        </tr>
        <tr>
            <td><strong>3-Pin vs 5-Pin</strong></td>
            <td>5-pin (PCB mount) has extra plastic legs for stability. 3-pin (Plate mount) fits any hot-swap socket.</td>
        </tr>
    </table>

    <!-- The Big Three -->
    <h2 class="section-title"><span>02.</span> The Three Main Types</h2>
    
    <div class="switch-types-grid">
        <!-- Linear -->
        <article class="switch-card">
            <div class="switch-header">
                <span class="color-dot" style="background:#e74c3c;"></span>
                <h3>Linear</h3>
            </div>
            <p>Smooth consistent keystroke with no bump. The stem goes straight down.</p>
            <ul>
                <li><strong>Feel:</strong> Smooth, buttery</li>
                <li><strong>Sound:</strong> Quiet(er)</li>
                <li><strong>Best For:</strong> Gaming, Fast Typing</li>
            </ul>
        </article>

        <!-- Tactile -->
        <article class="switch-card">
            <div class="switch-header">
                <span class="color-dot" style="background:#8e44ad;"></span>
                <h3>Tactile</h3>
            </div>
            <p>A noticeable "bump" in the middle of the keypress to let you know it registered.</p>
            <ul>
                <li><strong>Feel:</strong> Bumpy, Responsive</li>
                <li><strong>Sound:</strong> Moderate "Thock"</li>
                <li><strong>Best For:</strong> Typing, Programming</li>
            </ul>
        </article>

        <!-- Clicky -->
        <article class="switch-card">
            <div class="switch-header">
                <span class="color-dot" style="background:#3498db;"></span>
                <h3>Clicky</h3>
            </div>
            <p>Tactile bump accompanied by a sharp audible "click" mechanism.</p>
            <ul>
                <li><strong>Feel:</strong> Sharp tactile bump</li>
                <li><strong>Sound:</strong> Loud, High-pitched</li>
                <li><strong>Best For:</strong> Solo Office, Nostalgia</li>
            </ul>
        </article>
    </div>

    <!-- Recommendations for Malaysia -->
    <h2 class="section-title"><span>03.</span> Top Picks for 2025 (MY Market)</h2>
    <p>Based on availability on Lazada, Shopee MY, and local vendors like Mecha Store.</p>

    <!-- Linear Section -->
    <h3 style="color: var(--text-main); margin-bottom: 15px;">Linear Recommendations</h3>
    <ul style="list-style:none; padding:0;">
        <li style="margin-bottom:20px; border-bottom:1px solid #333; padding-bottom:15px;">
            <span class="rec-badge badge-budget">Budget King</span> <strong>Gateron Milky Yellow Pro</strong><br>
            <span style="color:var(--text-muted); font-size:0.9rem;">Price: ~RM 0.70 / switch</span><br>
            Insane value. Factory lubed and very smooth. The gold standard for entry-level builds.
        </li>
        <li style="margin-bottom:20px;">
            <span class="rec-badge badge-premium">Premium</span> <strong>Gateron Oil King</strong><br>
            <span style="color:var(--text-muted); font-size:0.9rem;">Price: ~RM 2.80 / switch</span><br>
            Deep, "thocky" sound right out of the box. Excellent factory lube and all-black housing for a sleek look.
        </li>
    </ul>

    <!-- Tactile Section -->
    <h3 style="color: var(--text-main); margin-bottom: 15px; margin-top:30px;">Tactile Recommendations</h3>
    <ul style="list-style:none; padding:0;">
        <li style="margin-bottom:20px; border-bottom:1px solid #333; padding-bottom:15px;">
            <span class="rec-badge badge-budget">Budget King</span> <strong>Akko V3 Cream Blue Pro</strong><br>
            <span style="color:var(--text-muted); font-size:0.9rem;">Price: ~RM 0.45 / switch</span><br>
            Very poppy tactile bump for an incredibly low price. Great for typing.
        </li>
        <li style="margin-bottom:20px;">
            <span class="rec-badge badge-premium">Premium</span> <strong>Gazzew Boba U4T</strong><br>
            <span style="color:var(--text-muted); font-size:0.9rem;">Price: ~RM 3.00 / switch</span><br>
            The king of "Thock". Very rounded, strong bump. Highly sought after in the Malaysian community.
        </li>
    </ul>

    <!-- Clicky Section (New) -->
    <h3 style="color: var(--text-main); margin-bottom: 15px; margin-top:30px;">Clicky Recommendations</h3>
    <ul style="list-style:none; padding:0;">
        <li style="margin-bottom:20px; border-bottom:1px solid #333; padding-bottom:15px;">
            <span class="rec-badge badge-budget">Budget King</span> <strong>Kailh Box White V2</strong><br>
            <span style="color:var(--text-muted); font-size:0.9rem;">Price: ~RM 1.20 / switch</span><br>
            Uses a "click bar" instead of a jacket, making the click crisp and double-sided (click on down and up). Zero rattle compared to Cherry Blues.
        </li>
        <li style="margin-bottom:20px;">
            <span class="rec-badge badge-premium">Premium</span> <strong>ZealPC Clickiez</strong><br>
            <span style="color:var(--text-muted); font-size:0.9rem;">Price: ~RM 5.50 / switch</span><br>
            The "Rolls Royce" of clicky switches. Uses a unique multi-mode click leaf (inspired by vintage Alps) for a monstrous tactile snap and rich sound. Extremely distinct and can be reconfigured.
        </li>
    </ul>

    <h2 class="section-title"><span>04.</span> Should you Lube them?</h2>
    <p>
        Most "Pro" switches in 2025 come pre-lubed from the factory, which is usually good enough for beginners. 
        However, hand-lubing with <strong>Krytox 205g0</strong> (for linears) or <strong>Tribosys 3203</strong> (for tactiles) is the single best upgrade you can make to improve sound and feel.
    </p>

</div>

<?php
// 3. Capture Buffer and Include Master
$page_content = ob_get_clean();
include 'master_layout.php';
?>