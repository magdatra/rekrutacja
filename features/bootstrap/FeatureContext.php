<?php

use Behat\MinkExtension;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Behat\Tester\Exception\PendingException;
use Page\LogInPage;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkExtension\Context\MinkContext
{

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     * @param mixed $params
     */
    public function __construct()
    {
    }
    /**
     * Restart session to clean it
     *
     * @BeforeScenario
     *
     * @return null
     */
    public function cleanSession()
    {
        try {
            $this->getMink()->restartSessions();
        } catch(\Exception $e) {
            $this->printDebug($e->getMessage().PHP_EOL."Failed to clear session. Upcoming tests may fail");
        }
    }


    /**
     * @When /^I fill in loginForm with "([^"]*)"$/
     */
    public function iFillInLoginFormWith($login){

        $this->fillField("identifier", $login);
    }

    /**
     * @When /^I fill in userPassword with "([^"]*)"$/
     */
    public function iFillInUserPasswordFormWith($pass){
        $this->fillField("password", $pass);
    }

    /**
     * @When I press submit button
     */
    public function iPressSubmitButton(){
        $this->pressButton("identifierNext");
    }


    /**
     * @When I press submit pass button
     */
    public function iPressSubmitPassButton(){
        $this->pressButton("passwordNext");
    }
    /**
     * iWaitSec
     *
     * @param int $sleepTime sleepTime
     *
     * @Then /^I wait (\d+) sec(?:|ond)(?:|s)$/
     *
     * @return null
     */
    public function iWaitSec($sleepTime)
    {
        sleep($sleepTime);
    }

    /**
     * @Then I should see an emails element
     */
    public function iShouldSeeAnEmailsElement()
    {
        $this->assertElementOnPage("div.UI");
    }

    /**
     * @Then I should see an userPassword element
     */
    public function iShouldSeeAnUserpasswordElement()
    {
        $this->assertElementOnPage("#password");
    }
    /**
     * @Then I should see an loginForm element
     */
    public function iShouldSeeAnLoginformElement()
    {
        $this->assertElementOnPage("#identifierId");
    }



    /**
     * @Given I am login gmail
     */
    public function iAmLoginGmail()
    {

        $this->iAmOnHomepage();
        sleep(10);
        $this->iFillInLoginFormWith("testiokimagdat");
        $this->iPressSubmitButton();
        sleep(3);
        $this->iFillInUserPasswordFormWith("RikiTiki3Guziki");
        $this->iPressSubmitPassButton();
        sleep(3);


    }


    /**
     * @When I fill in sendToForm with :arg1
     */
    public function iFillInSendtoformWith($arg1)
    {
        $this->fillField("to",$arg1);
    }

    /**
     * @When I fill in subjectForm with :arg1
     */
    public function iFillInSubjectformWith($arg1)
    {
        $this->fillField("subjectbox", $arg1);
    }

    /**
     * @When I add attachment
     */
    public function iAddAttachment()
    {
        $session = $this->getSession();
        //$session->attachFileToField($session->getSelectorsHandler()->selectorToXpath('css', "[command=\"Files\"]"), "attachment.txt");

    }




    /**
     * @When I press submit mail button
     */
    public function iPressSubmitMailButton()
    {
        $this->pressButton("Wyślij");
        sleep(5);
    }

    /**
     * @Then I should see an sendingMail element
     */
    public function iShouldSeeAnSendingmailElement()
    {
        $this->assertElementOnPage("div.vh");
    }





}
