<?php

function jordan_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'jordan_theme_setup');


function jordan_register_menus() {

    register_nav_menus(array(
        'primary-menu'   => 'Header Menu',
        'footer-shop'    => 'Footer Shop Menu',
        'footer-boutique'=> 'Footer Boutique Menu'
    ));

}

add_action('after_setup_theme', 'jordan_register_menus');


// ============================================================
// CUSTOMIZER: Make all hardcoded content editable from
// Appearance → Customize
// ============================================================

function jordan_customize_register( $wp_customize ) {

    // --------------------------------------------------------
    // SECTION: Homepage
    // --------------------------------------------------------
    $wp_customize->add_section('jordan_homepage', array(
        'title'    => 'Homepage',
        'priority' => 30,
    ));

    // Hero subtitle
    $wp_customize->add_setting('homepage_hero_subtitle', array(
        'default'           => 'New Arrival Drop',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('homepage_hero_subtitle', array(
        'label'   => 'Hero Subtitle',
        'section' => 'jordan_homepage',
        'type'    => 'text',
    ));

    // Hero title line 1
    $wp_customize->add_setting('homepage_hero_title_1', array(
        'default'           => 'Legends',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('homepage_hero_title_1', array(
        'label'   => 'Hero Title Line 1',
        'section' => 'jordan_homepage',
        'type'    => 'text',
    ));

    // Hero title line 2
    $wp_customize->add_setting('homepage_hero_title_2', array(
        'default'           => 'Never Die.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('homepage_hero_title_2', array(
        'label'   => 'Hero Title Line 2 (Accent)',
        'section' => 'jordan_homepage',
        'type'    => 'text',
    ));

    // Hero description
    $wp_customize->add_setting('homepage_hero_desc', array(
        'default'           => "The definitive Jordan 1 'Chicago' Reimagined. A tribute to the icon that changed everything. Limited stock available.",
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('homepage_hero_desc', array(
        'label'   => 'Hero Description',
        'section' => 'jordan_homepage',
        'type'    => 'textarea',
    ));

    // Hero image
    $wp_customize->add_setting('homepage_hero_image', array(
        'default'           => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBLJ-K9y4EgHYRGLJmomWdx0l_WnBP1sLazc8v6YC8qlYRONZSMz1TUpfTVjGNjV4_IvHJDIx1nRws05VqLKZW6qmDSMJAOOHG-dB4gZDoKre8eF6ElYPPi51bFEKqLdXys_9aepXrrF9l4abMr57U73f7Fb5T1hgpt7mBlLLSof1IOGefhNdqFoOItkNggfxm3yAyTPM6m4bVxDqM2LY1vi4zJBlp5fkELHIO7xsOespGblBR8iLwT3nyuArmztRfoY4_gR33BhnM',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('homepage_hero_image', array(
        'label'   => 'Hero Background Image URL',
        'section' => 'jordan_homepage',
        'type'    => 'url',
    ));

    // CTA text
    $wp_customize->add_setting('homepage_cta_text', array(
        'default'           => 'Shop Now',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('homepage_cta_text', array(
        'label'   => 'Hero CTA Button Text',
        'section' => 'jordan_homepage',
        'type'    => 'text',
    ));

    // --- Collection Cards ---

    // Retros card
    $wp_customize->add_setting('homepage_retros_subtitle', array(
        'default'           => 'The Classics',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('homepage_retros_subtitle', array(
        'label'   => 'Retros Card Subtitle',
        'section' => 'jordan_homepage',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('homepage_retros_title', array(
        'default'           => 'Retro(High-top)',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('homepage_retros_title', array(
        'label'   => 'Retros Card Title',
        'section' => 'jordan_homepage',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('homepage_retros_hover', array(
        'default'           => 'Built for the culture.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('homepage_retros_hover', array(
        'label'   => 'Retros Card Hover Text',
        'section' => 'jordan_homepage',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('homepage_retros_image', array(
        'default'           => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDFAT42cvlASozWQs1t63THqV_BYQJ8zfneuC0B-rfRsJsdW7C_XZ8C9qyAElLn3jsdv-XiML-Lb7p8yLMNurLWIhCe-i_y1taugc_4YMUob3b9OqPLC8oVmSrtRKpbVjCnBvWP9feSihvqkVFEHHOZSXbjldL0Padz4AeFlYTrOjQH9sSiftH8qyutVxZSDD92Y6OJDIt5O3KLfiv0a6sKM9UhAyCBWTGNQm0Jgzz_g32wYaRai9iFn2c8yrDyQWLdey-XNihPnfg',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('homepage_retros_image', array(
        'label'   => 'Retros Card Image URL',
        'section' => 'jordan_homepage',
        'type'    => 'url',
    ));

    // Lows card
    $wp_customize->add_setting('homepage_lows_subtitle', array(
        'default'           => 'Street Ready',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('homepage_lows_subtitle', array(
        'label'   => 'Lows Card Subtitle',
        'section' => 'jordan_homepage',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('homepage_lows_title', array(
        'default'           => 'Retro Low',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('homepage_lows_title', array(
        'label'   => 'Lows Card Title',
        'section' => 'jordan_homepage',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('homepage_lows_hover', array(
        'default'           => 'Low profile, high impact.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('homepage_lows_hover', array(
        'label'   => 'Lows Card Hover Text',
        'section' => 'jordan_homepage',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('homepage_lows_image', array(
        'default'           => 'https://lh3.googleusercontent.com/aida-public/AB6AXuC9Crh6kATMkkDUaUDOOZXsq-nIwNe8DmOITapNKOLaqxKzQOSbiKIy__JLNMmiJFepTVWftsvPLuavnnlj_ym3BlmkRdKEQOxyysWTlpYN27WN0PSWm5-L5sgOEZAm_z146L6hfjNU9N2AR5m_PpyAaR9Z0W8J6mYBx3FJd0H2P1MoaMQLU8GTtmZgH7gvUnCD5uS4CTeZoiVbn2xYt1cu7jdrO65EHRcLoiINLl82QDqpOCdr2ZXV_2W3M9ztzC3tHTUUoJAjtAM',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('homepage_lows_image', array(
        'label'   => 'Lows Card Image URL',
        'section' => 'jordan_homepage',
        'type'    => 'url',
    ));

    // Mids card
    $wp_customize->add_setting('homepage_mids_subtitle', array(
        'default'           => 'Everyday Icon',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('homepage_mids_subtitle', array(
        'label'   => 'Mids Card Subtitle',
        'section' => 'jordan_homepage',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('homepage_mids_title', array(
        'default'           => 'Mid',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('homepage_mids_title', array(
        'label'   => 'Mids Card Title',
        'section' => 'jordan_homepage',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('homepage_mids_hover', array(
        'default'           => 'The perfect balance.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('homepage_mids_hover', array(
        'label'   => 'Mids Card Hover Text',
        'section' => 'jordan_homepage',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('homepage_mids_image', array(
        'default'           => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBujLOVBokG9KDwzbB6WRHcx6z5tNT6K9FsdUNJe6hx4pVU3uytjLpt1BJZ9JLawnu7ZqAti8jZ58e0P3GOW23ojBmK5XGojwJ-IUMN4Gyguyagc5pjNLt3cquoiJhmXZZNtR_U4z1nj14TWPUfs3vn4JDmgWcXxkLPzqARQPtItwihiF1t9UmmfnBAHZjp3E8fficA8TehcnDUYOIz-7UkioS99Ul0qdA7cUxx93szUxX_8Py5PAi86ebgSt4TckGVql3fi26CcQw',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('homepage_mids_image', array(
        'label'   => 'Mids Card Image URL',
        'section' => 'jordan_homepage',
        'type'    => 'url',
    ));

    // Newsletter section
    $wp_customize->add_setting('homepage_newsletter_title', array(
        'default'           => 'Stay in the Loop',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('homepage_newsletter_title', array(
        'label'   => 'Newsletter Section Title',
        'section' => 'jordan_homepage',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('homepage_newsletter_desc', array(
        'default'           => 'Join our inner circle for early access to the next limited release drop. Never miss a win again.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('homepage_newsletter_desc', array(
        'label'   => 'Newsletter Section Description',
        'section' => 'jordan_homepage',
        'type'    => 'textarea',
    ));


    // --------------------------------------------------------
    // SECTION: Footer
    // --------------------------------------------------------
    $wp_customize->add_section('jordan_footer', array(
        'title'    => 'Footer Settings',
        'priority' => 35,
    ));

    $wp_customize->add_setting('footer_tagline', array(
        'default'           => "Curating the world's most sought-after silhouettes for the modern collector.",
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_tagline', array(
        'label'   => 'Footer Tagline',
        'section' => 'jordan_footer',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('footer_whatsapp', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_whatsapp', array(
        'label'       => 'WhatsApp Phone Number',
        'description' => 'Include country code, e.g. 9779800000000',
        'section'     => 'jordan_footer',
        'type'        => 'text',
    ));


    // --------------------------------------------------------
    // SECTION: About Page
    // --------------------------------------------------------
    $wp_customize->add_section('jordan_about', array(
        'title'    => 'About Page',
        'priority' => 40,
    ));

    // Hero
    $wp_customize->add_setting('about_hero_title', array(
        'default'           => 'OUR SNEAKER STORY',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('about_hero_title', array(
        'label'   => 'Hero Title',
        'section' => 'jordan_about',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('about_hero_subtitle', array(
        'default'           => 'How a lifelong obsession with the Jumpman evolved from a bedroom collection to the city\'s premier sneaker destination.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('about_hero_subtitle', array(
        'label'   => 'Hero Subtitle',
        'section' => 'jordan_about',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('about_hero_image', array(
        'default'           => 'https://lh3.googleusercontent.com/aida-public/AB6AXuB6cmgte-3Z7Ct901lIM20B0vF43jaAHrQ70wuiy55uv_H5fcSN_VkVoRz8Kub_ZphpkhZdQrVNyp2OctMQ6FzMy-23l6aEy0uWri1NQLj8RjdExn_S3gfdgq_czKBZrziLvvD-eseWvLRMCKGvYHdtlm2L7yU9P3jec1SnVzQ2DorVB53qJDBObpZlpg2XeanV8sMqUug64Kc1QhT5Mlc8fFRNOEkG_9PJdyQc-QqSu-Qfm_4i2JaTip0aKvR50mSH1dHRrpUjOII',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('about_hero_image', array(
        'label'   => 'Hero Background Image URL',
        'section' => 'jordan_about',
        'type'    => 'url',
    ));

    // Intro
    $wp_customize->add_setting('about_intro_label', array(
        'default'           => 'The Jumpman Legacy',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('about_intro_label', array(
        'label'   => 'Intro Section Label',
        'section' => 'jordan_about',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('about_intro_title', array(
        'default'           => 'More Than Just Footwear',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('about_intro_title', array(
        'label'   => 'Intro Section Title',
        'section' => 'jordan_about',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('about_intro_text', array(
        'default'           => "In 1985, a single pair of shoes changed everything. For us, the Air Jordan line represents more than athletic excellence—it's a symbol of culture, defiance, and the relentless pursuit of greatness. We don't just sell sneakers; we preserve history.",
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control('about_intro_text', array(
        'label'   => 'Intro Section Text',
        'section' => 'jordan_about',
        'type'    => 'textarea',
    ));

    // Narrative 1
    $wp_customize->add_setting('about_story1_title', array(
        'default'           => "The Collector's Soul",
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('about_story1_title', array(
        'label'   => 'Story 1 Title',
        'section' => 'jordan_about',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('about_story1_text', array(
        'default'           => 'Our founder, Alex J., started with a single pair of "Bred" 1s. That spark ignited a decade-long journey of hunting through flea markets, early internet forums, and backrooms of mom-and-pop shops to find the rarest silhouettes ever created.',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control('about_story1_text', array(
        'label'   => 'Story 1 Text',
        'section' => 'jordan_about',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('about_story1_quote', array(
        'default'           => "Every sneaker has a soul. The crease on the toe box, the yellowing of the sole—it's all part of the narrative.",
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('about_story1_quote', array(
        'label'   => 'Story 1 Quote',
        'section' => 'jordan_about',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('about_story1_image', array(
        'default'           => 'https://lh3.googleusercontent.com/aida-public/AB6AXuA0LMZMHhqm5i93TeFZBsnOPDi4bLu1o7Ozkd1MGfCwfIkb29Cnvof4KqSgdqMEI256JK4a_q8h53z3KYcBn6-93VLGdRgkOmtPfUc1MSKUY6yhZZs_uRlIyR025IMvSrAiDfv8wdEaR0A8H2YwX9zvyMg3dz192kc8WoiXaOjH4vdr6sylCudCYWPppo2gprodPY8ebZud0hSfObI133PGEQMkdJV7wOvMFglSjbDaP8qsMI4qApCrM3Sv_B2Iz0g5Etvvn58bxxs',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('about_story1_image', array(
        'label'   => 'Story 1 Image URL',
        'section' => 'jordan_about',
        'type'    => 'url',
    ));

    // Narrative 2
    $wp_customize->add_setting('about_story2_title', array(
        'default'           => 'Authentication First',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('about_story2_title', array(
        'label'   => 'Story 2 Title',
        'section' => 'jordan_about',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('about_story2_text', array(
        'default'           => 'In an era of replicas, we pride ourselves on a rigorous 40-point inspection process. Every stitch, scent, and texture is verified by our in-house experts who have handled over 50,000 pairs of Jordans throughout their careers.',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control('about_story2_text', array(
        'label'   => 'Story 2 Text',
        'section' => 'jordan_about',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('about_story2_feature1', array(
        'default'           => 'Verified Origin Sourcing',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('about_story2_feature1', array(
        'label'   => 'Story 2 Feature 1',
        'section' => 'jordan_about',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('about_story2_feature2', array(
        'default'           => 'UV Light Inspection',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('about_story2_feature2', array(
        'label'   => 'Story 2 Feature 2',
        'section' => 'jordan_about',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('about_story2_feature3', array(
        'default'           => 'Original Box & Accessories Verification',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('about_story2_feature3', array(
        'label'   => 'Story 2 Feature 3',
        'section' => 'jordan_about',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('about_story2_image', array(
        'default'           => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAyQPvW4emRrVIpehxzYEF4wyDdfnIPgYfDkuS7IT3CtQXJLT925gtHizwOhnfMEnWcwdVupIkW5SWpbUhZTB5M7WhLpkKx36xNEwvQnraNg5ytESqIUdxO6FLuz2gaznSkUugnJI6lRxve26B98Q1sbJ4cJuTzHodvpNwUXy324bWB7cJYiavnMGfh7fplSWZyTjCcm6GZUg3aXnMC2NOrzUGIkk_k0LWldvjqbbw_JxUqj2HP8j5a-8q59K0pYn8gw6yBTyKXUU8',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('about_story2_image', array(
        'label'   => 'Story 2 Image URL',
        'section' => 'jordan_about',
        'type'    => 'url',
    ));

    // Team members
    for ( $i = 1; $i <= 3; $i++ ) {
        $defaults = array(
            1 => array('Alex J.', 'Founder & Head Curator', '1985 Chicago 1s', 'https://lh3.googleusercontent.com/aida-public/AB6AXuC-aRBlWcquntn2wCeMx_TR3Q-wfGFa_mg_Tn5bpduKiGkGUMzPFwjubbnAafmGocWOcswLFdt3BxTjbud4LTsDkpVl-p2L5swUuAQCgIU_hdx7HMGoZZ1JjUmxsfGwzBLqD04y1Ni-0QsPnw591e6QRB_InLflGaErkc0dh7XQUA3GMVcPu8i_S4H7FeHvOAAYaEvcEGLY_M0VipZVRs8wlIuUiJR9dbJdZB7CBQHF9n8XMIrF7covtd9MAlTY3sj6iwhbPnIT9tk'),
            2 => array('Sarah Chen', 'Authentication Lead', 'AJ4 "Black Cat"', 'https://lh3.googleusercontent.com/aida-public/AB6AXuD-yy0s-gDyQKEAxhIeJ1Asb7nggs6MloPUpChQ5jUuQL9lUuAEESpPV4mvpm5pr3SzQ9v4XfKj5xFz1AO-z0Z0srV6xmQldP1uQiFSpn5tGAsASwqc3iTPmKQiWw5Ix2otEmX1tK7LSppNHKIv3jytVh8KJ0wjNJvJdLMyhHHXB6bM-e6kETxrMGh5_6mo9RdTd42i7B246uQ602b7nSfbbW7CnhvBsnovXAIqmmUKDdCQAcyUBygxwqsjb9tS7iB6b9PtwJjliAo'),
            3 => array('Marcus Reed', 'Global Sourcing', 'AJ11 "Concord"', 'https://lh3.googleusercontent.com/aida-public/AB6AXuBDGvEHMDoN2i11Wrvl-fKwRnlMDTFozUAQKrfRHig2DRLmbG7Ss2aL4kjGG96g-IOMX7-uZIDTNLd3Ar7wxFSe2pgRSL26U99IV8p8UFKjZtVOtGgoH3QGPQA02Xxc3IITUFa1Gv5GLcG0sJXUOfEbv7aSAEx5vgRdQs6lkWk1FI80QKobEPV8qgw0aDjO-ogIIOe29qkDvvfovIecIZ8R-g2ZVAIOZ6G1EW9vf9qzAZ3OwcnKHIq8K43u0LLzXnK5WNS-B1b_EMs'),
        );

        $wp_customize->add_setting("about_team{$i}_name", array(
            'default'           => $defaults[$i][0],
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control("about_team{$i}_name", array(
            'label'   => "Team Member {$i} Name",
            'section' => 'jordan_about',
            'type'    => 'text',
        ));

        $wp_customize->add_setting("about_team{$i}_role", array(
            'default'           => $defaults[$i][1],
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control("about_team{$i}_role", array(
            'label'   => "Team Member {$i} Role",
            'section' => 'jordan_about',
            'type'    => 'text',
        ));

        $wp_customize->add_setting("about_team{$i}_grail", array(
            'default'           => $defaults[$i][2],
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control("about_team{$i}_grail", array(
            'label'   => "Team Member {$i} Favorite Grail",
            'section' => 'jordan_about',
            'type'    => 'text',
        ));

        $wp_customize->add_setting("about_team{$i}_image", array(
            'default'           => $defaults[$i][3],
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control("about_team{$i}_image", array(
            'label'   => "Team Member {$i} Image URL",
            'section' => 'jordan_about',
            'type'    => 'url',
        ));
    }

    // About CTA
    $wp_customize->add_setting('about_cta_title', array(
        'default'           => 'READY TO FIND YOURS?',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('about_cta_title', array(
        'label'   => 'CTA Section Title',
        'section' => 'jordan_about',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('about_cta_subtitle', array(
        'default'           => 'Every great story starts with the first step. Take yours in a pair that defines an era.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('about_cta_subtitle', array(
        'label'   => 'CTA Section Subtitle',
        'section' => 'jordan_about',
        'type'    => 'textarea',
    ));


    // --------------------------------------------------------
    // SECTION: Categories Page
    // --------------------------------------------------------
    $wp_customize->add_section('jordan_categories', array(
        'title'    => 'Categories Page',
        'priority' => 45,
    ));

    $cats = array(
        'retros' => array('Retros', 'Iconic silhouettes from the golden era.', 'https://lh3.googleusercontent.com/aida-public/AB6AXuBNoUWE0l341YpDI_7URp-G3AQeqwV5KyZDADX-1y4_zIEEQpWGOIQiosS1ZE4M_LKTPJjS9GKNSfI6S-uhAteNw1wViSKE-kFukOznOW1VQhj8OE9ULVCQzVdl58b9gIIbSvrl1ZnxW1fFgPhiisa93TS6G4bapOn_BHMHjuRJmQkU15xaKWH1BSwo2p4dZxrqgMOwOKK-QN0NiaUbhbGmR5lFzOIYW38rrNViJK_t95-NnDuBFln7HDTON-Q5yiprwIQw2RCar9s'),
        'lows'   => array('Lows', 'Modern low profile classics.', 'https://lh3.googleusercontent.com/aida-public/AB6AXuCexampleLOWIMAGE'),
        'mids'   => array('Mids', 'Perfect balance between high and low.', 'https://lh3.googleusercontent.com/aida-public/AB6AXuCexampleMIDIMAGE'),
    );

    foreach ( $cats as $slug => $cat ) {
        $wp_customize->add_setting("categories_{$slug}_title", array(
            'default'           => $cat[0],
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control("categories_{$slug}_title", array(
            'label'   => ucfirst($slug) . ' Card Title',
            'section' => 'jordan_categories',
            'type'    => 'text',
        ));

        $wp_customize->add_setting("categories_{$slug}_desc", array(
            'default'           => $cat[1],
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control("categories_{$slug}_desc", array(
            'label'   => ucfirst($slug) . ' Card Description',
            'section' => 'jordan_categories',
            'type'    => 'text',
        ));

        $wp_customize->add_setting("categories_{$slug}_image", array(
            'default'           => $cat[2],
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control("categories_{$slug}_image", array(
            'label'   => ucfirst($slug) . ' Card Image URL',
            'section' => 'jordan_categories',
            'type'    => 'url',
        ));
    }


    // --------------------------------------------------------
    // SECTION: Contact Page
    // --------------------------------------------------------
    $wp_customize->add_section('jordan_contact', array(
        'title'    => 'Contact Page',
        'priority' => 50,
    ));

    $wp_customize->add_setting('contact_title', array(
        'default'           => 'Visit the Lab',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_title', array(
        'label'   => 'Page Title',
        'section' => 'jordan_contact',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('contact_subtitle', array(
        'default'           => 'Visit our flagship location or explore us on the map below.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_subtitle', array(
        'label'   => 'Page Subtitle',
        'section' => 'jordan_contact',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('contact_map_url', array(
        'default'           => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.501455642812!2d85.28061500866963!3d27.701799576086387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19aca3d8345b%3A0xbbb5e9967c6a23e2!2sKathmandu%20BernHardt%20College!5e0!3m2!1sen!2snp!4v1771896402737!5m2!1sen!2snp',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('contact_map_url', array(
        'label'   => 'Google Maps Embed URL',
        'section' => 'jordan_contact',
        'type'    => 'url',
    ));

    $wp_customize->add_setting('contact_address', array(
        'default'           => "Kathmandu BernHardt College\nKathmandu, Nepal",
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control('contact_address', array(
        'label'   => 'Store Address',
        'section' => 'jordan_contact',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('contact_hours_weekday', array(
        'default'           => '9am - 5pm',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_hours_weekday', array(
        'label'   => 'Mon-Fri Hours',
        'section' => 'jordan_contact',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('contact_hours_sunday', array(
        'default'           => '10am - 3pm',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_hours_sunday', array(
        'label'   => 'Sunday Hours',
        'section' => 'jordan_contact',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('contact_hours_saturday', array(
        'default'           => 'Closed',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_hours_saturday', array(
        'label'   => 'Saturday Hours',
        'section' => 'jordan_contact',
        'type'    => 'text',
    ));


    // --------------------------------------------------------
    // SECTION: Lows Page
    // --------------------------------------------------------
    $wp_customize->add_section('jordan_lows', array(
        'title'    => 'Lows Page',
        'priority' => 55,
    ));

    $wp_customize->add_setting('lows_hero_image', array(
        'default'           => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBk3aV9-2UJfBz_-c9xyKLUf9_9mwRfgtvY-_bLe8ltRNAm-zrDW5hXfeejbZ4u95XwYP_2VwlHlAHF2k4vsqJNdnSKD7z70jHBM1689qStymHHpYTRchIN-yMxu9N1g3LFoX1n3Lf8Ill6vS0RKBiknRPErd07LhGVkvT6JbMXppR0mxMZtcCM-Phy3q8uVebIXmclCTcrE3fADyA54bQ4yJRdYUI8ff1Ob8WhtyEmzr6IiLyBIzRfLsJvIK0BAGaTWGEfSygaP1c',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('lows_hero_image', array(
        'label'   => 'Hero Background Image URL',
        'section' => 'jordan_lows',
        'type'    => 'url',
    ));

    $wp_customize->add_setting('lows_hero_title', array(
        'default'           => 'Jordan Lows',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('lows_hero_title', array(
        'label'   => 'Hero Title',
        'section' => 'jordan_lows',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('lows_hero_subtitle', array(
        'default'           => 'Experience the pinnacle of street style. Curated selection of iconic Jordan 1 Lows.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('lows_hero_subtitle', array(
        'label'   => 'Hero Subtitle',
        'section' => 'jordan_lows',
        'type'    => 'textarea',
    ));


    // --------------------------------------------------------
    // SECTION: Mids Page
    // --------------------------------------------------------
    $wp_customize->add_section('jordan_mids', array(
        'title'    => 'Mids Page',
        'priority' => 60,
    ));

    $wp_customize->add_setting('mids_hero_title', array(
        'default'           => 'The Mid Collection',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('mids_hero_title', array(
        'label'   => 'Hero Title',
        'section' => 'jordan_mids',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('mids_hero_subtitle', array(
        'default'           => 'Explore our curated selection of Jordan Mids.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('mids_hero_subtitle', array(
        'label'   => 'Hero Subtitle',
        'section' => 'jordan_mids',
        'type'    => 'text',
    ));


    // --------------------------------------------------------
    // SECTION: Retros Page
    // --------------------------------------------------------
    $wp_customize->add_section('jordan_retros', array(
        'title'    => 'Retros Page',
        'priority' => 65,
    ));

    $wp_customize->add_setting('retros_hero_title', array(
        'default'           => 'The Retro Collection',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('retros_hero_title', array(
        'label'   => 'Hero Title',
        'section' => 'jordan_retros',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('retros_hero_subtitle', array(
        'default'           => 'Explore our curated selection of high-end Jordan Retros.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('retros_hero_subtitle', array(
        'label'   => 'Hero Subtitle',
        'section' => 'jordan_retros',
        'type'    => 'text',
    ));


    // --------------------------------------------------------
    // SECTION: Privacy Policy Page
    // --------------------------------------------------------
    $wp_customize->add_section('jordan_privacy', array(
        'title'    => 'Privacy Policy Page',
        'priority' => 70,
    ));

    $wp_customize->add_setting('privacy_last_updated', array(
        'default'           => 'October 24, 2025',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('privacy_last_updated', array(
        'label'   => 'Last Updated Date',
        'section' => 'jordan_privacy',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('privacy_intro_text', array(
        'default'           => 'Welcome to the Jordan Boutique Privacy Policy. We recognize the importance of privacy and are committed to maintaining the trust and confidence of our visitors to our store and website. This policy explains how we collect, use, and share information about you when you visit our boutique or use our services.',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control('privacy_intro_text', array(
        'label'   => 'Introduction Text',
        'section' => 'jordan_privacy',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('privacy_tldr', array(
        'default'           => 'We only collect what we need to get your grails to your doorstep and keep your account secure. We never sell your data to third-party advertisers.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('privacy_tldr', array(
        'label'   => 'TL;DR Summary',
        'section' => 'jordan_privacy',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('privacy_page_subtitle', array(
        'default'           => 'At Jordan Boutique, we value your privacy as much as your style. This policy outlines how we handle your data with the highest level of security and transparency.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('privacy_page_subtitle', array(
        'label'   => 'Page Subtitle',
        'section' => 'jordan_privacy',
        'type'    => 'textarea',
    ));

}


// ============================================================
// AUTH: Custom Login Redirects
// ============================================================

function jordan_login_failed() {
    $login_page  = home_url( '/login/' );
    wp_redirect( $login_page . '?login=failed' );
    exit;
}
add_action( 'wp_login_failed', 'jordan_login_failed' );

function jordan_verify_user_pass( $user, $username, $password ) {
    $login_page  = home_url( '/login/' );
    if( $username == "" || $password == "" ) {
        wp_redirect( $login_page . "?login=failed" );
        exit;
    }
}
add_filter( 'authenticate', 'jordan_verify_user_pass', 1, 3);

