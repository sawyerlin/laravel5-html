<?php namespace Huge\Laravel5Html;

use Illuminate\Routing\UrlGenerator;
use Illuminate\Html\HtmlBuilder;

class Laravel5HtmlBuilder extends HtmlBuilder {

  public function __construct(UrlGenerator $url = null) {
    parent::__construct($url);
  }

  public function breadcrumb(array $crumbs = array(), $seperator = '>', $seperatorClass, array $buttons = array()) {



  }

}
