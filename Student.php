<?php
/**
 * Description of Student
 *
 * @author Jathavan Arumugam
 */
class Student {
    
    /**
     * This is the constructor, it creates
     * the last name, firstname, and initialises
     * the email and grades arrays
     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    /**
     * This function calculates their average grade
     * and returns the average value
     * @return double $total
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    
    /**
     * A setter function that assigns the email addresses
     * that each student has with the type of email. 
     * @param string $email
     * @param string $address
     */
    function add_email($which, $address){
        $this->emails[$which] = $address;
    }
    
    /**
     * A setter function that adds the grade to the grades array.
     * @param double $grade
     */
    function add_grade($grade){
        $this->grades[] = $grade;
    }
    
    /**
     * A function that returns the students information in a 
     * stringified format. 
     * @return string
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
            $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
    
}
