<?php defined('safe_access') or die('Restricted access!'); ?>

<div id="page_content">
    <div id="page_content_inner">

        <h3 class="heading_b uk-margin-bottom">Switcher</h3>

        <div class="md-card">
            <div class="md-card-content">
                <div class="uk-grid uk-grid-divider" data-uk-grid-margin>
                    <div class="uk-width-medium-1-4">
                        <h5 class="heading_c uk-margin-bottom">Fade</h5>
                        <ul class="uk-subnav uk-subnav-pill" data-uk-switcher="{connect:'#switcher-content-a-fade', animation: 'fade'}">
                            <li class="uk-active"><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                        </ul>
                        <ul id="switcher-content-a-fade" class="uk-switcher uk-margin">
                            <li>Hello!</li>
                            <li>Hello again!</li>
                            <li>Bazinga!</li>
                        </ul>
                    </div>
                    <div class="uk-width-medium-1-4">
                        <h5 class="heading_c uk-margin-bottom">Scale</h5>
                        <ul class="uk-subnav uk-subnav-pill" data-uk-switcher="{connect:'#switcher-content-a-scale', animation: 'scale'}">
                            <li class="uk-active"><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                        </ul>

                        <ul id="switcher-content-a-scale" class="uk-switcher uk-margin">
                            <li>Hello!</li>
                            <li>Hello again!</li>
                            <li>Bazinga!</li>
                        </ul>
                    </div>
                    <div class="uk-width-medium-1-4">
                        <h5 class="heading_c uk-margin-bottom">Slide top</h5>
                        <ul class="uk-subnav uk-subnav-pill" data-uk-switcher="{connect:'#switcher-content-a-slide-top', animation: 'slide-top'}">
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                            <li class="uk-active"><a href="#">Item</a></li>
                        </ul>
                        <ul id="switcher-content-a-slide-top" class="uk-switcher uk-margin">
                            <li>Hello!</li>
                            <li>Hello again!</li>
                            <li>Bazinga!</li>
                        </ul>
                    </div>
                    <div class="uk-width-medium-1-4">
                        <h5 class="heading_c uk-margin-bottom">Slide bottom</h5>
                        <ul class="uk-subnav uk-subnav-pill" data-uk-switcher="{connect:'#switcher-content-a-slide-bottom', animation: 'slide-bottom'}">
                            <li class="uk-active"><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                        </ul>
                        <ul id="switcher-content-a-slide-bottom" class="uk-switcher uk-margin">
                            <li>Hello!</li>
                            <li>Hello again!</li>
                            <li>Bazinga!</li>
                        </ul>
                    </div>
                </div>
                <hr class="uk-grid-divider">
                <div class="uk-grid uk-grid-divider" data-uk-grid-margin>
                    <div class="uk-width-medium-1-4">
                        <h5 class="heading_c uk-margin-bottom">Slide left</h5>
                        <ul class="uk-subnav uk-subnav-pill" data-uk-switcher="{connect:'#switcher-content-a-slide-left', animation: 'slide-left'}">
                            <li class="uk-active"><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                        </ul>
                        <ul id="switcher-content-a-slide-left" class="uk-switcher uk-margin">
                            <li>Hello!</li>
                            <li>Hello again!</li>
                            <li>Bazinga!</li>
                        </ul>
                    </div>
                    <div class="uk-width-medium-1-4">
                        <h5 class="heading_c uk-margin-bottom">Slide right</h5>
                        <ul class="uk-subnav uk-subnav-pill" data-uk-switcher="{connect:'#switcher-content-a-slide-right', animation: 'slide-right'}">
                            <li class="uk-active"><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                        </ul>
                        <ul id="switcher-content-a-slide-right" class="uk-switcher uk-margin">
                            <li>Hello!</li>
                            <li>Hello again!</li>
                            <li>Bazinga!</li>
                        </ul>
                    </div>
                    <div class="uk-width-medium-1-4">
                        <h5 class="heading_c uk-margin-bottom">Slide horizontal</h5>
                        <ul class="uk-subnav uk-subnav-pill" data-uk-switcher="{connect:'#switcher-content-a-slide-horizontal', animation: 'slide-horizontal'}">
                            <li class="uk-active"><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                        </ul>
                        <ul id="switcher-content-a-slide-horizontal" class="uk-switcher uk-margin">
                            <li>Hello!</li>
                            <li>Hello again!</li>
                            <li>Bazinga!</li>
                        </ul>
                    </div>
                    <div class="uk-width-medium-1-4">
                        <h5 class="heading_c uk-margin-bottom">Slide vertical</h5>
                        <ul class="uk-subnav uk-subnav-pill" data-uk-switcher="{connect:'#switcher-content-a-slide-vertical', animation: 'slide-vertical'}">
                            <li class="uk-active"><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                        </ul>
                        <ul id="switcher-content-a-slide-vertical" class="uk-switcher uk-margin">
                            <li>Hello!</li>
                            <li>Hello again!</li>
                            <li>Bazinga!</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="md-card">
            <div class="md-card-content">
                <ul class="uk-subnav uk-subnav-pill uk-margin-bottom" data-uk-switcher="{connect:'#switch-multiple-1, #switch-multiple-2, #switch-multiple-3', animation: 'slide-top'}">
                    <li class="uk-active"><a href="#">Item 1</a></li>
                    <li><a href="#">Item 2</a></li>
                    <li><a href="#">Item 3</a></li>
                </ul>
                <div class="uk-grid uk-grid-width-medium-1-3" data-uk-margin>
                    <div>
                        <h5 class="heading_c uk-margin-small-bottom">Container 1</h5>
                        <ul id="switch-multiple-1" class="uk-switcher">
                            <li class="uk-active">Hello from container 1!</li>
                            <li>Hello again from container 1!</li>
                            <li>Bazinga from container 1!</li>
                        </ul>
                    </div>
                    <div>
                        <h5 class="heading_c uk-margin-small-bottom">Container 2</h5>
                        <ul id="switch-multiple-2" class="uk-switcher">
                            <li class="uk-active">Hello from container 2!</li>
                            <li>Hello again from container 2!</li>
                            <li>Bazinga from container 2!</li>
                        </ul>
                    </div>
                    <div>
                        <h5 class="heading_c uk-margin-small-bottom">Container 3</h5>
                        <ul id="switch-multiple-3" class="uk-switcher">
                            <li class="uk-active">Hello from container3!</li>
                            <li>Hello again from container 3!</li>
                            <li>Bazinga from container 3!</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>