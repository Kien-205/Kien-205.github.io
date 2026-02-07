<?php
/*
 * Keycaps Guide Page
 * File: keycaps_guide.php
 */

// 1. SEO Configuration
$page_title = "The Ultimate Guide to Mechanical Keyboard Keycaps (2025)";
$meta_description = "ABS vs PBT? Cherry vs SA Profile? Learn everything about custom keycaps, materials, profiles, and where to buy the best sets in Malaysia.";
$show_breadcrumbs = true;

// SEO IMAGE SETTINGS
$hero_image_path = "images/Colorful_GMK_Keycaps_on_a_Keyboard.png"; 

// STRUCTURAL DATA (JSON-LD)
$json_ld_data = [
    "@context" => "https://schema.org",
    "@type" => "Article",
    "headline" => "The Ultimate Guide to Mechanical Keyboard Keycaps",
    "datePublished" => date('c'),
    "author" => [
        "@type" => "Person",
        "name" => "KeebKustoms Team"
    ],
    "description" => $meta_description,
    "articleBody" => "Keycaps are the interface between your fingers and the switch. They affect the sound, feel, and aesthetics of your build more than any other component...",
];

// 2. Start Content Buffering
ob_start();
?>

<!-- Specific Styles for the Keycaps Guide -->
<style>
    .guide-container {
        max-width: 900px;
        margin: 0 auto;
    }

    /* Typography */
    .section-title {
        color: var(--text-main);
        font-size: 2rem;
        margin-top: 60px;
        margin-bottom: 30px;
        padding-bottom: 15px;
        border-bottom: 1px solid var(--border-color);
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .section-title span {
        color: var(--accent-secondary); /* Pink/Red for keycaps page */
        font-size: 1.5rem;
        font-family: var(--font-mono);
    }

    p {
        color: #d0d0d0;
        margin-bottom: 20px;
        font-size: 1.05rem;
        line-height: 1.8;
    }

    /* Material Comparison (Split View) */
    .material-comparison {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        margin: 40px 0;
    }

    .material-card {
        background: var(--bg-panel);
        padding: 30px;
        border-radius: 12px;
        border: 1px solid var(--border-color);
        position: relative;
        overflow: hidden;
    }

    .material-card h3 {
        font-size: 1.8rem;
        margin-bottom: 15px;
        color: var(--text-main);
    }

    /* Distinct borders for ABS vs PBT */
    .material-card.abs { border-top: 4px solid var(--accent-secondary); }
    .material-card.pbt { border-top: 4px solid var(--accent-primary); }

    .pro-con-list {
        list-style: none;
        padding: 0;
        margin-top: 20px;
    }

    .pro-con-list li {
        margin-bottom: 10px;
        padding-left: 20px;
        position: relative;
        font-size: 0.95rem;
        color: var(--text-muted);
    }

    .pro-con-list li::before {
        content: '•';
        position: absolute;
        left: 0;
        color: var(--text-main);
    }

    /* Profile Visuals */
    .profile-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
    }

    .profile-item {
        background: var(--bg-panel);
        padding: 20px;
        border-radius: 8px;
        border: 1px solid var(--border-color);
        transition: transform 0.2s;
    }

    .profile-item:hover {
        transform: translateY(-5px);
        border-color: var(--accent-secondary);
    }

    .profile-item h4 {
        color: var(--text-main);
        font-size: 1.2rem;
        margin-bottom: 10px;
    }

    /* Buying Guide List */
    .buy-list li {
        margin-bottom: 20px;
        padding-bottom: 20px;
        border-bottom: 1px solid var(--border-color);
    }
    .buy-list li:last-child { border-bottom: none; }
    
    .price-tag {
        font-family: var(--font-mono);
        color: var(--accent-primary);
        font-size: 0.9rem;
        display: block;
        margin-top: 5px;
    }

    @media (max-width: 768px) {
        .material-comparison { grid-template-columns: 1fr; }
    }
</style>

