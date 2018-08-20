<?php
namespace II\Utilities;

use ICanBoogie\Inflector as InflectorClass;

class Inflector
{

    protected static $inflector;

    protected static function loadInflector()
    {
        if(!(static::$inflector instanceof InflectorClass))
            static::$inflector = InflectorClass::get(InflectorClass::DEFAULT_LOCALE);
        return static::$inflector;
	}
	
	/**
	 * {@link camelize()} option to downcase the first letter.
	 */
	const DOWNCASE_FIRST_LETTER = true;

	/**
	 * {@link camelize()} option to keep the first letter as is.
	 */
	const UPCASE_FIRST_LETTER = false;

    /**
	 * Returns the plural form of the word in the string.
	 *
	 * <pre>
	 * $this->pluralize('post');       // "posts"
	 * $this->pluralize('children');   // "child"
	 * $this->pluralize('sheep');      // "sheep"
	 * $this->pluralize('words');      // "words"
	 * $this->pluralize('CamelChild'); // "CamelChildren"
	 * </pre>
	 *
	 * @param string $word
	 *
	 * @return string
	 */
	public static function pluralize($word)
	{
        $inflector = static::loadInflector();
        return $inflector->pluralize($word);
	}
	/**
	 * The reverse of {@link pluralize}, returns the singular form of a word in a string.
	 *
	 * <pre>
	 * $this->singularize('posts');         // "post"
	 * $this->singularize('children');      // "child"
	 * $this->singularize('sheep');         // "sheep"
	 * $this->singularize('word');          // "word"
	 * $this->singularize('CamelChildren'); // "CamelChild"
	 * </pre>
	 *
	 * @param string $word
	 *
	 * @return string
	 */
	public static function singularize($word)
	{
        $inflector = static::loadInflector();
        return $inflector->singularize($word);
	}
	/**
	 * By default, {@link camelize} converts strings to UpperCamelCase.
	 *
	 * {@link camelize} will also convert "/" to "\" which is useful for converting paths to
	 * namespaces.
	 *
	 * <pre>
	 * $this->camelize('active_model');                // 'ActiveModel'
	 * $this->camelize('active_model', true);          // 'activeModel'
	 * $this->camelize('active_model/errors');         // 'ActiveModel\Errors'
	 * $this->camelize('active_model/errors', true);   // 'activeModel\Errors'
	 * </pre>
	 *
	 * As a rule of thumb you can think of {@link camelize} as the inverse of {@link underscore},
	 * though there are cases where that does not hold:
	 *
	 * <pre>
	 * $this->camelize($this->underscore('SSLError')); // "SslError"
	 * </pre>
	 *
	 * @param string $term
	 * @param bool $downcase_first_letter One of {@link UPCASE_FIRST_LETTER},
	 * {@link DOWNCASE_FIRST_LETTER}.
	 *
	 * @return string
	 */
	public static function camelize($term, $downcase_first_letter = self::DOWNCASE_FIRST_LETTER)
	{
        $inflector = static::loadInflector();
        return $inflector->camelize($term, $downcase_first_letter);
	}
	/**
	 * Makes an underscored, lowercase form from the expression in the string.
	 *
	 * Changes "\" to "/" to convert namespaces to paths.
	 *
	 * <pre>
	 * $this->underscore('ActiveModel');        // 'active_model'
	 * $this->underscore('ActiveModel\Errors'); // 'active_model/errors'
	 * </pre>
	 *
	 * As a rule of thumb you can think of {@link underscore} as the inverse of {@link camelize()},
	 * though there are cases where that does not hold:
	 *
	 * <pre>
	 * $this->camelize($this->underscore('SSLError')); // "SslError"
	 * </pre>
	 *
	 * @param string $camel_cased_word
	 *
	 * @return string
	 */
	public static function underscore($camel_cased_word)
	{
        $inflector = static::loadInflector();
        return $inflector->underscore($camel_cased_word);
	}
	/**
	 * Capitalizes the first word and turns underscores into spaces and strips a trailing "_id",
	 * if any. Like {@link titleize()}, this is meant for creating pretty output.
	 *
	 * <pre>
	 * $this->humanize('employee_salary'); // "Employee salary"
	 * $this->humanize('author_id');       // "Author"
	 * </pre>
	 *
	 * @param string $lower_case_and_underscored_word
	 *
	 * @return string
	 */
	public static function humanize($lower_case_and_underscored_word)
	{
        $inflector = static::loadInflector();
        return $inflector->humanize($lower_case_and_underscored_word);
	}
	/**
	 * Capitalizes all the words and replaces some characters in the string to create a nicer
	 * looking title. {@link titleize()} is meant for creating pretty output. It is not used in
	 * the Rails internals.
	 *
	 * <pre>
	 * $this->titleize('man from the boondocks');  // "Man From The Boondocks"
	 * $this->titleize('x-men: the last stand');   // "X Men: The Last Stand"
	 * $this->titleize('TheManWithoutAPast');      // "The Man Without A Past"
	 * $this->titleize('raiders_of_the_lost_ark'); // "Raiders Of The Lost Ark"
	 * </pre>
	 *
	 * @param string $str
	 *
	 * @return string
	 */
	public static function titleize($str)
	{
        $inflector = static::loadInflector();
        return $inflector->titleize($str);
	}
	/**
	 * Replaces underscores with dashes in the string.
	 *
	 * <pre>
	 * $this->dasherize('puni_puni'); // "puni-puni"
	 * </pre>
	 *
	 * @param string $underscored_word
	 *
	 * @return string
	 */
	public static function dasherize($underscored_word)
	{
        $inflector = static::loadInflector();
        return $inflector->dasherize($underscored_word);
	}
	/**
	 * Makes an hyphenated, lowercase form from the expression in the string.
	 *
	 * This is a combination of {@link underscore} and {@link dasherize}.
	 *
	 * @param string $str
	 *
	 * @return string
	 */
	public static function hyphenate($str)
	{
        $inflector = static::loadInflector();
        return $inflector->hyphenate($str);
	}
	/**
	 * Returns the suffix that should be added to a number to denote the position in an ordered
	 * sequence such as 1st, 2nd, 3rd, 4th.
	 *
	 * <pre>
	 * $this->ordinal(1);     // "st"
	 * $this->ordinal(2);     // "nd"
	 * $this->ordinal(1002);  // "nd"
	 * $this->ordinal(1003);  // "rd"
	 * $this->ordinal(-11);   // "th"
	 * $this->ordinal(-1021); // "st"
	 * </pre>
	 *
	 * @param int $number
	 *
	 * @return string
	 */
	public static function ordinal($number)
	{
        $inflector = static::loadInflector();
        return $inflector->ordinal($number);
	}
	/**
	 * Turns a number into an ordinal string used to denote the position in an ordered sequence
	 * such as 1st, 2nd, 3rd, 4th.
	 *
	 * <pre>
	 * $this->ordinalize(1);     // "1st"
	 * $this->ordinalize(2);     // "2nd"
	 * $this->ordinalize(1002);  // "1002nd"
	 * $this->ordinalize(1003);  // "1003rd"
	 * $this->ordinalize(-11);   // "-11th"
	 * $this->ordinalize(-1021); // "-1021st"
	 * </pre>
	 *
	 * @param int $number
	 *
	 * @return string
	 */
	public static function ordinalize($number)
	{
        $inflector = static::loadInflector();
        return $inflector->ordinalize($number);
    }
    
    // public static function camelize($string)
    // {
    //     if(!is_string($string))
    //         return $string;
    //     return implode('', array_map(function($value) {
    //         static $i = 0; $i++;
    //         if($i === 1) return strtolower($value);
    //         return strtoupper(substr($value, 0, 1)) . strtolower(substr($value, 1));
    //     }, explode(' ', preg_replace('/[^a-zA-Z0-9_]+|\s+/', ' ', strtolower($string)))));
    // }

}