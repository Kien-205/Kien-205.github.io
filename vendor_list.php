<?php
/*
 * Vendor List Page
 * File: vendor_list.php
 */

// 1. SEO Configuration
$page_title = "Malaysia Mechanical Keyboard Vendor List (2025)";
$meta_description = "The ultimate directory of mechanical keyboard shops in Malaysia. Find where to buy switches, keycaps, lubricants, and custom kits from local trusted vendors.";
$show_breadcrumbs = true;

// SEO IMAGE SETTINGS
$hero_image_path = "images/kl-skyline-keyboard.jpg"; // Placeholder name

// STRUCTURAL DATA (JSON-LD)
$json_ld_data = [
    "@context" => "https://schema.org",
    "@type" => "CollectionPage",
    "headline" => "Where to Buy Mechanical Keyboards in Malaysia",
    "description" => $meta_description,
    "mainEntity" => [
        "@type" => "ItemList",
        "itemListElement" => [
            ["@type" => "ListItem", "position" => 1, "name" => "Mecha Store"],
            ["@type" => "ListItem", "position" => 2, "name" => "Rebult Keyboards"],
            ["@type" => "ListItem", "position" => 3, "name" => "MKB.MY"],
            ["@type" => "ListItem", "position" => 4, "name" => "Shopee MY"],
            ["@type" => "ListItem", "position" => 5, "name" => "Lazada MY"]
        ]
    ]
];

// 2. Start Content Buffering
ob_start();
?>

