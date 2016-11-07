Feature: User Login Area
  User can go to settings page
  As an authenticated user
  So they can update their profile settings

  @happy_path @settings_profile
  Scenario: Check the current profile settings
    Given I visit the login page and fill up the form.
    And visit the settings profile page.
    Then the "user_profile_name" field should contain "Aldren Terante"
    Then the "user_profile_role" field should contain "superadmin"