<?php

// ToDo: Refactoring of code for children append

if (! function_exists('link_to_route_with_children'))
{
  function link_to_route_with_children($name, $title = null, $parameters = array(), $attributes = array(), $children) {

    $link = app('laravel5-html.html')->linkRoute($name, $title, $parameters, $attributes);

    $replace = $title.'</a>';

    $link = str_replace($replace, '', $link);

    return $link.$children.$replace;
  }
}

if (! function_exists('link_to_toggle_with_children'))
{
  function link_to_toggle_with_children($id, $title = null, $attributes = array(), $children) {

    $link = app('laravel5-html.html')->linkToggle($id, $title, $attributes);

    $replace = $title.'</a>';

    $link = str_replace($replace, '', $link);

    return $link.$children.$replace;
  }
}
