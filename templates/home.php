<?php

/**
 * Template Name: Home
 */
/**
 * Text
 */
$text = get_field('text', 'option');
$text_area = get_field('text-area', 'option');
$number = get_field('number', 'option');
$range = get_field('range', 'option');
$email = get_field('email', 'option');
$url = get_field('url', 'option');
$password = get_field('password', 'option');
/**
 * Content
 */
$imagen = get_field('imagen', 'option');
$file = get_field('file', 'option');
$wysiwyg = get_field('wysiwyg', 'option');
$oembed = get_field('oembed', 'option');
$gallery = get_field('gallery', 'option');
/**
 * Choise
 */
/**
 * Relational
 */
/**
 * Jquery
 */
/**
 * Layout
 */
?>

<div class="container">
    <div class="row">
        <div class="col text-center">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <!-- Texto -->
                    <a class="nav-item nav-link active" id="nav-text-tab" data-toggle="tab" href="#nav-text" role="tab" aria-controls="nav-text" aria-selected="true">Text</a>
                    <a class="nav-item nav-link" id="nav-content-tab" data-toggle="tab" href="#nav-content" role="tab" aria-controls="nav-content" aria-selected="false">Content</a>
                    <a class="nav-item nav-link" id="nav-choise-tab" data-toggle="tab" href="#nav-choise" role="tab" aria-controls="nav-choise" aria-selected="false">Choise</a>
                    <a class="nav-item nav-link" id="nav-relational-tab" data-toggle="tab" href="#nav-relational" role="tab" aria-controls="nav-relational" aria-selected="false">Relational</a>
                    <a class="nav-item nav-link" id="nav-jquery-tab" data-toggle="tab" href="#nav-jquery" role="tab" aria-controls="nav-jquery" aria-selected="false">Jquery</a>
                    <a class="nav-item nav-link" id="nav-layout-tab" data-toggle="tab" href="#nav-layout" role="tab" aria-controls="nav-layout" aria-selected="false">Layout</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-text" role="tabpanel" aria-labelledby="nav-text-tab">
                    <h1 class=""><?= $text; ?></h1>
                    <h1 class=""><?= $text_area; ?></h1>
                    <h1 class=""><?= $number; ?></h1>
                    <h1 class=""><?= $range; ?></h1>
                    <h1 class=""><?= $email; ?></h1>
                    <h1 class=""><?= $url; ?></h1>
                    <h1 class=""><?= $password; ?></h1>
                </div>
                <div class="tab-pane fade" id="nav-content" role="tabpanel" aria-labelledby="nav-content-tab">
                    <img src=" <?= $imagen ?> " alt="">
                </div>
                <div class="tab-pane fade" id="nav-choise" role="tabpanel" aria-labelledby="nav-choise-tab">Choise</div>
                <div class="tab-pane fade" id="nav-relational" role="tabpanel" aria-labelledby="nav-relational-tab">Relational</div>
                <div class="tab-pane fade" id="nav-jquery" role="tabpanel" aria-labelledby="nav-jquery-tab">Jquery</div>
                <div class="tab-pane fade" id="nav-layout" role="tabpanel" aria-labelledby="nav-layout-tab">Layout</div>
            </div>
        </div>
    </div>
    <!-- <div class="row">
        <div class="col text-center">
            <h1>Deeply</h1>
            <h2>Deeply</h2>
            <h3>Deeply</h3>
            <h4>Deeply</h4>
            <h5>Deeply</h5>
            <h6>Deeply</h6>
        </div>
    </div> -->
</div>