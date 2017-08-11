<?php
namespace Craft;

/**
 * Generated migration
 */
class m170809_205124_migrationmanager_import extends BaseMigration
{
	/**
	 * Any migration code in here is wrapped inside of a transaction.
	 * Returning false will rollback the migration
	 *
	 * @return bool
	 */
	public function safeUp()
	{
	    $json = '{"settings":{"dependencies":[],"elements":[]},"content":{"entries":[{"slug":"blog-entry","section":"blog","locales":{"en_us":{"slug":"blog-entry","section":"blog","enabled":"1","locale":"en_us","localeEnabled":"1","postDate":{"date":"2017-08-09 20:23:00.000000","timezone_type":3,"timezone":"UTC"},"expiryDate":null,"title":"Blog entry ","entryType":"blog","body":"<p>Aliquam facilisis, ipsum ac tristique sodales, enim sapien efficitur ligula, quis venenatis justo velit ut leo. Morbi gravida sagittis tortor, a pellentesque dolor auctor a. Aliquam consequat malesuada sollicitudin. Nunc a aliquam augue. In sit amet nulla semper, bibendum dolor ac, euismod elit. In odio ex, vehicula et sagittis sit amet, vestibulum eu ligula. Aenean tincidunt mauris varius accumsan auctor. Morbi sit amet dui ac lacus finibus molestie. Suspendisse eget ex ultricies felis faucibus egestas. Sed convallis elementum sapien, imperdiet eleifend lacus dapibus ut. Donec tellus justo, pulvinar quis euismod ut, rhoncus at arcu. Donec convallis eu libero in convallis. Pellentesque facilisis lacinia nisi, porta auctor magna efficitur a. Nam suscipit metus sit amet nunc semper, ut cursus velit pretium. Cras ac dolor mattis, bibendum lorem ac, vehicula mi.<\/p>","asset":[{"elementType":"Asset","filename":"abigail-lynn-316133.jpg","folder":"Local","source":"local"}],"category":[{"elementType":"Category","slug":"b-category","category":"categoryGroup"}],"entry":[{"elementType":"Entry","slug":"homepage","section":"homepage"}],"superTable":{"new1":{"type":1,"fields":{"tTitle":"Link","tLink":{"type":"custom","value":"http:\/\/google.com","defaultText":"","customText":false,"target":false,"custom":"http:\/\/google.com"}}}}},"es_us":{"slug":"blog-test","section":"blog","enabled":"1","locale":"es_us","localeEnabled":"0","postDate":{"date":"2017-08-09 20:23:00.000000","timezone_type":3,"timezone":"UTC"},"expiryDate":null,"title":"Blog test","entryType":"blog","body":"<p>this is spanish<\/p>","asset":[{"elementType":"Asset","filename":"abigail-lynn-316133.jpg","folder":"Local","source":"local"}],"category":[{"elementType":"Category","slug":"b-category","category":"categoryGroup"}],"entry":[{"elementType":"Entry","slug":"homepage","section":"homepage"}],"superTable":{"new1":{"type":1,"fields":{"tTitle":"spanish","tLink":{"type":"custom","value":"http:\/\/yahoo.es","defaultText":"","customText":0,"target":false,"custom":"http:\/\/yahoo.es"}}}}}}}]}}';
        return craft()->migrationManager_migrations->import($json);
    }

}
