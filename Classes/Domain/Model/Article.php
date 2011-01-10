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
 * A Article
 *
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 * @scope prototype
 * @entity
 */
class Article {

	/**
	 * Project
	 * @var F3\ArticleWorkflow\Domain\Model\Project
	 * @identity
	 */
	protected $project;

	/**
	 * Created by
	 * @var F3\ArticleWorkflow\Domain\Model\Account
	 */
	protected $createdBy;

	/**
	 * Created date
	 * @var DateTime
	 */
	protected $createdDate;

	/**
	 * Updated date
	 * @var DateTime
	 */
	protected $updatedDate;

	/**
	 * Rubric
	 * @var string
	 * @validate NotEmpty
	 * @identity
	 */
	protected $rubric;

	/**
	 * Manchet
	 * @var string
	 * @validate NotEmpty
	 */
	protected $manchet;

	/**
	 * Byline
	 * @var string
	 * @validate NotEmpty
	 */
	protected $byline;

	/**
	 * Bodytext
	 * @var string
	 * @validate NotEmpty
	 */
	protected $bodytext;

	/**
	 * Media
	 * @var \SplObjectStorage<\F3\ArticleWorkflow\Domain\Model\Photography>
	 * @lazy
	 */
	protected $photographs;

	public function __construct() {
		$this->createdDate = new \DateTime();
	}

	/**
	 * Getter for project
	 * @return \F3\ArticleWorkflow\Domain\Model\Project
	 */
	public function getProject() {
		return $this->project;
	}

	/**
	 * Setter for project
	 * @param \F3\ArticleWorkflow\Domain\Model\Project $project
	 */
	public function setProject(F3\ArticleWorkflow\Domain\Model\Project $project) {
		$this->project = $project;
	}

	/**
	 * Getter for createdBy
	 * @return \F3\ArticleWorkflow\Domain\Model\Account
	 */
	public function getCreatedBy() {
		return $this->createdBy;
	}

	/**
	 * Setter for createdBy
	 * @param \F3\ArticleWorkflow\Domain\Model\Account $createdBy
	 */
	public function setCreatedBy(F3\ArticleWorkflow\Domain\Model\Account $createdBy) {
		$this->createdBy = $createdBy;
	}

	/**
	 * Getter for createdDate
	 * @return \DateTime
	 */
	public function getCreatedDate() {
		return $this->createdDate;
	}

	/**
	 * Setter for createdDate
	 * @param \DateTime $createdDate
	 * @return void
	 */
	public function setCreatedDate(\DateTime $createdDate) {
		$this->createdDate = $createdDate;
	}

	/**
	 * Getter for updatedDate
	 * @return \DateTime
	 */
	public function getUpdatedDate() {
		return $this->updatedDate;
	}

	/**
	 * Setter for updatedDate
	 * @param \DateTime $updatedDate
	 * @return void
	 */
	public function setUpdatedDate(\DateTime $updatedDate) {
		$this->updatedDate = $updatedDate;
	}

	/**
	 * Getter for rubric
	 *
	 * @return string
	 */
	public function getRubric() {
		return $this->rubric;
	}

	/**
	 * Setter for rubric
	 *
	 * @param string $rubric
	 * @return void
	 */
	public function setRubric($rubric) {
		$this->rubric = $rubric;
	}

	/**
	 * Getter for manchet
	 *
	 * @return string
	 */
	public function getManchet() {
		return $this->manchet;
	}

	/**
	 * Setter for manchet
	 *
	 * @param string $manchet
	 * @return void
	 */
	public function setManchet($manchet) {
		$this->manchet = $manchet;
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
	 * Getter for bodytext
	 *
	 * @return string
	 */
	public function getBodytext() {
		return $this->bodytext;
	}

	/**
	 * Setter for bodytext
	 *
	 * @param string $bodytext
	 * @return void
	 */
	public function setBodytext($bodytext) {
		$this->bodytext = $bodytext;
	}


}
?>