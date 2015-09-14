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

use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;
use Doctrine\Common\Annotations\CachedReader;
use Doctrine\Common\Cache\ArrayCache;
use Doctrine\Common\Cache\Cache;

class Jacky
{
    private $cache;

    private $debug = false;

    private $reader;

    public function __construct()
    {
        $this->cache = new ArrayCache();
    }

    public function setCache(Cache $cache)
    {
        $this->cache = $cache;
    }

    public function setDebug($flag)
    {
        $this->debug = $flag;
    }

    public function getReader()
    {
        return $this->reader;
    }

    public function bootstrap()
    {
        $this->registerAnnotationNamespace();
        $this->setupReader();
    }

    private function registerAnnotationNamespace()
    {
        AnnotationRegistry::registerAutoloadNamespace(
            "MehrAlsNix\\Jacky\\Annotations",
            __DIR__ . "/Annotations"
        );
    }

    private function setupReader()
    {
        $this->reader = new CachedReader(
            new AnnotationReader(),
            $this->cache,
            $this->debug
        );
    }
}
