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
class UserRegistrationContext extends MinkContext implements Context, SnippetAcceptingContext
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
     * @Given I visit the registration page
     */
    public function iVisitTheRegistrationPage()
    {
        $this->visit('register');
    }
    /**
     * @Given I fill all the form fields
     */
    public function iFillAllTheFormFields()
    {
        $this->fillField('name', 'John Doe');
        $this->fillField('school_name', 'Oxford University');
        $this->fillField('email', 'john.doe@gmail.com');
        $this->fillField('password', 'secret');
        $this->fillField('password_confirmation', 'secret');
        $this->pressButton('Register');
    }

    /**
     * @Then I should see my registration name and school name
     */
    public function iShouldSeeMyRegistrationNameAndSchoolName()
    {
        $this->assertPageContainsText('John Doe');
        $this->assertPageContainsText('Oxford University');
    }

}
