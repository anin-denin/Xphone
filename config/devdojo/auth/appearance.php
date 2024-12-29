<?php

/*
 * Branding configs for your application
 */

return [
    'logo' => [
        'type' => 'svg',
        'image_src' => '/storage/auth/logo.png',
        'svg_string' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 50" class="w-full h-full">
  <g fill="none" stroke="currentColor" stroke-width="3">
    <!-- Smartphone icon -->
    <rect x="10" y="10" width="30" height="50" rx="5" ry="5" stroke="purple" />
    <circle cx="25" cy="45" r="3" fill="black" />
    
    <!-- Xphone text -->
    <text x="50" y="40" font-family="Arial, sans-serif" font-size="30" fill="black">Xphone</text>
  </g>
</svg>',
        'height' => '50',
    ],
    'background' => [
        'color' => '#712caa',
        'image' => '',
        'image_overlay_color' => '#000000',
        'image_overlay_opacity' => '0.84',
    ],
    'color' => [
        'text' => '#212936',
        'button' => '#09090b',
        'button_text' => '#ffffff',
        'input_text' => '',
        'input_border' => '#212936',
    ],
    'alignment' => [
        'heading' => 'center',
        'container' => 'center',
    ],
    'favicon' => [
        'light' => '/auth/img/favicon.png',
        'dark' => '/auth/img/favicon-dark.png',
    ],
];
