<?php

namespace WPPerformance\Header;

/**
 * Plugin Name:       WP Performance Header
 * Update URI:        false
 * Description:       This plugin allows you to display logo
 * Requires at least: 5.9
 * Requires PHP:      8.0
 * Version:           0.1.0
 * Author:            Faramaz Patrick <infos@goodmotion.fr>
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wp-performance-header
 *
 * @package           wp-performance
 */



function block_init()
{
  register_block_type_from_metadata(__DIR__, [
    "render_callback" => __NAMESPACE__ . '\render_callback',
    'attributes' => []
  ]);
}
add_action('init', __NAMESPACE__ . '\block_init');


function render_callback($attributes, $content)
{
  $siteUrl = site_url();
  $html = '
    <a href="' . $siteUrl . '" alt="">
      <svg width="433" height="60" viewBox="0 0 433 60" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_2_5)">
        <rect width="433" height="60" fill="white"/>
        <path d="M18.216 49L9.864 13.96H19.08L25.368 43L23.88 41.896H27.768L26.088 43L30.84 15.208H38.088L31.512 49H18.216ZM39.048 49L31.992 15.208H39.624L45.192 43L43.512 41.896H47.16L45.912 43L51.336 13.96H59.976L52.632 49H39.048ZM72.3638 39.688V32.008H78.1238C79.2118 32.008 80.1558 31.8 80.9558 31.384C81.7558 30.936 82.3798 30.312 82.8278 29.512C83.2758 28.712 83.4998 27.768 83.4998 26.68C83.4998 25.56 83.2758 24.6 82.8278 23.8C82.3798 23 81.7558 22.392 80.9558 21.976C80.1558 21.56 79.2118 21.352 78.1238 21.352H72.3638V13.672H77.8838C80.8918 13.672 83.4838 14.184 85.6598 15.208C87.8678 16.2 89.5638 17.64 90.7478 19.528C91.9318 21.416 92.5238 23.672 92.5238 26.296V27.064C92.5238 29.656 91.9318 31.896 90.7478 33.784C89.5638 35.672 87.8678 37.128 85.6598 38.152C83.4838 39.176 80.8918 39.688 77.8838 39.688H72.3638ZM64.3958 49V13.672H73.3238V49H64.3958ZM114.598 39.688V32.008H120.358C121.446 32.008 122.39 31.8 123.19 31.384C123.99 30.936 124.614 30.312 125.062 29.512C125.51 28.712 125.734 27.768 125.734 26.68C125.734 25.56 125.51 24.6 125.062 23.8C124.614 23 123.99 22.392 123.19 21.976C122.39 21.56 121.446 21.352 120.358 21.352H114.598V13.672H120.118C123.126 13.672 125.718 14.184 127.894 15.208C130.102 16.2 131.798 17.64 132.982 19.528C134.166 21.416 134.758 23.672 134.758 26.296V27.064C134.758 29.656 134.166 31.896 132.982 33.784C131.798 35.672 130.102 37.128 127.894 38.152C125.718 39.176 123.126 39.688 120.118 39.688H114.598ZM106.63 49V13.672H115.558V49H106.63ZM150.834 49.96C148.594 49.96 146.61 49.576 144.882 48.808C143.154 48.04 141.698 47 140.514 45.688C139.33 44.376 138.418 42.904 137.778 41.272C137.17 39.64 136.866 37.96 136.866 36.232V35.272C136.866 33.48 137.17 31.768 137.778 30.136C138.418 28.472 139.314 27 140.466 25.72C141.65 24.44 143.09 23.432 144.786 22.696C146.482 21.928 148.402 21.544 150.546 21.544C153.394 21.544 155.81 22.184 157.794 23.464C159.778 24.744 161.298 26.44 162.354 28.552C163.41 30.632 163.938 32.904 163.938 35.368V38.152H140.514V33.448H158.898L155.874 35.56C155.874 34.056 155.666 32.792 155.25 31.768C154.866 30.712 154.274 29.912 153.474 29.368C152.706 28.824 151.73 28.552 150.546 28.552C149.394 28.552 148.386 28.824 147.522 29.368C146.69 29.88 146.05 30.68 145.602 31.768C145.154 32.824 144.93 34.168 144.93 35.8C144.93 37.272 145.138 38.552 145.554 39.64C145.97 40.696 146.61 41.512 147.474 42.088C148.338 42.664 149.458 42.952 150.834 42.952C152.05 42.952 153.042 42.744 153.81 42.328C154.61 41.912 155.17 41.352 155.49 40.648H163.458C163.074 42.44 162.306 44.04 161.154 45.448C160.034 46.856 158.594 47.96 156.834 48.76C155.106 49.56 153.106 49.96 150.834 49.96ZM168.543 49V22.504H175.455V34.024H175.359C175.359 30.312 176.127 27.4 177.663 25.288C179.231 23.176 181.471 22.12 184.383 22.12H185.439V29.608H183.423C181.471 29.608 179.951 30.136 178.863 31.192C177.807 32.248 177.279 33.768 177.279 35.752V49H168.543ZM189.65 49V22.6C189.65 19.496 190.546 17.192 192.338 15.688C194.13 14.152 196.786 13.384 200.306 13.384H203.714V19.816H200.114C199.346 19.816 198.754 20.024 198.338 20.44C197.922 20.856 197.714 21.448 197.714 22.216V49H189.65ZM186.674 29.416V23.08H204.098V29.416H186.674ZM220.556 49.96C218.22 49.96 216.14 49.608 214.316 48.904C212.492 48.2 210.94 47.224 209.66 45.976C208.412 44.728 207.452 43.288 206.78 41.656C206.14 40.024 205.82 38.28 205.82 36.424V35.272C205.82 33.352 206.156 31.56 206.828 29.896C207.532 28.232 208.524 26.776 209.804 25.528C211.084 24.28 212.636 23.304 214.46 22.6C216.284 21.896 218.316 21.544 220.556 21.544C222.828 21.544 224.86 21.896 226.652 22.6C228.476 23.304 230.028 24.28 231.307 25.528C232.588 26.776 233.564 28.232 234.236 29.896C234.94 31.56 235.292 33.352 235.292 35.272V36.424C235.292 38.28 234.956 40.024 234.284 41.656C233.644 43.288 232.684 44.728 231.404 45.976C230.156 47.224 228.62 48.2 226.796 48.904C224.972 49.608 222.892 49.96 220.556 49.96ZM220.556 42.664C221.9 42.664 223.004 42.376 223.868 41.8C224.764 41.224 225.436 40.424 225.884 39.4C226.332 38.344 226.556 37.16 226.556 35.848C226.556 34.472 226.316 33.272 225.836 32.248C225.388 31.192 224.716 30.36 223.82 29.752C222.924 29.144 221.836 28.84 220.556 28.84C219.276 28.84 218.188 29.144 217.292 29.752C216.396 30.36 215.708 31.192 215.228 32.248C214.78 33.272 214.556 34.472 214.556 35.848C214.556 37.16 214.78 38.344 215.228 39.4C215.676 40.424 216.348 41.224 217.244 41.8C218.14 42.376 219.244 42.664 220.556 42.664ZM240.074 49V22.504H246.986V34.024H246.89C246.89 30.312 247.658 27.4 249.194 25.288C250.762 23.176 253.002 22.12 255.914 22.12H256.97V29.608H254.954C253.002 29.608 251.482 30.136 250.394 31.192C249.338 32.248 248.81 33.768 248.81 35.752V49H240.074ZM260.418 49V22.504H267.33V33.928H266.946C266.946 31.176 267.282 28.904 267.954 27.112C268.658 25.288 269.682 23.928 271.026 23.032C272.37 22.104 274.018 21.64 275.97 21.64H276.354C278.338 21.64 279.986 22.104 281.298 23.032C282.642 23.928 283.65 25.288 284.322 27.112C285.026 28.904 285.378 31.176 285.378 33.928H283.362C283.362 31.176 283.698 28.904 284.37 27.112C285.074 25.288 286.098 23.928 287.442 23.032C288.786 22.104 290.434 21.64 292.386 21.64H292.77C294.754 21.64 296.418 22.104 297.762 23.032C299.138 23.928 300.178 25.288 300.882 27.112C301.618 28.904 301.986 31.176 301.986 33.928V49H293.25V33.688C293.25 32.472 292.914 31.464 292.242 30.664C291.602 29.832 290.674 29.416 289.458 29.416C288.242 29.416 287.282 29.832 286.578 30.664C285.906 31.464 285.57 32.504 285.57 33.784V49H276.834V33.688C276.834 32.472 276.498 31.464 275.826 30.664C275.186 29.832 274.258 29.416 273.042 29.416C271.826 29.416 270.866 29.832 270.162 30.664C269.49 31.464 269.154 32.504 269.154 33.784V49H260.418ZM323.888 49V41.224H322.448V32.92C322.448 31.704 322.16 30.808 321.584 30.232C321.04 29.624 320.128 29.32 318.848 29.32C318.24 29.32 317.344 29.336 316.16 29.368C314.976 29.4 313.728 29.448 312.416 29.512C311.104 29.576 309.904 29.64 308.816 29.704V22.408C309.584 22.344 310.496 22.28 311.552 22.216C312.608 22.152 313.696 22.104 314.816 22.072C315.968 22.04 317.024 22.024 317.984 22.024C320.704 22.024 323.008 22.424 324.896 23.224C326.816 24.024 328.272 25.224 329.264 26.824C330.288 28.424 330.8 30.456 330.8 32.92V49H323.888ZM315.488 49.672C313.632 49.672 311.984 49.336 310.544 48.664C309.104 47.992 307.968 47.032 307.136 45.784C306.336 44.504 305.936 42.984 305.936 41.224C305.936 39.24 306.464 37.64 307.52 36.424C308.576 35.176 310.032 34.264 311.888 33.688C313.744 33.112 315.872 32.824 318.272 32.824H323.408V37.336H318.272C317.088 37.336 316.176 37.64 315.536 38.248C314.896 38.824 314.576 39.608 314.576 40.6C314.576 41.56 314.896 42.344 315.536 42.952C316.176 43.528 317.088 43.816 318.272 43.816C319.04 43.816 319.712 43.688 320.288 43.432C320.896 43.144 321.392 42.664 321.776 41.992C322.16 41.32 322.384 40.392 322.448 39.208L324.464 41.128C324.304 42.952 323.856 44.504 323.12 45.784C322.416 47.032 321.424 47.992 320.144 48.664C318.896 49.336 317.344 49.672 315.488 49.672ZM336.637 49V22.504H343.549V33.88H343.165C343.165 31.128 343.517 28.856 344.221 27.064C344.925 25.24 345.965 23.88 347.341 22.984C348.749 22.088 350.445 21.64 352.429 21.64H352.813C355.821 21.64 358.141 22.648 359.773 24.664C361.437 26.648 362.269 29.704 362.269 33.832V49H353.533V33.592C353.533 32.376 353.165 31.384 352.429 30.616C351.725 29.816 350.749 29.416 349.501 29.416C348.253 29.416 347.245 29.816 346.477 30.616C345.741 31.384 345.373 32.408 345.373 33.688V49H336.637ZM380.233 49.96C377.929 49.96 375.929 49.592 374.233 48.856C372.537 48.088 371.113 47.064 369.961 45.784C368.841 44.504 367.993 43.048 367.417 41.416C366.873 39.784 366.601 38.088 366.601 36.328V35.368C366.601 33.512 366.889 31.752 367.465 30.088C368.073 28.424 368.953 26.952 370.105 25.672C371.257 24.392 372.681 23.384 374.377 22.648C376.073 21.912 378.025 21.544 380.233 21.544C382.665 21.544 384.809 22.024 386.665 22.984C388.521 23.944 389.993 25.272 391.081 26.968C392.201 28.632 392.825 30.552 392.953 32.728H384.409C384.313 31.672 383.913 30.776 383.209 30.04C382.537 29.304 381.545 28.936 380.233 28.936C379.113 28.936 378.185 29.224 377.449 29.8C376.745 30.376 376.217 31.176 375.865 32.2C375.513 33.224 375.337 34.44 375.337 35.848C375.337 37.16 375.481 38.328 375.769 39.352C376.089 40.376 376.601 41.176 377.305 41.752C378.041 42.296 379.017 42.568 380.233 42.568C381.129 42.568 381.881 42.408 382.489 42.088C383.097 41.768 383.577 41.32 383.929 40.744C384.281 40.136 384.505 39.432 384.601 38.632H393.145C393.017 40.872 392.377 42.84 391.225 44.536C390.105 46.232 388.601 47.56 386.713 48.52C384.825 49.48 382.665 49.96 380.233 49.96ZM410.006 49.96C407.766 49.96 405.782 49.576 404.054 48.808C402.326 48.04 400.87 47 399.686 45.688C398.502 44.376 397.59 42.904 396.95 41.272C396.342 39.64 396.038 37.96 396.038 36.232V35.272C396.038 33.48 396.342 31.768 396.95 30.136C397.59 28.472 398.486 27 399.638 25.72C400.822 24.44 402.262 23.432 403.958 22.696C405.654 21.928 407.574 21.544 409.718 21.544C412.566 21.544 414.982 22.184 416.966 23.464C418.95 24.744 420.47 26.44 421.526 28.552C422.582 30.632 423.11 32.904 423.11 35.368V38.152H399.686V33.448H418.07L415.046 35.56C415.046 34.056 414.838 32.792 414.422 31.768C414.038 30.712 413.446 29.912 412.646 29.368C411.878 28.824 410.902 28.552 409.718 28.552C408.566 28.552 407.558 28.824 406.694 29.368C405.862 29.88 405.222 30.68 404.774 31.768C404.326 32.824 404.102 34.168 404.102 35.8C404.102 37.272 404.31 38.552 404.726 39.64C405.142 40.696 405.782 41.512 406.646 42.088C407.51 42.664 408.63 42.952 410.006 42.952C411.222 42.952 412.214 42.744 412.982 42.328C413.782 41.912 414.342 41.352 414.662 40.648H422.63C422.246 42.44 421.478 44.04 420.326 45.448C419.206 46.856 417.766 47.96 416.006 48.76C414.278 49.56 412.278 49.96 410.006 49.96Z" fill="#BE185D"/>
        <path d="M18.216 46L9.864 10.96H19.08L25.368 40L23.88 38.896H27.768L26.088 40L30.84 12.208H38.088L31.512 46H18.216ZM39.048 46L31.992 12.208H39.624L45.192 40L43.512 38.896H47.16L45.912 40L51.336 10.96H59.976L52.632 46H39.048ZM72.3638 36.688V29.008H78.1238C79.2118 29.008 80.1558 28.8 80.9558 28.384C81.7558 27.936 82.3798 27.312 82.8278 26.512C83.2758 25.712 83.4998 24.768 83.4998 23.68C83.4998 22.56 83.2758 21.6 82.8278 20.8C82.3798 20 81.7558 19.392 80.9558 18.976C80.1558 18.56 79.2118 18.352 78.1238 18.352H72.3638V10.672H77.8838C80.8918 10.672 83.4838 11.184 85.6598 12.208C87.8678 13.2 89.5638 14.64 90.7478 16.528C91.9318 18.416 92.5238 20.672 92.5238 23.296V24.064C92.5238 26.656 91.9318 28.896 90.7478 30.784C89.5638 32.672 87.8678 34.128 85.6598 35.152C83.4838 36.176 80.8918 36.688 77.8838 36.688H72.3638ZM64.3958 46V10.672H73.3238V46H64.3958ZM114.598 36.688V29.008H120.358C121.446 29.008 122.39 28.8 123.19 28.384C123.99 27.936 124.614 27.312 125.062 26.512C125.51 25.712 125.734 24.768 125.734 23.68C125.734 22.56 125.51 21.6 125.062 20.8C124.614 20 123.99 19.392 123.19 18.976C122.39 18.56 121.446 18.352 120.358 18.352H114.598V10.672H120.118C123.126 10.672 125.718 11.184 127.894 12.208C130.102 13.2 131.798 14.64 132.982 16.528C134.166 18.416 134.758 20.672 134.758 23.296V24.064C134.758 26.656 134.166 28.896 132.982 30.784C131.798 32.672 130.102 34.128 127.894 35.152C125.718 36.176 123.126 36.688 120.118 36.688H114.598ZM106.63 46V10.672H115.558V46H106.63ZM150.834 46.96C148.594 46.96 146.61 46.576 144.882 45.808C143.154 45.04 141.698 44 140.514 42.688C139.33 41.376 138.418 39.904 137.778 38.272C137.17 36.64 136.866 34.96 136.866 33.232V32.272C136.866 30.48 137.17 28.768 137.778 27.136C138.418 25.472 139.314 24 140.466 22.72C141.65 21.44 143.09 20.432 144.786 19.696C146.482 18.928 148.402 18.544 150.546 18.544C153.394 18.544 155.81 19.184 157.794 20.464C159.778 21.744 161.298 23.44 162.354 25.552C163.41 27.632 163.938 29.904 163.938 32.368V35.152H140.514V30.448H158.898L155.874 32.56C155.874 31.056 155.666 29.792 155.25 28.768C154.866 27.712 154.274 26.912 153.474 26.368C152.706 25.824 151.73 25.552 150.546 25.552C149.394 25.552 148.386 25.824 147.522 26.368C146.69 26.88 146.05 27.68 145.602 28.768C145.154 29.824 144.93 31.168 144.93 32.8C144.93 34.272 145.138 35.552 145.554 36.64C145.97 37.696 146.61 38.512 147.474 39.088C148.338 39.664 149.458 39.952 150.834 39.952C152.05 39.952 153.042 39.744 153.81 39.328C154.61 38.912 155.17 38.352 155.49 37.648H163.458C163.074 39.44 162.306 41.04 161.154 42.448C160.034 43.856 158.594 44.96 156.834 45.76C155.106 46.56 153.106 46.96 150.834 46.96ZM168.543 46V19.504H175.455V31.024H175.359C175.359 27.312 176.127 24.4 177.663 22.288C179.231 20.176 181.471 19.12 184.383 19.12H185.439V26.608H183.423C181.471 26.608 179.951 27.136 178.863 28.192C177.807 29.248 177.279 30.768 177.279 32.752V46H168.543ZM189.65 46V19.6C189.65 16.496 190.546 14.192 192.338 12.688C194.13 11.152 196.786 10.384 200.306 10.384H203.714V16.816H200.114C199.346 16.816 198.754 17.024 198.338 17.44C197.922 17.856 197.714 18.448 197.714 19.216V46H189.65ZM186.674 26.416V20.08H204.098V26.416H186.674ZM220.556 46.96C218.22 46.96 216.14 46.608 214.316 45.904C212.492 45.2 210.94 44.224 209.66 42.976C208.412 41.728 207.452 40.288 206.78 38.656C206.14 37.024 205.82 35.28 205.82 33.424V32.272C205.82 30.352 206.156 28.56 206.828 26.896C207.532 25.232 208.524 23.776 209.804 22.528C211.084 21.28 212.636 20.304 214.46 19.6C216.284 18.896 218.316 18.544 220.556 18.544C222.828 18.544 224.86 18.896 226.652 19.6C228.476 20.304 230.028 21.28 231.307 22.528C232.588 23.776 233.564 25.232 234.236 26.896C234.94 28.56 235.292 30.352 235.292 32.272V33.424C235.292 35.28 234.956 37.024 234.284 38.656C233.644 40.288 232.684 41.728 231.404 42.976C230.156 44.224 228.62 45.2 226.796 45.904C224.972 46.608 222.892 46.96 220.556 46.96ZM220.556 39.664C221.9 39.664 223.004 39.376 223.868 38.8C224.764 38.224 225.436 37.424 225.884 36.4C226.332 35.344 226.556 34.16 226.556 32.848C226.556 31.472 226.316 30.272 225.836 29.248C225.388 28.192 224.716 27.36 223.82 26.752C222.924 26.144 221.836 25.84 220.556 25.84C219.276 25.84 218.188 26.144 217.292 26.752C216.396 27.36 215.708 28.192 215.228 29.248C214.78 30.272 214.556 31.472 214.556 32.848C214.556 34.16 214.78 35.344 215.228 36.4C215.676 37.424 216.348 38.224 217.244 38.8C218.14 39.376 219.244 39.664 220.556 39.664ZM240.074 46V19.504H246.986V31.024H246.89C246.89 27.312 247.658 24.4 249.194 22.288C250.762 20.176 253.002 19.12 255.914 19.12H256.97V26.608H254.954C253.002 26.608 251.482 27.136 250.394 28.192C249.338 29.248 248.81 30.768 248.81 32.752V46H240.074ZM260.418 46V19.504H267.33V30.928H266.946C266.946 28.176 267.282 25.904 267.954 24.112C268.658 22.288 269.682 20.928 271.026 20.032C272.37 19.104 274.018 18.64 275.97 18.64H276.354C278.338 18.64 279.986 19.104 281.298 20.032C282.642 20.928 283.65 22.288 284.322 24.112C285.026 25.904 285.378 28.176 285.378 30.928H283.362C283.362 28.176 283.698 25.904 284.37 24.112C285.074 22.288 286.098 20.928 287.442 20.032C288.786 19.104 290.434 18.64 292.386 18.64H292.77C294.754 18.64 296.418 19.104 297.762 20.032C299.138 20.928 300.178 22.288 300.882 24.112C301.618 25.904 301.986 28.176 301.986 30.928V46H293.25V30.688C293.25 29.472 292.914 28.464 292.242 27.664C291.602 26.832 290.674 26.416 289.458 26.416C288.242 26.416 287.282 26.832 286.578 27.664C285.906 28.464 285.57 29.504 285.57 30.784V46H276.834V30.688C276.834 29.472 276.498 28.464 275.826 27.664C275.186 26.832 274.258 26.416 273.042 26.416C271.826 26.416 270.866 26.832 270.162 27.664C269.49 28.464 269.154 29.504 269.154 30.784V46H260.418ZM323.888 46V38.224H322.448V29.92C322.448 28.704 322.16 27.808 321.584 27.232C321.04 26.624 320.128 26.32 318.848 26.32C318.24 26.32 317.344 26.336 316.16 26.368C314.976 26.4 313.728 26.448 312.416 26.512C311.104 26.576 309.904 26.64 308.816 26.704V19.408C309.584 19.344 310.496 19.28 311.552 19.216C312.608 19.152 313.696 19.104 314.816 19.072C315.968 19.04 317.024 19.024 317.984 19.024C320.704 19.024 323.008 19.424 324.896 20.224C326.816 21.024 328.272 22.224 329.264 23.824C330.288 25.424 330.8 27.456 330.8 29.92V46H323.888ZM315.488 46.672C313.632 46.672 311.984 46.336 310.544 45.664C309.104 44.992 307.968 44.032 307.136 42.784C306.336 41.504 305.936 39.984 305.936 38.224C305.936 36.24 306.464 34.64 307.52 33.424C308.576 32.176 310.032 31.264 311.888 30.688C313.744 30.112 315.872 29.824 318.272 29.824H323.408V34.336H318.272C317.088 34.336 316.176 34.64 315.536 35.248C314.896 35.824 314.576 36.608 314.576 37.6C314.576 38.56 314.896 39.344 315.536 39.952C316.176 40.528 317.088 40.816 318.272 40.816C319.04 40.816 319.712 40.688 320.288 40.432C320.896 40.144 321.392 39.664 321.776 38.992C322.16 38.32 322.384 37.392 322.448 36.208L324.464 38.128C324.304 39.952 323.856 41.504 323.12 42.784C322.416 44.032 321.424 44.992 320.144 45.664C318.896 46.336 317.344 46.672 315.488 46.672ZM336.637 46V19.504H343.549V30.88H343.165C343.165 28.128 343.517 25.856 344.221 24.064C344.925 22.24 345.965 20.88 347.341 19.984C348.749 19.088 350.445 18.64 352.429 18.64H352.813C355.821 18.64 358.141 19.648 359.773 21.664C361.437 23.648 362.269 26.704 362.269 30.832V46H353.533V30.592C353.533 29.376 353.165 28.384 352.429 27.616C351.725 26.816 350.749 26.416 349.501 26.416C348.253 26.416 347.245 26.816 346.477 27.616C345.741 28.384 345.373 29.408 345.373 30.688V46H336.637ZM380.233 46.96C377.929 46.96 375.929 46.592 374.233 45.856C372.537 45.088 371.113 44.064 369.961 42.784C368.841 41.504 367.993 40.048 367.417 38.416C366.873 36.784 366.601 35.088 366.601 33.328V32.368C366.601 30.512 366.889 28.752 367.465 27.088C368.073 25.424 368.953 23.952 370.105 22.672C371.257 21.392 372.681 20.384 374.377 19.648C376.073 18.912 378.025 18.544 380.233 18.544C382.665 18.544 384.809 19.024 386.665 19.984C388.521 20.944 389.993 22.272 391.081 23.968C392.201 25.632 392.825 27.552 392.953 29.728H384.409C384.313 28.672 383.913 27.776 383.209 27.04C382.537 26.304 381.545 25.936 380.233 25.936C379.113 25.936 378.185 26.224 377.449 26.8C376.745 27.376 376.217 28.176 375.865 29.2C375.513 30.224 375.337 31.44 375.337 32.848C375.337 34.16 375.481 35.328 375.769 36.352C376.089 37.376 376.601 38.176 377.305 38.752C378.041 39.296 379.017 39.568 380.233 39.568C381.129 39.568 381.881 39.408 382.489 39.088C383.097 38.768 383.577 38.32 383.929 37.744C384.281 37.136 384.505 36.432 384.601 35.632H393.145C393.017 37.872 392.377 39.84 391.225 41.536C390.105 43.232 388.601 44.56 386.713 45.52C384.825 46.48 382.665 46.96 380.233 46.96ZM410.006 46.96C407.766 46.96 405.782 46.576 404.054 45.808C402.326 45.04 400.87 44 399.686 42.688C398.502 41.376 397.59 39.904 396.95 38.272C396.342 36.64 396.038 34.96 396.038 33.232V32.272C396.038 30.48 396.342 28.768 396.95 27.136C397.59 25.472 398.486 24 399.638 22.72C400.822 21.44 402.262 20.432 403.958 19.696C405.654 18.928 407.574 18.544 409.718 18.544C412.566 18.544 414.982 19.184 416.966 20.464C418.95 21.744 420.47 23.44 421.526 25.552C422.582 27.632 423.11 29.904 423.11 32.368V35.152H399.686V30.448H418.07L415.046 32.56C415.046 31.056 414.838 29.792 414.422 28.768C414.038 27.712 413.446 26.912 412.646 26.368C411.878 25.824 410.902 25.552 409.718 25.552C408.566 25.552 407.558 25.824 406.694 26.368C405.862 26.88 405.222 27.68 404.774 28.768C404.326 29.824 404.102 31.168 404.102 32.8C404.102 34.272 404.31 35.552 404.726 36.64C405.142 37.696 405.782 38.512 406.646 39.088C407.51 39.664 408.63 39.952 410.006 39.952C411.222 39.952 412.214 39.744 412.982 39.328C413.782 38.912 414.342 38.352 414.662 37.648H422.63C422.246 39.44 421.478 41.04 420.326 42.448C419.206 43.856 417.766 44.96 416.006 45.76C414.278 46.56 412.278 46.96 410.006 46.96Z" fill="#261578"/>
        </g>
        <defs>
        <clipPath id="clip0_2_5">
        <rect width="433" height="60" fill="white"/>
        </clipPath>
        </defs>
        </svg>
    </a>';

  return $html;
}
