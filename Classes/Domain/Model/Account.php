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
	 * @var string
	 */
	protected $firstName;

	/**
	 * @var string
	 */
	protected $lastName;

	/**
	 * @var string
	 */
	protected $electronicAddress;

	/**
	 * Active project
	 *
	 *@var \F3\ArticleWorkflow\Domain\Model\Project
	 */
	protected $activeProject;

	/**
	 * Projects
	 *
	 * @var \SplObjectStorage<\F3\ArticleWorkflow\Domain\Model\Project>
	 */
	protected $projects;

	/**
	 * User comment
	 *
	 * @var string
	 */
	protected $comment;

	/**
	 * Constsructor
	 */
	public function __construct() {
		$this->projects = new \SplObjectStorage();
	}

	/**
	 * Getter for firstName
	 *
	 * @return string
	 */
	public function getFirstName() {
		return $this->firstName;
	}

	/**
	 * Setter for firstName
	 *
	 * @param string $firstName
	 * @return void
	 */
	public function setFirstName($firstName) {
		$this->firstName = $firstName;
	}

	/**
	 * Getter for lastName
	 *
	 * @return string
	 */
	public function getLastName() {
		return $this->lastName;
	}

	/**
	 * Setter for lastName
	 *
	 * @param string $lastName
	 * @return void
	 */
	public function setLastName($lastName) {
		$this->lastName = $lastName;
	}

	/**
	 * Getter for electronicAddress
	 *
	 * @return string
	 */
	public function getElectronicAddress() {
		return $this->electronicAddress;
	}

	/**
	 * Setter for electronicAddress
	 *
	 * @param string $electronicAddress
	 * @return void
	 */
	public function setElectronicAddress($electronicAddress) {
		$this->electronicAddress = $electronicAddress;
	}

	/**
	 * Getter for activeProject
	 * @return F3\ArticleWorkflow\Domain\Model\Project
	 */
	public function getActiveProject() {
		return $this->activeProject;
	}

	/**
	 * Setter for activeProject
	 * @param F3\ArticleWorkflow\Domain\Model\Project $activeProject
	 */
	public function setActiveProject(\F3\ArticleWorkflow\Domain\Model\Project $activeProject) {
		$this->activeProject = $activeProject;
	}

	/**
	 * Getter for projects
	 * @return \SplObjectStorage<\F3\ArticleWorkflow\Domain\Model\Project>
	 */
	public function getProjects() {
		return clone $this->projects;
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
	public function removeProjects(\F3\ArticleWorkflow\Domain\Model\Project $project) {
		$this->projects->detach($project);
		if($project === $this->activeProject) {
			unset($this->activeProject);
		}
	}

	/**
	 * Set comment
	 * @param string $comment
	 * @return void
	 */
	public function setComment($comment) {
		$this->comment = $comment;
	}

	/**
	 * Get comment
	 * @return string Comment
	 */
	public function getComment() {
		return $this->comment;
	}




}
?>