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

/**
 * Defines application features from the specific context.
 */
class SettingsProfileContext extends MinkContext implements Context, SnippetAcceptingContext
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
        Artisan::call('db:seed');
    }

    /**
     * @AfterScenario
     */
    public function afterScenario()
    {
        Artisan::call('migrate:reset');
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
     * @Given visit the settings profile page.
     */
    public function visitTheSettingsProfilePage()
    {
        $this->visit('settings/profile');
    }

}
