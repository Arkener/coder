<?php

#Discouraged comment style

//Inline comments need to be prefixed by a space after the //.
// But there should be only one space.
//  Not more.
// Now follows a list:
// - item 1
//    wrong indentation level here.
// - now follows a sub-list:
//    - should be only 2 additional spaces.
//   - this one is correct.
// Blank comments are not allowed outside of a comment block.

//

// PHP Constants should be written in CAPITAL letters
true; // Comments should be on a separate line.
false;
//   Comment indented too far.
null;

// Missing spaces
if(TRUE){
  TRUE;
}
if (TRUE){
  TRUE;
}
if(TRUE) {
  TRUE;
}

define('C_TEST',1);

// Has whitespace at the end of the line.
$whitespaces = 'Yes, Please';  

// Operators - must have a space before and after
$i= 0;
$i+= 0;
$i-= 0;
$i== 0;
$i=== 0;
$i!== 0;
$i!= 0;
$i> 0;
$i< 0;
$i>= 0;
$i<= 0;
$i=0;
$i+=0;
$i-=0;
$i==0;
$i===0;
$i!==0;
$i!=0;
$i>0;
$i<0;
$i>=0;
$i<=0;
$i =0;
$i +=0;
$i -=0;
$i ==0;
$i  ==0;
$i !=0;
$i >0;
$i <0;
$i >=0;
$i <=0;
$i  += 0;
$i  -= 0;
$i  == 0;
$i  === 0;
$i  !== 0;
$i  != 0;
$i  > 0;
$i  < 0;
$i  >= 0;
$i  <= 0;
$i =  0;
$i +=  0;
$i -=  0;
$i ==  0;
$i ===  0;
$i !==  0;
$i !=  0;
$i >  0;
$i <  0;
$i >=  0;
$i <=  0;
// Arihtmetic operators, too.
$i = 1+1;
$i = 1- 1;
$i = 1 /2;
$i = 1  * 1;


// Unary operators must not have a space
$i --;
-- $i;
$i ++;
++ $i;
$i = - 1;
$i = + 1;
$i =  -1;
$i =  +1;
array('i' => - 1);
array('i' => + 1);
$i = (1 == - 1);
$i = (1 === - 1);
$i = (1 == + 1);
$i = (1 === + 1);
range(-50, - 45);
range(- 50, -45);
$i[0]+ 1;
$x->{$i}+ 1;


// Casting must have one space
(int)$i;
(int)  $i;


// Last item of a multiline array has to be followed by a
// comma. On inline arrays not!
$a = array('1', '2', '3',);
$a = array(
  '1',
  '2',
  '3'
);
$a = array('1', '2', array('3', ));
$a = array('1', '2', array('3',), );
$a = array('1', '2', array('3'), );
$a = array('1', '2', array('3',), );
$a = array('1', '2', array(
  '3'),
);
$a = array(
  '1',
  '2',
  array('3',)
);
// Missing comma on the last item.
$field = array(
  'field_name' => 'test_text',
  'type' => 'text'
);

// Array white space style.
$a = array ('1');
$a = array( '1');
$a = array('1' );
$a = array( '1','2' );

// Wrong usage of array keyword.
$a = Array('1');
$a = ARRAY('x');

// Array indentation error.
$a = array(
'x' => 'y',
);

// Item assignment operators must be prefixed and followed by a space
$a = array('one'=>'1');
$a = array('one'=> '1');
$a = array('one' =>'1');
foreach ( $a as $key=>$value) {
}
foreach ( $a as $key =>$value) {
}
foreach ( $a as $key=> $value) {
}
// "as" keyword must be lower case.
foreach ($a AS  $key => $value) {
}



// elseif and else must have a newline after the curly braces of the former condition
if(TRUE || TRUE){
  $i;
}elseif(TRUE && TRUE){
  $i;
}else{
  $i;
}

// elseif and else must have a newline after the curly braces of the former condition
if (TRUE || TRUE) {
  $i;
}
elseif(TRUE && TRUE){
  $i;
}
else{
  $i;
}

// If conditions have a space before and after the condition parenthesis
if(TRUE || TRUE) {
  $i;
}elseif(TRUE && TRUE) {
  $i;
}else {
  $i;
}

// else if is not allowed
if (TRUE) {
  $i;
}else if (TRUE) {
  $i;
}

// White spaces before and after the condition are not allowed.
if ( TRUE) {
  $i;
}
elseif (TRUE ) {
  $i;
}

// Break has to be intended 2 spaces
switch ($condition) {
  case 1:
    $i;
  break;

  case 2:
    $i;
      break;
}

// Missing Spaces
switch($condition) {
  default:
    $i;
}
switch($condition){
  default:
    $i;
}
switch ($condition){
  default:
    $i;
}

// Missing space after "do"
do{
  $i;
} while ($condition);
// Missing space before "while"
do {
  $i;
}while ($condition);
// Missing space after "while"
do {
  $i;
} while($condition);

// For loop formatting.
// For loop formatting.
for ( $i = 0; $i < 5; $i++) {
}
for ($i = 0 ; $i < 5; $i++) {
}
for ($i = 0;$i < 5; $i++) {
}
for ($i = 0; $i < 5 ; $i++) {
}
for ($i = 0; $i < 5;$i++) {
}

// Control structure keywords must be lower case.
IF (TRUE) {
  FoReACH ($a as $key => $value) {
    tRY {
      $value++;
    }
    CATCH (Exception $e) {
    }
  }
}

