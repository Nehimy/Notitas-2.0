<?php

use Libs\Router;

Router::get("/new", "Controllers\Notita::form" );
Router::post("/new", "Controllers\Notita::add"); //nueva nota
Router::get("/note/{id}", "Controllers\Notita::view");
Router::get("/all", "Controllers\Notita::all");

Router::get("/note/{id}/remove", "Controllers\Notita::delete");
Router::get("/note/{id}/edit", "Controllers\Notita::editing");
Router::post("/note/{id}/update", "Controllers\Notita::update");
