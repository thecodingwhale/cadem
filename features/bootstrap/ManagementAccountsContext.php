<?php

use Behat\Behat\Hook\Scope\AfterStepScope;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Mink\Driver\Selenium2Driver;
use Behat\MinkExtension\Context\MinkContext;

/**
 * Defines application features from the specific context.
 */
class ManagementAccountsContext extends MinkContext implements Context, SnippetAcceptingContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {

    }


    /**
     * @Given I visit the login page and fill up the form.
     */
    public function iVisitTheLoginPageAndFillUpTheForm()
    {
        $this->visit('login');
        $this->fillField('email', 'aldren.terante@gmail.com');
        $this->fillField('password', 'secret');
        $this->pressButton('Login');
    }

    /**
     * @Given visit the management users page.
     */
    public function visitTheManagementUsersPage()
    {
        $this->visit('management/accounts');
    }

    /**
     * @Then when I press the Add Users button.
     */
    public function whenIPressTheAddUsersButton()
    {
        $this->clickLink('Add account');
    }

    /**
     * @Given visit the management users create page.
     */
    public function visitTheManagementUsersCreatePage()
    {
        $this->visit('management/accounts/create');
    }

    /**
     * @Given fill all the forms properly.
     */
    public function fillAllTheFormsProperly()
    {
        $this->fillField('email', 'dexter.dy@gmail.com');
        $this->fillField('name', 'Dexter Dy');
        $this->selectOption('role', 'STUDENT');
        $this->pressButton('Create');
    }
}
