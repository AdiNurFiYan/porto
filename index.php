<?php
$projects = [
    [
        "number" => "01",
        "title" => "TA-SBD",
        "category" => "FULLSTACK WEB APPLICATION",
        "description" => "A database-focused web application developed as an academic project, with PHP handling server-side logic and MySQL managing structured data.",
        "stack" => ["PHP", "MySQL", "HTML", "CSS", "JavaScript"],
        "github" => "https://github.com/AdiNurFiYan/Ta-SBD"
    ],
    [
        "number" => "02",
        "title" => "SIADIK",
        "category" => "INFORMATION SYSTEM",
        "description" => "A web-based asset information system for managing education office asset data, reports, and KIB categories.",
        "stack" => ["PHP", "MySQL", "Web", "Database"],
        "github" => "https://siadik.disdiksemarangkab.com/"
    ],
    [
        "number" => "03",
        "title" => "DISDIK",
        "category" => "INFORMATION SYSTEM",
        "description" => "Landing Page for Disdik Semarang Kabupaten.",
        "stack" => ["PHP", "Web"],
        "github" => "https://disdiksemarangkab.com/"
    ],
    [
        "number" => "04",
        "title" => "EARTHQUAKE VR",
        "category" => "UNITY · ANDROID",
        "description" => "An interactive earthquake simulation game designed for VRBox Android, featuring scenario-based decisions and score mechanics.",
        "stack" => ["Unity", "C#", "Android", "VR"],
        "github" => "https://rizqqis877.itch.io/quakeready"
    ],
];

$skills = [
    ["name" => "PHP", "level" => "BACKEND", "desc" => "Server-side logic, forms, CRUD, sessions, and structured PHP code."],
    ["name" => "MySQL", "level" => "DATABASE", "desc" => "Relational data, queries, CRUD operations, and database-driven applications."],
    ["name" => "HTML / CSS", "level" => "FRONTEND", "desc" => "Responsive layouts, component styling, and polished interfaces."],
    ["name" => "JavaScript", "level" => "FRONTEND", "desc" => "Basic interactive behaviour and client-side functionality."],
    ["name" => "Git / GitHub", "level" => "TOOLS", "desc" => "Version control and project documentation through GitHub."],
    ["name" => "C# / Unity", "level" => "OTHER", "desc" => "Interactive application and game development with Unity."],
];

$timeline = [
    ["year" => "2026", "title" => "Building & Applying", "desc" => "Developing practical projects, improving PHP fundamentals, and preparing for software engineering opportunities."],
    ["year" => "2025", "title" => "Academic Projects", "desc" => "Worked on web systems, interface design, engineering projects, and interactive applications."],
    ["year" => "2024", "title" => "Multimedia & Development", "desc" => "Combined software development with multimedia, documentation, UI/UX, and digital content experience."],
];

$certifications = [
    [
        "title" => "IT Essentials: PC Hardware and Software",
        "org" => "Cisco Networking Academy",
        "year" => "2023",
        "link" => "https://drive.google.com/file/d/1Wi0UeXSav_0unaDfTPAYsS04PKjEELdD/view?usp=sharing"
    ],
    [
        "title" => "Introduction to IoT and Digital Transformation",
        "org" => "Cisco Networking Academy",
        "year" => "2023",
        "link" => "https://drive.google.com/file/d/1gys6rx_VBd4f9MnE5M3qRgk91cLIf3nV/view?usp=sharing"
    ],
    [
        "title" => "CCNAv7: Introduction to Networks",
        "org" => "Cisco Networking Academy",
        "year" => "2024",
        "link" => "https://drive.google.com/file/d/1djGjKuijq27kL8TENiJ3OmAcczqFHPBt/view?usp=drive_link"
    ],
    [
        "title" => "CCNAv7: Switching, Routing, and Wireless Essentials",
        "org" => "Cisco Networking Academy",
        "year" => "2024",
        "link" => "https://drive.google.com/file/d/1HKJTvTyOBqPwV5oFLdT44fdi6hPhh63W/view?usp=sharing"
    ],
    [
        "title" => "Database Design",
        "org" => "Oracle Academy",
        "year" => "2024",
        "link" => "https://drive.google.com/file/d/1OtccjfW2RS7IEgfI_Hs9tmsHIpKB2FRq/view?usp=sharing"
    ],
    [
        "title" => "Database Foundations",
        "org" => "Oracle Academy",
        "year" => "2024",
        "link" => "https://drive.google.com/file/d/1iJHCmoLZ7yRgdjIRChTDsRHIeIwYjALp/view?usp=sharing"
    ],
    [
        "title" => "CCNA: Enterprise Networking, Security, and Automation",
        "org" => "Cisco Networking Academy",
        "year" => "2026",
        "link" => "https://drive.google.com/file/d/1cJSuAugEQTCBWBBcBR4bMJQrzFtKpjSI/view?usp=sharing"
    ],
];

