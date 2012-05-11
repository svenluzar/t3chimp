<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Mato Ilic <info@matoilic.ch>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *  A copy is found in the textfile GPL.txt and important notices to the license
 *  from the author is found in LICENSE.txt distributed with these scripts.
 *
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

class Tx_T3chimp_ViewHelpers_Form_SelectViewHelper extends Tx_T3chimp_ViewHelpers_Form_AbstractFormFieldViewHelper {

	/**
	 * @var string
	 */
	protected $tagName = 'select';

	/**
	 * @var mixed the selected value
	 */
	protected $selectedValue = NULL;

	/**
	 * Initialize arguments.
	 *
	 * @return void
	 * @author Sebastian Kurfürst <sebastian@typo3.org>
	 * @api
	 */
	public function initializeArguments() {
		parent::initializeArguments();
		$this->registerUniversalTagAttributes();
		$this->registerTagAttribute('multiple', 'string', 'if set, multiple select field');
		$this->registerTagAttribute('size', 'string', 'Size of input field');
		$this->registerTagAttribute('disabled', 'string', 'Specifies that the input element should be disabled when the page loads');
		$this->registerArgument('options', 'array', 'Associative array with internal IDs as key, and the values are displayed in the select box', TRUE);
		$this->registerArgument('optionValueField', 'string', 'If specified, will call the appropriate getter on each object to determine the value.');
		$this->registerArgument('optionLabelField', 'string', 'If specified, will call the appropriate getter on each object to determine the label.');
		$this->registerArgument('sortByOptionLabel', 'boolean', 'If true, List will be sorted by label.', FALSE, FALSE);
		$this->registerArgument('selectAllByDefault', 'boolean', 'If specified options are selected if none was set before.', FALSE, FALSE);
		$this->registerArgument('errorClass', 'string', 'CSS class to set if there are errors for this view helper', FALSE, 'f3-form-error');
	}

	/**
	 * Render the tag.
	 *
	 * @return string rendered tag.
	 * @author Sebastian Kurfürst <sebastian@typo3.org>
	 * @author Bastian Waidelich <bastian@typo3.org>
	 * @api
	 */
	public function render() {
		$name = $this->getName();
		if ($this->arguments->hasArgument('multiple')) {
			$name .= '[]';
		}

		$this->tag->addAttribute('name', $name);

		$options = $this->getOptions();
		if (empty($options)) {
			$options = array('' => '');
		}
		$this->tag->setContent($this->renderOptionTags($options));

		$this->setErrorClassAttribute();

		$content = '';

			// register field name for token generation.
			// in case it is a multi-select, we need to register the field name
			// as often as there are elements in the box
		if ($this->arguments->hasArgument('multiple') && $this->arguments['multiple'] !== '') {
			$content .= $this->renderHiddenFieldForEmptyValue();
			for ($i=0; $i<count($options); $i++) {
				$this->registerFieldNameForFormTokenGeneration($name);
			}
		} else {
			$this->registerFieldNameForFormTokenGeneration($name);
		}

		$content .= $this->tag->render();
		return $content;
	}

	/**
	 * Render the option tags.
	 *
	 * @param array $options the options for the form.
	 * @return string rendered tags.
	 * @author Bastian Waidelich <bastian@typo3.org>
	 */
	protected function renderOptionTags($options) {
		$output = '';

		foreach ($options as $value => $label) {
			$isSelected = $this->isSelected($value);
			$output.= $this->renderOptionTag($value, $label, $isSelected) . chr(10);
		}
		return $output;
	}

