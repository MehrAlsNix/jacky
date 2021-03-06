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

class JsonParser
{
    private $reader;

    public function __construct()
    {
        $this->reader = new \JsonStreamingParser_Parser();
    }

    public function read($char)
    {
        for ($c = 0; $c < strlen($char) - 1; $c++) {
            echo $char{$c};
            $this->reader->readChar($char{$c});
        }
    }
}
