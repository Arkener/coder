<?php
/**
 * \DrupalPractice\Sniffs\General\AttributesClassSniff
 *
 * @category PHP
 * @package  PHP_CodeSniffer
 * @link     http://pear.php.net/package/PHP_CodeSniffer
 */

namespace DrupalPractice\Sniffs\General;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;

/**
 * Checks for incorrect usage of the attributes class array.
 *
 * @category PHP
 * @package  PHP_CodeSniffer
 * @link     http://pear.php.net/package/PHP_CodeSniffer
 */
class AttributesClassSniff implements Sniff
{


    /**
     * Returns an array of tokens this test wants to listen for.
     *
     * @return array<int|string>
     */
    public function register()
    {
        return [T_CONSTANT_ENCAPSED_STRING];

    }//end register()


    /**
     * Processes this test, when one of its tokens is encountered.
     *
     * @param \PHP_CodeSniffer\Files\File $phpcsFile The file being scanned.
     * @param int                         $stackPtr  The position of the current token in the
     *                                               stack passed in $tokens.
     *
     * @return void
     */
    public function process(File $phpcsFile, $stackPtr)
    {
        $tokens = $phpcsFile->getTokens();
        if (trim($tokens[$stackPtr]['content'], '\'"') !== 'class') {
            return;
        }

        // Determine the start and end of the element.
        $startPtr = $phpcsFile->findStartOfStatement($stackPtr, [T_DOUBLE_ARROW, T_OPEN_SQUARE_BRACKET, T_OPEN_SHORT_ARRAY, T_OPEN_PARENTHESIS, T_COMMA]);

        $ptr = $stackPtr;
        while (($stringPtr = $phpcsFile->findPrevious(T_CONSTANT_ENCAPSED_STRING, ($ptr - 1), ($startPtr + 1))) !== false) {
            $stringValue = trim($tokens[$stringPtr]['content'], '\'"#');

            if ($stringValue === 'attributes' || substr($stringValue, -11) === '_attributes') {
                $valuePtr = $phpcsFile->findNext([T_OPEN_PARENTHESIS, T_CLOSE_SQUARE_BRACKET, T_EQUAL, T_DOUBLE_ARROW, T_WHITESPACE], ($stackPtr + 1), null, true, null, true);

                if ($valuePtr !== false && $tokens[$valuePtr]['code'] === T_CONSTANT_ENCAPSED_STRING) {
                    $data = [
                        $tokens[$stringPtr]['content'],
                    ];

                    $phpcsFile->addWarning("[%s]['class'] should be an array", $stackPtr, 'AttributesClass', $data);
                }

                break;
            }

            $ptr = $stringPtr;
        }

    }//end process()


}//end class
