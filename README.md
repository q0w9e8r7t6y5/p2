# Project 2
+ By: Sishir Yeety
+ Production URL: <http://p2.sy-dwa15.me>

## Outside resources

1. Bootstrap Theme: <https://bootswatch.com/spacelab>
2. php ucfirst/ucword functions: <http://php.net/manual/en/function.ucfirst.php>
3. Home Page button: <https://stackoverflow.com/questions/2906582/how-to-create-an-hml-button-that-acts-like-a-link/2906611>
4. php form submission resource: <https://www.w3schools.com/Php/php_form_complete.asp>
5. php redirection inside form.php: <https://stackoverflow.com/questions/35891799/redirect-to-home-php-if-getid-is-invalid-or-empty>
6. Multiple radio button groups in one form: <https://stackoverflow.com/questions/28543752/multiple-radio-button-groups-in-one-form>
7. Outputting array into comma sep. list on order page: <https://stackoverflow.com/questions/2435216/how-to-create-comma-separated-list-from-array-in-php>
8. Radio button defaults: <https://stackoverflow.com/questions/5592345/how-to-select-a-radio-button-by-default>
9. php if-else statement help: <http://w3schools.sinsixx.com/php/php_if_else.asp.htm>

## 3 Unique inputs

1. Multiple individual text boxes (names, email, phone number)
2. Multiple groups of radio buttons (type, rice, beans, veggies)
3. Dropdown menu to specify meat/tofu selection
4. One large group of checkboxes (toppings)
5. Text area (bottom of order page) for special instructions

## Class

1. Used given Form.php class (modified it to handle some processing)

## Code style divergences
*list any divergences from PSR-1/PSR-2 and course guidelines on code style*

## Notes for instructor

1. Menu is (sorta) modeled after Chipotles. If I were to continue with this project,
the next step would be add more options, such as kids meals and drinks; plus more
customizations.

2. Form.php was slightly modified to include some processing. Basically, I made
the main page, so that if you submit customer info and it fails validation, it will
not go onto the order page. If it throws no errors, then it will go to the next page.
