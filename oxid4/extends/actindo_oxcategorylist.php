<?php

require_once getShopBasePath() . 'core/oxcategory.php';
require_once getShopBasePath() . 'core/oxcategorylist.php';

class actindo_oxCategoryList extends oxCategoryList
{
    public function __construct()
    {
      parent::__construct();
    }


    function _ppRemoveInactiveCategories()
    {
      // do NOT remove inactive categories from tree, so just do nothing
    }
}


?>