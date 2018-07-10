<?php
// current date
echo "Current date: " . (new DateTime())->format('F d, Y');

echo "<hr>";

// first day of selected date
echo "First day of current date: " . (new DateTime())->modify('first day of this month')->format('F d, Y');

echo "<hr>";

// current year
echo "Current year: " . (new DateTime())->format('Y');

echo "<hr>";

// last year
echo "Last year: " . (new DateTime())->modify('-1 year')->format('Y');

echo "<hr>";

// date last year
echo "Date Last year: " . (new DateTime())->modify('-1 year')->format('F d, Y');

echo "<hr>";

// first day of date last year
echo "First day of date last year: " . (new DateTime())->modify('-1 year first day of this month')->format('F d, Y');
