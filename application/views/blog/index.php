<!doctype html>
<html dir="ltr" lang="en" class="has-hover no-js not-ready">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
        <title>BST Developers | Residences</title>
        <style>
            .js.not-ready,
            .js.not-ready * {
                transition: none !important;
            }
        </style>
        <link rel="stylesheet" href="assets/stylesheets/theme.css" />
        <link rel="stylesheet" href="assets/stylesheets/flats.css" />
        <script>
            document.documentElement.classList.remove("no-js");
            document.documentElement.classList.add("js");

            if (navigator.platform.toUpperCase().indexOf("WIN") >= 0) {
                document.documentElement.classList.add("is-win");
            }
        </script>
    </head>

    <body data-barba="wrapper">
        <?php $this->load->view("common/preloader"); ?>
        <div
            class="page-content-wrapper ui-light-background"
            data-barba="container"
            data-barba-namespace="page"
            data-plugin="utmSave"
        >
            <div class="page-content-wrapper__inner js-page-content-wrapper">
                <?php $this->load->view("common/header"); ?>
                <div class="page-content js-page-content">
                    <main id="top">
                        <section class="section ui-dark ui-background" data-scroll-section>
                            <div class="flats pb-2:md pt-4 pt-2:lg" id="flats" data-themed-class="ui-dark">
                                <div class="flats__gradient background background--cover">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>

                                <div class="flats__content mt-1:lg">
                                    <form class="js-ajax-filters js-ajax-filters-inline">
                                        <div
                                            class="row"
                                            data-plugin="parallax"
                                            data-parallax-enable-mq="md-down"
                                            data-parallax-clamp="true"
                                            data-parallax-0-0='{"--opacity": "0", "--z-index": "-1"}'
                                            data-parallax-0-1='{"--opacity": "0", "--z-index": "2"}'
                                            data-parallax-0-2='{"--opacity": "1", "--z-index": "2"}'
                                            data-parallax-100-98='{"--opacity": "1", "--z-index": "2"}'
                                            data-parallax-100-99='{"--opacity": "0", "--z-index": "2"}'
                                            data-parallax-100-100='{"--opacity": "0", "--z-index": "-1"}'
                                        >
                                            <!-- <div class="col col--xs-4 col--lg-4 pl-layout:lg flats__filters "
                                            id="filters-sticky">
                                            <div class="flats__filters-sticky pb-0.5:lg"
                                                data-scroll-target="#filters-sticky" data-plugin="stickyDynamic">
                                                <div class="flats-filters ui-dark px-layout pb-layout pb-0:lg px-0:lg ">
                                                    <div class="flats-filters__title mb-1 mb-0:lg">
                                                        <h1 class="h1 leading-trim">
                                                            Residences
                                                        </h1>
                                                    </div>
                                                    <div class="col col--xs-2 col--md-4 mt-0.5 mb-2 is-hidden--md-down">
                                                        <div data-plugin="sortList">
                                                            <a class="btn btn--link btn--tooltip-link flats__sorting js-label js-ajax-hide-if-empty"
                                                                data-plugin="popover" data-parent=".flats-filters"
                                                                data-popover-interactive="true"
                                                                data-popover-placement="bottom-start"
                                                                data-popover-events="click"
                                                                aria-describedby="popover-sorting" tabindex="0"
                                                                role="button">

                                                                <span class="btn__content">

                                                                    <span class="btn__text  text-c1">
                                                                        <span class="js-label-text">
                                                                            Lowest Price
                                                                        </span>

                                                                    </span>

                                                                    <span class="btn__icon ">
                                                                        <svg class="icon icon-sort" width="10"
                                                                            height="6" aria-hidden="true"
                                                                            viewBox="0 0 10 6"
                                                                            style="--icon-width: 10; --icon-height: 6;">
                                                                            <use href="assets/images/icons.svg#sort"
                                                                                xlink:href="assets/images/icons.svg#sort">
                                                                            </use>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                            </a>

                                                            <div id="popover-sorting"
                                                                class="tooltip tooltip--interactive tooltip--closable tooltip--sort"
                                                                role="tooltip">
                                                                <span class="tooltip__triangle"></span>
                                                                <div class="tooltip__background js-tooltip-close"></div>
                                                                <div class="tooltip__content">
                                                                    <input type="radio" name="sort" class="sr-only"
                                                                        value="price-asc" id="sort-price-asc"
                                                                        aria-label="Lowest Price"
                                                                        data-reset-ignore="true" checked />
                                                                    <label
                                                                        class="btn btn--tooltip-link btn--align-left btn--full js-tooltip-close"
                                                                        for="sort-price-asc">
                                                                        <span class="btn__content">
                                                                            <span class="btn__text  text-c1">
                                                                                Lowest Price
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                    <input type="radio" name="sort" class="sr-only"
                                                                        value="price-desc" id="sort-price-desc"
                                                                        aria-label="Highest Price"
                                                                        data-reset-ignore="true" />
                                                                    <label
                                                                        class="btn btn--tooltip-link btn--align-left btn--full js-tooltip-close"
                                                                        for="sort-price-desc">
                                                                        <span class="btn__content">
                                                                            <span class="btn__text  text-c1">
                                                                                Highest Price
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                    <input type="radio" name="sort" class="sr-only"
                                                                        value="price-square-asc"
                                                                        id="sort-price-square-asc"
                                                                        aria-label="Lowest Price/m²"
                                                                        data-reset-ignore="true" />

                                                                    <label
                                                                        class="btn btn--tooltip-link btn--align-left btn--full js-tooltip-close"
                                                                        for="sort-price-square-asc">

                                                                        <span class="btn__content">

                                                                            <span class="btn__text  text-c1">
                                                                                Lowest Price/m²

                                                                            </span>

                                                                        </span>
                                                                    </label>
                                                                    <input type="radio" name="sort" class="sr-only"
                                                                        value="price-square-desc"
                                                                        id="sort-price-square-desc"
                                                                        aria-label="Highest Price/m²"
                                                                        data-reset-ignore="true" />

                                                                    <label
                                                                        class="btn btn--tooltip-link btn--align-left btn--full js-tooltip-close"
                                                                        for="sort-price-square-desc">
                                                                        <span class="btn__content">

                                                                            <span class="btn__text  text-c1">
                                                                                Highest Price/m²
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                    <input type="radio" name="sort" class="sr-only"
                                                                        value="area-asc" id="sort-area-asc"
                                                                        aria-label="Smallest Area"
                                                                        data-reset-ignore="true" />
                                                                    <label
                                                                        class="btn btn--tooltip-link btn--align-left btn--full js-tooltip-close"
                                                                        for="sort-area-asc">
                                                                        <span class="btn__content">
                                                                            <span class="btn__text  text-c1">
                                                                                Smallest Area
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                    <input type="radio" name="sort" class="sr-only"
                                                                        value="area-desc" id="sort-area-desc"
                                                                        aria-label="Largest Area"
                                                                        data-reset-ignore="true" />
                                                                    <label
                                                                        class="btn btn--tooltip-link btn--align-left btn--full js-tooltip-close"
                                                                        for="sort-area-desc">
                                                                        <span class="btn__content">
                                                                            <span class="btn__text  text-c1">
                                                                                Largest Area
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="filters-group filters-group--choices mb-layout mb-0.5:lg"
                                                        data-plugin="choices">
                                                        <input type="checkbox" name="types[]" class="sr-only"
                                                            id="types-all" value="all" aria-label="all"
                                                            data-reset-value="false" checked />
                                                        <label
                                                            class="btn btn--md-tabs btn--square:md btn--tab btn--outline"
                                                            for="types-all">
                                                            <span class="btn__content">
                                                                <span class="btn__text  btn--text-small">
                                                                    all
                                                                </span>
                                                            </span>
                                                        </label>
                                                        <input type="checkbox" name="types[]" class="sr-only"
                                                            id="types-flat" value="flat" aria-label="Flats"
                                                            data-reset-value="false" />

                                                        <label class="btn btn--md-tabs btn--tab btn--outline"
                                                            for="types-flat">
                                                            <span class="btn__content">
                                                                <span class="btn__text  btn--text-small">
                                                                    Flats
                                                                </span>
                                                            </span>
                                                        </label>
                                                        <div class="is-hidden--md-down">
                                                            <span class="btn btn--md-tabs btn--disabled btn--outline"
                                                                data-plugin="popover" data-parent=".filters-group"
                                                                data-popover-interactive="true"
                                                                data-popover-placement="top-center"
                                                                data-popover-events="hover"
                                                                aria-describedby="types-townhousepopover-subscribe">
                                                                <span class="btn__content">
                                                                    <span class="btn__text  btn--text-small">
                                                                        Townhouses
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div id="types-townhousepopover-subscribe"
                                                            class="tooltip tooltip--interactive tooltip--closable tooltip--subscribe"
                                                            role="tooltip">
                                                            <span class="tooltip__triangle"></span>
                                                            <div class="tooltip__background js-tooltip-close"></div>
                                                            <div class="tooltip__content">
                                                                <div
                                                                    class="tooltip__content__text mb-0.3 text-small leading-trim">
                                                                    <span>
                                                                        Available soon
                                                                    </span>
                                                                </div>

                                                                <a class="btn btn--xs btn--outline"
                                                                    href="#subscribe-modal-townhouse"
                                                                    aria-label="Be the&nbsp;first to&nbsp;know">
                                                                    <span class="btn__content">

                                                                        <span class="btn__text  text-c2">
                                                                            Be the&nbsp;first to&nbsp;know

                                                                        </span>

                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="is-hidden--lg-up">

                                                            <span class="btn btn--md-tabs btn--disabled btn--outline "
                                                                data-plugin="popover" for="types-townhouse"
                                                                data-parent=".filters-group"
                                                                data-popover-interactive="true"
                                                                data-popover-placement="bottom-start"
                                                                data-popover-events="click"
                                                                data-popover-auto-placement="&#x5B;&#x5D;"
                                                                aria-describedby="types-townhouse-popover-subscribe-mobile">

                                                                <span class="btn__content">

                                                                    <span class="btn__text  btn--text-small">
                                                                        Townhouses

                                                                    </span>

                                                                </span>
                                                            </span>
                                                        </div>

                                                        <div id="types-townhouse-popover-subscribe-mobile"
                                                            class="tooltip tooltip--interactive tooltip--closable tooltip--subscribe"
                                                            role="tooltip">
                                                            <span class="tooltip__triangle"></span>
                                                            <div class="tooltip__background js-tooltip-close"></div>
                                                            <div class="tooltip__content">
                                                                <div
                                                                    class="tooltip__content__text mb-0.3 text-small leading-trim">
                                                                    <span>
                                                                        Available soon
                                                                    </span>
                                                                </div>
                                                                <a class="btn btn--xs btn--outline"
                                                                    href="#subscribe-modal-townhouse"
                                                                    aria-label="Be the&nbsp;first to&nbsp;know">

                                                                    <span class="btn__content">

                                                                        <span class="btn__text  btn--text-small">
                                                                            Be the&nbsp;first to&nbsp;know

                                                                        </span>

                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="tooltip__close is-hidden--lg-up">
                                                                <span class="btn btn--primary btn--square btn--xs js-tooltip-close" aria-label="Закрыть">
                                                                    <span class="btn__content">
                                                                        <span class="btn__icon ">
                                                                            <svg class="icon icon-close" width="10"
                                                                                height="10" aria-hidden="true"
                                                                                viewBox="0 0 10 10"
                                                                                style="--icon-width: 10; --icon-height: 10;">
                                                                                <use href="assets/images/icons.svg#close"
                                                                                    xlink:href="assets/images/icons.svg#close">
                                                                                </use>
                                                                            </svg>
                                                                        </span>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="is-hidden--md-down">
                                                            <span class="btn btn--md-tabs btn--disabled btn--outline"
                                                                data-plugin="popover" data-parent=".filters-group"
                                                                data-popover-interactive="true"
                                                                data-popover-placement="top-center"
                                                                data-popover-events="hover"
                                                                aria-describedby="types-penthousepopover-subscribe">
                                                                <span class="btn__content">
                                                                    <span class="btn__text  btn--text-small">
                                                                        Penthouses
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div id="types-penthousepopover-subscribe"
                                                            class="tooltip tooltip--interactive tooltip--closable tooltip--subscribe"
                                                            role="tooltip">
                                                            <span class="tooltip__triangle"></span>
                                                            <div class="tooltip__background js-tooltip-close"></div>
                                                            <div class="tooltip__content">
                                                                <div
                                                                    class="tooltip__content__text mb-0.3 text-small leading-trim">
                                                                    <span>
                                                                        Available soon
                                                                    </span>
                                                                </div>
                                                                <a class="btn btn--xs btn--outline"
                                                                    href="#subscribe-modal-penthouse"
                                                                    aria-label="Be the&nbsp;first to&nbsp;know">

                                                                    <span class="btn__content">

                                                                        <span class="btn__text  text-c2">
                                                                            Be the&nbsp;first to&nbsp;know

                                                                        </span>

                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="is-hidden--lg-up">
                                                            <span class="btn btn--md-tabs btn--disabled btn--outline "
                                                                data-plugin="popover" for="types-penthouse"
                                                                data-parent=".filters-group"
                                                                data-popover-interactive="true"
                                                                data-popover-placement="bottom-start"
                                                                data-popover-events="click"
                                                                data-popover-auto-placement="&#x5B;&#x5D;"
                                                                aria-describedby="types-penthouse-popover-subscribe-mobile">

                                                                <span class="btn__content">

                                                                    <span class="btn__text  btn--text-small">
                                                                        Penthouses

                                                                    </span>

                                                                </span>
                                                            </span>
                                                        </div>


                                                        <div id="types-penthouse-popover-subscribe-mobile"
                                                            class="tooltip tooltip--interactive tooltip--closable tooltip--subscribe"
                                                            role="tooltip">
                                                            <span class="tooltip__triangle"></span>
                                                            <div class="tooltip__background js-tooltip-close"></div>
                                                            <div class="tooltip__content">
                                                                <div
                                                                    class="tooltip__content__text mb-0.3 text-small leading-trim">
                                                                    <span>
                                                                        Available soon
                                                                    </span>
                                                                </div>









                                                                <a class="btn btn--xs btn--outline"
                                                                    href="#subscribe-modal-penthouse"
                                                                    aria-label="Be the&nbsp;first to&nbsp;know">

                                                                    <span class="btn__content">

                                                                        <span class="btn__text  btn--text-small">
                                                                            Be the&nbsp;first to&nbsp;know

                                                                        </span>

                                                                    </span>
                                                                </a>
                                                            </div>

                                                            <div class="tooltip__close is-hidden--lg-up">








                                                                <span
                                                                    class="btn btn--primary btn--square btn--xs js-tooltip-close"
                                                                    aria-label="Закрыть">

                                                                    <span class="btn__content">


                                                                        <span class="btn__icon ">
                                                                            <svg class="icon icon-close" width="10"
                                                                                height="10" aria-hidden="true"
                                                                                viewBox="0 0 10 10"
                                                                                style="--icon-width: 10; --icon-height: 10;">
                                                                                <use href="assets/images/icons.svg#close"
                                                                                    xlink:href="assets/images/icons.svg#close">
                                                                                </use>
                                                                            </svg>
                                                                        </span>
                                                                    </span>
                                                                </span>
                                                            </div>

                                                        </div>




                                                    </div>
                                                    <div class="filters-group mb-layout mb-0.5:lg"
                                                        data-plugin="choices">



                                                        <input type="checkbox" name="rooms[]" class="sr-only"
                                                            id="rooms-2" value="2" aria-label="2BR"
                                                            data-reset-value="false" />









                                                        <label class="btn btn--md-tabs btn--tab btn--outline"
                                                            for="rooms-2">

                                                            <span class="btn__content">

                                                                <span class="btn__text  btn--text-small">
                                                                    2BR

                                                                </span>

                                                            </span>
                                                        </label>





                                                        <input type="checkbox" name="rooms[]" class="sr-only"
                                                            id="rooms-3" value="3" aria-label="3BR"
                                                            data-reset-value="false" />









                                                        <label class="btn btn--md-tabs btn--tab btn--outline"
                                                            for="rooms-3">

                                                            <span class="btn__content">

                                                                <span class="btn__text  btn--text-small">
                                                                    3BR

                                                                </span>

                                                            </span>
                                                        </label>





                                                        <input type="checkbox" name="rooms[]" class="sr-only"
                                                            id="rooms-4" value="4" aria-label="4BR"
                                                            data-reset-value="false" />









                                                        <label class="btn btn--md-tabs btn--tab btn--outline"
                                                            for="rooms-4">

                                                            <span class="btn__content">

                                                                <span class="btn__text  btn--text-small">
                                                                    4BR

                                                                </span>

                                                            </span>
                                                        </label>





                                                        <input type="checkbox" name="rooms[]" class="sr-only"
                                                            id="rooms-5" value="5" aria-label="5BR"
                                                            data-reset-value="false" />









                                                        <label class="btn btn--md-tabs btn--tab btn--outline"
                                                            for="rooms-5">

                                                            <span class="btn__content">

                                                                <span class="btn__text  btn--text-small">
                                                                    5BR

                                                                </span>

                                                            </span>
                                                        </label>



                                                        <span class="text-c1 leading-trim ml-0.5">
                                                            Rooms
                                                        </span>
                                                    </div>
                                                    <div class="filters-group filters-group--range">







                                                        <div class="form-control-range-container">
                                                            <div class="group group--nowrap group--middle group--lg">








                                                                <div class="
                                                                    group__fill
                                                                    form-control form-control--input
                                                                    form-control--float                is-not-empty        form-control--range form-control--min
                                                                " data-plugin="inputState inputMask ">

                                                                    <input id="text-827763" valueMeasure="" type="text"
                                                                        placeholder="from" inputmode="numeric"
                                                                        data-input-type="number" data-maska="9 99#"
                                                                        data-maska-tokens="9:[0-9]:repeated"
                                                                        data-maska-reversed="true"
                                                                        data-reset-value="57288000" value="57288000">



                                                                    <label for="text-827763"
                                                                        class="form-label text-c1 text-color-small ">
                                                                        from </label>



                                                                </div>













                                                                <div class="
                                                                        group__fill
                                                                        form-control form-control--input
                                                                        form-control--float                is-not-empty        form-control--range form-control--max
                                                                    " data-plugin="inputState inputMask ">

                                                                    <input id="text-207753" valueMeasure="" type="text"
                                                                        placeholder="to" inputmode="numeric"
                                                                        data-input-type="number" data-maska="9 99#"
                                                                        data-maska-tokens="9:[0-9]:repeated"
                                                                        data-maska-reversed="true"
                                                                        data-reset-value="346518000" value="346518000">



                                                                    <label for="text-207753"
                                                                        class="form-label text-c1 text-color-small ">
                                                                        to </label>



                                                                </div>




                                                            </div>

                                                            <div class="form-control-range" data-plugin="range"
                                                                data-range-formatter="number">
                                                                <input aria-label=" from" name="price[from]"
                                                                    type="range" min="57288000" max="346518000"
                                                                    value="57288000" step="1" class="sr-only"
                                                                    data-reset-value="57288000" />
                                                                <input aria-label=" to" name="price[to]" type="range"
                                                                    min="57288000" max="346518000" value="346518000"
                                                                    step="1" class="sr-only"
                                                                    data-reset-value="346518000" />
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="filters-group filters-group--range">







                                                        <div class="form-control-range-container">
                                                            <div class="group group--nowrap group--middle group--lg">








                                                                <div class="
                                                                    group__fill
                                                                    form-control form-control--input
                                                                    form-control--float                is-not-empty        form-control--range form-control--min
                                                                " data-plugin="inputState inputMask ">

                                                                    <input id="text-685976"
                                                                        valueMeasure="м&lt;sup&gt;2&lt;/sup&gt;"
                                                                        type="text" placeholder="from"
                                                                        inputmode="numeric" data-input-type="number"
                                                                        data-maska="9 99#"
                                                                        data-maska-tokens="9:[0-9]:repeated"
                                                                        data-maska-reversed="true" data-reset-value="61"
                                                                        value="61">



                                                                    <label for="text-685976"
                                                                        class="form-label text-c1 text-color-small ">
                                                                        from </label>

                                                                    <span
                                                                        class="text-c1 form-control-range__label text-color-small">м<sup>2</sup></span>


                                                                </div>

                                                                <div class="
                                                                    group__fill
                                                                    form-control form-control--input
                                                                    form-control--float                is-not-empty        form-control--range form-control--max
                                                                " data-plugin="inputState inputMask ">

                                                                    <input id="text-574837"
                                                                        valueMeasure="м&lt;sup&gt;2&lt;/sup&gt;"
                                                                        type="text" placeholder="to" inputmode="numeric"
                                                                        data-input-type="number" data-maska="9 99#"
                                                                        data-maska-tokens="9:[0-9]:repeated"
                                                                        data-maska-reversed="true"
                                                                        data-reset-value="288" value="288">
                                                                    <label for="text-574837"
                                                                        class="form-label text-c1 text-color-small ">
                                                                        to </label>
                                                                    <span
                                                                        class="text-c1 form-control-range__label text-color-small">м<sup>2</sup></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-control-range" data-plugin="range"
                                                                data-range-formatter="number">
                                                                <input aria-label=" from" name="square[from]"
                                                                    type="range" min="61" max="288" value="61" step="1"
                                                                    class="sr-only" data-reset-value="61" />
                                                                <input aria-label=" to" name="square[to]" type="range"
                                                                    min="61" max="288" value="288" step="1"
                                                                    class="sr-only" data-reset-value="288" />
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="filters-group filters-group--range">

                                                        <div class="form-control-range-container">
                                                            <div class="group group--nowrap group--middle group--lg">

                                                                <div class="
                                                                    group__fill
                                                                    form-control form-control--input
                                                                    form-control--float                is-not-empty        form-control--range form-control--min
                                                                " data-plugin="inputState inputMask ">

                                                                    <input id="text-564027" valueMeasure="floor"
                                                                        type="text" placeholder="from"
                                                                        inputmode="numeric" data-input-type="number"
                                                                        data-maska="9 99#"
                                                                        data-maska-tokens="9:[0-9]:repeated"
                                                                        data-maska-reversed="true" data-reset-value="3"
                                                                        value="3">



                                                                    <label for="text-564027"
                                                                        class="form-label text-c1 text-color-small ">
                                                                        from </label>

                                                                    <span
                                                                        class="text-c1 form-control-range__label text-color-small">floor</span>


                                                                </div>


                                                                <div class="
                                                            group__fill
                                                            form-control form-control--input
                                                            form-control--float                is-not-empty        form-control--range form-control--max
                                                        " data-plugin="inputState inputMask ">

                                                                    <input id="text-376513" valueMeasure="floor"
                                                                        type="text" placeholder="to" inputmode="numeric"
                                                                        data-input-type="number" data-maska="9 99#"
                                                                        data-maska-tokens="9:[0-9]:repeated"
                                                                        data-maska-reversed="true" data-reset-value="20"
                                                                        value="20">
                                                                    <label for="text-376513"
                                                                        class="form-label text-c1 text-color-small ">
                                                                        to </label>
                                                                    <span
                                                                        class="text-c1 form-control-range__label text-color-small">floor</span>
                                                                </div>
                                                            </div>

                                                            <div class="form-control-range" data-plugin="range"
                                                                data-range-formatter="number">
                                                                <input aria-label=" from" name="floor[from]"
                                                                    type="range" min="3" max="20" value="3" step="1"
                                                                    class="sr-only" data-reset-value="3" />
                                                                <input aria-label=" to" name="floor[to]" type="range"
                                                                    min="3" max="20" value="20" step="1" class="sr-only"
                                                                    data-reset-value="20" />
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="mt-1 mt-0.5:md is-hidden--md-down">
                                                        <div class="text-c1 leading-trim mb-0.5 mb-0.3:lg">
                                                            <span>
                                                                Features
                                                            </span>
                                                        </div>

                                                        <div class="filters-group filters-group--choices-small mb-0.5">


                                                            <input type="checkbox" name="features[]" class="sr-only"
                                                                id="features-balcony" value="balcony"
                                                                aria-label="Balcony" data-reset-value="false" />









                                                            <label
                                                                class="btn btn--sm btn--padding-win-fix btn--tab btn--outline"
                                                                for="features-balcony">

                                                                <span class="btn__content">
                                                                    <span class="btn__icon ">
                                                                        <svg class="icon icon-balcony" width="16"
                                                                            height="16" aria-hidden="true"
                                                                            viewBox="0 0 16 16"
                                                                            style="--icon-width: 16; --icon-height: 16;">
                                                                            <use href="assets/images/icons.svg#balcony"
                                                                                xlink:href="assets/images/icons.svg#balcony">
                                                                            </use>
                                                                        </svg>
                                                                    </span>

                                                                    <span class="btn__text  text-c2-small">
                                                                        Balcony

                                                                    </span>

                                                                </span>
                                                            </label>

                                                            <input type="checkbox" name="features[]" class="sr-only"
                                                                id="features-cabinet" value="cabinet"
                                                                aria-label="Cabinet" data-reset-value="false" />









                                                            <label
                                                                class="btn btn--sm btn--padding-win-fix btn--tab btn--outline"
                                                                for="features-cabinet">

                                                                <span class="btn__content">
                                                                    <span class="btn__icon ">
                                                                        <svg class="icon icon-cabinet" width="16"
                                                                            height="16" aria-hidden="true"
                                                                            viewBox="0 0 16 16"
                                                                            style="--icon-width: 16; --icon-height: 16;">
                                                                            <use href="assets/images/icons.svg#cabinet"
                                                                                xlink:href="assets/images/icons.svg#cabinet">
                                                                            </use>
                                                                        </svg>
                                                                    </span>

                                                                    <span class="btn__text  text-c2-small">
                                                                        Cabinet

                                                                    </span>

                                                                </span>
                                                            </label>




                                                            <input type="checkbox" name="features[]" class="sr-only"
                                                                id="features-loggia" value="loggia" aria-label="Loggia"
                                                                data-reset-value="false" />


                                                            <label
                                                                class="btn btn--sm btn--padding-win-fix btn--tab btn--outline"
                                                                for="features-loggia">

                                                                <span class="btn__content">
                                                                    <span class="btn__icon ">
                                                                        <svg class="icon icon-loggia" width="16"
                                                                            height="16" aria-hidden="true"
                                                                            viewBox="0 0 16 16"
                                                                            style="--icon-width: 16; --icon-height: 16;">
                                                                            <use href="assets/images/icons.svg#loggia"
                                                                                xlink:href="assets/images/icons.svg#loggia">
                                                                            </use>
                                                                        </svg>
                                                                    </span>

                                                                    <span class="btn__text  text-c2-small">
                                                                        Loggia

                                                                    </span>

                                                                </span>
                                                            </label>

                                                            <input type="checkbox" name="features[]" class="sr-only"
                                                                id="features-storage" value="storage"
                                                                aria-label="Storage" data-reset-value="false" />

                                                            <label
                                                                class="btn btn--sm btn--padding-win-fix btn--tab btn--outline"
                                                                for="features-storage">
                                                                <span class="btn__content">
                                                                    <span class="btn__icon ">
                                                                        <svg class="icon icon-storage" width="16"
                                                                            height="16" aria-hidden="true"
                                                                            viewBox="0 0 16 16"
                                                                            style="--icon-width: 16; --icon-height: 16;">
                                                                            <use href="assets/images/icons.svg#storage"
                                                                                xlink:href="assets/images/icons.svg#storage">
                                                                            </use>
                                                                        </svg>
                                                                    </span>

                                                                    <span class="btn__text  text-c2-small">
                                                                        Storage

                                                                    </span>

                                                                </span>
                                                            </label>

                                                            <input type="checkbox" name="features[]" class="sr-only"
                                                                id="features-terrace" value="terrace"
                                                                aria-label="Terrace" data-reset-value="false" />

                                                            <label
                                                                class="btn btn--sm btn--padding-win-fix btn--tab btn--outline"
                                                                for="features-terrace">

                                                                <span class="btn__content">
                                                                    <span class="btn__icon ">
                                                                        <svg class="icon icon-terrace" width="16"
                                                                            height="16" aria-hidden="true"
                                                                            viewBox="0 0 16 16"
                                                                            style="--icon-width: 16; --icon-height: 16;">
                                                                            <use href="assets/images/icons.svg#terrace"
                                                                                xlink:href="assets/images/icons.svg#terrace">
                                                                            </use>
                                                                        </svg>
                                                                    </span>

                                                                    <span class="btn__text  text-c2-small">
                                                                        Terrace

                                                                    </span>

                                                                </span>
                                                            </label>

                                                            <input type="checkbox" name="features[]" class="sr-only"
                                                                id="features-wardrobe" value="wardrobe"
                                                                aria-label="Wardrobe" data-reset-value="false" />

                                                            <label
                                                                class="btn btn--sm btn--padding-win-fix btn--tab btn--outline"
                                                                for="features-wardrobe">

                                                                <span class="btn__content">
                                                                    <span class="btn__icon ">
                                                                        <svg class="icon icon-wardrobe" width="16"
                                                                            height="16" aria-hidden="true"
                                                                            viewBox="0 0 16 16"
                                                                            style="--icon-width: 16; --icon-height: 16;">
                                                                            <use href="assets/images/icons.svg#wardrobe"
                                                                                xlink:href="assets/images/icons.svg#wardrobe">
                                                                            </use>
                                                                        </svg>
                                                                    </span>

                                                                    <span class="btn__text  text-c2-small">
                                                                        Wardrobe
                                                                    </span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="is-hidden--lg-up mt-1 group group--between">

                                                        <a class="btn btn--outline btn--filter flats__filters-btn-modal"
                                                            href="#filters">

                                                            <span class="btn__content">

                                                                <span class="btn__text btn__text--has-content ">
                                                                    <span class="mr-0.3">
                                                                        Filters
                                                                    </span>


                                                                    <span
                                                                        class="btn btn--square btn--xs btn--primary ui-dark js-ajax-filters-count is-hidden">

                                                                        <span class="btn__content">

                                                                            <span class="btn__text  ">
                                                                                0

                                                                            </span>

                                                                        </span>
                                                                    </span>

                                                                </span>

                                                            </span>
                                                        </a>


                                                        <button
                                                            class="btn btn--sm btn--outline js-ajax-filters-reset js-ajax-filters-count js-ajax-filters-count-no-text is hidden--md-down is-hidden"
                                                            type="reset">

                                                            <span class="btn__content">
                                                                <span class="btn__icon ">
                                                                    <svg class="icon icon-reset" width="16" height="16"
                                                                        aria-hidden="true" viewBox="0 0 16 16"
                                                                        style="--icon-width: 16; --icon-height: 16;">
                                                                        <use href="assets/images/icons.svg#reset"
                                                                            xlink:href="assets/images/icons.svg#reset">
                                                                        </use>
                                                                    </svg>
                                                                </span>

                                                                <span class="btn__text  ">
                                                                    reset

                                                                </span>

                                                            </span>
                                                        </button>
                                                    </div>

                                                    <button
                                                        class="btn btn--sm btn--outline js-ajax-filters-reset js-ajax-filters-count js-ajax-filters-count-no-text is-hidden--md-down is-hidden mt-1:lg"
                                                        type="reset">

                                                        <span class="btn__content">
                                                            <span class="btn__icon ">
                                                                <svg class="icon icon-reset" width="16" height="16"
                                                                    aria-hidden="true" viewBox="0 0 16 16"
                                                                    style="--icon-width: 16; --icon-height: 16;">
                                                                    <use href="assets/images/icons.svg#reset"
                                                                        xlink:href="assets/images/icons.svg#reset">
                                                                    </use>
                                                                </svg>
                                                            </span>

                                                            <span class="btn__text  ">
                                                                reset filters

                                                            </span>

                                                        </span>
                                                    </button>

                                                </div>
                                            </div>
                                        </div> -->
                                            <!-- <div class="flats__sort col col--xs-4 text-right pr-layout mt-0.25 is-hidden--lg-up js-ajax-hide-if-empty">
                                            <div data-plugin="sortList">
                                                <a class="btn btn--link flats__sorting js-label" data-plugin="popover"
                                                    data-popover-interactive="true"
                                                    data-popover-placement="bottom-start" data-popover-events="click"
                                                    aria-describedby="popover-sorting-mobile" tabindex="0"
                                                    role="button">
                                                    <span class="btn__content">
                                                        <span class="btn__text  text-c1 text-color-small">
                                                            <span class="js-label-text">
                                                                Lowest Price
                                                            </span>

                                                        </span>

                                                        <span class="btn__icon ">
                                                            <svg class="icon icon-sort" width="10" height="6"
                                                                aria-hidden="true" viewBox="0 0 10 6"
                                                                style="--icon-width: 10; --icon-height: 6;">
                                                                <use href="assets/images/icons.svg#sort"
                                                                    xlink:href="assets/images/icons.svg#sort"></use>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                </a>

                                                <div id="popover-sorting-mobile"
                                                    class="tooltip tooltip--interactive tooltip--sort tooltip--closable"
                                                    role="tooltip">
                                                    <div class="tooltip__background js-tooltip-close"></div>
                                                    <div class="tooltip__content">
                                                        <div class="tooltip__content-top mb-layout is-hidden--md-up">
                                                            <div class="text-c2 text-color-small leading-trim">
                                                                Sort
                                                            </div>

                                                            <a class="btn btn--primary btn--square js-tooltip-close"
                                                                aria-label="Close" tabindex="0" role="button">

                                                                <span class="btn__content">


                                                                    <span class="btn__icon ">
                                                                        <svg class="icon icon-close" width="12"
                                                                            height="12" aria-hidden="true"
                                                                            viewBox="0 0 12 12"
                                                                            style="--icon-width: 12; --icon-height: 12;">
                                                                            <use href="assets/images/icons.svg#close"
                                                                                xlink:href="assets/images/icons.svg#close">
                                                                            </use>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <input type="radio" name="sort" class="sr-only"
                                                            value="price-asc" id="sort-mobile-price-asc"
                                                            aria-label="Lowest Price" data-reset-ignore="true"
                                                            checked />








                                                        <label
                                                            class="btn btn--tooltip-link btn--align-left btn--full js-tooltip-close"
                                                            for="sort-mobile-price-asc">

                                                            <span class="btn__content">

                                                                <span class="btn__text  text-c1">
                                                                    Lowest Price

                                                                </span>

                                                            </span>
                                                        </label>
                                                        <input type="radio" name="sort" class="sr-only"
                                                            value="price-desc" id="sort-mobile-price-desc"
                                                            aria-label="Highest Price" data-reset-ignore="true" />








                                                        <label
                                                            class="btn btn--tooltip-link btn--align-left btn--full js-tooltip-close"
                                                            for="sort-mobile-price-desc">

                                                            <span class="btn__content">

                                                                <span class="btn__text  text-c1">
                                                                    Highest Price

                                                                </span>

                                                            </span>
                                                        </label>
                                                        <input type="radio" name="sort" class="sr-only"
                                                            value="price-square-asc" id="sort-mobile-price-square-asc"
                                                            aria-label="Lowest Price/m²" data-reset-ignore="true" />








                                                        <label
                                                            class="btn btn--tooltip-link btn--align-left btn--full js-tooltip-close"
                                                            for="sort-mobile-price-square-asc">

                                                            <span class="btn__content">

                                                                <span class="btn__text  text-c1">
                                                                    Lowest Price/m²

                                                                </span>

                                                            </span>
                                                        </label>
                                                        <input type="radio" name="sort" class="sr-only"
                                                            value="price-square-desc" id="sort-mobile-price-square-desc"
                                                            aria-label="Highest Price/m²" data-reset-ignore="true" />








                                                        <label
                                                            class="btn btn--tooltip-link btn--align-left btn--full js-tooltip-close"
                                                            for="sort-mobile-price-square-desc">

                                                            <span class="btn__content">

                                                                <span class="btn__text  text-c1">
                                                                    Highest Price/m²

                                                                </span>

                                                            </span>
                                                        </label>
                                                        <input type="radio" name="sort" class="sr-only" value="area-asc"
                                                            id="sort-mobile-area-asc" aria-label="Smallest Area"
                                                            data-reset-ignore="true" />








                                                        <label
                                                            class="btn btn--tooltip-link btn--align-left btn--full js-tooltip-close"
                                                            for="sort-mobile-area-asc">

                                                            <span class="btn__content">

                                                                <span class="btn__text  text-c1">
                                                                    Smallest Area

                                                                </span>

                                                            </span>
                                                        </label>
                                                        <input type="radio" name="sort" class="sr-only"
                                                            value="area-desc" id="sort-mobile-area-desc"
                                                            aria-label="Largest Area" data-reset-ignore="true" />








                                                        <label
                                                            class="btn btn--tooltip-link btn--align-left btn--full js-tooltip-close"
                                                            for="sort-mobile-area-desc">

                                                            <span class="btn__content">

                                                                <span class="btn__text  text-c1">
                                                                    Largest Area

                                                                </span>

                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flats__filters-sticky-modal col col--xs-4 col--lg-4 pl-layout:lg is-hidden--lg-up ui-light"
                                            data-scroll data-scroll-sticky data-scroll-target="#flats">

                                            <a class="btn btn--primary btn--filter" href="#filters">

                                                <span class="btn__content">

                                                    <span class="btn__text btn__text--has-content ">
                                                        <span class="mr-0.3">
                                                            all filters
                                                        </span>







                                                        <span
                                                            class="btn btn--square btn--round btn--xs btn--primary ui-dark js-ajax-filters-count is-hidden">

                                                            <span class="btn__content">

                                                                <span class="btn__text  ">
                                                                    0

                                                                </span>

                                                            </span>
                                                        </span>


                                                    </span>

                                                </span>
                                            </a>
                                        </div> -->
                                            <div
                                                class="col col--xs-4 col--lg-12 flats__col pt-0.5 pt-0:lg pl-2:lg px-layout pl-0:lg pb-1 pb-0.5:lg p-relative"
                                            >
                                                <!-- <div class="col col--xs-4 col--lg-12 is-hidden flats__empty js-ajax-empty">
                                                <div class="flats__empty__title pb-1 mb-1">
                                                    <p class="leading-trim">
                                                        No results found based on your filters.
                                                        <br>
                                                        Try making your filters more flexible or consider similar
                                                        options.
                                                    </p>
                                                </div>
                                                <p class="h3 leading-trim pb-1">
                                                    Similar options
                                                </p>
                                            </div> -->
                                                <ul
                                                    class="col col--xs-4 col--lg-12 flats__listt ui-light js-ajax-list"
                                                    data-themed-class='{"left": "ui-dark", "right": "ui-light", "mobile-left": "ui-light"}'
                                                >
                                                    <li>
                                                        <a
                                                            href="flat/54.html"
                                                            class="card card--apartment blog"
                                                            data-ajax-page-ignore-prefetch
                                                        >
                                                            <div class="card__sizer blogg"></div>
                                                            <div class="card__content">
                                                                <div
                                                                    class="card__top group group--nowrap group--between"
                                                                >
                                                                    <h5 class="card__title h5 leading-trim">
                                                                        <span class="card__title__text">
                                                                            Real Estate Trends Every Homebuyer Should
                                                                            Know
                                                                        </span>
                                                                    </h5>
                                                                </div>

                                                                <div class="card__plan blog">
                                                                    <picture class="svg-fix" draggable="false">
                                                                        <img
                                                                            class="blog"
                                                                            src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?w=1200"
                                                                            alt=""
                                                                        />
                                                                    </picture>
                                                                </div>

                                                                <div class="card__footer">
                                                                    <div>
                                                                        <div class="text-small leading-trim">
                                                                            <h4
                                                                                class="card__square"
                                                                                style="float: left"
                                                                            >
                                                                                <span class="card__title__text">
                                                                                    Catigory Name
                                                                                </span>
                                                                            </h4>
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="card__footer__price group group--nowrap group--bottom group--between pb-layout pb-0.25:md mb-layout mb-0.25:md"
                                                                    >
                                                                        <div
                                                                            class="group group--small group--middle"
                                                                        ></div>
                                                                        <div
                                                                            class="text-c2 text-color-small leading-trim"
                                                                        >
                                                                            <div class="blog-statistics">
                                                                                <!-- Views -->
                                                                                <span class="blog-stat" title="Views">
                                                                                    👁️
                                                                                    <span class="stat-count">125</span>
                                                                                </span>

                                                                                <!-- Likes -->
                                                                                <span class="blog-stat" title="Likes">
                                                                                    ❤️
                                                                                    <span class="stat-count">48</span>
                                                                                </span>

                                                                                <!-- Comments -->
                                                                                <span
                                                                                    class="blog-stat"
                                                                                    title="Comments"
                                                                                >
                                                                                    💬
                                                                                    <span class="stat-count">12</span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="group group--nowrap group--bottom group--between"
                                                                        style="display: block"
                                                                    >
                                                                        <p style="z-index: 10">
                                                                            The real estate market is constantly
                                                                            evolving. Learn about changing buyer
                                                                            preferences, new developments, technology,
                                                                            sustainable housing and emerging property
                                                                            trends.
                                                                        </p>
                                                                        <p style="color: #62aaf7">Read More..</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                     <li>
                                                        <a
                                                            href="flat/54.html"
                                                            class="card card--apartment blog"
                                                            data-ajax-page-ignore-prefetch
                                                        >
                                                            <div class="card__sizer blogg"></div>
                                                            <div class="card__content">
                                                                <div
                                                                    class="card__top group group--nowrap group--between"
                                                                >
                                                                    <h5 class="card__title h5 leading-trim">
                                                                        <span class="card__title__text">
                                                                            Real Estate Trends Every Homebuyer Should
                                                                            Know
                                                                        </span>
                                                                    </h5>
                                                                </div>

                                                                <div class="card__plan blog">
                                                                    <picture class="svg-fix" draggable="false">
                                                                        <img
                                                                            class="blog"
                                                                            src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?w=1200"
                                                                            alt=""
                                                                        />
                                                                    </picture>
                                                                </div>

                                                                <div class="card__footer">
                                                                    <div>
                                                                        <div class="text-small leading-trim">
                                                                            <h4
                                                                                class="card__square"
                                                                                style="float: left"
                                                                            >
                                                                                <span class="card__title__text">
                                                                                    Catigory Name
                                                                                </span>
                                                                            </h4>
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="card__footer__price group group--nowrap group--bottom group--between pb-layout pb-0.25:md mb-layout mb-0.25:md"
                                                                    >
                                                                        <div
                                                                            class="group group--small group--middle"
                                                                        ></div>
                                                                        <div
                                                                            class="text-c2 text-color-small leading-trim"
                                                                        >
                                                                            <div class="blog-statistics">
                                                                                <!-- Views -->
                                                                                <span class="blog-stat" title="Views">
                                                                                    👁️
                                                                                    <span class="stat-count">125</span>
                                                                                </span>

                                                                                <!-- Likes -->
                                                                                <span class="blog-stat" title="Likes">
                                                                                    ❤️
                                                                                    <span class="stat-count">48</span>
                                                                                </span>

                                                                                <!-- Comments -->
                                                                                <span
                                                                                    class="blog-stat"
                                                                                    title="Comments"
                                                                                >
                                                                                    💬
                                                                                    <span class="stat-count">12</span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="group group--nowrap group--bottom group--between"
                                                                        style="display: block"
                                                                    >
                                                                        <p style="z-index: 10">
                                                                            The real estate market is constantly
                                                                            evolving. Learn about changing buyer
                                                                            preferences, new developments, technology,
                                                                            sustainable housing and emerging property
                                                                            trends.
                                                                        </p>
                                                                        <p style="color: #62aaf7">Read More..</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                     <li>
                                                        <a
                                                            href="flat/54.html"
                                                            class="card card--apartment blog"
                                                            data-ajax-page-ignore-prefetch
                                                        >
                                                            <div class="card__sizer blogg"></div>
                                                            <div class="card__content">
                                                                <div
                                                                    class="card__top group group--nowrap group--between"
                                                                >
                                                                    <h5 class="card__title h5 leading-trim">
                                                                        <span class="card__title__text">
                                                                            Real Estate Trends Every Homebuyer Should
                                                                            Know
                                                                        </span>
                                                                    </h5>
                                                                </div>

                                                                <div class="card__plan blog">
                                                                    <picture class="svg-fix" draggable="false">
                                                                        <img
                                                                            class="blog"
                                                                            src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?w=1200"
                                                                            alt=""
                                                                        />
                                                                    </picture>
                                                                </div>

                                                                <div class="card__footer">
                                                                    <div>
                                                                        <div class="text-small leading-trim">
                                                                            <h4
                                                                                class="card__square"
                                                                                style="float: left"
                                                                            >
                                                                                <span class="card__title__text">
                                                                                    Catigory Name
                                                                                </span>
                                                                            </h4>
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="card__footer__price group group--nowrap group--bottom group--between pb-layout pb-0.25:md mb-layout mb-0.25:md"
                                                                    >
                                                                        <div
                                                                            class="group group--small group--middle"
                                                                        ></div>
                                                                        <div
                                                                            class="text-c2 text-color-small leading-trim"
                                                                        >
                                                                            <div class="blog-statistics">
                                                                                <!-- Views -->
                                                                                <span class="blog-stat" title="Views">
                                                                                    👁️
                                                                                    <span class="stat-count">125</span>
                                                                                </span>

                                                                                <!-- Likes -->
                                                                                <span class="blog-stat" title="Likes">
                                                                                    ❤️
                                                                                    <span class="stat-count">48</span>
                                                                                </span>

                                                                                <!-- Comments -->
                                                                                <span
                                                                                    class="blog-stat"
                                                                                    title="Comments"
                                                                                >
                                                                                    💬
                                                                                    <span class="stat-count">12</span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="group group--nowrap group--bottom group--between"
                                                                        style="display: block"
                                                                    >
                                                                        <p style="z-index: 10">
                                                                            The real estate market is constantly
                                                                            evolving. Learn about changing buyer
                                                                            preferences, new developments, technology,
                                                                            sustainable housing and emerging property
                                                                            trends.
                                                                        </p>
                                                                        <p style="color: #62aaf7">Read More..</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                     <li>
                                                        <a
                                                            href="flat/54.html"
                                                            class="card card--apartment blog"
                                                            data-ajax-page-ignore-prefetch
                                                        >
                                                            <div class="card__sizer blogg"></div>
                                                            <div class="card__content">
                                                                <div
                                                                    class="card__top group group--nowrap group--between"
                                                                >
                                                                    <h5 class="card__title h5 leading-trim">
                                                                        <span class="card__title__text">
                                                                            Real Estate Trends Every Homebuyer Should
                                                                            Know
                                                                        </span>
                                                                    </h5>
                                                                </div>

                                                                <div class="card__plan blog">
                                                                    <picture class="svg-fix" draggable="false">
                                                                        <img
                                                                            class="blog"
                                                                            src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?w=1200"
                                                                            alt=""
                                                                        />
                                                                    </picture>
                                                                </div>

                                                                <div class="card__footer">
                                                                    <div>
                                                                        <div class="text-small leading-trim">
                                                                            <h4
                                                                                class="card__square"
                                                                                style="float: left"
                                                                            >
                                                                                <span class="card__title__text">
                                                                                    Catigory Name
                                                                                </span>
                                                                            </h4>
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="card__footer__price group group--nowrap group--bottom group--between pb-layout pb-0.25:md mb-layout mb-0.25:md"
                                                                    >
                                                                        <div
                                                                            class="group group--small group--middle"
                                                                        ></div>
                                                                        <div
                                                                            class="text-c2 text-color-small leading-trim"
                                                                        >
                                                                            <div class="blog-statistics">
                                                                                <!-- Views -->
                                                                                <span class="blog-stat" title="Views">
                                                                                    👁️
                                                                                    <span class="stat-count">125</span>
                                                                                </span>

                                                                                <!-- Likes -->
                                                                                <span class="blog-stat" title="Likes">
                                                                                    ❤️
                                                                                    <span class="stat-count">48</span>
                                                                                </span>

                                                                                <!-- Comments -->
                                                                                <span
                                                                                    class="blog-stat"
                                                                                    title="Comments"
                                                                                >
                                                                                    💬
                                                                                    <span class="stat-count">12</span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="group group--nowrap group--bottom group--between"
                                                                        style="display: block"
                                                                    >
                                                                        <p style="z-index: 10">
                                                                            The real estate market is constantly
                                                                            evolving. Learn about changing buyer
                                                                            preferences, new developments, technology,
                                                                            sustainable housing and emerging property
                                                                            trends.
                                                                        </p>
                                                                        <p style="color: #62aaf7">Read More..</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                     <li>
                                                        <a
                                                            href="flat/54.html"
                                                            class="card card--apartment blog"
                                                            data-ajax-page-ignore-prefetch
                                                        >
                                                            <div class="card__sizer blogg"></div>
                                                            <div class="card__content">
                                                                <div
                                                                    class="card__top group group--nowrap group--between"
                                                                >
                                                                    <h5 class="card__title h5 leading-trim">
                                                                        <span class="card__title__text">
                                                                            Real Estate Trends Every Homebuyer Should
                                                                            Know
                                                                        </span>
                                                                    </h5>
                                                                </div>

                                                                <div class="card__plan blog">
                                                                    <picture class="svg-fix" draggable="false">
                                                                        <img
                                                                            class="blog"
                                                                            src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?w=1200"
                                                                            alt=""
                                                                        />
                                                                    </picture>
                                                                </div>

                                                                <div class="card__footer">
                                                                    <div>
                                                                        <div class="text-small leading-trim">
                                                                            <h4
                                                                                class="card__square"
                                                                                style="float: left"
                                                                            >
                                                                                <span class="card__title__text">
                                                                                    Catigory Name
                                                                                </span>
                                                                            </h4>
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="card__footer__price group group--nowrap group--bottom group--between pb-layout pb-0.25:md mb-layout mb-0.25:md"
                                                                    >
                                                                        <div
                                                                            class="group group--small group--middle"
                                                                        ></div>
                                                                        <div
                                                                            class="text-c2 text-color-small leading-trim"
                                                                        >
                                                                            <div class="blog-statistics">
                                                                                <!-- Views -->
                                                                                <span class="blog-stat" title="Views">
                                                                                    👁️
                                                                                    <span class="stat-count">125</span>
                                                                                </span>

                                                                                <!-- Likes -->
                                                                                <span class="blog-stat" title="Likes">
                                                                                    ❤️
                                                                                    <span class="stat-count">48</span>
                                                                                </span>

                                                                                <!-- Comments -->
                                                                                <span
                                                                                    class="blog-stat"
                                                                                    title="Comments"
                                                                                >
                                                                                    💬
                                                                                    <span class="stat-count">12</span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="group group--nowrap group--bottom group--between"
                                                                        style="display: block"
                                                                    >
                                                                        <p style="z-index: 10">
                                                                            The real estate market is constantly
                                                                            evolving. Learn about changing buyer
                                                                            preferences, new developments, technology,
                                                                            sustainable housing and emerging property
                                                                            trends.
                                                                        </p>
                                                                        <p style="color: #62aaf7">Read More..</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                     <li>
                                                        <a
                                                            href="flat/54.html"
                                                            class="card card--apartment blog"
                                                            data-ajax-page-ignore-prefetch
                                                        >
                                                            <div class="card__sizer blogg"></div>
                                                            <div class="card__content">
                                                                <div
                                                                    class="card__top group group--nowrap group--between"
                                                                >
                                                                    <h5 class="card__title h5 leading-trim">
                                                                        <span class="card__title__text">
                                                                            Real Estate Trends Every Homebuyer Should
                                                                            Know
                                                                        </span>
                                                                    </h5>
                                                                </div>

                                                                <div class="card__plan blog">
                                                                    <picture class="svg-fix" draggable="false">
                                                                        <img
                                                                            class="blog"
                                                                            src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?w=1200"
                                                                            alt=""
                                                                        />
                                                                    </picture>
                                                                </div>

                                                                <div class="card__footer">
                                                                    <div>
                                                                        <div class="text-small leading-trim">
                                                                            <h4
                                                                                class="card__square"
                                                                                style="float: left"
                                                                            >
                                                                                <span class="card__title__text">
                                                                                    Catigory Name
                                                                                </span>
                                                                            </h4>
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="card__footer__price group group--nowrap group--bottom group--between pb-layout pb-0.25:md mb-layout mb-0.25:md"
                                                                    >
                                                                        <div
                                                                            class="group group--small group--middle"
                                                                        ></div>
                                                                        <div
                                                                            class="text-c2 text-color-small leading-trim"
                                                                        >
                                                                            <div class="blog-statistics">
                                                                                <!-- Views -->
                                                                                <span class="blog-stat" title="Views">
                                                                                    👁️
                                                                                    <span class="stat-count">125</span>
                                                                                </span>

                                                                                <!-- Likes -->
                                                                                <span class="blog-stat" title="Likes">
                                                                                    ❤️
                                                                                    <span class="stat-count">48</span>
                                                                                </span>

                                                                                <!-- Comments -->
                                                                                <span
                                                                                    class="blog-stat"
                                                                                    title="Comments"
                                                                                >
                                                                                    💬
                                                                                    <span class="stat-count">12</span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="group group--nowrap group--bottom group--between"
                                                                        style="display: block"
                                                                    >
                                                                        <p style="z-index: 10">
                                                                            The real estate market is constantly
                                                                            evolving. Learn about changing buyer
                                                                            preferences, new developments, technology,
                                                                            sustainable housing and emerging property
                                                                            trends.
                                                                        </p>
                                                                        <p style="color: #62aaf7">Read More..</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                   
                                                  
                                                </ul>
                                            </div>
                                            <div
                                                class="col col--xs-4 col--lg-12 text-center mt-0.5:lg pb-1 pb-0:lg px-layout pl-0:lg"
                                                data-themed-class="ui-dark"
                                            >
                                                <a class="btn btn--outline btn--sm" tabindex="0" role="button">
                                                    <span class="btn__content"
                                                        ><span class="btn__text">show more</span></span
                                                    >
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </main>
                    <?php $this->load->view("common/footer"); ?>
                </div>
                <div class="js-modal">
                    <?php $this->load->view("common/modal/callback"); ?> <?php
                    $this->load->view("common/modal/favorite"); ?> <?php $this->load->view("common/modal/subscribe"); ?>
                    <?php $this->load->view("common/modal/subscribe_penthouse"); ?> <?php
                    $this->load->view("common/modal/subscribe_townhouse"); ?> <?php
                    $this->load->view("common/modal/favorite_email"); ?> <?php $this->load->view("common/modal/menu");
                    ?> <?php $this->load->view("common/modal/menu_picker"); ?>
                </div>
            </div>
        </div>
        <?php $this->load->view("common/cookies"); ?>

        <script fetchpriority="low" async src="assets/javascripts/browser-message/browser-message.js"></script>

        <script fetchpriority="low" src="assets/javascripts/shared.js"></script>

        <script>
            var LOCALES = {
                errors: {
                    email: "Please enter a valid email address",
                    required: "This field is required",
                    tel: "Please enter a valid phone number",
                    minlength: "Please enter at least {0} characters",

                    generic: "Connection error, please try again",
                    genericCode: "Error occurred, please try again",

                    // Passwords don't match
                    equalTo: "Passwords don't match",
                },
            };
        </script>

        <script fetchpriority="low" src="assets/javascripts/flats.js"></script>
    </body>
</html>