/**
 * Short description
 *
 * We use doxygen style comments.
 * What's sad because eclipse PDT and
 * PEAR CodeSniffer base on phpDoc comment style.
 * Makes working with drupal not easier :|
 *
 * @param $field1
 *  Doxygen style comments
 * @param $field2
 *  Doxygen style comments
 * @param $field3
 *  Doxygen style comments
 * @return
 *  Doxygen style comments
 */
function foo($field1, $field2, $field3 = NULL) {
  $system["description"] = t("This module inserts funny text into posts randomly.");
  /**
   * Inline doc blocks are not allowed.
   */
  return $system[$field];
}

/**
 * use a single space between the closing parenthesis and the open bracket
 */
function foo()  {

}

/**
 * use a single space between the closing parenthesis and the open bracket
 */
function foo(){

}

// There has to be a space betrween the comma and the next argument
$var = foo($i,$i);

// Multiline function call - all the parameters have to be on the next line
// I don't thing that this rule is strictly followed...
$var = foo($i,
  $i,
  $i
);

// Multiline function call - closing parenthesis has to be on a own line
$var = foo(
  $i,
  $i,
  $i);


// Only multiline comments with /** should be used to comment classes
// Curly brace has to be on the same line
class Bar
{
  // Private properties must not have a prefix
  private $_secret = 1;

  // Public properties must not have a prefix
  protected $_foo = 1;

  // Public properties must not have a prefix
  public $_bar = 1;

  // Public static variables use camelCase.
  public static $base_path = NULL;

  // "var" keyword must no be used.
  var $x = 5;
}

// Comments must have content ;) and there must be a space after the class name
/**
 *
 */
class FooBar{
}

// When calling class constructors with no arguments, always include parentheses:
$bar = new Bar;
// Check for spaces between classname and opening parenthesis
$bar = new Bar ();
// Check argument formating
$bar = new Bar($i,$i);

// Concatenation - there has to be a space
$i ."test";
$i .'test';
$i .$i;
$i .C_TEST;
$i."test";
$i.'test';
$i.$i;
$i.C_TEST;
$i. "test";
$i. 'test';
$i. $i;
$i. C_TEST;

/**
 *
 */
Class FunctionTest {
  public function _foo() {

  }

  protected function _bar() {

  }

  /**
   * Asterisks of this comment are wrong.
  *
    */
  private function foobar() {

  }
}

interface startsLowerInterface {}

class Uses_UnderScores {}

function _refix() {

}

// Usage of t() - there should be no escaping.
t('She\'s a good person.');
t("This is a \"fancy\" string.");

// require_once should be a statement.
require_once('somefile.php');

/*
 * Wrong comment style
 */
function test1() {

}

/**
 *
 */
function test2() {

}

/**
 * Implementation of hook_menu().
 */
function mymodule_menu() {
  return array();
}

/**
 * Implementation hook_foo_BAR_ID_bar() for some_type_bar().
 *
 * Extended "Implements" syntax for hooks.
 */
function mymodule_foo_some_type_bar() {

}

/**
 *
 * Extra newline above is not allowed.
 */
function test3() {

}

/**
 * Extra newlines between function descriptions are not allowed.
 *
 *
 * More description here ...
 */
function test4() {

}

/**
 * There must be a new line before tags.
 * @param int $x
 *   A number.
 */
function test5($x) {

}

/**
 * Throws tag must have an Exception name.
 *
 * @throws
 */
function test6() {

}

/**
 * Return tag must not be empty.
 *
 * @return
 */
function test7() {

}

/**
 * Param tags must come first.
 *
 * @return array()
 *
 * @param int $x
 *   A number.
 */
function test8($x) {

}

/**
 * Last Param tag must be followed by a new line.
 *
 * @param int $x
 *   A number.
 * @param int $y
 *   Another number.
 * @return bool
 */
function test9($x, $y) {

}

/**
 * Only one space before param type and return type.
 *
 * @param  array $x
 *   Shiny array.
 *
 * @return   int
 *   Some number.
 */
function test10($x) {

}

/**
 * Documented params do not match.
 *
 * @param bool $foobar
 *   Wrong name.
 * @param bool $Y
 *   Wrong case.
 * @param $z
 *   Missing type.
 * @param int
 * @param string $a Comment should be on a new line.
 * @param string $non_existent
 *   Parameter does not exist.
 *
 * @return bool This description should be on the next line.
 *
 * @see  Too much space here
 * @see my_function().
 */
function test11($x, $y, $z, $a, $b) {

}

/**
 * Referenced variables should not contain the & in the docblock.
 *
 * @param int &$x
 *   Refrenced variable.
 */
function test12(&$x, &$y) {

}

/**
* Malformed doxygen asterisks.
*@return array
*/
function test13() {

}

/**
 * There should be no empty line between doc block and function.
 */

function test14() {

}

/**
 * Return data type documentation must not be the variable name.
 *
 * @return $foo
 *   Description bla.
 */
function test15() {
  $foo = TRUE;
  return $foo;
}

// Test string concatenation.
$x = 'This string is to short to be' . 'concatenated';

// Object operator spacing is not allowed.
$z = $foo-> x;
$z = $foo -> x;
$z = $foo ->x;

// strings in l() should be translated.
$x = l('Link text', '<front>');

?>
