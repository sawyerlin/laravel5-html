<?php namespace Huge\Laravel5Html;

use Illuminate\Routing\UrlGenerator;
use Illuminate\Html\FormBuilder;
use Illuminate\Html\HtmlBuilder;

class Laravel5FormBuilder extends FormBuilder {

  function __construct(HtmlBuilder $html, UrlGenerator $url, $csrfToken) {
    parent::__construct($html, $url, $csrfToken);
  }

  /**
	 * Create a checkbox input field for using bootstrap.
	 *
	 * @param  string  $name
	 * @param  mixed   $value
	 * @param  bool    $checked
	 * @param  array   $options
	 * @return string
	 */
	public function checkboxbs($name, $text, $value = 1, $checked = null, $options = array())
	{
    return $this->checkablebs('checkbox', $text, $name, $value, $checked, $options);
	}

  /**
	 * Create a checkable input field for using bootstrap.
	 *
	 * @param  string  $type
	 * @param  string  $name
	 * @param  mixed   $value
	 * @param  bool    $checked
	 * @param  array   $options
   * @param  bool    $out
	 * @return string
	 */
	protected function checkablebs($type, $text, $name, $value, $checked, $options)
	{
		$checked = $this->getCheckedState($type, $name, $value, $checked);

		if ($checked) $options['checked'] = 'checked';

		return $this->inputbs($type, $text, $name, $value, $options);
	}

  /**
	 * Create a form input field for using bootstrap.
	 *
	 * @param  string  $type
	 * @param  string  $name
	 * @param  string  $value
	 * @param  array   $options
   * @param  bool    $out
	 * @return string
	 */
	public function inputbs($type, $text, $name, $value = null, $options = array())
	{
		return $this->input($type, $name, $value, $options).$text.'</input>';
	}

}
