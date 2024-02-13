*** Settings ***
Library     SeleniumLibrary
Library    XML
Suite Setup    Open Browser    ${URL_index}    ${BROWSER}
Suite Teardown    Close Browser


*** Variables ***
${URL_index}    http://localhost:8080/th/
${URL_login}    http://localhost:8080/th/%E0%B9%80%E0%B8%82%E0%B9%89%E0%B8%B2%E0%B8%AA%E0%B8%B9%E0%B9%88%E0%B8%A3%E0%B8%B0%E0%B8%9A%E0%B8%9A?back=http%3A%2F%2Flocalhost%3A8080%2Fth%2F
${URL_product}    http://localhost:8080/th/%E0%B8%AA%E0%B8%B4%E0%B8%99%E0%B8%84%E0%B9%89%E0%B8%B2%E0%B9%83%E0%B8%AB%E0%B8%A1%E0%B9%88
${BROWSER}    chrome
${SCREENSHOTS_DIR}    ./screenshots

*** Test Cases ***
Test Case 4_1: No-login-buy-2-product
    [Documentation]    login-buy-2-product
    Open index
    Open product
    Click Link with Content Attribute    http://localhost:8080/th/clothes/27-pha-khawma-pha-phan-khx-thi-raluk.html
    #addproduct
    Click Element with Class    btn.btn-primary.add-to-cart
    Click Continue Shopping Button
    Open index
    Open product
    Click Link with Content Attribute    http://localhost:8080/th/hna-hlak/20-ri-s-baen-d.html
    Click Element with Class    btn.btn-primary.add-to-cart

*** Keywords ***
Open index
    Go To    ${URL_index}

Open login
    Go To    ${URL_login}

Open product
    Go To    ${URL_product}

Input data_login
    Input Text    id=field-email    somsri@kkumail.com
    Input Text    id=field-password    0889742987
    Click Button    id=submit-login

Click Link with Content Attribute
    [Arguments]    ${content_value}
    Click Element    css=a[content="${content_value}"]

Click Element with Class    
    [Arguments]    ${button_class}
    Click Element    css=button.${button_class}

Click Payment Element
    [Arguments]    ${xpath_expression}
    Wait Until Page Contains Element    xpath=${xpath_expression}
    Click Element    xpath=${xpath_expression}

Click Continue Shopping Button
    Wait Until Page Contains Element    xpath=//button[@class='btn btn-secondary' and contains(text(),'ซื้อสินค้าต่อ')]
    Click Element    xpath=//button[@class='btn btn-secondary' and contains(text(),'ซื้อสินค้าต่อ')]

Click Element by Href
    [Arguments]    ${href_value}
    Wait Until Page Contains Element    xpath=//div[@class='cart-content-btn']//a[@href='${href_value}']
    Click Element    xpath=//div[@class='cart-content-btn']//a[@href='${href_value}']

Delay    
    Sleep    3 seconds