<div class="guide-container">
    
    <h1>The Ultimate Guide to Keycaps</h1>
    <p class="intro">
        Keycaps are the interface between your fingers and the switch. They affect the sound, feel, and aesthetics of your build more than any other component. Changing your keycaps is the easiest way to completely transform your keyboard's personality.
    </p>

    <img src="<?php echo $hero_image_path; ?>" alt="Colorful GMK Keycaps on a Keyboard" style="width:100%; border-radius:8px; margin-bottom:30px; border:1px solid var(--border-color);">

    <!-- Material Comparison -->
    <h2 class="section-title"><span>01.</span> Comparison: ABS vs PBT</h2>
    <p>The two most common plastics used. Neither is strictly "better," but they serve different preferences.</p>
    
    <div class="material-comparison">
        <div class="material-card abs">
            <h3>ABS Plastic</h3>
            <p>Acrylonitrile Butadiene Styrene. The industry standard for high-end vibrant sets (like GMK).</p>
            <ul class="pro-con-list">
                <li><strong>Feel:</strong> Smooth, sometimes slick.</li>
                <li><strong>Sound:</strong> Higher pitched, "clackier".</li>
                <li><strong>Look:</strong> Extremely vibrant colors.</li>
                <li><strong>Cons:</strong> Develops a "shine" (oily look) after heavy use.</li>
            </ul>
        </div>
        
        <div class="material-card pbt">
            <h3>PBT Plastic</h3>
            <p>Polybutylene Terephthalate. Known for durability and resistance to wear.</p>
            <ul class="pro-con-list">
                <li><strong>Feel:</strong> Textured, sandy, dry.</li>
                <li><strong>Sound:</strong> Deeper, "thockier".</li>
                <li><strong>Look:</strong> Colors are usually more muted (though improving).</li>
                <li><strong>Pros:</strong> Will never shine. Legends stay matte forever.</li>
            </ul>
        </div>
    </div>

    <!-- Profiles -->
    <h2 class="section-title"><span>02.</span> Keycap Profiles (Shape)</h2>
    <p>Not all keycaps are shaped the same. The "Profile" determines the height and sculpting of the keys.</p>

    <div class="profile-grid">
        <div class="profile-item">
            <h4>Cherry Profile</h4>
            <p>The gold standard. Cylindrical top, lower height. Comfortable for typing and gaming. Most custom customs use this.</p>
        </div>
        <div class="profile-item">
            <h4>OEM Profile</h4>
            <p>Similar shape to Cherry but slightly taller. Standard on most pre-built keyboards (Razer, Corsair, Keychron).</p>
        </div>
        <div class="profile-item">
            <h4>SA Profile</h4>
            <p>Tall, spherical (rounded) tops, and retro-looking. Produces a very deep "thock" sound but can be tiring to type on without a wrist rest.</p>
        </div>
        <div class="profile-item">
            <h4>XDA / DSA</h4>
            <p>Flat and uniform height. Every key is the same shape. Looks clean and modern, but lacks ergonomic sculpting.</p>
        </div>
    </div>

    <!-- Legends -->
    <h2 class="section-title"><span>03.</span> Manufacturing Methods</h2>
    <p>How the letters (legends) are put on the caps matters for longevity.</p>
    <ul>
        <li style="margin-bottom:15px;">
            <strong style="color:var(--text-main);">Doubleshot:</strong> Two separate pieces of plastic molded together. The legend extends through the entire cap. It will <em>never</em> fade. Highest contrast.
        </li>
        <li>
            <strong style="color:var(--text-main);">Dye-Sublimation (Dye-Sub):</strong> Ink is heat-fused into the plastic. Very durable and allows for complex designs (like Japanese sublegends) on PBT caps.
        </li>
    </ul>

    <!-- Buying Guide MY -->
    <h2 class="section-title"><span>04.</span> Where to Buy in Malaysia</h2>
    <p>Sourcing keycaps locally saves you massive shipping fees and import taxes.</p>

    <ul class="buy-list" style="list-style:none; padding:0;">
        <li>
            <h3 style="font-size:1.3rem; color:var(--text-main);">Budget: "Clone" Sets (Shopee/Lazada)</h3>
            <span class="price-tag">Range: RM 50 - RM 120</span>
            <p>Brands like <strong>Aifei</strong> and <strong>CMK</strong> offer decent quality ABS/PBT doubleshot keycaps that mimic expensive GMK colorways. Great for beginners on a budget.</p>
        </li>
        <li>
            <h3 style="font-size:1.3rem; color:var(--text-main);">Mid-Range: Akko & Keychron</h3>
            <span class="price-tag">Range: RM 150 - RM 250</span>
            <p><strong>Akko</strong> makes fantastic ASA profile PBT keycaps with crisp legends. Readily available on Shopee Mall. <strong>Keychron</strong> Malaysia also stocks standard sets.</p>
        </li>
        <li>
            <h3 style="font-size:1.3rem; color:var(--text-main);">High-End: Group Buys (GMK / ePBT)</h3>
            <span class="price-tag">Range: RM 500 - RM 900+</span>
            <p>For the real deal, you need to join "Group Buys". In Malaysia, <strong>Mecha Store</strong> and <strong>Rebult Keyboards</strong> are the go-to proxies for official GMK sets. Be warned: wait times can be months (or years)!</p>
        </li>
    </ul>

</div>

<?php
// 3. Capture Buffer and Include Master
$page_content = ob_get_clean();
include 'master_layout.php';
?>