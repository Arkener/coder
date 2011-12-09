<?php

/**
 * @file
 * This file contains all the valid notations for the drupal coding standard.
 *
 * The goal is to create a style checker that validates all of this
 * constructs.
 *
 * Theme files often have lists in their file block:
 * - item 1
 * - item 2
 * - sublist:
 *   - sub item 1
 *   - sub item2
 */

// Singleline comment before a code line.
$foo = 'bar';

/**
 * Doxygen comment style is allowed before define() statements.
 */
define('FOO_BAR', 5);

/*
 * Multiline comment
 *
 * @see my_function()
 */

// PHP Constants must be written in CAPITAL letters.
TRUE;
FALSE;
NULL;

// Has whitespace at the end of the line.
$whitespaces = 'Yes, Please';

// Operators - have a space before and after.
$i = 0;
$i += 0;
$i -= 0;
$i == 0;
$i != 0;
$i > 0;
$i < 0;
$i >= 0;
$i <= 0;

// Unary operators must not have a space.
$i--;
--$i;
$i++;
++$i;
$i = -1;
$i = +1;
array('i' => -1);
array('i' => +1);
$i = (1 == -1);
$i = (1 === -1);
$i = (1 == +1);
$i = (1 === +1);
range(-50, -45);
$i[0] + 1;
$x->{$i} + 1;
REQUEST_TIME + 42;

// Operator line break for long lines.
$x = 1 + 1 + 1 + 1 + 1 + 1 + 1 + 1 + 1 + 1 + 1 + 1 + 1 + 1 + 1 + 1 + 1 + 1
  + 1 + 1;

// Casting has a space.
(int) $i;

// The last item in an multiline array should be followed by a comma.
// But not in a inline array.
$a = array();
$a = array('1', '2', '3');
$a = array(
  '1',
  '2',
  '3',
);
$a = array('1', '2', array('3'));
$a = array('1', '2', array(
  'one',
  'two',
  'three',
  array(
    'key' => $value,
    'title' => 'test',
  ),
),);

// Arrays in function calls.
foo(array(
  'value' => 0,
  'description' => t('xyz @url', array(
    '@url' => 'http://example.com')),
));

// Pretty array layout.
$a = array(
  'title'    => 1,
  'weight'   => 2,
  'callback' => 3,
);

// Item assignment operators must be prefixed and followed by a space.
$a = array('one' => '1', 'two' => '2');
foreach ($a as $key => $value) {
}

// If conditions have a space before and after the condition parenthesis.
if (TRUE || TRUE) {
  $i;
}
elseif (TRUE && TRUE) {
  $i;
}
else {
  $i;
}

while (1 == 1) {
  if (TRUE || TRUE) {
    $i;
  }
  else {
    $i;
  }
}

switch ($condition) {
  case 1:
    $i;
    break;

  case 2:
    $i;
    break;

  default:
    $i;
}

do {
  $i;
} while ($condition);

/**
 * Short description.
 *
 * We use doxygen style comments.
 * What's sad because eclipse PDT and
 * PEAR CodeSniffer base on phpDoc comment style.
 * Makes working with drupal not easier :|
 *
 * @param string $field1
 *   Doxygen style comments.
 * @param int $field2
 *   Doxygen style comments.
 * @param bool $field3
 *   Doxygen style comments.
 *
 * @return array
 *   Doxygen style comments.
 *
 * @see example_reference()
 * @see Example::exampleMethod()
 * @see http://drupal.org
 */
function foo_bar($field1, $field2, $field3 = NULL) {
  $system["description"] = t("This module inserts funny text into posts randomly.");
  return $system[$field];
}

// Function call.
$var = foo($i, $i, $i);

// Multiline function call.
$var = foo(
  $i,
  $i,
  $i
);

// Multiline function call with array.
$var = foo(array(
    $i,
    $i,
    $i,
  ),
  $i,
  $i
);

// Multiline function call with only one array.
$var = foo(array(
    $i,
    $i,
    $i,
));

