<?php
/**
 * Discouraged Functions
 *
 * @package   CodeIgniter3-Standard
 * @author    Louis Linehan <louis.linehan@gmail.com>
 * @copyright 2017 Louis Linehan
 * @license   https://github.com/louisl/CodeIgniter3-Standard/blob/master/LICENSE MIT License
 */

namespace CodeIgniter3\Sniffs\PHP;

use CodeIgniter3\Sniffs\PHP\ForbiddenFunctionsSniff;
use PHP_CodeSniffer\Sniffs\Sniff;
use PHP_CodeSniffer\Files\File;

/**
 * Discouraged Functions Sniff
 *
 * Discourages the use of debug functions.
 *
 * @author Louis Linehan <louis.linehan@gmail.com>
 */
class DiscouragedFunctionsSniff extends ForbiddenFunctionsSniff
{

    /**
     * A list of forbidden functions with their alternatives.
     *
     * The value is NULL if no alternative exists. IE, the
     * function should just not be used.
     *
     * @var array(string => string|null)
     */
    public $forbiddenFunctions = array(
                                  'error_log'       => null,
                                  'print_r'         => null,
                                  'var_dump'        => null,
                                  'last_query'      => null,
                                  'enable_profiler' => null,
                                 );

    /**
     * If true, an error will be thrown; otherwise a warning.
     *
     * @var boolean
     */
    public $error = false;

}//end class
