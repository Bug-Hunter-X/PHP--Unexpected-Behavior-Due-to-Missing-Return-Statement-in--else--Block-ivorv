function myFunction() {
  // Some code here that might cause an error
  if (someCondition) {
    return 'something';
  } else {
    // Missing return statement
  }
}

// Example of calling the function and not handling missing return
$result = myFunction();
// Further processing of the $result without checking if it's valid
echo $result; // Potential error if someCondition is false