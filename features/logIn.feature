@javascript @cleanSession
Feature: Log in

  Scenario: I log in with wrong login
    Given I am on homepage
    When I fill in loginForm with ""
    And I press submit button
    And I wait 3 sec
    Then I should see an loginForm element

  Scenario: I log in with wrong password
    Given I am on homepage
    When I fill in loginForm with "testiokimagdat"
    And I press submit button
    And I wait 3 sec
    And I fill in userPassword with "RikiTiki2Guziki"
    And I wait 3 sec
    And I press submit pass button
    And I wait 3 sec
    Then I should see an userPassword element

  Scenario: I log in
    Given I am on homepage
    When I fill in loginForm with "testiokimagdat"
    And I press submit button
    And I wait 3 sec
    And I fill in userPassword with "RikiTiki3Guziki"
    And I wait 3 sec
    And I press submit pass button
    And I wait 3 sec
    And I go to "https://mail.google.com/mail/"
    And I wait 5 sec
    Then I should see "test"
    And I should see an emails element



