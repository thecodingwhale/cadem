Feature: User Registration Are
  User can register an account
  As an anonymous user
  So that they can start using the secured parts of the site

  @happy_path @user_registration
  Scenario: Registration with Success
    Given I visit the registration page
    And I fill all the form fields
    Then I should see my registration name and school name