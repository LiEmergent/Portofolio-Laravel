<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio | Nur Salim</title>
    
    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/@fontsource/inter@5.0.16/index.css" rel="stylesheet">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Navigation -->
    <nav id="navbar">
        <div class="nav-container">
            <a href="#" class="logo">Lim.</a>
            <ul class="nav-links">
                <li><a href="#about">Tentang Aku</a></li>
                <li><a href="#education">Pendidikan</a></li>
                <li><a href="#skills">Keahlian</a></li>
                <li><a href="#experience">Pengalaman</a></li>
                <li><a href="#projects">Proyek</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <button class="close-menu" id="closeMenu">✕</button>
        <a href="#about" class="mobile-link">Tentang Aku</a>
        <a href="#education" class="mobile-link">Pendidikan</a>
        <a href="#skills" class="mobile-link">Keahlian</a>
        <a href="#experience" class="mobile-link">Pengalaman</a>
        <a href="#projects" class="mobile-link">Proyek</a>
        <a href="#contact" class="mobile-link">Kontak</a>
    </div>

    <!-- Hero Section -->
    <section class="hero" id="hero">
        <div class="hero-bg"></div>
        <div class="particles" id="particles"></div>
        <div class="hero-content">
            <div class="hero-avatar">
                <img src="{{ asset('img/profile.jpg') }}" alt="Nur salim" class="profile-img">
            </div>
            <p class="hero-subtitle">Halo, Saya</p>
            <h1 class="hero-title">Nur Salim <span>(Tn. Lim)</span></h1>
            <p class="hero-description">AI-Oriented Software Engineer & System Thinker. Membangun ekosistem cerdas untuk merevolusi cara manusia bekerja dan hidup.</p>
            <div class="hero-buttons">
                <a href="#projects" class="btn btn-primary">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                    Lihat Proyek
                </a>
                <a href="#contact" class="btn btn-outline">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    Hubungi Saya
                </a>
            </div>
        </div>
        <div class="scroll-indicator">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 13l5 5 5-5M7 6l5 5 5-5"/></svg>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section-alt">
        <div class="container">
            <div class="section-header">
                <p class="section-label">Ayo Kenali Aku Lebih Dekat !</p>
                <h2 class="section-title">Sekilas Tentang Aku</h2>
                <div class="section-line"></div>
            </div>
            <div class="about-grid">
                <div class="about-image fade-in">
                    <div class="about-image-wrapper">
                        <img src="{{ asset('img/Bintang.jpg') }}" alt="Bintang" class="profile-img">        
                    </div>
                    <div class="about-stats">
                        <div class="stat-card">
                            <div class="stat-number">2+</div>
                            <div class="stat-label">Tahun Eksplorasi</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-number">15+</div>
                            <div class="stat-label">Proyek AI</div>
                        </div>
                    </div>
                </div>
                <div class="about-content fade-in">
                    <h3>Membangun Masa Depan Berbasis AI dari Kota Padang</h3>
                    <p>Saya adalah mahasiswa Sistem Informasi yang berfokus pada pengembangan ekosistem berbasis AI dan automasi. Visi saya adalah membangun sistem cerdas yang merevolusi cara manusia bekerja, berpikir, dan hidup.</p>
                    <p>Tertarik pada integrasi AI, arsitektur perangkat lunak, dan desain sistem skala besar yang melampaui kerangka kerja tradisional.</p>
                    <div class="about-info">
                        <div class="info-item">
                            <div class="info-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>    
                            </div>
                            <div class="info-text">
                                <span>Nama</span>
                                Nursalim (Tn. Lim)
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            </div>
                            <div class="info-text">
                                <span>Lokasi</span>
                                Padang, Indonesia
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            </div>
                            <div class="info-text">
                                <span>Email</span>
                                nursalim210302@gmail.com
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.362 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                            </div>
                            <div class="info-text">
                                <span>Telepon</span>
                                0838313909
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section id="education">
        <div class="container">
            <div class="section-header">
                <p class="section-label">Latar Belakang Akademik</p>
                <h2 class="section-title">Pendidikan</h2>
                <div class="section-line"></div>
            </div>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <span class="timeline-date">2025 - Sekarang</span>
                        <h3 class="timeline-title">S1 Sistem Informasi</h3>
                        <p class="timeline-school">STMIK Jayanusa, Padang</p>
                        <p class="timeline-desc">Fokus pada pengembangan software, sistem informasi, dan integrasi AI dalam workflow modern.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <span class="timeline-date">2023 - 2024</span>
                        <h3 class="timeline-title">S1 Sistem Informasi (Transfer)</h3>
                        <p class="timeline-school">Universitas Malikussaleh, Aceh</p>
                        <p class="timeline-desc">Program Bidikmisi. Membangun dasar yang kuat dalam logika sistem dan pemrograman.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="section-alt">
        <div class="container">
            <div class="section-header">
                <p class="section-label">Teknologi & Metodologi</p>
                <h2 class="section-title">Keahlian Teknis</h2>
                <div class="section-line"></div>
            </div>
            <div class="skills-grid">
                <div class="skill-category fade-in">
                    <div class="skill-category-icon">🤖</div>
                    <h3>AI & System Thinking</h3>
                    <div class="skill-item">
                        <div class="skill-header">
                            <span class="skill-name">Prompt Engineering</span>
                            <span class="skill-percent">90%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" data-width="90"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-header">
                            <span class="skill-name">AI Agent Orchestration</span>
                            <span class="skill-percent">85%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" data-width="85"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-header">
                            <span class="skill-name">System Design Thinking</span>
                            <span class="skill-percent">80%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" data-width="80"></div>
                        </div>
                    </div>
                    <div class="tech-tags">
                        <span class="tech-tag">LLM Integration</span>
                        <span class="tech-tag">Automation</span>
                        <span class="tech-tag">Workflow Design</span>
                    </div>
                </div>
                <div class="skill-category fade-in">
                    <div class="skill-category-icon">🎨</div>
                    <h3>Frontend Development</h3>
                    <div class="skill-item">
                        <div class="skill-header">
                            <span class="skill-name">Flutter</span>
                            <span class="skill-percent">85%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" data-width="85"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-header">
                            <span class="skill-name">HTML / CSS / JS</span>
                            <span class="skill-percent">80%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" data-width="80"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-header">
                            <span class="skill-name">Tailwind CSS</span>
                            <span class="skill-percent">75%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" data-width="75"></div>
                        </div>
                    </div>
                    <div class="tech-tags">
                        <span class="tech-tag">Responsive Design</span>
                        <span class="tech-tag">UI/UX</span>
                    </div>
                </div>
                <div class="skill-category fade-in">
                    <div class="skill-category-icon">⚙️</div>
                    <h3>Backend & Tools</h3>
                    <div class="skill-item">
                        <div class="skill-header">
                            <span class="skill-name">Python (AI & Auto)</span>
                            <span class="skill-percent">85%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" data-width="85"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-header">
                            <span class="skill-name">Firebase / Supabase</span>
                            <span class="skill-percent">75%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" data-width="75"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-header">
                            <span class="skill-name">Git & GitHub</span>
                            <span class="skill-percent">85%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" data-width="85"></div>
                        </div>
                    </div>
                    <div class="tech-tags">
                        <span class="tech-tag">Node.js</span>
                        <span class="tech-tag">Docker</span>
                        <span class="tech-tag">Figma</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience">
        <div class="container">
            <div class="section-header">
                <p class="section-label">Jejak Profesional</p>
                <h2 class="section-title">Pengalaman</h2>
                <div class="section-line"></div>
            </div>
            <div class="experience-list">
                <div class="exp-item">
                    <div class="exp-logo">ID</div>
                    <div class="exp-content">
                        <div class="exp-header">
                            <h3 class="exp-role">Independent Developer & AI Explorer</h3>
                            <span class="exp-date">2023 - Sekarang</span>
                        </div>
                        <p class="exp-company">Self-Employed</p>
                        <div class="exp-desc">
                            <ul>
                                <li>Membangun prototype aplikasi berbasis AI (automation tools, personal systems).</li>
                                <li>Mengintegrasikan AI ke dalam workflow coding untuk meningkatkan efisiensi development.</li>
                                <li>Mengembangkan konsep AI Personal Butler System untuk produktivitas individu.</li>
                                <li>Eksplorasi arsitektur sistem masa depan yang melampaui kerangka kerja tradisional.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="section-alt">
        <div class="container">
            <div class="section-header">
                <p class="section-label">Karya Terpilih</p>
                <h2 class="section-title">Proyek Unggulan</h2>
                <div class="section-line"></div>
            </div>
            <div class="projects-grid">
                <!-- Project 1 -->
                <div class="project-card">
                    <div class="project-image">
                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHJlY3Qgd2lkdGg9IjYwMCIgaGVpZ2h0PSI0MDAiIGZpbGw9InVybCgjcDEpIi8+PHJlY3QgeD0iNTAiIHk9IjUwIiB3aWR0aD0iNTAwIiBoZWlnaHQ9IjMwMCIgcng9IjEwIiBmaWxsPSJ3aGl0ZSIgb3BhY2l0eT0iMC4xIi8+PGNpcmNsZSBjeD0iMzAwIiBjeT0iMjAwIiByPSI2MCIgc3Ryb2tlPSJ3aGl0ZSIgc3Ryb2tlLXdpZHRoPSIyIiBvcGFjaXR5PSIwLjMiLz48cGF0aCBkPSJNMjQwIDIwMCBMMzYwIDIwMCBNMzAwIDE0MCBMMzAwIDI2MCIgc3Ryb2tlPSJ3aGl0ZSIgc3Ryb2tlLXdpZHRoPSIyIiBvcGFjaXR5PSIwLjMiLz48ZGVmcz48bGluZWFyR3JhZGllbnQgaWQ9InAxIiB4MT0iMCIgeTE9IjAiIHgyPSI2MDAiIHkyPSI0MDAiPjxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9IiM2MzY2ZjEiLz48c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMwNmI2ZDAiLz48L2xpbmVhckdyYWRpZW50PjwvZGVmcz48L3N2Zz4=" alt="Hybrid Human OS">
                        <div class="project-overlay">
                            <a href="https://github.com/LiEmergent" class="project-link" title="Lihat Kode">    
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"/></svg>        
                            </a>
                        </div>
                    </div>
                    <div class="project-info">
                        <div class="project-tags">
                            <span class="project-tag">Python</span>
                            <span class="project-tag">AI Agents</span>
                            <span class="project-tag">Notion API</span>
                        </div>
                        <h3 class="project-title">Hybrid Human OS</h3>
                        <p class="project-desc">Sistem kehidupan berbasis AI yang menggabungkan produktivitas, nilai hidup, dan automasi personal.</p>
                        <div class="project-footer">
                            <span style="color: var(--text-muted); font-size: 0.85rem;">Eksperimen AI</span>    
                            <span style="color: var(--text-muted); font-size: 0.85rem;">2024</span>
                        </div>
                    </div>
                </div>
                <!-- Project 2 -->
                <div class="project-card">
                    <div class="project-image">
                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHJlY3Qgd2lkdGg9IjYwMCIgaGVpZ2h0PSI0MDAiIGZpbGw9InVybCgjcDIpIi8+PHBhdGggZD0iTTEwMCAyMDAgTDUwMCAyMDAiIHN0cm9rZT0id2hpdGUiIHN0cm9rZS13aWR0aD0iNCIgb3BhY2l0eT0iMC4yIi8+PGNpcmNsZSBjeD0iMTUwIiBjeT0iMjAwIiByPSIyMCIgZmlsbD0id2hpdGUiIG9wYWNpdHk9IjAuNCIvPjxjaXJjbGUgY3g9IjMwMCIgY3k9IjIwMCIgcj0iMjAiIGZpbGw9IndoaXRlIiBvcGFjaXR5PSIwLjQiLz48Y2lyY2xlIGN4PSI0NTAiIGN5PSIyMDAiIHI9IjIwIiBmaWxsPSJ3aGl0ZSIgb3BhY2l0eT0iMC40Ii8+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJwMiIgeDE9IjAiIHkxPSIwIiB4Mj0iNjAwIiB5Mj0iNDAwIj48c3RvcCBvZmZzZXQ9IjAlIiBzdG9wLWNvbG9yPSIjOGI1Y2Y2Ii8+PHN0b3Agb2Zmc2V0PSIxMDAlIiBzdG9wLWNvbG9yPSIjZDk0NmVmIi8+PC9saW5lYXJHcmFkaWVudD48L2RlZnM+PC9zdmc+" alt="GILLET">
                        <div class="project-overlay">
                            <a href="#" class="project-link" title="Detail">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                            </a>
                        </div>
                    </div>
                    <div class="project-info">
                        <div class="project-tags">
                            <span class="project-tag">System Design</span>
                            <span class="project-tag">Simulation</span>
                            <span class="project-tag">AI Modeling</span>
                        </div>
                        <h3 class="project-title">GILLET (Logistik Futuristik)</h3>
                        <p class="project-desc">Konsep sistem logistik berbasis kapsul vakum berkecepatan tinggi untuk revolusi distribusi di Indonesia.</p>
                        <div class="project-footer">
                            <span style="color: var(--text-muted); font-size: 0.85rem;">System Thinking</span>  
                            <span style="color: var(--text-muted); font-size: 0.85rem;">2024</span>
                        </div>
                    </div>
                </div>
                <!-- Project 3 -->
                <div class="project-card">
                    <div class="project-image">
                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHJlY3Qgd2lkdGg9IjYwMCIgaGVpZ2h0PSI0MDAiIGZpbGw9InVybCgjcDMpIi8+PHJlY3QgeD0iMjAwIiB5PSIxMDAiIHdpZHRoPSIyMDAiIGhlaWdodD0iMjAwIiByeD0iMTAwIiBmaWxsPSJ3aGl0ZSIgb3BhY2l0eT0iMC4xIi8+PGNpcmNsZSBjeD0iMzAwIiBjeT0iMTcwIiByPSIzMCIgZmlsbD0id2hpdGUiIG9wYWNpdHk9IjAuMyIvPjxwYXRoIGQ9Ik0yNjAgMjQwIFEzMDAgMjcwIDM0MCAyNDAiIHN0cm9rZT0id2hpdGUiIHN0cm9rZS13aWR0aD0iMyIgb3BhY2l0eT0iMC4zIi8+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJwMyIgeDE9IjAiIHkxPSIwIiB4Mj0iNjAwIiB5Mj0iNDAwIj48c3RvcCBvZmZzZXQ9IjAlIiBzdG9wLWNvbG9yPSIjMDZiNmQ0Ii8+PHN0b3Agb2Zmc2V0PSIxMDAlIiBzdG9wLWNvbG9yPSIjNjM2NmYxIi8+PC9saW5lYXJHcmFkaWVudD48L2RlZnM+PC9zdmc+" alt="AI Butler">
                        <div class="project-overlay">
                            <a href="#" class="project-link" title="Lihat Kode">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"/></svg>        
                            </a>
                        </div>
                    </div>
                    <div class="project-info">
                        <div class="project-tags">
                            <span class="project-tag">Python</span>
                            <span class="project-tag">LLM</span>
                            <span class="project-tag">Automation</span>
                        </div>
                        <h3 class="project-title">AI Butler Personal System</h3>
                        <p class="project-desc">Asisten AI pribadi yang membantu pengambilan keputusan, manajemen tugas, dan pembelajaran terakselerasi.</p>
                        <div class="project-footer">
                            <span style="color: var(--text-muted); font-size: 0.85rem;">Personal Productivity</span>
                            <span style="color: var(--text-muted); font-size: 0.85rem;">2023</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="section-header">
                <p class="section-label">Mari Berkolaborasi</p>
                <h2 class="section-title">Hubungi Saya</h2>
                <div class="section-line"></div>
            </div>
            <div class="contact-wrapper">
                <div class="contact-info fade-in">
                    <h3>Mari Bangun Sesuatu yang Luar Biasa Bersama</h3>
                    <p>Saya selalu terbuka untuk mendiskusikan proyek baru, ide kreatif, atau kesempatan untuk menjadi bagian dari visi Anda.</p>
                    <div class="contact-details">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            </div>
                            <div class="contact-text">
                                <span>Email</span>
                                <a href="mailto:nursalim210302@gmail.com">nursalim210302@gmail.com</a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            </div>
                            <div class="contact-text">
                                <span>Lokasi</span>
                                <p>Padang, Sumatera Barat</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.362 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                            </div>
                            <div class="contact-text">
                                <span>WhatsApp</span>
                                <a href="tel:0838313909">0838313909</a>
                            </div>
                        </div>
                    </div>
                    <div class="social-links">
                        <a href="https://github.com/LiEmergent" class="social-link" title="GitHub">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                        </a>
                    </div>
                </div>
                <form class="contact-form fade-in" id="contactForm" action="https://formspree.io/f/mpqkajjv" method="POST">
                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" id="name" name="name" placeholder="Nama Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Alamat Email</label>
                        <input type="email" id="email" name="email" placeholder="email@contoh.com" required>    
                    </div>
                    <div class="form-group">
                        <label for="message">Pesan</label>
                        <textarea id="message" name="message" placeholder="Tuliskan pesan atau ajakan kolaborasi..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary form-submit">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                        Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <p class="footer-text">© 2024 Nursalim (Tn. Lim). Built with AI & Passion.</p>
            <div class="footer-links">
                <a href="#about">Tentang</a>
                <a href="#projects">Proyek</a>
                <a href="#contact">Kontak</a>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