<!-- Specific Styles for the Vendor List -->
<style>
    .vendor-container {
        max-width: 1000px;
        margin: 0 auto;
    }

    .section-header {
        border-bottom: 1px solid var(--border-color);
        padding-bottom: 15px;
        margin: 50px 0 30px 0;
        color: var(--text-main);
        font-size: 1.8rem;
    }

    .vendor-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }

    .vendor-card {
        background: var(--bg-panel);
        border: 1px solid var(--border-color);
        border-radius: 12px;
        padding: 25px;
        display: flex;
        flex-direction: column;
        transition: transform 0.2s ease, border-color 0.2s ease;
    }

    .vendor-card:hover {
        transform: translateY(-5px);
        border-color: var(--accent-primary);
    }

    .vendor-header {
        display: flex;
        justify-content: space-between;
        align-items: start;
        margin-bottom: 15px;
    }

    .vendor-name {
        font-size: 1.4rem;
        font-weight: 700;
        color: var(--text-main);
        margin: 0;
    }

    .vendor-desc {
        color: var(--text-muted);
        font-size: 0.95rem;
        margin-bottom: 20px;
        flex-grow: 1; /* Pushes the button to the bottom */
    }

    .tags {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-bottom: 15px;
    }

    .tag {
        font-size: 0.75rem;
        padding: 4px 8px;
        border-radius: 4px;
        font-weight: 600;
        text-transform: uppercase;
    }

    /* Tag Colors */
    .tag.premium { background: rgba(255, 0, 85, 0.15); color: var(--accent-secondary); border: 1px solid var(--accent-secondary); }
    .tag.budget { background: rgba(46, 204, 113, 0.15); color: #2ecc71; border: 1px solid #2ecc71; }
    .tag.parts { background: rgba(0, 229, 255, 0.15); color: var(--accent-primary); border: 1px solid var(--accent-primary); }
    .tag.groupbuy { background: rgba(155, 89, 182, 0.15); color: #9b59b6; border: 1px solid #9b59b6; }

    .visit-btn {
        text-align: center;
        background: #333;
        color: #fff;
        padding: 10px;
        border-radius: 6px;
        text-decoration: none;
        transition: background 0.2s;
        font-weight: 600;
    }

    .visit-btn:hover {
        background: var(--accent-primary);
        color: #121212;
    }

    /* Note Box */
    .note-box {
        background: rgba(255, 255, 255, 0.05);
        border-left: 4px solid var(--accent-primary);
        padding: 20px;
        margin-bottom: 40px;
        border-radius: 0 8px 8px 0;
    }
</style>

<div class="vendor-container">

    <h1>Malaysia Vendor Directory</h1>
    <p class="intro">
        Building a custom keyboard in Malaysia is easier than ever thanks to a thriving local community. 
        Support local businesses to save on shipping times and import taxes.
    </p>

    <div class="note-box">
        <strong>Note for Beginners:</strong> "In-Stock" means it ships immediately (usually from KL/Selangor). "Group Buy" or "Pre-order" means you might wait months. Always check the stock status!
    </div>

    <!-- Section 1: Specialty & Enthusiast Stores -->
    <h2 class="section-header">Specialty & Enthusiast Stores</h2>
    <div class="vendor-grid">
        
        <!-- Mecha Store -->
        <article class="vendor-card">
            <div class="vendor-header">
                <h3 class="vendor-name">Mecha Store</h3>
            </div>
            <div class="tags">
                <span class="tag premium">Premium</span>
                <span class="tag groupbuy">Group Buys</span>
                <span class="tag parts">Physical Store</span>
            </div>
            <p class="vendor-desc">
                One of the most well-known enthusiast stores in Malaysia. They stock high-end custom kits (like QwertyKeys, Zoom), GMK keycaps, and a wide variety of switches. They also have a physical showroom in Subang/Sunway area.
            </p>
            <a href="https://www.mecha.com.my/" target="_blank" class="visit-btn">Visit Store &rarr;</a>
        </article>

        <!-- Rebult Keyboards -->
        <article class="vendor-card">
            <div class="vendor-header">
                <h3 class="vendor-name">Rebult Keyboards</h3>
            </div>
            <div class="tags">
                <span class="tag parts">Components</span>
                <span class="tag groupbuy">Proxies</span>
                <span class="tag premium">Lubricants</span>
            </div>
            <p class="vendor-desc">
                A community favorite. The go-to place for buying individual switches, Krytox lubricants, stabilizers (Durock/TX), and joining international Group Buys without paying massive international shipping.
            </p>
            <a href="https://www.rebultkeyboards.com/" target="_blank" class="visit-btn">Visit Store &rarr;</a>
        </article>

        <!-- MKB.MY -->
        <article class="vendor-card">
            <div class="vendor-header">
                <h3 class="vendor-name">MKB.MY</h3>
            </div>
            <div class="tags">
                <span class="tag budget">Mid-Range</span>
                <span class="tag parts">Accessories</span>
            </div>
            <p class="vendor-desc">
                Reliable local vendor for various mechanical keyboard parts, budget-friendly kits, and accessories. Good variety of entry-to-mid level components.
            </p>
            <a href="https://mkb.gg/" target="_blank" class="visit-btn">Visit Store &rarr;</a>
        </article>

    </div> <!-- CLOSING DIV RESTORED HERE -->

    <!-- Section 2: Marketplaces & Official Distros -->
    <h2 class="section-header">Official Distributors & Marketplaces</h2>
    <div class="vendor-grid">
        
        <!-- Shopee -->
        <article class="vendor-card">
            <div class="vendor-header">
                <h3 class="vendor-name">Shopee MY</h3>
            </div>
            <div class="tags">
                <span class="tag budget">Budget Kings</span>
                <span class="tag parts">Local Sellers</span>
            </div>
            <p class="vendor-desc">
                The massive marketplace for budget parts. Look for "Local Seller" to get fast shipping on Akko switches, lubricated stabilizers, and budget boards like Royal Kludge.
            </p>
            <a href="https://shopee.com.my/search?keyword=mechanical%20keyboard" target="_blank" class="visit-btn">Search Shopee &rarr;</a>
        </article>

        <!-- Lazada -->
        <article class="vendor-card">
            <div class="vendor-header">
                <h3 class="vendor-name">Lazada MY</h3>
            </div>
            <div class="tags">
                <span class="tag parts">Taobao Direct</span>
                <span class="tag budget">Vouchers</span>
            </div>
            <p class="vendor-desc">
                Great for finding official flagship stores and utilizing the "Taobao Collection" for niche parts directly from China. Often has aggressive voucher stacking for big sales.
            </p>
            <a href="https://www.lazada.com.my/catalog/?q=mechanical+keyboard" target="_blank" class="visit-btn">Search Lazada &rarr;</a>
        </article>

        <!-- Keychron Malaysia -->
        <article class="vendor-card">
            <div class="vendor-header">
                <h3 class="vendor-name">Keychron Malaysia</h3>
            </div>
            <div class="tags">
                <span class="tag budget">Pre-built</span>
                <span class="tag parts">Mac Compatible</span>
            </div>
            <p class="vendor-desc">
                The official distributor for Keychron boards (K series, Q series). If you want a solid, pre-built aluminum keyboard with local warranty, this is the safest bet.
            </p>
            <a href="https://www.keychron.com/" target="_blank" class="visit-btn">Visit Store &rarr;</a>
        </article>
    </div>

</div>

<?php
// 3. Capture Buffer and Include Master
$page_content = ob_get_clean();
include 'master_layout.php';
?>