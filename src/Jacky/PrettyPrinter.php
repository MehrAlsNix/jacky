<?php
/**
 * Jacky
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 * @copyright 2015 MehrAlsNix (http://www.mehralsnix.de)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://github.com/MehrAlsNix/Jacky
 */

namespace MehrAlsNix\Jacky;

interface PrettyPrinter
{
    /*
    /**********************************************************
    /* First methods that act both as events, and expect
    /* output for correct functioning (i.e something gets
    /* output even when not pretty-printing)
    /**********************************************************
     */

    // // // Root-level handling:

    /**
     * Method called after a root-level value has been completely
     * output, and before another value is to be output.
     *<p>
     * Default
     * handling (without pretty-printing) will output a space, to
     * allow values to be parsed correctly. Pretty-printer is
     * to output some other suitable and nice-looking separator
     * (tab(s), space(s), linefeed(s) or any combination thereof).
     */
    public function writeRootValueSeparator(JsonGenerator $jg);

    // // Object handling

    /**
     * Method called when an Object value is to be output, before
     * any fields are output.
     *<p>
     * Default handling (without pretty-printing) will output
     * the opening curly bracket.
     * Pretty-printer is
     * to output a curly bracket as well, but can surround that
     * with other (white-space) decoration.
     */
    public function writeStartObject(JsonGenerator $gen);

    /**
     * Method called after an Object value has been completely output
     * (minus closing curly bracket).
     *<p>
     * Default handling (without pretty-printing) will output
     * the closing curly bracket.
     * Pretty-printer is
     * to output a curly bracket as well, but can surround that
     * with other (white-space) decoration.
     *
     * @param nrOfEntries Number of direct members of the array that
     *   have been output
     */
    public function writeEndObject(JsonGenerator $gen, $nrOfEntries);

    /**
     * Method called after an object entry (field:value) has been completely
     * output, and before another value is to be output.
     *<p>
     * Default handling (without pretty-printing) will output a single
     * comma to separate the two. Pretty-printer is
     * to output a comma as well, but can surround that with other
     * (white-space) decoration.
     */
    public function writeObjectEntrySeparator(JsonGenerator $gen);

    /**
     * Method called after an object field has been output, but
     * before the value is output.
     *<p>
     * Default handling (without pretty-printing) will output a single
     * colon to separate the two. Pretty-printer is
     * to output a colon as well, but can surround that with other
     * (white-space) decoration.
     */
    public function writeObjectFieldValueSeparator(JsonGenerator $gen);

    // // // Array handling

    /**
     * Method called when an Array value is to be output, before
     * any member/child values are output.
     *<p>
     * Default handling (without pretty-printing) will output
     * the opening bracket.
     * Pretty-printer is
     * to output a bracket as well, but can surround that
     * with other (white-space) decoration.
     */
    public function writeStartArray(JsonGenerator $gen);

    /**
     * Method called after an Array value has been completely output
     * (minus closing bracket).
     *<p>
     * Default handling (without pretty-printing) will output
     * the closing bracket.
     * Pretty-printer is
     * to output a bracket as well, but can surround that
     * with other (white-space) decoration.
     *
     * @param nrOfValues Number of direct members of the array that
     *   have been output
     */
    public function writeEndArray(JsonGenerator $gen, $nrOfValues);

    /**
     * Method called after an array value has been completely
     * output, and before another value is to be output.
     *<p>
     * Default handling (without pretty-printing) will output a single
     * comma to separate the two. Pretty-printer is
     * to output a comma as well, but can surround that with other
     * (white-space) decoration.
     */
    public function writeArrayValueSeparator(JsonGenerator $gen);

    /*
    /**********************************************************
    /* Then events that by default do not produce any output
    /* but that are often overridden to add white space
    /* in pretty-printing mode
    /**********************************************************
     */

    /**
     * Method called after array start marker has been output,
     * and right before the first value is to be output.
     * It is <b>not</b> called for arrays with no values.
     *<p>
     * Default handling does not output anything, but pretty-printer
     * is free to add any white space decoration.
     */
    public function beforeArrayValues(JsonGenerator $gen);

    /**
     * Method called after object start marker has been output,
     * and right before the field name of the first entry is
     * to be output.
     * It is <b>not</b> called for objects without entries.
     *<p>
     * Default handling does not output anything, but pretty-printer
     * is free to add any white space decoration.
     */
    public function beforeObjectEntries(JsonGenerator $gen);
}
