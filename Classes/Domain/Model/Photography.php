<?php
declare(ENCODING = 'utf-8');
namespace F3\ArticleWorkflow\Domain\Model;

/*                                                                        *
 * This script belongs to the FLOW3 package "ArticleWorkflow".            *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU General Public License as published by the Free   *
 * Software Foundation, either version 3 of the License, or (at your      *
 * option) any later version.                                             *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General      *
 * Public License for more details.                                       *
 *                                                                        *
 * You should have received a copy of the GNU General Public License      *
 * along with the script.                                                 *
 * If not, see http://www.gnu.org/licenses/gpl.html                       *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

/**
 * A Photography
 *
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 * @scope prototype
 * @entity
 */
class Photography {

	/**
	 * Photography url
	 *
	 * @var string
	 */
	protected $photographyHyperlink;

	/**
	 * Photography byline
	 *
	 * @var string
	 */
	protected $byline;

	/**
	 * Photography text
	 *
	 * @var string
	 */
	protected $photographyText;

	/**
	 * Getter for photographyHyperlink
	 *
	 * @return string
	 */
	public function getPhotographyHyperlink() {
		return $this->photographyHyperlink;
	}

	/**
	 * Setter for photographyHyperlink
	 *
	 * @param string $photographyHyperlink
	 * @return void
	 */
	public function setPhotographyHyperlink($photographyHyperlink) {
		$this->photographyHyperlink = $photographyHyperlink;
	}

	/**
	 * Getter for byline
	 *
	 * @return string
	 */
	public function getByline() {
		return $this->byline;
	}

	/**
	 * Setter for byline
	 *
	 * @param string $byline
	 * @return void
	 */
	public function setByline($byline) {
		$this->byline = $byline;
	}

	/**
	 * Getter for photographyText
	 *
	 * @return string
	 */
	public function getPhotographyText() {
		return $this->photographyText;
	}

	/**
	 * Setter for photographyText
	 *
	 * @param string $photographyText
	 * @return void
	 */
	public function setPhotographyText($photographyText) {
		$this->photographyText = $photographyText;
	}



}
?>