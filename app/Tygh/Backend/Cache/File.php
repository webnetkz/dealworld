<?php
/***************************************************************************
 *                                                                          *
 *   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
 *                                                                          *
 * This  is  commercial  software,  only  users  who have purchased a valid *
 * license  and  accept  to the terms of the  License Agreement can install *
 * and use this program.                                                    *
 *                                                                          *
 ****************************************************************************
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
 * "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
 ****************************************************************************/

namespace Tygh\Backend\Cache;

use Tygh\Exceptions\PermissionsException;

class File extends ABackend
{
    /**
     * File constructor.
     *
     * @param array $config
     *
     * @throws \Tygh\Exceptions\PermissionsException
     */
    public function __construct($config)
    {
        $this->_config = [
            'store_prefix' => !empty($config['store_prefix']) ? $config['store_prefix'] : null,
            'dir_cache'    => $config['dir']['cache_registry']
        ];

        if (fn_mkdir($this->_mapTags('')) == false) {
            throw new PermissionsException('Cache: "' . $this->_mapTags('') . '" directory is not writable');
        }

        parent::__construct($config);

        return true;
    }

    /** @inheritDoc */
    public function set($name, $data, $condition, $cache_level = null, $ttl = null)
    {
        if (empty($data)) {
            return;
        }

        fn_put_contents($this->_mapTags($name) . '/' . $cache_level, serialize([
            'data'   => $data,
            'expiry' => $this->getCacheExpiryTime($condition, $cache_level, $ttl, 0)
        ]));
    }

    /** @inheritDoc */
    public function get($name, $cache_level = null)
    {
        $fname = $this->_mapTags($name) . '/' . $cache_level;

        if (!empty($name) && is_readable($fname)) {
            $cache_data = @unserialize(@file_get_contents($fname));

            if (!empty($cache_data) && (empty($cache_data['expiry']) || $cache_data['expiry'] > TIME)) {
                return [$cache_data['data']];
            } else { // clean up the cache
                fn_rm($fname);
            }
        }

        return false;
    }

    /** @inheritDoc */
    public function clear($tags)
    {
        foreach ($tags as $tag) {
            fn_rm($this->_mapTags($tag, 0), true); // cleanup tags for root and all companies
        }

        return true;
    }

    /** @inheritDoc */
    public function cleanup()
    {
        fn_rm($this->_mapTags('', 0), false);

        return true;
    }

    /**
     * @param      $tags
     * @param null $company_id
     *
     * @return array|mixed
     */
    private function _mapTags($tags, $company_id = null)
    {
        if (!is_array($tags)) {
            $tags = [$tags];
            $return_one = true;
        }

        $company_id = !is_null($company_id) ? $company_id : $this->_company_id;
        $suffix = !empty($company_id) ? ('/' . $company_id) : '';

        foreach ($tags as $k => $v) {
            $tags[$k] = $this->_config['dir_cache'] . (!empty($this->_config['store_prefix']) ? $this->_config['store_prefix'] . '/' : '') . $v . $suffix;
        }

        return !empty($return_one) ? array_shift($tags) : $tags;
    }
}
