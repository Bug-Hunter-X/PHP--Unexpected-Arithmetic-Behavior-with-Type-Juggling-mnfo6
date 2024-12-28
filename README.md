# PHP Type Juggling Bug

This repository demonstrates a common but subtle bug in PHP related to type juggling.  When you perform arithmetic operations on an array containing strings that can be interpreted as numbers, PHP attempts to implicitly convert them.  However, if a string cannot be directly converted to a number (e.g., it contains non-numeric characters), the result can be unexpected.

The `bug.php` file contains the buggy code. The `bugSolution.php` file provides a corrected version.

This issue highlights the importance of type checking and using strict comparison operators in PHP to prevent these kinds of errors.