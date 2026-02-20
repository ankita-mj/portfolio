<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ankita Kasera - Laravel Developer Portfolio">
    <title>Ankita Kasera - Laravel Developer</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #818cf8;
            --secondary-color: #a78bfa;
            --text-dark: #e5e7eb;
            --text-light: #9ca3af;
            --bg-light: #0f172a;
            --bg-card: #1e293b;
            --bg-card-hover: #334155;
            --border-color: #334155;
            --text-primary: #f1f5f9;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        html {
            scroll-behavior: smooth;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-primary);
            line-height: 1.6;
            background-color: var(--bg-light);
            overflow-x: hidden;
        }
        
        /* Animated Background */
        .animated-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }
        
        .animated-bg::before {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, #667eea 0%, #764ba2 50%, #667eea 100%);
            background-size: 200% 200%;
            animation: gradientShift 15s ease infinite;
            opacity: 0.1;
        }
        
        @keyframes gradientShift {
            0%, 100% { transform: translate(0%, 0%) rotate(0deg); }
            50% { transform: translate(-50%, -50%) rotate(180deg); }
        }
        
        .floating-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
        }
        
        .shape {
            position: absolute;
            opacity: 0.15;
            animation: float 20s infinite ease-in-out;
        }
        
        .shape:nth-child(1) {
            width: 80px;
            height: 80px;
            background: #667eea;
            border-radius: 50%;
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }
        
        .shape:nth-child(2) {
            width: 120px;
            height: 120px;
            background: #764ba2;
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            top: 60%;
            right: 10%;
            animation-delay: 2s;
        }
        
        .shape:nth-child(3) {
            width: 60px;
            height: 60px;
            background: #6366f1;
            border-radius: 50%;
            bottom: 20%;
            left: 20%;
            animation-delay: 4s;
        }
        
        .shape:nth-child(4) {
            width: 100px;
            height: 100px;
            background: #8b5cf6;
            border-radius: 20px;
            top: 40%;
            right: 20%;
            animation-delay: 6s;
            transform: rotate(45deg);
        }
        
        @keyframes float {
            0%, 100% {
                transform: translate(0, 0) rotate(0deg);
            }
            25% {
                transform: translate(20px, -20px) rotate(90deg);
            }
            50% {
                transform: translate(-20px, 20px) rotate(180deg);
            }
            75% {
                transform: translate(20px, 20px) rotate(270deg);
            }
        }
        
        /* Navbar Animations */
        .navbar {
            background: rgba(15, 23, 42, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 20px rgba(0,0,0,0.5);
            padding: 1rem 0;
            transition: all 0.3s ease;
            animation: slideDown 0.5s ease;
            border-bottom: 1px solid var(--border-color);
        }
        
        @keyframes slideDown {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
        
        .navbar.scrolled {
            padding: 0.5rem 0;
            box-shadow: 0 4px 30px rgba(0,0,0,0.7);
        }
        
        .navbar-brand {
            font-weight: 700;
            color: var(--primary-color) !important;
            font-size: 1.5rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: gradientText 3s ease infinite;
        }
        
        @keyframes gradientText {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        
        .nav-link {
            position: relative;
            transition: all 0.3s ease;
            font-weight: 500;
            color: var(--text-primary) !important;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            width: 0;
            height: 2px;
            background: linear-gradient(135deg, #818cf8 0%, #a78bfa 100%);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        .nav-link:hover {
            color: var(--primary-color) !important;
        }
        
        .navbar-toggler {
            border-color: var(--border-color);
        }
        
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28229, 231, 235, 1%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }
        
        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 120px 0 100px;
            margin-bottom: 60px;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="2" fill="rgba(255,255,255,0.1)"/></svg>');
            animation: movePattern 20s linear infinite;
        }
        
        @keyframes movePattern {
            0% { transform: translate(0, 0); }
            100% { transform: translate(100px, 100px); }
        }
        
        .hero-content h1 {
            font-size: 4rem;
            font-weight: 800;
            margin-bottom: 1rem;
            animation: fadeInUp 1s ease;
            position: relative;
        }
        
        .hero-content h1 .typing-text {
            display: inline-block;
            border-right: 3px solid white;
            animation: blink 1s infinite;
        }
        
        @keyframes blink {
            0%, 50% { border-color: transparent; }
            51%, 100% { border-color: white; }
        }
        
        .hero-content .subtitle {
            font-size: 1.75rem;
            font-weight: 400;
            margin-bottom: 2rem;
            opacity: 0.95;
            animation: fadeInUp 1s ease 0.3s both;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .contact-info {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            margin-top: 2rem;
            animation: fadeInUp 1s ease 0.6s both;
        }
        
        .contact-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50px;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
            animation: pulse 2s ease infinite;
        }
        
        .contact-item:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: scale(1.05);
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.02); }
        }
        
        .contact-item i {
            font-size: 1.2rem;
            animation: bounce 2s ease infinite;
        }
        
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
        }
        
        /* Section Animations */
        .section {
            padding: 80px 0;
            position: relative;
        }
        
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 3rem;
            position: relative;
            padding-bottom: 1rem;
            text-align: center;
        }
        
        .section-title::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 5px;
            background: linear-gradient(135deg, #818cf8 0%, #a78bfa 100%);
            border-radius: 5px;
            animation: expandLine 1s ease;
        }
        
        @keyframes expandLine {
            from { width: 0; }
            to { width: 100px; }
        }
        
        /* Card Animations */
        .card {
            border: 1px solid var(--border-color);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            margin-bottom: 2rem;
            background: var(--bg-card);
            overflow: hidden;
            position: relative;
        }
        
        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(129, 140, 248, 0.1), transparent);
            transition: left 0.5s;
        }
        
        .card:hover::before {
            left: 100%;
        }
        
        .card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 40px rgba(129, 140, 248, 0.3);
            border-color: var(--primary-color);
            background: var(--bg-card-hover);
        }
        
        .card-header {
            background: linear-gradient(135deg, #818cf8 0%, #a78bfa 100%);
            color: white;
            border-radius: 20px 20px 0 0 !important;
            padding: 2rem;
            border: none;
            position: relative;
            overflow: hidden;
        }
        
        .card-header::after {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: rotate 10s linear infinite;
        }
        
        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        
        .card-body {
            padding: 2.5rem;
            background: var(--bg-card);
            color: var(--text-primary);
        }
        
        .card-body p,
        .card-body li {
            color: var(--text-primary);
        }
        
        .card-title {
            color: var(--text-primary);
        }
        
        .card-text {
            color: var(--text-light);
        }
        
        /* Tech Badge Animations */
        .tech-badge {
            background: rgba(129, 140, 248, 0.15);
            color: var(--primary-color);
            border: 1px solid rgba(129, 140, 248, 0.3);
            padding: 0.5rem 1rem;
            border-radius: 25px;
            font-size: 0.85rem;
            font-weight: 600;
            display: inline-block;
            transition: all 0.3s ease;
            animation: fadeInScale 0.5s ease both;
            cursor: pointer;
        }
        
        @keyframes fadeInScale {
            from {
                opacity: 0;
                transform: scale(0.8);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        
        .tech-badge:hover {
            transform: scale(1.1) rotate(5deg);
            background: linear-gradient(135deg, #818cf8 0%, #a78bfa 100%);
            color: white;
            border-color: transparent;
            box-shadow: 0 5px 15px rgba(129, 140, 248, 0.5);
        }
        
        /* Skill Tag Animations */
        .skill-tag {
            background: linear-gradient(135deg, #818cf8 0%, #a78bfa 100%);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 30px;
            font-size: 0.9rem;
            font-weight: 600;
            transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            display: inline-block;
            position: relative;
            overflow: hidden;
            animation: slideInLeft 0.6s ease both;
        }
        
        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        .skill-tag::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }
        
        .skill-tag:hover::before {
            width: 300px;
            height: 300px;
        }
        
        .skill-tag:hover {
            transform: scale(1.15) translateY(-5px);
            box-shadow: 0 10px 25px rgba(129, 140, 248, 0.6);
        }
        
        .skill-tag span {
            position: relative;
            z-index: 1;
        }
        
        /* Social Links Animation */
        .social-links {
            display: flex;
            gap: 1.5rem;
            margin-top: 2rem;
            animation: fadeInUp 1s ease 0.9s both;
        }
        
        .social-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 55px;
            height: 55px;
            background: rgba(255, 255, 255, 0.2);
            color: white;
            border-radius: 50%;
            text-decoration: none;
            transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.3);
            position: relative;
            overflow: hidden;
        }
        
        .social-link::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: var(--bg-card);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.4s, height 0.4s;
        }
        
        .social-link:hover::before {
            width: 100%;
            height: 100%;
        }
        
        .social-link i {
            position: relative;
            z-index: 1;
            transition: transform 0.4s;
        }
        
        .social-link:hover {
            transform: translateY(-10px) rotate(360deg);
            border-color: white;
            box-shadow: 0 10px 30px rgba(255, 255, 255, 0.3);
        }
        
        .social-link:hover i {
            color: #667eea;
            transform: scale(1.2);
        }
        
        /* Education Card */
        .education-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 20px;
            padding: 3rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }
        
        .education-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: linear-gradient(135deg, #818cf8 0%, #a78bfa 100%);
            transition: width 0.4s ease;
        }
        
        .education-card:hover::before {
            width: 100%;
            opacity: 0.1;
        }
        
        .education-card:hover {
            transform: translateX(10px);
            box-shadow: 0 15px 40px rgba(129, 140, 248, 0.3);
            border-color: var(--primary-color);
            background: var(--bg-card-hover);
        }
        
        .education-degree {
            font-size: 1.5rem;
            font-weight: 700;
            background: linear-gradient(135deg, #818cf8 0%, #a78bfa 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 0.75rem;
            position: relative;
            z-index: 1;
        }
        
        .education-school {
            font-size: 1.1rem;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
            font-weight: 600;
            position: relative;
            z-index: 1;
        }
        
        .education-year {
            font-size: 1rem;
            color: var(--text-light);
            position: relative;
            z-index: 1;
        }
        
        /* Footer */
        .footer {
            background: linear-gradient(135deg, #0a0f1a 0%, #020617 100%);
            color: white;
            padding: 3rem 0;
            text-align: center;
            margin-top: 60px;
            position: relative;
            overflow: hidden;
            border-top: 1px solid var(--border-color);
        }
        
        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.05), transparent);
            animation: shine 3s infinite;
        }
        
        @keyframes shine {
            0% { left: -100%; }
            100% { left: 100%; }
        }
        
        /* Scroll Animations */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Loading Animation */
        .loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s ease, visibility 0.5s ease;
        }
        
        .loader.hidden {
            opacity: 0;
            visibility: hidden;
        }
        
        .spinner {
            width: 60px;
            height: 60px;
            border: 5px solid rgba(255, 255, 255, 0.3);
            border-top-color: white;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.5rem;
            }
            
            .hero-content .subtitle {
                font-size: 1.25rem;
            }
            
            .contact-info {
                flex-direction: column;
                gap: 1rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .skill-tag {
                font-size: 0.8rem;
                padding: 0.5rem 1rem;
            }
            
            .project-image-wrapper {
                height: 200px;
            }
            
            .project-title {
                font-size: 1.2rem;
            }
            
            .project-header {
                padding: 1.25rem 1.5rem;
            }
        }
        
        /* Project Card Styles */
        .project-card {
            border: 1px solid var(--border-color);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            margin-bottom: 2rem;
            background: var(--bg-card);
            overflow: hidden;
            position: relative;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        
        .project-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(129, 140, 248, 0.1), transparent);
            transition: left 0.5s;
        }
        
        .project-card:hover::before {
            left: 100%;
        }
        
        .project-card:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: 0 25px 50px rgba(129, 140, 248, 0.4);
            border-color: var(--primary-color);
            background: var(--bg-card-hover);
        }
        
        .project-card:hover .project-image {
            transform: scale(1.1);
        }
        
        .project-image-wrapper {
            position: relative;
            width: 100%;
            height: 250px;
            overflow: hidden;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            cursor: pointer;
        }
        
        .project-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .project-image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(102, 126, 234, 0.3), rgba(118, 75, 162, 0.5));
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
            pointer-events: none;
        }
        
        .project-card:hover .project-image-overlay {
            opacity: 1;
        }
        
        .project-image-overlay i {
            font-size: 3rem;
            color: white;
            animation: pulse 2s ease infinite;
        }
        
        /* Image Modal/Lightbox */
        .image-modal {
            display: none;
            position: fixed;
            z-index: 10000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.95);
            backdrop-filter: blur(10px);
            animation: fadeIn 0.3s ease;
            overflow: auto;
        }
        
        .image-modal.active {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        
        .image-modal-content {
            position: relative;
            max-width: 90%;
            max-height: 90vh;
            margin: auto;
            animation: zoomIn 0.3s ease;
        }
        
        @keyframes zoomIn {
            from {
                transform: scale(0.8);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }
        
        .image-modal-content img {
            width: 100%;
            height: auto;
            max-height: 90vh;
            object-fit: contain;
            border-radius: 10px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.8);
        }
        
        .image-modal-close {
            position: absolute;
            top: 20px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 10001;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            backdrop-filter: blur(10px);
        }
        
        .image-modal-close:hover {
            color: var(--primary-color);
            transform: rotate(90deg);
            background: rgba(129, 140, 248, 0.2);
        }
        
        .image-modal-caption {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            color: white;
            text-align: center;
            padding: 10px 20px;
            background: rgba(0, 0, 0, 0.7);
            border-radius: 25px;
            backdrop-filter: blur(10px);
            font-size: 1rem;
            max-width: 80%;
        }
        
        .project-header {
            background: linear-gradient(135deg, #818cf8 0%, #a78bfa 100%);
            color: white;
            padding: 1.5rem 2rem;
            position: relative;
            overflow: hidden;
        }
        
        .project-header::after {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: rotate 10s linear infinite;
        }
        
        .project-title {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            position: relative;
            z-index: 1;
            line-height: 1.3;
        }
        
        .project-url {
            font-size: 0.9rem;
            opacity: 0.9;
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .project-url a {
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .project-url a:hover {
            text-decoration: underline;
            transform: translateX(5px);
        }
        
        .project-body {
            padding: 2rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            background: var(--bg-card);
        }
        
        .project-description {
            color: var(--text-primary);
            line-height: 1.8;
            margin-bottom: 1.5rem;
            flex-grow: 1;
        }
        
        .project-tech {
            display: flex;
            flex-wrap: wrap;
            gap: 0.75rem;
            margin-bottom: 1.5rem;
        }
        
        .project-link-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            background: linear-gradient(135deg, #818cf8 0%, #a78bfa 100%);
            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            position: relative;
            overflow: hidden;
            margin-top: auto;
        }
        
        .project-link-btn::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }
        
        .project-link-btn:hover::before {
            width: 300px;
            height: 300px;
        }
        
        .project-link-btn:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 10px 25px rgba(129, 140, 248, 0.5);
        }
        
        .project-link-btn i {
            position: relative;
            z-index: 1;
            transition: transform 0.3s;
        }
        
        .project-link-btn:hover i {
            transform: translateX(5px);
        }
        
        .project-link-btn span {
            position: relative;
            z-index: 1;
        }
        
        .position-header {
            background: linear-gradient(135deg, #818cf8 0%, #a78bfa 100%);
            color: white;
            padding: 2rem;
            border-radius: 20px;
            margin-bottom: 3rem;
            text-align: center;
            box-shadow: 0 10px 30px rgba(129, 140, 248, 0.4);
            border: 1px solid rgba(129, 140, 248, 0.3);
        }
        
        .position-header h3 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }
        
        .position-header p {
            font-size: 1.1rem;
            opacity: 0.95;
            margin-bottom: 1rem;
        }
        
        .position-tech {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 0.75rem;
        }
        
        /* Experience List Animation */
        .experience-description li {
            opacity: 0;
            animation: fadeInLeft 0.6s ease both;
        }
        
        .experience-description li:nth-child(1) { animation-delay: 0.1s; }
        .experience-description li:nth-child(2) { animation-delay: 0.2s; }
        .experience-description li:nth-child(3) { animation-delay: 0.3s; }
        .experience-description li:nth-child(4) { animation-delay: 0.4s; }
        .experience-description li:nth-child(5) { animation-delay: 0.5s; }
        
        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
    </style>
</head>
<body>
    <!-- Loading Screen -->
    <div class="loader" id="loader">
        <div class="spinner"></div>
    </div>

    <!-- Animated Background -->
    <div class="animated-bg">
        <div class="floating-shapes">
            <div class="shape"></div>
            <div class="shape"></div>
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="#home">Ankita Kasera</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#experience">Experience</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#education">Education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="hero-content">
                        <h1><span class="typing-text" id="typing-text"></span></h1>
                        <p class="subtitle">Laravel Developer</p>
                        <div class="contact-info">
                            <div class="contact-item">
                                <i class="fas fa-envelope"></i>
                                <span>ankita.kasera0715@gmail.com</span>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-phone"></i>
                                <span>+91 8840034268</span>
                            </div>
                        </div>
                        <div class="social-links">
                            <a href="https://www.linkedin.com/in/ankitakasera" target="_blank" class="social-link" title="LinkedIn">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="https://github.com/ankita-mj" target="_blank" class="social-link" title="GitHub">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="section">
        <div class="container">
            <h2 class="section-title fade-in" data-aos="fade-up">Experience</h2>
            
            <!-- Position Header -->
            <div class="position-header fade-in" data-aos="fade-up" data-aos-delay="50">
                <h3>Software Developer</h3>
                <p>AHA Technocrats | Nov 2024 - Present</p>
                <div class="position-tech">
                    <span class="tech-badge">Laravel</span>
                    <span class="tech-badge">PHP</span>
                    <span class="tech-badge">MySQL</span>
                    <span class="tech-badge">JavaScript</span>
                    <span class="tech-badge">Bootstrap</span>
                    <span class="tech-badge">REST APIs</span>
                </div>
            </div>
            
            <!-- Projects Grid -->
            <div class="row">
                <!-- Project 1: AMU Management System -->
                <div class="col-lg-6 mb-4">
                    <div class="project-card fade-in" data-aos="fade-up" data-aos-delay="100">
                        <div class="project-image-wrapper" onclick="openImageModal('{{ asset('storage/amu.png') }}', 'Aligarh Muslim University Management System')">
                            <img src="{{ asset('storage/amu.png') }}" alt="Aligarh Muslim University Management System" class="project-image">
                            <div class="project-image-overlay">
                                <i class="fas fa-expand"></i>
                            </div>
                        </div>
                        <div class="project-header">
                            <div class="project-title">Aligarh Muslim University Management System</div>
                            <div class="project-url">
                                <i class="fas fa-globe"></i>
                                <a href="https://www.amu.ac.in/" target="_blank" rel="noopener noreferrer">amu.ac.in</a>
                            </div>
                        </div>
                        <div class="project-body">
                            <p class="project-description">
                                Contributed to the development of a large-scale academic platform with 20,000+ dynamic pages across multiple departments. Worked on backend modules, database design, APIs, and feature enhancements within a modular architecture.
                            </p>
                            <div class="project-tech">
                                <span class="tech-badge">Laravel</span>
                                <span class="tech-badge">PHP</span>
                                <span class="tech-badge">MySQL</span>
                                <span class="tech-badge">REST APIs</span>
                            </div>
                            <a href="https://www.amu.ac.in/" target="_blank" rel="noopener noreferrer" class="project-link-btn">
                                <span>Visit Project</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Project 2: CDOE Exam Portal -->
                <div class="col-lg-6 mb-4">
                    <div class="project-card fade-in" data-aos="fade-up" data-aos-delay="200">
                        <div class="project-image-wrapper" onclick="openImageModal('{{ asset('storage/cdoe.png') }}', 'CDOE Exam Portal')">
                            <img src="{{ asset('storage/cdoe.png') }}" alt="CDOE Exam Portal" class="project-image">
                            <div class="project-image-overlay">
                                <i class="fas fa-expand"></i>
                            </div>
                        </div>
                        <div class="project-header">
                            <div class="project-title">CDOE Exam Portal</div>
                            <div class="project-url">
                                <i class="fas fa-globe"></i>
                                <a href="https://cdoeamu.ac.in/" target="_blank" rel="noopener noreferrer">cdoeamu.ac.in</a>
                            </div>
                        </div>
                        <div class="project-body">
                            <p class="project-description">
                                Worked on a UGC-compliant online examination and result management system handling a high volume of users. Implemented exam workflows, timed tests, secure authentication, and result processing while maintaining data accuracy and system stability.
                            </p>
                            <div class="project-tech">
                                <span class="tech-badge">Laravel</span>
                                <span class="tech-badge">PHP</span>
                                <span class="tech-badge">MySQL</span>
                                <span class="tech-badge">JavaScript</span>
                            </div>
                            <a href="https://cdoeamu.ac.in/" target="_blank" rel="noopener noreferrer" class="project-link-btn">
                                <span>Visit Project</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Project 3: TheSelfWish -->
                <div class="col-lg-6 mb-4">
                    <div class="project-card fade-in" data-aos="fade-up" data-aos-delay="300">
                        <div class="project-image-wrapper" onclick="openImageModal('{{ asset('storage/selfwish.png') }}', 'TheSelfWish')">
                            <img src="{{ asset('storage/selfwish.png') }}" alt="TheSelfWish" class="project-image">
                            <div class="project-image-overlay">
                                <i class="fas fa-expand"></i>
                            </div>
                        </div>
                        <div class="project-header">
                            <div class="project-title">TheSelfWish</div>
                            <div class="project-url">
                                <i class="fas fa-globe"></i>
                                <a href="https://theselfwish.com/" target="_blank" rel="noopener noreferrer">theselfwish.com</a>
                            </div>
                        </div>
                        <div class="project-body">
                            <p class="project-description">
                                Contributed to the development of a social media platform for a U.S.-based golf community. Developed backend functionality for user profiles, posts, and media handling, and collaborated with frontend teams for smooth feature integration.
                            </p>
                            <div class="project-tech">
                                <span class="tech-badge">Laravel</span>
                                <span class="tech-badge">PHP</span>
                                <span class="tech-badge">MySQL</span>
                                <span class="tech-badge">REST APIs</span>
                            </div>
                            <a href="https://theselfwish.com/" target="_blank" rel="noopener noreferrer" class="project-link-btn">
                                <span>Visit Project</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Project 4: Adsqor Task Management -->
                <div class="col-lg-6 mb-4">
                    <div class="project-card fade-in" data-aos="fade-up" data-aos-delay="400">
                        <div class="project-image-wrapper" onclick="openImageModal('{{ asset('storage/adsqor.png') }}', 'Custom Adsqor Task Management System')">
                            <img src="{{ asset('storage/adsqor.png') }}" alt="Custom Adsqor Task Management System" class="project-image">
                            <div class="project-image-overlay">
                                <i class="fas fa-expand"></i>
                            </div>
                        </div>
                        <div class="project-header">
                            <div class="project-title">Custom Adsqor Task Management System</div>
                            <div class="project-url">
                                <i class="fas fa-globe"></i>
                                <a href="https://adsqor.com/" target="_blank" rel="noopener noreferrer">adsqor.com</a>
                            </div>
                        </div>
                        <div class="project-body">
                            <p class="project-description">
                                Developed and maintained backend modules for a multi-tenant task management system. Focused on task workflows, role-based access control, and backend automation for multiple client organizations.
                            </p>
                            <div class="project-tech">
                                <span class="tech-badge">Laravel</span>
                                <span class="tech-badge">PHP</span>
                                <span class="tech-badge">MySQL</span>
                                <span class="tech-badge">Multi-tenant</span>
                            </div>
                            <a href="https://adsqor.com/" target="_blank" rel="noopener noreferrer" class="project-link-btn">
                                <span>Visit Project</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Project 5: 1903 Aerospace -->
                <div class="col-lg-6 mb-4">
                    <div class="project-card fade-in" data-aos="fade-up" data-aos-delay="500">
                        <div class="project-image-wrapper" onclick="openImageModal('{{ asset('storage/1903aerospacecorp.png') }}', '1903 Aerospace Vendor Management System')">
                            <img src="{{ asset('storage/1903aerospacecorp.png') }}" alt="1903 Aerospace Vendor Management System" class="project-image">
                            <div class="project-image-overlay">
                                <i class="fas fa-expand"></i>
                            </div>
                        </div>
                        <div class="project-header">
                            <div class="project-title">1903 Aerospace Vendor Management System</div>
                            <div class="project-url">
                                <i class="fas fa-globe"></i>
                                <a href="https://1903aerospace.com/" target="_blank" rel="noopener noreferrer">1903aerospace.com</a>
                            </div>
                        </div>
                        <div class="project-body">
                            <p class="project-description">
                                Assisted in developing a vendor management system. Built and enhanced modules for vendor onboarding, document management, and internal approval workflows.
                            </p>
                            <div class="project-tech">
                                <span class="tech-badge">Laravel</span>
                                <span class="tech-badge">PHP</span>
                                <span class="tech-badge">MySQL</span>
                                <span class="tech-badge">Document Management</span>
                            </div>
                            <a href="https://1903aerospace.com/" target="_blank" rel="noopener noreferrer" class="project-link-btn">
                                <span>Visit Project</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Training Position -->
            <div class="card fade-in" data-aos="fade-up" data-aos-delay="200">
                <div class="card-header">
                    <h4 class="mb-0">PHP Full-Stack Training</h4>
                    <p class="mb-0">Arudan Technology | May 2024 – Nov 2024</p>
                </div>
                <div class="card-body">
                    <div class="experience-tech">
                        <span class="tech-badge">Laravel</span>
                        <span class="tech-badge">PHP</span>
                        <span class="tech-badge">MySQL</span>
                        <span class="tech-badge">JavaScript</span>
                        <span class="tech-badge">Bootstrap</span>
                        <span class="tech-badge">REST APIs</span>
                    </div>
                    <div class="experience-description">
                        <ul>
                            <li>Completed 6 months of hands-on training in PHP and Laravel.</li>
                            <li>Learned MVC, routing, middleware, migrations, and Eloquent ORM.</li>
                            <li>Developed projects involving authentication and CRUD operations.</li>
                            <li>Worked with MySQL for database relationships and optimization.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section id="education" class="section" style="background: var(--bg-light);">
        <div class="container">
            <h2 class="section-title fade-in" data-aos="fade-up">Education</h2>
            <div class="row">
                <div class="col-lg-8">
                    <div class="education-card fade-in" data-aos="fade-right">
                        <div class="education-degree">Bachelor of Computer Applications (BCA)</div>
                        <div class="education-school">Mahatma Gandhi Kashi Vidyapeeth</div>
                        <div class="education-year">Graduated 2024</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="section">
        <div class="container">
            <h2 class="section-title fade-in" data-aos="fade-up">Skills</h2>
            <div class="row">
                <div class="col-lg-6">
                    <div class="skill-category fade-in" data-aos="fade-up" data-aos-delay="100">
                        <h5><i class="fas fa-code"></i> Frontend Technologies</h5>
                        <div class="skill-tags">
                            <span class="skill-tag"><span>jQuery</span></span>
                            <span class="skill-tag"><span>AJAX</span></span>
                            <span class="skill-tag"><span>Bootstrap</span></span>
                            <span class="skill-tag"><span>Responsive Design</span></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="skill-category fade-in" data-aos="fade-up" data-aos-delay="200">
                        <h5><i class="fas fa-server"></i> Backend Development</h5>
                        <div class="skill-tags">
                            <span class="skill-tag"><span>RESTful APIs</span></span>
                            <span class="skill-tag"><span>MVC Architecture</span></span>
                            <span class="skill-tag"><span>Authentication</span></span>
                            <span class="skill-tag"><span>Authorization</span></span>
                            <span class="skill-tag"><span>CRUD Operations</span></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="skill-category fade-in" data-aos="fade-up" data-aos-delay="300">
                        <h5><i class="fas fa-database"></i> Database Management</h5>
                        <div class="skill-tags">
                            <span class="skill-tag"><span>MySQL</span></span>
                            <span class="skill-tag"><span>Query Optimization</span></span>
                            <span class="skill-tag"><span>Indexing</span></span>
                            <span class="skill-tag"><span>Relationships</span></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="skill-category fade-in" data-aos="fade-up" data-aos-delay="400">
                        <h5><i class="fas fa-tools"></i> Tools & Languages</h5>
                        <div class="skill-tags">
                            <span class="skill-tag"><span>PHP</span></span>
                            <span class="skill-tag"><span>Laravel</span></span>
                            <span class="skill-tag"><span>MySQL</span></span>
                            <span class="skill-tag"><span>JavaScript</span></span>
                            <span class="skill-tag"><span>jQuery</span></span>
                            <span class="skill-tag"><span>HTML</span></span>
                            <span class="skill-tag"><span>CSS</span></span>
                            <span class="skill-tag"><span>Git</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Links Section -->
    <section id="contact" class="section" style="background: var(--bg-light);">
        <div class="container">
            <h2 class="section-title fade-in" data-aos="fade-up">Additional Links</h2>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card fade-in" data-aos="flip-left" data-aos-delay="100">
                        <div class="card-body text-center">
                            <h5 class="card-title">Arudan Technology</h5>
                            <p class="card-text">Training Institute</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card fade-in" data-aos="flip-right" data-aos-delay="200">
                        <div class="card-body text-center">
                            <h5 class="card-title">AHA Technocrats</h5>
                            <p class="card-text">Current Employer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Image Modal -->
    <div id="imageModal" class="image-modal">
        <span class="image-modal-close" onclick="closeImageModal()">&times;</span>
        <div class="image-modal-content">
            <img id="modalImage" src="" alt="">
            <div class="image-modal-caption" id="modalCaption"></div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; {{ date('Y') }} Ankita Kasera. All rights reserved.</p>
            <p class="mb-0">Laravel Developer | Building scalable web applications</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // Loading Screen
        window.addEventListener('load', function() {
            setTimeout(function() {
                document.getElementById('loader').classList.add('hidden');
            }, 1000);
        });

        // Typing Effect
        function typeWriter(element, text, speed = 100) {
            let i = 0;
            element.innerHTML = '';
            function type() {
                if (i < text.length) {
                    element.innerHTML += text.charAt(i);
                    i++;
                    setTimeout(type, speed);
                } else {
                    element.classList.remove('typing-text');
                }
            }
            type();
        }

        // Start typing effect after page load
        window.addEventListener('load', function() {
            setTimeout(function() {
                const typingElement = document.getElementById('typing-text');
                typeWriter(typingElement, 'Ankita Kasera', 150);
            }, 500);
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });

        // Animate skill tags on scroll
        const skillTags = document.querySelectorAll('.skill-tag');
        const skillObserver = new IntersectionObserver(function(entries) {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.style.animationDelay = `${index * 0.1}s`;
                        entry.target.style.opacity = '1';
                    }, index * 100);
                }
            });
        }, { threshold: 0.1 });

        skillTags.forEach(tag => {
            skillObserver.observe(tag);
        });

        // Parallax effect for hero section
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const hero = document.querySelector('.hero-section');
            if (hero) {
                hero.style.transform = `translateY(${scrolled * 0.5}px)`;
            }
        });

        // Add stagger animation to tech badges
        const techBadges = document.querySelectorAll('.tech-badge');
        techBadges.forEach((badge, index) => {
            badge.style.animationDelay = `${index * 0.1}s`;
        });

        // Image Modal Functions
        function openImageModal(imageSrc, imageAlt) {
            const modal = document.getElementById('imageModal');
            const modalImg = document.getElementById('modalImage');
            const caption = document.getElementById('modalCaption');
            
            modal.classList.add('active');
            modalImg.src = imageSrc;
            modalImg.alt = imageAlt;
            caption.textContent = imageAlt;
            
            // Prevent body scroll when modal is open
            document.body.style.overflow = 'hidden';
        }

        function closeImageModal() {
            const modal = document.getElementById('imageModal');
            modal.classList.remove('active');
            
            // Restore body scroll
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside the image
        document.getElementById('imageModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeImageModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeImageModal();
            }
        });
    </script>
</body>
</html>
