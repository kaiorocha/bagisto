<?php

namespace Webkul\SAASCustomizer\Repositories;

use Webkul\Core\Eloquent\Repository;

/**
 * CompanyAddress Reposotory
 *
 * @author Prashant Singh <prashant.singh852@webkul.com> @prashant-webkul
 * @copyright 2018 Webkul Software Pvt Ltd (http://www.webkul.com)
 */
class CompanyAddressRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'Webkul\SAASCustomizer\Models\CompanyAddress';
    }
}