	/**
	 * Render the option tags.
	 *
	 * @return array an associative array of options, key will be the value of the option tag
	 * @author Bastian Waidelich <bastian@typo3.org>
	 * @author Karsten Dambekalns <karsten@typo3.org>
	 */
	protected function getOptions() {
		if (!is_array($this->arguments['options']) && !($this->arguments['options'] instanceof Traversable)) {
			return array();
		}
		$options = array();
		$optionsArgument = $this->arguments['options'];
		foreach ($optionsArgument as $key => $value) {
			if (is_object($value)) {

				if ($this->arguments->hasArgument('optionValueField')) {
					$key = Tx_Extbase_Reflection_ObjectAccess::getProperty($value, $this->arguments['optionValueField']);
					if (is_object($key)) {
						if (method_exists($key, '__toString')) {
							$key = (string)$key;
						} else {
							throw new Tx_Fluid_Core_ViewHelper_Exception('Identifying value for object of class "' . get_class($value) . '" was an object.' , 1247827428);
						}
					}
				} elseif ($this->persistenceManager->getBackend()->getIdentifierByObject($value) !== NULL) {
					$key = $this->persistenceManager->getBackend()->getIdentifierByObject($value);
				} elseif (method_exists($value, '__toString')) {
					$key = (string)$value;
				} else {
					throw new Tx_Fluid_Core_ViewHelper_Exception('No identifying value for object of class "' . get_class($value) . '" found.' , 1247826696);
				}

				if ($this->arguments->hasArgument('optionLabelField')) {
					$value = Tx_Extbase_Reflection_ObjectAccess::getProperty($value, $this->arguments['optionLabelField']);
					if (is_object($value)) {
						if (method_exists($value, '__toString')) {
							$value = (string)$value;
						} else {
							throw new Tx_Fluid_Core_ViewHelper_Exception('Label value for object of class "' . get_class($value) . '" was an object without a __toString() method.' , 1247827553);
						}
					}
				} elseif (method_exists($value, '__toString')) {
					$value = (string)$value;
				} elseif ($this->persistenceManager->getBackend()->getIdentifierByObject($value) !== NULL) {
					$value = $this->persistenceManager->getBackend()->getIdentifierByObject($value);
				}
			}
			$options[$key] = $value;
		}
		if ($this->arguments['sortByOptionLabel']) {
			asort($options);
		}
		return $options;
	}

	/**
	 * Render the option tags.
	 *
	 * @return boolean TRUE if the value should be marked a s selected; FALSE otherwise
	 * @author Bastian Waidelich <bastian@typo3.org>
	 * @author Jochen Rau <jochen.rau@typoplanet.de>
	 */
	protected function isSelected($value) {
		$selectedValue = $this->getSelectedValue();
		if ($value === $selectedValue || (string)$value === $selectedValue) {
			return TRUE;
		}
		if ($this->arguments->hasArgument('multiple')) {
			if (is_null($selectedValue) && $this->arguments['selectAllByDefault'] === TRUE) {
				return TRUE;
			} elseif (is_array($selectedValue) && in_array($value, $selectedValue)) {
				return TRUE;
			}
		}
		return FALSE;
	}

	/**
	 * Retrieves the selected value(s)
	 *
	 * @return mixed value string or an array of strings
	 * @author Bastian Waidelich <bastian@typo3.org>
	 */
	protected function getSelectedValue() {
		$value = $this->getValue();
		if (!$this->arguments->hasArgument('optionValueField')) {
			return $value;
		}
		if (!is_array($value) && !($value instanceof Iterator)) {
			if (is_object($value)) {
				return Tx_Extbase_Reflection_ObjectAccess::getProperty($value, $this->arguments['optionValueField']);
			} else {
				return $value;
			}
		}
		$selectedValues = array();
		foreach($value as $selectedValueElement) {
			if (is_object($selectedValueElement)) {
				$selectedValues[] = Tx_Extbase_Reflection_ObjectAccess::getProperty($selectedValueElement, $this->arguments['optionValueField']);
			} else {
				$selectedValues[] = $selectedValueElement;
			}
		}
		return $selectedValues;
	}

	/**
	 * Render one option tag
	 *
	 * @param string $value value attribute of the option tag (will be escaped)
	 * @param string $label content of the option tag (will be escaped)
	 * @param boolean $isSelected specifies wheter or not to add selected attribute
	 * @return string the rendered option tag
	 * @author Bastian Waidelich <bastian@typo3.org>
	 */
	protected function renderOptionTag($value, $label, $isSelected) {
		$output = '<option value="' . htmlspecialchars($value) . '"';
		if ($isSelected) {
			$output.= ' selected="selected"';
		}
		$output.= '>' . htmlspecialchars($label) . '</option>';

		return $output;
	}
}

?>