$pageTitle = "Adi Nur Fi Yan — PHP Developer";
include __DIR__ . "/includes/header.php";
?>

<main>
    <section class="hero" id="home">
        <div class="hero-stars"></div>
        <div class="hero-orb orb-one"></div>
        <div class="hero-orb orb-two"></div>

        <div class="hero-content reveal">
            <p class="eyebrow"><span></span> COMPUTER ENGINEERING</p>
            <h1>ADI<br><em>NUR FI YAN</em></h1>
            <p class="hero-copy">
            Computer Engineering graduate focused on web development,
            software engineering, and practical problem solving.
            </p>
            <div class="hero-actions">
                <a class="btn btn-primary" href="#projects">VIEW PROJECTS <b>↗</b></a>
                <a class="btn btn-ghost" href="https://github.com/AdiNurFiYan" target="_blank">GITHUB</a>
            </div>
        </div>

        <div class="hero-photo reveal">
            <div class="photo-frame">
                <img src="assets/images/profile.jpg" alt="Adi Nur Fi Yan">
            </div>
        </div>

        <a class="scroll-cue" href="#about"><span></span> SCROLL TO EXPLORE</a>
    </section>

    <section class="section intro" id="about">
        <div class="section-label reveal">01 — ABOUT</div>
        <div class="intro-grid">
            <div class="section-title reveal">
                <p class="eyebrow">THE DEVELOPER</p>
                <h2>Turning ideas<br>into <em>working systems.</em></h2>
            </div>
            <div class="intro-text reveal">
                <p>
                Computer Engineering graduate with hands-on experience in web-based system development, software testing, troubleshooting, 
database management, and technical documentation.
                </p>
                <p>
                Experienced in developing and maintaining an Asset Information System using 
