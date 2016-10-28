<?php

use Behat\Behat\Hook\Scope\AfterStepScope;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Mink\Driver\Selenium2Driver;
use Behat\MinkExtension\Context\MinkContext;
use Laracasts\Behat\Context\DatabaseTransactions;
use Laracasts\Behat\Context\Migrator;
use Illuminate\Http\Request;
/**
 * Defines application features from the specific context.
 */
class UserRegistrationContext extends MinkContext implements Context, SnippetAcceptingContext
{
    use Migrator;
    use DatabaseTransactions;

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
     * @BeforeScenario
     */
    public function beforeScenario()
    {
        Artisan::call('migrate:refresh');
        // Artisan::call('db:seed');
    }

    // /**
    //  * @AfterScenario
    //  */
    // public function afterScenario()
    // {
    //     Artisan::call('migrate:refresh');
    // }

    /**
     * @Given I visit the registration page
     */
    public function iVisitTheRegistrationPage()
    {
        $this->visit('register');
    }

    /**
     * @Given I fill in the form with my name :arg1, email, password, confimation password and submit the form
     */
    public function iFillInTheFormWithMyNameEmailPasswordConfimationPasswordAndSubmitTheForm($arg1)
    {
        $this->fillField('name', $arg1);
        $this->fillField('email', 'john.doe@gmail.com');
        $this->fillField('password', 'secret');
        $this->fillField('password_confirmation', 'secret');
        $this->pressButton('Register');
    }
}