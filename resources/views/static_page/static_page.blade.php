@extends('layouts.app')
@section('title', 'static_page')
<h1>Sample App</h1>
<p>
    This is the home page for the
    <a href="http://www.railstutorial.org/">Ruby on Rails Tutorial</a>
    sample application.
<div class="container" style="margin-top:60px">
    <?php
    echo $app::VERSION;
    ?>
    <div class="row">
        <a type="button" class="btn  btn-primary btn-flat"
           href="<?php echo route('user.index') ?>">getlist</a>
    </div>
    <hr>
</div>
</p>
