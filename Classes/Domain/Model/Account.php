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
 * A Account
 *
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 * @scope prototype
 * @entity
 */
class Account extends \F3\Party\Domain\Model\Party {

	/**
	 * Firstname
	 *
	 * @var string
	 */
	protected $firstName;

	/**
	 * Lastname
	 *
	 * @var string
	 */
	protected $lastName;

	/**
	 * Projects
	 *
	 * @var \SplObjectStorage<\F3\ArticleWorkflow\Domain\Model\Project>
	 */
	protected $projects;

	/**
	 * Constsructor
	 */
	public function __construct() {
		$this->projects = new \SplObjectStorage();
	}

	/**
	 * Getter for firstName
	 * @return string
	 */
	public function getFirstName() {
		return $this->firstName;
	}

	/**
	 * Setter for firstName
	 * @param string $firstName
	 */
	public function setFirstName($firstName) {
		$this->firstName = $firstName;
	}

	/**
	 * Getter for lastName
	 * @return string
	 */
	public function getLastName() {
		return $this->lastName;
	}

	/**
	 * Setter for lastName
	 * @param string $lastName
	 */
	public function setLastName($lastName) {
		$this->lastName = $lastName;
	}

	/**
	 * Getter for projects
	 * @return SplObjectStorage
	 */
	public function getProjects() {
		return $this->projects;
	}

	/**
	 * Add project
	 * @param F3\ArticleWorkflow\Domain\Model\Project $project
	 * @return F3\ArticleWorkflow\Domain\Model\Project
	 */
	public function addProjects(\F3\ArticleWorkflow\Domain\Model\Project $project) {
		$this->projects->attach($project);
	}

	/**
	 * Remove project
	 * @param F3\ArticleWorkflow\Domain\Model\Project $project
	 * @return void
	 */
	public function removeProject(\F3\ArticleWorkflow\Domain\Model\Project $project) {
		$this->projects->detach($project);
	}




}
?>