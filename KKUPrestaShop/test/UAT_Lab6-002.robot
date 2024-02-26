*** Settings ***
Library     SeleniumLibrary
Suite Setup    Open Browser    ${URL}    ${BROWSER}
Suite Teardown    Close Browser

*** Variables ***
${URL}    http://localhost:7272/Form.html
${BROWSER}    chrome
${SCREENSHOTS_DIR}    ./screenshots

*** Test Cases ***
Test Case 1_1: Open Form
    [Documentation]    Open the form page
    Open Form
    Capture Page Screenshot    ${SCREENSHOTS_DIR}/Open_Form.png
Test Case 1_2: Empty Contact Person
    [Documentation]    Test submitting the form with empty Contact Person
    Open Form
    Submit Form With Empty Contact Person
    Validate Error Message    Please enter a contact person’s name!!
    Capture Page Screenshot    ${SCREENSHOTS_DIR}/Empty_Contact_Person.png

Test Case 2_1: Open Form
    [Documentation]    Open the form page
    Open Form
    Capture Page Screenshot    ${SCREENSHOTS_DIR}/Open_Form.png
Test Case 2_2: Empty First Name
    [Documentation]    Test submitting the form with empty First Name
    Open Form
    Submit Form With Empty First Name
    Validate Error Message    Please enter you’re first name!!
    Capture Page Screenshot    ${SCREENSHOTS_DIR}/Empty_First_Name.png

Test Case 3_1: Open Form
    [Documentation]    Open the form page
    Open Form
    Capture Page Screenshot    ${SCREENSHOTS_DIR}/Open_Form.png
Test Case 3_2: Empty Last Name
    [Documentation]    Test submitting the form with empty Last Name
    Open Form
    Submit Form With Empty Last Name
    Validate Error Message    Please enter a last name!!
    Capture Page Screenshot    ${SCREENSHOTS_DIR}/Empty_Last_Name.png

Test Case 4_1: Open Form
    [Documentation]    Open the form page
    Open Form
    Capture Page Screenshot    ${SCREENSHOTS_DIR}/Open_Form.png
Test Case 4_2: Empty Email
    [Documentation]    Test submitting the form with empty Email
    Open Form
    Submit Form With Empty Email
    Validate Error Message    Please enter an email!!
    Capture Page Screenshot    ${SCREENSHOTS_DIR}/Empty_Last_Name.png

Test Case 5_1: Open Form
    [Documentation]    Open the form page
    Open Form
    Capture Page Screenshot    ${SCREENSHOTS_DIR}/Open_Form.png
Test Case 5_2: Invalid Email
    [Documentation]    Test submitting the form with invalid Email
    Open Form
    Submit Form With Invalid Email
    Validate Error Message    Please enter a valid email!!
    Capture Page Screenshot    ${SCREENSHOTS_DIR}/Invalid_Email.png

Test Case 6_1: Open Form
    [Documentation]    Open the form page
    Open Form
    Capture Page Screenshot    ${SCREENSHOTS_DIR}/Open_Form.png
Test Case 6_2: Empty Phone Number
    [Documentation]    Test submitting the form with empty Phone Number
    Open Form
    Submit Form With Empty Phone Number
    Validate Error Message    Please enter a phone number!!
    Capture Page Screenshot    ${SCREENSHOTS_DIR}/Empty_Phone_Number.png

Test Case 7_1: Open Form
    [Documentation]    Open the form page
    Open Form
    Capture Page Screenshot    ${SCREENSHOTS_DIR}/Open_Form.png
Test Case 7_2: Invalid Phone Number
    [Documentation]    Test submitting the form with invalid Phone Number
    Open Form
    Submit Form With Invalid Phone Number
    Validate Error Message    Please enter a valid phone number, e.g., 081-234-5678, 081 234 5678, or 081.234.5678)
    Capture Page Screenshot    ${SCREENSHOTS_DIR}/Invalid_Phone_Number.png

*** Keywords ***
Open Form
    Go To    ${URL}

Submit Form With Empty Contact Person
    Input Text    id=firstname    Somsri
    Input Text    id=lastname    Sodsai
    Input Text    id=relationship    Sister
    Input Text    id=email    somsri@kkumail.com
    Input Text    id=phone    081-001-1234
    Click Button    id=submitButton

Submit Form With Empty First Name
    Input Text    id=lastname    Sodsai
    Input Text    id=contactperson    Somjai Sodsai
    Input Text    id=relationship    Sister
    Input Text    id=email    somsri@kkumail.com
    Input Text    id=phone    081-001-1234
    Click Button    id=submitButton

Submit Form With Empty Last Name
    Input Text    id=firstname    Somsri
    Input Text    id=contactperson    Somjai Sodsai
    Input Text    id=relationship    Sister
    Input Text    id=email    somsri@kkumail.com
    Input Text    id=phone    081-001-1234
    Click Button    id=submitButton

Submit Form With Empty Email
    Input Text    id=firstname    Somsri
    Input Text    id=contactperson    Somjai Sodsai
    Input Text    id=relationship    Sister
    Input Text    id=phone    081-001-1234
    Click Button    id=submitButton

Submit Form With Invalid Email
    Input Text    id=firstname    Somsri
    Input Text    id=lastname    Sodsai
    Input Text    id=contactperson    Somjai Sodsai
    Input Text    id=relationship    Sister
    Input Text    id=email    abcd@
    Input Text    id=phone    081-001-1234
    Click Button    id=submitButton

Submit Form With Empty Phone Number
    Input Text    id=firstname    Somsri
    Input Text    id=lastname    Sodsai
    Input Text    id=contactperson    Somjai Sodsai
    Input Text    id=relationship    Sister
    Input Text    id=email    somsri@kkumail.com
    Click Button    id=submitButton

Submit Form With Invalid Phone Number
    Input Text    id=firstname    Somsri
    Input Text    id=lastname    Sodsai
    Input Text    id=contactperson    Somjai Sodsai
    Input Text    id=relationship    Sister
    Input Text    id=email    somsri@kkumail.com
    Input Text    id=phone    191
    Click Button    id=submitButton

Validate Error Message
    [Arguments]    ${expected_message}
    Wait Until Page Contains Element    xpath=//p[@id='errors']
    Element Text Should Be    xpath=//p[@id='errors']    ${expected_message}
