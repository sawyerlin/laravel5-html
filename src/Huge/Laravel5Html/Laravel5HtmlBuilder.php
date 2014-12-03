<?php namespace Huge\Laravel5Html;

use Illuminate\Routing\UrlGenerator;
use Illuminate\Html\HtmlBuilder;
use View;

class Laravel5HtmlBuilder extends HtmlBuilder {

  public function __construct(UrlGenerator $url = null) {
    parent::__construct($url);
  }

  public function breadcrumb(array $crumbs, $seperator, $seperatorClass, $buttons) {
    $breadcrumb = View::make('laravel5-html::breadcrumb', ['crumbs' => $crumbs, 'seperator' => '>', 'buttons' => $buttons]);
    return $breadcrumb;
  }
}
