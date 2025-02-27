<section class="home_text">
    <div class="container">
        <?php if (get_sub_field('position') == 'left'): ?>
            <div class="home_text_img <?= get_sub_field('position') ?>" data-animate='fadeInLeft'><?= wp_get_attachment_image(get_sub_field('img'), 'large'); ?><span></span><span></span></div>
        <?php endif; ?>
        <div class="home_text_content"
            <?php if (get_sub_field('position') == 'left'): ?>
            data-animate='fadeInRight'
            <?php else: ?>
            data-animate='fadeInLeft'
            <?php endif; ?>>
            <div class="home_text_supertitle section-supertitle"><?= get_sub_field('supertitle'); ?></div>
            <h3 class="home_text_title section-title"><?= get_sub_field('title'); ?></h3>
            <div class="home_text_description"><?= get_sub_field('description'); ?></div>
            <?php $download = get_sub_field('download'); ?>
            <?php if ($download['enabled']): ?>
                <div class="download">
                    <a href="<?= $download['file']['url']; ?>">
                        <div class="download_content">
                            <div class="download_title"><?= $download['title'] ?></div>
                            <div class="download_subtitle"><?= $download['subtitle']; ?></div>
                        </div>
                        <div class="download_img">
                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="87" viewBox="0 0 70 87">
                                <g id="Inteligentny_obiekt_wektorowy_kopia_6" data-name="Inteligentny obiekt wektorowy kopia 6" transform="translate(-30.993 -256.65)">
                                    <path id="Path_1" data-name="Path 1" d="M68.751,256.65H47.616a6.1,6.1,0,0,0-6.017,6.17V337.48a6.1,6.1,0,0,0,6.017,6.17h47.36a6.1,6.1,0,0,0,6.017-6.17V289.71a7.184,7.184,0,0,0-2.026-5.016L73.642,258.728A6.831,6.831,0,0,0,68.751,256.65Z" fill="#1d1d1b" />
                                    <path id="Path_2" data-name="Path 2" d="M73.653,283.837V264.262a1.074,1.074,0,0,0-1.061-1.087h0a1.074,1.074,0,0,0-1.061,1.087v21.75a1.074,1.074,0,0,0,1.061,1.088H91.448a1.074,1.074,0,0,0,1.061-1.088h0a1.074,1.074,0,0,0-1.061-1.087H74.714A1.074,1.074,0,0,1,73.653,283.837Z" fill="#fff" />
                                    <path id="Path_3" data-name="Path 3" d="M71.532,337.367c-11.826,0-21.448-9.865-21.448-21.992s9.621-21.992,21.448-21.992,21.448,9.865,21.448,21.992S83.358,337.367,71.532,337.367Zm0-39.15a17.164,17.164,0,1,0,16.734,17.158A16.97,16.97,0,0,0,71.532,298.217Z" fill="#fff" />
                                    <path id="Path_4" data-name="Path 4" d="M71.414,327.217a2.321,2.321,0,0,1-1.667-.708l-7.5-7.69a2.461,2.461,0,0,1,0-3.418,2.316,2.316,0,0,1,3.333,0l5.833,5.981,5.833-5.981a2.317,2.317,0,0,1,3.333,0,2.461,2.461,0,0,1,0,3.418l-7.5,7.69A2.321,2.321,0,0,1,71.414,327.217Z" fill="#fff" />
                                    <path id="Path_5" data-name="Path 5" d="M71.3,327.14a2.387,2.387,0,0,1-2.357-2.417V306.6a2.358,2.358,0,1,1,4.714,0v18.125A2.387,2.387,0,0,1,71.3,327.14Z" fill="#fff" />
                                    <rect id="Rectangle_1" data-name="Rectangle 1" width="33.939" height="19.575" rx="3.792" transform="translate(30.993 269.7)" fill="#fff" />
                                    <g id="Group_1" data-name="Group 1">
                                        <path id="Path_6" data-name="Path 6" d="M33.666,284.7V274.05H37.2a7.949,7.949,0,0,1,1.711.165,3.753,3.753,0,0,1,1.341.583,2.254,2.254,0,0,1,.832.98,4.079,4.079,0,0,1,.231,1.519,4.941,4.941,0,0,1-.127,1.212,2.1,2.1,0,0,1-.543.928,3.213,3.213,0,0,1-1.295.815,6.4,6.4,0,0,1-2.126.292h-1.2V284.7Zm2.358-9.216v3.621h1.133a3.579,3.579,0,0,0,1.11-.135,1.2,1.2,0,0,0,.578-.374,1.013,1.013,0,0,0,.22-.554,7.043,7.043,0,0,0,.035-.733q0-.374-.023-.711a1.115,1.115,0,0,0-.208-.591,1.15,1.15,0,0,0-.555-.389,3.249,3.249,0,0,0-1.063-.135Z" fill="#1d1d1b" />
                                    </g>
                                    <g id="Group_2" data-name="Group 2">
                                        <path id="Path_7" data-name="Path 7" d="M44.23,284.7V274.05h3.49a5.477,5.477,0,0,1,3.086.718,2.32,2.32,0,0,1,1.052,2.035v4.982a2.427,2.427,0,0,1-1.121,2.207,6.051,6.051,0,0,1-3.225.71Zm2.358-9.216v7.78h1.086a2.356,2.356,0,0,0,1.41-.322,1.2,1.2,0,0,0,.416-1.01V276.8a1.225,1.225,0,0,0-.393-.973,2.225,2.225,0,0,0-1.433-.344Z" fill="#1d1d1b" />
                                    </g>
                                    <g id="Group_3" data-name="Group 3">
                                        <path id="Path_8" data-name="Path 8" d="M55.233,284.7V274.05H62.26v1.436H57.59v3.232h4.068v1.436H57.59V284.7Z" fill="#1d1d1b" />
                                    </g>
                                </g>
                            </svg>

                        </div>
                    </a>
                </div>
            <?php endif; ?>
        </div>
        <?php if (get_sub_field('position') == 'right'): ?>
            <div class="home_text_img  <?= get_sub_field('position') ?>" data-animate='fadeInRight'><?= wp_get_attachment_image(get_sub_field('img'), 'large'); ?><span></span><span></span></div>
        <?php endif; ?>
    </div>
</section>