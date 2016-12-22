# Test functional test
The extension can be used to check if the basic implementation of functional test work properly.

# Hot to test

- install the extension in an existing TYPO3 7.6 instance
- run ```composer update```
- run the following command

```
../bin/phpunit --process-isolation --bootstrap typo3/sysext/core/Build/FunctionalTestsBootstrap.php typo3conf/ext/functionaltest_test/Tests/Functional/
```
