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

use Doctrine\Common\Cache\Cache;

class JsonFactory
{
    const FORMAT_NAME_JSON = "JSON";

    private static $instance;

    /** @var Jacky $jacky */
    private static $jacky;

    public static function create($cache = 'ArrayCache', $debug = false)
    {
        self::$jacky = new Jacky();
        self::$jacky->setCache($cache);
        self::$jacky->setDebug($debug);
        self::$jacky->bootstrap();
    }

    /**
     * @param Cache $cache
     */
    public function setCache(Cache $cache)
    {
        $this->cache = $cache;
    }
}
