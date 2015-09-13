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

use janeklb\json\JSONCharInputReader;
use janeklb\json\JSONChunkProcessor;
use janeklb\json\JSONChunkProcessorImpl;

class JsonProcessor implements JSONChunkProcessor
{
    public $numProcessed = 0;

    public function process($jsonChunk)
    {
        echo "\n\nDecoding ";
        echo $jsonChunk;
        echo "\n";

        $obj = json_decode($jsonChunk);

        if ($obj)
        {
            $this->numProcessed++;
        }

        var_dump($obj);
        echo "\n";
    }
}
