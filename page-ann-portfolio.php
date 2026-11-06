<?php

/*

Template Name: Ann Jelie Dalde Portfolio

Description: Responsive personal portfolio for Ann Jelie Dalde, System Analyst.

*/



if ( ! defined( 'ABSPATH' ) ) {

    exit;

}



get_header();



$kp_images = trailingslashit( get_stylesheet_directory_uri() ) . 'assets/images/';



?>



<style>

/* =========================================================

   ANN JELIE DALDE — PERSONAL SYSTEM ANALYST PORTFOLIO

   All styles are scoped to .kerby-portfolio to avoid

   unintentionally changing the active WordPress theme.

\========================================================= */

.kerby-portfolio {

    --kp-black: #101010;

    --kp-dark: #181818;

    --kp-card: #202020;

    --kp-orange: #f97316;

    --kp-orange-dark: #d95b08;

    --kp-cream: #f5f3ef;

    --kp-white: #fff;

    --kp-text: #242424;

    --kp-gray: #686868;

    --kp-muted: #a3a3a3;

    --kp-border: #e5e0d8;

    --kp-radius: 3px;

    width: 100%;

    overflow: hidden;

    background: var(--kp-cream);

    color: var(--kp-text);

    font-family: inherit;

    line-height: 1.6;

    isolation: isolate;

}



.kerby-portfolio,

.kerby-portfolio *,

.kerby-portfolio *::before,

.kerby-portfolio *::after { box-sizing: border-box; }

.kerby-portfolio img { display: block; max-width: 100%; }

.kerby-portfolio a { text-decoration: none; }

.kerby-portfolio button,

.kerby-portfolio input { font: inherit; }

.kerby-portfolio .kp-container { width: min(1180px, calc(100% - 48px)); margin-inline: auto; }

.kerby-portfolio .kp-section { padding: 104px 0; }

.kerby-portfolio .kp-label {

    display: inline-flex; align-items: center; gap: 10px;

    color: var(--kp-orange-dark); font-size: 10px; font-weight: 900;

    letter-spacing: 2px; text-transform: uppercase;

}

.kerby-portfolio .kp-label::before { content: ""; width: 23px; height: 2px; background: var(--kp-orange); }

.kerby-portfolio .kp-heading {

    margin: 18px 0; color: var(--kp-black);

    font-size: clamp(38px, 5vw, 62px); line-height: 1.04;

    letter-spacing: -2.8px; font-weight: 900;

}

.kerby-portfolio .kp-heading span { color: var(--kp-orange-dark); }

.kerby-portfolio .kp-description { max-width: 620px; margin: 0; color: var(--kp-gray); font-size: 14px; line-height: 1.9; }

.kerby-portfolio .kp-section-header { margin-bottom: 48px; }

.kerby-portfolio .kp-sr-only {

    position: absolute !important; width: 1px; height: 1px; padding: 0; margin: -1px;

    overflow: hidden; clip: rect(0,0,0,0); white-space: nowrap; border: 0;

}



/* Buttons */

.kerby-portfolio .kp-button {

    display: inline-flex; align-items: center; justify-content: space-between; gap: 24px;

    min-height: 50px; padding: 14px 19px; border: 1px solid var(--kp-orange);

    border-radius: var(--kp-radius); background: var(--kp-orange); color: var(--kp-black);

    font-size: 10px; font-weight: 900; letter-spacing: 1px; transition: transform .25s ease, *background* .25s ease, border-color .25s ease, color .25s ease;

}

.kerby-portfolio .kp-button:hover { transform: translateY(-3px); border-color: var(--kp-orange-dark); background: var(--kp-orange-dark); color: var(--kp-white); }

