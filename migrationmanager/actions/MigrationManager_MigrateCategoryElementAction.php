<?php
namespace Craft;

/**
 * Delete Element Action
 *
 * @author    Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @copyright Copyright (c) 2014, Pixel & Tonic, Inc.
 * @license   http://craftcms.com/license Craft License Agreement
 * @link      http://craftcms.com
 * @package   craft.app.elementactions
 * @since     2.3
 */
class MigrationManager_MigrateCategoryElementAction extends BaseElementAction
{
	// Public Methods
	// =========================================================================

	/**
	 * @inheritDoc IComponentType::getName()
	 *
	 * @return string
	 */
	public function getName()
	{
		return Craft::t('Create migration');
	}

	/**
	 * @inheritDoc IElementAction::performAction()
	 *
	 * @param ElementCriteriaModel $criteria
	 *
	 * @return bool
	 */
	public function performAction(ElementCriteriaModel $criteria)
	{

	    $params['category'] = $criteria->ids();

        if (craft()->migrationManager_migrations->createContentMigration($params)) {
            $this->setMessage(Craft::t('Migration created.'));
            return true;

        } else {
            $this->setMessage(Craft::t('Migration could not be created.'));
            return false;

        }

	}


}