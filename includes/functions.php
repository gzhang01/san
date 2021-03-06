<?php

    /**
     * functions.php
     * CS50 Final Project
     *
     * @author: George Zhang
     * @author: Michael O'Brien
     * @author: Leia Wedlund
     *
     * Helper functions.
     */

    require_once("constants.php");

    /**
     * Apologizes to user with message.
     */
    function apologize($message)
    {
        render("apology.php", ["message" => $message]);
        exit;
    }

    /**
     * Facilitates debugging by dumping contents of variable
     * to browser.
     */
    function dump($variable)
    {
        require("../templates/dump.php");
        exit;
    }

    /**
     * Logs out current user, if any.  Based on Example #1 at
     * http://us.php.net/manual/en/function.session-destroy.php.
     */
    function logout()
    {
        // unset any session variables
        $_SESSION = [];

        // expire cookie
        if (!empty($_COOKIE[session_name()]))
        {
            setcookie(session_name(), "", time() - 42000);
        }

        // destroy session
        session_destroy();
    }

    /**
     * merges two arrays
     */
    function merge($array, $array2)
    {
        $return = [];
        for ($i = 0, $j = 0, $len1 = count($array), $len2 = count($array2); $i < $len1 || $j < $len2; ) {
            // if all through with one list, add from the other
            if ($i == $len1)
            {
                $return[] = $array2[$j];
                $j++;
            }
            else if ($j == $len2)
            {
                $return[] = $array[$i];
                $i++;
            }

            // else go through letters of first words in arrays and arrange alphabetically
            else {
                // initializing some helper variables
                $letteri = -1;
                $letterj = -1;
                $leni = strlen($array[$i]);
                $lenj = strlen($array[$j]);

                // do this for every letter until they are different
                do {
                    // this makes function repeatable even for first iteration
                    $letteri++;
                    $letterj++;

                    // put word with smaller value letter first
                    if ($array[$i][$letteri] < $array2[$j][$letterj] || $letteri == $leni) {
                        $return[] = $array[$i];
                        $i++;
                        break;
                    }
                    else if ($array[$i][$letteri] > $array2[$j][$letterj] || $letterj == $lenj) {
                        $return[] = $array2[$j];
                        $j++;
                        break;
                    }
                } while ($array[$i][$letteri] == $array2[$j][$letterj]);
            }
        }
        
        return $return;
    }

    /**
     * Uses mergesort to sort an array
     */
    function alphabetize($array)
    {
        $length = count($array);
        if ($length == 1)
        {
            return $array;
        }
        else
        {
            $arrayleft = alphabetize(array_slice($array, 0, $length / 2));
            $arrayright = alphabetize(array_slice($array, $length / 2));
            $sorted = merge($arrayleft, $arrayright);
        }
        return $sorted;
    }

    /**
     * Executes SQL statement, possibly with parameters, returning
     * an array of all rows in result set or false on (non-fatal) error.
     */
    function query(/* $sql [, ... ] */)
    {
        // SQL statement
        $sql = func_get_arg(0);

        // parameters, if any
        $parameters = array_slice(func_get_args(), 1);

        // try to connect to database
        static $handle;
        if (!isset($handle))
        {
            try
            {
                // connect to database
                $handle = new PDO("mysql:dbname=" . DATABASE . ";host=" . SERVER, USERNAME, PASSWORD);

                // ensure that PDO::prepare returns false when passed invalid SQL
                $handle->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); 
            }
            catch (Exception $e)
            {
                // trigger (big, orange) error
                trigger_error($e->getMessage(), E_USER_ERROR);
                exit;
            }
        }

        // prepare SQL statement
        $statement = $handle->prepare($sql);
        if ($statement === false)
        {
            // trigger (big, orange) error
            trigger_error($handle->errorInfo()[2], E_USER_ERROR);
            exit;
        }

        // execute SQL statement
        $results = $statement->execute($parameters);

        // return result set's rows, if any
        if ($results !== false)
        {
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        else
        {
            return false;
        }
    }

    /**
     * Redirects user to destination, which can be
     * a URL or a relative path on the local host.
     *
     * Because this function outputs an HTTP header, it
     * must be called before caller outputs any HTML.
     */
    function redirect($destination) {
        // handle URL
        if (preg_match("/^https?:\/\//", $destination))
        {
            header("Location: " . $destination);
        }

        // handle absolute path
        else if (preg_match("/^\//", $destination))
        {
            $protocol = (isset($_SERVER["HTTPS"])) ? "https" : "http";
            $host = $_SERVER["HTTP_HOST"];
            header("Location: $protocol://$host$destination");
        }

        // handle relative path
        else
        {
            // adapted from http://www.php.net/header
            $protocol = (isset($_SERVER["HTTPS"])) ? "https" : "http";
            $host = $_SERVER["HTTP_HOST"];
            $path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
            header("Location: $protocol://$host$path/$destination");
        }

        // exit immediately since we're redirecting anyway
        exit;
    }

    /**
     * Renders template, passing in values.
     */
    function render($template, $values = []) {
        // if template exists, render it
        if (file_exists("../templates/$template"))
        {
            // extract variables into local scope
            extract($values);

            // render header
            require("../templates/header.php");

            // render template
            require("../templates/$template");

            // render footer
            require("../templates/footer.php");
        }

        // else err
        else
        {
            trigger_error("Invalid template: $template", E_USER_ERROR);
        }
    }

    /** takes skills from $data and puts them into a string **/
    function append_skills($data) {
        $skills = "";
        for ($i = 1; $i <= MAXSKILLS; $i++)
        {
            $index = 'skill' . $i;
            if ($data[$index] == NULL)
                break;
            if ($i == 1)
                $skills = $skills . $data[$index];
            else
                $skills = $skills . ", " . $data[$index];
        }
        if ($skills == "")
            $skills = "None";
        return $skills;
    }

    /** takes skills_wanted from $data and puts them into string **/
    function append_skills_wanted($data) {
        $skills_wanted = "";
        for ($i = 1; $i <= MAXSKILLSWANTED; $i++)
        {
            $index = 'skill_wanted' . $i;
            if ($data[$index] == NULL)
                break;
            if ($i == 1)
                $skills_wanted = $skills_wanted . $data[$index];
            else
                $skills_wanted = $skills_wanted . ", " . $data[$index];
        }
        if ($skills_wanted == "")
            $skills_wanted = "None";
        return $skills_wanted;
    }
?>
