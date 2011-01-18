<?php
declare(ENCODING = 'utf-8');
namespace F3\ArticleWorkflow\Controller;

/*                                                                        *
 * This script belongs to the FLOW3 package "ArticleWorkflow".            *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License as published by the *
 * Free Software Foundation, either version 3 of the License, or (at your *
 * option) any later version.                                             *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU Lesser       *
 * General Public License for more details.                               *
 *                                                                        *
 * You should have received a copy of the GNU Lesser General Public       *
 * License along with the script.                                         *
 * If not, see http://www.gnu.org/licenses/lgpl.html                      *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

/**
 * User controller for the ArticleWorkflow package 
 *
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class AccountController extends \F3\ArticleWorkflow\Controller\AbstractBaseController {

	/**
	 * @inject
	 * @var \F3\FLOW3\Security\AccountRepository
	 */
	protected $accountRepository;

	/**
	 * @inject
	 * @var \F3\FLOW3\Security\Authentication\AuthenticationManagerInterface
	 */
	protected $authenticationManager;

    /**
	 * @inject
	 * @var \F3\FLOW3\Security\AccountFactory
	 */
	protected $accountFactory;

	/**
	 * Index controller, showing a lits of users and a form to create a new user
	 *
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('accounts', $this->accountRepository->findAll());
	}

	/**
	 * New action (deprecated, "new" form moved to indexAction)
	 *
	 * @return void
	 */
	public function newAction() {
		$this->redirect('index');
	}

	/**
	 * Delete action, delete a given object
	 *
	 * @param \F3\FLOW3\Security\Account $account
	 * @return void
	 */
	public function deleteAction(\F3\FLOW3\Security\Account $account) {
		$this->accountRepository->remove($account);
		#$this->flashMessageContainer->add("Account was deleted");
		#$this->redirect('index');
	}

	/**
	 * Edit action, edit existing account object
	 *
	 * @param \F3\FLOW3\Security\Account $account
	 * @return void
	 */
	public function editAction(\F3\FLOW3\Security\Account $account) {
		$this->view->assign('editAccount', $account);
	}

	/**
	 * Update action, update account object
	 * 
	 * @param \F3\FLOW3\Security\Account $editAccount
	 * @dontvalidate $editAccount
	 */
	public function updateAction(\F3\FLOW3\Security\Account $editAccount) {
		\F3\var_dump($editAccount);
	}

	/**
	 * Create action
	 *
	 * @param \F3\ArticleWorkflow\Domain\Model\Account
	 * @return void
	 */
	public function createAction(\F3\ArticleWorkflow\Domain\Model\Account $newAccount = NULL) {
		$accountIdentifier = $newAccount->getElectronicAddress();
		$existingAccount = $this->accountRepository->findActiveByAccountIdentifierAndAuthenticationProviderName($accountIdentifier, 'DefaultProvider');
		if ($existingAccount !== NULL) {
			$this->flashMessageContainer->add('An account with the username "' . $accountIdentifier . '" already exists.');
			#$this->redirect('new', NULL, NULL, array('account' => $newAccount));
			$this->redirect('new');
		}

		$password = \substr(md5(microtime()), 0, 8);

		$account = $this->accountFactory->createAccountWithPassword($newAccount->getElectronicAddress(), $password, array('Journalist'));
		$account->setParty($newAccount);

		$this->accountRepository->add($account);
		$this->flashMessageContainer->add('The account ' . $accountIdentifier .' was created with the password ' . $password);
		$this->redirect('new');



		/*

		$this->accountRepository->add($account);*/
	}

	/**
	 * Logout
	 *
	 * @return void
	 */
	public function logoutAction() {
		$this->authenticationManager->logout();
		$this->redirect('form', 'login');
	}

}

?>