/**
 * Class declaration
 *
 * Classes always have a multiline comment
 */
class Bar {
  // Private properties have no prefix.
  private $secret = 1;

  // Public properties also don't a prefix.
  protected $foo = 1;

  // Longer properties use camelCase naming.
  public $barProperty = 1;

  // Public static variables use camelCase, too.
  public static $basePath = NULL;

  /**
   * Enter description here ...
   */
  public function foo() {

  }

  /**
   * Enter description here ...
   */
  protected function barMethod() {

  }
}

/**
 * Enter description here ...
 */
function _private_foo() {

}

// When calling class constructors with no arguments, always include
// parentheses.
$bar = new Bar();

$bar = new Bar($arg1, $arg2);

$bar = 'Bar';
$foo = new $bar();
$foo = new $bar($i, $i);

// Static class variables use camelCase.
Bar::$basePath = '/foo';

// Concatenation - there has to be a space.
$i . "test";
$i . 'test';
$i . $i;
$i . NULL;

// It is allowed to have the closing "}" on the same line if the class is empty.
class MyException extends Exception {}

// Nice alignment is allowed for assignments.
class MyExampleLog {
  const INFO      = 0;
  const WARNING   = 1;
  const ERROR     = 2;
  const EMERGENCY = 3;

  /**
   * Empty method implementation is allowed.
   */
  public function emptyMethod() {}

  /**
   * Protected functions are allowed.
   */
  protected function protectedTest() {

  }
}

/**
 * Nice allignment in functions.
 */
function test_test2() {
  $a   = 5;
  $aa  = 6;
  $aaa = 7;
}

// Uses the Rules API as example.
$rule = rule();
$rule->condition('rules_test_condition_true')
     ->condition('rules_test_condition_true')
     ->condition(rules_or()
       // Inline test comment that continues on a
       // second line.
       ->condition(rules_condition('rules_test_condition_true')->negate())
       ->condition('rules_test_condition_false')
       ->condition(rules_and()
         ->condition('rules_test_condition_false')
         ->condition('rules_test_condition_true')
         ->negate()
       )
     );

// Test usages of t().
t('special character: \"');
t("special character: \'");

// Test inline comment style.
// Comment one.
t('x');
// Comment two
// @todo this is valid!
t('x');
// Goes on?
t('x');
/* Longer comment
 * bla bla
 * end!
 */
t('x');
// @see http://example.com
t('x');
// @see my_function()
t('x');
// t() refers to a function name and should not be capitalized.
t('x');
// rules_admin is a fancy machine name word with underscores and should not be
// capitalized and ignored.
t('x');
// {} this comment start should not be flagged.
t('x');
// Some code examples in inline comments:
// @code
//   function mymodule_menu() {
//     $items['abc/def'] = array(
//       'page callback' => 'mymodule_abc_view',
//     );
//     return $items;
//   }
// @endcode
// @todo A long description what is left to be done. Exceeds the first line and
//   is indented on the second line.
// Now follows a list:
// - item 1
//   additional description line.
// - item 2
// - item 3 comes with a sub list:
//   - sub item 1
//   - sub item 2
//     description of sub item 2.
// List is closed, normal indentation here. Now comes a paragraph empty line.
//
// And here continues the long comment.
t('x');

/**
 * Doc block with some code tags.
 *
 * Some description and here comes the code:
 * @code
 *   $options = drupal_parse_url($_GET['destination']);
 *   $my_url = url($options['path'], $options);
 *   $my_link = l('Example link', $options['path'], $options);
 * @endcode
 *
 * Some more description here. And now the parameters.
 *
 * @param int $x
 *   Parameter comment here.
 */
function test1($x) {

}

/**
 * Variable amount of parameters is allowed with the "..." notation.
 *
 * Example:
 * @code
 *   test_invoke_all('node_view', $node, $view_mode);
 * @endcode
 *
 * @param string $hook
 *   The name of the hook to invoke.
 * @param ...
 *   Arguments to pass to the hook.
 */
function test_invoke_all($hook) {

}
