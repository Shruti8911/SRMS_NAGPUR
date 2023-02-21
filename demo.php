<?php
  // Sets the top option to be the current year. (IE. the option that is chosen by default).
  $currently_selected = date('Y'); 
  // Year to start available options at
  $earliest_year = 1950; 
  // Set your latest year you want in the range, in this case we use PHP to just set it to the current year.
  $latest_year = date('Y'); 

  print '<select>';
  // Loops over each int[year] from current year, back to the $earliest_year [1950]
  foreach ( range( $latest_year, $earliest_year ) as $i ) {
    // Prints the option with the next year in range.
    print '<option value="'.$i.'"'.($i === $currently_selected ? ' selected="selected"' : '').'>'.$i.'</option>';
  }
  print '</select>';
  ?>