.kerby-portfolio .kp-button-outline { border-color: #555; background: transparent; color: var(--kp-white); }

.kerby-portfolio .kp-button-outline:hover { border-color: var(--kp-white); background: var(--kp-white); color: var(--kp-black); }

.kerby-portfolio .kp-button-arrow { font-size: 17px; line-height: 1; }



/* Hero */

.kerby-portfolio .kp-hero {

    position: relative; overflow: hidden; isolation: isolate; padding: 30px 0 22px;

    background: radial-gradient(circle at 82% 43%, rgba(249,115,22,.15), transparent 34%), var(--kp-black); color: var(--kp-white);

}

.kerby-portfolio .kp-hero::before {

    position: absolute; z-index: -1; inset: 0; content: ""; opacity: .12; pointer-events: none;

    background-image: linear-gradient(rgba(255,255,255,.08) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,.08) 1px, transparent 1px);

    background-size: 54px 54px; mask-image: linear-gradient(to right, transparent, #000);

}

.kerby-portfolio .kp-hero-top,

.kerby-portfolio .kp-hero-bottom { display: flex; align-items: center; justify-content: space-between; gap: 18px; }

.kerby-portfolio .kp-hero-top { padding-bottom: 20px; border-bottom: 1px solid #333; }

.kerby-portfolio .kp-hero-top .kp-label { color: #ffad79; }

.kerby-portfolio .kp-hero-index,

.kerby-portfolio .kp-hero-bottom { color: #888; font-family: Consolas, Monaco, monospace; font-size: 9px; letter-spacing: 1px; }

.kerby-portfolio .kp-hero-grid { display: grid; grid-template-columns: 1.08fr .92fr; align-items: center; gap: 72px; padding: 88px 0 82px; }

.kerby-portfolio .kp-hero-content { position: relative; z-index: 1; animation: kp-rise .7s ease both; }

.kerby-portfolio .kp-hero-pretitle { display: flex; align-items: center; gap: 10px; margin-bottom: 20px; color: #aaa; font-size: 10px; font-weight: 800; letter-spacing: 2px; }

.kerby-portfolio .kp-hero-pretitle span { color: var(--kp-orange); }

.kerby-portfolio .kp-hero-content h1 { margin: 0 0 24px; color: var(--kp-white); font-size: clamp(60px, 8vw, 98px); font-weight: 900; line-height: .94; letter-spacing: -5px; }

.kerby-portfolio .kp-hero-content h1 span { display: block; color: var(--kp-orange); }

.kerby-portfolio .kp-role { display: inline-flex; align-items: center; gap: 10px; margin-bottom: 22px; padding: 9px 12px; border: 1px solid rgba(249,115,22,.38); background: rgba(249,115,22,.09); color: #ffb17f; font-family: Consolas, Monaco, monospace; font-size: 10px; font-weight: 700; letter-spacing: .8px; }

.kerby-portfolio .kp-role span { width: 7px; height: 7px; border-radius: 50%; background: var(--kp-orange); box-shadow: 0 0 0 4px rgba(249,115,22,.12); }

.kerby-portfolio .kp-hero-content > p { max-width: 560px; margin: 0 0 30px; color: #aaa; font-size: 14px; line-height: 2; }

.kerby-portfolio .kp-hero-actions { display: flex; flex-wrap: wrap; gap: 12px; }



/* Profile code window */

.kerby-portfolio .kp-hero-visual { width: 100%; max-width: 440px; margin-left: auto; animation: kp-rise .85s .1s ease both; }

.kerby-portfolio .kp-profile-window { overflow: hidden; border: 1px solid #383838; background: #191919; box-shadow: 0 28px 75px rgba(0,0,0,.35); }

.kerby-portfolio .kp-window-header { display: flex; align-items: center; justify-content: space-between; padding: 13px 16px; border-bottom: 1px solid #333; color: #999; font-family: Consolas, Monaco, monospace; font-size: 10px; }

.kerby-portfolio .kp-window-dots { display: flex; gap: 6px; }

.kerby-portfolio .kp-window-dots span { width: 8px; height: 8px; border-radius: 50%; background: #555; }

.kerby-portfolio .kp-window-dots span:first-child { background: var(--kp-orange); }

.kerby-portfolio .kp-window-content { padding: 20px; }

.kerby-portfolio .kp-window-path { margin-bottom: 15px; color: #777; font-family: Consolas, Monaco, monospace; font-size: 10px; }

.kerby-portfolio .kp-profile-photo { position: relative; height: 325px; overflow: hidden; background: #292929; }

.kerby-portfolio .kp-profile-photo img { width: 100%; height: 100%; object-fit: cover; object-position: center; }

.kerby-portfolio .kp-profile-photo::after { position: absolute; inset: 48% 0 0; content: ""; pointer-events: none; background: linear-gradient(transparent, rgba(0,0,0,.68)); }

.kerby-portfolio .kp-profile-photo-caption { position: absolute; z-index: 1; right: 15px; bottom: 14px; left: 15px; display: flex; align-items: flex-end; justify-content: space-between; gap: 12px; }

.kerby-portfolio .kp-profile-photo-caption strong { color: white; font-size: 16px; }

.kerby-portfolio .kp-profile-photo-caption span { color: #ddd; font-family: Consolas, Monaco, monospace; font-size: 9px; }

.kerby-portfolio .kp-profile-code { padding-top: 16px; color: #bdbdbd; font-family: Consolas, Monaco, monospace; font-size: 11px; line-height: 1.85; }

.kerby-portfolio .kp-profile-code p { margin: 2px 0; }

.kerby-portfolio .kp-code-indent { padding-left: 18px; }

.kerby-portfolio .kp-code-comment { color: #777; }

.kerby-portfolio .kp-code-purple { color: #c792ea; }

.kerby-portfolio .kp-code-blue { color: #82aaff; }

.kerby-portfolio .kp-code-green { color: #c3e88d; }

.kerby-portfolio .kp-code-orange { color: #ffcb6b; }

.kerby-portfolio .kp-hero-bottom { padding-top: 18px; border-top: 1px solid #333; }



/* Snapshot strip */

.kerby-portfolio .kp-snapshot { background: var(--kp-orange); }

.kerby-portfolio .kp-snapshot-grid { display: grid; grid-template-columns: repeat(4, 1fr); }

.kerby-portfolio .kp-snapshot-item { padding: 23px 22px; border-right: 1px solid rgba(0,0,0,.16); }

.kerby-portfolio .kp-snapshot-item:last-child { border-right: 0; }

.kerby-portfolio .kp-snapshot-item span { display: block; margin-bottom: 6px; color: #59371f; font-size: 9px; font-weight: 900; letter-spacing: 1.3px; }

.kerby-portfolio .kp-snapshot-item strong { display: block; color: var(--kp-black); font-size: 14px; font-weight: 900; }



/* About */

.kerby-portfolio .kp-about { background: var(--kp-cream); }

.kerby-portfolio .kp-about-grid { display: grid; grid-template-columns: .78fr 1.22fr; align-items: start; gap: 78px; }

.kerby-portfolio .kp-about-heading { position: sticky; top: 95px; }

.kerby-portfolio .kp-about-heading .kp-description { max-width: 340px; }

.kerby-portfolio .kp-about-content p { margin: 0 0 18px; color: #666; font-size: 14px; line-height: 2; }

.kerby-portfolio .kp-about-content p strong { color: var(--kp-black); }

.kerby-portfolio .kp-about-facts { display: grid; grid-template-columns: repeat(2, 1fr); gap: 12px; margin-top: 30px; }

.kerby-portfolio .kp-fact { padding: 20px; border: 1px solid var(--kp-border); background: #fff; transition: transform .25s ease, border-color .25s ease; }

.kerby-portfolio .kp-fact:hover { transform: translateY(-4px); border-color: var(--kp-orange); }

.kerby-portfolio .kp-fact span { display: block; margin-bottom: 7px; color: #999; font-size: 9px; font-weight: 900; letter-spacing: 1.2px; }

.kerby-portfolio .kp-fact strong { display: block; color: #222; font-size: 13px; font-weight: 800; }



/* Skills */

.kerby-portfolio .kp-skills { background: #fff; }

.kerby-portfolio .kp-skills-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 17px; }

.kerby-portfolio .kp-skill-card { position: relative; overflow: hidden; padding: 27px; border: 1px solid var(--kp-border); background: #fff; transition: transform .3s ease, border-color .3s ease, box-shadow .3s ease; }

.kerby-portfolio .kp-skill-card::after { position: absolute; right: -35px; bottom: -48px; width: 110px; height: 110px; border: 1px solid rgba(249,115,22,.13); border-radius: 50%; content: ""; transition: transform .3s ease; }

.kerby-portfolio .kp-skill-card:hover { transform: translateY(-5px); border-color: var(--kp-orange); box-shadow: 0 14px 32px rgba(0,0,0,.06); }

.kerby-portfolio .kp-skill-card:hover::after { transform: scale(1.3); }

.kerby-portfolio .kp-skill-top { display: flex; align-items: center; justify-content: space-between; }

.kerby-portfolio .kp-skill-number { color: var(--kp-orange-dark); font-family: Consolas, Monaco, monospace; font-size: 11px; font-weight: 900; }

.kerby-portfolio .kp-skill-symbol { display: grid; width: 42px; height: 42px; place-items: center; background: var(--kp-black); color: var(--kp-orange); font-family: Consolas, Monaco, monospace; font-size: 13px; font-weight: 900; }

.kerby-portfolio .kp-skill-card h3 { margin: 22px 0 11px; color: var(--kp-black); font-size: 19px; font-weight: 900; }

.kerby-portfolio .kp-skill-card p { min-height: 66px; margin: 0 0 17px; color: var(--kp-gray); font-size: 12px; line-height: 1.8; }

.kerby-portfolio .kp-skill-tags { display: flex; flex-wrap: wrap; gap: 7px; }

.kerby-portfolio .kp-skill-tags span,

.kerby-portfolio .kp-project-stack span { padding: 7px 9px; border: 1px solid #ece8e2; background: var(--kp-cream); color: #555; font-family: Consolas, Monaco, monospace; font-size: 9px; }



/* Education */

.kerby-portfolio .kp-education { background: var(--kp-cream); }

.kerby-portfolio .kp-education-layout { display: grid; grid-template-columns: .72fr 1.28fr; align-items: start; gap: 75px; }

.kerby-portfolio .kp-education-intro { position: sticky; top: 95px; }

.kerby-portfolio .kp-education-intro .kp-description { max-width: 350px; }

.kerby-portfolio .kp-timeline { position: relative; padding-left: 32px; border-left: 2px solid rgba(249,115,22,.3); }

.kerby-portfolio .kp-education-item { position: relative; padding: 0 0 37px; }

.kerby-portfolio .kp-education-item:last-child { padding-bottom: 0; }

.kerby-portfolio .kp-education-item::before { position: absolute; top: 2px; left: -41px; width: 16px; height: 16px; border: 4px solid var(--kp-cream); border-radius: 50%; background: var(--kp-orange); box-shadow: 0 0 0 2px var(--kp-orange); content: ""; }

.kerby-portfolio .kp-education-year { display: inline-block; padding: 6px 10px; background: rgba(249,115,22,.12); color: var(--kp-orange-dark); font-family: Consolas, Monaco, monospace; font-size: 10px; font-weight: 900; }

.kerby-portfolio .kp-education-item h3 { margin: 12px 0 6px; color: var(--kp-black); font-size: 19px; font-weight: 900; }

.kerby-portfolio .kp-education-item p { margin: 0; color: var(--kp-gray); font-size: 13px; line-height: 1.8; }



/* Projects */

.kerby-portfolio .kp-projects { background: #fff; }

.kerby-portfolio .kp-project-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 22px; }

.kerby-portfolio .kp-project-card { overflow: hidden; border: 1px solid var(--kp-border); background: var(--kp-cream); transition: transform .3s ease, border-color .3s ease, box-shadow .3s ease; }

.kerby-portfolio .kp-project-card:hover { transform: translateY(-5px); border-color: var(--kp-orange); box-shadow: 0 16px 35px rgba(0,0,0,.07); }

.kerby-portfolio .kp-project-image { position: relative; height: 250px; overflow: hidden; background: #e5e1da; }

.kerby-portfolio .kp-project-image img { width: 100%; height: 100%; object-fit: cover; transition: transform .5s ease; }

.kerby-portfolio .kp-project-card:hover .kp-project-image img { transform: scale(1.045); }

.kerby-portfolio .kp-project-overlay { position: absolute; inset: 0; display: flex; align-items: flex-start; justify-content: space-between; padding: 15px; pointer-events: none; }

.kerby-portfolio .kp-project-category { padding: 7px 10px; background: var(--kp-black); color: #fff; font-family: Consolas, Monaco, monospace; font-size: 9px; font-weight: 800; letter-spacing: .7px; }

.kerby-portfolio .kp-project-index { color: #fff; font-family: Consolas, Monaco, monospace; font-size: 10px; text-shadow: 0 1px 5px #000; }

.kerby-portfolio .kp-project-info { padding: 24px; }

.kerby-portfolio .kp-project-meta { display: flex; justify-content: space-between; gap: 12px; color: #888; font-family: Consolas, Monaco, monospace; font-size: 9px; letter-spacing: .4px; }

.kerby-portfolio .kp-project-info h3 { margin: 13px 0 9px; color: var(--kp-black); font-size: 22px; font-weight: 900; letter-spacing: -.5px; }

.kerby-portfolio .kp-project-info > p { min-height: 70px; margin: 0 0 16px; color: var(--kp-gray); font-size: 12px; line-height: 1.85; }

.kerby-portfolio .kp-project-role { padding: 13px 14px; margin: 0 0 16px; border-left: 2px solid var(--kp-orange); background: rgba(249,115,22,.07); color: #555; font-size: 11px; line-height: 1.7; }

.kerby-portfolio .kp-project-role strong { color: var(--kp-black); }

.kerby-portfolio .kp-project-stack { display: flex; flex-wrap: wrap; gap: 7px; padding-top: 15px; border-top: 1px solid #e4dfd7; }

.kerby-portfolio .kp-project-stack span { background: #fff; }



/* Certificates / learning */

.kerby-portfolio .kp-certificates { background: var(--kp-cream); }

.kerby-portfolio .kp-certificate-box { display: grid; grid-template-columns: 82px 1fr; align-items: start; gap: 28px; padding: 34px; margin-top: 34px; border: 1px solid var(--kp-border); background: #fff; }

.kerby-portfolio .kp-certificate-icon { display: grid; width: 72px; height: 72px; place-items: center; background: var(--kp-black); color: var(--kp-orange); font-family: Consolas, Monaco, monospace; font-size: 22px; font-weight: 900; }

.kerby-portfolio .kp-certificate-content > span { color: var(--kp-orange-dark); font-family: Consolas, Monaco, monospace; font-size: 10px; font-weight: 900; letter-spacing: 1px; }

.kerby-portfolio .kp-certificate-content h3 { margin: 10px 0; color: var(--kp-black); font-size: 22px; font-weight: 900; }

.kerby-portfolio .kp-certificate-content p { max-width: 730px; margin: 0 0 10px; color: var(--kp-gray); font-size: 13px; line-height: 1.9; }

.kerby-portfolio .kp-certificate-content p:last-child { margin-bottom: 0; }



/* Contact */

.kerby-portfolio .kp-contact { position: relative; overflow: hidden; padding: 100px 0; background: radial-gradient(circle at 50% 100%, rgba(249,115,22,.16), transparent 45%), var(--kp-black); color: #fff; text-align: center; }

.kerby-portfolio .kp-contact::before { position: absolute; top: 15px; right: 4%; content: "</>"; color: rgba(255,255,255,.035); font-family: Consolas, Monaco, monospace; font-size: clamp(110px, 20vw, 230px); font-weight: 900; pointer-events: none; }

.kerby-portfolio .kp-contact-content { position: relative; z-index: 1; }

.kerby-portfolio .kp-contact .kp-label { justify-content: center; color: #ffad79; }

.kerby-portfolio .kp-contact h2 { max-width: 820px; margin: 23px auto; color: #fff; font-size: clamp(40px, 6vw, 70px); font-weight: 900; line-height: 1.05; letter-spacing: -2.5px; }

.kerby-portfolio .kp-contact h2 span { color: var(--kp-orange); }

.kerby-portfolio .kp-contact p { max-width: 590px; margin: 0 auto 28px; color: #aaa; font-size: 14px; line-height: 1.9; }

.kerby-portfolio .kp-contact-email { display: inline-block; margin-top: 23px; color: #ffad79; font-family: Consolas, Monaco, monospace; font-size: 12px; transition: color .2s ease; }

.kerby-portfolio .kp-contact-email:hover { color: #fff; }

.kerby-portfolio .kp-back-top { display: inline-block; margin-top: 38px; color: #888; font-family: Consolas, Monaco, monospace; font-size: 10px; letter-spacing: 1px; transition: color .2s ease; }

.kerby-portfolio .kp-back-top:hover { color: var(--kp-orange); }



/* Entrance motion: only used when motion is allowed */

@keyframes kp-rise { from { opacity: 0; transform: translateY(18px); } to { opacity: 1; transform: translateY(0); } }



/* Responsive */

@media (max-width: 980px) {

    .kerby-portfolio .kp-section { padding: 82px 0; }

    .kerby-portfolio .kp-hero-grid { gap: 38px; }

    .kerby-portfolio .kp-hero-content h1 { font-size: clamp(58px, 7vw, 76px); letter-spacing: -4px; }

    .kerby-portfolio .kp-profile-photo { height: 290px; }

    .kerby-portfolio .kp-about-grid,

    .kerby-portfolio .kp-education-layout { gap: 42px; }

    .kerby-portfolio .kp-skills-grid { grid-template-columns: repeat(2, 1fr); }

    .kerby-portfolio .kp-snapshot-item { padding-inline: 15px; }

}

@media (max-width: 720px) {

    .kerby-portfolio .kp-container { width: calc(100% - 36px); }

    .kerby-portfolio .kp-section { padding: 70px 0; }

    .kerby-portfolio .kp-hero { padding-top: 23px; }

    .kerby-portfolio .kp-hero-grid { grid-template-columns: 1fr; gap: 42px; padding: 66px 0 58px; }

    .kerby-portfolio .kp-hero-content h1 { font-size: clamp(58px, 13vw, 76px); letter-spacing: -3px; }

    .kerby-portfolio .kp-hero-content > p { font-size: 13px; }

    .kerby-portfolio .kp-hero-visual { max-width: 440px; margin-inline: auto; }

    .kerby-portfolio .kp-profile-photo { height: 340px; }

    .kerby-portfolio .kp-hero-index { max-width: 125px; text-align: right; line-height: 1.6; }

    .kerby-portfolio .kp-hero-bottom { font-size: 8px; }

    .kerby-portfolio .kp-snapshot-grid { grid-template-columns: repeat(2, 1fr); }

    .kerby-portfolio .kp-snapshot-item:nth-child(2) { border-right: 0; }

    .kerby-portfolio .kp-snapshot-item:nth-child(-n+2) { border-bottom: 1px solid rgba(0,0,0,.16); }

    .kerby-portfolio .kp-about-grid,

    .kerby-portfolio .kp-education-layout { grid-template-columns: 1fr; gap: 30px; }

    .kerby-portfolio .kp-about-heading,

    .kerby-portfolio .kp-education-intro { position: static; }

    .kerby-portfolio .kp-project-grid { grid-template-columns: 1fr; }

    .kerby-portfolio .kp-project-info > p { min-height: 0; }

    .kerby-portfolio .kp-certificate-box { grid-template-columns: 1fr; gap: 20px; padding: 26px; }

    .kerby-portfolio .kp-contact { padding: 76px 0; }

}

@media (max-width: 460px) {

    .kerby-portfolio .kp-about-facts,

    .kerby-portfolio .kp-skills-grid { grid-template-columns: 1fr; }

    .kerby-portfolio .kp-hero-actions { flex-direction: column; align-items: stretch; }

    .kerby-portfolio .kp-hero-actions .kp-button { width: 100%; }

    .kerby-portfolio .kp-profile-photo { height: 295px; }

    .kerby-portfolio .kp-skill-card { padding: 23px; }

    .kerby-portfolio .kp-project-image { height: 205px; }

    .kerby-portfolio .kp-project-info { padding: 20px; }

    .kerby-portfolio .kp-heading { letter-spacing: -1.8px; }

    .kerby-portfolio .kp-contact h2 { font-size: 41px; letter-spacing: -1.7px; }

    .kerby-portfolio .kp-hero-bottom { align-items: flex-start; flex-direction: column; gap: 7px; }

}



/* Keyboard focus and reduced-motion support */

.kerby-portfolio a:focus-visible { outline: 2px solid var(--kp-orange); outline-offset: 4px; }

@media (prefers-reduced-motion: reduce) {

    .kerby-portfolio *, .kerby-portfolio *::before, .kerby-portfolio *::after {

        scroll-behavior: auto !important; animation-duration: .01ms !important;

        animation-iteration-count: 1 !important; transition-duration: .01ms !important;

    }

}

</style>



<main class="kerby-portfolio" id="top">



    <!-- HERO / INTRODUCTION -->

    <section class="kp-hero" aria-labelledby="kp-hero-title">

        <div class="kp-container">

            <div class="kp-hero-top">

                <span class="kp-label">PERSONAL PORTFOLIO / 2026</span>

                <span class="kp-hero-index">SYSTEM_ANALYST_PROFILE_001</span>

            </div>



            <div class="kp-hero-grid">

                <div class="kp-hero-content">

                    <div class="kp-hero-pretitle"><span>01.</span> INTRODUCTION</div>

                    <h1 id="kp-hero-title">Hello, I'm <span>Ann Jelie Dalde.</span></h1>

                    <div class="kp-role"><span aria-hidden="true"></span> SYSTEM ANALYST</div>

                    <p>

                        I'm Ann Jelie Dalde, a student interested in technology, problem-solving, and

                        understanding how systems work. As a System Analyst, I focus on

                        identifying user needs, analyzing processes, organizing information,

                        and helping shape practical solutions for project requirements.

                    </p>

                    <div class="kp-hero-actions">

                        <a href="#kp-projects" class="kp-button">EXPLORE MY WORK <span class="kp-button-arrow" aria-hidden="true">↗</span></a>

                        <a href="#kp-about" class="kp-button kp-button-outline">ABOUT ME <span class="kp-button-arrow" aria-hidden="true">↓</span></a>

                    </div>

                </div>



                <div class="kp-hero-visual">

                    <div class="kp-profile-window">

                        <div class="kp-window-header">

                            <div class="kp-window-dots" aria-hidden="true"><span></span><span></span><span></span></div>

                            <span>ann-profile.php</span>

                            <span>PHP</span>

                        </div>

                        <div class="kp-window-content">

                            <div class="kp-window-path">\~/portfolio/about/ann-profile.php</div>

                            <div class="kp-profile-photo">

                                <img

                                    src="<?php echo esc_url( $kp_images . 'ann.jpg' ); ?>"

                                    alt="Portrait of Ann Jelie Dalde"

                                    fetchpriority="high"

                                    decoding="async"

                                >

                                <div class="kp-profile-photo-caption">

                                    <strong>Ann Jelie Dalde</strong>

                                    <span>PROFILE.JPG</span>

                                </div>

                            </div>

                            <div class="kp-profile-code" aria-label="System analyst profile code illustration">

                                <p class="kp-code-comment">// A little introduction</p>

                                <p><span class="kp-code-purple">const</span> <span class="kp-code-blue">analyst</span> = <span class="kp-code-orange">{</span></p>

                                <p class="kp-code-indent">name: <span class="kp-code-green">'Ann Jelie Dalde'</span>,</p>

                                <p class="kp-code-indent">focus: <span class="kp-code-green">'Systems Analysis'</span>,</p>

                                <p class="kp-code-indent">mindset: <span class="kp-code-green">'Always Learning'</span></p>

                                <p><span class="kp-code-orange">};</span></p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>



            <div class="kp-hero-bottom">

                <span>ANN JELIE DALDE — PERSONAL PORTFOLIO</span>

                <span>ANALYZE / DESIGN / IMPROVE</span>

            </div>

        </div>

    </section>



    <!-- QUICK PROFILE -->

    <section class="kp-snapshot" aria-label="Quick profile summary">

        <div class="kp-container kp-snapshot-grid">

            <div class="kp-snapshot-item"><span>PROFILE</span><strong>Student System Analyst</strong></div>

            <div class="kp-snapshot-item"><span>PRIMARY ROLE</span><strong>Systems Analysis</strong></div>

            <div class="kp-snapshot-item"><span>CORE FOCUS</span><strong>Systems Analysis</strong></div>

            <div class="kp-snapshot-item"><span>APPROACH</span><strong>Research &amp; Communication</strong></div>

        </div>

    </section>



    <!-- ABOUT ME -->

    <section class="kp-section kp-about" id="kp-about" aria-labelledby="kp-about-title">

        <div class="kp-container kp-about-grid">

            <div class="kp-about-heading">

                <span class="kp-label">01 / ABOUT ME</span>

                <h2 class="kp-heading" id="kp-about-title">Behind the <span>systems.</span></h2>

                <p class="kp-description">A closer look at my background, interests, and approach to understanding and improving systems.</p>

            </div>

            <div class="kp-about-content">

                <p>

                    I'm <strong>Ann Jelie Dalde</strong>, a student with an interest in
                    information systems, technology, and solving problems through careful
                    analysis. I enjoy learning how people use digital tools and how systems
                    can be organized to make tasks easier.

                </p>

                <p>

                    I am interested in understanding project requirements, gathering and
                    organizing information, and identifying areas that can be improved.
                    These activities help connect users' needs with possible system solutions.

                </p>

                <p>

                    I value clear communication and collaboration because successful system
                    development requires understanding different perspectives and sharing
                    information with the team.

                </p>

                <p>

                    My goal is to continue developing my analytical, documentation, and
                    problem-solving abilities while learning more about systems analysis
                    and information technology.

                </p>

                <div class="kp-about-facts">

                    <div class="kp-fact"><span>FULL NAME</span><strong>Ann Jelie Dalde</strong></div>

                    <div class="kp-fact"><span>CURRENT ROLE</span><strong>System Analyst</strong></div>

                    <div class="kp-fact"><span>MAIN INTEREST</span><strong>Requirements Analysis</strong></div>

                    <div class="kp-fact"><span>ALSO EXPLORING</span><strong>Research &amp; Documentation</strong></div>

                </div>

            </div>

        </div>

    </section>



    <!-- TECHNICAL SKILLS -->

    <section class="kp-section kp-skills" id="kp-skills" aria-labelledby="kp-skills-title">

        <div class="kp-container">

            <div class="kp-section-header">

                <span class="kp-label">02 / SYSTEMS ANALYSIS SKILLS</span>

                <h2 class="kp-heading" id="kp-skills-title">My analysis <span>toolkit.</span></h2>

                <p class="kp-description">Skills and approaches used to understand requirements, examine processes, document information, and support system improvement.</p>

            </div>

            <div class="kp-skills-grid">

                <article class="kp-skill-card">

                    <div class="kp-skill-top"><span class="kp-skill-number">01 / REQUIREMENTS</span><span class="kp-skill-symbol">&lt;/&gt;</span></div>

                    <h3>Requirements Analysis</h3>

                    <p>Identifying user needs, project goals, and the functions a system should support.</p>

                    <div class="kp-skill-tags"><span>User needs</span><span>Goals</span><span>Scope</span></div>

                </article>

                <article class="kp-skill-card">

                    <div class="kp-skill-top"><span class="kp-skill-number">02 / PROCESS</span><span class="kp-skill-symbol">DEV</span></div>

                    <h3>Systems Analysis</h3>

                    <p>Reviewing existing steps and understanding how information moves through a process.</p>

                    <div class="kp-skill-tags"><span>Workflows</span><span>Review</span><span>Process</span></div>

                </article>

                <article class="kp-skill-card">

                    <div class="kp-skill-top"><span class="kp-skill-number">03 / DOCUMENTATION</span><span class="kp-skill-symbol">IoT</span></div>

                    <h3>System Documentation</h3>

                    <p>Recording requirements, observations, and system details in a clear and organized way.</p>

                    <div class="kp-skill-tags"><span>Notes</span><span>Reports</span><span>Records</span></div>

                </article>

                <article class="kp-skill-card">

                    <div class="kp-skill-top"><span class="kp-skill-number">04 / COMMUNICATION</span><span class="kp-skill-symbol">DB</span></div>

                    <h3>User Communication</h3>

                    <p>Asking clear questions, listening to users, and communicating findings with the project team.</p>

                    <div class="kp-skill-tags"><span>Interviews</span><span>Listening</span><span>Feedback</span></div>

                </article>

                <article class="kp-skill-card">

                    <div class="kp-skill-top"><span class="kp-skill-number">05 / EVALUATION</span><span class="kp-skill-symbol">+</span></div>

                    <h3>Problem Analysis</h3>

                    <p>Examining issues, comparing possible approaches, and helping identify suitable solutions.</p>

                    <div class="kp-skill-tags"><span>Research</span><span>Logic</span><span>Solutions</span></div>

                </article>

                <article class="kp-skill-card">

                    <div class="kp-skill-top"><span class="kp-skill-number">06 / SYSTEM REVIEW</span><span class="kp-skill-symbol">↗</span></div>

                    <h3>System Review</h3>

                    <p>Checking whether proposed system features address the identified needs and requirements.</p>

                    <div class="kp-skill-tags"><span>Testing</span><span>Review</span><span>Validation</span></div>

                </article>

            </div>

        </div>

    </section>



    <!-- EDUCATION -->

    <section class="kp-section kp-education" id="kp-education" aria-labelledby="kp-education-title">

        <div class="kp-container kp-education-layout">

            <div class="kp-education-intro">

                <span class="kp-label">03 / EDUCATION</span>

                <h2 class="kp-heading" id="kp-education-title">My academic <span>journey.</span></h2>

                <p class="kp-description">The schools and learning experiences that have contributed to my educational and personal development.</p>

            </div>

            <div class="kp-timeline">

                <article class="kp-education-item">
                    <span class="kp-education-year">2016 – 2017</span>
                    <h3>Kalablaylabay Integrated School</h3>
                    <p>Elementary Education</p>
                </article>

                <article class="kp-education-item">
                    <span class="kp-education-year">2022 – 2023</span>
                    <h3>Cogon National High School</h3>
                    <p>Secondary Education</p>
                </article>

                <article class="kp-education-item">
                    <span class="kp-education-year">2022 – 2023</span>
                    <h3>Cogon National High School</h3>
                    <p>Senior High School</p>
                </article>

                <article class="kp-education-item">
                    <span class="kp-education-year">2026 – 2027 Present</span>
                    <h3>Opol Community College</h3>
                    <p>Tertiary Education</p>
                </article>

            </div>

        </div>

    </section>



    <!-- SELECTED PROJECTS -->

    <section class="kp-section kp-projects" id="kp-projects" aria-labelledby="kp-projects-title">

        <div class="kp-container">

            <div class="kp-section-header">

                <span class="kp-label">04 / SELECTED WORK</span>

                <h2 class="kp-heading" id="kp-projects-title">Projects I've <span>worked on.</span></h2>

                <p class="kp-description">A selection of group projects that can be viewed through the perspective of requirements, system functions, user needs, and project documentation.</p>

            </div>

            <div class="kp-project-grid">

                <article class="kp-project-card">

                    <div class="kp-project-image">

                        <img src="<?php echo esc_url( $kp_images . 'Our.png' ); ?>" alt="OurSpace group portfolio website" loading="lazy" decoding="async">

                        <div class="kp-project-overlay"><span class="kp-project-category">WEB DEVELOPMENT</span><span class="kp-project-index">PROJECT_01</span></div>

                    </div>

                    <div class="kp-project-info">

                        <div class="kp-project-meta"><span>GROUP PROJECT</span><span>2026</span></div>

                        <h3>OurSpace Portfolio</h3>

                        <p>A group portfolio website that brings member profiles, individual skills, projects, and experiences together in one organized digital platform.</p>

                        <div class="kp-project-role"><strong>System Analyst focus:</strong> Understanding the website's purpose, identifying the information visitors need, and helping organize the site's content and requirements.</div>

                        <div class="kp-project-stack"><span>HTML</span><span>CSS</span><span>PHP</span><span>WordPress</span></div>

                    </div>

                </article>



                <article class="kp-project-card">

                    <div class="kp-project-image">

                        <img src="<?php echo esc_url( $kp_images . 'smartcap.jpg' ); ?>" alt="SmartCap Alert medicine container prototype" loading="lazy" decoding="async">

                        <div class="kp-project-overlay"><span class="kp-project-category">INTERNET OF THINGS</span><span class="kp-project-index">PROJECT_02</span></div>

                    </div>

                    <div class="kp-project-info">

                        <div class="kp-project-meta"><span>GROUP PROJECT</span><span>2026</span></div>

                        <h3>SmartCap Alert</h3>

                        <p>An IoT-based medicine container prototype designed to monitor container activity using a magnetic reed switch sensor and connected technology.</p>

                        <div class="kp-project-role"><strong>System Analyst focus:</strong> Reviewing the problem the prototype addresses, identifying expected system functions, and organizing the requirements for monitoring container activity.</div>

                        <div class="kp-project-stack"><span>ESP32</span><span>Arduino IDE</span><span>Blynk</span><span>IoT</span></div>

                    </div>

                </article>



                <article class="kp-project-card">

                    <div class="kp-project-image">

                        <img src="<?php echo esc_url( $kp_images . 'agrisense.jpg' ); ?>" alt="AgriSense automatic irrigation project concept" loading="lazy" decoding="async">

                        <div class="kp-project-overlay"><span class="kp-project-category">SMART AGRICULTURE</span><span class="kp-project-index">PROJECT_03</span></div>

                    </div>

                    <div class="kp-project-info">

                        <div class="kp-project-meta"><span>GROUP PROJECT</span><span>2026</span></div>

                        <h3>AgriSense</h3>

                        <p>An ESP32-based irrigation project concept designed to support watering decisions through sensor monitoring and automated controls.</p>

                        <div class="kp-project-role"><strong>System Analyst focus:</strong> Understanding the irrigation problem, identifying the information and functions needed, and outlining how the system can support watering decisions.</div>

                        <div class="kp-project-stack"><span>ESP32</span><span>Sensors</span><span>Arduino IDE</span><span>IoT</span></div>

                    </div>

                </article>



                <article class="kp-project-card">

                    <div class="kp-project-image">

                        <img src="<?php echo esc_url( $kp_images . 'esp32.jpg' ); ?>" alt="ESP32 electronics and sensor experiments" loading="lazy" decoding="async">

                        <div class="kp-project-overlay"><span class="kp-project-category">EMBEDDED SYSTEMS</span><span class="kp-project-index">PROJECT_04</span></div>

                    </div>

                    <div class="kp-project-info">

                        <div class="kp-project-meta"><span>INDIVIDUAL EXPERIMENTS</span><span>2026</span></div>

                        <h3>ESP32 Experiments</h3>

                        <p>Hands-on experiments involving ESP32 boards, electronic components, sensors, LED indicators, LCD displays, Wi-Fi connectivity, and IoT applications.</p>

                        <div class="kp-project-role"><strong>Project involvement:</strong> Add Ann's individual system analysis work or confirmed contribution here when those details are available.</div>

                        <div class="kp-project-stack"><span>ESP32</span><span>C++</span><span>Arduino IDE</span><span>Blynk</span></div>

                    </div>

                </article>

            </div>

        </div>

    </section>



    <!-- CERTIFICATES / LEARNING -->

    <section class="kp-section kp-certificates" id="kp-certificates" aria-labelledby="kp-certificates-title">

        <div class="kp-container">

            <span class="kp-label">05 / RECOGNITION</span>

            <h2 class="kp-heading" id="kp-certificates-title">Learning beyond <span>the classroom.</span></h2>

            <p class="kp-description">A space for certificates, seminars, workshops, recognitions, and other accomplishments throughout my academic and technical journey.</p>

            <div class="kp-certificate-box">

                <div class="kp-certificate-icon" aria-hidden="true">05</div>

                <div class="kp-certificate-content">

                    <span>CONTINUOUS DEVELOPMENT</span>

                    <h3>My Learning Journey</h3>

                    <p>I continue to develop my knowledge through academic activities, hands-on projects, experimentation, and independent learning.</p>

                    <p>As I receive official certificates, attend seminars or workshops, or earn recognitions, I can add the actual details and certificate images here.</p>

                </div>

            </div>

        </div>

    </section>



    <!-- CONTACT -->

    <section class="kp-contact" id="kp-contact" aria-labelledby="kp-contact-title">

        <div class="kp-container kp-contact-content">

            <span class="kp-label">06 / LET'S CONNECT</span>

            <h2 id="kp-contact-title">Good analysis turns questions<br>into <span>solutions.</span></h2>

            <p>Thank you for exploring my portfolio. I value curiosity, clear communication, continuous learning, and the process of turning user needs into thoughtful system solutions.</p>

           




        </div>

    </section>



</main>



<?php get_footer(); ?>
