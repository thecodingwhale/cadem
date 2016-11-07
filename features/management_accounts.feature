@javascript
Feature: Management User
  Superadmin can management multiple users
  As an superadmin
  So they can do crud multiple users

  @happy_path @management_users
  Scenario: It should display the current user in the table
    Given I visit the login page and fill up the form.
    And visit the management users page.
    Then the response should contain "Name"
    And the response should contain "Email"
    And the response should contain "Role"
    Then the response should contain "Aldren Terante"
    Then the response should contain "aldren.terante@gmail.com"
    Then the response should contain "superadmin"

  @happy_path @management_users
  Scenario: It should add a new user
    Given I visit the login page and fill up the form.
    And visit the management users create page.
    And fill all the forms properly.
    Then the response should contain "User successfully added."

  @happy_path @management_users
  Scenario: It should view the details of a account by user id
    Given I visit the login page and fill up the form.
    And visit a existing account page
    Then I should see "Aldren Terante" in the "div.account-detail-name" element
    Then I should see "aldren.terante@gmail.com" in the "div.account-detail-email" element
    Then I should see "superadmin" in the "div.account-detail-role" element
    Then I should see "Technological University of the Philippines - Manila" in the "div.account-detail-school" element