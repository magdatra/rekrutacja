@javascript @cleanSession
Feature: Send email

  Scenario: Sending email
    Given I am login gmail
    And I go to "https://mail.google.com/mail/"
    And I wait 10 sec
    When I go to "https://mail.google.com/mail/u/0/#inbox?compose=new"
    And I fill in sendToForm with "testiokimagdat@gmail.com"
    And I fill in subjectForm with "Subject testing mail"
    And I add attachment
    And I press submit mail button
    Then I should see an sendingMail element
    When I follow "Wysłane"
    And I wait 3 sec
    Then I should see "Subject testing mail"