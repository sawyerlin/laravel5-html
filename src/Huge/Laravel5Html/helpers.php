<?php

if (! function_exists('link_to_route_with_children'))
{
  function link_to_route_with_children($name, $title = null, $parameters = array(), $attributes = array(), $children) {
    $link = app('laravel5-html.html')->linkRoute($name, $title, $parameters, $attributes);

    $replace = $title.'</a>';

    $link = str_replace($replace, '', $link);

    return $link.$children.$replace;
  }
}
