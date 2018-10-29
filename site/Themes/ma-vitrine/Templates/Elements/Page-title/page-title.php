<?php
use II\Utilities\Configure;


// Page title
echo '
<section id="page-title"';
    if(isset($PageTitleImg) && $PageTitleImg != '') {
        echo ' data-parallax-image="' . $PageTitleImg . '"';
    }

    echo ' class="';
    if(isset($PageTitleClassesSection) && $PageTitleClassesSection != '') {
        echo ' ' . $PageTitleClassesSection . ' ';
    }
    if(isset($PageTitleScroller) && $PageTitleScroller === true) {
        echo ' scroller ';
    }
    echo '" ';

    echo ' style="';
    if(isset($PageTitleBgColor) && $PageTitleBgColor != '') {
        echo ' background-color:' . $PageTitleBgColor . '; ';
    }
    if(isset($PageTitlePattern) && $PageTitlePattern != '') {
        echo ' background:url(' . $PageTitlePattern . '); ';
    }
    echo '" ';
    
    if(isset($PageTitleVideo) && $PageTitleVideo != '') {
        echo 'data-vide-bg="' . $PageTitleVideo . '" data-vide-options="position: 0% 50%"';
    }
    
echo '>';

if(isset($PageTitleImg) && $PageTitleImg != '') {

    echo '<div class="parallax-container"';
        if(isset($PageTitleImgSpeedParallax) && $PageTitleImgSpeedParallax != '') {
            echo ' data-velocity="' . $PageTitleImgSpeedParallax . '"';
        }
        if(isset($PageTitleImg) && $PageTitleImg != '') {
            echo ' style="background: url(' . $PageTitleImg . ')"';
        }
        echo '>
        </div>';
    }
    if(isset($PageTitleVideo) && $PageTitleVideo != '') {
        // echo '
        // <div style="position: absolute; z-index: -1; top: 0px; left: 0px; bottom: 0px; right: 0px; overflow: hidden; background-size: cover; background-color: transparent; background-repeat: no-repeat; background-position: 0% 50%; background-image: none;">
        //     <video autoplay="" loop="" muted="" style="margin: auto; position: absolute; z-index: -1; top: 50%; left: 0%; transform: translate(0%, -50%); visibility: visible; opacity: 1; width: 100%; height: auto;"><source src="' . $PageTitleVideo . '.mp4" type="video/mp4"><source src="' . $PageTitleVideo . '.webm" type="video/webm"><source src="' . $PageTitleVideo . '.ogv" type="video/ogg"></video>
        // </div>';
        // echo '
        // <div style="position: absolute; z-index: -1; top: 0px; left: 0px; bottom: 0px; right: 0px; overflow: hidden; background-size: cover; background-color: transparent; background-repeat: no-repeat; background-position: 0% 50%; background-image: none;">
        //     <video autoplay="" loop="" muted="" style="margin: auto; position: absolute; z-index: -1; top: 50%; left: 0%; transform: translate(0%, -50%); visibility: visible; opacity: 1; width: 1440px; height: auto;"><source src="' . $PageTitleVideo . '.mp4" type="video/mp4"><source src="' . $PageTitleVideo . '.webm" type="video/webm"><source src="' . $PageTitleVideo . '.ogv" type="video/ogg"></video>
        // </div>';
    }
    



    echo '<div class="container">';    
        // Breadcrumb
        if ($PageTitleBreadcrumb === true) {
            echo $this->element('breadcrumb.php', ['PageTitleH1' => $PageTitleH1]);
        }
        else {
            if(Configure::read('Activate.Breadcrumb') === true && $PageTitleBreadcrumb !== false) {
                echo $this->element('breadcrumb.php');
            }
        }

        // Page title & Sub title
        echo '<div class="page-title">
            <h1';
            if(isset($PageTitleH1Classes) && $PageTitleH1Classes != '') {
                echo ' class="' . $PageTitleH1Classes . '"';
            }
            echo '>' . $PageTitleH1 . '</h1>
            <span>' . $PageTitleSubTitle . '</span>
        </div>

    </div>';

    if(isset($PageTitleScroller) && $PageTitleScroller === true) {
        echo '<div class="container">
            <div class="scroller';
            if(isset($PageTitleScrollerClasses) && $PageTitleScrollerClasses != '') {
                echo ' ' . $PageTitleScrollerClasses . ' ';
            }
            echo '">';

            if(isset($PageTitleScrollerLink) && $PageTitleScrollerLink != '') {
                echo '<a href="' . $PageTitleScrollerLink . '" class="rev-scroll-btn scroll-to" style="border-style: solid; border-width: 1px;">
                    <span></span>
                </a>';
            }
            
            echo '</div>
        </div>';
    }
echo '</section>';
// end: Page title