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

1. No code style divergences from the guidelines.
2. Only thing to note is that the w3validator does not seem to like the code phrase
`checked = 'checked'` with php, even though it is the correct usage.
3. A few lines of code on the order.php page go beyond the 80 characters because
of the injection of php with HTML.

## Notes for instructor

1. Menu is (sorta) modeled after Chipotles. If I were to continue with this project,
the next step would be add more options, such as kids meals and drinks; plus more
customizations.

2. Form.php was slightly modified to include some processing. Basically, I made
the main page, so that if you submit customer info and it fails validation, it will
not go onto the order page. If it throws no errors, then it will go to the next page.

3. Function inside total.php had to be separated out from logic.php, due to
processing errors. After separating out the function into its own php page, the
correct total value was able to be shown to the end user on the html page.

4. Text area at the bottom has been set up to use GET in my example. If this was
writing to a database and then showing the user a confirmation, the correct
implementation would be POST.
