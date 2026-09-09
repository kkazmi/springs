<!DOCTYPE html>
<html dir="ltr" lang="en" class="has-hover no-js not-ready">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>BST Developers | About</title>
    <link rel="stylesheet" href="assets/stylesheets/jsSlider.css" />
    <link rel="stylesheet" href="assets/stylesheets/theme.css" />
    <link rel="stylesheet" href="assets/stylesheets/about.css" />
    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
        if (navigator.platform.toUpperCase().indexOf('WIN') >= 0) {
            document.documentElement.classList.add('is-win');
        }
    </script>
</head>
<body data-barba="wrapper">
    <?php $this->load->view("common/preloader"); ?>
    <div class="page-content-wrapper ui-light-background" data-barba="container" data-barba-namespace="page" data-plugin="utmSave">
        <div class="page-content-wrapper__inner js-page-content-wrapper">
            <?php $this->load->view("common/header"); ?>
                <div class="page-content js-page-content">
                    <main id="top">
                        <section class=" section ui-dark ui-background" data-scroll-section>
                            <?php $this->load->view("about/intro"); ?>
                            <?php $this->load->view("about/overview"); ?>
                            <?php $this->load->view("about/place"); ?>
                            <?php $this->load->view("about/philosophy"); ?>
                            <?php $this->load->view("about/find_residency"); ?>
                        </section>
                    </main>
                    <?php $this->load->view("common/footer"); ?>
                </div>
                <div class="js-modal">
                    <?php $this->load->view('common/modal/callback'); ?>
                    <?php $this->load->view('common/modal/favorite'); ?>
                    <?php $this->load->view('common/modal/subscribe'); ?>
                    <?php $this->load->view('common/modal/subscribe_penthouse'); ?>
                    <?php $this->load->view('common/modal/subscribe_townhouse'); ?>
                    <?php $this->load->view('common/modal/favorite_email'); ?>
                    <?php $this->load->view('common/modal/menu'); ?>
                    <?php $this->load->view('common/modal/menu_picker'); ?>
                </div>
        </div>
    </div>
        <?php $this->load->view("common/cookies"); ?>
        <script fetchpriority="low" async src="assets/javascripts/browser-message/browser-message.js"></script>
        <script fetchpriority="low" src="assets/javascripts/shared.js"></script>
        <script src="assets/javascripts/about.js"></script>
</body>

</html>