Laravel and MySQL, including system testing and resolving technical issues. Detail-oriented, adaptable, and eager to develop skills in 
software implementation and client support.
                </p>
                <a class="text-link" href="#skills">EXPLORE MY SKILLS <span>→</span></a>
            </div>
        </div>
    </section>

    <section class="section about-stats" id="about-details">
        
        <div class="stats-grid reveal">
            <div class="stat-item">
                <h3>3.86</h3>
                <p>GPA / 4.00</p>
            </div>
            <div class="stat-item">
                <h3>7+</h3>
                <p>CERTIFICATIONS</p>
            </div>
            <div class="stat-item">
                <h3>2+</h3>
                <p>YEARS EXPERIENCE</p>
            </div>
        </div>

        <div class="education-section reveal">
            <p class="section-label">EDUCATION</p>
            
            <div class="education-card">
                <div class="edu-header">
                    <div class="edu-title">
                        <h3>Bachelor of Engineering, Computer Engineering</h3>
                        <span class="uni-name">Diponegoro University</span>
                        <span class="uni-loc">Semarang, Indonesia</span>
                    </div>
                    <div class="edu-date">2022 — 2026</div>
                </div>
                
                <ul class="edu-details">
                    <li>GPA: 3.62 / 4.00</li>
                    <li>Thesis: Analysis of the Impact of Texture Atlas Optimization Techniques And URP Shaders on Frame Rate (FPS) Performance in 3D Assets for the Quakeready VR Android Game</li>
                    <li>Relevant Coursework: Multimedia, 3D Game Development, VR Android Game Development</li>
                </ul>
            </div>
        </div>

        <div class="certifications-section reveal">
            <p class="section-label">CERTIFICATIONS</p>
            
            <div class="cert-list">
                <?php foreach ($certifications as $cert): ?>
                    <a href="<?= htmlspecialchars($cert["link"]) ?>" target="_blank" class="cert-item">
                        <div class="cert-title">
                            <?= htmlspecialchars($cert["title"]) ?> <span class="arrow">&#8599;</span>
                        </div>
                        <div class="cert-meta">
                            <span class="cert-org"><?= htmlspecialchars($cert["org"]) ?></span>
                            <span class="cert-year"><?= htmlspecialchars($cert["year"]) ?></span>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>

    </section>

    <section class="section skills" id="skills">
        <div class="section-label reveal">02 — SKILL TREE</div>
        <div class="section-heading reveal">
            <p class="eyebrow">ARSENAL</p>
            <h2>Tools I <em>build with.</em></h2>
        </div>

        <div class="skill-grid">
            <?php foreach ($skills as $i => $skill): ?>
                <article class="skill-card reveal" style="--delay: <?= $i * 70 ?>ms">
                    <span class="skill-index"><?= str_pad($i + 1, 2, "0", STR_PAD_LEFT) ?></span>
                    <div class="skill-icon"><?= htmlspecialchars(substr($skill["name"], 0, 2)) ?></div>
                    <div>
                        <p><?= htmlspecialchars($skill["level"]) ?></p>
                        <h3><?= htmlspecialchars($skill["name"]) ?></h3>
                        <small><?= htmlspecialchars($skill["desc"]) ?></small>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section projects" id="projects">
        <div class="section-label reveal">03 — QUEST LOG</div>
        <div class="section-heading project-heading reveal">
            <div>
                <p class="eyebrow">SELECTED WORKS</p>
                <h2>Projects I've <em>built.</em></h2>
            </div>
            <p class="heading-note">A selection of academic and personal work.</p>
        </div>

        <div class="project-list">
            <?php foreach ($projects as $project): ?>
                <article class="project-card reveal">
                    <div class="project-number"><?= htmlspecialchars($project["number"]) ?></div>
                    <div class="project-main">
                        <p class="project-category"><?= htmlspecialchars($project["category"]) ?></p>
                        <h3><?= htmlspecialchars($project["title"]) ?></h3>
                        <p><?= htmlspecialchars($project["description"]) ?></p>
                        <div class="tags">
                            <?php foreach ($project["stack"] as $tag): ?>
                                <span><?= htmlspecialchars($tag) ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <a class="project-link" href="<?= htmlspecialchars($project["github"]) ?>" target="_blank">
                        <span>OPEN</span> ↗
                    </a>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section journey" id="journey">
        <div class="section-label reveal">04 — JOURNEY</div>
        <div class="journey-layout">
            <div class="section-heading reveal">
                <p class="eyebrow">PROGRESSION</p>
                <h2>Still learning.<br><em>Still building.</em></h2>
            </div>
            <div class="timeline">
                <?php foreach ($timeline as $item): ?>
                    <article class="timeline-item reveal">
                        <div class="timeline-year"><?= htmlspecialchars($item["year"]) ?></div>
                        <div class="timeline-dot"></div>
                        <div>
                            <h3><?= htmlspecialchars($item["title"]) ?></h3>
                            <p><?= htmlspecialchars($item["desc"]) ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section new-contact" id="contact">
        <div class="section-label reveal">05 — CONTACT</div>
        
        <div class="contact-content reveal">
            <h2>Let's work<br><span class="muted-heading">together.</span></h2>
            
            <p class="contact-desc">
                I'm currently available for new opportunities. Whether you have a project in mind, need a backend developer, or just want to connect — feel free to reach out. Based in Semarang, Indonesia (UTC+7).
            </p>

            <div class="contact-info">
                <span class="info-item">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    +62 878-0283-1976
                </span>
                <span class="divider">|</span>
                <span class="info-item">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    adikembar0683@gmail.com
                </span>
            </div>

            <div class="contact-buttons">
                <a href="https://github.com/AdiNurFiYan" target="_blank" class="btn-pill">GitHub &rarr;</a>
                <a href="https://www.linkedin.com/in/adi-nur-fi-yan-kembar/" target="_blank" class="btn-pill">LinkedIn &rarr;</a>
                <a href="mailto:adikembar0683@gmail.com" class="btn-pill">Send Email &rarr;</a>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . "/includes/footer.php"; ?>