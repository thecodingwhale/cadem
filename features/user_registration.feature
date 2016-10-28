Feature: User Registration Are
  User can register an account
  As an anonymous user
  So that they can start using the secured parts of the site

  @happy_path @user_registration @javascript
  Scenario: Registration with Success
    Given I visit the registration page
    And I fill in the form with my name "John Doe", email, password, confimation password and submit the form
    Then I should see "John Doe"