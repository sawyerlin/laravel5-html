<?php namespace Huge\Laravel5Html;

use Illuminate\Routing\UrlGenerator;
use Illuminate\Html\HtmlBuilder;
use View;

class Laravel5HtmlBuilder extends HtmlBuilder {

  public function __construct(UrlGenerator $url = null) {
    parent::__construct($url);
  }

  // ToDo: Move this function to Laravel5FormBuilder?
  public function breadcrumb(array $crumbs, $seperator, $seperatorClass, array $buttons) {

    $breadcrumb = View::make('laravel5-html::breadcrumb', compact('crumbs', 'seperator', 'seperatorClass', 'buttons'));

    return $breadcrumb;

  }

  // ToDo: to modal
  public function modal($id, $title, $template, $data) {

    $model = View::make('laravel5-html::modal', compact('id', 'title', 'template', 'data'));

    return $model;
  
  }

  public function linkToggle($id, $title = null, $attributes = array()) {

		if (is_null($title) || $title === false) $title = $id;

		return '<a href="#" data-toggle="modal" data-target="#modal-'.$id.'"'.$this->attributes($attributes).'>'.$this->entities($title).'</a>';

  }

}
